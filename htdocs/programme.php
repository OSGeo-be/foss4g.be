<?php include_once 'common.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang['URL_SHORT']; ?>">
	<head>
		<title><?php echo $lang['SITE_TITLE']; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="<?php echo $lang['SITE_DESCRIPTION']; ?>" />
		<meta name="keywords" content="<?php echo $lang['SITE_KEYWORDS']; ?>" />
		<meta name="geo.placename" content="Avenue du Port 86 C/3002, Tour & Taxis, 1000 Brussels, Belgium" />
		<meta name="geo.position" content="50.866248;4.349073" />
		<meta name="geo.region" content="BE-Brussels" />
		<meta name="ICBM" content="50.866248, 4.349073" />		
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->		
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.dropotron.min.js" type="text/javascript"></script>
		<script src="js/jquery.scrollgress.min.js" type="text/javascript"></script>
		<script src="js/skel.min.js" type="text/javascript"></script>
		<script src="js/skel-layers.min.js" type="text/javascript"></script>
		<script src="js/init.js" type="text/javascript"></script>
		<script src="http://openlayers.org/en/v3.6.0/build/ol.js" type="text/javascript"></script>
		<link rel="canonical" href="http://www.foss4g.be/" />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<?php include 'header.inc'; ?>
			</header>

		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2><?php echo $lang['MENU_PROGRAM']; ?></h2>
					<p><?php echo $lang['SITE_DATATOP']; ?></p>
				</header>
				<div class="row">
					<div class="8u">
						<ul class="actions">
							<li><a href="inscription.php" class="button alt"><?php echo $lang['MENU_REG']; ?></a></li>
						</ul>
					</div>
					<div class="table-wrapper">
									<table class="alt">
									
										<tbody>
											<tr class="progr-1">
												<td colspan="3"><i class="fa fa-rocket"></i><?php echo $lang["OPENING_SESSION"];?></td>
											</tr>
												
											
											<tr>
												<td>9h00</td>
												<td class="talk" colspan="3" style="text-align:left;padding-left:30px"><?php echo $lang['REGISTRATION']?><br /></td>
											</tr>
											<tr>
												<td>9h30</td>
												<td class="talk" colspan="3" style="text-align:left;padding-left:30px"><?php echo $lang['WELCOME']?><br /><span class="author"> Dirk Frigne  &amp; Johan Van de Wauw </span></td>
												
											</tr>
											<tr>
												<td>9h50</td>
												<td class="talk" colspan="3" style="text-align:left;padding-left:30px">Open StreetMap<br /><span class="author"> Julien Fastré </span></td>
												
											</tr>
											
											<tr>
												<td>10h10</td>
												<td class="talk" colspan="3" style="text-align:left;padding-left:30px">Open standards (OGC)<br /><span class="author">Bart De Lathouwer (OGC)</span></td>
												
											</tr>
											
												<tr class="progr-2">
												<td colspan="3">10h30 <i class="fa fa-coffee"></i><?php echo $lang['FIRST_COFFEE'];?></td>
											</tr>
											
											<!--<tr>
												<td colspan="3" style="text-align:left;padding-left:30px"><i class="fa fa-database"></i>Données et services disponibles</td>
											</tr>-->
											
											<tr style="background-color: #fff;">
												<td colspan="3">
													<div class="table-wrapper">
													<table >
														<tbody>
															<tr>
															
																<td colspan="2" style="width:32%;text-align:center;"><h4><i class="fa fa-rocket fa-2x"></i><?php echo $lang['PROG_PLENARY'];?></h4>
																<a href="infos.html#plenieres" style="font-weight:300">Atrium</a></td> 
																<td colspan="2" style="width:32%;text-align:center;"><h4><i class="fa fa-university fa-2x"></i> <?php echo $lang['PROG_SIDE']?></h4>
																<a href="infos.html#workshops" style="font-weight:300">Sylva</a></td>
																<td colspan="2" style="width:30%;text-align:center;"><h4><i class="fa fa-gears fa-2x"></i><?php echo $lang['PROG_DEV'];?></h4>
																<a href="infos.html#workshops" style="font-weight:300">Aqua - Terra</a></td>
															</tr>
															<tr>
															</tbody>
													</table>
													<table class="alt tarde">
														<tbody>
																<td style="width:10%;background-color: #fff">11h00</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	L’écosystème Open Source SIG en (quelques) questions récurrentes, ou comment déconstruire les préjugés…<br />
																	<span class="author">  Vincent Picavet <br />
																	(Oslandia)</span>
																	<!--	-->
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">Certains mythes ont la vie dure. Certaines notions sont contre intuitives.Eléments de réponses argumentés à des questions que se pose tout Béotien face à l'écosystème et l'économie de l'Open Source (cartographique).</div>
																
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	 CDR are slowly merging towards an Open Source GIS environment<br />
																	<span class="author">Birgit Blaabjerg Bisgaard<br />
																	(Central Denmark Region, GIS team)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">As the first Danish region Central Denmark Region (CDR) are slowly merging towards an Open Source GIS environment.
													Now we are building up our PostGIS database with support from Jakob Lanstorp (DGE). We import geodata from the Danish Natural Environmental Portal (DNEP) and from the Danish Geodata Agency. We also use web services to see orthophotos for the period 1944 up to now.
													The Danish regions are administrating authority tasks concerning raw materials and contamination why we always need access to updated environmental, cadastre and address data (all mentioned data are been updated every day).
													We download data to PostGIS and present projects and web maps for our colleagues addressing their exact task. We will also merge to an Open Source Web Map system. For now we are looking at MapGuide, Open Layers and GeoExt..</div>
																</td>																			
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	 Sensor web enablement: a first implementation with istSOS<br />
																	<span class="author"> Daan Asma <br />
																	(Geosolutions)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">At FOSS4G, we would like to present our first implementation of the istSOS software. At our office buildings, we installed several sensors that are continuously monitoring two environment parameters. By means of the OGC Sensor Observations Service (SOS) InsertObservation request, the measurement values are sent to our istSOS platform, where they are stored according to the OGC Observations & Measurements data model in a PostgreSQL database.Besides the measurement and storage of the data, we also built a web mapping component to display the temporal and spatial distribution of our observations. .</div>
																</td>
															</tr>
															<!-- Bloc de 25 minutes -->
															<tr>
															
																<td style="width:10%;background-color: #fff">11h25</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	Cataloguing open geodata with CKAN : new features, Belgian perspective<br />
																	<span class="author">  Philippe Duchesne<br />
																	(High Latitudes)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">The CKAN opensource platform is used by many governments to catalog their open datasets, including geospatial data. In this context several geospatial CKAN modules have been developed to deal with the cataloguing and rendering of geospatial data and metadata, in particular Inspire-compliant services. This presentation will focus on some of the latest developments in these modules, and present several deployments in belgian administrations.</div>
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	 Efficient data inventarisation for KLIP Digitaal using QGIS<br />
																	<span class="author"> Steven Smolders<br />
																	(GIM)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">KLIP is a Flemish legislation to prevent digging damage to underground cables and pipelines by improving the information exchange between utility network operators and organisations undertaking excavation works.  Up until now the format in which geographic data is exchanged could be freely selected.  With the forthcoming digital phase of KLIP, operators will be obliged to reply with data conforming to the IMKL data model standard.  This is a problem for operators that do not yet have digital vector data.  An approach was developed in QGIS that allows to efficiently encode this data.  QGIS proved very powerful in handling the complex IMKL data model and supporting the associated symbology.  .</div>
																</td>																
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	  Un exemple d'utilisation de QGis comme interface de saisie de données en lien avec une base de données PostGIS.<br />
																	<span class="author"> Didier Peeters<br />
																	(ULB/Igeat)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;"> La présentation montrera quelques exemples de configurations de QGis et PostGIS développées pour un outil de saisie de données de terrain destiné à un secteur d'activité très spécifique mais qui est parfaitement transposable dans d'autres secteurs, tels que l'agriculture, l'environnement, l'urbanisme. .</div>
																</td>
															</tr>
															<!-- Fin bloc de 25 minutes -->
															<!-- Bloc de 25 minutes -->
															<tr>
															
																<td style="width:10%;background-color: #fff">11h50</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	Le WebGIS de BDU : passé, présent, futur<br />
																	<span class="author">Grégoire VANDENSCHRICK & Laurence MICHA <br />(Bruxelles Développement urbain)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">La plateforme BruGIS est développée et maintenue par Bruxelles Développement Urbain depuis 2006. Elle a connu plusieurs changements technologiques depuis sa mise en ligne. Le dernier, initié en 2011 est une transition vers l’OpenSource pour le client web, les serveurs cartographiques, et bientôt les bases de données. La présentation donnera le contexte structurel de la plateforme ; elle parcourra ensuite son évolution technologique pour détailler enfin l’état actuel de l’ architecture mise en place ; l’équipe et les moyens alloués, le trafic moyen auquel BruGIS fait face seront rapidement présentés ; la présentation finira par les nouveautés et les développement en cours. Une démonstration Live est proposée dans une session parallèle. Le code sera rendu public lors d’une session DEV.</div>
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	   HALE for e-reporting, Shiny/R for advanced interactive analyses and a Cordova mobile app: a fully open source SDI for Belgian air quality data<br />
																	<span class="author"> Olav Peeters<br />
																	(IRCEL – CELINE)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">After a brief overview of all operational open source SDI components deployed at IRCEL – CELINE (both viewing and downloading services), the presentation will focus on three specific FOSS applications: 1) using the HUMBOLDT Alignment Editor (HALE) for setting up queryable services of transformed data for e-reporting, 2) using data from web services in R and making user-friendly Shiny web apps, enabling users to perform powerful interactive analyses via a web interface and 3) using geo web service services to feed a mobile app in real-time..</div>
																</td>													
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	 Adding rotation support to Leaflet.draw<br />
																	<span class="author"> Jan De Moerloose<br />
																	(Geosparc)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">Leaflet.draw is a popular Leaflet plugin that adds support for drawing and editing vectors and markers on Leaflet maps.The current version supports editing polygons and polylines through dragging and moving vertices. In one of our projects we needed rotation support, however, an often requested feature which has remained open for now. In this talk we will go through some of the obstacles and remedies that were found along the way while implementing this extension.
													We have been trying to follow the design of Leaflet.Draw as much as possible by visually adding extra functionality through the creation of new marker handles. The interaction with the underlying geometry has also been streamlined to follow a similar pattern for all transformation types. Concepts like container space, projections and matrix transformations will be briefly touched upon, but will be explained in a clear and easy-to-understand manner.</div>
																</td>
															</tr>
															<!-- Fin bloc de 25 minutes -->
															<!-- Bloc de 25 minutes 
															<tr>
															
																<td style="width:10%;background-color: #fff">12h15</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	L’écosystème Open Source SIG en (quelques) questions récurrentes, ou comment déconstruire les préjugés…<br />
																	<span class="author">  Vincent Picavet <br />
																	(Oslandia)</span>
																	
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">Certains mythes ont la vie dure. Certaines notions sont contre intuitives.Eléments de réponses argumentés à des questions que se pose tout Béotien face à l'écosystème et l'économie de l'Open Source (cartographique).</div>
																
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	   A method to create hydrological models worldwide by using only open data<br />
																	<span class="author"> Jonas van Schrojenstein Lantman <br />
																	(Nelen & Schuurmans)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">Open data and open source software (postgis/gdal/QGis) is used to construct a hydrological model by using Digital Elevation Models (DEMs) in combination with other open data. The following hydrological structures are mined by combining DEM and hydrological network.</div>
																</td>																
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	   OL3-Cesium, La 3D pour OpenLayers<br />
																	<span class="author"> Bolognini Yves <br />
																	(xxx)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">Visualiser des données 3D dans des applications OpenLayers, c'est l'objectif du projet OL3-Cesium. Le globe 3D Cesium fonctionne sur tout navigateur équipé de WebGL, y compris les navigateurs mobiles , et ne nécessite pas de plugin. Grâce à l'intégration entre OpenLayers 3 et Cesium, il est possible de partager des données, de les afficher de façon dynamique (clustering)  et d'interagir avec le   globe   3D  (interrogation).  OL3-Cesium   est   déjà   utilisé   dans   plusieurs   projets   et   son développement   est   actuellement   particulièrement   actif.  La   présentation   sera   axée   sur   des   cas d'utilisation concrets, allant de la visualisation de points d'intérêt à l'insertion de bâtiments 3D sur un terrain.</div>
																</td>
															</tr>--><!--	-->
															<!-- Fin bloc de 25 minutes -->
														</tbody>
													</table>
													</div>
												</td>
											</tr>
											<tr class="progr-2">
												<td colspan="3" style="background-color: #f8f8f8">12h15<i class="fa fa-cutlery"></i><?php echo $lang['PROG_LUNCH'];?></td>
											</tr>
											
											<!-- Apres-midi -->
											<tr style="background-color: #fff;">
												<td colspan="3">
													<div class="table-wrapper">
													<table class="alt tarde">
														<tbody>
															
															<tr>
																<td style="width:10%;background-color: #fff">14h00</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	Using open source software to publish inspire data for Soil and Sub-soil<br />
																	<span class="author"> Pieter De Graef <br />
																	(Geosparc)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">This presentation demonstrates the case of the Flemish government regarding soil and subsoil data (Databank Ondergrond Vlaanderen – DOV) and it's responsibility towards Inspire. We'll discuss design decisions, application infrastructure, and why the choice for open source was made.</div>
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	 the frame of Lifewatch-WB (european infrastructure for biodiversity and ecosystem research)<br />
																	<span class="author"> Julien Radoux <br />
																	(UCL)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">Basically, our aim is to impower biodiversity research by developing open datasets and tools. Technically, we are processing large time series (hundreds of Tb) with Orfeo Toolbox (www.orfeo-toolbox.org), then we publish it with MapServer and display everything in Openlayers. We also organise QGIS training for biodiversity scientists.</div>
																</td>														
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	Démonstration Live du WebGIS BruGIS<br />
																	<span class="author">Grégoire VANDENSCHRICK, Antoine DEBRY<br />
																	(Bruxelles Développement urbain)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">BruGIS en démonstration Live complète. Les différentes fonctionnalités générales offertes par les librairies utilisées seront présentées (panneau cartographique et outils associés, arborescence des données, légende). Les améliorations des outils de base (informations attributaires, catalogue de données externes) seront expliqués. Les outils supplémentaires développés au sein de BDU (Mes cartes, Urbanalyse, Préférences …) et les nouveautés seront abordés et utilisés. Les différentes données proposées par la plateforme seront présentées et exploitées via quelques exemples métiers. L’historique, le contexte métier et l’architecture technique sont présentés lors d’une session plénière explicative. </div>
																</td>			
															</tr>
															<!-- Bloc de 25 minutes -->
															<tr>
																<td style="width:10%;background-color: #fff">14h25</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	QGis in het veld: tabletapp voor behandeling bodemerosie bezwaren<br />
																	<span class="author"> Roel Huybrechts<br />
																	(RealDolmen)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">Naast een waardig GIS programma voor gebruik op kantoor biedt QGis ook mogelijkheden als platform voor de ontwikkeling van specifieke GIS applicaties. In dit voorbeeld gaan we letterlijk met het programma het veld in om aan de hand van referentiekaarten en terreinkennis de bodemerosie van landbouwpercelen te controleren. QGis werd aangepast en uitgebreid voor gebruik op een tablet, inclusief vingervriendelijke interface en offline editing met synchronisatie naar een mastertabel met qgis-versioning.</div>
																</td>			
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	The potential of OpenStreetMap for land use/land cover mapping.<br />
																	<span class="author"> Julien Minet <br />
																	(Food Agriculture Climate Change)</span>
																	<!-- -->
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">We compared the mapping of forest types in Southern Belgium and Luxembourg using OpenStreetMap and Corine Land Cover. The potential of OpenStreetMap for research applications is discussed. </div>
																	
																</td>																
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	 geOrchestra, a free, modular and secure SDI<br />
																	<span class="author">  Jacon Frédéric <br />
																	(Camptocamp)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">geOrchestra is a free, modular and secure Spatial Data Infrastructure software born in 2009 to meet the requirements of the INSPIRE directive in Europe. Initially covering Brittany, then France, geOrchestra now spreads worldwide with SDIs in Bolivia, Nicaragua, Switzerland and India..</div>
																</td>	
															</tr>
															<!-- Bloc de 25 minutes -->
															<tr>
																<td style="width:10%;background-color: #fff">14h50</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	Managing the Flemish Functional Cycle Network: a FOSS4G solution<br />
																	<span class="author">  Karel Dieussaert<br/> (Geosolutions)<br />
																	</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">Everyday people make a lot of movements between their home and attraction poles in cities and municipalities such as work, school, stores,.... A lot of these functional movements could be done by bike if the appropriate infrastructure would be there. More than 10 years ago, The Flemish Ministry of Mobility and Public Works defined a Functional Cycling Network (FCN) to realise a logical and safe infrastructure for functional cycle movements between these environments. The scope of this project was to provide a GIS-based web tool to manage the data and provide tools to monitor, analyse and report about the FCN. This to improve the FCN according to defined standards for cycling infrastructure. As this tool is going to be used by the responsibles in every municipality of Flanders, they expect a reliable, performant and stable system that can manage this kind of data. </div>
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	PostgreSQL/PostGIS comme plateforme intégrée de GéoData Science.<br />
																	<span class="author"> Olivier Courtin<br />
																	(Oslandia)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">Utiliser PostgreSQL comme framework, couplé à PostGIS, R et Python, et entrevoir les enjeux et méthodes du nouveau métier de GeoData Scientist..</div>
																</td>														
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	 MapGuide OS 3.0 and REST interface<br />
																	<span class="author">  Danny Tuypens <br />
																	(RealDolmen)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">This presentation will give an overview of the possibilities of Mapguide with special attention to new features of the last release and the possibilities of the REST interface, such as integration with Openlayers and Cesium javascript libraries..</div>
																</td>
															</tr>
															<!-- Bloc de 25 minutes -->
															<tr>
																<td style="width:10%;background-color: #fff">15h15</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	Maps for  the  bicentenary  of Waterloo<br />
																	<span class="author">Christophe Cloquet <br />
																	(Poppy)</span>
																	<!-- -->
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">We  built online  and  printed  maps for  the  bicentenary  of  the  battle of Waterloo using open  source tools.  The  resulting  work  has  been  used  by  the  organizer,  the  fire  brigades,  the  police  and  the medical services before and during the event.</div>
																	
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	  A method to create hydrological models worldwide by using only open data<br />
																	<span class="author"> Jonas van Schrojenstein Lantman <br />
																	(Nelen & Schuurmans)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">Open data and open source software (postgis/gdal/QGis) is used to construct a hydrological model by using Digital Elevation Models (DEMs) in combination with other open data. The following hydrological structures are mined by combining DEM and hydrological network.</div>
																</td>			
																</td>																
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	Managing Web GIS maps using the Geomajas Deskmanager<br />
																	<span class="author">  Oliver May <br />
																	(Geosparc)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">The presentation is about the current state of the Geomajas Deskmanager plug-in, a configuration GUI for the Geomajas web GIS framework. We will demonstrate the usage of the management application and take a brief peek under the hood. The management interface allows you to configure maps, add external data from OGC sources, apply SLD styles, hide maps behind security, and so on. Finally the roadmap of the Deskmanager is discussed, mainly how to integrate with other OSS web GIS clients.</div>
																</td>
															</tr>
															<!-- Bloc de 25 minutes -->
															<tr>
																<td style="width:10%;background-color: #fff">15h40</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	How to get your entire university excited about (open)spatial data and tools<br />
																	<span class="author"> Leon van der Meulen <br />
																	(University of Groningen)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">Stimulating the use of (open)spatial data and analysis to enrich research, education and projects within all areas of research. In less than a year we helped over 100 researchers enhancing their work.</div>
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	Process-based, spatially-distributed hydrological modelling: the Open Source WetSpa-Python model.<br />
																	<span class="author"> Salvadore Elga<br />
																	(Vrije Universiteit Brussel)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">Spatially-distributed hydrological models are increasingly used for predicting spatially-variable hydrological processes at fine spatial and temporal scales. As a consequence, GIS and software frameworks spread fast. The need to integrate multiple domains and detailed spatio-temporal data into models often entails a high model complexity, which poses scientific and technical challenges for a model builder. Most of the hydrological model applications belong to the category “one model fists all”. A fixed model structure might however not “fit” all the analysed catchments and might impose the use of inappropriate parameterizations.  With our research, we aim at overcoming some of the shortcomings in traditional hydrology by developing the flexible process-based spatially-distributed hydrological model WetSpa-Pyhton. The model has an adaptable structure as every hydrological processes are implemented in a separate, generic module. Modules are integrated into a particular model with the help of a Python modelling framework prototype. Modules are interchangeable and can have different spatial and temporal resolution. This flexible model structure allows to partially compensate for the increased model complexity as all dependencies between modules are explicit and the relative importance of each module can be assessed. Theoretical and real case studies demonstrate some of the new features of the developed model.</div>
																</td>																
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	OL3-Cesium, La 3D pour OpenLayers<br />
																	<span class="author"> Bolognini Yves <br />
																	(Camptocamp)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
													<div class="toggled" style="display:none;">Visualiser des données 3D dans des applications OpenLayers, c'est l'objectif du projet OL3-Cesium. Le globe 3D Cesium fonctionne sur tout navigateur équipé de WebGL, y compris les navigateurs mobiles , et ne nécessite pas de plugin. Grâce à l'intégration entre OpenLayers 3 et Cesium, il est possible de partager des données, de les afficher de façon dynamique (clustering)  et d'interagir avec le   globe   3D  (interrogation).  OL3-Cesium   est   déjà   utilisé   dans   plusieurs   projets   et   son développement   est   actuellement   particulièrement   actif.  La   présentation   sera   axée   sur   des   cas d'utilisation concrets, allant de la visualisation de points d'intérêt à l'insertion de bâtiments 3D sur un terrain.</div>
																</td>
															</tr>
															<!-- Bloc de 25 minutes -->
														</tbody>
													</table>
													</div>
												</td>
											</tr>
											
											
											
												<tr class="progr-2">
												<td colspan="3">16h10 <i class="fa fa-coffee"></i><?php echo $lang['SECOND_COFFEE'];?></td>
											</tr>
																						
											<tr class="progr-1">
												<td colspan="3" style="background-color: #f8f8f8"><i class="fa fa-university"></i>Panel discussion: Where's the money? Disruptive Business Models in Geospatial Industry<br>
