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
		<script type="text/javascript">
		window.cookieconsent_options = {"message":"<?php echo $lang['HOME_COOKIE_TITLE']; ?>","dismiss":"<?php echo $lang['HOME_COOKIE_OK']; ?>","learnMore":"<?php echo $lang['HOME_COOKIE_LAW']; ?>","link":"http://ec.europa.eu/ipg/basics/legal/cookies/index_en.htm","theme":"light-bottom"};
		</script>
		<script type="text/javascript" src="js/cookies.js"></script>
	</head>
	<body class="landing">
		<!-- Header -->
			<header id="header" class="alt">
				<?php include 'header.inc'; ?>
			</header>

		<!-- Banner -->
			<section id="banner">
				<img src="<?php echo $lang['CECI']; ?>" alt="<?php echo $lang['SITE_NAME']; ?> - <?php echo $lang['CECI_1']; ?> <?php echo $lang['CECI_2']; ?> <?php echo $lang['CECI_3']; ?>">
				<ul class="actions">
					<li><a href="photos.html" class="button"><?php echo $lang['CALL_foto']; ?></a></li>
					<li><a href="hackathon.php" class="button">Hackathon</a></li>
					<li><a href="programme.php" class="button"><?php echo $lang['PROGRAMME']; ?></a></li>
					<li><a href="https://docs.google.com/forms/d/1Yt8CPBM1JaLY334ILxvtBsSG36LpeWBO_wXzgZQZvlY/viewform" class="button" style="font-size:large"><u>Evaluation</u></a></li>
				</ul>
				<p><?php echo $lang['SITE_DATABIG']; ?></p>
			</section>

		<!-- Main -->
			<section id="main" class="container">
		
				<section class="box special">
					<header class="major logo">
						<img src="images/chapeau-earth.png">
						<p><?php echo $lang['ABOUT_TITLE']; ?></p>
					</header>
					<span class="image featured"><img src="images/foss4gbe-g.svg" alt="" /></span>
				</section>
						
				<section class="box special features">
					<div class="features-row">
						<section>
							<span class="icon major fa-rocket accent4"></span>
							<h3><?php echo $lang['HOME_S1_TITLE']; ?></h3>
							<p><?php echo $lang['HOME_S1_TEXT']; ?></p>
						</section>
						<section>
							<span class="icon major fa-cubes accent2"></span>
							<h3><?php echo $lang['HOME_S2_TITLE']; ?></h3>
							<p><?php echo $lang['HOME_S2_TEXT']; ?></p>
						</section>
					</div>
					<div class="features-row">
						<section>
							<span class="icon major fa-database accent2"></span>
							<h3><?php echo $lang['HOME_S3_TITLE']; ?></h3>
							<p><?php echo $lang['HOME_S3_TEXT']; ?></p>
						</section>
						<section>
							<span class="icon major fa-globe accent2"></span>
							<h3><?php echo $lang['HOME_S4_TITLE']; ?></h3>
							<p><?php echo $lang['HOME_S4_TEXT']; ?></p>
						</section>
					</div>
				</section>
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
