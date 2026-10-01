<template>
    <svg
        viewBox="0 0 24 24"
        :style="styles"
        :width="_size"
        :height="_size"
        :preserveAspectRatio="preserveAspectRatio"
    >
        <path :d="path" />
    </svg>
</template>

<script setup lang="ts">
import { computed } from 'vue'
import {
    mdiAccount,
    mdiAccountCheck,
    mdiAccountGroup,
    mdiAccountMultiple,
    mdiAccountStar,
    mdiAccountVoice,
    mdiBookOpenVariant,
    mdiBullhorn,
    mdiCalendarRemove,
    mdiCardAccountDetails,
    mdiCheckCircleOutline,
    mdiChevronDown,
    mdiChevronUp,
    mdiCircleSmall,
    mdiClockOutline,
    mdiCoffee,
    mdiEmailNewsletter,
    mdiEmailOutline,
    mdiFacebook,
    mdiFileDownloadOutline,
    mdiGlassMugVariant,
    mdiInformation,
    mdiLaptop,
    mdiLightningBolt,
    mdiLinkedin,
    mdiListBoxOutline,
    mdiMagnify,
    mdiMap,
    mdiMapMarker,
    mdiMastodon,
    mdiMatrix,
    mdiMicrophone,
    mdiOpenInNew,
    mdiOpenSourceInitiative,
    mdiSend,
    mdiStar,
    mdiTicketOutline,
    mdiTools,
    mdiTshirtCrew,
    mdiTwitter,
    mdiVideo,
    mdiWeb,
} from '@mdi/js'

// Only the icons actually used across the site are imported above by name so
// Rollup can tree-shake the rest of the ~7000-icon @mdi/js package.
const icons: Record<string, string> = {
    mdiAccount,
    mdiAccountCheck,
    mdiAccountGroup,
    mdiAccountMultiple,
    mdiAccountStar,
    mdiAccountVoice,
    mdiBookOpenVariant,
    mdiBullhorn,
    mdiCalendarRemove,
    mdiCardAccountDetails,
    mdiCheckCircleOutline,
    mdiChevronDown,
    mdiChevronUp,
    mdiCircleSmall,
    mdiClockOutline,
    mdiCoffee,
    mdiEmailNewsletter,
    mdiEmailOutline,
    mdiFacebook,
    mdiFileDownloadOutline,
    mdiGlassMugVariant,
    mdiInformation,
    mdiLaptop,
    mdiLightningBolt,
    mdiLinkedin,
    mdiListBoxOutline,
    mdiMagnify,
    mdiMap,
    mdiMapMarker,
    mdiMastodon,
    mdiMatrix,
    mdiMicrophone,
    mdiOpenInNew,
    mdiOpenSourceInitiative,
    mdiSend,
    mdiStar,
    mdiTicketOutline,
    mdiTools,
    mdiTshirtCrew,
    mdiTwitter,
    mdiVideo,
    mdiWeb,
}

const props = withDefaults(defineProps<{
    icon: string
    size?: string
    flipX?: boolean
    flipY?: boolean
    preserveAspectRatio?: string
}>(), {
    size: undefined,
    flipX: false,
    flipY: false,
    preserveAspectRatio: 'xMidYMid meet',
})

const _size = computed(() => props.size ?? '1em')
const path = computed(() => icons[props.icon] ?? '')
const styles = computed(() => ({
    '--flip-x': props.flipX ? '-1' : '1',
    '--flip-y': props.flipY ? '-1' : '1',
}))
</script>

<style scoped>
svg {
    transform: scaleX(var(--flip-x, 1)) scaleY(var(--flip-y, 1));
}

path {
    fill: currentColor;
}
</style>
