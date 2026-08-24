<script setup lang="ts">
import { ref, onMounted, onUnmounted } from 'vue'
import { NuxtLinkLocale} from "#components";

import sponsorsData from '~/assets/sponsors-data.json'
import type { Sponsor } from '~/types/sponsors'

const sponsors_gold: Sponsor[] = sponsorsData.gold

// Countdown state for 25 September 2025
const timeLeft = ref({ days: 0, hours: 0, minutes: 0, seconds: 0 })
const targetDate = new Date('2026-10-15T00:00:00')

function updateCountdown() {
    const now = Date.now()
    const diff = targetDate.getTime() - now
    if (diff <= 0) {
        timeLeft.value = { days: 0, hours: 0, minutes: 0, seconds: 0 }
        return
    }
    const secs = Math.floor((diff / 1000) % 60)
    const mins = Math.floor((diff / (1000 * 60)) % 60)
    const hrs  = Math.floor((diff / (1000 * 60 * 60)) % 24)
    const days = Math.floor(diff / (1000 * 60 * 60 * 24))
    timeLeft.value = { days, hours: hrs, minutes: mins, seconds: secs }
}

let timer: ReturnType<typeof setInterval>
onMounted(() => {
    updateCountdown()
    timer = setInterval(updateCountdown, 1000)
})
onUnmounted(() => clearInterval(timer))
</script>

