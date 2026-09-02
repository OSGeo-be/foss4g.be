<script setup lang="ts">
import { ref, computed } from 'vue'
import { useI18n } from 'vue-i18n'
import scheduleDataJson from '~/assets/schedule-data.json'

// i18n
const { t } = useI18n()

// —————————————————————————————————————————————————————————————
// Type Definitions
// —————————————————————————————————————————————————————————————
interface Speaker {
  readonly name: string
  readonly organization: string | null
}

interface Talk {
  readonly track: 'track_1' | 'track_2' | 'track_3'
  readonly title: string
  readonly speakers: readonly Speaker[]
  readonly languages?: readonly ('EN' | 'FR' | 'NL')[]
  readonly abstract?: string
  readonly duration?: number
  readonly tags?: readonly string[]
  readonly link?: string
}

interface FullWidthEvent {
  readonly title: string
  readonly speakers: readonly Speaker[]
  readonly type: EventType
  readonly abstract?: string
  readonly tags?: readonly string[]
}

interface TimeSlot {
  readonly time: string
  readonly talks?: readonly Talk[]
  readonly event?: FullWidthEvent
}

enum EventType {
  REGISTRATION = 'registration',
  BREAK = 'break',
  MEETING = 'meeting',
  SOCIAL = 'social',
  INFO = 'info',
  TALK = 'talk',
  KEYNOTE = 'keynote'
}

interface EventMetadata {
  readonly type: EventType
  readonly icon: string
  readonly bgColor: string
  readonly textColor: string
  readonly borderColor: string
}

// —————————————————————————————————————————————————————————————
// Constants
// —————————————————————————————————————————————————————————————
const TRACK_CONFIG = computed(() => ({
  track_1: { label: t('schedule.filters.track1'), color: 'bronze' },
  track_2: { label: t('schedule.filters.track2'), color: 'bronze' },
  track_3: { label: t('schedule.filters.track3'), color: 'bronze' }
}))

const LANGUAGE_CONFIG = computed(() => ({
  EN: { label: t('schedule.languages.english'), flag: '🇬🇧', code: 'EN' },
  FR: { label: t('schedule.languages.french'), flag: '🇫🇷', code: 'FR' },
  NL: { label: t('schedule.languages.dutch'), flag: '🇳🇱', code: 'NL' }
}))

// —————————————————————————————————————————————————————————————
// Schedule Data
// —————————————————————————————————————————————————————————————
const scheduleData: readonly TimeSlot[] = scheduleDataJson.map(item => ({
  time: item.time,
  ...(item.event && { 
    event: {
      ...item.event,
      type: item.event.type as EventType
    }
  }),
  ...(item.talks && { talks: item.talks })
})) as TimeSlot[]

// —————————————————————————————————————————————————————————————
// Reactive State
// —————————————————————————————————————————————————————————————
const selectedTrack = ref<'all' | 'track_1' | 'track_2' | 'track_3'>('all')
const searchQuery = ref('')
const showOnlyTalks = ref(false)
const expandedTalks = ref<Set<string>>(new Set())

