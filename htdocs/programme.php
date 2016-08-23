<?php include_once 'common.php'; 
include_once("mysql.php");
$languages= array(0=>"?",1=>"nl", 2=>"fr",3=>"en");
?>
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
		<style>
			 span.author {font-size:80%}
			 span.lang {font-size:60%; float:left}
			 td a {float:right}
			 div.abstract {display:none}
			</style>
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
					<h2><?php echo $lang['MENU_PROGRAM']; ?></h2>
					<p><?php echo $lang['SITE_DATATOP']; ?></p>
				</header>
				<div class="row">
					<div class="8u">
						<ul class="actions">
							<li><a href="inscription.php" class="button alt"><?php echo $lang['MENU_REG']; ?></a></li>
						</ul>
					</div>
					<div class="table-wrapper">
									
						<table class="alt tarde">
							<tbody>
							<tr><th>time</th><th>track 1</th><th>track 2</th><th>track3</th><th>track 4</th></tr>
							<?php
							$query = "select * FROM presentations order by start, track";
							$result = mysqli_query($link,$query);

							$lasttrack =0;
							while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{
								$start = substr_replace($row['start'], 'h', -2, 0);
								if ($row['track']==0)
								{
									$lasttrack = 0;
									if  ($row['type'] !='plenary'){
											#breaks
										$symbol='';
										if ($row['type']=='coffee') $symbol = '<i class="fa fa-coffee"></i>';
										if ($row['type']=='lunch') $symbol = '<i class="fa fa-cutlery"></i>';
										printf ("<tr class='progr-2'><td>%s</td><td colspan='4'>$symbol%s</td></tr>", $start, htmlentities($row['title'])); }
									else
									{
										#plenary sessions
										printf ("<tr class='progr-1'><td>%s</td><td colspan='4'>%s</td></tr>", $start, htmlentities($row['title'])); }
						
									
								}
								else
								{ #normal sessions
									if ($lasttrack >=$row['track']) {
										$width = 4-$lasttrack;
										echo "<td colspan='$width'></td></tr>";
										
									}
										
									if ($lasttrack+2==$row['track']) echo '<td></td>';
									if ($row['track']==1)
										{printf( '<tr><td>%s</td>',$start);}
									
									printf("<td>%s<br><span class='author'>%s</span><span class='lang'>[%s]</span><span start='%s' track='%s' class='oa'><a class='btn pluss'><i class='fa fa-plus-square'></i></a></span><div class='abstract toggled'></div></td>", htmlentities($row['title']),htmlentities($row['presenter']), $languages[$row['language']],$row['start'],$row['track']);
									$lasttrack = $row['track'];
								}
							}
							echo '</tr>';
							?>
							</tbody>
							</table>
					
				</div>
				<div class="row">
					<div class="12u">


						</div>
					</div></div>
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
		  $( ".js-toggleNext" ).click(function()
			{
				$(this).next().slideToggle();
				return false;
			}
		);
		</script>
		<script>
			$('.oa').click(function(){
				start = $(this).attr('start');
				track = $(this).attr('track');
				abstractdiv = $(this).next();

			$.get("abstract.php", {'start':start,'track':track}, function(data){
					abstractdiv.html(data);
				}
				);
				abstractdiv.toggle();
				});
		</script>
	</body>
</html>
<?php
mysqli_close($link);
?>
