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
		<link rel="canonical" href="http://2018.foss4g.be/" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.dropotron.min.js" type="text/javascript"></script>
		<script src="js/jquery.scrollgress.min.js" type="text/javascript"></script>
		<script src="js/skel.min.js" type="text/javascript"></script>
		<script src="js/skel-layers.min.js" type="text/javascript"></script>
		<script src="js/init.js" type="text/javascript"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->	
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
					<h2><?php echo $lang['SPONSORS_T_TITLE']; ?></h2>
					<p><?php echo $lang['SPONSORS_T_SUBTITLE']; ?></p>											  
				</header>
				<div class="row">
					<div class="12u">
					<div class="container-x">
					  <div class="accordion">
						<dl>
						  <dt class="spons"><a class="accordionTitle sponsors platinium" href="#"> <?php echo $lang['SPONSORS_1_TITLE']; ?> <span class="spon1"><?php echo $lang['SPONSORS_1_TAGLINE']; ?></span></a></dt>
						  <dd class="accordionItem accordionItem">
							<a href="http://http://www.environnement.brussels/" class="sponsor icon bxlenv"><span class="label">Bruxelles Environment</span></a>
							<!--<a href="http://cirb.brussels" class="sponsor icon cirb"><span class="label">CIRB</span></a>-->
							<a href="http://www.geosparc.com/" class="sponsor icon geosparc"><span class="label">Geosparc</span></a>
			    				<!--<a href="http://www.geosolutions.be" class="sponsor icon geosolutions"><span class="label">Geosolutions</span></a>-->
						  </dd>						  
						  <dt class="spons"><a href="#" class="accordionTitle sponsors gold"> <?php echo $lang['SPONSORS_2_TITLE']; ?> <span class="spon2"><?php echo $lang['SPONSORS_2_TAGLINE']; ?></span></a></dt>
						  <dd class="accordionItem accordionItem">
<?php /*<a href="https://overheid.vlaanderen.be/informatie-vlaanderen"  class="sponsor icon aiv"><span class="label">Agentschap Informatie Vlaanderen</span></a> */?>
							<a href="http://www.champs-libres.coop/" class="sponsor icon champs-libres"><span class="label">Champs-libres</span></a>
                            <a href="http://www.gim.be/" class="sponsor icon gim"><span class="label">GIM</span></a>
			    <a href="http://ngi.be/" class="sponsor icon ngi"><span class="label">NGI</span></a>
                            <a href="http://oslandia.com/" class="sponsor icon oslandia"><span class="label">Oslandia</span></a>
						  </dd>
						  <dt class="spons"><a href="#" class="accordionTitle sponsors silver"> <?php echo $lang['SPONSORS_3_TITLE']; ?> <span class="spon3"><?php echo $lang['SPONSORS_3_TAGLINE']; ?></span></a></dt>
						  <dd class="accordionItem accordionItem">
						<a href="http://www.idgeo.fr" class="sponsor icon idgeo"><span class="label">idgeo</span></a>
						<a href="http://www.opengeode.be" class="sponsor icon geode"><span class="label">Open Geode</span></a>
						  </dd>
						  <dt class="spons"><a href="#" class="accordionTitle sponsors bronze"> <?php echo $lang['SPONSORS_4_TITLE']; ?> <span class="spon4"><?php echo $lang['SPONSORS_4_TAGLINE']; ?></span></a></dt>
						  <dd class="accordionItem accordionItem">
							<a href="https://www.my-poppy.eu/" class="sponsor icon poppy"><span class="label">My poppy</span></a>
						  </dd>
						</dl>
					  </div>
					  <p style="text-align:center"><a href="contact.php" class="button specialo icon fa-check"> <?php echo $lang['SPONSORS_BUTTON']; ?></a></p>
					</div>
					</div>
				</div>
				
				<div class="nav bottom"><prev></prev><a href="about.php" title="<?php echo $lang['MENU_ABOUT']; ?>"><?php echo $lang['MENU_ABOUT']; ?></a> <a href="papers.php" title="<?php echo $lang['MENU_CALL3']; ?>"><?php echo $lang['MENU_CALL3']; ?></a><next></next></div>
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

		<script src="js/accordion.js" type="text/javascript"></script>
	</body>
</html>
