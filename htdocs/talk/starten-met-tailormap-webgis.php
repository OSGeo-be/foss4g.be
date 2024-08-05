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
            <h2>Starten met Tailormap WebGIS</h2>

            <div class="prog-speaker">Kees-Jan Lammers</div>
            <div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>

            <div class="prog-tl">
                <div class="prog-sched icon"><?php echo $lang['PROG_WED'] ?>, 15h00 - 17h00</div>
                <div class="prog-track tr3 icon">Judo 2</div>
            </div>

            <div class="abstract">
                <p>
                    Tailormap is een laagdrempelig, Open Source WebGIS systeem wat functioneel applicatiebeheerders in
                    staat stelt om (na installatie) viewers te publiceren op het internet, zonder een regel code te
                    hoeven typen. Naast eenvoudig functioneel beheer, is ook het technisch beheer gemakkelijk uit te
                    voeren. Tailormap draait namelijk volledig in Docker containers. Tailormap is voorzien van zeer veel
                    functionaliteit om via een gebruiksvriendelijke user interface data in kaarten te bevragen,
                    bewerken, analyseren en te delen, zowel binnen de eigen organisatie als naar een breder publiek.
                </p>
                <p>
                    Tijdens deze workshop wordt de deelnemer in staat gesteld om zelf op de eigen laptop Tailormap te
                    installeren, voorkennis van Docker is daarbij niet noodzakelijk. Daarna wordt Tailormap met services
                    gevuld zodat er viewers gemaakt kunnen worden (tip: heb je al eigen WMS/WFS services, neem dan de
                    gegevens daarvan mee om gelijk met je eigen data aan de slag te kunnen). Deze viewers dienen als
                    basis om de verschillende facetten en functionaliteiten met elkaar te ontdekken en uit te testen.
                    Als laatst komen vanzelfsprekend de best practices voor het gebruik van Tailormap als WebGIS ter
                    sprake.
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