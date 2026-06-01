<template>
    <div class="flex-1 px-4 py-6 space-y-8 lg:px-8 lg:py-12">
        <section class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-3xl mx-auto">

            <!-- Hero -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2 flex flex-col sm:flex-row gap-6 items-center">
                <div class="flex-1">
                    <h1 class="text-xl font-bold mb-2">{{ $t('volunteer.title') }}</h1>
                    <p class="text-sm text-neutral-dark mb-3">{{ $t('volunteer.content') }}</p>
                    <div class="flex flex-wrap gap-3 text-xs">
                        <span class="bg-main-color-4/10 text-main-color-4 font-semibold px-3 py-1 rounded-full">
                            {{ $t('volunteer.timeline.opensLabel') }} {{ $t('volunteer.timeline.opensDate') }}
                        </span>
                        <span class="bg-main-color-2/10 text-main-color-2 font-semibold px-3 py-1 rounded-full">
                            {{ $t('volunteer.timeline.eventDate') }}
                        </span>
                    </div>
                </div>
                <img src="/images/participate.png" alt="Volunteer" class="w-28 h-28 object-contain shrink-0" />
            </div>

            <!-- Perks -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2">
                <h2 class="text-lg font-bold mb-4">{{ $t('volunteer.perks.title') }}</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div v-for="perk in perks" :key="perk.icon" class="flex items-start gap-3">
                        <MdiIcon :icon="perk.icon" class="text-main-color-4 shrink-0 mt-0.5" size="1.3em" />
                        <span class="text-sm text-neutral-dark">{{ $t(perk.key) }}</span>
                    </div>
                </div>
            </div>

            <!-- Roles -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2">
                <h2 class="text-lg font-bold mb-4">{{ $t('volunteer.roles.title') }}</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div v-for="role in roles" :key="role.key" class="border border-neutral-light rounded-lg p-4">
                        <div class="flex items-center gap-2 mb-1">
                            <MdiIcon :icon="role.icon" class="text-main-color-4 shrink-0" size="1.2em" />
                            <span class="font-semibold text-sm">{{ $t(role.titleKey) }}</span>
                        </div>
                        <p class="text-xs text-main-color-2 font-medium mb-1">{{ $t(role.spotsKey) }}</p>
                        <p class="text-xs text-neutral-dark">{{ $t(role.descKey) }}</p>
                    </div>
                </div>
            </div>

            <!-- Timeline -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow">
                <h2 class="text-lg font-bold mb-4">{{ $t('volunteer.timeline.title') }}</h2>
                <ol class="space-y-3">
                    <li v-for="item in timeline" :key="item.dateKey" class="flex gap-3 items-start text-sm">
                        <span v-if="item.inPerson" class="shrink-0 mt-0.5">
                            <MdiIcon icon="mdiMapMarker" class="text-main-color-2" size="1em" />
                        </span>
                        <span v-else class="shrink-0 w-2 h-2 rounded-full bg-main-color-4 mt-1.5"></span>
                        <div>
                            <span :class="item.inPerson ? 'font-semibold text-main-color-2' : 'font-semibold text-main-color-4'">{{ $t(item.dateKey) }}</span>
                            <span class="text-neutral-dark ml-1">— {{ $t(item.labelKey) }}</span>
                        </div>
                    </li>
                </ol>
            </div>

            <!-- How to apply -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow">
                <h2 class="text-lg font-bold mb-2">{{ $t('volunteer.apply.title') }}</h2>
                <p class="text-sm text-neutral-dark mb-4">{{ $t('volunteer.apply.content') }}</p>
                <a
                    :href="$t('volunteer.apply.matrixUrl')"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 border-2 border-main-color-4 text-main-color-4 font-semibold px-4 py-2 rounded-lg hover:bg-main-color-4 hover:text-white transition text-sm"
                >
                    <MdiIcon icon="mdiMatrix" size="1.1em" />
                    {{ $t('volunteer.apply.matrixLabel') }}
                </a>
            </div>

        </section>
    </div>
</template>

<script setup lang="ts">
const perks = [
    { icon: 'mdiTshirtCrew',           key: 'volunteer.perks.tshirt' },
    { icon: 'mdiAccountGroup',         key: 'volunteer.perks.networking' },
    { icon: 'mdiOpenSourceInitiative', key: 'volunteer.perks.community' },
]

const roles = [
    {
        key: 'reception',
        icon: 'mdiCardAccountDetails',
        titleKey: 'volunteer.roles.reception.title',
        spotsKey:  'volunteer.roles.reception.spots',
        descKey:   'volunteer.roles.reception.desc',
    },
    {
        key: 'room',
        icon: 'mdiMicrophone',
        titleKey: 'volunteer.roles.room.title',
        spotsKey:  'volunteer.roles.room.spots',
        descKey:   'volunteer.roles.room.desc',
    },
    {
        key: 'av',
        icon: 'mdiVideo',
        titleKey: 'volunteer.roles.av.title',
        spotsKey:  'volunteer.roles.av.spots',
        descKey:   'volunteer.roles.av.desc',
    },
    {
        key: 'social',
        icon: 'mdiMastodon',
        titleKey: 'volunteer.roles.social.title',
        spotsKey:  'volunteer.roles.social.spots',
        descKey:   'volunteer.roles.social.desc',
    },
    {
        key: 'maps',
        icon: 'mdiMap',
        titleKey: 'volunteer.roles.maps.title',
        spotsKey:  'volunteer.roles.maps.spots',
        descKey:   'volunteer.roles.maps.desc',
    },
    {
        key: 'coordination',
        icon: 'mdiAccountStar',
        titleKey: 'volunteer.roles.coordination.title',
        spotsKey:  'volunteer.roles.coordination.spots',
        descKey:   'volunteer.roles.coordination.desc',
    },
]

const timeline = [
    { dateKey: 'volunteer.timeline.opensDate',    labelKey: 'volunteer.timeline.opensLabel',    inPerson: false },
    { dateKey: 'volunteer.timeline.meetup1Date',  labelKey: 'volunteer.timeline.meetup1Label',  inPerson: true  },
    { dateKey: 'volunteer.timeline.meetup2Date',  labelKey: 'volunteer.timeline.meetup2Label',  inPerson: true  },
    { dateKey: 'volunteer.timeline.briefingDate', labelKey: 'volunteer.timeline.briefingLabel', inPerson: false },
    { dateKey: 'volunteer.timeline.eventDate',    labelKey: 'volunteer.timeline.eventLabel',    inPerson: false },
]
</script>
