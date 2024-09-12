<?php include_once '../common.php';
include_once ("../mysql.php");
$languages = array(0 => "?", 1 => "nl", 2 => "fr", 3 => "en");
?>
<!DOCTYPE html>
<html lang="<?php echo $lang['URL_SHORT']; ?>">

<head>
    <title>
        <?php echo $lang['SITE_TITLE']; ?>
    </title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="<?php echo $lang['SITE_DESCRIPTION']; ?>" />
    <meta name="keywords" content="<?php echo $lang['SITE_KEYWORDS']; ?>" />
    <meta name="geo.placename" content="Bd Simon Bolivar 30, WTC III, 1000 Bruxelles, Belgium" />
    <meta name="geo.placename" content="Bd Simon Bolivar 30, WTC III, 1000 Bruxelles, Belgium" />
    <meta name="geo.placename" content="Bd Simon Bolivar 30, WTC III, 1000 Bruxelles, Belgium" />
    <!--<meta name="geo.position" content="50.866248;4.349073" />-->
    <!--<meta name="geo.position" content="50.866248;4.349073" />-->
    <!--<meta name="geo.position" content="50.866248;4.349073" />-->
    <meta name="geo.region" content="BE-Brussels" />
    <!--<meta name="ICBM" content="50.866248, 4.349073" />	-->
    <!--<meta name="ICBM" content="50.866248, 4.349073" />	-->
    <!--<meta name="ICBM" content="50.866248, 4.349073" />	-->
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="/js/jquery.dropotron.min.js" type="text/javascript"></script>
    <script src="/js/jquery.scrollgress.min.js" type="text/javascript"></script>
    <script src="/js/skel.min.js" type="text/javascript"></script>
    <script src="/js/skel-layers.min.js" type="text/javascript"></script>
    <script src="/js/init.js" type="text/javascript"></script>
    <script src="/js/init.js" type="text/javascript"></script>
    <script src="/js/init.js" type="text/javascript"></script>
    <link rel="canonical" href="http://www.foss4g.be/" />
    <noscript>
        <link rel="stylesheet" href="/css/skel.css" />
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/style-wide.css" />
    </noscript>
    <link rel="stylesheet" href="/css/style-talk.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>

<body>

    <!-- Header -->
    <header id="header">
        <?php include '../header.inc'; ?>
    </header>

    <!-- Main -->
    <section id="main" class="container">

        <div class="content">
            <h2>Mapbox Cloud Vector Tiles with Attribute Information</h2>

            <div class="prog-speaker">Andrea van Milgen, Wouter van der Hulst</div>
            <div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
            <div class="prog-theme icon">OSM/Mapping</div>
            <div class="prog-tl">
                <div class="prog-sched icon"><?php echo $lang['PROG_THU'] ?>, 15h25 - 15h45</div>
                <div class="prog-track tr2 icon">Grote zaal</div>
            </div>

            <div class="abstract">
                <p>
                    At Alliander, as a grid operator, we manage large amounts of geographical asset information. Our 
                    electricity, gas, and telecom assets together comprise over 600 types of objects, each consisting 
                    of millions of individual objects. So yeah, that’s a lot of data! For the past few years, we've 
                    been offering this data as Esri Vector Tile sets, but this closed-source technology hasn't been 
                    flexible enough for what we need. Open Source, for example, could let us generate deltas in the future.
                </p>
                <p>
                    To deliver this data efficiently to our organization, this year we developed cloud-hosted Mapbox vector 
                    tiles with queryable attribute information. In this presentation, we'd like to share both the successes 
                    and challenges we've encountered during this development.
                </p>
                <h3>Trefwoorden</h3>
                <p>AWS, Cloud, Vector Tiles, MapBox, PostGreSQL, S3</p>
            </div>
        </div>

        <div class="nav bottom" style="margin-top: 50px;">
            <prev></prev><a href="/programme.php" title="<?php echo $lang['MENU_PROGRAM']; ?>">
                <?php echo $lang['MENU_PROGRAM']; ?>
            </a>
        </div>
    </section>


    <!-- CTA -->
    <section id="cta">

        <p>
            <?php echo $lang['FOOTER_THANKS']; ?>
        <p>
        <p>
            <?php echo $lang['FOOTER_THANKS_ALL']; ?>
        </p>
        <p>
            <?php echo $lang['FOOTER_MORE']; ?>
        </p>

    </section>

    <!-- Footer -->
    <footer id="footer">
        <?php include '../footer.inc'; ?>
    </footer>
    <script>
        $('.js-toggleNext').click(function () {
            abstractdiv = $(this).next();
            abstractdiv.toggle();
        });
    </script>
</body>

</html>
<?php
mysqli_close($link);
?>