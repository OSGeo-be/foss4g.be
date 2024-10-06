<?php include_once 'common.php';
include_once ("mysql.php");
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
	<link rel="stylesheet" href="/css/style-programme.css" />
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
		</header>


		<h3><?php echo $lang['PROG_WED'] . ': ' . $lang['PROG_WORKSHOP']; ?></h3>

<div id="prog-wed" class="prog-list">
	<div class="prog-item plenary intermezzo">
		<div class="prog-content">
			<div class="prog-title"><i class="fa fa-user"></i>
				<?php echo $lang['PROG_REGISTRATION']; ?></div>
			<div class="prog-sched icon">11h30 - 12h00</div>
		</div>
	</div>

	<div class="prog-item plenary intermezzo">
		<div class="prog-content">
			<div class="prog-title"><i class="fa fa-cutlery"></i>
				<?php echo $lang['PROG_LUNCH']; ?></div>
			<div class="prog-sched icon">12h00 - 13h00</div>
			<div class="prog-track icon">La Salle</div>
		</div>
	</div>

	<div class="prog-swipe"><?php echo $lang['PROG_SWIPE']; ?></div>

	<div class="prog-slot">
		<div class="prog-item tr1" style="grid-row: 1 / 3;">
			<div class="prog-content">
				<div class="prog-title">Point Cloud Processing with QGIS</div>
				<div class="prog-speaker">Hans van der Kwast</div>
				<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
				<div class="prog-tl">
					<div class="prog-sched icon">13h00 - 17h00</div>
					<div class="prog-track icon">BG 1</div>
				</div>
				<a class="prog-link icon" target="_blank" href="/talk/point-cloud-processing-with-qgis.php"
					title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
			</div>
		</div>

		<div class="prog-item tr7" style="grid-row: 1 / 3;">
			<div class="prog-content">
				<div class="prog-title">How to create custom plugins in QGIS</div>
				<div class="prog-speaker">Ricardo Maldonado Sevilla</div>
				<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
				<div class="prog-tl">
					<div class="prog-sched icon">13h00 - 17h00</div>
					<div class="prog-track icon">Judo 3</div>
				</div>
				<a class="prog-link icon" target="_blank" href="/talk/how-to-create-custom-plugins-in-qgis.php"
					title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
			</div>
		</div>

		<div class="prog-item tr4" style="grid-row: 1 / 3;">
			<div class="prog-content">
				<div class="prog-title">Setting up a boundaries database with PostGIS topology</div>
				<div class="prog-speaker">Benjamin Deswysen</div>
				<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
				<div class="prog-tl">
					<div class="prog-sched icon">13h00 - 17h00</div>
					<div class="prog-track icon">EHBO</div>
				</div>
				<a class="prog-link icon" target="_blank"
					href="/talk/setting-up-a-boundaries-database-with-postgis-topology.php"
					title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
			</div>
		</div>

		<div class="prog-item tr3" style="grid-row: 1;">
			<div class="prog-content">
				<div class="prog-title">Workshop 3DToolboxNL en 3D Leia viewer</div>
				<div class="prog-speaker">Marco van Antwerpen, Kamiel Verhelst, Wim Kosten <i>et. al.</i></div>
				<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
				<div class="prog-tl">
					<div class="prog-sched icon">13h00 - 15h00</div>
					<div class="prog-track icon">Judo 2</div>
				</div>
				<a class="prog-link icon" target="_blank" href="/talk/workshop-3dtoolboxnl-en-3d-leia-viewer.php"
					title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
			</div>
		</div>

		<div class="prog-item tr3" style="grid-row: 2;">
			<div class="prog-content">
				<div class="prog-title">Starten met Tailormap WebGIS</div>
				<div class="prog-speaker">Martijn van der Struijk, Kees-Jan Lammers</div>
				<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
				<div class="prog-tl">
					<div class="prog-sched icon">15h00 - 17h00</div>
					<div class="prog-track icon">Judo 2</div>
				</div>
				<a class="prog-link icon" target="_blank" href="/talk/starten-met-tailormap-webgis.php"
					title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
			</div>
		</div>

		<div class="prog-item tr5" style="grid-row: 1;">
			<div class="prog-content">
				<div class="prog-title">MapLibre: From Bits to Pixels. Generate, Serve, and Visualize Your Own
					Base
					Map
				</div>
				<div class="prog-speaker">Bart Louwers</div>
				<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
				<div class="prog-tl">
					<div class="prog-sched icon">13h00 - 15h00</div>
					<div class="prog-track icon">Hobby/dans</div>
				</div>
				<a class="prog-link icon" target="_blank"
					href="/talk/maplibre-from-bits-to-pixels-generate-serve-and-visualize-your-own-base-map.php"
					title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
			</div>
		</div>

		<div class="prog-item tr5" style="grid-row: 2;">
			<div class="prog-content">
				<div class="prog-title">Help Belgian national crisis management by improving OpenStreetMap</div>
				<div class="prog-speaker">Joost Schouppe</div>
				<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
				<div class="prog-tl">
					<div class="prog-sched icon">15h00 - 17h00</div>
					<div class="prog-track icon">Hobby/dans</div>
				</div>
				<a class="prog-link icon" target="_blank"
					href="/talk/help-belgian-national-crisis-management-by-improving-openstreetmap.php"
					title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
			</div>
		</div>

		<div class="prog-item tr6" style="grid-row: 1;">
			<div class="prog-content">
				<div class="prog-title">An intro to Point Cloud Processing using PDAL Pipelines</div>
				<div class="prog-speaker">Maxwell Lindsay</div>
				<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
				<div class="prog-tl">
					<div class="prog-sched icon">13h00 - 15h00</div>
					<div class="prog-track icon">Infopunt</div>
				</div>
				<a class="prog-link icon" target="_blank"
					href="/talk/an-intro-to-point-cloud-processing-using-pdal-pipelines.php"
					title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
			</div>
		</div>
	</div>


			<div class="prog-item plenary intermezzo">
				<div class="prog-content">
					<div class="prog-title"><i class="fa fa-glass"></i>
						<?php echo $lang['PROG_SOCIAL']; ?></div>
					<div class="prog-sched icon">20h00 - 23h00</div>
					<div class="prog-track icon">La Salle</div>
				</div>
			</div>
		</div>

		<h3><?php echo $lang['PROG_THU'] . ': ' . $lang['PROG_CONFERENCE']; ?></h3>

		<div id="prog-thu" class="prog-list">
			<div class="prog-item plenary intermezzo">
				<div class="prog-content">
					<div class="prog-title"><i class="fa fa-user"></i>
						<?php echo $lang['PROG_REGISTRATION']; ?></div>
					<div class="prog-sched icon">9h00 - 9h30</div>
					</div>
			</div>

			<div class="prog-item plenary intermezzo">
				<div class="prog-content">
					<div class="prog-title"><i class="fa fa-scissors"></i>
						<?php echo $lang['PROG_OPENING_SESSION']; ?></div>
					<div class="prog-sched icon">9h30 - 10h00</div>
					<div class="prog-track icon">Grote zaal</div>
					</div>
			</div>

			<!-- opening keynote -->

			<div class="prog-item plenary tr2">
				<div class="prog-content">
					<div class="prog-title">Enclaves en de rol van OSGeo in het onderwijs</div>
					<div class="prog-speaker">Evert Meijer</div>
					<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
					<div class="prog-tl">
						<div class="prog-sched icon">10h00 - 10h20</div>
						<div class="prog-track icon">Grote zaal</div>
					</div>
					<a class="prog-link icon" target="_blank" href="/talk/enclaves-en-de-rol-van-osgeo-in-het-onderwijs.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
						</div>
			</div>

			<div class="prog-item plenary intermezzo">
				<div class="prog-content">
					<div class="prog-title"><i class="fa fa-coffee"></i>
						<?php echo $lang['PROG_COFFEE']; ?></div>
					<div class="prog-sched icon">10h30 - 11h00</div>
					<div class="prog-track icon">Grote zaal en La Salle</div>
					</div>
			</div>

			<!-- 11h -->

			<div class="prog-swipe"><?php echo $lang['PROG_SWIPE']; ?></div>
			
			<div class="prog-slot">
				<div class="prog-item tr2">
					<div class="prog-content">
						<div class="prog-title">QGIS for Hydrological Applications</div>
						<div class="prog-speaker">Hans van der Kwast</div>
						<div class="prog-theme icon">QGIS</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h00 - 11h20</div>
							<div class="prog-track icon">Grote zaal</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/qgis-for-hydrological-applications.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr1">
					<div class="prog-content">
						<div class="prog-title">How Open Source allows an administration to be independent and ensure
							everyones'
							security</div>
						<div class="prog-speaker">Gael Kruwialis</div>
						<div class="prog-theme icon">Stacks and formats</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h00 - 11h20</div>
							<div class="prog-track icon">BG1</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/how-open-source-allows-an-administration-to-be-independent-and-ensure-everyones-security.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr5">
					<div class="prog-content">
						<div class="prog-title">Basisregistraties en OpenStreetMap mixen voor map5topo kaarten</div>
						<div class="prog-speaker">Just van den Broecke</div>
						<div class="prog-theme icon">OSM/Mapping</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h00 - 11h20</div>
							<div class="prog-track icon">Hobby/dans</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/basisregistraties-en-openstreetmap-mixen-voor-map5topo-kaarten.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr4">
					<div class="prog-content">
						<div class="prog-title">A Novel Approach to Estimating Building Density in the Brussels Region
						</div>
						<div class="prog-speaker">Steve Delhaye</div>
						<div class="prog-theme icon">Platforms</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h00 - 11h20</div>
							<div class="prog-track icon">EHBO</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/a-novel-approach-to-estimating-building-density-in-the-brussels-region.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr3">
					<div class="prog-content">
						<div class="prog-title">Personalized Road Access based on Vehicle Characteristics</div>
						<div class="prog-speaker">Bas Bussink</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h00 - 11h20</div>
							<div class="prog-track icon">Judo 2</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/personalized-road-access-based-on-vehicle-characteristics.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>
			</div>

			<div class="prog-slot">
				<div class="prog-item tr2">
					<div class="prog-content">
						<div class="prog-title">Exploring the power of PCRaster Tools</div>
						<div class="prog-speaker">Yonas Asfaha</div>
						<div class="prog-theme icon">QGIS</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h25 - 11h45</div>
							<div class="prog-track icon">Grote zaal</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/exploring-the-power-of-pcraster-tools.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
						</div>
				</div>

				<div class="prog-item tr1">
					<div class="prog-content">
						<div class="prog-title">Allmaps - Open source tools for curating, georeferencing and exploring IIIF maps</div>
						<div class="prog-speaker">Manuel Claeys Bouuaert</div>
						<div class="prog-theme icon">Stacks and formats</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h25 - 11h45</div>
							<div class="prog-track icon">BG1</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/allmaps-open-source-tools-for-curating-georeferencing-and-exploring-iiif-maps.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr5">
					<div class="prog-content">
						<div class="prog-title">Accessibility data for wheelchair users in OSM</div>
						<div class="prog-speaker">Robin Julien</div>
						<div class="prog-theme icon">OSM/Mapping</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h25 - 11h45</div>
							<div class="prog-track icon">Hobby/dans</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/accessibility-data-for-wheelchair-users-in-osm.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr4">
					<div class="prog-content">
						<div class="prog-title">Leveraging Open Source Geospatial Software for webservices: a NGI use
							case
							for
							automating FAIR data publication through FME and GeoServer</div>
						<div class="prog-speaker">Hoang Kim</div>
						<div class="prog-theme icon">Platforms</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h25 - 11h45</div>
							<div class="prog-track icon">EHBO</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/leveraging-open-source-geospatial-software-for-webservices-a-ngi-use-case-for-automating-fair-data-p.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr3">
					<div class="prog-content">
						<div class="prog-title">Liefde is leuk maar het moet wel betaalbaar blijven: Een business case voor Open Source</div>
						<div class="prog-speaker">Peter de Graaf</div>
						<div class="prog-theme icon">Open Source and organisations</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h25 - 11h45</div>
							<div class="prog-track icon">Judo 2</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/liefde-is-leuk-maar-het-moet-wel-betaalbaar-blijven-een-business-case-voor-open-source.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>
			</div>

			<div class="prog-slot">
				<div class="prog-item tr2">
					<div class="prog-content">
						<div class="prog-title">Using Open-Access Spatial Data for Enhanced Sanitation Planning</div>
						<div class="prog-speaker">Leonardo Porto Nazareth</div>
						<div class="prog-theme icon">QGIS</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h50 - 12h10</div>
							<div class="prog-track icon">Grote zaal</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/using-open-access-spatial-data-for-enhanced-sanitation-planning.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr1">
					<div class="prog-content">
						<div class="prog-title">Should you use Geoparquet?</div>
						<div class="prog-speaker">Tom van Tilburg</div>
						<div class="prog-theme icon">Stacks and formats</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h50 - 12h10</div>
							<div class="prog-track icon">BG1</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/should-you-use-geoparquet.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr5">
					<div class="prog-content">
						<div class="prog-title">3000 AED's in Vlaanderen</div>
						<div class="prog-speaker">Philipe Casteleyn</div>
						<div class="prog-theme icon">OSM/Mapping</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h50 - 12h10</div>
							<div class="prog-track icon">Hobby/dans</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/3000-aed-s-in-vlaanderen.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr4">
					<div class="prog-content">
						<div class="prog-title">Current Status and Future Challenges of Digital Twin Implementation in
							Seoul Metropolitan Government</div>
						<div class="prog-speaker">Tae-hyun Kim</div>
						<div class="prog-theme icon">Platforms</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h50 - 12h10</div>
							<div class="prog-track icon">EHBO</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/current-status-and-future-challenges-of-digital-twin-implementation-in-seoul-metropolitan-government.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
						</div>
						</div>
						
						<div class="prog-item tr3">
							<div class="prog-title">Pizza symbols in QGIS</div>
							<div class="prog-speaker">Raymond Nijssen</div>
							<div class="prog-theme icon">QGIS</div>
							<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
							<div class="prog-tl">
									<div class="prog-sched icon">11h50 - 12h10</div>
									<div class="prog-track icon">Judo 2</div>
								</div>
								<a class="prog-link icon" target="_blank" href="/talk/pizza-symbols-in-qgis.php"
									title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
									</div>
			</div>

			<div class="prog-item plenary intermezzo">
				<div class="prog-content">
					<div class="prog-title"><i class="fa fa-cutlery"></i>
						<?php echo $lang['PROG_LUNCH']; ?></div>
					<div class="prog-sched icon">12h15 - 13h15</div>
					<div class="prog-track icon">La Salle</div>
					</div>
			</div>

			<!-- 13h -->

			<div class="prog-swipe"><?php echo $lang['PROG_SWIPE']; ?></div>
			
			<div class="prog-slot">
				<div class="prog-item tr2">
					<div class="prog-content">
						<div class="prog-title">State of 3D Tiles</div>
						<div class="prog-speaker">Bert Temme</div>
						<div class="prog-theme icon">3D</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">13h15 - 13h35</div>
							<div class="prog-track icon">Grote zaal</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/state-of-3d-tiles.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr1">
					<div class="prog-content">
						<div class="prog-title">Open source in higher education, challenges and opportunities</div>
						<div class="prog-speaker">Paulo van Breugel</div>
						<div class="prog-theme icon">Education</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">13h15 - 13h35</div>
							<div class="prog-track icon">BG1</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/open-source-in-higher-education-challenges-and-opportunities.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr5">
					<div class="prog-content">
						<div class="prog-title">Ruimtelijke Plannen plug-in opnieuw schrijven met ChatGPT</div>
						<div class="prog-speaker">Tim Dubbeldam</div>
						<div class="prog-theme icon">APIs & Planning</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">13h15 - 13h35</div>
							<div class="prog-track icon">Hobby/dans</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/ruimtelijke-plannen-plug-in-opnieuw-schrijven-met-chatgpt.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
						</div>
						</div>

				<div class="prog-item tr4">
					<div class="prog-content">
						<div class="prog-title">GBIF.be, the Belgian Biodiversity Data portal</div>
						<div class="prog-speaker">André Heughebaert</div>
						<div class="prog-theme icon">Biodiversity</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">13h15 - 13h35</div>
							<div class="prog-track icon">EHBO</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/gbif-be-the-belgian-biodiversity-data-portal.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr3">
					<div class="prog-content">
						<div class="prog-title">Algorithm for network planning and design in PostGIS</div>
						<div class="prog-speaker">Wazir Sahebali</div>
						<div class="prog-theme icon">PostGIS</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">13h15 - 13h35</div>
							<div class="prog-track icon">Judo 2</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/algorithm-for-network-planning-and-design-in-postgis.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>
			</div>

			<div class="prog-slot">
				<div class="prog-item tr2">
					<div class="prog-content">
						<div class="prog-title">Leia, the open source Cesium-based 3D viewer</div>
						<div class="prog-speaker">Kamiel Verhelst</div>
						<div class="prog-theme icon">3D</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">13h40 - 14h00</div>
							<div class="prog-track icon">Grote zaal</div>
						</div>
						<a class="prog-link prog-slides icon" target="_blank" href="/talk/leia-the-open-source-cesium-based-3d-viewer.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
						</div>
						</div>

				<div class="prog-item tr1">
					<div class="prog-content">
						<div class="prog-title">Open Source WebMap as the new standard in one of Netherlands' largest
							educational institute. What hurdles do we need to leap?</div>
						<div class="prog-speaker">Gido Stoop</div>
						<div class="prog-theme icon">Education</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">13h40 - 14h00</div>
							<div class="prog-track icon">BG1</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/open-source-webmap-as-the-new-standard-in-one-of-netherlands-largest-educational-institute-what-hurd.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr5">
					<div class="prog-content">
						<div class="prog-title">Ruimtelijke plannen opvragen voor een GIS-viewer - van WFS naar API
						</div>
						<div class="prog-speaker">Fabian Feijen</div>
						<div class="prog-theme icon">APIs & Planning</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">13h40 - 14h00</div>
							<div class="prog-track icon">Hobby/dans</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/ruimtelijke-plannen-opvragen-voor-een-gis-viewer-van-wfs-naar-api.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr4">
					<div class="prog-content">
						<div class="prog-title">ManaIAS - A tool supporting the management of invasive alien species
						</div>
						<div class="prog-speaker">Ronveaux Sébastien</div>
						<div class="prog-theme icon">Biodiversity</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">13h40 - 14h00</div>
							<div class="prog-track icon">EHBO</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/manaias-a-tool-supporting-the-management-of-invasive-alien-species.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr3">
					<div class="prog-content">
						<div class="prog-title">Maintaining a global database of admin and postal boundaries with
							PostGIS: a
							large-scale use case for PostGIS topology</div>
						<div class="prog-speaker">Benjamin Deswysen</div>
						<div class="prog-theme icon">PostGIS</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">13h40 - 14h00</div>
							<div class="prog-track icon">Judo 2</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/maintaining-a-global-database-of-admin-and-postal-boundaries-with-postgis-a-large-scale-use-case-for.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>
			</div>

			<div class="prog-slot">
				<div class="prog-item tr2">
					<div class="prog-content">
						<div class="prog-title">3D in Tailormap, Integratie van Cesium en OpenLayers</div>
						<div class="prog-speaker">Stein Köbben</div>
						<div class="prog-theme icon">3D</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">14h05 - 14h25</div>
							<div class="prog-track icon">Grote zaal</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/3d-in-tailormap-integratie-van-cesium-en-openlayers.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr1">
					<div class="prog-content">
						<div class="prog-title">Shareish: an open-source, map-based, web platform to facilitate diverse
							solidarity practices</div>
						<div class="prog-speaker">Raphaël Marée</div>
						<div class="prog-theme icon">Education</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">14h05 - 14h25</div>
							<div class="prog-track icon">BG1</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/shareish-an-open-source-map-based-web-platform-to-facilitate-diverse-solidarity-practices.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr5">
					<div class="prog-content">
						<div class="prog-title">Een interactieve Multi Criteria Analyse Tool, een startgesprek voor
							ruimtelijke planning</div>
						<div class="prog-speaker">Tijs Oosterhuis</div>
						<div class="prog-theme icon">APIs & Planning</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">14h05 - 14h25</div>
							<div class="prog-track icon">Hobby/dans</div>
						</div>
						<a class="prog-link prog-slides icon" target="_blank" href="/talk/een-interactieve-multi-criteria-analyse-tool-een-startgesprek-voor-ruimtelijke-planning.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr4">
					<div class="prog-content">
						<div class="prog-title">The open source software underpinning the 3DBAG</div>
						<div class="prog-speaker">Balázs Dukai, Gina Stavropoulou & Ravi Peters</div>
						<div class="prog-theme icon">3D</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">14h05 - 14h25</div>
							<div class="prog-track icon">EHBO</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/the-open-source-software-underpinning-the-3DBAG.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr3">
					<div class="prog-content">
						<div class="prog-title">Large-scale Geospatial computations? Recycle your PostGIS spatial SQL
							queries
							with Apache Sedona</div>
						<div class="prog-speaker">Benjamin Deswysen</div>
						<div class="prog-theme icon">PostGIS</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">14h05 - 14h25</div>
							<div class="prog-track icon">Judo 2</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/large-scale-geospatial-computations-recycle-your-postgis-spatial-sql-queries-with-apache-sedona.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>
			</div>


			<div class="prog-item plenary intermezzo">
				<div class="prog-content">
					<div class="prog-title"><i class="fa fa-coffee"></i>
						<?php echo $lang['PROG_COFFEE']; ?></div>
					<div class="prog-sched icon">14h30 - 15h00</div>
					<div class="prog-track icon">La Salle</div>
				</div>
			</div>

			<!-- 15h -->

			<div class="prog-swipe"><?php echo $lang['PROG_SWIPE']; ?></div>
			
			<div class="prog-slot">
				<div class="prog-item tr2">
					<div class="prog-content">
						<div class="prog-title">Stable IDs from OpenStreetMap and combining data sources for use in
							crisis
							management - how the NCCN uses OSM & authentic sources in Paragon</div>
						<div class="prog-speaker">Joost Schouppe</div>
						<div class="prog-theme icon">OSM/Mapping</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">15h00 - 15h20</div>
							<div class="prog-track icon">Grote zaal</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/stable-ids-from-openstreetmap-and-combining-data-sources-for-use-in-crisis-management-how-the-nccn-u.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr1">
					<div class="prog-content">
						<div class="prog-title">Hoe het onderwijs profiteert van open online GIS-software</div>
						<div class="prog-speaker">Tim Jonker</div>
						<div class="prog-theme icon">Education</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">15h00 - 15h20</div>
							<div class="prog-track icon">BG1</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/hoe-het-onderwijs-profiteert-van-open-online-gis-software.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr5">
					<div class="prog-content">
						<div class="prog-title">Communitybouwen en Opensource.pleio.nl</div>
						<div class="prog-speaker">Eva van Sloten</div>
						<div class="prog-theme icon">Open Source and organisations</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">15h00 - 15h20</div>
							<div class="prog-track icon">Hobby/dans</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/communitybouwen-en-opensource-pleio-nl.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr4">
					<div class="prog-content">
						<div class="prog-title">Inzet QGIS voor tekenwerk en kaartvervaardiging</div>
						<div class="prog-speaker">Jacco Wanders</div>
						<div class="prog-theme icon">QGIS</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">15h00 - 15h20</div>
							<div class="prog-track icon">EHBO</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/inzet-qgis-voor-tekenwerk-en-kaartvervaardiging.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>
			</div>

			<div class="prog-slot">
				<div class="prog-item tr2">
					<div class="prog-content">
						<div class="prog-title">Mapbox Cloud Vector Tiles with Attribuut Information</div>
						<div class="prog-speaker">Andrea van Milgen, Wouter van der Hulst</div>
						<div class="prog-theme icon">OSM/Mapping</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">15h25 - 15h45</div>
							<div class="prog-track icon">Grote zaal</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/mapbox-cloud-vector-tiles-met-attribuutinformatie.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
						</div>
						</div>

				<div class="prog-item tr1">
					<div class="prog-content">
						<div class="prog-title">EduGIS: browsergebaseerde kaartvisualisatie en analyse voor het
							onderwijs
						</div>
						<div class="prog-speaker">Anne Blankert</div>
						<div class="prog-theme icon">Education</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">15h25 - 15h45</div>
							<div class="prog-track icon">BG1</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/edugis-browsergebaseerde-kaartvisualisatie-en-analyse-voor-het-onderwijs.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr5">
					<div class="prog-content">
						<div class="prog-title">OSGeo.NL: de verenigde stichting</div>
						<div class="prog-speaker">Erik Meerburg</div>
						<div class="prog-theme icon">Open Source and organisations</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">15h25 - 15h45</div>
							<div class="prog-track icon">Hobby/dans</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/osgeo-nl-de-verenigde-stichting.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>

				<div class="prog-item tr4">
					<div class="prog-content">
						<div class="prog-title">Let's play together with Keycloak</div>
						<div class="prog-speaker">Ruben Cappelle</div>
						<div class="prog-theme icon">Stacks and formats</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">15h25 - 15h45</div>
							<div class="prog-track icon">EHBO</div>
						</div>
						<a class="prog-link icon" target="_blank" href="/talk/let-s-play-together-with-keycloak.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
							</div>
							</div>
			</div>


			<!-- closing keynote -->

			<div class="prog-item plenary intermezzo">
				<div class="prog-title"><i class="fa fa-star"></i>
					<?php echo $lang['PROG_CLOSING']; ?></div>
				<div class="prog-sched icon">16h00 - 17h00</div>
				<div class="prog-track icon">Grote zaal</div>
			</div>
			<div class="prog-content">
			</div>

			<div class="prog-item plenary tr2">
				<div class="prog-content">
					<div class="prog-title">How open source geo tools could shape (some) American elections</div>
					<div class="prog-speaker">Blake Esselstyn</div>
					<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
					<div class="prog-tl">
						<div class="prog-sched icon">16h00 - 16h20</div>
						<div class="prog-track icon">Grote zaal</div>
					</div>
					<a class="prog-link icon" target="_blank" href="/talk/how-open-source-geo-tools-could-shape-some-american-elections.php" title="<?php echo $lang['PROG_MORE_INFO']; ?>"></a>
						</div>
			</div>

			<div class="prog-item plenary intermezzo">
				<div class="prog-content">
					<div class="prog-title"><i class="fa fa-glass"></i>
						<?php echo $lang['PROG_DRINK']; ?></div>
					<div class="prog-sched icon">17h00 - 20h00</div>
					<div class="prog-track icon">Grote zaal</div>
				</div>
			</div>
		</div>

		<h3><?php echo $lang['PROG_FRI'] . ': ' . $lang['PROG_CODESPRINT']; ?></h3>


		<div id="prog-fri" class="prog-list">
			<div class="prog-item plenary intermezzo">
				<div class="prog-content">
					<div class="prog-title"><i class="fa fa-coffee"></i>
						<?php echo $lang['PROG_BRUNCH']; ?></div>
					<div class="prog-sched icon">10h00 - 13h00</div>
					<div class="prog-track icon">BG1</div>
				</div>
			</div>

			<div class="prog-slot">
				<div class="prog-item tr1" style="grid-column: 1;">
					<div class="prog-content">
						<div class="prog-title"><?php echo $lang['PROG_CODESPRINT_WHAT']; ?></div>
						<div class="prog-speaker"><?php echo $lang['PROG_CODESPRINT_WHO']; ?></div>
						<div class="prog-sched icon">10h00 - 17h00</div>
						<div class="prog-track icon">BG1</div>
					</div>
				</div>
			</div>
		</div>

		<div class="nav bottom" style="margin-top: 50px;">
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