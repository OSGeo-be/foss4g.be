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
                                <p>FOSS4G Belgium is organised by <a href="http://wiki.osgeo.org/wiki/Belgium">The Belgian chapter of OSGeo</a>
                                </p>
								

								<hr />
								
								<h3>Web site</h3>
								<h4>Back and frontend</h4>
								<blockquote style="font-style:normal">Marcos Peebles <a href="http://twitter.com/MarcosPeebles" title="Marcos Peebles">@marcospeebles</a> and Gaël Kruwailis.</blockquote>

								<h4>Source Codes</h4>
								<pre>// DESIGN, JS, HTML &amp; CSS
Base template from http://pixelarity.com/ see licence [ http://pixelarity.com/license ]
Grab the same and play at http://html5up.net | @n33co (awesome guy!) CCA 3.0 license
								
// DESIGN, LOGO, JS, HTML &ampk CSS
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
...and Adobe PS &amp; AI CC (yay no GIMP) 
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
	</body>
</html>
