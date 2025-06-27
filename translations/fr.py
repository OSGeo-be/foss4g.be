from .var import year, day

month = "Septembre"
belgium = "Belgique"
foss4g_be = f"FOSS4G {belgium.capitalize()}"

translations_site = {
    "year": f"{year}",
    "date": f"{day} {month} {year}",
    "title": f"{foss4g_be} - {year}",
    "foss4g_be": f"{foss4g_be}",
    "description": "FOSS4G Belgique est une communauté d'enthousiastes du Logiciel Libre et Open Source pour la Géomatique en Belgique.",
    "keywords": "FOSS4G Geo marqueur GIS Open Source",
    "copyright": f"© {year} FOSS4G Belgique. Tous droits réservés.",
    "not_a_conf": "Ceci n'est pas une conférence",
    "only_possible": f"{foss4g_be} is only possible thanks to the support of",
    "partners_and_sponsors": f"our partners and sponsors",
    "bronze": "bronze",
    "silver": "argent",
    "gold": "or",
}

translations_page = {
    "home": {
        "name": "Accueil",  # nom de la page affiché dans le menu
    },
    "about_us": {
        "name": "À propos",  # nom de la page affiché dans le menu
        "title": "Qui sommes nous ?", # titre de la page
        "content": """<p>Nous sommes le chapitre belge de la Open Source Geospatial Foundation (OSGeo).</p>
<p>OSGeo est une organisation à but non lucratif dont la mission est de soutenir le développement de logiciels géospatiaux open source et de promouvoir leur utilisation. La fondation fournit un soutien financier, organisationnel et juridique à la communauté géospatiale open source au sens large. Elle sert également d'entité juridique indépendante à laquelle les membres de la communauté peuvent contribuer par du code, des financements et d'autres ressources, en étant assurés que leurs contributions seront préservées pour le bénéfice public. OSGeo agit également en tant qu'organisation de sensibilisation et de plaidoyer pour la communauté géospatiale open source et offre un forum commun ainsi qu'une infrastructure partagée pour améliorer la collaboration entre projets.</p>
<p>Les projets de la fondation sont tous librement disponibles et utilisables sous une licence open source certifiée par l'OSI.</p>
""",
    },
    "call_for_presentations": {
        "name": "Appel à présentations",
        "title": "Appel à présentations",
        "content": """
<p>Soyez partenaire du succès de l'édition 2025. Soumettez votre proposition avant le <b>21 juillet 2025 !</b></p>
<p>Nous sommes libres de couvrir une grande variété de publics et de sujets en lien avec la géomatique : techno, geek, use cases publics, privés ou professionnels.</p>
<p>Notre objectif est de faire une conférence avec un <b>haut degré de diversité</b>, tant dans les sujets que dans les personnes.</p>
<p>Quelques considérations à prendre en compte pour les présentations :<p>
<ul>
  <li>Les présentations durent <b>25 minutes</b>, y compris une courte session de questions-réponses, alors préparez-vous bien pendant 20 minutes.</li>
  <li>Dites-nous clairement ce que vous voulez partager.</li>
  <li>Concentrez-vous sur le message et la technologie principale que vous souhaitez transmettre à votre public.</li>
</ul>
<p>Vingt minutes, c'est court ? Oui, mais cela doit rester passionnant et varié. Ensuite, vous aurez tout le temps de discuter (autour d'un verre) et d'engager des conversations. Et avouons-le, c'est plus amusant si vous laissez quelqu'un rentrer chez lui émerveillé par les nouvelles choses qu'il a vues...</p>
<h3>Sujets possibles</h3>
<ul>
  <li>Quoi de neuf dans le monde OSGeo?</li>
  <li>Comment utilisez-vous les outils SIG open source (QGIS, PostGIS, gdal, Proj, MapGuide, Mapproxy, etc.)?</li>
  <li>Comment stockez-vous, traitez-vous et/ou diffusez-vous vos données spatiales sur le web?</li>
  <li>Comment les outils open source vous permettent-ils de mettre en œuvre des solutions SIG avec succès?</li>
  <li>Comment construire une solution open source efficace?</li>
  <li>Comment gérez-vous les solutions géospatiales avec des outils open source?</li>
  <li>Comment utilisez-vous OpenStreetMap ou d'autres jeux de données ouverts dans votre travail? Avez-vous créé une application intéressante avec des données ouvertes? Êtes-vous un passionné d'OpenStreetMap et souhaitez-vous discuter des spécificités d'OSM?</li>
  <li>Comment les gouvernements, entreprises, enseignants et chercheurs utilisent-ils la géomatique Open Source?</li>
  <li>Quels sont les problèmes et les opportunités rencontrés lors de la migration d'un logiciel commercial vers un logiciel open source ?</li>
  <li>Retour d’expérience sur une chaîne de traitement 100 % FOSS4G : QGIS → PostGIS → GeoServer.</li>
  <li>Exemples d’intégration entre QGIS et des bases PostgreSQL/PostGIS volumineuses.</li>
  <li>Utilisation d’extensions QGIS personnalisées ou développements Python spécifiques.</li>
  <li>Visualisation ou analyse spatiale à grande échelle avec PostgreSQL/PostGIS (ex : dashboards, analyse raster, indexes GIST/SP-GiST).<li>
  <li>Solutions open source pour les institutions publiques belges ou les écoles (formation, déploiement, interopérabilité).<li>
  <li>Autres sujets SIG open source et FOSS4G non mentionnés ci-dessus.</li>
</ul>
<h3>Format des présentations</h3>
<p>Les présentations se tiendront en anglais, le néerlandais ou le français. Chaque présentation disposera de 20 minutes et de 5 minutes pour les questions/réponses. Les propositions peuvent être soumises en néerlandais, en français ou en anglais.</p>
<h3>Soumettre votre présentation</h3>
<p>Les présentations peuvent être soumises en utilisant <a href="https://docs.google.com/forms/d/e/1FAIpQLSdsFUSFvC8j9vrIIGVjlYshRHLIgRMtKdjiF2V2DagdtWxDmQ/viewform" target="_blank">ce formulaire</a>.<p>
<h3>Date limite</h3>
<p>La date limite de soumission est le 21 juillet 2025, mais nous invitons les présentateurs à soumettre leurs propositions dès que possible. Les propositions seront évaluées par le Comité du programme et les auteurs seront informés si leur contribution a été acceptée.</p>
<h3>Critère d'évaluation</h3>
<p>Le choix des présentations sera basé sur la qualité des propositions soumises, leur pertinence pour le public et leur place dans le programme. Le choix du comité de programme est définitif et contraignant. Les décisions du comité de programme ne reflètent l'opinion d'aucun employeur des membres.</p>
<h3>Des questions?</h3>
<p>Si vous avez des questions sur la soumission d'une proposition de présentation, veuillez contacter presentation@foss4g.be.</p>
"""

    },
    "sponsors": {
        "name": "Sponsors",  # nom de la page affiché dans le menu
        "title": "Nos sponsors",
        "looking_for_sponsors": "Nous sommes à la recherche de sponsors pour financer ce super événement qu'est le FOSS4G Belgique. Si vous êtes intéressé, veuillez nous contacter.",
        "level": "niveau",
        "price": "prix",
        "stand": "stand de présentation",
        "page_in_pgm": "page dans le programme",
        "main_page_logo": "logo sur la page principale",
        "sponsor_page_logo": "logo sur la page des sponsors",
        "participant_list": "liste des participants",
        "page": "page",
        "level_and_advantages_title": "Niveaux et avantages",
        "level_and_advantages_desc": """
<p><b>Stand de présentation</b> : Un emplacement avec la mise à disposition d'une table deux chaises et une multiprise.</p>
<p><b>Page dans le programme</b> : Nos sponsors devront nous fournir logo & image et texte pour le 25 août 2025 au plus tard.</p>
"""
    },
    "volunteers": {
        "name": "Bénévoles",  # nom de la page affiché dans le menu
        "title": "A la recherche de bénévoles",
        "looking_for_volunteers": "Nous recherchons des bénévoles pour nous aider à organiser le FOSS4G Belgique. Si vous êtes intéressé, veuillez nous contacter.",
    },
    "previous_editions": {
        "name": "Éditions Précédentes",  # nom de la page affiché dans le menu
        "title": "Nos précédentes éditions",
        "content": "FOSS4G-be est organisé depuis de nombreuses années. Voici la liste des précédentes éditions : ",
    },
    "previous_sponsors": {
        "name": "Sponsors Précédents",  # nom de la page affiché dans le menu
        "title": "Merci !",
        "content": "Merci à nos sponsors précédents sans qui l'aventure n'auait pas été possible.",
    },
    "contact": {
        "name": "Contact",  # nom de la page affiché dans le menu
        "title": "Contactez-nous",
        "content": "Pour toute demande, vous pouvez envoyer un courriel à info at foss4g.be.",
    },
}