// —————————————————————————————————————————————————————————————
// Computed Properties
// —————————————————————————————————————————————————————————————
const filteredSchedule = computed(() => {
  let filtered = [...scheduleData]
  
  if (searchQuery.value) {
    const query = searchQuery.value.toLowerCase()
    filtered = filtered.filter(slot => {
      // Check full-width events
      if (slot.event) {
        return slot.event.title.toLowerCase().includes(query) ||
          slot.event.speakers.some(s => 
            s.name.toLowerCase().includes(query) ||
            s.organization?.toLowerCase().includes(query)
          )
      }
      
      // Check talks
      if (slot.talks) {
        const matchingTalks = slot.talks.filter(talk =>
          talk.title.toLowerCase().includes(query) ||
          talk.speakers.some(s => 
            s.name.toLowerCase().includes(query) ||
            s.organization?.toLowerCase().includes(query)
          )
        )
        return matchingTalks.length > 0
      }
      
      return false
    }).map(slot => {
      // For slots with talks, filter the matching talks only
      if (slot.talks) {
        const matchingTalks = slot.talks.filter(talk =>
          talk.title.toLowerCase().includes(query) ||
          talk.speakers.some(s => 
            s.name.toLowerCase().includes(query) ||
            s.organization?.toLowerCase().includes(query)
          )
        )
        return { ...slot, talks: matchingTalks }
      }
      return slot
    })
  }
  
  if (selectedTrack.value !== 'all') {
    filtered = filtered.filter(slot => {
      // Keep full-width events
      if (slot.event) return true
      
      // Filter talks by track
      if (slot.talks) {
        const matchingTalks = slot.talks.filter(t => t.track === selectedTrack.value)
        return matchingTalks.length > 0
      }
      
      return false
    }).map(slot => {
      if (slot.talks) {
        const matchingTalks = slot.talks.filter(t => t.track === selectedTrack.value)
        return { ...slot, talks: matchingTalks }
      }
      return slot
    })
  }
  
  if (showOnlyTalks.value) {
    filtered = filtered.filter(slot => {
      // Exclude full-width events when showing only talks
      if (slot.event) return false
      
      // Filter talks with speakers
      if (slot.talks) {
        const matchingTalks = slot.talks.filter(t => t.speakers.length > 0)
        return matchingTalks.length > 0
      }
      
      return false
    }).map(slot => {
      if (slot.talks) {
        const matchingTalks = slot.talks.filter(t => t.speakers.length > 0)
        return { ...slot, talks: matchingTalks }
      }
      return slot
    })
  }
  
  return filtered
})

const upcomingSlot = computed(() => {
  const now = new Date()
  const currentTime = now.getHours() * 60 + now.getMinutes()

  return scheduleData.find(slot => {
    const [hours, minutes] = slot.time.split(':').map(Number)
    const slotTime = hours * 60 + minutes
    return slotTime > currentTime
  })
})

const isEventDay = computed(() => {
  const now = new Date()
  return now.getMonth() === 9 && now.getDate() === 15 // October (0-indexed) 15th
})

const scheduleStats = computed(() => {
  const talks = scheduleData.reduce((acc, slot) => {
    if (slot.talks) {
      return acc + slot.talks.filter(t => t.speakers.length > 0).length
    }
    return acc
  }, 0)
  
  const speakers = new Set<string>()
  scheduleData.forEach(slot => {
    if (slot.talks) {
      slot.talks.forEach(talk => {
        talk.speakers.forEach(speaker => {
          speakers.add(speaker.name)
        })
      })
    }
    if (slot.event) {
      slot.event.speakers.forEach(speaker => {
        speakers.add(speaker.name)
      })
    }
  })
  
  const duration = (() => {
    const firstSlot = scheduleData[0]?.time || '08:30'
    const lastSlot = scheduleData[scheduleData.length - 1]?.time || '17:30'
    const [startHours] = firstSlot.split(':').map(Number)
    const [endHours] = lastSlot.split(':').map(Number)
    return endHours - startHours
  })()
  
  return { talks, speakers: speakers.size, duration }
})

// —————————————————————————————————————————————————————————————
// Helper Functions
// —————————————————————————————————————————————————————————————
function getEventMetadata(type: EventType): EventMetadata {
  
  const metadata: Record<EventType, EventMetadata> = {
    [EventType.REGISTRATION]: {
      type: EventType.REGISTRATION,
      icon: 'mdiAccountCheck',
      bgColor: 'bg-gray-50',
      textColor: 'text-gray-800',
      borderColor: 'border-gray-200'
    },
    [EventType.BREAK]: {
      type: EventType.BREAK,
      icon: 'mdiCoffee',
      bgColor: 'bg-warning/5',
      textColor: 'text-warning-dark',
      borderColor: 'border-warning/20'
    },
    [EventType.MEETING]: {
      type: EventType.MEETING,
      icon: 'mdiAccountGroup',
      bgColor: 'bg-primary/5',
      textColor: 'text-primary-dark',
      borderColor: 'border-primary/20'
    },
    [EventType.SOCIAL]: {
      type: EventType.SOCIAL,
      icon: 'mdiGlassMugVariant',
      bgColor: 'bg-neutral/5',
      textColor: 'text-neutral-dark',
      borderColor: 'border-neutral/20'
    },
    [EventType.INFO]: {
      type: EventType.INFO,
      icon: 'mdiInformation',
      bgColor: 'bg-gray-50',
      textColor: 'text-gray-700',
      borderColor: 'border-gray-200'
    },
    [EventType.TALK]: {
      type: EventType.TALK,
      icon: 'mdiMicrophone',
      bgColor: 'bg-white',
      textColor: 'text-gray-900',
      borderColor: 'border-gray-200'
    },
    [EventType.KEYNOTE]: {
      type: EventType.KEYNOTE,
      icon: 'mdiAccountVoice',
      bgColor: 'bg-primary/5',
      textColor: 'text-primary-dark',
      borderColor: 'border-primary/30'
    }
  }
  
  return metadata[type]
}

