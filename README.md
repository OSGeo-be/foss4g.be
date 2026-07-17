# foss4gbe

This repository contains the code for our website: https://foss4g.be .

Different branches exist for every year that we organised.
For past editions, all uploaded content has been added to the repo using [git LFS](https://git-lfs.github.com/).

To run this site on your own computer you need php and for most years mysql. You can use the deploy scripts [ansible](https://github.com/OSGeo-be/website_deploy) for a full deploy or to get inspiration.

## How to build the 2025 website

This project is built with Nuxt 4 and Tailwind CSS. It generates a static, mobile-first, bento-grid–style site for the FOSS4G Belgium conference.

### 🚀 Prerequisites
- Node.js ≥ 24.x (LTS recommended—see https://nodejs.org/)
- npm (comes with Node.js)
- Git for cloning

🛠️ Setup
1. Clone the repo

```bash
git clone https://github.com/OSGeo-be/foss4g.be
cd foss4g.be
```

2. Install dependencies

```bash
npm install
```
No additional API keys or environment variables are required.

---

### 📡 Development & Static Generation
- **Start local dev server**

```bash
npm run dev
```
Visit http://localhost:3000.

- **Build & generate static site**

```bash
npm run generate
```
- Fully static output generated in `.output/public`
- You can preview this build using `npx serve .output/public`
- You can now deploy `.output/public` to any static hosting

---

### 🧩 Available Scripts
| Command            | Description                             |
| ------------------ | --------------------------------------- |
| `npm run dev`      | Start Nuxt in development mode          |
| `npm run generate` | Generate fully static site into `dist/` |

---

### 📂 Project Structure
```
├── assets/             # Uncompiled assets (styles, images)
├── components/         # Vue components (EventCard.vue, etc.)
├── composables/        # Custom composables (useSwipe.ts, etc.)
├── layouts/            # Application layouts
├── pages/              # Nuxt page components
│   ├── index.vue       # Landing page
│   ├── sponsors.vue    # Call for Sponsors page
│   └── schedule.vue    # Schedule page
├── public/             # Static files (SVGs, PNGs)
├── nuxt.config.ts      # Nuxt config (Tailwind, modules, generation options)
├── tailwind.config.ts  # Tailwind CSS config
└── package.json        # npm scripts & dependencies
```
--- 
### 🤝 Contributing
Any improvements, fixes, or enhancements are very welcome!
Simply push your changes to this branch;

### Add translations
To add translations, add them in the `locales` folder.
If the translation key doesn't exist yet, you'll need to add it in the three different languages: `en`, `fr`, and `nl` but also in the template files in the `pages` folder.

### Edit sponsors
To edit sponsors, edit the `sponsors.json` file in the `assets/data` folder.

### Edit the schedule
To edit the schedule:
- edit the `schedule-data.json` file in the `assets` folder