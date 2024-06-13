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
		<script src="/js/jquery.min.js" type="text/javascript"></script>
		<script src="/js/jquery.dropotron.min.js" type="text/javascript"></script>
		<script src="/js/jquery.scrollgress.min.js" type="text/javascript"></script>
		<script src="/js/skel.min.js" type="text/javascript"></script>
		<script src="/js/skel-layers.min.js" type="text/javascript"></script>
		<script src="/js/init.js" type="text/javascript"></script>
		<script src="/js/accordion.js" type="text/javascript"></script>
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
				<header style="margin:0">
					<h2><?php echo $lang['PAPERS_TITLE']; ?></h2>
					<p><?php echo $lang['PAPERS_SUBTITLE']; ?></p>
					<!-- <span class="image fit"><img src="/images/call-papers.png" alt="" /></span>				 -->
				</header>
				<div class="row">
					<div class="12u">
						<p><?php echo $lang['PAPERS_CALL']; ?></p>
						<p><a href="submit-paper.php"></a><?php echo $lang['PAPERS_CALL']; ?</p>
					</div>
				</div>
				<div class="row">
					<!-- plenary -->
					<div class="6u">
						<section class="box plenary">
							<h3><?php echo $lang['PAPERS_CALL_T_TXT1']; ?></h3>
							<h4><?php echo $lang['PAPERS_CALL_S_TXT1']; ?></h4>
							<hr>
							<p><i class="fa fa-caret-right"></i> <?php echo $lang['PAPERS_CALL_TXT3']; ?></p>	
							<hr>
							<p><i class="fa fa-caret-right"></i> <?php echo $lang['PAPERS_CALL_TXT4']; ?></p>
							<p><i class="fa fa-caret-right"></i> <?php echo $lang['PAPERS_CALL_TXT6']; ?></p>
							<hr>
							<p><i class="fa fa-caret-right"></i> <?php echo $lang['PAPERS_CALL_TXT7']; ?></p>
							<!-- <p style="margin-top:1.5em"><i class="fa fa-exclamation-triangle"></i> <?php echo $lang['PAPERS_CALL_TXT8']; ?></p> -->
						</section>
					</div>
					<!-- topics and debates -->
					<div class="6u">
						<section class="box plenary">
							<h3><?php echo $lang['PAPERS_CALL_T2_TXT1']; ?></h3>
							<h4><?php echo $lang['PAPERS_CALL_S2_TXT1']; ?></h4>
							<hr>
							<p><i class="fa fa-caret-right"></i> <?php echo $lang['PAPERS_CALL_2TXT1']; ?></p>
							<p><i class="fa fa-caret-right"></i> <?php echo $lang['PAPERS_CALL_2TXT2']; ?></p>
							<!-- <p><i class="fa fa-caret-right"></i> <?php echo $lang['PAPERS_CALL_2TXT3']; ?></p>
							<p><i class="fa fa-caret-right"></i> <?php echo $lang['PAPERS_CALL_2TXT4']; ?></p>
							<p style="margin-top:1em"><span class="image fit"><img src="/images/call-workshop.jpg" alt="" /></span></p> -->
						</section>
					</div>
				</div>
				<div class="row">
					<div class="12u">
					<section class="box plenary">
						<!-- <h4 style="text-align:left"><?php echo $lang['PAPERS_FORMAT']; ?></h4>
						<p><i class="fa fa-caret-right"></i> <?php echo $lang['PAPERS_FORMAT_1']; ?></p>
						<p><i class="fa fa-caret-right"></i> <?php echo $lang['PAPERS_FORMAT_2']; ?></p>
						<p><i class="fa fa-caret-right"></i> <?php echo $lang['PAPERS_FORMAT_3']; ?></p> -->
						<a href="submit-paper.php" class="button icon fa-warning specialo small" style="float:right"><?php echo $lang['PAPERS_DEADLINE']; ?></a> <h4 style="margin-top:20px;text-align:left"><?php echo $lang['PAPERS_SUM']; ?></h4>
						<p><?php echo $lang['PAPERS_SUM_SUB']; ?></p>
						<!-- <ol>
							<li><?php echo $lang['PAPERS_SUM_NAME']; ?></li>
							<li><?php echo $lang['PAPERS_SUM_EMAIL']; ?></li>
							<li><?php echo $lang['PAPERS_SUM_ORG']; ?></li>
							<li><?php echo $lang['PAPERS_SUM_TITLE']; ?></li>
							<li><?php echo $lang['PAPERS_SUM_ABSTRACT']; ?></li>
						</ol> -->
						<h4 style="text-align:left"><?php echo $lang['PAPERS_CALL2T']; ?></h4>
						<p><?php echo $lang['PAPERS_CALL2']; ?></p>
						<h4 style="margin-top:20px;text-align:left"><?php echo $lang['PAPERS_CALL3T']; ?></h4>
						<?php echo $lang['PAPERS_CALL3']; ?>
						<?php echo $lang['PAPERS_CALL4']; ?>
					</section>
					</div>
				</div>
				
				<!--<div class="nav bottom"><prev></prev><a href="call.php" title="<?php echo $lang['MENU_CALL2']; ?>"><?php echo $lang['MENU_CALL2']; ?></a> <a href="infos.php" title="<?php echo $lang['MENU_PRACTICAL']; ?>"><?php echo $lang['MENU_PRACTICAL']; ?></a><next></next></div>-->
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