function getTrackConfig(track: Talk['track']) {
  return TRACK_CONFIG.value[track]
}

function formatSpeakerInfo(speakers: readonly Speaker[]): string {
  if (speakers.length === 0) return ''
  
  return speakers.map(speaker => {
    if (speaker.organization) {
      return `${speaker.name} • ${speaker.organization}`
    }
    return speaker.name
  }).join(' / ')
}

function formatTimeRange(time: string, duration = 30): string {
  const [hours, minutes] = time.split(':').map(Number)
  const endMinutes = minutes + duration
  const endHours = hours + Math.floor(endMinutes / 60)
  const formattedEndMinutes = (endMinutes % 60).toString().padStart(2, '0')
  
  return `${time} - ${endHours}:${formattedEndMinutes}`
}

function getEventDuration(eventType: EventType): number {
  switch (eventType) {
    case EventType.BREAK:
      return 20 // Coffee breaks are 20 minutes
    default:
      return 30 // Default duration for other events
  }
}

function isCurrentTimeSlot(time: string): boolean {
  const now = new Date()
  const [hours, minutes] = time.split(':').map(Number)
  const slotStart = hours * 60 + minutes
  const slotEnd = slotStart + 30
  const currentTime = now.getHours() * 60 + now.getMinutes()
  
  return currentTime >= slotStart && currentTime < slotEnd
}

function getTalksByTrack(talks: readonly Talk[]): Record<string, Talk | undefined> {
  return {
    track_1: talks.find(t => t.track === 'track_1'),
    track_2: talks.find(t => t.track === 'track_2'),
    track_3: talks.find(t => t.track === 'track_3')
  }
}

function formatLanguages(languages: readonly ('EN' | 'FR' | 'NL')[] = []): Array<{ flag: string; label: string; code: string }> {
  return languages.map(lang => LANGUAGE_CONFIG.value[lang])
}

function getTalkId(time: string, track: string): string {
  return `${time}-${track}`
}

function toggleTalkExpansion(time: string, track: string): void {
  const talkId = getTalkId(time, track)
  if (expandedTalks.value.has(talkId)) {
    expandedTalks.value.delete(talkId)
  } else {
    expandedTalks.value.add(talkId)
  }
}

function isTalkExpanded(time: string, track: string): boolean {
  return expandedTalks.value.has(getTalkId(time, track))
}
</script>

