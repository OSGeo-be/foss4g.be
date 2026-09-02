<template>
    <div class="flex-1 px-4 py-6 space-y-8 lg:px-8 lg:py-12">
        <section class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-3xl mx-auto">

            <!-- Hero -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2 flex flex-col sm:flex-row gap-6 items-center">
                <div class="flex-1">
                    <h1 class="text-xl font-bold mb-2">{{ $t('maps.title') }}</h1>
                    <p class="text-sm text-neutral-dark mb-3">{{ $t('maps.content') }}</p>
                    <div class="flex flex-wrap gap-3 text-xs">
                        <span class="bg-orange-100 text-orange-600 font-semibold px-3 py-1 rounded-full">
                            {{ $t('maps.timeline.intentLabel') }} {{ $t('maps.timeline.intentDate') }}
                        </span>
                        <span class="bg-main-color-2/10 text-main-color-2 font-semibold px-3 py-1 rounded-full">
                            {{ $t('maps.timeline.closesLabel') }} {{ $t('maps.timeline.closesDate') }}
                        </span>
                    </div>
                </div>
                <MdiIcon icon="mdiMap" class="text-main-color-4 shrink-0" size="5em" />
            </div>

            <!-- Tradition -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2">
                <h2 class="text-lg font-bold mb-2">{{ $t('maps.tradition.title') }}</h2>
                <p class="text-sm text-neutral-dark">{{ $t('maps.tradition.content') }}</p>
            </div>

            <!-- How to submit -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2">
                <h2 class="text-lg font-bold mb-2">{{ $t('maps.submit.title') }}</h2>
                <p class="text-sm text-neutral-dark mb-4">{{ $t('maps.submit.content') }}</p>
                <ol class="space-y-2 mb-6 list-none">
                    <li v-for="n in 7" :key="n" class="flex items-start gap-3 text-sm text-neutral-dark">
                        <span class="shrink-0 w-6 h-6 rounded-full bg-main-color-4/10 text-main-color-4 font-bold flex items-center justify-center text-xs">{{ n }}</span>
                        <span>{{ $t(`maps.submit.item${n}`) }}</span>
                    </li>
                </ol>
                <a
                    href="mailto:map@foss4g.be"
                    class="inline-flex items-center gap-2 bg-main-color-4 text-white font-semibold px-5 py-2.5 rounded-lg hover:opacity-90 transition text-sm"
                >
                    <MdiIcon icon="mdiEmailOutline" size="1.1em" />
                    map@foss4g.be
                </a>
            </div>

            <!-- Criteria -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2">
                <h2 class="text-lg font-bold mb-4">{{ $t('maps.criteria.title') }}</h2>
                <div class="space-y-2">
                    <div v-for="criterion in criteria" :key="criterion" class="flex items-start gap-3">
                        <MdiIcon icon="mdiCheckCircleOutline" class="text-main-color-4 shrink-0 mt-0.5" size="1.2em" />
                        <span class="text-sm text-neutral-dark">{{ $t(criterion) }}</span>
                    </div>
                </div>
            </div>

            <!-- Intent callout -->
            <div class="sm:col-span-2 border-2 border-orange-300 bg-orange-50 rounded-xl px-6 py-4 flex gap-4 items-start">
                <MdiIcon icon="mdiCalendarAlert" class="text-orange-500 shrink-0 mt-0.5" size="1.4em" />
                <p class="text-sm text-orange-800 font-medium">{{ $t('maps.intentNote') }}</p>
            </div>

            <!-- Selection + Timeline -->
            <div class="sm:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-off-white px-6 py-6 rounded-xl shadow">
                    <h2 class="text-lg font-bold mb-4">{{ $t('maps.selection.title') }}</h2>
                    <div class="space-y-2">
                        <div v-for="item in selectionItems" :key="item" class="flex items-start gap-3">
                            <MdiIcon icon="mdiStar" class="text-main-color-4 shrink-0 mt-0.5" size="1.1em" />
                            <span class="text-sm text-neutral-dark">{{ $t(item) }}</span>
                        </div>
                    </div>
                </div>

                <div class="bg-off-white px-6 py-6 rounded-xl shadow">
                    <h2 class="text-lg font-bold mb-4">{{ $t('maps.timeline.title') }}</h2>
                    <ol class="space-y-3">
                        <li v-for="item in timeline" :key="item.dateKey" class="flex gap-3 items-start text-sm">
                            <span class="shrink-0 w-2 h-2 rounded-full bg-main-color-4 mt-1.5"></span>
                            <div>
                                <span class="font-semibold text-main-color-4">{{ $t(item.dateKey) }}</span>
                                <span class="text-neutral-dark ml-1">— {{ $t(item.labelKey) }}</span>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>

        </section>
    </div>
</template>

<script setup lang="ts">
const criteria = [
    'maps.criteria.software',
    'maps.criteria.resolution',
    'maps.criteria.theme',
    'maps.criteria.legend',
    'maps.criteria.description',
]

const selectionItems = [
    'maps.selection.committee',
    'maps.selection.print',
    'maps.selection.display',
    'maps.selection.credit',
]

const timeline = [
    { dateKey: 'maps.timeline.opensDate',     labelKey: 'maps.timeline.opensLabel' },
    { dateKey: 'maps.timeline.intentDate',    labelKey: 'maps.timeline.intentLabel' },
    { dateKey: 'maps.timeline.closesDate',    labelKey: 'maps.timeline.closesLabel' },
    { dateKey: 'maps.timeline.selectionDate', labelKey: 'maps.timeline.selectionLabel' },
    { dateKey: 'maps.timeline.eventDate',     labelKey: 'maps.timeline.eventLabel' },
]
</script>
