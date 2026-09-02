<script setup lang="ts">
import sponsorsData from '~/assets/sponsors-data.json'
import type { Sponsor } from '~/types/sponsors'

// array of i18n keys:
const tiers = [
    {
        key: 'Gold',
        titleKey: 'sponsors.tiers.gold.title',
        priceKey: 'sponsors.tiers.gold.price',
        descriptionKey: null,
        banner: 'bg-gold',
        advantages: [
            'sponsors.features.logoOnFoss4gBig',
            'sponsors.features.logoInProgramHeader',
            'sponsors.features.coSponsorLunch',
            'sponsors.features.booth',
            'sponsors.features.dedicatedPost',
            'sponsors.features.miniPresentation',
            'sponsors.features.tshirtGift',
            'sponsors.features.stickersGift',
        ],
        ctaKey: 'sponsors.tiers.gold.cta',
    },
    {
        key: 'Silver',
        titleKey: 'sponsors.tiers.silver.title',
        priceKey: 'sponsors.tiers.silver.price',
        descriptionKey: null,
        banner: 'bg-silver',
        advantages: [
            'sponsors.features.logoOnFoss4g',
            'sponsors.features.logoOnSponsorsPage',
            'sponsors.features.namedMomentSilver',
            'sponsors.features.smallBooth',
            'sponsors.features.inProgramAtBreaks',
            'sponsors.features.socialMention',
        ],
        ctaKey: 'sponsors.tiers.silver.cta',
    },
    {
        key: 'Bronze',
        titleKey: 'sponsors.tiers.bronze.title',
        priceKey: 'sponsors.tiers.bronze.price',
        descriptionKey: null,
        banner: 'bg-bronze',
        advantages: [
            'sponsors.features.logoOnSponsorsPage',
            'sponsors.features.socialMention',
        ],
        ctaKey: 'sponsors.tiers.bronze.cta',
    },
]

// Use centralized sponsor data
const goldSponsors: Sponsor[] = sponsorsData.gold
const silverSponsors: Sponsor[] = sponsorsData.silver
const bronzeSponsors: Sponsor[] = sponsorsData.bronze

</script>

