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
		<link rel="canonical" href="http://www.foss4g.be/" />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="trans">

		<!-- Header -->
			<header id="header">
				<?php include 'header.inc'; ?>
			</header>

		<!-- Main -->
				<!-- Banner -->
			<section id="banner" style="padding:0.8em 0 0 0;background-image:url(images/banner2.jpg)">

				<section id="main" class="container small">
				<header style="margin-bottom:0">
					<h3><?php echo $lang['CONTACT_TITLE']; ?></h3>
					<p style="color:#fff"><?php echo $lang['CONTACT_SUBTITLE']; ?></p>
				</header>
				<div class="box" style="background-color:rgba(245,245,245,0.8);margin-top:0">
					<form method="post" action="mail.php">
						<div class="row uniform half collapse-at-2">
							<div class="6u">
								<input type="text" name="name" id="name" value="" placeholder="<?php echo $lang['CONTACT_NAME_T']; ?>" required />
							</div>
							<div class="6u">
								<input type="email" name="email" id="email" value="" placeholder="<?php echo $lang['CONTACT_EMAIL_T']; ?>" required />
							</div>
						</div>
						<div class="row uniform half">
							<div class="12u">
								<input type="text" name="subject" id="subject" value="" placeholder="<?php echo $lang['CONTACT_MESSAGE_T']; ?>" required />
							</div>
						</div>
						<div class="row uniform half">
							<div class="12u">
								<textarea name="message" id="message" placeholder="<?php echo $lang['CONTACT_MESSAGE']; ?>" rows="6" required ></textarea>
							</div>
							<div class="4u">
								<input name="calculate" placeholder="<?php echo $lang['CONTACT_CALC']; ?>" type="text" class="text" required pattern="[4-4]">
							</div> 
						</div>
						</div>
						<div class="row uniform">
							<div class="12u">
								<ul class="actions align-center">
									<li><input type="submit" class="button special" value="<?php echo $lang['CONTACT_SEND']; ?>" /></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>
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
