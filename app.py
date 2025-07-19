from flask import Flask, render_template

from translations import get_translations, get_translated_page_names

LANGUAGES = {"en": "English", "fr": "Français", "nl": "Nederlands"}

PAGES = [  # List of the id of the pages
    "home",
    "sponsors",
    'call_for_presentations',
    "call_for_sponsors",
    "volunteers",
    "previous_editions",
    "previous_sponsors",
    "about_us",
    "contact",
]

SPONSORS = {
    "gold": [
    ],
    "silver": [
        {"name": "Champs-Libres", "url": "https://www.champs-libres.coop", "logo": "champs-libres.svg"},
        {"name": "Geo Solutions", "url": "https://geosolutions.be/", "logo": "geosolutions.png"},
    ],
    "bronze": [
        {"name": "Atelier Cartographique", "url": "https://atelier-cartographique.be/", "logo": "atelier-cartographique.svg"},
        {"name": "Spacebel", "url": "https://www.spacebel.com/", "logo": "spacebel.svg"},
    ]
}

app = Flask(__name__, static_folder="static", static_url_path="/static")


# To inject the base URL into the templates
@app.context_processor
def inject_base_url():
    return dict(base_url=app.config.get("BASE_URL", ""))


# Page for choosing the language
@app.route("/")
def index():
    return render_template("choose_your_language.html")


# Generic route for all pages and all the languages
@app.route("/<lang>/<page>.html")
def generic_page(lang, page):
    translations_page, translations_site = get_translations(lang, page=page)

    return render_template(
        f"{page}.html",
        pages_with_name=get_translated_page_names(PAGES, lang),
        sponsors=SPONSORS,
        page_id=page,
        page=translations_page,
        site=translations_site,
        lang=lang,
        languages=LANGUAGES.keys(),
    )


if __name__ == "__main__":
    app.run(debug=True)
