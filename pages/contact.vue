<template>
    <div class="flex-1 px-4 py-6 space-y-8 lg:px-8 lg:py-12">
        <section class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-3xl mx-auto">

            <!-- Email principal -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2 text-center">
                <h1 class="text-lg font-bold mb-3">{{ $t('contact.contactUs') }}</h1>
                <p class="text-sm text-neutral-dark mb-4">
                    {{ $t('contact.askByEmailTo') }}
                    <a href="mailto:board@osgeo.be" class="text-primary-dark underline">board@osgeo.be</a>.
                </p>
                <a
                    href="mailto:board@osgeo.be"
                    class="inline-flex items-center gap-2 border-2 border-primary text-primary font-semibold px-4 py-2 rounded-lg hover:bg-primary hover:text-white transition text-sm"
                >
                    <MdiIcon icon="mdiEmailOutline" size="1.1em" />
                    {{ $t('contact.sendAnEmail') }}
                </a>
            </div>

            <!-- Canaux de discussion -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow sm:col-span-2">
                <h2 class="text-base font-bold mb-4">{{ $t('contact.channels.title') }}</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">

                    <!-- Mailing list -->
                    <a href="https://lists.osgeo.org/cgi-bin/mailman/listinfo/belgium" target="_blank" rel="noopener"
                       class="flex items-start gap-3 rounded-lg border border-neutral-light p-3 hover:shadow transition group">
                        <MdiIcon icon="mdiEmailNewsletterOutline" class="text-main-color-4 shrink-0 mt-0.5" size="1.3em" />
                        <div>
                            <p class="text-xs text-neutral-dark font-semibold uppercase tracking-wide mb-0.5">{{ $t('contact.channels.mailingLabel') }}</p>
                            <p class="text-sm font-semibold group-hover:underline">Mailing list — Belgium</p>
                            <p class="text-xs text-neutral-dark">lists.osgeo.org · Discussions publiques</p>
                        </div>
                    </a>

                    <!-- Matrix général -->
                    <a href="https://matrix.to/#/#osgeo-be:matrix.org" target="_blank" rel="noopener"
                       class="flex items-start gap-3 rounded-lg border border-neutral-light p-3 hover:shadow transition group">
                        <MdiIcon icon="mdiMatrix" class="text-main-color-4 shrink-0 mt-0.5" size="1.3em" />
                        <div>
                            <p class="text-xs text-neutral-dark font-semibold uppercase tracking-wide mb-0.5">{{ $t('contact.channels.chatLabel') }}</p>
                            <p class="text-sm font-semibold group-hover:underline">Matrix — Salon général</p>
                            <p class="text-xs text-neutral-dark">#osgeo-be:matrix.org</p>
                        </div>
                    </a>

                    <!-- Matrix membres -->
                    <a href="https://matrix.to/#/#osgeo-be-members:matrix.org" target="_blank" rel="noopener"
                       class="flex items-start gap-3 rounded-lg border border-neutral-light p-3 hover:shadow transition group">
                        <MdiIcon icon="mdiMatrix" class="text-main-color-4 shrink-0 mt-0.5" size="1.3em" />
                        <div>
                            <p class="text-xs text-neutral-dark font-semibold uppercase tracking-wide mb-0.5">{{ $t('contact.channels.chatLabel') }}</p>
                            <p class="text-sm font-semibold group-hover:underline">Matrix — Salon membres</p>
                            <p class="text-xs text-neutral-dark">#osgeo-be-members:matrix.org</p>
                        </div>
                    </a>

                    <!-- Telegram -->
                    <a href="https://t.me/osgeobelgium" target="_blank" rel="noopener"
                       class="flex items-start gap-3 rounded-lg border border-neutral-light p-3 hover:shadow transition group">
                        <MdiIcon icon="mdiTelegram" class="text-main-color-4 shrink-0 mt-0.5" size="1.3em" />
                        <div>
                            <p class="text-xs text-neutral-dark font-semibold uppercase tracking-wide mb-0.5">{{ $t('contact.channels.chatLabel') }}</p>
                            <p class="text-sm font-semibold group-hover:underline">Telegram</p>
                            <p class="text-xs text-neutral-dark">@osgeobelgium</p>
                        </div>
                    </a>

                </div>
                <p class="text-xs text-neutral-dark mt-3 italic">
                    {{ $t('contact.channels.matrixNote') }}
                </p>
            </div>

            <!-- Réseaux sociaux -->
            <div class="bg-off-white px-6 py-6 rounded-xl shadow">
                <h2 class="text-base font-bold mb-4">{{ $t('contact.followUs') }}</h2>
                <div class="space-y-3">

                    <a href="https://fosstodon.org/@osgeobe" target="_blank" rel="noopener"
                       class="flex items-center gap-3 text-sm group hover:text-main-color-4 transition">
                        <MdiIcon icon="mdiMastodon" class="text-main-color-4 shrink-0" size="1.2em" />
                        <div>
                            <span class="font-medium group-hover:underline">Mastodon</span>
                            <span class="text-xs text-neutral-dark ml-1">@osgeobe@fosstodon.org</span>
                        </div>
                    </a>

                    <a href="https://twitter.com/osgeobe" target="_blank" rel="noopener"
                       class="flex items-center gap-3 text-sm group hover:text-main-color-4 transition">
                        <MdiIcon icon="mdiTwitter" class="text-main-color-4 shrink-0" size="1.2em" />
                        <div>
                            <span class="font-medium group-hover:underline">Twitter / X — OSGeo BE</span>
                            <span class="text-xs text-neutral-dark ml-1">@osgeobe</span>
                        </div>
                    </a>

                    <a href="https://twitter.com/foss4gbe" target="_blank" rel="noopener"
                       class="flex items-center gap-3 text-sm group hover:text-main-color-4 transition">
                        <MdiIcon icon="mdiTwitter" class="text-main-color-4 shrink-0" size="1.2em" />
                        <div>
                            <span class="font-medium group-hover:underline">Twitter / X — FOSS4G BE</span>
                            <span class="text-xs text-neutral-dark ml-1">@foss4gbe</span>
                        </div>
                    </a>

                    <a href="https://www.facebook.com/100068093147129" target="_blank" rel="noopener"
                       class="flex items-center gap-3 text-sm group hover:text-main-color-4 transition">
                        <MdiIcon icon="mdiFacebook" class="text-main-color-4 shrink-0" size="1.2em" />
                        <div>
                            <span class="font-medium group-hover:underline">Facebook — FOSS4G Belgium</span>
                            <span class="text-xs text-neutral-dark ml-1">Foss4g Belgium</span>
                        </div>
                    </a>

                    <a href="https://www.linkedin.com/company/osgeo-be" target="_blank" rel="noopener"
                       class="flex items-center gap-3 text-sm group hover:text-main-color-4 transition">
                        <MdiIcon icon="mdiLinkedin" class="text-main-color-4 shrink-0" size="1.2em" />
                        <div>
                            <span class="font-medium group-hover:underline">LinkedIn — OSGeo Belgium</span>
                            <span class="text-xs text-neutral-dark ml-1">osgeo-be</span>
                        </div>
                    </a>

                </div>
            </div>

            <!-- Ressources web + Devenir membre -->
            <div class="flex flex-col gap-4">

                <!-- Ressources web -->
                <div class="bg-off-white px-6 py-6 rounded-xl shadow flex-1">
                    <h2 class="text-base font-bold mb-4">{{ $t('contact.resources.title') }}</h2>
                    <div class="space-y-3">

                        <a href="https://wiki.osgeo.org/wiki/Belgium" target="_blank" rel="noopener"
                           class="flex items-center gap-3 text-sm group hover:text-main-color-4 transition">
                            <MdiIcon icon="mdiBookOpenVariant" class="text-main-color-4 shrink-0" size="1.2em" />
                            <div>
                                <span class="font-medium group-hover:underline">Wiki OSGeo Belgium</span>
                                <span class="text-xs text-neutral-dark block">wiki.osgeo.org/wiki/Belgium</span>
                            </div>
                        </a>

                        <a href="https://foss4g.be" target="_blank" rel="noopener"
                           class="flex items-center gap-3 text-sm group hover:text-main-color-4 transition">
                            <MdiIcon icon="mdiWeb" class="text-main-color-4 shrink-0" size="1.2em" />
                            <div>
                                <span class="font-medium group-hover:underline">Site FOSS4G Belgium</span>
                                <span class="text-xs text-neutral-dark block">foss4g.be</span>
                            </div>
                        </a>

                    </div>
                </div>

                <!-- Devenir membre -->
                <div class="bg-main-color-4/10 border border-main-color-4/30 px-6 py-5 rounded-xl">
                    <h2 class="text-base font-bold mb-2">{{ $t('contact.member.title') }}</h2>
                    <p class="text-xs text-neutral-dark mb-3">{{ $t('contact.member.content') }}</p>
                    <a
                        href="https://lists.osgeo.org/cgi-bin/mailman/listinfo/belgium"
                        target="_blank"
                        rel="noopener"
                        class="inline-flex items-center gap-2 bg-main-color-4 text-white font-semibold px-4 py-2 rounded-lg hover:opacity-90 transition text-xs"
                    >
                        <MdiIcon icon="mdiEmailOutline" size="1em" />
                        {{ $t('contact.member.cta') }}
                    </a>
                    <p class="text-xs text-neutral-dark mt-3 italic">{{ $t('contact.member.note') }}</p>
                </div>

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
