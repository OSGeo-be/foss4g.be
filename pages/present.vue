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
                <img src="/images/call.png" alt="Call for proposals" class="w-28 h-28 object-contain shrink-0" />
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
            <div class="bg-off-white px-6 py-6 rounded-xl shadow">
                <h2 class="text-lg font-bold mb-3">{{ $t('present.topics.title') }}</h2>
                <ul class="space-y-2">
                    <li v-for="topic in topics" :key="topic" class="flex items-start gap-2 text-sm text-neutral-dark">
                        <MdiIcon icon="mdiCheckCircleOutline" class="text-main-color-3 shrink-0 mt-0.5" size="1em" />
                        <span>{{ topic }}</span>
                    </li>
                </ul>
            </div>

            <!-- How to submit -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow">
                <h2 class="text-lg font-bold mb-3">{{ $t('present.submission.title') }}</h2>
                <p class="text-sm text-neutral-dark mb-3">{{ $t('present.submission.intro') }}</p>
                <ul class="space-y-2 mb-5">
                    <li v-for="field in submissionFields" :key="field" class="flex items-start gap-2 text-sm text-neutral-dark">
                        <MdiIcon icon="mdiCircleSmall" class="text-main-color-3 shrink-0 mt-0.5" size="1.2em" />
                        <span>{{ field }}</span>
                    </li>
                </ul>
                <p class="text-sm font-semibold mb-1">{{ $t('present.submission.formTitle') }}</p>
                <p class="text-sm text-neutral-dark mb-2">{{ $t('present.submission.formIntro') }}</p>
                <a
                    :href="$t('present.submission.formUrl')"
                    target="_blank"
                    rel="noopener"
                    class="inline-flex items-center gap-2 bg-main-color-3 text-white font-semibold px-4 py-2 rounded-lg hover:opacity-90 transition text-sm"
                >
                    <MdiIcon icon="mdiOpenInNew" size="1em" />
                    {{ $t('present.submission.formLink') }}
                </a>
            </div>

            <!-- Timeline + Deadline côte à côte -->
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

            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2">
                <h2 class="text-lg font-bold mb-4">{{ $t('present.deadline.title') }}</h2>
                <p class="text-sm text-neutral-dark">{{ $t('present.deadline.text') }}</p>
            </div>

            <!-- Evaluation criteria -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2">
                <h2 class="text-lg font-bold mb-3">{{ $t('present.criterias.title') }}</h2>
                <ul class="space-y-2 mb-4">
                    <li v-for="c in criterias" :key="c" class="flex items-start gap-2 text-sm text-neutral-dark">
                        <MdiIcon icon="mdiStar" class="text-main-color-2 shrink-0 mt-0.5" size="1em" />
                        <span>{{ c }}</span>
                    </li>
                </ul>
                <p class="text-xs text-neutral-dark italic">{{ $t('present.criterias.note') }}</p>
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
import { computed } from 'vue'
import { useI18n } from 'vue-i18n'

const { t } = useI18n()

const formats = [
    {
        key: 'flash',
        icon: 'mdiLightningBolt',
        titleKey: 'present.formats.flash.title',
        durationKey: 'present.formats.flash.duration',
        descKey: 'present.formats.flash.desc',
    },
    {
        key: 'presentation',
        icon: 'mdiMicrophone',
        titleKey: 'present.formats.presentation.title',
        durationKey: 'present.formats.presentation.duration',
        descKey: 'present.formats.presentation.desc',
    },
    {
        key: 'workshop',
        icon: 'mdiLaptop',
        titleKey: 'present.formats.workshop.title',
        durationKey: 'present.formats.workshop.duration',
        descKey: 'present.formats.workshop.desc',
    },
]

const topics = computed(() => [
    t('present.topics.osm'),
    t('present.topics.postgresql'),
    t('present.topics.qgis'),
    t('present.topics.python'),
    t('present.topics.other'),
])

const submissionFields = computed(() => [
    t('present.submission.fieldTitle'),
    t('present.submission.fieldSummary'),
    t('present.submission.fieldWorkshop'),
    t('present.submission.fieldMaps'),
    t('present.submission.fieldLanguage'),
    t('present.submission.fieldLevel'),
    t('present.submission.fieldFormat'),
])

const criterias = computed(() => [
    t('present.criterias.quality'),
    t('present.criterias.relevance'),
    t('present.criterias.program'),
])

const timeline = [
    { dateKey: 'present.timeline.opensDate',        labelKey: 'present.timeline.opensLabel' },
    { dateKey: 'present.timeline.closesDate',       labelKey: 'present.timeline.closesLabel' },
    { dateKey: 'present.timeline.notificationDate', labelKey: 'present.timeline.notificationLabel' },
    { dateKey: 'present.timeline.programDate',      labelKey: 'present.timeline.programLabel' },
    { dateKey: 'present.timeline.eventDate',        labelKey: 'present.timeline.eventLabel' },
]
</script>
