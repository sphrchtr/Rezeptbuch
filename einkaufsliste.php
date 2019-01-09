<html lang="de">

<head>

    <meta charset="utf-8" />
    <meta author="Gruppe_8" />
    <title>Gruppe_8</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color:#f5f5f5;
        }
    </style>
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
                <li><a href="einkaufsliste.php">Einkaufsliste</a></li>
                <li>Impressum</li>
            </ul>
        </div>
        <!--- row col-7 col-s-9-->
        <div class="row col-10 col-s-9">
    <?php
            $pdo = new PDO('mysql:host=localhost;dbname=rezeptbuch', 'root', '');

            echo "<table>";
            echo "<tr><th>Zutaten</th><th>Menge</th></tr>";
            $sql = "SELECT * FROM einkaufsliste ";
                foreach ($pdo->query($sql) as $row) {
                echo "<tr>";
                echo "<td>" . $row['ingredient1'] . "</td>";
                echo "<td>" . $row['ingredient1'] . "</td>";
                echo "<td>" . $row['ingredient3'] . "</td>";
                echo "<td>" . $row['ingredient4'] . "</td>";
                echo "<td>" . $row['ingredient5'] . "</td>";
                echo "<td>" . $row['ingredient6'] . "</td>";
                echo "<td>" . $row['ingredient7'] . "</td>";
                echo "<td>" . $row['ingredient8'] . "</td>";
                echo "<td>" . $row['ingredient9'] . "</td>";
                echo "<td>" . $row['ingredient10'] . "</td>";
				
				echo "<td>" . $row['ingredient_menge1'] . "</td>";
				echo "<td>" . $row['ingredient_menge2'] . "</td>";
				echo "<td>" . $row['ingredient_menge3'] . "</td>";
				echo "<td>" . $row['ingredient_menge4'] . "</td>";
				echo "<td>" . $row['ingredient_menge5'] . "</td>";
				echo "<td>" . $row['ingredient_menge6'] . "</td>";
				echo "<td>" . $row['ingredient_menge7'] . "</td>";
				echo "<td>" . $row['ingredient_menge8'] . "</td>";
				echo "<td>" . $row['ingredient_menge9'] . "</td>";
                echo "<td>" . $row['ingredient_menge10'] . "</td>";
                
				echo "</tr>";
                }
            echo"</table>";
    ?>
        </div>
    </div>

    <div class="footer">
        <p>Resize the browser window to see how the content respond to the resizing.</p>
    </div>

</body>

</html>