</td>
											</tr>
											<tr style="background-color: #fff">
												<td>16h30</td>
												<td class="talk">Note: this is a panel discussion cohosted with FOSS4G jointly organised by the Geospatial World Forum and OSGeo.be . The discussion will be in English (no translation provided).<br>
Speakers:<br/>
<ul style="text-align:left">
<li>Andreas Veispak, Acting Head of Unit, Unit Space Data for Societal
Challenges and Growth, DG GROW, European Commission</li>
<li>Joeri Robbrecht, Policy Analyst - Environmental Information Management,
Unit Governance, Information and reporting, DG Environment, European
Commission</li>
<li>Bart De Lathouwer, Director, Interoperability Programs, Europe, Open
Geospatial Consortium (OGC)</li>
<li>Claudio Mingrino, VP Executive Director EMEA, Hexagon Geospatial</li>
<li>Dirk Frigne, CEO, Geosparc</li>
</ul>
</td>
</tr>
											<tr style="background-color: #fff">
												<td>17h45</td>
												<td class="talk"><?php echo $lang['PROG_CONCLUSIONS'];?><br><span class="author">Johan Van de Wauw</span></td>
												<!--<td><a href="infos.html#plenieres">UB4.136</a></td> -->
											</tr>											
												<tr class="progr-2"><td colspan="3">18h15<i class="fa fa-glass"></i><?php echo $lang['PROG_DRINK']?></td></tr>
										</tbody>
									</table>
								</div>	
					
				</div>
				<div class="row">
					<div class="12u">


						</div>
					</div></div>
				<div class="nav bottom" style="margin-bottom:5vh"><prev></prev><a href="papers.php" title="<?php echo $lang['MENU_CALL3']; ?>"><?php echo $lang['MENU_CALL3']; ?></a> <a href="contact.php" title="<?php echo $lang['MENU_CONTACT']; ?>"><?php echo $lang['MENU_CONTACT']; ?></a><next></next></div>
			</section>

			
		<!-- CTA -->
			<section id="cta">
				
				<p><?php echo $lang['FOOTER_THANKS']; ?><p>
				<p><?php echo $lang['FOOTER_THANKS_ALL']; ?></p>
				<p><?php echo $lang['FOOTER_MORE']; ?></p>
				
			</section>
			
	<!-- Footer -->
		<footer id="footer">
			<?php include 'footer.inc'; ?>
		</footer>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-163845-56', 'auto');
		  ga('send', 'pageview');
		  $( ".js-toggleNext" ).click(function()
			{
				$(this).next().slideToggle();
				return false;
			}
		);
		</script>
	</body>
</html>
