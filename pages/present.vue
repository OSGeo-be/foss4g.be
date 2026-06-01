<template>
    <div class="flex-1 px-4 py-6 space-y-8 lg:px-8 lg:py-12">
        <section class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-3xl mx-auto">

            <!-- Hero card -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2 flex flex-col sm:flex-row gap-6 items-center">
                <div class="flex-1">
                    <h1 class="text-xl font-bold mb-2">{{ $t('present.callToPresentations.title') }}</h1>
                    <p class="text-sm text-neutral-dark mb-3">{{ $t('present.callToPresentations.teaser') }}</p>
                    <div class="flex flex-wrap gap-3 text-xs">
                        <span class="bg-main-color-3/10 text-main-color-3 font-semibold px-3 py-1 rounded-full">
                            {{ $t('present.callToPresentations.opensLabel') }} {{ $t('present.callToPresentations.opensDate') }}
                        </span>
                        <span class="bg-main-color-2/10 text-main-color-2 font-semibold px-3 py-1 rounded-full">
                            {{ $t('present.callToPresentations.closesLabel') }} {{ $t('present.callToPresentations.closesDate') }}
                        </span>
                    </div>
                </div>
                <img src="/images/call.png" alt="Call for presentations" class="w-28 h-28 object-contain shrink-0" />
            </div>

            <!-- Formats -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2">
                <h2 class="text-lg font-bold mb-4">{{ $t('present.formats.title') }}</h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div v-for="fmt in formats" :key="fmt.key" class="border border-neutral-light rounded-lg p-4">
                        <div class="flex items-center gap-2 mb-1">
                            <MdiIcon :icon="fmt.icon" class="text-main-color-3" size="1.2em" />
                            <span class="font-semibold text-sm">{{ $t(fmt.titleKey) }}</span>
                        </div>
                        <p class="text-xs text-main-color-2 font-medium mb-1">{{ $t(fmt.durationKey) }}</p>
                        <p class="text-xs text-neutral-dark">{{ $t(fmt.descKey) }}</p>
                    </div>
                </div>
            </div>

            <!-- Topics -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2">
                <h2 class="text-lg font-bold mb-3">{{ $t('present.topics.title') }}</h2>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                    <li v-for="topic in topics" :key="topic" class="flex items-start gap-2 text-sm text-neutral-dark">
                        <MdiIcon icon="mdiCheckCircleOutline" class="text-main-color-3 shrink-0 mt-0.5" size="1em" />
                        <span>{{ topic }}</span>
                    </li>
                </ul>
            </div>

            <!-- Criteria -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow">
                <h2 class="text-lg font-bold mb-3">{{ $t('present.criterias.title') }}</h2>
                <ul class="space-y-2">
                    <li v-for="c in criterias" :key="c" class="flex items-start gap-2 text-sm text-neutral-dark">
                        <MdiIcon icon="mdiStar" class="text-main-color-2 shrink-0 mt-0.5" size="1em" />
                        <span>{{ c }}</span>
                    </li>
                </ul>
            </div>

            <!-- Timeline -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow">
                <h2 class="text-lg font-bold mb-4">{{ $t('present.timeline.title') }}</h2>
                <ol class="space-y-3">
                    <li v-for="item in timeline" :key="item.dateKey" class="flex gap-3 items-start text-sm">
                        <span class="shrink-0 w-2 h-2 rounded-full bg-main-color-3 mt-1.5"></span>
                        <div>
                            <span class="font-semibold text-main-color-3">{{ $t(item.dateKey) }}</span>
                            <span class="text-neutral-dark ml-1">— {{ $t(item.labelKey) }}</span>
                        </div>
                    </li>
                </ol>
            </div>

            <!-- Submission -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2">
                <h2 class="text-lg font-bold mb-2">{{ $t('present.submission.title') }}</h2>
                <p class="text-sm text-neutral-dark mb-1">{{ $t('present.submission.presentations') }}</p>
                <p class="text-sm text-neutral-dark mb-4">{{ $t('present.submission.proposals') }}</p>
                <p class="text-sm text-neutral-dark italic mb-4">{{ $t('present.submission.opensNote') }}</p>
            </div>

            <!-- Contact -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2">
                <h2 class="text-lg font-bold mb-2">{{ $t('present.questions.title') }}</h2>
                <p class="text-sm text-neutral-dark">
                    {{ $t('present.questions.contactUsAt') }}
                    <a href="mailto:presentation@foss4g.be" class="text-primary-dark underline">presentation@foss4g.be</a>.
                </p>
            </div>

        </section>
    </div>
</template>

<script setup lang="ts">
import { useI18n } from 'vue-i18n'

const { t } = useI18n()

const formats = [
    {
        key: 'presentation',
        icon: 'mdiMicrophone',
        titleKey: 'present.formats.presentation.title',
        durationKey: 'present.formats.presentation.duration',
        descKey: 'present.formats.presentation.desc',
    },
    {
        key: 'lightning',
        icon: 'mdiLightningBolt',
        titleKey: 'present.formats.lightning.title',
        durationKey: 'present.formats.lightning.duration',
        descKey: 'present.formats.lightning.desc',
    },
    {
        key: 'workshop',
        icon: 'mdiLaptop',
        titleKey: 'present.formats.workshop.title',
        durationKey: 'present.formats.workshop.duration',
        descKey: 'present.formats.workshop.desc',
    },
]

const topics = [
    t('present.topics.software'),
    t('present.topics.opendata'),
    t('present.topics.remoteSensing'),
    t('present.topics.ai'),
    t('present.topics.standards'),
    t('present.topics.osm'),
    t('present.topics.community'),
    t('present.topics.successStories'),
    t('present.topics.migration'),
    t('present.topics.institutions'),
    t('present.topics.other'),
]

const criterias = [
    t('present.criterias.relevance'),
    t('present.criterias.originality'),
    t('present.criterias.quality'),
    t('present.criterias.diversity'),
]

const timeline = [
    { dateKey: 'present.timeline.opensDate',        labelKey: 'present.timeline.opensLabel' },
    { dateKey: 'present.timeline.closesDate',       labelKey: 'present.timeline.closesLabel' },
    { dateKey: 'present.timeline.notificationDate', labelKey: 'present.timeline.notificationLabel' },
    { dateKey: 'present.timeline.programDate',      labelKey: 'present.timeline.programLabel' },
    { dateKey: 'present.timeline.eventDate',        labelKey: 'present.timeline.eventLabel' },
]
</script>
