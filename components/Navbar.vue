<template>
    <nav class="fixed inset-x-0 top-0 bg-stone-light/90 backdrop-blur-md z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
            <!-- Logo / Brand -->
            <NuxtLinkLocale to="/" class="text-teal-dark font-bold text-lg">
                FOSS4G BELGIUM 2025
            </NuxtLinkLocale>

            <!-- Desktop Links & Lang Switch -->
            <div class="hidden md:flex items-center space-x-6">
                <ul class="flex space-x-6 items-center">
                    <li>
                        <NuxtLinkLocale to="/about" class="hover:text-teal-dark">{{ $t('nav.about') }}</NuxtLinkLocale>
                    </li>
                    <li>
                        <NuxtLinkLocale to="/our-sponsors" class="hover:text-teal-dark">{{ $t('nav.ourSponsors') }}</NuxtLinkLocale>
                    </li>
                    <li>
                        <NuxtLinkLocale to="/become-sponsor" class="hover:text-teal-dark">{{ $t('nav.becomeSponsor') }}</NuxtLinkLocale>
                    </li>
                    <li>
                        <NuxtLinkLocale to="/volunteer" class="hover:text-teal-dark">{{ $t('nav.volunteer') }}</NuxtLinkLocale>
                    </li>
                    <li>
                        <NuxtLinkLocale to="/contact" class="hover:text-teal-dark">{{ $t('nav.contact') }}</NuxtLinkLocale>
                    </li>
                    <!-- Schedule CTA Button -->
                    <li>
                        <NuxtLinkLocale 
                            to="/schedule" 
                            class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition-colors font-medium"
                        >
                            {{ $t('nav.schedule') }}
                        </NuxtLinkLocale>
                    </li>
                    <!-- Language Picker -->
                    <li class="relative">
                        <button
                            @click="toggleDropdown"
                            class="w-8 h-8 flex items-center justify-center bg-white rounded-full hover:shadow-md focus:outline-none"
                        >
                            <span class="text-sm font-medium text-gray-800">{{ locale.toUpperCase() }}</span>
                        </button>
                        <ul v-if="showDropdown"
                            class="absolute bottom-full top-0 mt-8 bg-white border border-gray-200 rounded shadow-lg z-50 min-w-max">
                            <li v-for="loc in localesToPick" :key="loc.code" class="whitespace-nowrap">
                                <NuxtLink :to="switchLocalePath(loc.code)" class="block bg-white px-4 py-2 hover:bg-gray-100"
                                          @click="hideDropdown">
                                    {{ loc.label }}
                                </NuxtLink>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Mobile Toggle Button -->
            <button
                @click="isOpen = !isOpen"
                aria-label="Toggle menu"
                class="md:hidden relative z-30 w-8 h-8"
            >
                <span v-if="!isOpen" class="absolute inset-0 flex flex-col items-center justify-center space-y-1.5">
                  <span class="block w-6 h-0.5 bg-teal-dark"></span>
                  <span class="block w-6 h-0.5 bg-teal-dark"></span>
                  <span class="block w-6 h-0.5 bg-teal-dark"></span>
                </span>
                        <span v-else class="absolute inset-0">
                  <span class="absolute inset-0 m-auto block w-6 h-0.5 bg-teal-dark transform rotate-45 origin-center"></span>
                  <span class="absolute inset-0 m-auto block w-6 h-0.5 bg-teal-dark transform -rotate-45 origin-center"></span>
                </span>
            </button>
        </div>

        <!-- Fullscreen Mobile Menu Overlay -->
        <transition name="fade">
            <div
                v-if="isOpen"
                @click.self="close"
                class="absolute inset-0 h-screen bg-stone-light/95 backdrop-blur-md flex flex-col items-center justify-center space-y-6 z-50"
            >
                <NuxtLinkLocale @click="close" to="/">{{ $t('nav.home') }}</NuxtLinkLocale>
                <NuxtLinkLocale @click="close" to="/about">{{ $t('nav.about') }}</NuxtLinkLocale>
                <NuxtLinkLocale @click="close" to="/our-sponsors">{{ $t('nav.ourSponsors') }}</NuxtLinkLocale>
                <NuxtLinkLocale @click="close" to="/become-sponsor">{{ $t('nav.becomeSponsor') }}</NuxtLinkLocale>
                <NuxtLinkLocale @click="close" to="/volunteer">{{ $t('nav.volunteer') }}</NuxtLinkLocale>
                <NuxtLinkLocale @click="close" to="/contact">{{ $t('nav.contact') }}</NuxtLinkLocale>

                <!-- Mobile Schedule CTA Button -->
                <NuxtLinkLocale 
                    @click="close" 
                    to="/schedule" 
                    class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-primary-dark transition-colors font-medium text-center"
                >
                    {{ $t('nav.schedule') }}
                </NuxtLinkLocale>

                <!-- Mobile Language Picker -->
                <ul class="flex space-x-4 mt-4">
                    <li
                        v-for="loc in localesToPick"
                        :key="loc.code"
                    >
                        <NuxtLinkLocale
                            :to="switchLocalePath(loc.code)"
                            class="px-3 py-2 bg-white rounded hover:bg-gray-100 text-sm"
                            @click="close"
                        >
                            {{ loc.label }}
                        </NuxtLinkLocale>
                    </li>
                </ul>
            </div>
        </transition>
    </nav>
</template>

<script setup lang="ts">
import { ref, computed } from 'vue'
import { useI18n } from 'vue-i18n'
import { useSwitchLocalePath } from '#i18n'

const isOpen = ref(false)
const showDropdown = ref(false)

function close() {
    isOpen.value = false
    showDropdown.value = false
}
function toggleDropdown() {
    showDropdown.value = !showDropdown.value
}
function hideDropdown() {
    showDropdown.value = false
}

// i18n composables
const { locale, availableLocales } = useI18n()
const switchLocalePath = useSwitchLocalePath()

// Define labels for languages
const languages = [
    { code: 'fr', label: 'Français' },
    { code: 'nl', label: 'Nederlands' },
    { code: 'en', label: 'English' }
]

const localesToPick = computed(() =>
    languages.filter(lang => availableLocales.includes(lang.code) && lang.code !== locale.value)
)
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.2s ease;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
