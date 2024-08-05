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
            <h2>Algorithm for network planning and design in PostGIS</h2>

            <div class="prog-speaker">Wazir Sahebali</div>
            <div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
            <div class="prog-theme icon">PostGIS</div>
            <div class="prog-tl">
                <div class="prog-sched icon"><?php echo $lang['PROG_THU'] ?>, 13h15 - 13h35</div>
                <div class="prog-track tr3 icon">Judo 2</div>
            </div>

            <div class="abstract">
                <h3>Context</h3>
                <p>
                    Ondanks de hoge dekkingsgraad van snel internet in Nederland, zijn er nog steeds restgebieden
                    (veelal buitengebieden) waar huishoudens het met een vaste internetverbinding moeten doen die te
                    traag is om de ontwikkelingen van de huidige tijd bij te benen (thuiswerken, streaming, etc.).
                    Aangezien in dergelijke gebieden marktpartijen er soms hun handen er al vanaf hebben getrokken, is
                    het de vraag hoe er hier nog een oplossing geboden kan worden. Vanuit de overheid wordt deze
                    problematiek ook gezien, mede vanuit de Europese doelstellingen omtrent Very High Capacity Networks.
                </p>

                <h3>Vraagstelling</h3>
                <p>
                    Daarom kwam er vanuit verschillende overheden de vraag aan ons onderzoeksbureau (Dialogic) om voor
                    gebieden een ruwe inschatting te maken van de kosten voor de aanleg van een glasvezelnetwerk in die
                    gebieden.
                </p>

                <h3>Aanpak/resultaat</h3>
                <p>
                    Er bestaat reeds commerciële software (Comsof Fiber) hiervoor, die door markpartijen wordt gebruikt.
                    Vanuit een onderzoeksoogpunt hebben wij hier echter een eigen algoritme (in PostGIS) voor
                    ontwikkeld, waarbij adressen op een efficiënte manier worden verbonden via routes over de weg. De
                    lengte van het netwerk dat daar uitkomt, hebben we uiteindelijk gebruikt om een kosteninschatting te
                    maken waarmee we deze overheden van advies konden voorzien.
                </p>

                <h3>Presentatie</h3>
                <p>
                    In deze presentatie zal ik dit algoritme en de uitdagingen (zoals fysieke infrastructurele
                    obstakels) die daarbij voorbijkwamen toelichten.
                </p>

                <h3>Trefwoorden</h3>
                <p>PostGIS, pgRouting, clustering, DBSCAN, uitrol glasvezel</p>
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