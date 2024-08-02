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
	<style>
		#skel-layers-wrapper {
			margin: 4px !important;
		}

		#main.container {
			width: 90vw !important;
		}

		h3 {
			background-color: #886f8f;
			color: white;
			padding: 5px;
			display: inline-block;
			margin-top: 40px;
		}

		.icon::before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			margin-right: 0.5em;
			font-size: 80%;
		}

		div.prog-list {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			gap: 20px;
			margin: 0;
			width: 100%;
			justify-content: flex-start;
			align-items: flex-start;
		}


		div.prog-item {
			display: block;
			background-color: white;
			border: 5px solid #f1f1f1;
			padding: 10px;
			position: relative;
			/* height: fit-content; */

			font-size: 1rem;

			.prog-title {
				font-size: 1.75rem;
			}

			.prog-speaker {
				font-size: 1.2rem;
			}

			.prog-sched {
				float: right;
			}

			.prog-lang::before {
				content: '\f1ab';
			}

			.prog-sched::before {
				content: '\f017';
			}

			.prog-track::before {
				content: '\f015';
			}

			.prog-theme::before {
				content: '\f1fc';
			}
		}

		/* BG1 */
		.prog-item.tr1 {
			grid-row: 1;
			grid-column: 2;

			.prog-track {
				border-bottom: 5px solid #fbb4ae;
			}
		}

		/* Grote zaal */
		.prog-item.tr2 {
			grid-row: 1;
			grid-column: 1;

			.prog-track {
				border-bottom: 5px solid #b3cde3;
			}
		}

		/* Judo 2 */
		.prog-item.tr3 {
			grid-row: 1;
			grid-column: 4;

			.prog-track {
				border-bottom: 5px solid #ccebc5;
			}
		}

		/* EHBO */
		.prog-item.tr4 {
			grid-row: 1;
			grid-column: 7;

			.prog-track {
				border-bottom: 5px solid #decbe4;
			}
		}

		/* Hobby/dans */
		.prog-item.tr5 {
			grid-row: 1;
			grid-column: 6;

			.prog-track {
				border-bottom: 5px solid #fed9a6;
			}
		}

		/* La Salle */
		.prog-item.tr6 {
			grid-row: 1;
			grid-column: 3;

			.prog-track {
				border-bottom: 5px solid #ffffcc;
			}
		}

		/* Judo 3 */
		.prog-item.tr7 {
			grid-row: 1;
			grid-column: 5;

			.prog-track {
				border-bottom: 5px solid #b3cde3;
			}
		}

		.prog-item .prog-lang {
			margin-bottom: 40px;
		}

		.prog-item .prog-tl {
			position: absolute;
			bottom: 10px;
			width: calc(100% - 20px);
		}

		div.prog-item.plenary {
			grid-row: unset;
			grid-column: 1 / -1;
		}

		div.prog-item.intermezzo {
			background-color: #d0e2e7;
			text-align: center;

			.prog-sched {
				float: unset;
			}
		}


		@media screen and (max-width: 1200px) {
			div.prog-list {
				grid-template-columns: 1fr 1fr;
			}
		}

		@media screen and (max-width: 800px) {
			div.prog-list {
				grid-template-columns: 1fr;
				gap: 10px;
			}
		}

		div.prog-slot {
			grid-column: 1 / -1;
			display: grid;
			gap: 20px;
		}

		#prog-wed .prog-slot {
			grid-template-columns: repeat(6, calc((100% / 6) - 16px));

			.tr1 { grid-column: 1;}
			.tr6 { grid-column: 2;}
			.tr3 { grid-column: 3;}
			.tr7 { grid-column: 4;}
			.tr5 { grid-column: 5;}
			.tr4 { grid-column: 6;}
		}

		#prog-thu .prog-slot {
			grid-template-columns: repeat(5, calc((100% / 5) - 16px));

			.tr2 { grid-column: 1;}
			.tr1 { grid-column: 2;}
			.tr3 { grid-column: 3;}
			.tr5 { grid-column: 4;}
			.tr4 { grid-column: 5;}
		}

		#prog-fri .prog-slot {
			grid-template-columns: repeat(4, calc((100% / 4) - 16px));
		}

		div.prog-swipe {
			font-style: italic;
			font-size: 1.2rem;
			text-align: center;
			grid-column: 1 / -1;
			display: none;
		}

		@media screen and (max-width: 1400px) {
			div.prog-swipe {
				display: block;
			}

			#main.container {
				width: unset !important;
			}

			#prog-wed .prog-slot {
				grid-template-columns: repeat(6, calc(25% - 16px));
				overflow-x: scroll;
			}

			#prog-thu .prog-slot {
				grid-template-columns: repeat(5, calc(25% - 16px));
				overflow-x: scroll;
			}

			#prog-fri .prog-slot {
				grid-template-columns: repeat(4, calc(25% - 16px));
				overflow-x: scroll;
			}
		}

		@media screen and (max-width: 1000px) {
			div.prog-list {
				grid-template-columns: 1fr 1fr;
			}

			#prog-wed .prog-slot {
				grid-template-columns: repeat(6, calc(50% - 10px));
			}

			#prog-thu .prog-slot {
				grid-template-columns: repeat(5, calc(50% - 10px));
			}

			#prog-fri .prog-slot {
				grid-template-columns: repeat(4, calc(50% - 10px));
			}
		}

		@media screen and (max-width: 800px) {
			div.prog-list {
				grid-template-columns: 1fr;
				gap: 10px;
			}

			#prog-wed .prog-slot {
				grid-template-columns: repeat(6, 100%);
				gap: 10px;
			}

			#prog-thu .prog-slot {
				grid-template-columns: repeat(5, 100%);
				gap: 10px;
			}

			#prog-fri .prog-slot {
				grid-template-columns: repeat(4, 100%);
				gap: 10px;
			}
		}

		/* .filter {
			margin: 10px 0;
		}

		.filter-name {
			display: inline-block;
			margin-right: 20px;
		}

		.filter-item {
			display: inline-block;
			background-color: white;
			padding: 0px 10px;
			border-radius: 50px;
			font-size: 1rem;
		} */
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
		</header>

		<h3 style="margin-top: 0;">
			<?php echo $lang['PROG_WED'] . ': ' . $lang['PROG_WORKSHOP']; ?>
		</h3>

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
					</div>
				</div>

				<div class="prog-item tr7" style="grid-row: 1 / 3;">
					<div class="prog-content">
						<div class="prog-title">How to create custom plugins</div>
						<div class="prog-speaker">Ricardo Maldonado Sevilla</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">13h00 - 17h00</div>
							<div class="prog-track icon">Judo 3</div>
						</div>
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
					</div>
				</div>

				<div class="prog-item tr3" style="grid-row: 1;">
					<div class="prog-content">
						<div class="prog-title">3D Viewer en 3DToolboxNL t.b.v. digital twin</div>
						<div class="prog-speaker">Kamiel Verhelst, Marco van Antwerpen, Thieu Caris</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">13h00 - 15h00</div>
							<div class="prog-track icon">Judo 2</div>
						</div>
					</div>
				</div>

				<div class="prog-item tr3" style="grid-row: 2;">
					<div class="prog-content">
						<div class="prog-title">Starten met Tailormap WebGIS</div>
						<div class="prog-speaker">Kees-Jan Lammers</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">15h00 - 17h00</div>
							<div class="prog-track icon">Judo 2</div>
						</div>
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
					</div>
				</div>

				<div class="prog-item tr6" style="grid-row: 1;">
					<div class="prog-content">
						<div class="prog-title">An intro to Point Cloud Processing using PDAL Pipelines</div>
						<div class="prog-speaker">Maxwell Lindsay</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">13h00 - 15h00</div>
							<div class="prog-track icon">La Salle</div>
						</div>
					</div>
				</div>

				<div class="prog-item tr6" style="grid-row: 2;">
					<div class="prog-content">
						<div class="prog-title">Hands-On Cloud Native Geospatial Analytics With Apache Sedona</div>
						<div class="prog-speaker">William Lyon</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">15h00 - 17h00</div>
							<div class="prog-track icon">La Salle</div>
						</div>
					</div>
				</div>
			</div>


			<div class="prog-item plenary intermezzo">
				<div class="prog-content">
					<div class="prog-title"><i class="fa fa-glass"></i>
						<?php echo $lang['PROG_SOCIAL']; ?></div>
					<div class="prog-sched icon">20h00 - 23h00</div>
					<div class="prog-track icon">Jongeren zaal</div>
					</div>
					</div>
		</div>

		<h3><?php echo $lang['PROG_THU'] . ': ' . $lang['PROG_CONFERENCE']; ?></h3>

		<!-- <h4><i class="fa fa-filter"></i>
			Filter</h4>

		<div class="filter-panel">
			<div class="filter">
				<div class="filter-name"><i class="fa fa-language"></i>
					Language</div>
				<div class="filter-item">Engels</div>
				<div class="filter-item">Nederlands</div>
			</div>
			<div class="filter">
				<div class="filter-name"><i class="fa fa-home"></i>
					Room</div>
				<div class="filter-item">Grote zaal</div>
				<div class="filter-item">La salle</div>
			</div>
			<div class="filter">
				<div class="filter-name"><i class="fa fa-paint-brush"></i>
					Theme</div>
				<div class="filter-item">QGis</div>
				<div class="filter-item">Stacks and formats</div>
			</div>
		</div> -->

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
						<div class="prog-theme icon">QGis</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h00 - 11h20</div>
							<div class="prog-track icon">Grote zaal</div>
						</div>
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
					</div>
				</div>
			</div>

			<div class="prog-slot">
				<div class="prog-item tr2">
					<div class="prog-content">
						<div class="prog-title">Exploring the power of PCRaster Tools</div>
						<div class="prog-speaker">Yonas Asfaha</div>
						<div class="prog-theme icon">QGis</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h25 - 11h45</div>
							<div class="prog-track icon">Grote zaal</div>
						</div>
					</div>
				</div>

				<div class="prog-item tr1">
					<div class="prog-content">
						<div class="prog-title">Allmaps - Open source tools for curating, georeferencing and exploring
							IIIF
							maps
						</div>
						<div class="prog-speaker">Manuel Claeys Bouuaert</div>
						<div class="prog-theme icon">Stacks and formats</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h25 - 11h45</div>
							<div class="prog-track icon">BG1</div>
						</div>
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
					</div>
				</div>

				<div class="prog-item tr3">
					<div class="prog-content">
						<div class="prog-title">Communitybouwen en Opensource.pleio.nl</div>
						<div class="prog-speaker">Eva van Sloten</div>
						<div class="prog-theme icon">Open Source and organisations</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h25 - 11h45</div>
							<div class="prog-track icon">Judo 2</div>
						</div>
					</div>
				</div>
			</div>

			<div class="prog-slot">
				<div class="prog-item tr2">
					<div class="prog-content">
						<div class="prog-title">Using Open-Access Spatial Data for Enhanced Sanitation Planning</div>
						<div class="prog-speaker">Leonardo Porto Nazareth</div>
						<div class="prog-theme icon">QGis</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h50 - 12h10</div>
							<div class="prog-track icon">Grote zaal</div>
						</div>
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
					</div>
				</div>

				<div class="prog-item tr4">
					<div class="prog-content">
						<div class="prog-title">Current Status and Future Challenges of Digital Twin Implementation in
							Seoul
							Metropolitan Government</div>
						<div class="prog-speaker">Kim Tae-Hyun</div>
						<div class="prog-theme icon">Platforms</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">11h50 - 12h10</div>
							<div class="prog-track icon">EHBO</div>
						</div>
					</div>
				</div>

				<div class="prog-item tr3">
					<div class="prog-title">Pizza symbols</div>
					<div class="prog-speaker">Raymond Nijssen</div>
					<div class="prog-theme icon">QGis</div>
					<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
								<div class="prog-tl">
									<div class="prog-sched icon">11h50 - 12h10</div>
									<div class="prog-track icon">Judo 2</div>
								</div>
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
					</div>
				</div>

				<div class="prog-item tr5">
					<div class="prog-content">
						<div class="prog-title">Mapbox Cloud Vector Tiles met attribuutinformatie</div>
						<div class="prog-speaker">Andrea van Milgen, Wouter van der Hulst</div>
						<div class="prog-theme icon">APIs & Planning</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">13h15 - 13h35</div>
							<div class="prog-track icon">Hobby/dans</div>
						</div>
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
					</div>
				</div>

				<div class="prog-item tr3">
					<div class="prog-content">
						<div class="prog-title">Algoritme voor netwerkplanning in PostGIS</div>
						<div class="prog-speaker">Wazir Sahebali</div>
						<div class="prog-theme icon">PostGIS</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">13h15 - 13h35</div>
							<div class="prog-track icon">Judo 2</div>
						</div>
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
					</div>
				</div>
			</div>

			<div class="prog-slot">
				<div class="prog-item tr2">
					<div class="prog-content">
						<div class="prog-title">3D in Tailormap, Intergratie van Cesium en OpenLayers</div>
						<div class="prog-speaker">Stein Köbben</div>
						<div class="prog-theme icon">3D</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">14h05 - 14h25</div>
							<div class="prog-track icon">Grote zaal</div>
						</div>
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
					</div>
				</div>

				<div class="prog-item tr5">
					<div class="prog-content">
						<div class="prog-title">Liefde is leuk maar het moet wel betaalbaar blijven: Een business case
							voor
							Open
							Source</div>
						<div class="prog-speaker">Peter de Graaf</div>
						<div class="prog-theme icon">Open Source and organisations</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">15h00 - 15h20</div>
							<div class="prog-track icon">Hobby/dans</div>
						</div>
					</div>
				</div>

				<div class="prog-item tr4">
					<div class="prog-content">
						<div class="prog-title">Inzet QGIS voor tekenwerk en kaartvervaardiging</div>
						<div class="prog-speaker">Jacco Wanders</div>
						<div class="prog-theme icon">QGis</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">15h00 - 15h20</div>
							<div class="prog-track icon">EHBO</div>
						</div>
					</div>
				</div>
			</div>

			<div class="prog-slot">
				<div class="prog-item tr2">
					<div class="prog-content">
						<div class="prog-title">Indoor Mapping @ University of Groningen</div>
						<div class="prog-speaker">Leon van der Meulen</div>
						<div class="prog-theme icon">OSM/Mapping</div>
						<div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
						<div class="prog-tl">
							<div class="prog-sched icon">15h25 - 15h45</div>
							<div class="prog-track icon">Grote zaal</div>
						</div>
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