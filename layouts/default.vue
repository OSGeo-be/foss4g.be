<template>
    <div>
        <Html :dir="head.htmlAttrs?.dir ?? 'ltr'" :lang="head.htmlAttrs?.lang ?? 'en'">

        <Head>
            <Title>{{ title }}</Title>
            <template v-for="link in head.link">
                <Link :id="link.hid" :hreflang="link.hreflang" :rel="link.rel"/>
            </template>
            <template v-for="meta in head.meta" :key="meta.hid">
                <Meta :id="meta.hid" :content="meta.content" :property="meta.property"/>
            </template>
        </Head>

        <Body>
            <!-- Wrapper div for sticky footer -->
            <div class="min-h-screen bg-[url('/images/background-topology.png')] font-sans bg-repeat text-primary-dark pt-8 md:pt-6 lg:pt-2">
                <!-- Navbar goes at the top -->
                <Navbar />

                <main class="min-h-screen flex flex-col font-sans text-primary-dark pt-10">
                    <!-- Spacer for mobile navbar -->
                    <slot/>
                </main>

                <footer class="p-4 text-xs text-white bg-transparent">
                    <div class="flex flex-wrap items-center justify-end space-x-1">
                        <!-- Credits / copyright etc-->
                    </div>
                </footer>
            </div>
        </Body>

        </Html>
    </div>
</template>

<script lang="ts" setup>
import {useRoute} from 'vue-router'
import {computed, ref, watch} from 'vue'
import {useI18n} from 'vue-i18n'
import {useLocaleHead} from '#i18n'
import {useNotification} from '~/composables/useNotification'

const route = useRoute()
const {t} = useI18n()
const head = useLocaleHead()
const notify = useNotification()

const showNotification = ref(false)
const notification = ref({
    message: '',
    persistent: false,
    duration: 5000,
    variant: 'neutral'
})

watch(notify, (payload) => {
    if (!payload) return

    notification.value = {
        message: payload.message,
        persistent: payload.persistent ?? false,
        duration: payload.duration ?? 5000,
        variant: payload.variant ?? 'neutral'
    }
    showNotification.value = true

    if (!notification.value.persistent) {
        setTimeout(() => {
            showNotification.value = false
        }, notification.value.duration)
    }
})

const title = computed(() => t(typeof route.meta.title === 'string' ? route.meta.title : 'head.title'))
// check if has argument "product"
</script>
