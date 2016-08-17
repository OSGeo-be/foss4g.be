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
	<body>

		<!-- Header -->
			<header id="header">
				<?php include 'header.inc'; ?>
			</header>

		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2><?php echo $lang['INFO_TITLE']; ?></h2>
					<h4 class="tout"><?php echo $lang['INFO_TAGLINE']; ?></h4>
				</header>
				<div class="row">
					<div class="12u">

						<!-- Text -->
							<section class="box">
							<div class="row">
								<div class="6u">
									<header>
										<div class="boxicon">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
											</span>
										</div>
										<h3><?php echo $lang['INFO_REG']; ?></h3>
									</header>
									<p><?php echo $lang['INFO_REG_TXT']; ?></p>
									<header style="margin-top:2em">
										<div class="boxicon">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-cutlery fa-stack-1x fa-inverse"></i>
											</span>
										</div>
										<h3><?php echo $lang['INFO_FOOD']; ?></h3>
									</header>
									<p><?php echo $lang['INFO_FOOD_TXT']; ?></p>
								</div>
								<div class="6u">
									<header>
										<div class="boxicon">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-warning fa-stack-1x fa-inverse"></i>
											</span>
										</div>	
											<h3><?php echo $lang['INFO_PROG']; ?></h3>
									</header>
									<p><?php echo $lang['INFO_PROG_TEXT1']; ?></p>
									<p><?php echo $lang['INFO_PROG_TEXT2']; ?></p>				
								</div>
							</div>
							<header>
								<div class="boxicon">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
									</span>
								</div>
								<h3><?php echo $lang['INFO_ADRES']; ?></h3>		
							</header>
							<a href="http://bel.brussels/" target="_blank" name="Bel"><img src="images/bel-bxl.png" style="float:left;margin-right:2em"></a>
							<p><strong><?php echo $lang['INFO_ADRES_TEXT1']; ?></strong></p>
							<a name="plenieres"></a>
							<hr style="padding-top:1.4em" />
								<h4><i class="fa fa-rocket"></i> <?php echo $lang['INFO_PLENARY']; ?> <span style="float:right"><i class="fa fa-cogs" ></i><?php echo $lang['INFO_SIDE']; ?><span></h4>
								<blockquote class="ol3"> <strong>Auditorium</strong></blockquote>
								<blockquote class="ol3r"> <?php echo $lang['INFO_ROOMS']; ?></blockquote>
								<div id="map" class="map"></div>
									<script type="text/javascript">		
									
									  var map = new ol.Map({
										target: 'map',
										layers: [
										  new ol.layer.Tile({
											source: new ol.source.MapQuest({layer: 'osm'})
										  })
										],
										view: new ol.View({
										  center: ol.proj.transform([4.348922,50.866241], 'EPSG:4326', 'EPSG:3857'),   
										  zoom: 18
										})
									  });				  
									  
									</script>
								<hr style="margin-bottom:4em">
								<div class="12u" style="min-height:400px">
								<h4><?php echo $lang['INFO_TT_TITLE']; ?></h4>
								<p><?php echo $lang['INFO_TT_SUBTITLE']; ?></p>
								<div class="6u" style="float:left;margin-top:20px">
									<ul class="fa-ul">
										<li style="margin-left:-10px;padding:0;font-size:80%"><i class="fa-li fa fa-bus" style="font-size:120%"></i> <?php echo $lang['INFO_TT_TRANSPORT']; ?> <span class="fa-stack" style="font-size:72%"><i class="fa fa-square fa-stack-2x" style="color:#FEEA00"></i><i class="fa fa-stack-1x fa-inverse" style="font-family:'Roboto', sans-serif;font-weight:700;color:black">T</i>
											</span>
											<span class="fa-stack" style="font-size:72%"><i class="fa fa-square fa-stack-2x" style="color:#AB0132"></i><i class="fa fa-stack-1x fa-inverse" style="font-family:'Roboto', sans-serif;font-weight:700">B</i>
											</span>
											<span class="fa-stack" style="font-size:72%"><i class="fa fa-square fa-stack-2x" style="color:#0080AE"></i><i class="fa fa-stack-1x fa-inverse" style="font-family:'Roboto', sans-serif;font-weight:700;color:white">M</i>
											</span>
										</li>
										<li style="margin-left:-10px;padding:0;font-size:80%;margin-top:1em"><i class="fa-li fa fa-train" style="font-size:120%"></i> <?php echo $lang['INFO_TT_TRAIN_T']; ?>
										</li>
									</ul>
								</div>
									<div class="6u" style="float:right;margin-top:20px">
										<ul class="fa-ul">
											<li style="font-size:80%;"><i class="fa-li fa fa-bicycle" style="font-size:120%"></i> <?php echo $lang['INFO_TT_BIKE']; ?> <a href="http://<?php echo $lang['INFO_TT_BIKE_T']; ?>" target="_blank"><?php echo $lang['INFO_TT_BIKE_T']; ?></a></li>
											<li style="font-size:80%;line-height:1.5em;margin-top:1em"><i class="fa-li fa fa-taxi" style="font-size:110%"></i> <?php echo $lang['INFO_TT_TAXI']; ?></li> 
											<li style="font-size:80%;line-height:1.5em;margin-top:1em"><i class="fa-li fa fa-car" style="font-size:110%"></i> <?php echo $lang['INFO_TT_CAR']; ?></li>
										</ul>
									</div>

								</div>
								</div>
							</section>

					</div>
				</div>
				<div class="nav bottom" style="margin-bottom:5vh"><prev></prev><a href="papers.php" title="<?php echo $lang['MENU_CALL3']; ?>"><?php echo $lang['MENU_CALL3']; ?></a> <a href="contact.php" title="<?php echo $lang['MENU_CONTACT']; ?>"><?php echo $lang['MENU_CONTACT']; ?></a><next></next></div>
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