<template>
    <div class="flex-1 px-4 py-6 space-y-8 lg:px-8 lg:py-12">

        <!-- Navigation rapide -->
        <section
            id="quick-nav"
            class="bg-off-white py-6 rounded-xl shadow max-w-3xl mx-auto flex flex-col items-center justify-center space-y-4"
        >
            <div class="text-center">
                <NuxtLinkLocale
                    to="/schedule"
                    class="bg-main-color-4 m-3 text-white px-4 py-2 rounded-lg hover:bg-off-white hover:text-main-color-4 hover:border-main-color-4 border-2 transition-colors font-medium"
                >
                    {{ $t('nav.schedule') }}
                </NuxtLinkLocale>
            </div>
        </section>

        <!-- HERO -->
        <section
            class="bg-off-white py-6 rounded-xl shadow max-w-3xl mx-auto flex flex-col items-center justify-center space-y-4"
        >
            <img
                src="/images/foss4g.svg"
                alt="FOSS4G Logo"
                class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl h-60 object-contain"
            />
            <div class="text-center">
                <div class="text-primary-dark text-2xl sm:text-2xl md:text-3xl font-extrabold mb-4">
                    {{ $t('head.subtitle') }}
                </div>

                <div class="text-main-color-3 text-lg sm:text-xl font-semibold">
                    <a class="underline" href="https://bel.brussels/fr" target="_blank" rel="noopener">BEL — Bruxelles Environnement</a> (Tour &amp; Taxis), {{ $t('index.address') }}
                </div>
            </div>
        </section>

        <!-- Inscriptions -->
        <section id="get-your-tickets" class="max-w-3xl mx-auto space-y-4">
            <h2 class="text-xl font-bold text-center">{{ $t('index.registration.title') }}</h2>

            <!-- Participation gratuite -->
            <div class="bg-off-white rounded-xl shadow px-5 py-5 flex gap-4 items-center justify-center text-center max-w-lg mx-auto">
                <span class="text-2xl shrink-0">🎟️</span>
                <div>
                    <h3 class="font-semibold text-sm mb-1">{{ $t('index.registration.free.title') }}</h3>
                    <p class="text-xs text-neutral-dark mb-2">{{ $t('index.registration.free.content') }}</p>
                    <p class="text-xs text-main-color-4 font-medium">{{ $t('index.registration.free.opensNote') }}</p>
                </div>
            </div>

            <!-- Note légale -->
            <p class="text-xs text-neutral-dark text-center italic px-4">{{ $t('index.registration.legalNote') }}</p>

            <!-- CTAs -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-off-white rounded-xl shadow px-5 py-5">
                    <p class="font-semibold text-sm mb-1">📧 {{ $t('index.registration.mailing.title') }}</p>
                    <p class="text-xs text-neutral-dark mb-3">{{ $t('index.registration.mailing.content') }}</p>
                    <a
                        :href="$t('index.registration.mailing.url')"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-block text-xs border-2 border-main-color-4 text-main-color-4 font-semibold px-4 py-1.5 rounded-lg hover:bg-main-color-4 hover:text-white transition"
                    >
                        {{ $t('index.registration.mailing.label') }}
                    </a>
                </div>
                <div class="bg-off-white rounded-xl shadow px-5 py-5">
                    <p class="font-semibold text-sm mb-1">🎟️ {{ $t('index.registration.pretix.title') }}</p>
                    <p class="text-xs text-neutral-dark mb-3">{{ $t('index.registration.pretix.content') }}</p>
                    <a
                        :href="$t('index.registration.pretix.url')"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-block text-xs border-2 border-main-color-2 text-main-color-2 font-semibold px-4 py-1.5 rounded-lg hover:bg-main-color-2 hover:text-white transition"
                    >
                        {{ $t('index.registration.pretix.label') }}
                    </a>
                </div>
            </div>
        </section>

        <!-- Our gold sponsors -->
        <section
            id="gold-sponsors"
            class="bg-off-white py-6 rounded-xl shadow max-w-3xl mx-auto flex flex-col items-center justify-center space-y-4"
        >

           <h2 class="text-lg font-bold mb-2 mx-8">
                {{ $t('index.goldSponsors.thanksTo') }}
                <NuxtLinkLocale to="/our-sponsors" class="underline text-main-color-2">
                    {{ $t('index.goldSponsors.goldSponsors') }}
                </NuxtLinkLocale>
                {{ $t('index.goldSponsors.whoSupportUs') }}
            </h2>

            <div>
                <a
                    v-for="(s, index) in sponsors_gold"
                    :key="index"
                    :href="s.link"
                    target="_blank"
                    rel="noopener"
                        :class="[
                          'group rounded-lg border border-neutral-light p-6 flex flex-col items-center text-center transition-shadow filter  sm:opacity-60 sm:hover:filter-none sm:hover:opacity-100 sm:hover:shadow-lg',
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


            <div class="w-full">
                <p class="text-right mx-4 text-main-color-2">
                    <NuxtLinkLocale to="/our-sponsors" class="underline">
                        {{ $t('index.goldSponsors.showAllSponsors') }}
                    </NuxtLinkLocale>
                </p>
            </div>
        </section>

        <!-- ABOUT -->
        <section
            id="about"
            class="bg-off-white px-6 py-6 rounded-xl shadow max-w-3xl mx-auto flex flex-col items-center"
        >
            <h2 class="text-lg font-bold mb-3">{{ $t('index.about.title') }}</h2>
            <p class="text-sm text-neutral-dark text-center mb-4">
                {{ $t('index.about.teaser') }}
            </p>

            <ul class="w-full grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
                <li class="flex flex-col items-center space-y-2">
                    <MdiIcon icon="mdiBullhorn" size="2.5em" class="text-main-color-2" />
                    <span class="text-sm font-medium text-main-color-2">{{ $t('index.about.features.keynotes') }}</span>
                </li>
                <li class="flex flex-col items-center space-y-2">
                    <MdiIcon icon="mdiAccountMultiple" size="2.5em" class="text-main-color-3" />
                    <span class="text-sm font-medium text-main-color-3">{{ $t('index.about.features.networking') }}</span>
                </li>
                <li class="flex flex-col items-center space-y-2">
                    <MdiIcon icon="mdiTools" size="2.5em" class="text-main-color-4" />
                    <span class="text-sm font-medium text-main-color-4">{{ $t('index.about.features.osgeoTools') }}</span>
                </li>
            </ul>

            <NuxtLinkLocale
                to="/about"
                class="flex justify-center border-2 border-primary text-primary font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white transition text-sm"
            >
                {{ $t('index.about.learnMore') }}
            </NuxtLinkLocale>
        </section>

        <!-- CARDS GRID -->
        <section class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-3xl mx-auto">
            <!-- Call for Topics -->
            <div class="bg-off-white rounded-xl shadow overflow-hidden p-5 ">
                <div class="w-full h-30 flex flex-row">
                    <h2 class="text-lg font-bold mb-2">{{ $t('cards.callForTopics.title') }}</h2>
                </div>
                <div class="flex flex-col justify-center sm:flex-row">
                    <div class="w-full sm:w-2/5 h-40 sm:h-auto">
                        <img
                            src="/images/call.png"
                            alt="Megaphone"
                            class="w-full h-full object-contain p-4"
                        />
                    </div>
                    <div class="flex flex-col justify-end flex-1">
                        <p class="text-sm text-neutral-dark mb-4">
                            {{ $t('cards.callForTopics.description') }}
                        </p>
                        <NuxtLinkLocale
                            to="/present"
                            class="flex justify-center border-2 border-main-color-3 text-main-color-3 font-semibold px-4 py-2 rounded-lg hover:bg-main-color-3 hover:text-white transition text-sm"
                        >
                            {{ $t('cards.callForTopics.button') }}
                        </NuxtLinkLocale>
                    </div>
                </div>
            </div>

            <!-- Schedule preview -->
            <div id="schedule" class="bg-primary-dark rounded-xl shadow p-5 flex flex-col">
                <h2 class="text-lg font-bold text-white mb-3">{{ $t('cards.schedulePreview.title') }}</h2>
                <NuxtLinkLocale
                    to="/schedule"
                    class="mt-4 inline-block bg-primary hover:bg-primary-dark text-off-white font-semibold px-4 py-2 rounded-lg transition text-sm self-start"
                >

                    {{ $t('cards.schedulePreview.button') }}
                </NuxtLinkLocale>
            </div>

            <!-- Call for Sponsors -->
            <div class="bg-off-white px-2 rounded-xl shadow overflow-hidden flex flex-col sm:flex-row">
                <div class="p-5 flex flex-col justify-center flex-1">
                    <h2 class="text-lg font-bold mb-2">{{ $t('cards.callForSponsors.title') }}</h2>
                    <p class="text-sm text-neutral-dark mb-4">{{ $t('cards.callForSponsors.description') }}</p>
                    <NuxtLinkLocale
                        to="/become-sponsor"
                        class="flex justify-center border-2 border-main-color-2 text-main-color-2 font-semibold px-4 py-2 rounded-lg hover:bg-main-color-2 hover:text-white transition text-sm"
                    >
                        {{ $t('cards.callForSponsors.button') }}
                    </NuxtLinkLocale>
                </div>
                <div class="w-full sm:w-2/5 h-40 sm:h-auto">
                    <img
                        src="/images/saving-pig.png"
                        alt="Piggy bank"
                        class="w-full h-full object-contain p-4"
                    />
                </div>
            </div>

            <!-- Volunteers -->
            <div class="bg-off-white px-2 rounded-xl shadow overflow-hidden flex flex-col sm:flex-row">
                <!-- Text panel -->
                <div class="p-5 flex flex-col justify-center flex-1">
                    <h2 class="text-lg font-bold mb-2">
                        {{ $t('cards.volunteers.title') }}
                    </h2>
                    <p class="text-neutral-dark text-sm mb-4">
                        {{ $t('cards.volunteers.description') }}
                    </p>
                    <NuxtLinkLocale
                        to="/volunteer"
                        class="flex justify-center border-2 border-main-color-4 text-main-color-4 font-semibold px-4 py-2 rounded-lg hover:bg-main-color-4 hover:text-white transition text-sm color4"
                    >
                        <span>{{ $t('cards.volunteers.button') }}</span>
                    </NuxtLinkLocale>
                </div>

                <div class="w-full sm:w-2/5 h-40 sm:h-auto">
                    <img
                        src="/images/participate.png"
                        alt="Volonteer icon"
                        class="w-full h-full object-contain"
                    />
                </div>
            </div>

            <!-- Call for Maps -->
            <div class="bg-off-white px-2 rounded-xl shadow overflow-hidden flex flex-col sm:flex-row">
                <div class="p-5 flex flex-col justify-center flex-1">
                    <h2 class="text-lg font-bold mb-2">
                        {{ $t('cards.callForMaps.title') }}
                    </h2>
                    <p class="text-neutral-dark text-sm mb-4">
                        {{ $t('cards.callForMaps.description') }}
                    </p>
                    <NuxtLinkLocale
                        to="/maps"
                        class="flex justify-center border-2 border-main-color-1 text-main-color-1 font-semibold px-4 py-2 rounded-lg hover:bg-main-color-1 hover:text-white transition text-sm"
                    >
                        {{ $t('cards.callForMaps.button') }}
                    </NuxtLinkLocale>
                </div>
                <div class="w-full sm:w-2/5 h-40 sm:h-auto flex items-center justify-center p-4">
                    <MdiIcon icon="mdiMap" size="5em" class="text-main-color-1 opacity-60" />
                </div>
            </div>
        </section>

        <!-- Countdown -->
        <section
            id="countdown"
            class="max-w-3xl mx-auto bg-gradient-to-r from-primary-dark text-white rounded-2xl shadow-lg p-8 grid grid-cols-2 sm:grid-cols-4 gap-4 text-center"
        >
            <div>
                <p class="text-4xl sm:text-5xl font-extrabold">{{ timeLeft.days }}</p>
                <span class="text-xs uppercase opacity-80">{{ $t('countdown.days') }}</span>
            </div>
            <div>
                <p class="text-4xl sm:text-5xl font-extrabold">{{ timeLeft.hours }}</p>
                <span class="text-xs uppercase opacity-80">{{ $t('countdown.hours') }}</span>
            </div>
            <div>
                <p class="text-4xl sm:text-5xl font-extrabold">{{ timeLeft.minutes }}</p>
                <span class="text-xs uppercase opacity-80">{{ $t('countdown.minutes') }}</span>
            </div>
            <div>
                <p class="text-4xl sm:text-5xl font-extrabold">{{ timeLeft.seconds }}</p>
                <span class="text-xs uppercase opacity-80">{{ $t('countdown.seconds') }}</span>
            </div>
        </section>
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