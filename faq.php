<?php

error_reporting(E_ALL & ~E_NOTICE);
$aConfig = include('../project_config/config.php');
$lang = $aConfig['languageKeys']['de'];
require_once('../../../ReceiptClearing/inc/functions_frontend.php');
require_with('../../../ReceiptClearing/inc/includes.php', array('sPn' => "Rosbacher1"));

function require_with($pg, $vars)
{
    extract($vars);
    require $pg;
}

$aConfigData = getConfigData('faq');
$aFaqData = unserialize($aConfigData['text']);


?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de"> <!--<![endif]-->

<head>

    <?php
    include ('tracking.inc.php')
    ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Rosbacher</title>
    <meta name="description" content="Willkommen bei Rosbacher! Hier findest du alles Wichtige zu unseren Produkten - und weitere interessante Infos rund um alles, was mit Wasser zu tun hat." />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="<?php echo $aConfig['sRootUrl'] ?>/ReceiptClearing/overlay/css/lity.css">

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="js/main.js"></script>
    <script src="<?php echo $aConfig['sRootUrl'] ?>/ReceiptClearing/overlay/js/lity.js"></script>

    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/site/themes/rosbacher/img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="167x167" href="/site/themes/rosbacher/img/favicon/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="/site/themes/rosbacher/img/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" sizes="180x180" href="/site/themes/rosbacher/img/favicon/apple-touch-icon-180x180.png">
    <link rel="shortcut icon" type="image/x-icon" href="/site/themes/rosbacher/img/favicon/favicon.ico">

    <style>

        .lity {
            background: <?php echo $aConfig['sIframeBackgroundColor'] ?>;
        }

        .lity-iframe .lity-container {
            max-width: 500px !important;
            overflow-y:auto;
            -webkit-overflow-scrolling: touch;
        }

        .lity-iframe-container {
            padding-top: 400px !important;  /* 4:3 ratio */
        }

        .lity-iframe-container iframe {
            background: <?php echo $aConfig['sIframeBackgroundColor'] ?>
        }
        .lity-active,
        .lity-active body {
            overflow: hidden;
            /*position: fixed;*/
        }

    </style>

</head>

<body class="section-home" data-root-url="<?php echo $aConfig['sRootUrl'] ?>">

<!----- NAVIGATION ---->

<nav id="navbar-main" class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <a class="navbar-brand" href="/">
            <img src="img/rosbacher.svg" width="111" height="50" alt="Rosbacher"/>
        </a>

        <div class="d-flex justify-content-end">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <ul class="main-nav nav">
                        <li><a class="nav-item nav-link text-danger"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>


<!----- STAGE ---->

<div class="content-wrapper">


    <div class="container">
        <div class="row mt-2">
            <div class="col-12">

                <h3>FAQs</h3>

                <?php foreach ($aFaqData as $aFaq): ?>

                    <div class="accordion mb-1" id="accordion_<?php echo $i ?>">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading_<?php echo $i ?>">
                                <button class="accordion-button collapsed text-white" style="background: #006937" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo $i ?>" aria-expanded="true" aria-controls="collapse_<?php echo $i ?>">
                                    <?php echo $aFaq['question'] ?>
                                </button>
                            </h2>
                            <div id="collapse_<?php echo $i ?>" class="accordion-collapse collapse" aria-labelledby="heading_<?php echo $i ?>" data-bs-parent="#accordion_<?php echo $i ?>">
                                <div class="accordion-body">
                                    <?php echo $aFaq['answer'] ?>
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php  $i++ ?>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <!----- FOOTER ---->
    <div class="fullpage-section fp-auto-height mt-lg-0 mt-n3">
        <footer>
            <div class="container">
                <div class="row mt-xl-5 mt-lg-5 mt-5 mb-2 d-flex">
                    <div class="col-lg-6 logo-col pt-2">
                        <img src="img/logo_rosbacher_neg.svg" width="120" height="54" class="footer--logo mr-auto" alt="rosbacher" />
                    </div>
                </div>
                <div class="row">
                    <div class="meta-nav-row col-xl-12 d-flex">

                        <div class="meta-nav d-flex ml-auto">
                            <ul>
                                <li><a href="/agb.php">Teilnahmebedingungen</a></li>
                                <li><a href="/datenschutz.php">Datenschutz</a></li>
                                <li><a href="/impressum.php">Impressum</a></li>
                                <li><a href="https://www.rosbacher.de" target="_blank">www.rosbacher.de</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


</body>
</html>