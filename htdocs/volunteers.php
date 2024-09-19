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
	<section id="main" class="container" style="padding-bottom: 0;">
		<header>
			<h2><?php echo $lang['VOLUNTEERS_TITLE']; ?></h2>
			<p><?php echo $lang['VOLUNTEERS_SUBTITLE']; ?></p>
		</header>
		<p style="text-align: center;"><?php echo $lang['VOLUNTEERS_TEXT']; ?></p>
	</section>

	<section style="display: flex">
		<iframe
			src="https://docs.google.com/spreadsheets/d/15VlS2CeVBLMdf9MxPEfncKQ6z0j4YPQrcEbFQxRI7xg/edit?usp=sharing"
			style="border: 0px; width: 90vw; height: 90vh; margin: 30px auto;"></iframe>
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