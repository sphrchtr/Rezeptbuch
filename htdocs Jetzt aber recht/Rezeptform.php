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
            <div class=" side_sb col-12 col-s-9">

            </div>
        </div>
        <div class="row">
            <div class="col-2 col-s-3 menu">
                <ul>
                    <li onclick="location.href='./Rezeptform.php'">
                        <a>Rezepte hinzufügen</a>
                    </li>

                    <li onclick="location.href='./Alle_Rezepte.php'">
                        <a>Alle Rezepte</a>
                    </li>
                    <li onclick="location.href='./Einkaufsliste.php'">
                        <a>Einkaufsliste</a>
                    </li>
                    <li onclick="location.href='./Impressum.php'">
                        <a>Impressum</a>
                    </li>
                </ul>
            </div>
            <!--- row col-7 col-s-9-->
            <div class="row col-8 col-s-12">



                <form action="includes/insert.php" method="post">
                    <h2>Rezepte Hinzufügen</h2>
                    <div class="row col-6 col-s-12">
                        <p>
                            <label for="namerecipe">Rezeptname:</label><br>
                            <input type="text" name="namerecipe" id="namerecipe">
                        </p>
                        <p>
                            <label for="ingredient">Zutaten:</label><br>
                            <input class="Field" type="text" name="ingredient1" id="ingredient">
                            <input class="Field" type="text" name="ingredient2" id="ingredient"><br>
                            <input class="Field" type="text" name="ingredient3" id="ingredient">
                            <input class="Field" type="text" name="ingredient4" id="ingredient"><br>
                            <input class="Field" type="text" name="ingredient5" id="ingredient">
                            <input class="Field" type="text" name="ingredient6" id="ingredient"><br>
                            <input class="Field" type="text" name="ingredient7" id="ingredient">
                            <input class="Field" type="text" name="ingredient8" id="ingredient"><br>
                            <input class="Field" type="text" name="ingredient9" id="ingredient">
                            <input class="Field" type="text" name="ingredient10" id="ingredient">
                        </p>
                    </div>
                    <div class="row col-3 col-s-12">
                        <p>
                            <label for="preparation">Zubereitung:</label><br>
                            <input type="text" name="preparation" id="preparation">
                        </p>

                        <p>
                            <label for="cathegory">Kategorie:</label><br>
                            <input type="text" name="cathegory1" id="cathegory"><br>
                            <input type="text" name="cathegory2" id="cathegory"><br>
                            <input type="text" name="cathegory3" id="cathegory">
                        </p>
                        <p>
                            <label for="difficulty">Schwierigkeitsgrad:</label><br>
                            <input type="text" name="difficulty" id="difficulty">
                        </p>
                    </div>
                    <div class="row col-3 col-s-12">
                        <p>
                            <label for="time">Zeitangabe:</label><br>
                            <input type="text" name="time" id="time">
                        </p>
                        <p>
                            <label for="amount">Mengenangabe:</label><br>
                            <input type="text" name="amount" id="amount">
                        </p>
                        <p>
                            <label for="source">Quelle:</label><br>
                            <input type="text" name="source" id="source">
                        </p>
                        <p>
                            <input type="submit" value="Rezept Hinzufügen" target="_blank">
                        </p>
                    </div>
                </form>
            </div>
            <div class="row col-2 col-s-9">
                <div class="aside">
                    <h2>TEXT</h2>
                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>


                </div>
            </div>
        </div>
        <?php
            if(!empty($_GET['message'])) {
                $message = $_GET['message'];
                echo "<p>Dein Rezept wurde hinzugefügt</p>";
            }
            ?>


        <div class="footer">
            <p>Resize the browser window to see how the content respond to the resizing.</p>
        </div>

    </body>

    </html>
