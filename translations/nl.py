from .var import year, day

month = "September"
belgium = "België"
foss4g_be = f"FOSS4G {belgium.capitalize()}"

translations_site = {
    "year": f"{year}",
    "date": f"{day} {month} {year}",
    "title": f"{foss4g_be} - {year}",
    "foss4g_be": f"{foss4g_be}",
    "description": "FOSS4G België is een gemeenschap van Free and Open Source Software voor Geospatial enthousiastelingen in België.",
    "keywords": "Foss4G Geo GIS Open Source OSGeo OSGeoBE België Nederland",
    "copyright": f"© {year} FOSS4G België. Alle rechten voorbehouden.",
    "not_a_conf": "This is not a conference",
    "only_possible": f"{foss4g_be} is only possible thanks to the support of",
    "partners_and_sponsors": f"our partners and sponsors",
    "bronze": "brons",
    "silver": "zilver",
    "gold": "gold",
}


translations_page = {
    "home": {
        "name": "Home",
    },
    "about_us": {
        "name": "Over Ons",
        "title": "Wie zijn wij?",
        "content": """<p>Wij zijn de Belgische afdeling van de Open Source Geospatial Foundation (OSGeo).</p>
<p>OSGeo is een non-profitorganisatie die zich inzet voor de ondersteuning van de ontwikkeling van open source geospatiale software en de promotie van hun gebruik. De stichting biedt financiële, organisatorische en juridische ondersteuning aan de open source geospatiale gemeenschap in brede zin. Het fungeert ook als een onafhankelijke juridische entiteit waaraan leden van de gemeenschap kunnen bijdragen met code, financiering en andere middelen, in de wetenschap dat hun bijdragen zullen worden bewaard voor het publieke belang. OSGeo fungeert ook als een organisatie voor bewustwording en pleitbezorging voor de open source geospatiale gemeenschap en biedt een gemeenschappelijk forum en gedeelde infrastructuur om de samenwerking tussen projecten te verbeteren.</p>
<p>De projecten van de stichting zijn allemaal vrij beschikbaar en bruikbaar onder een open source licentie die door de OSI is gecertificeerd.</p>
""",
    },
    "call_for_presentations": {
        "name": "Call for Presentations",
        "title": "Call for Presentations",
        "content": """
<p><b>Help ons om van de editie van 2025 een succes te maken. Stuur jouw voorstel voor een presentatie in voor 21 juli 2025</b>!</b></p>
<p>We mikken op een grote variatie aan sprekers: technologie, wetenschap, eindgebruikers en interessante (of bijzondere) gebruiksdoeleinden. We maken er graag opnieuw een conferentie van met een grote mate van diversiteit, zowel in onderwerpen als in mensen.</p>
<p>Een paar overwegingen in verband met presentaties:</p>
<ul>
  <li>De presentaties zijn 25 minuten inclusief een kort vragenrondje, dus bereid 20 minuten goed voor.</li>
  <li>Maak een duidelijk punt van wat je wil vertellen.</li>
  <li>Focus op de belangrijkste boodschap (of verhaal) dat je mee wil geven aan je publiek.</li>
</ul>
<p>Is dat kort? Ja, maar dat houdt het spannend en afwisselend. Achteraf is er ruim tijd om (met een drankje erbij) na te praten en de discussie aan te gaan. En laten we wel wezen, het is leuker als je iemand verbaasd naar huis laat gaan, zich verwonderend over de nieuwe dingen die die gezien heeft...</p>
<h3>Mogelijke onderwerpen</h3>
<ul>
  <li>Wat is er nieuw in de OSGeo wereld?</li>
  <li>Hoe gebruik jij open source GIS tools (QGIS, PostGIS, gdal, Proj, MapGuide, Mapproxy,...)?</li>
  <li>Hoe sla jij ruimtelijke data op en hoe behandel en/of distribueer je die data?</li>
  <li>Hoe laten open source tools jou toe om succesvol GIS oplossingen te implementeren?</li>
  <li>Hoe bouw je een effectieve open source oplossing?</li>
  <li>Hoe beheer je GIS toepassingen met open source tools?</li>
  <li>Hoe gebruik jij ruimtelijke open data? Hoe gebruik jij OpenStreetMap of andere open data in je werk? Heb je een coole applicatie ontwikkeld met open data? Ben je een OpenStreetMap geek en wil je discussiëren over OSM specificaties?</li>
  <li>Welke open geomatica tools zijn in gebruik bij administraties, bedrijven, leerkrachten en onderzoekers?</li>
  <li>Wat zijn de problemen en opportuniteiten die je tegenkwam bij de migratie van commerciële software naar open source software?</li>
  <li>Feedback op een 100% FOSS4G-verwerkingsketen: QGIS → PostGIS → GeoServer.</li>
  <li>Gebruik van aangepaste QGIS-extensies of specifieke Python-ontwikkelingen.</li>
  <li>Ruimtelijke visualisaties of analyses op grote schaal met PostgreSQL/PostGIS (bijv. dashboards, rasteranalyse, GIST/SP-GiST-indexen).</li>
  <li>Open source-oplossingen voor Belgische openbare instellingen of scholen (opleiding, implementatie, interoperabiliteit).</li>
  <li>Voorbeelden van integratie tussen QGIS en grote PostgreSQL/PostGIS-databases.</li>
  
  <li>Alle andere open source GIS en FOSS4G onderwerpen die we hierboven nog niet noemden.</li>
</ul>
<h3>Formaat van de presentaties</h3>
<p>Presentaties worden gegeven in het Engels, Nederlands of Frans. Elke presentatie krijgt ongeveer 20 minuten voor de presentatie en 5 minuten voor vragen. Voorstellen kunnen ingediend worden in het Nederlands, Frans of Engels</p>
<h3>Insturen</h3>
<p>Presentaties kunnen ingestuurd worden met <a href="https://docs.google.com/forms/d/e/1FAIpQLSdsFUSFvC8j9vrIIGVjlYshRHLIgRMtKdjiF2V2DagdtWxDmQ/viewform" target="_blank"> dit formulier</a>.</p>
<h3>Deadline</h3>
<p>De deadline voor het insturen van voorstellen voor presentaties is 21 juli 2025, maar we nodigen sprekers uit om hun voorstellen zo snel mogelijk in te sturen. Voorstellen zullen geëvalueerd worden door het programmacomité en de auteurs zullen bericht krijgen of hun bijdrage aanvaard werd.</p>
<p>Alle presentaties zullen op de website van het congres geplaatst worden.</p>
<h3>Evaluatiecriteria</h3>
<p>De keuze van presentaties zal gebaseerd zijn op de kwaliteit van de ingestuurde voorstellen, de relevantie voor het publiek en de plaats binnen het programma. De keuze van het programmacomité is finaal en bindend. De beslissingen van het programmacomité reflecteren niet de mening van de eventuele werkgevers van de leden.</p>
<h3>Vragen</h3>
<p>Als je vragen hebt over het indienen van het voorstel voor een presentatie kan je die stellen via presentation@foss4g.be.</p>
"""
    },
    "sponsors": {
        "title": "Onze Sponsors",
        "name": "Sponsors",
        "looking_for_sponsors": "Wij zijn op zoek naar sponsors om dit geweldige evenement, FOSS4G België, te financieren. Als u geïnteresseerd bent, neem dan contact met ons op.",
        "level": "niveau",
        "price": "prijs",
        "stand": "presentatiestand",
        "page_in_pgm": "pagina in het programma-boekje",
        "main_page_logo": "logo op de landings-pagina van de website",
        "sponsor_page_logo": "logo op de sponsors-pagina van de website",
        "participant_list": "deelnemerslijst",
        "page": "pagina",
        "level_and_advantages_title": "Niveaus en voordelen",
        "level_and_advantages_desc": """
<p><b>Presentatiestand</b>: Een plek met een tafel, twee stoelen en een stopcontact.</p>
<p><b>Pagina in het programma-boekje</b>: Onze sponsors moeten ons uiterlijk op 25 augustus 2025 hun logo, afbeelding en tekst leveren.</p>
""",
    },
    "volunteers": {
        "title": "Op zoek naar Vrijwilligers",
        "name": "Vrijwilligers",
        "looking_for_volunteers": "We zijn op zoek naar vrijwilligers om ons te helpen met de organisatie van FOSS4G België. Als je geïnteresseerd bent, neem dan contact met ons op.",
    },
    "previous_editions": {
        "title": "Onze Vorige Edities",
        "name": "Vorige Edities",
        "content": "FOSS4G-be wordt al vele jaren georganiseerd. Hier is de lijst van eerdere edities: ",
    },
    "previous_sponsors": {
        "title": "Bedankt!",
        "name": "Vorige Sponsors",
        "content": "Dank aan onze vorige sponsors zonder wie dit avontuur niet mogelijk zou zijn geweest.",
    },
    "contact": {
        "name": "Contact",
        "title": "Neem Contact Op",
        "content": "Voor vragen kunt u een e-mail sturen naar info@foss4g.be",
    },
}
