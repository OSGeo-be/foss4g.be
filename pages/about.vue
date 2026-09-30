<template>
    <div class="flex-1 px-4 py-6 space-y-8 lg:px-8 lg:py-12">
        <!-- Grid of cards -->
        <section class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-5xl mx-auto">
            <!-- Who We Are -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow overflow-hidden sm:col-span-2">
                <h2 class="text-lg font-bold mb-2">{{ $t('about.whoWeAre.title') }}</h2>
                <p class="text-sm text-neutral-dark">
                    {{ $t('about.whoWeAre.content') }}
                </p>
                <p>
                    <a href="https://www.osgeo.be" class="text-primary-dark underline">https://www.osgeo.be</a>
                </p>
            </div>

            <!-- Mission Card -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow overflow-hidden">
                <h3 class="text-lg font-bold mb-2">{{ $t('about.mission.title') }}</h3>
                <p class="text-sm text-neutral-dark">
                    {{ $t('about.mission.content') }}
                </p>
            </div>

            <!-- Support & Advocacy Card -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow overflow-hidden">
                <h3 class="text-lg font-bold mb-2">{{ $t('about.support.title') }}</h3>
                <p class="text-sm text-neutral-dark">
                    {{ $t('about.support.content') }}
                </p>
            </div>

            <!-- Event Info -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow overflow-hidden sm:col-span-2">
                <h3 class="text-lg font-bold mb-2">{{ $t('about.events.title') }}</h3>
                <p class="text-sm text-neutral-dark">
                    {{ $t('about.events.content') }}
                </p>
            </div>

            <!-- Open Source Projects Card -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow overflow-hidden sm:col-span-2">
                <h3 class="text-lg font-bold mb-2">{{ $t('about.projects.title') }}</h3>
                <p class="text-sm text-neutral-dark">
                    {{ $t('about.projects.content') }}
                </p>
                <p>
                    <a href="https://www.osgeo.org/" class="text-primary-dark underline">https://www.osgeo.org/</a>
                </p>
            </div>
        </section>
    </div>
</template>
