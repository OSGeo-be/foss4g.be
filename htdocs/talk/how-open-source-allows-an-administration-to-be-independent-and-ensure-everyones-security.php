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
            <h2>How Open Source allows an administration to be independent and ensure everyones' security</h2>

            <div class="prog-speaker">Gael Kruwialis</div>
            <div class="prog-lang icon"><?php echo $lang['LANG_EN']; ?></div>
            <div class="prog-theme icon">Stacks and formats</div>
            <div class="prog-tl">
                <div class="prog-sched icon"><?php echo $lang['PROG_THU'] ?>, 11h00 - 11h20</div>
                <div class="prog-track tr1 icon">BG1</div>
            </div>

            <div class="abstract">
                <p>
                    Paragon est un programme mis en place au sein du Centre national de crise belge. Il sert de
                    plateforme de soutien pour la planification d'urgence et la gestion de crise dans son interprétation
                    la plus large. En intégrant de nombreuses couches cartographiques issues de multiples sources de
                    données ouvertes et officielles, Paragon permet d'améliorer notre préparation aux situations
                    critiques et, in fine, d'accroître l'efficacité des services pour tous.
                </p>
                <p>
                    Ce programme perpétuel repose sur des normes ouvertes adoptées. Sécurisé, évolutif et multilingue,
                    il est libre de tout intérêt commercial. Paragon pourrait être largement mis à la disposition des
                    organisations tierces, tant au niveau national qu'international.
                </p>
                <p>
                    L'objectif de cette présentation est de démontrer l'intérêt de l'utilisation des solutions open
                    source pour fournir une base solide permettant un développement performant au sein d'une
                    administration fédérale. La présentation énumérera les briques logicielles de Paragon et donnera un
                    bref aperçu de leur robustesse grâce à la puissance de la communauté derrière chacune d'elles.
                </p>
                <p>
                    Nous passerons en revue la pertinence et le processus de sélection des différents composants
                    constitutifs de l'application Paragon. Nous mettrons également en avant la construction et le mode
                    collaboratif choisi pour développer cet outil de A à Z en moins de deux ans. Cela se fera au travers
                    de petites démonstrations des fonctionnalités déjà disponibles en production.
                </p>
                <p>
                    Enfin, nous aborderons les évolutions et intégrations prochaines prévues pour Paragon.
                </p>
                <h3>Concepts Clés</h3>
                <ul>
                    <li>Laravel</li>
                    <li>OpenLayers</li>
                    <li>R Studio</li>
                    <li>PostGIS</li>
                    <li>Vector Tiles</li>
                    <li>Github</li>
                    <li>Maputnik</li>
                    <li>IoT</li>
                    <li>Données liées (Linked Data)</li>
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