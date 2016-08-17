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
					<h2>Credits</h2>
					<p>« Quæ Sunt Cæsaris, Cæsari »</p>
				</header>
				<div class="row">
					<div class="12u">

						<!-- Text -->
							<section class="box">
								<h3>Organizing Committee</h3>
								<p>This year we (OSGeoBE) have the ambition to organise a first FOSS4G-BE on 29 October 2015 in Brussels. This event will also be used to announce the birth of our Chapter. In preparation for this official expression of interest, a couple of meetings have already taken place, one physical, most of them trough digital communication (skype/IRC). <a href="http://wiki.osgeo.org/wiki/Belgium">The meeting minutes can be found on the OSGeo wiki.</a></p>							
								<header>
								<h4 style="margin-top:20px">Belgium OSGEO Chapter</h4>
								<p>The Belgium OSGeo Chapter has the support of the following initial founding members (alphabetic - first name):</p>
									<ul>
										<li>Ben Abelhausen - liason with OSM - Belgium community</li>
										<li>Dirk Frigne - founding member of the Geomajas community</li>
										<li>Gaël Kruwialis - active member of the local FOSS momement in the Brussels area - contact with the Brussels administration</li>
										<li>Johan Van de Wauw - OSGeo Charter Member</li>
										<li>Maëlle Vercauteren Drubbel - Supervisor and trainer in the Free GIS ARES internship at the IGEAT/ULB</li>
										<li>Marc Ducobu - liason with OSGeo.fr</li>
										<li>Moritz Lennert - GRASS GIS PSC Member, contact with academic world</li>
										<li>Oliver May - PSC member of the Geomajas project</li>
										<li>Pieter Colpaert - link with the open knowledge foundation</li>
										<li>Ruben Capelle</li>
										<li>Tommy Oozeer - OSGeo Advocate</li>
									</ul>
								</header>
								

								<hr />
								
								<h3>Web site</h3>
								<h4>Back and frontend</h4>
								<blockquote style="font-style:normal">Marcos Peebles <a href="http://twitter.com/MarcosPeebles" title="Marcos Peebles">@marcospeebles</a> and Gaël Kruwailis.</blockquote>

								<h4>Source Codes</h4>
								<pre>// DESIGN, JS, HTML & CSS
Base template from http://pixelarity.com/ see licence [ http://pixelarity.com/license ]
Grab the same and play at http://html5up.net | @n33co (awesome guy!) CCA 3.0 license
								
// DESIGN, LOGO, JS, HTML & CSS
Marcos Peebles - June/July 2015 @marcospeebles [ http://peebles.be ]
All additional work under the WTFPL Licence [ http://www.wtfpl.net/ ]

// IMAGES, ICONS AND FONTS
Icons:	Font Awesome [ http://fortawesome.github.com/Font-Awesome ] CCA 3.0 license
Logos are from their respective owners (ULB, IGEAT, Bruxelles Environnement, OSGeofr, Oslandia)
Images
	mundo.png :: Earth logo under the WTFPL Licence
	pic01.jpg :: Background frontpage based on FOSDEM Map, reworked WTFPL licence
	pic02.jpg :: "FOSDEM: Debian Crowded DevRoom" by rore
	[ https://www.flickr.com/photos/rore/2291454609/ ] CC BY-NC-ND 2.0 licence
	banner2.jpg :: Pic from unsplash.com by Sylwia Bartyzel @SylwiaBartyzel CC0 1.0 Universal
	banner.jpg :: Background Earth composition based on
	[ http://commons.wikimedia.org/wiki/File:Flat_earth_night.png ] Public Domain
	Granular background images courtesy of Unsplash [ http://unsplash.com ] CC0 1.0 Universal
Googlefonts [ http://www.google.com/fonts ]
	Roboto ( Christian Robertson - Apache License, version 2.0 )
	Source Sans Pro ( Paul D. Hunt - SIL Open Font License, 1.1 )

// CODE
jQuery (jquery.com)
html5shiv.js (@afarkas @jdalton @jon_neal @rem)
CSS3 Pie [ http://css3pie.com ]
background-size polyfill [ http://github.com/louisremi ]
skel (n33.co)
openlayers3 [ http://openlayers.org/en/v3.0.0/examples/ ]
openstreemap [ http://www.openstreetmap.org/ ]
mapquest [ http://www.mapquest.com/ ]

// IDE
Notepad++ [ http://notepad-plus-plus.org/fr/ ]
wamp [ http://wampserver.com/ ]
Browserstack [ http://browserstack.com/ ]
codepen.io [ http://codepen.io ]
Google Chrome Debugger, Firefox Debugger
...and Adobe PS & AI CC (yay no GIMP) 
</pre>
								<h4>Hosting</h4>
								<blockquote style="font-style:normal"><a href="https://www.ovh.com/" title="OVH">OVH</a></blockquote>
							</section>

					</div>
				</div>
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
