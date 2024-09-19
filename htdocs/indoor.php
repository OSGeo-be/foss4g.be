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
		#main>header {
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
			<h2><?php echo $lang['VENUE_INDOOR_TITLE']; ?></h2>
			<p><?php echo $lang['VENUE_INDOOR_SUBTITLE']; ?></p>
		</header>

		<div class="content">
			<iframe style="width: 100%; height: 80vh; border: 0px;"
				src="https://presentations.this-way.nl/foss4gmap.html"></iframe>
		</div>

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