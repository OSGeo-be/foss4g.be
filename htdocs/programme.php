<?php include_once 'common.php';
include_once("mysql.php");
$languages = array(0 => "?", 1 => "nl", 2 => "fr", 3 => "en");
?>
<!DOCTYPE html>
<html lang="<?php echo $lang['URL_SHORT']; ?>">

<head>
	<title>
		<?php echo $lang['SITE_TITLE']; ?>
	</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?php echo $lang['SITE_DESCRIPTION']; ?>" />
	<meta name="keywords" content="<?php echo $lang['SITE_KEYWORDS']; ?>" />
	<meta name="geo.placename" content="Bd Simon Bolivar 30, WTC III, 1000 Bruxelles, Belgium" />
	<meta name="geo.placename" content="Bd Simon Bolivar 30, WTC III, 1000 Bruxelles, Belgium" />
	<meta name="geo.placename" content="Bd Simon Bolivar 30, WTC III, 1000 Bruxelles, Belgium" />
	<!--<meta name="geo.position" content="50.866248;4.349073" />-->
	<!--<meta name="geo.position" content="50.866248;4.349073" />-->
	<!--<meta name="geo.position" content="50.866248;4.349073" />-->
	<meta name="geo.region" content="BE-Brussels" />
	<!--<meta name="ICBM" content="50.866248, 4.349073" />	-->
	<!--<meta name="ICBM" content="50.866248, 4.349073" />	-->
	<!--<meta name="ICBM" content="50.866248, 4.349073" />	-->
	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<script src="/js/jquery.min.js" type="text/javascript"></script>
	<script src="/js/jquery.dropotron.min.js" type="text/javascript"></script>
	<script src="/js/jquery.scrollgress.min.js" type="text/javascript"></script>
	<script src="/js/skel.min.js" type="text/javascript"></script>
	<script src="/js/skel-layers.min.js" type="text/javascript"></script>
	<script src="/js/init.js" type="text/javascript"></script>
	<script src="/js/init.js" type="text/javascript"></script>
	<script src="/js/init.js" type="text/javascript"></script>
	<link rel="canonical" href="http://www.foss4g.be/" />
	<noscript>
		<link rel="stylesheet" href="/css/skel.css" />
		<link rel="stylesheet" href="/css/style.css" />
		<link rel="stylesheet" href="/css/style-wide.css" />
	</noscript>
	<style>
		span.author {
			font-size: 80%
		}

		span.lang {
			font-size: 60%;
			float: left
		}

		td a {
			float: right
		}

		div.abstract {
			display: none
		}
	</style>
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
			<h2>
				<?php echo $lang['MENU_PROGRAM']; ?>
			</h2>
			<p>
				<?php echo $lang['SITE_DATATOP']; ?>
			</p>
		</header>
		<div class="row">
			<div class="8u">
				<ul class="actions">
					<li><a href="/uploads/foss4g_sotm_booklet_2022.pdf" class="button alt">
							<?php echo $lang['MENU_BOOKLET']; ?>
						</a></li>
				</ul>
			</div>
			<div class="table-wrapper">
				<table class="alt">

					<tbody>
						<tr class="progr-1">
							<td colspan="3"><i class="fa fa-rocket"></i>
								<?php echo $lang["OPENING_SESSION"]; ?>
							</td>
						</tr>


						<tr>
							<td>8h30</td>
							<td class="talk" colspan="3" style="text-align:left;padding-left:30px">
								<?php echo $lang['REGISTRATION'] ?><br />
							</td>
						</tr>
						<tr>
							<td>9h15</td>
							<td class="talk" colspan="3" style="text-align:left;padding-left:30px">
								<?php echo $lang['WELCOME'] ?><br /><span class="author"> Organizer</span>
							</td>

						</tr>
						<tr>
							<td>9h30</td>
							<td class="talk" colspan="3" style="text-align:left;padding-left:30px">Status of OSGEO and
								Foss4G<br /><span class="author">delivered soon</span></td>

						</tr>

						<tr>
							<td>9h45</td>
							<td class="talk" colspan="3" style="text-align:left;padding-left:30px">Status of OSMBE and
								SotM<br /><span class="author">delivered soon</span></td>

						</tr>

						<tr class="progr-2">
							<td colspan="3">10h00 <i class="fa fa-coffee"></i>
								<?php echo $lang['FIRST_COFFEE']; ?>
							</td>
						</tr>



						<tr style="background-color: #fff;">
							<td colspan="3">
								<div class="table-wrapper">
									<table>
										<tbody>
											<tr>

												<td colspan="2" style="width:55%;text-align:center;">
													<h4><i class="fa fa-rocket fa-2x"></i>
														<?php echo $lang['PROG_PLENARY']; ?>
													</h4>
												</td>
							</td>
							</td>
							<td colspan="2" style="width:45%;text-align:center;">
								<h4><i class="fa fa-university fa-2x"></i>
									<?php echo $lang['PROG_SIDE'] ?>
								</h4>
							</td>

						</tr>
					</tbody>
				</table>
				<table class="alt tarde">
					<tbody>
						<td style="width:10%;background-color: #fff">10h20</td>
						<td style="width:45%;background-color: #fff;text-align:left;font-weight:300">
							Une cartographie correcte pour assurer la protection de la forêt de
							Soignes. Een correcte cartografie om het Zoniënwoud te beschermen<br />
							<span class="author">David Kuborn
								(FR/NL)</span>
							<a class="slidelogo" href="/uploads/foss4g-fiji-001-soignes.pdf" target="_blank"></a>

							<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
							<div class="toggled" style="display:none;">Un projet réunissant des
								bénévoles, des garde forestiers, des contributeurs OSM a permis de
								corriger la cartographie participative de la forêt de Soignes et
								donc de protéger la forêt. De nombreux sentiers 'Corona' ont été
								supprimés. Aujourd'hui, les visiteurs qui utilisent des outils
								cartographiques connectés sont aiguillés sur les bons chemins au
								bénéfice de la flore et de la faune de la forêt.
								Het werk is nog niet af: We moeten de OSM-gemeenschap betrekken met
								het bos en de bosbezoekers betrekken met OSM. De werkwijze die voor
								het Zoniënwoud werd toegepast moet overgebracht worden naar al de
								Brabantse wouden en naar al de bossen van België. De verbeteringen
								op OSM moeten toegepast worden in de officiële shapefiles van de
								beheerders en op de anderen carto toepassingen. Idealiter, moeten we
								inderdaad een weldoener vinden die ons in staat kan stellen om deze
								stappen te zetten..</div>

						</td>
						<td style="width:45%;background-color: #fff;text-align:left;font-weight:300">
							Geospatial and Apache Arrow: accelerating geospatial data exchange and
							compute<br />
							<span class="author">Joris Vandenbossche (EN)</span>
							<a class="slidelogo" href="https://jorisvandenbossche.github.io/talks/2022_FOSS4GBE_geoarrow/" target="_blank"></a>
							<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
							<div class="toggled" style="display:none;">The Apache Arrow
								(https://arrow.apache.org/) project specifies a standardized
								language-independent columnar memory format. It enables shared
								computational libraries, zero-copy shared memory, streaming
								messaging and inter-process communication without serialization
								overhead, etc. Nowadays, Apache Arrow is supported by many
								programming languages.Geospatial data often comes in tabular format,
								with one (or multiple) column with feature geometries and additional
								columns with feature attributes. This is a perfect match for Apache
								Arrow. Defining a standard and efficient way to store geospatial
								data in the Arrow memory layout
								(https://github.com/geoarrow/geoarrow) can help interoperability
								between different tools and enables us to tap into the full Apache
								Arrow ecosystem: - Efficient, columnar data formats. Apache Arrow
								contains an implementation of the Apache Parquet file format, and
								thus gives us access to GeoParquet
								(https://github.com/opengeospatial/geoparquet) and functionalities
								to interact with this format in partitioned and/or cloud datasets.-
								The Apache Arrow project includes several mechanisms for fast data
								exchange (the IPC message format and Arrow Flight for transferring
								data between processes and machines; the C Data Interface for
								zero-copy sharing of data between independent runtimes running in
								the same process). Those mechanisms can make it easier to
								efficiently share data between GIS tools such as GDAL and QGIS and
								bindings in Python, R, Rust, with web-based applications, etc.-
								Several projects in the Apache Arrow community are working on
								high-performance query engines for computing on in-memory and
								bigger-than-memory data. Being able to store geospatial data in
								Arrow will make it possible to extend those engines with spatial
								queries.</div>
						</td>
						</td>
						</td>
						</tr>
						<!-- Bloc de 25 minutes -->
						<tr>
						<tr>
						<tr>
							<td style="width:10%;background-color: #fff">10h50</td>
							<td style="background-color: #fff;text-align:left;font-weight:300">
								RouteYou & OpenStreetMap: bepalen van de mooiste route<br />
								<span class="author">Kevin Baker (NL)</span>
								<a class="slidelogo" href="/uploads/foss4g-fiji-002-routeyou.pdf" target="_blank"></a>
								<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
								<div class="toggled" style="display:none;">Het plannen en volgen van een route behoort
									tot de dagelijkse routine van iedereen. Kaarten zijn al lange tijd een belangrijk
									hulpmiddel om een traject tussen twee punten te bepalen. Met de juiste kaart vinden
									we in een mum van tijd de juiste weg. De volledigheid waarmee de wereld in kaart
									wordt gebracht en zo ook het probleemoplossend vermogen van kaarten, is de laatste
									jaren alleen maar toegenomen. Projecten zoals OpenStreetMap hebben deze versnelling
									mogelijk gemaakt.
									We zoeken echter niet alleen naar routes binnen een functionele context. Sporters en
									recreanten bijvoorbeeld zoeken vaak nieuwe locaties waar ze actief kunnen zijn. Het
									is daar dat RouteYou, als bedrijf actief op de markt van recreatieve
									navigatiediensten, op zoek gaat naar meerwaarde. RouteYou maakt gebruik van zijn
									groeiende community én de sterktes van OpenStreetMap om de mooiste locaties te
									detecteren en ontsluiten. En dat voor verschillende types activiteiten: wandelen,
									fietsen, motorrijden, paardrijden, skeeleren, ... . Vanuit RouteYou berekenen we hoe
									geschikt, populair, kwalitatief en aantrekkelijk locaties en paden zijn om zo de
									mooiste routes te berekenen. In deze presentatie geven we een inzicht in hoe deze
									combinatie tot stand komt. We behandelen de vraag hoe we populariteit zien binnen
									een geografische context en welke proxies we gebruiken we om tot een kwalitatieve
									ervaring te komen. Tot slot bekijken we nog de moeilijkheden, voordelen en
									opportuniteiten voor OpenStreetMap bij het hergebruik van deze kaart.</div>
							</td>
							<td style="background-color: #fff;text-align:left;font-weight:300">
								Mapfiles, the gateway to MapServer<br />
								<span class="author">Seth Girvin (EN)</span>
								<a class="slidelogo" href="https://geographika.github.io/foss4g-be-2022/" target="_blank"></a>
								<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
								<div class="toggled" style="display:none;">Mapfiles have been the gateway to MapServer
									since its creation, and are still going strong. This presentation will show how to
									create eye-catching maps, and display a wide variety of different datasources using
									example Mapfiles. New and possibly forgotten features of MapServer will also be
									highlighted. Finally, an overview will be given on the Python open source library
									mappyfile and its plugins, and how these can be used to help write and maintain
									Mapfiles. Presenter Summary: Seth Girvin - OS Geeo Charter Member and member of the
									MapServer PSC (Project Steering Committe) @geographika https://geographika.net/
								</div>
							</td>
							</td>
							</td>

						</tr>
						<!-- Fin bloc de 25 minutes -->
						<!-- Bloc de 25 minutes -->
						<tr>

							<td style="width:10%;background-color: #fff">11h20</td>
							<td style="background-color: #fff;text-align:left;font-weight:300">
								Brussels Cycling Potential: let's use Open Data to find out which streets are under- or
								over-used by cyclists!<br />
								<span class="author">Manuel Claeys Bouuaert (NL)</span>
								<a class="slidelogo" href="https://hackmd.io/@JsRh_tjKSqKC3-_pQSTQMA/BJamfnM8i#/" target="_blank"></a>
								<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
								<div class="toggled" style="display:none;">In this project I use Open Data and FOSS
									tools try to find out which streets in Brussels are under- or over-used by cyclists.
									I do this by comparing the actual trip count on each road segment to a predicted
									count. The hope is to create a map that could help city officials and traffic
									managers identify issues and/or usage potential: which potentially useful roads seem
									to be avoided, and why? Are there any unexpected routes taken? How could we improve
									our infrastructure along these routes? Etc.I use the BikeDataProject ‘bicycle count
									dataset’ for the actual count. To estimate the predicted usefulness of each road
									segment, I use the so called betweenness centrality measure for graphs (like a
									street network in our example). The resulting map has three modes: one showing each
									measure per street, and one comparing both, making it easier to spot under- ander
									over-used streets w.r.t. their potential. Let me show you how I went about this,
									think about possible improvements, and pan through the resulting map together!</div>
							</td>
							<td style="background-color: #fff;text-align:left;font-weight:300">
								Using Linked Data Event Streams to exchange planned mobility hindrance
								information<br />
								<span class="author">Oliver May (EN)</span>
								<a class="slidelogo" href="/uploads/foss4g-zanzibar-003-ldes.pdf" target="_blank"></a>
								<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
								<div class="toggled" style="display:none;">GIPOD is the platform that gathers all
									information about public domain occupancies (roadworks, utility company works,
									events, etc) and the resulting planned mobility hindrances in Flanders. Most of the
									information in GIPOD is published as open data through a classic API and OGC
									services. In 2022 Digital Flanders developed an LDES endpoint, publishing mobility
									hindrance data as a Linked Data Event Stream. During the talk I will give a brief
									introduction into LDES, demonstrate how this is published, and how to turn the LDES
									stream into a map using open source components.</div>
							</td>

						</tr>
						<!-- Fin bloc de 25 minutes -->
						<!-- Bloc de 25 minutes -->
						<tr>

							<td style="width:10%;background-color: #fff">11h50</td>
							<td style="background-color: #fff;text-align:left;font-weight:300">
								360° Everywhere – des données au service de la mobilité cyclable<br />
								<span class="author">Pierre Serpe (FR)</span>
								<a class="slidelogo" href="/uploads/foss4g-fiji-004-360everywhere.pdf" target="_blank"></a>

								<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
								<div class="toggled" style="display:none;">Le projet 360° everywhere du GRACQ Hesbaye
									est lauréat du défi 3D de l’édition 2022 du Géochallenge - un concours d’innovation
									sur l’exploitation des données géographiques en Wallonie. Ce projet explore les
									possibilités d’exploitation des données d’imagerie ouverte au niveau des rues pour
									constituer un modèle 3D d’une portion de voirie définie. Cette représentation 3D
									peut ensuite être utilisée pour modéliser de futurs aménagements cyclables ou
									l’implantation de mobilier urbain. Les données d’imagerie collectées sont mises à
									disposition à travers la plateforme Mapillary. Les contributeurs OSM les exploitent
									pour améliorer la représentation du territoire, notamment sur la thématique des
									aménagements cyclables. Grâce aux modèles 3D et à une carte des aménagements
									cyclables plus complète, le Gracq dispose d’outils permettant de dialoguer avec les
									autorités publiques. Celles-ci ont accès à un meilleur diagnostic territorial et une
									représentation plus immersive des situations de terrain et des aménagements futurs,
									ce qui les aide dans leur processus de décision. Le projet se veut réplicable et
									appelle à la participation citoyenne. C’est pourquoi les chaînes de traitement se
									basent sur des logiciels open source et les données issues du projet sont sous
									licence ouverte.</div>

							</td>
							<td style="background-color: #fff;text-align:left;font-weight:300">
								FOSS powering scalable GeoAI<br />
								<span class="author">Steven Smolders (EN)</span>
								<a class="slidelogo" href="/uploads/foss4g-zanzibar-004-geoai.pdf" target="_blank"></a>
								<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
								<div class="toggled" style="display:none;">Rapid advances in machine learning
									algorithms, open source frameworks and hardware are making it possible to process
									ever larger amounts of geodata in a shorter time, leading to ever more illuminating
									Geo Insights. In this talk we show how Computer Vision techniques powered by free
									and open source software are applied to aerial, satellite and mobile mapping imagery
									to map land cover at the garden scale, informal settlements, facades, solar panels,
									roof windows, ... and this with a quality and processing performance that far
									exceeds the more traditional techniques. In addition we demonstrate the use of
									machine learning to estimate building properties. </div>
							</td>
						</tr>
						<!-- Fin bloc de 25 minutes -->
					</tbody>
				</table>
			</div>
			</td>
			</tr>
			<tr class="progr-2">
				<td colspan="3" style="background-color: #f8f8f8">12h15 - 13h00<i class="fa fa-cutlery"></i>
					<?php echo $lang['PROG_LUNCH']; ?>
				</td>
			</tr>
			<tr class="progr-2">
				<td colspan="3" style="background-color: #f8f8f8">12h15 - 12h30<i class="fa fa-cutlery"></i>
					<?php echo $lang['PROG_LUNCH2']; ?>
				</td>
			</tr>

			<!-- Apres-midi -->
			<tr style="background-color: #fff;">
				<td colspan="3">
					<div class="table-wrapper">
						<table class="alt tarde">
							<tbody>

								<tr>
									<td style="width:10%;background-color: #fff">13h00</td>
									<td style="width:45%;background-color: #fff;text-align:left;font-weight:300">
										UPhacochR est un géocodeur pour la Belgique sous forme de package R. A partir
										d’une liste d’adresses, il permet de retrouver les coordonnées X-Y nécessaires à
										toute analyse spatiale, à un niveau de précision du bâtiment.<br />
										<span class="author">Hugo Périlleux (FR)</span>
										<!-- <a class="slidelogo" href="/uploads/foss4g-fiji-004-360everywhere.pdf" target="_blank"></a> -->
										<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
										<div class="toggled" style="display:none;">Le programme fonctionne avec les
											données publiques BeST Address compilées par BOSA à partir des données
											régionales URBIS (Région de Bruxelles-Capitale), CRAB (Région flamande) et
											ICAR (Région wallonne). La logique de phacochR est de réaliser une jointure
											inexacte entre la liste à géocoder et les données BeST Address (grâce aux
											packages R fuzzyjoin et stringdist). PhacochR dispose également de plusieurs
											options : il réalise des corrections orthographiques préalables (en français
											et néérlandais) et trouve le numéro le plus proche - de préférence du même
											côté de la rue - si les coordonnées du numéro indiqué sont inconnues. En cas
											de non disponibilité du numéro de la rue, le programme indique les
											coordonnées du milieu de la rue. PhacochR est compatible avec les 3 langues
											nationales : il géocode des adresses écrites en français, néérlandais ou
											allemand.Le package est très rapide (+/- 1min40 pour géocoder 20.000
											adresses dans les 3 langues et situées dans toute la Belgique) et le taux de
											succès pour le géocodage est élevé (en moyenne 90-95%). Phacochr constitue
											donc une alternative très performante face aux solutions existantes tout en
											reposant entièrement sur des données publiques et des procédures
											libres.https://phacochr.github.io/phacochr/ Joël Gires, Observatoire de la
											Santé et du Social - Hugo Périlleux, ULB</div>
									</td>
									<td style="width:45%;background-color: #fff;text-align:left;font-weight:300">
										Using MapComplete to crowdsource data about the public space<br />
										<span class="author">Pieter Vander Vennet (EN)</span>
										<a class="slidelogo" href="/uploads/foss4g-zanzibar-005-mapcomplete.pdf" target="_blank"></a>
										<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
										<div class="toggled" style="display:none;">MapComplete is an
											OpenStreetMap-viewer and editor which makes it easy to see, filter and
											collect geodata in the field about predefined topic. By presenting many
											thematic maps, a contributor can focus on what is interesting to them while
											removing the complexity of having all other types of features
											around.Together with Visit Flanders, a new thematic map about touristical
											POI was developed to gather information about charging stations for ebikes;
											benches, picnic tables, toilets and playgrounds. A process to import already
											existing datasets into OpenStreetMap was developed as well.This talk
											introduces MapComplete, show some of the many themes and features and will
											zoom in further on how it was used successfully in a campaign of Visit
											Flanders.</div>
									</td>
				</td>
				</td>
			</tr>
			<!-- Bloc de 25 minutes -->
			<tr>
				<td style="width:10%;background-color: #fff">13h30</td>
				<td style="background-color: #fff;text-align:left;font-weight:300">
					Open Zeeland: tien jaar transitie naar organisatiebrede open source<br />
					<span class="author">Thieu Caris (NL)</span>
					<a class="slidelogo" href="/uploads/foss4g-fiji-006-zeeland.pdf" target="_blank"></a>
					<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
					<div class="toggled" style="display:none;">
						De Provincie Zeeland is een open source organisatie. Sinds ongeveer 10 jaar
						werken we aan een transitie naar open source. We zullen kort onze reis van
						gesloten naar open toelichten, en zullen met name onze digital twin omgeving
						in opbouw (Cesium) laten zien.
						<br />
						Openheid d.m.v. het actief beschikbaar stellen van data, broncode of
						algoritmen waarop we beleidsbeslissingen nemen of die we inzetten t.b.v.
						uitvoering van wettelijke taken is belangrijk voor de Provincie Zeeland.
						Transparant, open en controleerbaar voor iedereen. Geschikt voor hergebruik,
						delen en samenwerken met anderen zonder daarbij afhankelijk te zijn van een
						leverancier of licentie. Openheid is noodzakelijk voor een gezonde relatie
						tussen overheid en burgers in een democratie. Deze openheid belijden we
						bijv. via ons open source beleid.
						<br />
						Het gaat vaak over open source techniek maar we merken ook dat we ons anders
						moeten organiseren rondom open source. Daarom werken we ook aan een Open
						Source Program Office (OSPO).
					</div>
				</td>
				</td>
				</td>
				<td style="background-color: #fff;text-align:left;font-weight:300">
					Completing all the buildings & addresses in OpenStreetMap in Belgium<br />
					<span class="author">Julien Minet & Joost Schouppe (EN)</span>
					<a class="slidelogo" href="https://slides.com/joostschouppe/why-osm-needs-buildings-addresses" target="_blank"></a>
					<!-- -->
					<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
					<div class="toggled" style="display:none;">A map with buildings looks better.
						Map data without addresses is hard to use for navigation. But to add them
						manually in OpenStreetMap is a lot of work. In some countries, government
						data was added to OpenStreetMap in quick bulk operations. In Belgium, this
						was possible in Brussels. But Flanders and Wallonia were later to open the
						data. Now that OSM already has a lot of data, bulk operations are much
						slower. In this presentation, we will show the new building import tool that
						integrates building and address data for the three Belgian regions. We'll
						demonstrate how we don't just copy, but make a new product combining the
						official data with OSM data and other datasets. Our work does not just
						improve OSM: we will show how our effort can be used by the official data
						source to improve their data. We'll talk about how we are working together
						with the Wallonia government to help each other with data. Finally, we will
						analyse how far along we are in the process of adding every last address and
						building in Belgium.</div>

				</td>
				</td>
				</td>
			</tr>
			<!-- Bloc de 25 minutes -->
			<tr>
				<td style="width:10%;background-color: #fff">14h00</td>
				<td style="background-color: #fff;text-align:left;font-weight:300">
					Collaboration win-win entre le Centre belge de Recherches Routières et la
					société Lutra consulting sur le développement de l'application mobile d'encodage
					Open-source Mergin Maps<br />
					<span class="author">Sébastien Defrance (FR)</span>
					<a class="slidelogo" href="/uploads/foss4g-fiji-007-crr.pdf" target="_blank"></a>
					<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
					<div class="toggled" style="display:none;">Le Centre belge de Recherches
						Routières (CRR) produit de nombreuses données avec une composante spatiale
						grâce à ses propres équipements et véhicules d’auscultation de la voirie
						(radar, gamma-sonde, caméras infra-rouge, chaise de mesure…). Jusqu’en 2021,
						la composante géographique de ces données n’était pas, ou peu, exploitée. Le
						CRR y a vu de belles opportunités de développement. Parmi celles-ci, la
						collaboration sur une application mobile d’encodage créée par la société
						anglaise Lutra Consulting (dix ans d'expérience dans les SIG open source et
						membre de l'équipe de développement principale de QGIS) a été une vraie
						success story : <br />• la création et le setup de formulaires d’encodage
						grâce à QGIS, <br />• la collecte de données géospatiales sur le terrain
						avec une application super user-friendly installée sur une tablette ou un
						smartphone directement connectée à un récepteur GNSS externe de très haute
						précision, <br />• le stockage et la gestion des campagnes de mesure dans un
						espace cloud collaboratif,<br />• et enfin, l’intégration totalement
						automatisée de ces données dans notre SDI via des outils de synchronisation
						ouverts. <br />L’esprit et la culture ‘open-source’ sont restés tout au long
						de cette collaboration car, si le CRR a pu exploiter des outils déjà
						développés par la société Lutra consulting ou d’autres partenaires, de
						nouvelles fonctionnalités ont été entièrement financées par le CRR et ont
						permis de faire profiter gratuitement toute la communauté des utilisateurs
						"merginmaps".</div>
				</td>
				<td style="background-color: #fff;text-align:left;font-weight:300">
					A quality assurance tool for railway station mapping in OpenStreetMap<br />
					<span class="author">Julien Minet (EN)</span>
					<a class="slidelogo" href="https://www.nobohan.be/docs/2022-11-17_foss4gbe_qarto/" target="_blank"></a>
					<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
					<div class="toggled" style="display:none;">Since 2015, SNCF is relying upon
						OpenStreetMap (OSM) data of about 425 railway stations in Paris -
						Ile-de-France for several applications intended to train users and for
						internal use. OSM data is used by SNCF for indoor mapping et pedestrian
						routing to help people to navigate through railway stations. SNCF has
						commissioned mapping campaigns in these stations and is constantly
						monitoring the quality of this data, using various quality insurance tools
						available in the OSM ecosystem. In 2021, Champs-Libres and atelier
						cartographique developed a dedicated quality assurance tool for this
						monitoring of OSM data. The tool aims at not only detecting anomalies in the
						OSM data (quality assurance) but also at monitoring change detection for
						particular objects. For quality insurance, we used the Osmose back-end
						application that allows to write adhoc queries to detect potential
						anomalies. However, for change detection, there was no clearly recognised
						solution that we could implement. Existing solutions had some drawbacks,
						such as relying solely on the OSM changeset which brings several drawbacks
						when it comes to monitoring specific objects. Therefore, we extended the
						Osmose application to change detection by recording changes (modification
						and deletion) in a database, using a script that consumes OSM diffs. Queries
						based on this database could be written and used within the Osmose context.
						We will present how the Osmose backend was adapted to be applied to change
						detection.</div>
				</td>
				</td>
				</td>
			</tr>
			<!-- Bloc de 25 minutes -->
			<tr>
				<td style="width:10%;background-color: #fff">14h30</td>
				<td style="background-color: #fff;text-align:left;font-weight:300">
					RISKPPP, un pas en avant vers la réduction des contaminations environnementales
					en produits phytosanitaires<br />
					<span class="author">Julien Herinckx (FR)</span>
					<a class="slidelogo" href="/uploads/foss4g-fiji-008-RISKPPP.pdf" target="_blank"></a>
					<!-- -->
					<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
					<div class="toggled" style="display:none;">Il est aujourd’hui grandement reconnu
						que l’application de produit de protection des plantes (PPP) à usage
						agricole exerce une pression certaine sur de multiples compartiments de
						l’environnement dont la ressource en eau (1). Pour protéger les personnes
						sensibles mais également pour parvenir à la prévention des pollutions de la
						ressource en eau, de nombreuses réglementations définissent une liste de
						zones à caractère sensible sur lesquelles toute application de PPP est
						interdite ou, à minima, conditionnée. L’identification des géométries
						relatives à chacune de ces zones relève cependant d’une importante
						difficulté pour l’agriculteur cherchant à respecter les restrictions
						appliquées à sa parcelle. Le projet RISKPPP veut répondre à ces difficultés
						en proposant deux modules interconnectés :<br />Le premier est une
						plateforme cartographique en Web Service permettant la visualisation directe
						de ces surfaces personnalisées selon la situation de l’utilisateur, ces
						contraintes étant modulées selon des combinaisons bien spécifiques de
						matériel / produits / cultures / techniques d’applications utilisées. Ces
						géométries peuvent ensuite être téléchargées par l’utilisateur et uploadée
						au sein d’une console de tracteur afin d’interrompre automatiquement toute
						pulvérisation au passage de ces géométries. <br />Le second est une base de
						donnée harmonisant et standardisant l’ensemble des données présentes sur les
						actes d’autorisation de la plateforme Phytoweb, l’actuelle référence
						fédérale en matière de législation des PPP, tout en l’enrichissant des
						restrictions en vigueur en Région wallonne. Cette base de donnée, également
						pourvue d’une API permettant l’extraction automatisée de données par tout
						organisme extérieur, s’imposera comme une nouvelle référence pour la
						consultation d’informations relatives à l’utilisation des PPP en
						Wallonie.<br />(1) Edwards, C. 1973, Environmental pollution by pesticides.
						In: Environmental Science Research Series (A. Hollaender, R. Probstein, D.
						Rall, E.S. Starkman, B. Welch), Springer, Boston, MA, 409-458</div>

				</td>
				<td style="background-color: #fff;text-align:left;font-weight:300">
					Using OpenStreetMap for mobility studies at ANYWAYS<br />
					<span class="author">Ben Abelshausen (EN)</span>
					<a class="slidelogo" href="https://slides.com/anywayseu/foss4gbe-2022" target="_blank"></a>
					<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
					<div class="toggled" style="display:none;">At ANYWAYS we use OpenStreetMap (OSM)
						in a variety of ways including route planning. We show how we use OSM and
						what the pitfalls are when doing route planning. We have a system in place
						using 'routeable tiles' that we plan to use to offer an always up-to-date
						route planning API on OSM data using the minutely diffs. </div>
				</td>
				</td>
				</td>

			</tr>
			<!-- Bloc de 25 minutes -->

			<!-- Bloc de 25 minutes -->
			</tbody>
			</table>
		</div>
		</td>
		</tr>


		<!-- Second coffe break -->
		<tr class="progr-2">
			<td colspan="3">14h55 - 15h20 <i class="fa fa-coffee"></i>
				<?php echo $lang['SECOND_COFFEE']; ?>
			</td>
		</tr>
		<!-- Third Session -->
		<tr style="background-color: #fff;">
			<td colspan="3">
				<div class="table-wrapper">
					<table class="alt tarde">
						<tbody>

							<tr>
								<td style="width:10%;background-color: #fff">15h20</td>
								<td style="width:45%;background-color: #fff;text-align:left;font-weight:300">
									Quelles technologies open source pour développer la Géoplateforme de l'IGN
									?<br />
									<span class="author">Bertrand Parpoil (FR)</span>
									<a class="slidelogo" href="https://pad.oslandia.net/p/9CwGCkKxY#/" target="_blank"></a>
									<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
									<div class="toggled" style="display:none;">Oslandia intervient au sein du
										groupement de fournisseur pour la construction de la Geoplateforme de l'IGN
										Français. Nous travaillons notamment à l'intégration et au développement de
										bibliothèques open source en accord avec la vision des geocommuns portée par
										l'IGN.</div>
								</td>
								<td style="width:45%;background-color: #fff;text-align:left;font-weight:300">
									Iaso - From data collection to geospatial data management in public health and
									more!<br />
									<span class="author">Élie Khalil (EN)</span>
									<a class="slidelogo" href="/uploads/foss4g-zanzibar-009-iaso.pdf" target="_blank"></a>
									<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
									<div class="toggled" style="display:none;">Iaso provides a number of core
										features in support of continuous geospatial data management: a mobile
										application, a web dashboard, a matching feature to merge various data
										sources, a data science and scripting friendly API and a seamless
										bi-directional integration with DHIS2 (standard health information system in
										low and middle income countries).Iaso is articulated around three essential
										components : A central georegistry interface, a mobile data collection tool
										and a micro planning interface. Those tools are integrated seamlessly with
										each other to provide a powerful platform to manage, update, merge and
										validate multiple data sources and structured information collected.
										Geospatial data from GPS collection to the management of multiple reference
										lists of organization units (Health, Administrative or School pyramid) are
										Iaso's foundation. Those features allow interconnecting collected data to
										existing hierarchical features coupled with planification and collection of
										survey campaigns in the field through the mobile application and the web
										platform.<br />Iaso is open source and built on a Python based backend
										combining Django and Postgres/Postgis ; the frontend is React based. Iaso
										exposes a full API providing various endpoints allowing data scientists to
										integrate data analysis pipeline through external analytic platform. As a
										geospatial data management platform, it provides versioning of every dataset
										and is designed to keep a full history of all the changes on the data of
										interest from the forms to the geometry or metadata of the organization
										units. It also features seamless integration with QGIS and other desktop
										applications through a templated Geopackage format.<br />Source:
										https://github.com/BLSQ/iaso</div>
								</td>
			</td>
			</td>
		</tr>
		<!-- Bloc de 25 minutes -->
		<tr>
			<td style="width:10%;background-color: #fff">15h50</td>
			<td style="background-color: #fff;text-align:left;font-weight:300">
				de·SIG·n : du système d'information géographique aux communautés de
				savoirs<br />
				<span class="author">Marine Declève & Julie Vanderhaeghen (FR)</span>
				<a class="slidelogo" href="/uploads/foss4g-fiji-010-design.pdf" target="_blank"></a>
				<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
				<div class="toggled" style="display:none;">Atelier Cartographique est une
					coopérative bruxelloise de design qui s’intéresse aux enjeux culturels des
					SIG, de la cartographie et de ses langages. Depuis 2010, nous expérimentons
					les possibilités de la cartographie contemporaine de concevoir des
					représentations spatiales dont l’esthétique suscite d’autres modes
					d’interactions sociales et politiques. Nous menons différents projets qui
					révèlent la capacité du design des SIG à mettre en relations de multiples
					univers cognitifs et à reconnecter le développement d’outils techniques à
					leurs usages. Le design cartographique est pour chacun·e des membres une
					posture de recherche et de travail, une approche transversale qui doit
					refléter la manière dont les interactions numériques s’ancrent socialement
					dans nos sociétés. <br />Depuis sa création, Atelier Cartographique est
					amené à accompagner divers projets tant institutionnels qu'associatifs ou
					artistiques et à proposer des ateliers qui mettent au centre la question du
					design. Ces ateliers rassemblent une série d'acteurs aux intérêts divers
					parfois divergeants. La conception de l'outil cartographique adapté au
					projet apparaît souvent comme un espace de médiation privilégé dans lequel
					le 'design thinking' joue un rôle important. C'est sur les enjeux de ces
					workshops SIG que nous interviendrons dans le cadre de Foss4G 2022.</div>
			</td>
			</td>
			</td>
			<td style="background-color: #fff;text-align:left;font-weight:300">
				Collaboration between Women in Copernicus and Geochicas in promoting a gender
				balanced Earth Observation and Geoinformation ecossytem<br />
				<span class="author">Nathalie Stephenne (EN)</span>
				<a class="slidelogo" href="/uploads/foss4g-zanzibar-010-wic.pdf" target="_blank"></a>
				<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
				<div class="toggled" style="display:none;">Women are part of the production of
					the Copernicus / Earth Observation (EO) / Geoinformation (GI) data but they
					are not always enough visible. Women work in these domains even if not in
					large numbers. To attract a new generation of girls and improve the comfort
					of the few women who choose to work in male dominated domains we can put
					some light on existing women and give them a voice. They are proud of their
					job, they can promote EO/GI. Let’s build a new gender balanced EO/GI
					ecosystem. OSGEO, FOSS4G and OSM could be partners in this world
					challenge.<br />Inspired by the exhibition NEREUS “Space Girls Space Women”
					a strong collaboration between Brittany and Wallonia, two regions’ actives
					in remote Sensing and involved in NEREUS build a consortium, including EARSC
					and EURISY and two universities from Spain and Austria, to promote the
					visibility of women in the Copernicus user uptake, the project Women in
					Copernicus. This Women in Copernicus initiative demonstrated the presence of
					a lot of Women in the Copernicus program. Women expressed their presence
					(location, education, job position and experience) in two surveys carried
					out in 2020 and 2022. <br />The initiative also established links with other
					women initiative to compare expertise and results. A close collaboration was
					designed with Geochicas. Geochicas is an initiative addressing the high
					ambition of integrating diversity in cloud sourced global mapping of
					OpenStreetMap (OSM). OpenStreetMap (OSM) is considered as the largest
					Geospatial database in the world, millions of contributors are adding data
					to have the most accurate representation of reality. According to different
					surveys, especially the one from Budhatoki et al. 2010 [2], only 3% of all
					mappers in OpenStreetMap are women. If we consider that a map is a
					representation of reality then we are creating maps which are showing a
					biased reality where one where half of the population of the world is
					overlooked (Bliss 2018). Gardner et al (2020) study confirms these
					unbalanced figures of contributions to OSM. These authors caution the impact
					of this difference on the way to map the world but notice subtle differences
					in modes of editing as men demonstrate higher values than women for
					updating, altering or modifying existing data. These findings relay a sense
					of a male focus on the accurate cartographic representation of topographical
					features; conversely, women’s focus on the creation of new data, conveys
					instead an emphasis on initial visibility (if not their specific nature)
					i.e. demonstrating the existence of topographical features where they might
					be otherwise entirely absent from the map. <br />The distinction between
					male and female participation in OSM was firstly done in the State of the
					Map (SOTM) Latam Sao Paulo in 2016, where the female attendees and speakers
					were respectively only 30% and 20% [1]. Since then, Geochicas puts all
					possible efforts to inform OSM members about the lack of diversity in the
					community Geochicas project improves the diversity of OSM by supporting the
					presence of Women. These contributions bring first another vision of the
					world, the female one, and secondly attract more local contributors with an
					increase in culture diversity. The first aim of the network is addressed by
					the contributions of these 250 new OSM partners. By the safe and welcoming
					atmosphere of the network, Geochicas build a network where each contributor
					feels like an essential part of the complete game. Geochicas is not only
					welcoming women to support each other, such as allies in the same game, but
					also companies that have b</div>

			</td>
			</td>
			</td>
		</tr>
		<!-- Bloc de 25 minutes -->
		<tr>
			<td style="width:10%;background-color: #fff">16h20</td>
			<td style="background-color: #fff;text-align:left;font-weight:300">
				Catalogues, portails, cadres et tableaux - Intégration des catalogues de données
				dans des sites webs<br />
				<span class="author">Vincent Bombaerts (FR)</span>
				<a class="slidelogo" href="/uploads/foss4g-fiji-011-spw.pdf" target="_blank"></a>
				<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
				<div class="toggled" style="display:none;">Le catalogue est un élément central
					dans une infrastructure de données spatiales. Au sein des organisations, le
					besoin de connecter les sites web au catalogue est récurrent. Les cas
					d’utilisation sont multiples : intégrer le catalogue dans un site
					institutionnel, déployer des catalogues thématiques, disposer d’interfaces
					simples, lister les dernières données publiées, créer des tableaux
					synthétiques, … Pour répondre à ces besoins, l’outil GeoNetwork permet de
					publier en quelques clics des portails thématiques. Ensuite, il est possible
					de brancher le catalogue ou un de ses portails dans d’autres
					sites.Différentes approches techniques ont été expérimentées ces dernières
					années, de l’API Javascript aux WebComponents. Nous présentons un retour
					d’expérience sur ces approches.</div>
			</td>
			<td style="background-color: #fff;text-align:left;font-weight:300">
				Setting up the Dutch QGIS User Group and what we have done so far.<br />
				<span class="author">Raymond Nijssen (EN)</span>
				<a class="slidelogo" href="/uploads/foss4g-zanzibar-011-qug.pdf" target="_blank"></a>
				<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>Infos</a>
				<div class="toggled" style="display:none;">The Dutch QGIS User Group was
					established in december 2019. This presentation will describe the process of
					setting up the organisation and show you the events that have happened so
					far. Warning, it might inspire you to set up a similar group in Belgium!
				</div>
			</td>
			</td>
			</td>
		</tr>

		<!-- Bloc de 25 minutes -->
		</tbody>
		</table>
		</div>
		</td>
		</tr>

		<tr class="progr-1">
			<td colspan="3" style="background-color: #f8f8f8"><i class="fa fa-university"></i>
				<?php echo $lang['PROG_CLOSING']; ?><br>
			</td>
		</tr>
		<tr style="background-color: #fff">
			<td>16h50 - 17h00</td>
			<td class="talk" style="text-align:left; padding-left:30px">Acknowledgement - Save the next date -
				After-work invitation
			</td>
		</tr>
		<tr style="background-color: #fff">
			<td>17h30 - 20h00</td>
			<td class="talk" style="text-align:left;padding-left:30px">
				<?php echo $lang['PROG_CONCLUSIONS']; ?><br>
				<div style="font-size: 80%">After-work breaker, in a user-friendly location ! </div>
				<!--<span class="author">xxxx</span>-->
			</td>
		</tr>
		</tr>
		</tr>

		</tbody>
		</table>
		</div>

		</div>
		<div class="row">
			<div class="12u">


			</div>
		</div>

		<div class="nav bottom" style="margin-bottom:5vh">
			<prev></prev><a href="index.php" title="<?php echo $lang['MENU_HOME']; ?>">
				<?php echo $lang['MENU_HOME']; ?>
			</a> <a href="contact.php" title="<?php echo $lang['MENU_CONTACT']; ?>">
				<?php echo $lang['MENU_CONTACT']; ?>
			</a>
			<next></next>
		</div>
	</section>


	<!-- CTA -->
	<section id="cta">

		<p>
			<?php echo $lang['FOOTER_THANKS']; ?>
		<p>
		<p>
			<?php echo $lang['FOOTER_THANKS_ALL']; ?>
		</p>
		<p>
			<?php echo $lang['FOOTER_MORE']; ?>
		</p>

	</section>

	<!-- Footer -->
	<footer id="footer">
		<?php include 'footer.inc'; ?>
	</footer>
	<script>
		$('.js-toggleNext').click(function () {
			abstractdiv = $(this).next();
			abstractdiv.toggle();
		});
	</script>
</body>

</html>
<?php
mysqli_close($link);
?>