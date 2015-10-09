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
		<script src="http://openlayers.org/en/v3.6.0/build/ol.js" type="text/javascript"></script>
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
					<h2>Programme</h2>
					<p>Jeudi 28 octobre 2015, de 8h00 à 18h00</p>
				</header>
				<div class="row">
					<div class="8u">
						<ul class="actions">
							<li><a href="inscription.php" class="button alt">Inscrivez-vous</a></li>
						</ul>
					</div>
					<div class="table-wrapper">
									<table class="alt">
										<!--<thead>
											<tr>
												<th>Heure</th>
												<th>Description</th>
												<th>Salle</th>
											</tr>
										</thead>-->
										<tbody>
											<tr class="progr-1">
												<td colspan="3"><i class="fa fa-rocket"></i>Séance d'ouverture</td>
											</tr>
											<tr>
												<td>8h00</td>
												<td class="talk" colspan="3" style="text-align:left;padding-left:30px">Accueil<br /></td>
											</tr>
											
											<tr>
												<td>9h00</td>
												<td class="talk" colspan="3" style="text-align:left;padding-left:30px">Inscriptions<br /></td>
											</tr>
											<tr>
												<td>9h30</td>
												<td class="talk" colspan="3" style="text-align:left;padding-left:30px">Bienvenue et présentation de OSGeo/OSGeo-BE<br /><span class="author"> Mr Who & Mr Spoke</span></td>
												
											</tr>
											
											<tr>
												<td>10h00</td>
												<td class="talk" colspan="3" style="text-align:left;padding-left:30px">Session plénière Keynote<br /><span class="author"> Miss Piggy & Mr Kermit </span></td>
												
											</tr>
											
												<tr class="progr-2">
												<td colspan="3">10h30 <i class="fa fa-coffee"></i>Pause Café</td>
											</tr>
											
											<!--<tr>
												<td colspan="3" style="text-align:left;padding-left:30px"><i class="fa fa-database"></i>Données et services disponibles</td>
											</tr>-->
											
											<tr style="background-color: #fff;">
												<td colspan="3">
													<div class="table-wrapper">
													<table class="alt tarde">
														<tbody>
															<tr>
															
																<td colspan="2" style="width:50%;text-align:center;"><h4><i class="fa fa-rocket fa-2x"></i> Pleniere</h4>
																<a href="infos.html#plenieres" style="font-weight:300">Atrium</a></td> 
																<td colspan="2" style="width:50%;text-align:center;"><h4><i class="fa fa-gears fa-2x"></i> Side Track Demo</h4>
																<a href="infos.html#workshops" style="font-weight:300">Aqua</a></td>
																<td colspan="2" style="width:50%;text-align:center;"><h4><i class="fa fa-gears fa-2x"></i> Side Track Dev</h4>
																<a href="infos.html#workshops" style="font-weight:300">Sylva - Terra</a></td>
															</tr>
															<tr>
																<td style="width:10%;background-color: #fff">11h00</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	Le WebGIS de BDU : passé, présent, futur<br />
																	<span class="author">Grégoire VANDENSCHRICK,  & <br />
																	Laurence MICHA(Bruxelles Développement urbain)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">La plateforme BruGIS est développée et maintenue par Bruxelles Développement Urbain depuis 2006. Elle a connu plusieurs changements technologiques depuis sa mise en ligne. Le dernier, initié en 2011 est une transition vers l’OpenSource pour le client web, les serveurs cartographiques, et bientôt les bases de données. La présentation donnera le contexte structurel de la plateforme ; elle parcourra ensuite son évolution technologique pour détailler enfin l’état actuel de l’ architecture mise en place ; l’équipe et les moyens alloués, le trafic moyen auquel BruGIS fait face seront rapidement présentés ; la présentation finira par les nouveautés et les développement en cours. Une démonstration Live est proposée dans une session parallèle. Le code sera rendu public lors d’une session DEV.</div>
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	 GeoMapFish, le Web SIG Open Source<br />
																	<span class="author">Bolognini Yves <br />
																	(Camptocamp)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>																
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	 Sensor web enablement: a first implementation with istSOS<br />
																	<span class="author"> Daan Asma <br />
																	(xxx)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>
															</tr>
															<!-- Bloc de 25 minutes -->
															<tr>
															
																<td style="width:10%;background-color: #fff">11h25</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	Maps for  the  bicentenary  of Waterloo<br />
																	<span class="author">Christophe Cloquet <br />
																	(Poppys)</span>
																	<!--
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzz</div>
																	-->
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	  Outils pour commencer à ré-utiliser les données d'OpenStreetMap<br />
																	<span class="author"> Julien Fastré <br />
																	(Champs-Libres)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>																
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	  MapGuide OS 3.0 and REST interface<br />
																	<span class="author">  Danny Tuypens <br />
																	(xxx)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>
															</tr>
															<!-- Fin bloc de 25 minutes -->
															<!-- Bloc de 25 minutes -->
															<tr>
															
																<td style="width:10%;background-color: #fff">11h50</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	The potential of OpenStreetMap for land use/land cover mapping.<br />
																	<span class="author"> Julien Minet <br />
																	(xxx)</span>
																	<!--
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzz</div>
																	-->
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	   geOrchestra, a free, modular and secure SDI<br />
																	<span class="author">  Jacon Frédéric <br />
																	(Champs-Libres)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>																
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	  Managing Web GIS maps using the Geomajas Deskmanager<br />
																	<span class="author">  Oliver May <br />
																	(xxx)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>
															</tr>
															<!-- Fin bloc de 25 minutes -->
															<!-- Bloc de 25 minutes -->
															<tr>
															
																<td style="width:10%;background-color: #fff">12h15</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	L’écosystème Open Source SIG en (quelques) questions récurrentes, ou comment déconstruire les préjugés…<br />
																	<span class="author">  Vincent Picavet <br />
																	(xxx)</span>
																	<!--
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzz</div>
																	-->
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	   A method to create hydrological models worldwide by using only open data<br />
																	<span class="author"> Jonas van Schrojenstein Lantman <br />
																	(Champs-Libres)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>																
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	   OL3-Cesium, La 3D pour OpenLayers<br />
																	<span class="author"> Bolognini Yves <br />
																	(xxx)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>
															</tr>
															<!-- Fin bloc de 25 minutes -->
														</tbody>
													</table>
													</div>
												</td>
											</tr>
											<tr class="progr-2">
												<td colspan="3" style="background-color: #f8f8f8">12h40<i class="fa fa-cutlery"></i>Pause de midi</td>
											</tr>
											
											<!-- Apres-midi -->
											<tr style="background-color: #fff;">
												<td colspan="3">
													<div class="table-wrapper">
													<table class="alt tarde">
														<tbody>
															
															<tr>
																<td style="width:10%;background-color: #fff">14h00</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	the frame of Lifewatch-WB (european infrastructure for biodiversity and ecosystem research)<br />
																	<span class="author"> Julien Radoux <br />
																	(ggggg)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">xxx</div>
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	 Démonstration Live du WebGIS BruGIS<br />
																	<span class="author">Grégoire VANDENSCHRICK, Antoine DEBRY<br />
																	(xxxxxxxxxx)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>																
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	Un exemple d'utilisation de QGis comme interface de saisie de données en lien avec une base de données PostGIS.<br />
																	<span class="author"> Didier Peeters<br />
																	(xxx)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>
															</tr>
															<!-- Bloc de 25 minutes -->
															<tr>
																<td style="width:10%;background-color: #fff">14h25</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	Managing the Flemish Functional Cycle Network: a FOSS4G solution<br />
																	<span class="author">  Karel Dieussaert<br />
																	(ggggg)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">xxx</div>
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	 HALE for e-reporting, Shiny/R for advanced interactive analyses and a Cordova mobile app: a fully open source SDI for Belgian air quality data<br />
																	<span class="author"> Olav Peeters<br />
																	(xxxxxxxxxx)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>																
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	 Automating you analysis with SAGA GIS<br />
																	<span class="author"> Johan Van de Wauw<br />
																	(xxx)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>
															</tr>
															<!-- Bloc de 25 minutes -->
															<tr>
																<td style="width:10%;background-color: #fff">14h50</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	Cataloguing open geodata with CKAN : new features, belgian perspective<br />
																	<span class="author">  Philippe Duchesne<br />
																	(ggggg)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">xxx</div>
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	 QGis in het veld: tabletapp voor behandeling bodemerosie bezwaren<br />
																	<span class="author"> Roel Huybrechts<br />
																	(xxxxxxxxxx)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>																
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	 Adding rotation support to Leaflet.draw<br />
																	<span class="author"> Jan De Moerloose<br />
																	(xxx)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>
															</tr>
															<!-- Bloc de 25 minutes -->
															<tr>
																<td style="width:10%;background-color: #fff">15h15</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	Using open source software to publish inspire data for Soil and Sub-soil<br />
																	<span class="author"> Pieter De Graef <br />
																	(ggggg)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">xxx</div>
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	 Efficient data inventarisation for KLIP Digitaal using QGIS<br />
																	<span class="author"> Steven Smolders<br />
																	(xxxxxxxxxx)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>																
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	PostgreSQL/PostGIS comme plateforme intégrée de GéoData Science.<br />
																	<span class="author"> Olivier Courtin<br />
																	(xxx)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>
															</tr>
															<!-- Bloc de 25 minutes -->
															<tr>
																<td style="width:10%;background-color: #fff">15h40</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	How to get your entire university excited about (open)spatial data and tools<br />
																	<span class="author"> Leon van der Meulen <br />
																	(ggggg)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">xxx</div>
																</td>
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	CDR are slowly merging towards an Open Source GIS environment<br />
																	<span class="author">Birgit Blaabjerg Bisgaard<br />
																	(xxxxxxxxxx)</span>
																	<a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>																
																<td style="background-color: #fff;text-align:left;font-weight:300">
																	Process-based, spatially-distributed hydrological modelling: the Open Source WetSpa-Python model.<br />
																	<span class="author"> Salvadore Elga<br />
																	(xxx)</span><a class="btn pluss js-toggleNext"><i class="fa fa-plus-square"></i>plus d'infos</a>
													<div class="toggled" style="display:none;">zzzzzzzzzzzzzzz.</div>
																</td>
															</tr>
															<!-- Bloc de 25 minutes -->
														</tbody>
													</table>
													</div>
												</td>
											</tr>
											
											
											<tr class="progr-1">
												<td colspan="3" style="background-color: #f8f8f8"><i class="fa fa-university"></i>Séance de clôture</td>
											</tr>
											<tr style="background-color: #fff">
												<td>17h45<br />18h00</td>
												<td class="talk">Séance de clôture et perspectives du FOSS4G en Belgique<br /><i class="fa fa-glass"></i> Verre de l'amitié</td>
												<td><a href="infos.html#plenieres">UB4.136</a></td>
											</tr>											
										</tbody>
									</table>
								</div>	
					
				</div>
				<div class="row">
					<div class="12u">


						</div>
					</div>
				<div class="nav bottom"><prev></prev><a href="a-propos.html" title="A propos">A propos</a> <a href="infos.html" title="Infos">Informations pratiques</a><next></next></div>
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
