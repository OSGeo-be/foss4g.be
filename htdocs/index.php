<?php include_once 'common.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang['URL_SHORT']; ?>">
	<head>
		<title><?php echo $lang['SITE_TITLE']; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="<?php echo $lang['SITE_DESCRIPTION']; ?>" />
		<meta name="keywords" content="<?php echo $lang['SITE_KEYWORDS']; ?>" />
		<script src="/js/jquery.min.js" type="text/javascript"></script>
		<script src="/js/jquery.dropotron.min.js" type="text/javascript"></script>
		<script src="/js/jquery.scrollgress.min.js" type="text/javascript"></script>
		<script src="/js/skel.min.js" type="text/javascript"></script>
		<script src="/js/skel-layers.min.js" type="text/javascript"></script>
		<script src="/js/init.js" type="text/javascript"></script>
		<noscript>
			<link rel="stylesheet" href="/css/skel.css" />
			<link rel="stylesheet" href="/css/style.css" />
			<link rel="stylesheet" href="/css/style-wide.css" />
		</noscript>
		<link rel="me" href="https://fosstodon.org/@osgeobe"/>
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
					<li><a href="programme.php" class="button"><?php echo $lang['MENU_PROGRAM']; ?></a></li>
					<li><a href="venue.php" class="button"><?php echo $lang['MENU_VENUE']; ?></a></li>
				</ul>
				<ul class="actions">
					<li><a href="volunteers.php" class="button"><?php echo $lang['MENU_VOLUNTEERS']; ?></a></li>
					<li><a href="sponsors.php" class="button"><?php echo $lang['MENU_SPONSORS']; ?></a></li>
				</ul>
				<ul class="actions">
					<li><a href="get-ticket.php" target="_blank" class="button"><?php echo $lang['MENU_REG']; ?></a></li>
				</ul>
                <p><?php echo $lang['SITE_DATABIG']; ?></p>
			</section>

		<!-- Main -->
			<!-- <section id="main" class="container" style="padding-top: 0">
				<section class="box special">
					<header class="major logo">
						<img src="/images/chapeau-earth.png">
						<p><?php echo $lang['ABOUT_TITLE']; ?></p>
					</header>
					<span class="image featured"><img src="/images/foss4g.svg" alt="" /></span>
				</section>

			</section> -->
			
		<!-- CTA -->
			<section id="cta">
				
				<p><?php echo $lang['FOOTER_THANKS']; ?></p>
				<p><?php echo $lang['FOOTER_THANKS_ALL']; ?></p>
				<p><?php echo $lang['FOOTER_MORE']; ?></p>
				
			</section>
			
	<!-- Footer -->
		<footer id="footer">
			<?php include 'footer.inc'; ?>
		</footer>
	</body>
</html>