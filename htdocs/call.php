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
		<link rel="canonical" href="http://www.foss4g.be/" />
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
					<h2><?php echo $lang['SPONSORS_TITLE']; ?></h2>
					<p><?php echo $lang['SPONSORS_SUBTITLE']; ?></p>											  
				</header>
				<div class="row">
					<div class="12u">
						<p><?php echo $lang['SPONSORS_CALL']; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="12u">
					<div class="container-x">
					  <div class="accordion">
						<dl>
						  <dt><a class="accordionTitle platinium" href="#"> <?php echo $lang['SPONSORS_1_TITLE']; ?> <span class="spon1"><?php echo $lang['SPONSORS_1_TAGLINE']; ?></span></a></dt>
						  <dd class="accordionItem accordionItemCollapsed">
							<a href="#" class="button platinium icon fa-check"><?php echo $lang['SPONSORS_1_TXT1']; ?></a>
							<a href="#" class="button platinium icon fa-check"><?php echo $lang['SPONSORS_1_TXT2']; ?></a>
							<a href="#" class="button platinium icon fa-check"><?php echo $lang['SPONSORS_1_TXT3']; ?></a>
							<a href="#" class="button platinium icon fa-check"><?php echo $lang['SPONSORS_1_TXT5']; ?></a>
							<a href="#" class="button platinium icon fa-check"><?php echo $lang['SPONSORS_1_TXT6']; ?></a>
						  </dd>
						  <dt><a href="#" class="accordionTitle gold"> <?php echo $lang['SPONSORS_2_TITLE']; ?> <span class="spon2"><?php echo $lang['SPONSORS_2_TAGLINE']; ?></span></a></dt>
						  <dd class="accordionItem accordionItemCollapsed">
							<a href="#" class="button gold icon fa-check"><?php echo $lang['SPONSORS_1_TXT2']; ?></a>
							<a href="#" class="button gold icon fa-check"><?php echo $lang['SPONSORS_1_TXT4']; ?></a>
							<a href="#" class="button gold icon fa-check"><?php echo $lang['SPONSORS_1_TXT5']; ?></a>
							<a href="#" class="button gold icon fa-check"><?php echo $lang['SPONSORS_1_TXT6']; ?></a>
						  </dd>
						  <dt><a href="#" class="accordionTitle silver"> <?php echo $lang['SPONSORS_3_TITLE']; ?> <span class="spon3"><?php echo $lang['SPONSORS_3_TAGLINE']; ?></span></a></dt>
						  <dd class="accordionItem accordionItemCollapsed">
							<a href="#" class="button silver icon fa-check"><?php echo $lang['SPONSORS_1_TXT5']; ?></a>
							<a href="#" class="button silver icon fa-check"><?php echo $lang['SPONSORS_1_TXT6']; ?></a>
						  </dd>
						  <dt><a href="#" class="accordionTitle bronze"> <?php echo $lang['SPONSORS_4_TITLE']; ?> <span class="spon4"><?php echo $lang['SPONSORS_4_TAGLINE']; ?></span></a></dt>
						  <dd class="accordionItem accordionItemCollapsed">
							<a href="#" class="button bronze icon fa-check"><?php echo $lang['SPONSORS_1_TXT6']; ?></a>
						  </dd>
						</dl>
					  </div>
					  <p style="text-align:center"><a href="contact.php" class="button specialo icon fa-check"> <?php echo $lang['SPONSORS_BUTTON']; ?></a></p>
					</div>
					</div>
				</div>
				<div class="row">
					<!-- why sponsor -->
					<div class="12u">
						<section class="box plenary">
							<h3><?php echo $lang['SPONSORS_WHY_TITLE']; ?></h3>
							<p style="margin-top:2em"><strong><i class="fa fa-check"></i> <?php echo $lang['SPONSORS_WHY1_1']; ?></p>
							<p style="margin-left:1em"><i class="fa fa-mail-forward fa-flip-vertical"></i> <?php echo $lang['SPONSORS_WHY1_2']; ?></p>

							<p style="margin-top:2em"><strong><i class="fa fa-check"></i> <?php echo $lang['SPONSORS_WHY2_1']; ?></p>
							<p style="margin-left:1em"><i class="fa fa-mail-forward fa-flip-vertical"></i> <?php echo $lang['SPONSORS_WHY2_2']; ?></p>

							<p style="margin-top:2em"><strong><i class="fa fa-check"></i> <?php echo $lang['SPONSORS_WHY3_1']; ?></p>
							<p style="margin-left:1em"><i class="fa fa-mail-forward fa-flip-vertical"></i> <?php echo $lang['SPONSORS_WHY3_2']; ?></p>

							<p style="margin-top:2em"><strong><i class="fa fa-check"></i> <?php echo $lang['SPONSORS_WHY4_1']; ?></p>
							<p style="margin-left:1em"><i class="fa fa-mail-forward fa-flip-vertical"></i> <?php echo $lang['SPONSORS_WHY4_2']; ?></p>

							<p style="margin-top:2em"><strong><i class="fa fa-check"></i> <?php echo $lang['SPONSORS_WHY5_1']; ?></p>
							<p style="margin-left:1em"><i class="fa fa-mail-forward fa-flip-vertical"></i> <?php echo $lang['SPONSORS_WHY5_2']; ?></p>
						</section>
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
