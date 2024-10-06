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
            <h2>Een interactieve Multi Criteria Analyse Tool, een startgesprek voor ruimtelijke planning</h2>

            <div class="prog-speaker">Tijs Oosterhuis</div>
            <div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
            <div class="prog-theme icon">APIs & Planning</div>
            <div class="prog-slides icon"><a href="/talk-slides/een-interactieve-multi-criteria-analyse-tool-een-startgesprek-voor-ruimtelijke-planning.pptx"><?php echo $lang['DOWNLOAD_SLIDES'] ?></a>
            <div class="prog-tl">
                <div class="prog-sched icon"><?php echo $lang['PROG_THU'] ?>, 14h05 - 14h25</div>
                <div class="prog-track tr5 icon">Hobby/dans</div>
            </div>

            <div class="abstract">
                <h3>Intro</h3>
                <p>
                    De tool bestaat uit een tweestaps leerproces om gebruikers te betrekken bij het leren over de
                    voordelen en afwegingen die gepaard gaan met het verkennen van scenario's van ruimtelijke
                    planning.De eerste stap is een geschiktheidsanalyse die gebruikers verwelkomt om een
                    geschiktheidsanalyse op meerdere criteria uit te voeren. Geschiktheidsanalyse kan worden beschouwd
                    als een methode voor locatieselectie.We zullen deze methode gebruiken om te bepalen of een bepaald
                    gebied in de regio geschikt is voor het bouwen van een grootschalige vergister, maar kan ook
                    gebruikt worden voor meerdere ruimtelijke planning scenario's. Aan het einde van de methode fase
                    beschikt u over een lijst met kandidaatlocaties voor grootschalige vergisters.
                </p>

                <h3>Analyse</h3>
                <p>
                    Met het gebruik van h3 hexagonen kunnen verschillende datasets worden samengebracht en met elkaar
                    vergeleken. Dit word als eerste stap gedaan in overleg met alle stakeholders van het scenario.Stap 2
                    bestaat uit het normaliseren van de samengebrachte data. Hierin kan de gebruiker aangeven waar de
                    planning in de buurt van moet liggen, of juist veraf.Uiteindelijk word met de hand van een Moran
                    Local I spatial clustering techniek de h3 hexagon aangewezen welke locatie het meest geschikt is.
                </p>
                <p>
                    Deze tool is allereerst ontwikkeld door Wen-Yu Chen, Johannes Flacke, Pirouz Nourian, ITC Faculty of
                    Geoinformation Science and Earth Observation, University of Twente, the Netherlands. De provincie
                    Zuid-Holland past deze tool toe op verschillende scenario's, hiervan zullen verschillende
                    voorbeelden worden getoond.
                </p>

                <h3>Links</h3>
                <ul>
                    <li>GITHUB: <a href="https://github.com/thijsradijs-pzh/bioze_digital_mapping_tool/tree/main"
                            target="_blank">https://github.com/thijsradijs-pzh/bioze_digital_mapping_tool/tree/main</a>
                    </li>
                    <li>Running app: <a
                            href="https://bioze-interreg.streamlit.app/">https://bioze-interreg.streamlit.app/</a></li>
                </ul>
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