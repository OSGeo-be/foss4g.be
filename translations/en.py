from .var import year, day

month = "September"
belgium = "Belgium"
foss4g_be = f"FOSS4G {belgium.capitalize()}"

translations_site = {
    "year": f"{year}",
    "date": f"{day} {month} {year}",
    "title": f"{foss4g_be} - {year}",
    "foss4g_be": f"{foss4g_be}",
    "description": "FOSS4G Belgium is a community of Free and Open Source Software for Geospatial enthusiasts in Belgium.",
    "keywords": "FOSS4G Geo marker GIS Open Source",
    "copyright": f"© {year} FOSS4G Belgique. All rights reserved.",
    "not_a_conf": "This is not a conference",
    "only_possible": f"{foss4g_be} is only possible thanks to the support of",
    "partners_and_sponsors": f"our partners and sponsors",
    "bronze": "bronze",
    "silver": "silver",
    "gold": "gold",
}

translations_page = {
    "home": {
        "name": "Home",
    },
    "about_us": {
        "name": "About Us",
        "title": "Who are we?",
        "content": """<p>We are the Belgian chapter of the Open Source Geospatial Foundation (OSGeo).</p>
<p>OSGeo is a non-profit organization dedicated to supporting the development of open source geospatial software and promoting their use. The foundation provides financial, organizational, and legal support to the open source geospatial community at large. It also serves as an independent legal entity to which members of the community can contribute code, funding, and other resources, with the assurance that their contributions will be preserved for the public good. OSGeo also acts as an outreach and advocacy organization for the open source geospatial community and provides a common forum and shared infrastructure to improve collaboration between projects.</p>
<p>The foundation's projects are all freely available and usable under an open source license certified by the OSI.</p>
""",
    },
    "call_for_presentations": {
        "name": "Call for Presentations",
        "title": "Call for Presentations",
        "content": """
<p><b>Help make our 2025 edition a success. Send in your proposal for a presentation at FOSS4G Belgium before 21 July 2025!</b></p>
<p>We aim for a wide variety of speakers: technology, science, end users and interesting (or special) uses. We would like to make this another conference with a high degree of diversity, both in topics and in people.</p>
<p>A few considerations about presentations:</p>
<ul>
<li>The presentations are 25 minutes including a short Q&A session, so prepare well for 20 minutes.</li>
<li>Make a clear point about what you want to say.</li>
<li>Focus on the most important message (or story) that you want to convey to your audience.</li>
</ul>
<p>Is that short? Yes, but that keeps it exciting and varied. Afterwards there will be plenty of time to chat (over a drink) and engage in discussion. And let's face it, it's more fun if you let someone go home amazed at the new things they saw...</p>
<h3>Possible topics</h3>
<ul>
  <li>What's new in the in the OSGeo world?</li>
  <li>How do you use open source geospatial tools (QGIS, PostGIS, gdal, Proj, MapGuide, Mapproxy,...) ?
  <li>How do you store, treat and/or web distribute spatial data?</li>
  <li>How do open source tools allow you to successfully implement geospatial solutions?</li>
  <li>How to build an effective Open Source solution?</li>
  <li>How do you manage geospatial solutions with open source tools?</li>
  <li>How do you use open geospatial data? How do you use OpenStreetMap or other open data in your work? Did you create a cool application with open data? Are you an OpenStreetMap geek and would like to discuss OSM specifics?</li>
  <li>Which Open Geomatics tools are deployed and used by administrations, companies, teachers and researchers?</li>
  <li>What are the problems and opportunities that you encountered during migration from commercial software to open source software?</li>
  <li>Feedback on a 100% FOSS4G processing chain: QGIS → PostGIS → GeoServer.</li>
  <li>Examples of integration between QGIS and large PostgreSQL/PostGIS databases.</li>
  <li>Use of custom QGIS extensions or specific Python developments.</li>
  <li>Large-scale spatial visualization or analysis with PostgreSQL/PostGIS (e.g., dashboards, raster analysis, GIST/SP-GiST indexes).</li>
  <li>Open source solutions for Belgian public institutions or schools (training, deployment, interoperability).</li>
  <li>All other open geospatial and FOSS4G topics we didn't mention above.</li>
</ul>
<h3>Format of presentations</h3>
<p>Presentations will take place in English, Dutch or French. Each individual presentation will be allowed about 20 minutes and 5 minutes for Q&A. Submissions can be written in English, French or Dutch.</p>
<h3>Submission</h3>
<p>Proposals for presentations should be submitted using <a href="https://docs.google.com/forms/d/e/1FAIpQLSdsFUSFvC8j9vrIIGVjlYshRHLIgRMtKdjiF2V2DagdtWxDmQ/viewform" target="_blank">this form</a>.</p>

<h3>Deadline</h3>
<p>Deadline for submission is 21 july 2025, but we invite presenters to submit their proposals as soon as possible. Proposals will be evaluated by a program committee and authors will be notified of their acceptance.</p>
<p>All the presentations will be made available on the event website.</p>
<h3>How do we evaluate?</h3>
<p>The choice of presentations will be based on the quality of the submitted material, its interest for professional and student audiences and also its consistency with the program. The decision of the selection committee will be final and binding. Committee members speak on their own behalf, their choices do not reflect the position of their employer.</p>
<h3>Questions?</h3>
<p>If you have any questions about submitting a proposal for a presentation you can ask them via presentation@foss4g.be</p>
"""
    },

    "sponsors": {
        "title": "Our Sponsors",
        "name": "Sponsors",
        "looking_for_sponsors": "We are looking for sponsors to fund this amazing event known as FOSS4G Belgium. If you are interested, please get in touch with us.",
        "level": "level",
        "price": "price",
        "stand": "presentation stand",
        "page_in_pgm": "page in the program booklet",
        "main_page_logo": "logo on the main page of the website",
        "sponsor_page_logo": "logo on the sponsors page of the website",
        "participant_list": "participant list",
        "page": "page",
        "level_and_advantages_title": "Levels and Advantages",
        "level_and_advantages_desc": """
<p><b>Presentation Stand</b>: A spot with a table, two chairs, and a power outlet.</p>
<p><b>Page in the Program Booklet</b>: Our sponsors must provide us with their logo, image, and text by August 25, 2025.</p>
""",
    },
    "volunteers": {
        "title": "Looking for Volunteers",
        "name": "Volunteers",
        "looking_for_volunteers": "We are looking for volunteers to help us with the organization of FOSS4G Belgium. If you are interested, please get in touch with us.",
    },
    "previous_editions": {
        "title": "Our Previous Editions",
        "name": "Previous Editions",
        "content": "FOSS4G-be has been organized for many years. Here is the list of previous editions: ",
    },
    "previous_sponsors": {
        "title": "Thank You!",
        "name": "Previous Sponsors",
        "content": "Thanks to our previous sponsors without whom this adventure would not have been possible.",
    },
    "contact": {
        "name": "Contact Us",
        "title": "Contact Us",
        "content": "For any inquiries you can send an email to info at foss4g.be",
    },
}
