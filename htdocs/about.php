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
					<img src="<?php echo $lang['CECI-G']; ?>" alt="<?php echo $lang['SITE_NAME']; ?> - <?php echo $lang['CECI_1']; ?> <?php echo $lang['CECI_2']; ?> <?php echo $lang['CECI_3']; ?>" style="width:30vw;text-align:center;">
				</header>
				<div class="box">

					<h3><?php echo $lang['ABOUT_A_SUBTITLE']; ?></h3>
					<p><span class="image left"><img src="images/osgeo-site.png" alt="OSGeo.be" /></span> <?php echo $lang['ABOUT_A_TEXT']; ?></p>
<?php echo $lang['ABOUT_A_TEXT']; ?></p>
					<hr>
					<h3><?php echo $lang['ABOUT_A_SUBTITLE2']; ?></h3>
					<p><span class="image left"><img src="images/logo-osgeo.png" alt="OSGeo" /></span> <?php echo $lang['ABOUT_A_TEXT2']; ?></p>
					
				</div>
				<div class="nav bottom"><prev></prev><a href="index.php" title="<?php echo $lang['MENU_HOME']; ?>"><?php echo $lang['MENU_HOME']; ?></a> <a href="call.php" title="<?php echo $lang['MENU_CALL2']; ?>"><?php echo $lang['MENU_CALL2']; ?></a><next></next></div>
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
		</script>
	</body>
</html>