<template>
  <div class="min-h-screen bg-white">
    <!-- Hero Section -->
    <header class="bg-primary-dark text-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20">
        <div class="text-center">
          <h1 class="text-4xl sm:text-5xl font-bold mb-4">
            {{ t('schedule.title') }}
          </h1>
          <p class="text-lg text-white/90 mb-12">
            {{ t('schedule.subtitle') }}
          </p>
          
          <!-- Stats -->
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 max-w-2xl mx-auto">
            <div class="text-center">
              <div class="text-3xl font-bold">{{ scheduleStats.talks }}</div>
              <div class="text-sm text-white/80 mt-1">{{ t('schedule.stats.presentations') }}</div>
            </div>
            <div class="text-center">
              <div class="text-3xl font-bold">{{ scheduleStats.speakers }}</div>
              <div class="text-sm text-white/80 mt-1">{{ t('schedule.stats.speakers') }}</div>
            </div>
            <div class="text-center">
              <div class="text-3xl font-bold">3</div>
              <div class="text-sm text-white/80 mt-1">{{ t('schedule.stats.tracks') }}</div>
            </div>
            <div class="text-center">
              <div class="text-3xl font-bold">{{ scheduleStats.duration }}h</div>
              <div class="text-sm text-white/80 mt-1">{{ t('schedule.stats.duration') }}</div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Filters -->
    <section class="sticky top-14 z-40 bg-white/95 backdrop-blur-sm border-b border-gray-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex flex-col sm:flex-row gap-4">
          <!-- Search -->
          <div class="flex-1">
            <div class="relative flex items-center">
              <MdiIcon 
                icon="mdiMagnify" 
                class="absolute left-3 text-gray-400 pointer-events-none"
                size="1.25em"
              />
              <input
                v-model="searchQuery"
                type="text"
                :placeholder="t('schedule.search.placeholder')"
                class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:border-primary focus:ring-2 focus:ring-primary/10 transition-colors"
                aria-label="Search schedule"
              >
            </div>
          </div>
          
          <!-- Track Filters -->
          <div class="flex gap-2 overflow-x-auto scrollbar-hide">
            <button
              @click="selectedTrack = 'all'"
              :class="[
                'flex-shrink-0 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors',
                selectedTrack === 'all'
                  ? 'bg-primary text-white'
                  : 'bg-gray-100 text-gray-700 hover:bg-gray-200'
              ]"
              :aria-pressed="selectedTrack === 'all'"
            >
              {{ t('schedule.filters.allTracks') }}
            </button>
            <button
              v-for="(config, track) in TRACK_CONFIG"
              :key="track"
              @click="selectedTrack = track"
              :class="[
                'flex-shrink-0 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors',
                selectedTrack === track
                  ? 'bg-primary text-white'
                  : 'bg-gray-100 text-gray-700 hover:bg-gray-200'
              ]"
              :aria-pressed="selectedTrack === track"
            >
              {{ config.label }}
            </button>
          </div>
          
          <!-- Toggle -->
          <label class="flex items-center gap-2 cursor-pointer">
            <input
              v-model="showOnlyTalks"
              type="checkbox"
              class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary focus:ring-2"
              aria-describedby="talks-only-description"
            >
            <span id="talks-only-description" class="text-sm text-gray-700">{{ t('schedule.filters.talksOnly') }}</span>
          </label>
        </div>
      </div>
    </section>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <!-- Next Event Highlight -->
      <section v-if="upcomingSlot && isEventDay" class="mb-8" aria-labelledby="upcoming-heading">
        <div class="bg-warning/5 border border-warning/20 rounded-lg p-6">
          <div class="flex items-center gap-2 mb-4">
            <div class="w-2 h-2 bg-warning rounded-full animate-pulse" aria-hidden="true"></div>
            <h2 id="upcoming-heading" class="text-sm font-semibold text-warning-dark uppercase tracking-wide">
              {{ t('schedule.upcoming.upNext') }} {{ upcomingSlot.time }}
            </h2>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Full-width event -->
            <article 
              v-if="upcomingSlot.event"
              class="bg-white rounded-lg p-4 border border-gray-200 col-span-full md:col-span-3"
            >
              <h3 class="font-semibold text-gray-900 mb-1">{{ upcomingSlot.event.title }}</h3>
              <p v-if="upcomingSlot.event.speakers.length > 0" class="text-sm text-gray-600">
                {{ formatSpeakerInfo(upcomingSlot.event.speakers) }}
              </p>
            </article>
            
            <!-- Individual talks -->
            <article
              v-if="upcomingSlot.talks"
              v-for="(talk, idx) in upcomingSlot.talks"
              :key="idx"
              class="bg-white rounded-lg p-4 border border-gray-200"
            >
              <h3 class="font-semibold text-gray-900 mb-1">{{ talk.title }}</h3>
              <p v-if="talk.speakers.length > 0" class="text-sm text-gray-600">
                {{ formatSpeakerInfo(talk.speakers) }}
              </p>
            </article>
          </div>
        </div>
      </section>

      <!-- Schedule Timeline -->
      <section aria-labelledby="schedule-heading">
        <h2 id="schedule-heading" class="sr-only">Conference Schedule</h2>
        
        <div class="space-y-8">
          <article
            v-for="(slot, slotIdx) in filteredSchedule"
            :key="`slot-${slotIdx}`"
            :class="[
              'relative',
              isCurrentTimeSlot(slot.time) && isEventDay && 'ring-2 ring-primary ring-offset-4 rounded-lg'
            ]"
          >
            <!-- Time Label -->
            <header class="flex items-center gap-4 mb-4">
              <time 
                :datetime="slot.time"
                class="w-16 h-12 bg-gray-100 rounded-lg flex items-center justify-center"
              >
                <span class="text-sm font-bold text-gray-700">{{ slot.time }}</span>
              </time>
              <div class="h-px flex-1 bg-gray-200 max-w-xs" aria-hidden="true"></div>
            </header>

            <!-- Talks Content -->
            <div class="ml-20">
              <!-- Full-Width Events -->
              <div v-if="slot.event" class="mb-6">
                <div
                  :class="[
                    'rounded-lg p-6 border transition-all hover:shadow-sm',
                    getEventMetadata(slot.event.type).bgColor,
                    getEventMetadata(slot.event.type).textColor,
                    getEventMetadata(slot.event.type).borderColor
                  ]"
                >
                  <div class="flex items-center gap-3">
                    <MdiIcon
                      :icon="getEventMetadata(slot.event.type).icon as any"
                      size="1.5em"
                      class="text-gray-600"
                      aria-hidden="true"
                    />
                    <div class="flex-1">
                      <h3 class="text-lg font-semibold">{{ slot.event.title }}</h3>
                      <p class="text-sm opacity-80 mt-1">{{ formatTimeRange(slot.time, getEventDuration(slot.event.type)) }}</p>
                      
                      <!-- Event Tags -->
                      <div v-if="slot.event.tags && slot.event.tags.length > 0" class="flex flex-wrap gap-1 mt-3">
                        <span
                          v-for="tag in slot.event.tags"
                          :key="tag"
                          class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-white/50 text-gray-600 border border-gray-300"
                        >
                          {{ tag }}
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Parallel Talks (Consistent Cards) -->
              <div
                v-else-if="slot.talks"
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"
              >
                <template v-for="(talk, trackName) in getTalksByTrack(slot.talks)" :key="trackName">
                  <article
                    v-if="talk"
                    @click="toggleTalkExpansion(slot.time, talk.track)"
                    :class="[
                      'bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-200 overflow-hidden cursor-pointer',
                      isCurrentTimeSlot(slot.time) && isEventDay ? 'border-2 border-primary' : 'border border-gray-200'
                    ]"
                  >
                    <!-- Track Color Header — amber for workshops -->
                    <div
                      :class="[
                        'h-1.5',
                        talk.duration && talk.duration >= 90 ? 'bg-warning' : `bg-${getTrackConfig(talk.track).color}`
                      ]"
                      :aria-label="`${getTrackConfig(talk.track).label} ${talk.duration && talk.duration >= 90 ? 'workshop' : 'talk'}`"
                    ></div>
                    
                    <!-- Card Content -->
                    <div class="p-4">
                      <!-- Track & Time Info with Languages -->
                      <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-2">
                          <span class="text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ getTrackConfig(talk.track).label }}
                          </span>
                          <span
                            v-if="talk.duration && talk.duration >= 90"
                            class="text-xs font-semibold px-1.5 py-0.5 rounded bg-warning/10 text-warning-dark border border-warning/30"
                          >
                            Workshop
                          </span>
                        </div>
                        <div class="flex items-center gap-2">
                          <!-- Language Flags -->
                          <div v-if="talk.languages && talk.languages.length > 0" class="flex items-center gap-1">
                            <span
                              v-for="lang in formatLanguages(talk.languages)"
                              :key="lang.code"
                              :title="lang.label"
                              class="text-sm"
                              :aria-label="`Available in ${lang.label}`"
                            >
                              {{ lang.flag }}
                            </span>
                          </div>
                          <time class="text-xs text-gray-600 font-medium">
                            {{ formatTimeRange(slot.time, talk.duration ?? 30) }}
                          </time>
                          <!-- Expand/Collapse Icon -->
                          <MdiIcon
                            :icon="isTalkExpanded(slot.time, talk.track) ? 'mdiChevronUp' : 'mdiChevronDown'"
                            size="1em"
                            class="text-gray-400 transition-transform"
                            aria-hidden="true"
                          />
                        </div>
                      </div>
                      
                      <!-- Talk Title -->
                      <h3 class="font-semibold text-gray-900 text-sm mb-3 leading-tight line-clamp-3">
                        {{ talk.title }}
                      </h3>
                      
                      <!-- Speaker Information -->
                      <div v-if="talk.speakers.length > 0" class="flex items-start gap-2 mb-3">
                        <MdiIcon
                          icon="mdiAccount"
                          size="0.875em"
                          class="text-gray-400 mt-0.5 flex-shrink-0"
                          aria-hidden="true"
                        />
                        <p class="text-xs text-gray-600 leading-relaxed line-clamp-2">
                          {{ formatSpeakerInfo(talk.speakers) }}
                        </p>
                      </div>

                      <!-- Tags -->
                      <div v-if="talk.tags && talk.tags.length > 0" class="flex flex-wrap gap-1 mb-3">
                        <span
                          v-for="tag in isTalkExpanded(slot.time, talk.track) ? talk.tags : talk.tags.slice(0, 3)"
                          :key="tag"
                          class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-700 border border-gray-200"
                        >
                          {{ tag }}
                        </span>
                        <span
                          v-if="!isTalkExpanded(slot.time, talk.track) && talk.tags.length > 3"
                          class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-50 text-gray-500"
                        >
                          +{{ talk.tags.length - 3 }} {{ t('schedule.expandable.moreText') }}
                        </span>
                      </div>

                      <!-- Expandable Content -->
                      <Transition name="expand">
                        <div v-if="isTalkExpanded(slot.time, talk.track)" class="mt-4 pt-4 border-t border-gray-100">
                          <div v-if="talk.abstract" class="mb-3">
                            <h4 class="text-xs font-semibold text-gray-700 uppercase tracking-wide mb-2">{{ t('schedule.expandable.abstract') }}</h4>
                            <p class="text-sm text-gray-600 leading-relaxed whitespace-pre-line">{{ talk.abstract }}</p>
                          </div>
                          <div class="flex items-center gap-3">
                            <div v-if="talk.duration" class="flex items-center gap-1">
                              <MdiIcon icon="mdiClockOutline" size="0.875em" class="text-gray-400" aria-hidden="true" />
                              <span class="text-xs text-gray-500">{{ talk.duration }} {{ t('schedule.expandable.minutes') }}</span>
                            </div>
                            <a
                              v-if="talk.link"
                              :href="talk.link"
                              target="_blank"
                              rel="noopener noreferrer"
                              class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-primary text-white text-xs font-medium rounded-md hover:bg-primary-dark transition-colors"
                              @click.stop
                            >
                              <MdiIcon icon="mdiFileDownloadOutline" size="0.875em" aria-hidden="true" />
                              <span>View Presentation</span>
                              <MdiIcon icon="mdiOpenInNew" size="0.75em" aria-hidden="true" />
                            </a>
                          </div>
                        </div>
                      </Transition>

                    </div>
                  </article>
                </template>
              </div>
            </div>
          </article>
        </div>

        <!-- Empty State -->
        <div v-if="filteredSchedule.length === 0" class="text-center py-16">
          <MdiIcon icon="mdiCalendarRemove" size="3em" class="text-gray-300 mx-auto mb-4" aria-hidden="true" />
          <h3 class="text-lg font-semibold text-gray-600 mb-2">{{ t('schedule.empty.title') }}</h3>
          <p class="text-gray-500">{{ t('schedule.empty.description') }}</p>
        </div>
      </section>
    </main>
  </div>
</template>

<style scoped>
/* Line clamp utilities */
.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

/* Custom scrollbar for webkit browsers */
::-webkit-scrollbar {
  width: 8px;
  height: 8px;
}

::-webkit-scrollbar-track {
  background: #f8fafc;
}

::-webkit-scrollbar-thumb {
  background: #cbd5e1;
  border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
  background: #94a3b8;
}

/* Hide scrollbar for filter buttons */
.scrollbar-hide {
  -ms-overflow-style: none;
  scrollbar-width: none;
}

.scrollbar-hide::-webkit-scrollbar {
  display: none;
}

/* Expand transition for talk details */
.expand-enter-active,
.expand-leave-active {
  transition: all 0.3s ease;
  max-height: 500px;
  opacity: 1;
}

.expand-enter-from,
.expand-leave-to {
  max-height: 0;
  opacity: 0;
}
</style>