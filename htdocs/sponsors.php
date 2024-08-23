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

	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<?php include 'header.inc'; ?>
			</header>

		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2><?php echo $lang['SPONSORS_T_TITLE']; ?></h2>
					<p><?php echo $lang['SPONSORS_T_SUBTITLE']; ?></p>
				</header>
				<div class="row">
					<div class="12u">
					<div class="container-x">
					  <div class="accordion">
						<dl>
							<dt class="spons">
								<a href="#" class="accordionTitle sponsors gold">
									<?php echo $lang['SPONSORS_2_TITLE']; ?>
									<span class="spon2"></span>
								</a>
							</dt>
							<dd class="accordionItem">
								<a class="sponsor icon" href="https://www.opengeogroep.nl" style="background-image: url('/images/sponsors/opengeogroep.png');"></a>
								<a class="sponsor icon" href="https://www.geocat.net/" style="background-image: url('/images/sponsors/geocat.svg');"></a>
								<a class="sponsor icon" href="https://www.geoexperts.nl/" style="background-image: url('/images/sponsors/geoexperts.svg');"></a>

							</dd>
							<dt class="spons">
								<a href="#" class="accordionTitle sponsors silver">
									<?php echo $lang['SPONSORS_3_TITLE']; ?>
									<span class="spon3"></span>
								</a>
              				</dt>
							<dd class="accordionItem">
								<a class="sponsor icon" href="https://www.tomtom.com"  style="background-image: url('/images/sponsors/tomtom.png');"></a>
							</dd>
							<dt class="spons">
								<a href="#" class="accordionTitle sponsors bronze">
									<?php echo $lang['SPONSORS_4_TITLE']; ?>
									<span class="spon4"></span>
								</a>
							</dt>
							<dd class="accordionItem">
							</dd>
						</dl>
					  </div>
					  <p style="text-align:center"><a href="contact.php" class="button specialo icon fa-check"> <?php echo $lang['SPONSORS_BUTTON']; ?></a></p>
					</div>
					</div>
				</div>

				<!-- <div class="nav bottom"><prev></prev><a href="about.php" title="<?php echo $lang['MENU_ABOUT']; ?>"><?php echo $lang['MENU_ABOUT']; ?></a> <a href="papers.php" title="<?php echo $lang['MENU_CALL3']; ?>"><?php echo $lang['MENU_CALL3']; ?></a><next></next></div> -->
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

		<script src="/js/accordion.js" type="text/javascript"></script>
	</body>
</html>
