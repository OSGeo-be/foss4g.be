<script setup lang="ts">
import sponsorsData from '~/assets/sponsors-data.json'
import type { Sponsor } from '~/types/sponsors'

const sponsors_gold: Sponsor[] = sponsorsData.gold
const sponsors_silver: Sponsor[] = sponsorsData.silver
const sponsors_bronze: Sponsor[] = sponsorsData.bronze
const sponsors_community: { name: string; link?: string }[] = (sponsorsData as any).community ?? []
</script>

<template>
    <div class="min-h-screen font-sans text-primary-dark flex flex-col">
        <main class="flex-1 px-4 py-6 lg:px-8 lg:py-12 space-y-12">

            <!-- Hero intro -->
            <section class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="relative sm:col-span-2 bg-primary-dark rounded-xl overflow-hidden shadow-md flex flex-col sm:flex-row items-center gap-0">
                    <div class="flex-1 p-8 text-white">
                        <h1 class="text-2xl font-bold mb-3">{{ $t('sponsors.hero.title') }}</h1>
                        <p class="text-sm text-white/80 mb-5">{{ $t('sponsors.hero.description') }}</p>
                        <NuxtLinkLocale
                            to="/become-sponsor"
                            class="inline-block bg-white text-primary-dark hover:bg-off-white font-semibold px-5 py-2 rounded-lg transition text-sm"
                        >
                            {{ $t('sponsors.support.cta') }}
                        </NuxtLinkLocale>
                    </div>
                    <!-- decorative map-like circles -->
                    <div class="absolute right-0 top-0 h-full w-32 sm:w-48 pointer-events-none overflow-hidden opacity-10">
                        <div class="absolute -right-6 -top-6 w-40 h-40 rounded-full border-4 border-white"></div>
                        <div class="absolute -right-2 top-8 w-24 h-24 rounded-full border-2 border-white"></div>
                        <div class="absolute right-8 -bottom-4 w-32 h-32 rounded-full border-4 border-white"></div>
                    </div>
                </div>
            </section>

            <!-- Liste des sponsors -->
            <section class="max-w-5xl mx-auto px-4 py-8 bg-off-white rounded-lg shadow">
                <h2 class="text-center text-xl font-semibold text-primary mb-2">
                    {{ $t('sponsors.footer.thankYou') }}
                </h2>
                <p class="text-center text-sm text-neutral-dark mb-6">
                    {{ $t('sponsors.footer.subtext') }}
                </p>

                <template v-if="sponsors_gold.length > 0">
                    <h3 class="mb-2 mt-4 font-semibold">{{ $t('sponsors.gold') }}</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-4">
                        <a
                            v-for="(s, index) in sponsors_gold"
                            :key="index"
                            :href="s.link"
                            target="_blank"
                            rel="noopener"
                            :class="['group rounded-lg border border-neutral-light p-6 flex flex-col items-center text-center transition-shadow sm:opacity-60 sm:hover:opacity-100 sm:hover:shadow-lg', s.bgClass]"
                        >
                            <img :src="s.logo" :alt="`${s.name} logo`" :class="['pointer-events-none h-16 w-auto mb-4 object-contain transition-transform group-hover:scale-105', s.imgClass ?? '']" />
                        </a>
                    </div>
                </template>

                <template v-if="sponsors_silver.length > 0">
                    <h3 class="mb-2 mt-4 font-semibold">{{ $t('sponsors.silver') }}</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-4">
                        <a
                            v-for="(s, index) in sponsors_silver"
                            :key="index"
                            :href="s.link"
                            target="_blank"
                            rel="noopener"
                            :class="['group rounded-lg border border-neutral-light p-6 flex flex-col items-center text-center transition-shadow sm:opacity-60 sm:hover:opacity-100 sm:hover:shadow-lg', s.bgClass]"
                        >
                            <img :src="s.logo" :alt="`${s.name} logo`" class="pointer-events-none h-16 w-auto mb-4 object-contain transition-transform group-hover:scale-105" />
                        </a>
                    </div>
                </template>

                <template v-if="sponsors_bronze.length > 0">
                    <h3 class="mb-2 mt-4 font-semibold">{{ $t('sponsors.bronze') }}</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-4">
                        <a
                            v-for="(s, index) in sponsors_bronze"
                            :key="index"
                            :href="s.link"
                            target="_blank"
                            rel="noopener"
                            :class="['group rounded-lg border border-neutral-light p-6 flex flex-col items-center text-center transition-shadow sm:opacity-60 sm:hover:opacity-100 sm:hover:shadow-lg', s.bgClass]"
                        >
                            <img :src="s.logo" :alt="`${s.name} logo`" class="pointer-events-none h-16 w-auto mb-4 object-contain transition-transform group-hover:scale-105" />
                        </a>
                    </div>
                </template>

                <template v-if="sponsors_community.length > 0">
                    <h3 class="mb-2 mt-4 font-semibold">{{ $t('sponsors.community') }}</h3>
                    <div class="flex flex-wrap gap-3 mb-4">
                        <component
                            :is="s.link ? 'a' : 'span'"
                            v-for="(s, index) in sponsors_community"
                            :key="index"
                            :href="s.link"
                            target="_blank"
                            rel="noopener"
                            class="border border-neutral-light rounded-lg px-4 py-2 text-sm font-medium text-neutral-dark hover:shadow transition"
                        >
                            {{ s.name }}
                        </component>
                    </div>
                </template>

                <p v-if="!sponsors_gold.length && !sponsors_silver.length && !sponsors_bronze.length && !sponsors_community.length"
                   class="text-center text-sm text-neutral-dark italic py-8">
                    {{ $t('sponsors.support.cta') }} — <NuxtLinkLocale to="/become-sponsor" class="underline text-primary">{{ $t('sponsors.support.cta') }}</NuxtLinkLocale>
                </p>
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
