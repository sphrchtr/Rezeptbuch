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
        <a href="./index.php"><img src="images/rezeptbuch_logo-01.svg"></a>
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
        <!--- row col-7 col-s-9-->
        <div class="row col-10 col-s-9">
            <form action="includes/insert.php" method="post">
                <h2>Rezepte Hinzufügen</h2>
                <p>
                    <label for="namerecipe">Rezeptname:</label>
                    <input type="text" name="namerecipe" id="namerecipe">
                </p>
                <p>
                    <label for="ingredients">Zutaten:</label>
                    <input class="Field" type="text" name="ingredient1" id="ingredient">
                    <input class="Field" type="text" name="ingredient2" id="ingredient">
                    <input class="Field" type="text" name="ingredient3" id="ingredient">
                    <input class="Field" type="text" name="ingredient4" id="ingredient">
                    <input class="Field" type="text" name="ingredient5" id="ingredient">
                </p><p><a style="visibility:hidden">Zutaten:</a>
                    <input class="Field" type="text" name="ingredient6" id="ingredient">
                    <input class="Field" type="text" name="ingredient7" id="ingredient">
                    <input class="Field" type="text" name="ingredient8" id="ingredient">
                    <input class="Field" type="text" name="ingredient9" id="ingredient">
                    <input class="Field" type="text" name="ingredient10" id="ingredient">
                </p>
                <p>
                    <label for="preparation">Zubereitung:</label>
                    <input type="text" name="preparation" id="preparation">
                </p>
                <p>
                    <label for="cathegory">Kategorie:</label>
                    <input type="text" name="cathegory1" id="cathegory">
                    <input type="text" name="cathegory2" id="cathegory">
                    <input type="text" name="cathegory3" id="cathegory">
                </p>
                <p>
                    <label for="difficulty">Schwierigkeitsgrad:</label>
                    <input type="text" name="difficulty" id="difficulty">
                </p>
                <p>
                    <label for="time">Zeitangabe:</label>
                    <input type="text" name="time" id="time">
                </p>
                <p>
                    <label for="amount">Mengenangabe:</label>
                    <input type="text" name="amount" id="amount">
                </p>
                <p>
                    <label for="source">Quelle:</label>
                    <input type="text" name="source" id="source">
                </p>
                <input type="submit" value="Rezept Hinzufügen" target="_blank">
                
            </form>
        </div>

    </div>


    <div class="footer">
        <p>Resize the browser window to see how the content respond to the resizing.</p>
    </div>

</body>

</html>
