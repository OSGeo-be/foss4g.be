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
					<li><a href="uploads/foss4g_sotm_booklet_2022.pdf" class="button"><?php echo $lang['MENU_BOOKLET']; ?></a></li>
					<li><a href="programme.php" class="button"><?php echo $lang['MENU_PROGRAM']; ?></a></li>
					<!-- <li><a href="stream_fiji.php" class="button"><?php echo $lang['MENU_STREAM']; ?> Fiji</a></li>
					<li><a href="stream_zanzibar.php" class="button"><?php echo $lang['MENU_STREAM']; ?> Zanzibar</a></li> -->
                </ul>
                <p><?php echo $lang['SITE_DATABIG']; ?></p>
			</section>

		<!-- Main -->
			<section id="main" class="container" style="padding-top: 0">
				<section class="box special">
					<header class="major logo">
						<img src="/images/chapeau-earth.png">
						<p><?php echo $lang['ABOUT_TITLE']; ?></p>
					</header>
					<span class="image featured"><img src="/images/foss4g.svg" alt="" /></span>
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
	</body>
</html>
