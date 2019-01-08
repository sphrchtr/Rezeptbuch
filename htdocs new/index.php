<?php 
    include_once 'includes/connect.php'
?>
<!DOCTYPE html>

<html lang="de">

<head>

    <meta charset="utf-8" />
    <meta author="Gruppe_8" />
    <title>Gruppe_8</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <div class="header">
        <a href="index.php"><img src="images/rezeptbuch_logo-01.svg"></a>
    </div>
    <div class="row">
        <div class=" side_sb col-10 col-s-9">

        </div>
        <div class="searchbar col-2 col-s-3">
            <form class="row" action="includes/suchen.php" method="POST">
                <input class="col-8 col-s-6" type="text" name="search" placeholder="Suchen">
                <button class="col-4 col-s-6" type="submit" name="suche">
                    <a>Suche</a>
                </button>
            </form>
        </div>
    </div>
    <div class="row">

        <div class="col-2 col-s-3 menu">
            <ul>
                <li><a href="Rezeptform.php">Rezepte hinzufügen</a></li>
                <li>Zutaten hinzufügen</li>
                <li><a href="Alle_Rezepte.php">Alle Rezepte</a></li>
                <li>Einkaufsliste</li>
                <li>Impressum</li>
            </ul>
        </div>

        <div class="row col-7 col-s-9">
            <div class="content_a col-12 col-s-12">
                <h1>Rezepte.de</h1>
                <p>Willkommen auf Rezepte.de, <br>
                hier können sie ihrer lieblings Rezepte lokal Hinzufügen und auch Verwalten. Das Spart nicht nur Papier sondern auch ihren Schrank. Wir bieten ihnen die Option alle Rezepte die sie lieben Lokal bei uns zu verwalten. Dabei können sie sich auf Knopfdruck ihr Lieblingsrezept in eine Einkaufsliste hinzufügen lassen und bequem ausdrucken. Damit sie bei ihrem nächstem EInkauf sicherlich nichts vergessen werden.</p>
            </div>
            <div class="content_b col-5 col-s-12">
                <p>Diese Lokale Lösung wurd spezifisch für die Familie "xxx" gefertigt. Folgende Mitglieder waren an dieser Website beteiligt: Sophie Richter, Marvin Jurat, Art Maloku, Tom Strohscheer. Falls sie eine persönlich Lösung dieser Art brauchen wenden sie sich bitte an Tom Strohscheer.</p>
            </div>
        <!--    <div class="content_c col-5 col-s-12">
                <img src="images/k.jpg">
            </div> -->

        </div>

        <div class="col-3 col-s-12">
            <div class="aside">
                <h2>WAS?</h2>
                <p>Eine Website zur Rezeptverwaltung, für das Optimale Kocherlebnis</p>
                <h2>WIE?</h2>
                <p>Einfach auf die Ensprechenden Buttons drücken und schon kann es los gehen</p>
            </div>
        </div>

    </div>

    <div class="footer">
        <p>Resize the browser window to see how the content respond to the resizing.</p>
    </div>

</body>

</html>