<template>
    <div class="min-h-screen font-sans text-primary-dark flex flex-col">
        <main class="flex-1 px-4 py-6 lg:px-8 lg:py-12 space-y-12">
            <!-- Hero -->
            <section class="grid grid-cols-1 gap-6 max-w-5xl mx-auto">
                    <!-- Contenu au-dessus -->
                    <div class="relative z-10 px-6 inline-block bg-off-white bg-opacity-90 py-6 rounded-lg">
                        <h1 class="text-3xl sm:text-4xl font-extrabold mb-4 mx-auto text-center">
                            {{ $t('sponsors.hero.title') }}
                        </h1>
                        <p class="text-base text-neutral-dark max-w-xl mx-auto text-center">
                            {{ $t('sponsors.hero.description') }}
                        </p>
                    </div>
            </section>

            <!-- Tier cards -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                <div
                    v-for="tier in tiers"
                    :key="tier.key"
                    class="bg-off-white rounded-xl overflow-hidden shadow-md flex flex-col"
                >
                    <!-- colored banner -->
                    <div :class="[tier.banner, 'h-12']"></div>

                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <div>
                            <h2 class="text-xl font-bold mb-1">
                                {{ $t(tier.titleKey) }}
                            </h2>
                            <p class="text-2xl font-extrabold text-primary mb-1">
                                {{ $t(tier.priceKey) }}
                            </p>
                            <p v-if="tier.descriptionKey" class="text-xs text-neutral-dark italic mb-4">
                                {{ $t(tier.descriptionKey) }}
                            </p>
                            <div v-else class="mb-4"></div>
                            <ul class="list-disc list-inside text-sm space-y-1">
                                <li v-for="adv in tier.advantages" :key="adv">
                                    {{ $t(adv) }}
                                </li>
                            </ul>
                        </div>
                        <NuxtLinkLocale
                            :to="`/contact?sponsor=${tier.key.toLowerCase()}`"
                            class="mt-6 block text-center bg-primary hover:bg-primary-dark text-off-white font-semibold py-2 rounded-lg transition"
                        >
                            {{ $t(tier.ctaKey) }}
                        </NuxtLinkLocale>
                    </div>
                </div>
            </section>

            <!-- Code of conduct -->
            <section class="max-w-5xl mx-auto border-2 border-neutral-light bg-sky-50 border-sky-400 backdrop-blur-sm rounded-xl p-6 flex flex-col sm:flex-row gap-6 items-start">
                <div class="flex-1">
                    <h2 class="text-lg font-bold mb-2 text-sky-800">{{ $t('sponsors.coc.title') }}</h2>
                    <p class="text-sm text-sky-900/80" v-html="$t('sponsors.coc.text')"></p>
                </div>
            </section>

            <!-- Support banner -->
            <section class="relative bg-primary-dark rounded-xl shadow-md max-w-5xl mx-auto overflow-hidden">
                <div class="flex flex-col sm:flex-row items-center">
                    <div class="flex-1 p-8 flex flex-col justify-center text-white">
                        <h2 class="text-lg sm:text-2xl font-bold mb-2">
                            {{ $t('sponsors.support.title') }}
                        </h2>
                        <p class="text-sm mb-4 text-white/80">
                            {{ $t('sponsors.support.description') }}
                        </p>
                        <NuxtLinkLocale
                            to="/contact?sponsor=general"
                            class="inline-block bg-white text-primary-dark hover:bg-off-white font-semibold px-6 py-2 rounded-lg transition w-full sm:w-auto text-center text-sm"
                        >
                            {{ $t('sponsors.support.cta') }}
                        </NuxtLinkLocale>
                    </div>
                    <div class="shrink-0 p-6 flex items-center justify-center">
                        <img
                            src="/images/background-topology.svg"
                            alt=""
                            aria-hidden="true"
                            class="h-36 w-auto object-contain opacity-40"
                        />
                    </div>
                </div>
            </section>

            <!-- Sponsors Footer -->
            <section class="max-w-5xl mx-auto px-4 py-8 bg-off-white rounded-lg shadow">
                <h3 class="text-center text-xl font-semibold text-primary mb-2">
                    {{ $t('sponsors.footer.thankYou') }}
                </h3>
                <p class="text-center text-sm text-neutral-dark mb-6">
                    {{ $t('sponsors.footer.subtext') }}
                </p>


                <h4 v-if="goldSponsors.length > 0" class="mb-2 mt-2 font-semibold">{{ $t('sponsors.gold') }}</h4>

                <div v-if="goldSponsors.length > 0" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    <a
                        v-for="(s, index) in goldSponsors"
                        :key="index"
                        :href="s.link"
                        target="_blank"
                        rel="noopener"
                        :class="[
                          'group rounded-lg border border-neutral-light p-6 flex flex-col items-center text-center transition-shadow filter sm:opacity-60 sm:hover:filter-none sm:hover:opacity-100 sm:hover:shadow-lg',
                          s.bgClass
                        ]"
                    >
                        <img
                            :src="s.logo"
                            :alt="`${s.name} logo`"
                            class="pointer-events-none h-16 w-auto mb-4 object-contain transition-transform group-hover:scale-105"
                        />
                    </a>
                </div>

                <h4 v-if="silverSponsors.length > 0" class="mb-2 mt-2 font-semibold">{{ $t('sponsors.silver') }}</h4>

                <div v-if="silverSponsors.length > 0" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    <a
                        v-for="(s, index) in silverSponsors"
                        :key="index"
                        :href="s.link"
                        target="_blank"
                        rel="noopener"
                        :class="[
                          'group rounded-lg border border-neutral-light p-6 flex flex-col items-center text-center transition-shadow filter sm:opacity-60 sm:hover:filter-none sm:hover:opacity-100 sm:hover:shadow-lg',
                          s.bgClass
                        ]"
                    >
                        <img
                            :src="s.logo"
                            :alt="`${s.name} logo`"
                            class="pointer-events-none h-16 w-auto mb-4 object-contain transition-transform group-hover:scale-105"
                        />
                    </a>
                </div>

                <h4 v-if="bronzeSponsors.length > 0" class="mb-2 mt-2 font-semibold">{{ $t('sponsors.bronze') }}</h4>

                <div v-if="bronzeSponsors.length > 0" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    <a
                        v-for="(s, index) in bronzeSponsors"
                        :key="index"
                        :href="s.link"
                        target="_blank"
                        rel="noopener"
                        :class="[
                          'group rounded-lg border border-neutral-light p-6 flex flex-col items-center text-center transition-shadow filter sm:opacity-60 sm:hover:filter-none sm:hover:opacity-100 sm:hover:shadow-lg',
                          s.bgClass
                        ]"
                    >
                        <img
                            :src="s.logo"
                            :alt="`${s.name} logo`"
                            class="pointer-events-none h-16 w-auto mb-4 object-contain transition-transform group-hover:scale-105"
                        />
                    </a>
                </div>
            </section>

            <!-- Community — participation professionnelle -->
            <section class="max-w-5xl mx-auto border-2 border-dashed border-neutral-light bg-white/80 backdrop-blur-sm rounded-xl p-6 flex flex-col sm:flex-row gap-6 items-start">
                <div class="flex-1">
                    <h2 class="text-lg font-bold mb-1">{{ $t('sponsors.tiers.community.title') }}</h2>
                    <p class="text-2xl font-extrabold text-primary mb-1">{{ $t('sponsors.tiers.community.price') }}</p>
                    <p class="text-xs text-neutral-dark italic mb-4">{{ $t('sponsors.tiers.community.description') }}</p>
                    <ul class="list-disc list-inside text-sm space-y-1 mb-4">
                        <li>{{ $t('sponsors.features.officialInvoice') }}</li>
                    </ul>
                </div>
                <a
                    :href="`mailto:board@osgeo.be?subject=${encodeURIComponent($t('sponsors.tiers.community.mailSubject'))}`"
                    class="shrink-0 self-center border-2 border-primary text-primary hover:bg-primary hover:text-off-white font-semibold px-6 py-2 rounded-lg transition text-sm"
                >
                    {{ $t('sponsors.tiers.community.cta') }}
                </a>
            </section>
        </main>
    </div>
</template>

<style>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.2s;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>