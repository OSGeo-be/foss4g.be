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
            <h2>Using Open-Access Spatial Data for Enhanced Sanitation Planning</h2>

            <div class="prog-speaker">Leonardo Porto Nazareth</div>
            <div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
            <div class="prog-theme icon">QGIS</div>
            <div class="prog-tl">
                <div class="prog-sched icon"><?php echo $lang['PROG_THU'] ?>, 11h50 - 12h10</div>
                <div class="prog-track tr2 icon">Grote zaal</div>
            </div>

            <div class="abstract">
                <p>
                    The conventional approach to sanitation often relies on sewered solutions (offsite systems), which
                    involve extensive networks of pipes and centralized treatment facilities. While effective in
                    well-established urban areas, this method may not be suitable for developing countries with mixed
                    formal and informal settlements. Innovative frameworks and approaches like Sanitation21 and Citywide
                    Inclusive Sanitation (CWIS) support applying sanitation solutions tailored to the local context to
                    ensure sustainable and effective sanitation management, considering population density, water
                    availability, existing infrastructure, and socioeconomic and cultural aspects. Regardless of all the
                    efforts, global sanitation challenges persist, with 3.5 billion people lacking access to safely
                    managed sanitation.
                </p>
                <p>
                    This research explores the potential of open-access spatial data to enhance early-stage sanitation
                    planning using open-source Geographic Information System (GIS) software. A significant barrier to
                    effective sanitation planning is the lack of up-to-date, reliable data. Despite the surge of new
                    open-access data, it is still not widely used in the sanitation planning field. To address this gap,
                    the objective is to identify, catalog, and utilize essential, globally available open-access spatial
                    datasets to support sanitation planning, adopting a data-driven approach to select the most suitable
                    sanitation system according to the local context.
                </p>
                <p>
                    The method involves defining criteria for dataset selection, ensuring compatibility with Open
                    Geospatial Consortium (OGC) standards, and adhering to the FAIR principles. By implementing this
                    approach in a selected case study area, the research seeks to demonstrate the feasibility and
                    benefits of integrating open-access data regarding demographic, infrastructure, and socioeconomic
                    aspects into sanitation planning, aiming to empower local professionals and improve sanitation
                    outcomes in developing regions.
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