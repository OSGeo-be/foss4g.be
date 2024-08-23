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
	<link rel="canonical" href="https://2019.foss4g.be/" />
	<script src="/js/jquery.min.js" type="text/javascript"></script>
	<script src="/js/jquery.dropotron.min.js" type="text/javascript"></script>
	<script src="/js/jquery.scrollgress.min.js" type="text/javascript"></script>
	<script src="/js/skel.min.js" type="text/javascript"></script>
	<script src="/js/skel-layers.min.js" type="text/javascript"></script>
	<script src="/js/init.js" type="text/javascript"></script>
	<!--[if lte IE 8]><script src="/css/ie/html5shiv.js"></script><![endif]-->
	<noscript>
		<link rel="stylesheet" href="/css/skel.css" />
		<link rel="stylesheet" href="/css/style.css" />
		<link rel="stylesheet" href="/css/style-wide.css" />
	</noscript>
	<!--[if lte IE 8]><link rel="stylesheet" href="/css/ie/v8.css" /><![endif]-->

	<style>
		#main > header {
			margin: unset;
		}

		.content {
			text-align: center;
		}

		img {
			margin-bottom: 30px;
		}
	</style>

</head>

<body>

	<!-- Header -->
	<header id="header">
		<?php include 'header.inc'; ?>
	</header>

	<!-- Main -->
	<section id="main" class="container">
		<header>
			<h2><?php echo $lang['VENUE_TITLE']; ?></h2>
			<p><?php echo $lang['VENUE_SUBTITLE']; ?></p>
		</header>

		<div class="content">
			<img src="/images/cc_baarle.jpeg" alt="Photo of Cultuurcentrum Baarle" />

			<p>
				Cultuurcentrum Baarle <br>
				Pastoor de Katerstraat 5-7 <br>
				Belgium: BE-2387 Baarle-Hertog <br>
				Netherlands: 5111 CM - NL Baarle-Nassau
			</p>

			<iframe width="800" height="600" src="https://www.openstreetmap.org/export/embed.html?bbox=4.90264892578125%2C51.43401260274233%2C4.948997497558594%2C51.449233145337764&amp;layer=mapnik&amp;marker=51.44162350810596%2C4.925823211669922" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=51.44162&amp;mlon=4.92582#map=16/51.44162/4.92582">View Larger Map</a></small>
		</div>

		<!-- <div class="nav bottom"><prev></prev><a href="about.php" title="<?php echo $lang['MENU_ABOUT']; ?>"><?php echo $lang['MENU_ABOUT']; ?></a> <a href="papers.php" title="<?php echo $lang['MENU_CALL3']; ?>"><?php echo $lang['MENU_CALL3']; ?></a><next></next></div> -->
	</section>


	<!-- CTA -->
	<section id="cta">

		<p><?php echo $lang['FOOTER_THANKS']; ?>
		<p>
		<p><?php echo $lang['FOOTER_THANKS_ALL']; ?></p>
		<p><?php echo $lang['FOOTER_MORE']; ?></p>

	</section>

	<!-- Footer -->
	<footer id="footer">
		<?php include 'footer.inc'; ?>
	</footer>

	<script src="/js/accordion.js" type="text/javascript"></script>
</body>

</html>