<?php include_once 'common.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang['URL_SHORT']; ?>">
	<head>
		<title><?php echo $lang['SITE_TITLE']; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="<?php echo $lang['SITE_DESCRIPTION']; ?>" />
		<meta name="keywords" content="<?php echo $lang['SITE_KEYWORDS']; ?>" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.dropotron.min.js" type="text/javascript"></script>
		<script src="js/jquery.scrollgress.min.js" type="text/javascript"></script>
		<script src="js/skel.min.js" type="text/javascript"></script>
		<script src="js/skel-layers.min.js" type="text/javascript"></script>
		<script src="js/init.js" type="text/javascript"></script>
		<link rel="canonical" href="http://2018.foss4g.be/" />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
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
				<!-- Button  -->
				<li><a href="inscription.php" class="button"><?php echo $lang['MENU_REG']; ?></a></li>
				
                    <li><a href="programme.php" class="button"><?php echo $lang['MENU_PROGRAM']; ?></a></li>
					<li><a href="maps.php" class="button"><?php echo $lang['MENU_MAPS']; ?></a></li>
                    <li><a href="call.php" class="button"><?php echo $lang['MENU_CALL2']; ?></a></li>
                </ul>
                <p><?php echo $lang['SITE_DATABIG']; ?></p>
			</section>

		<!-- Main -->
			<section id="main" class="container" style="padding-top: 0">
				<section class="box special">
					<header class="major logo">
						<img src="images/chapeau-earth.png">
						<p><?php echo $lang['ABOUT_TITLE']; ?></p>
					</header>
					<span class="image featured"><img src="images/foss4g.svg" alt="" /></span>
				</section>

			</section>
			
		<!-- CTA -->
			<section id="cta">
				
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
