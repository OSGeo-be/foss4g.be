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
            <h2>Point Cloud Processing with QGIS</h2>

            <div class="prog-speaker">Hans van der Kwast</div>
            <div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>

            <div class="prog-tl">
                <div class="prog-sched icon"><?php echo $lang['PROG_WED'] ?>, 13h00 - 17h00</div>
                <div class="prog-track tr1 icon">BG 1</div>
            </div>

            <div class="abstract">
                <p>
                    Point Cloud Processing with QGIS is a workshop that will teach you how to work with point cloud data
                    in QGIS. You will discover how to use QGIS's new features for point cloud processing, such as native
                    point cloud processing tools and 3D rendering. Besides tools in the QGIS Desktop user interface,
                    you’ll learn how to use PDAL wrench. PDAL wrench is a collection of easy to use command line tools
                    for processing point cloud data, integrated in the QGIS Processing framework. Most of the tools are
                    multi-threaded, making good use of all available CPUs for fast processing. All tools are based on
                    PDAL pipelines, but easier to use with commands that look similar to GDAL commands.
                </p>
                <p>
                    By the end of this workshop, you will be able to:
                </p>
                <ul>
                    <li>Download and preprocess point cloud data from different sources, such as LiDAR, photogrammetry
                        or drones</li>
                    <li>Create digital surface models from point cloud data using different interpolation methods</li>
                    <li>Explore point cloud data in 3D using the QGIS 3D view and customize its appearance and style
                    </li>
                    <li>Explore
                        point cloud data using the Elevation Profile tool</li>
                    <li>Apply filters to point cloud data to derive features</li>
                    <li>Automate point cloud processing using PDAL wrench</li>
                </ul>
                <p>
                    To participate in this workshop, you will need QGIS 3.34 Prizren, the latest version of QGIS that
                    includes all the new point cloud processing features. You can download it from the official QGIS
                    website or use the OSGeo4W installer. During the workshop you can use your own point cloud data or
                    the open data that we will provide.
                </p>
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