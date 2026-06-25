import {defineNuxtConfig} from "nuxt/config";

export default defineNuxtConfig({
    ssr: true,

    css: ["~/assets/css/main.css"],

    $meta: {
        title: "FOSS4G Belgium 2026",
        description: "FOSS4G",
    },

    app: {
        pageTransition: {name: "page", mode: "out-in"},
        head: {
            title: "FOSS4G Belgium 2026",
            meta: [
                {charset: "utf-8"},
                {name: "viewport", content: "width=device-width, initial-scale=1"},
                {name: "description", content: "FOSS4G"},
            ],
            link: [{rel: "icon", type: "image/x-icon", href: "/favicon.ico"}],
        },
    },

    modules: [
      "@nuxtjs/tailwindcss",
      "@nuxtjs/google-fonts",
      "@nuxtjs/i18n",
      "nuxt-mdi",
    ],

    plugins: [
        // plugins
    ],

    i18n: {
        defaultLocale: 'fr',
        locales: [
            {
                code: 'fr',
                language: 'fr-BE'
            },
            {
                code: 'en',
                language: 'en'
            },
            {
                code: 'nl',
                language: 'nl-BE'
            }
        ],
        detectBrowserLanguage: {
            useCookie: true,
            cookieKey: 'i18n_redirected',
            redirectOn: 'root' // recommended for SEO
        },
        baseUrl: 'https://foss4g.be',
        strategy: 'prefix',
        vueI18n: "../i18n.config.ts",
    },

    // @ts-expect-error property googleFonts does not exist
    googleFonts: {
        families: {
            Montserrat: [400, 500, 600, 700],
        },
    },

    compatibilityDate: "2025-06-23",
});