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

    <link rel="stylesheet" href="css/main.min.css?v=2">

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>

    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/site/themes/rosbacher/img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="167x167" href="/site/themes/rosbacher/img/favicon/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="/site/themes/rosbacher/img/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" sizes="180x180" href="/site/themes/rosbacher/img/favicon/apple-touch-icon-180x180.png">
    <link rel="shortcut icon" type="image/x-icon" href="/site/themes/rosbacher/img/favicon/favicon.ico">


</head>

<body id="top" class="section-home">

<!----- NAVIGATION ---->



<?php
include('navigation_subpages.inc.php')
?>





<div class="mt-3">



    <div class="content-wrapper">

        <div class="container">

            <div class="row">
                <div class="col-12">

                    <h3 class="mb-4">FAQ zur Tour de Rosbacher 2026</h3>

                    <?php
                        $aFaqData = array(
                            array(
                                "question" => "In welchem Zeitraum kann ich an dem Gewinnspiel teilnehmen?",
                                "answer" => "Du kannst an der Tour de Rosbacher vom <strong>01. Mai 2026 bis zum 30. Juni 2026 um 23:59 Uhr</strong> teilnehmen. Eine spätere Teilnahme ist nicht möglich."
                            ),
                            array(
                                "question" => "Wie nehme ich an der Tour de Rosbacher teil?",
                                "answer" => "Ganz einfach: Folge dem <strong>Rosbacher-Profil auf komoot</strong> und fahre Touren mit dem Fahrrad, die über komoot <strong>per GPS</strong> getrackt wurden. <strong>Wichtig:</strong> Nur getrackte Touren zählen – manuell hinzugefügte oder importierte GPX-Dateien werden nicht gewertet. Die Teilnahme erfolgt automatisch, sobald du Rosbacher folgst und deine Touren mit Rosbacher <strong>taggst/verlinkst</strong>."
                            ),
                            array(
                                "question" => "Was brauche ich zur Teilnahme?",
                                "answer" => "Du benötigst lediglich ein <strong>kostenloses komoot-Konto</strong> – das reicht völlig aus."
                            ),
                            array(
                                "question" => "Was wird gewertet?",
                                "answer" => "Gezählt werden <strong>alle Kilometer</strong>, die du während des Teilnahmezeitraums über komoot mit GPS-Tracking und mit dem <strong>Tag „Rosbacher“</strong> fährst. Wichtig ist, dass du <strong>alle Touren selbst mit dem Fahrrad zurückgelegt</strong> hast."
                            ),
                            array(
                                "question" => "Wie kann ich meine Teilnahme beenden?",
                                "answer" => "Du kannst jederzeit aussteigen, indem du <strong>Rosbacher auf komoot wieder entfolgst</strong>."
                            ),
                            array(
                                "question" => "Was kann ich gewinnen?",
                                "answer" => "Es warten gleich 3 starke Preise auf die fleißigsten Radler:innen:<br>🥇<strong>1. Platz</strong>: Ein hochwertiges <strong> Modell Aerfast.4 Red Edition Sram Red D1 AXS 1x12, Zeitjäger Laufradsatz</strong><br>🥈<strong>2. Platz</strong>: Ein <strong>Storck-Gutschein im Wert von 2.000 € (brutto)</strong><br>🥉<strong>3. Platz</strong>: Ein <strong>Storck-Gutschein im Wert von 1.500 € (brutto)</strong><br>Die Gewinner:innen werden nach Ende des Aktionszeitraums ermittelt."
                            ),
                            array(
                                "question" => "Was passiert bei einem Gleichstand?",
                                "answer" => "Sollten 2 oder mehr Teilnehmer:innen am Ende exakt dieselbe Kilometeranzahl haben, entscheidet <strong>das Los</strong>."
                            ),
                            array(
                                "question" => "Wie erfahre ich, ob ich gewonnen habe?",
                                "answer" => "Die Gewinner:innen werden <strong>per E-Mail</strong> benachrichtigt. Der/die Gewinner:in des Fahrrads muss dann persönliche Daten wie Körpergröße, Gewicht und Schrittlänge übermitteln, damit das Bike individuell angefertigt werden kann."
                            ),
                            array(
                                "question" => "Wie bekomme ich mein Fahrrad?",
                                "answer" => "Das Fahrrad wird entweder <strong>persönlich in einem der 5 Stores der Storck Bicycle GmbH in Idstein, Düsseldorf, München, Wertheim oder Hamburg</strong> übergeben oder auf Wunsch <strong>frei Haus innerhalb Deutschlands</strong> verschickt. <strong>Achtung: Laufräder müssen selbst montiert</strong> und <strong>Bremssicherungen entfernt</strong> werden – eine Anleitung liegt bei."
                            ),
                            array(
                                "question" => "Falls ich ein Bike gewonnen habe: Wie lange dauert es, bis ich es geliefert bekomme?",
                                "answer" => "Die Fahrräder werden individuell für die Gewinner:innen angefertigt. Die Produktionsdauer beträgt in der Regel <strong>zwischen 8 und 12 Wochen</strong>. Du wirst per E-Mail benachrichtigt, sobald dein Fahrrad fertiggestellt ist. Sollte es zu Verzögerungen kommen, erhältst du ebenfalls eine Benachrichtigung per E-Mail."
                            ),
                            array(
                                "question" => "Muss ich das Fahrrad versichern?",
                                "answer" => "Wenn du möchtest, kannst du das natürlich machen. Du bekommst zusammen mit dem Bike eine <strong>offizielle Gewinnbescheinigung</strong>, mit der du es zum Beispiel bei deiner Versicherung eintragen kannst. Die Versicherung liegt aber in deiner Verantwortung."
                            ),
                            array(
                                "question" => "Wie erhalte ich den Gutschein?",
                                "answer" => "Die Gewinner:innen der <strong>Gutscheine</strong> erhalten ihren <strong>Gutscheincode direkt von Storck</strong> – ebenfalls per E-Mail."
                            ),
                            array(
                                "question" => "Kann ich mir den Gewinn auch auszahlen lassen?",
                                "answer" => "Nein, eine <strong>Barauszahlung ist nicht möglich</strong> – auch eine Übertragung des Gewinns an andere Personen ist ausgeschlossen."
                            ),
                            array(
                                "question" => "Ich habe keine Mail bekommen – was nun?",
                                "answer" => "Bitte überprüfe auch deinen <strong>Spam-Ordner</strong>. Die Veranstalterin übernimmt keine Haftung, wenn du über die angegebene E-Mail-Adresse nicht erreichbar bist."
                            ),
                            array(
                                "question" => "Was passiert, wenn ich mich nach dem Gewinn nicht melde?",
                                "answer" => "Wenn du dich nicht <strong>innerhalb von 14 Tagen</strong> zurückmeldest, <strong>verfällt dein Gewinn</strong>. Beim Fahrrad-Gewinn rückt der Zweitplatzierte nach."
                            )
                        );
                    ?>


                    <?php foreach ($aFaqData as $aFaq): ?>

                    <div class="accordion mb-1" id="accordion_<?php echo $i ?>">
                        <div class="card border-success">
                            <div class="card-header bg-primary p-0" id="heading_<?php echo $i ?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed text-white p-1" type="button" data-toggle="collapse" data-target="#collapse_<?php echo $i ?>" aria-expanded="false" aria-controls="collapse_<?php echo $i ?>">
                                        <?php echo $aFaq['question'] ?>
                                        <span class="accordion-arrow"></span>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse_<?php echo $i ?>" class="collapse" aria-labelledby="heading_<?php echo $i ?>" data-parent="#accordion_<?php echo $i ?>">
                                <div class="card-body">
                                    <?php echo $aFaq['answer'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php $i++; ?>

                    <?php endforeach; ?>

                </div>

        </div>

    </div>

    <?php
    include ('footer.inc.php')
    ?>

    <button id="hc-icon" data-toggle="modal" data-target="#dsgvoModal" aria-label="Datenschutzeinstellungen" class="hc-icon" style="display: flex;"><!--googleoff: all--><div aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="100%" width="100%" fill="currentColor"><!--! Font Awesome Free 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. --><path d="M0 416c0-17.7 14.3-32 32-32l54.7 0c12.3-28.3 40.5-48 73.3-48s61 19.7 73.3 48L480 384c17.7 0 32 14.3 32 32s-14.3 32-32 32l-246.7 0c-12.3 28.3-40.5 48-73.3 48s-61-19.7-73.3-48L32 448c-17.7 0-32-14.3-32-32zm192 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM384 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-32-80c32.8 0 61 19.7 73.3 48l54.7 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-54.7 0c-12.3 28.3-40.5 48-73.3 48s-61-19.7-73.3-48L32 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l246.7 0c12.3-28.3 40.5-48 73.3-48zM192 64a32 32 0 1 0 0 64 32 32 0 1 0 0-64zm73.3 0L480 64c17.7 0 32 14.3 32 32s-14.3 32-32 32l-214.7 0c-12.3 28.3-40.5 48-73.3 48s-61-19.7-73.3-48L32 128C14.3 128 0 113.7 0 96S14.3 64 32 64l86.7 0C131 35.7 159.2 16 192 16s61 19.7 73.3 48z"></path></svg></div><!--googleon: all--></button>

    <a href="#" id="back-to-top" title="Nach oben" class="bg-primary d-flex justify-content-center align-items-center text-white">
        <svg width="24" height="24" viewBox="0 0 13 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1.646 10.854a.5.5 0 0 0 .708.708l3.192-3.192V15.5a.5.5 0 0 0 1 0V7.862l3.192 3.192a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4z"/>
        </svg>
    </a>


</body>
</html>
<?php
include ('modal.inc.php')
?>