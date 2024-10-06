<?php include_once '../common.php';
include_once("../mysql.php");
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
            <h2>Ruimtelijke Plannen plug-in opnieuw schrijven met ChatGPT</h2>

            <div class="prog-speaker">Tim Dubbeldam</div>
            <div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
            <div class="prog-theme icon">APIs & Planning</div>
            <div class="prog-slides icon"><a href="/talk-slides/ruimtelijke-plannen-plug-in-opnieuw-schrijven-met-chatgpt.pptx"><?php echo $lang['DOWNLOAD_SLIDES'] ?></a>
            <div class="prog-tl">
                <div class="prog-sched icon"><?php echo $lang['PROG_THU'] ?>, 13h15 - 13h35</div>
                <div class="prog-track tr5 icon">Hobby/dans</div>
            </div>

            <div class="abstract">
                <p>
                    Tijdens deze presentatie bespreken we het opnieuw schrijven van de "Ruimtelijke Plannen" QGIS
                    plug-in met behulp van ChatGPT. De plug-in is ontworpen om ruimtelijke plannen van het nieuwe
                    omgevingsloket efficiënt te visualiseren en beheren binnen QGIS.
                </p>
                <p>Hoofdpunten:</p>
                <ol>
                    <li><b>Nieuw datamodel</b>: Het datamodel is veranderd, waardoor de oude plug-in niet meer werkte en
                        de ondersteuning kwam te vervallen.</li>
                    <li><b>Gebruik van ChatGPT bij herschrijven</b>: We tonen hoe ChatGPT ons heeft geholpen bij het
                        herschrijven van code, oplossen van fouten, en toevoegen van nieuwe functies.</li>
                    <li><b>Demo van de plug-in</b>: Een live demo van hoe de nieuwe versie van de plug-in werkt.</li>
                    <li><b>Toekomstige uitbreidingen en samenwerking</b>: We bespreken hoe de community kan bijdragen
                        aan verdere verbeteringen en uitbreidingen van de plug-in.</li>
                    <li><b>Ruimte voor discussie</b>: Hoe gaan we om met een plug-in die door ChatGPT geschreven is, bij
                        wie liggen dan de auteursrechten?</li>
                </ol>

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