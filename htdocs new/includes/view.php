<!DOCTYPE html>

<html lang="de">

<head>

    <meta charset="utf-8" />
    <meta author="Gruppe_8" />
    <title>Gruppe_8</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css" />
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
        <a href="../index.php"><img src="../images/rezeptbuch_logo-01.svg"></a>
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
                <li><a href="../Rezeptform.php">Rezepte hinzufügen</a></li>
                <li>Zutaten hinzufügen</li>
                <li><a href="../Alle_Rezepte.php">Alle Rezepte</a></li>
                <li>Einkaufsliste</li>
                <li>Impressum</li>
            </ul>
        </div>
        <!--- row col-7 col-s-9-->
        <div class="row col-9 col-s-9">
    <?php
            $pdo = new PDO('mysql:host=localhost;dbname=rezeptbuch', 'root', '');

            $id = $_GET['id'];
            
            echo "<table>";
            $sql = "SELECT * FROM rezepte WHERE id =" .$id ."";
                foreach ($pdo->query($sql) as $row) {
                echo  "<tr><th>Rezept Name : </th><th>" . $row['namerecipe'] ."</th></tr>";
                echo  "<tr><th>Zutat 1 : </th><th>" . $row['ingredient1'] ."</th></tr>";
                echo  "<tr><th>Zutat 2 : </th><th>" . $row['ingredient2'] ."</th></tr>";
                echo  "<tr><th>Zutat 3 : </th><th>" . $row['ingredient3'] ."</th></tr>";
                echo  "<tr><th>Zutat 4 : </th><th>" . $row['ingredient4'] ."</th></tr>";
                echo  "<tr><th>Zutat 5 : </th><th>" . $row['ingredient5'] ."</th></tr>";
                echo  "<tr><th>Zutat 6 : </th><th>" . $row['ingredient6'] ."</th></tr>";
                echo  "<tr><th>Zutat 7 : </th><th>" . $row['ingredient7'] ."</th></tr>";
                echo  "<tr><th>Zutat 8 : </th><th>" . $row['ingredient8'] ."</th></tr>";
                echo  "<tr><th>Zutat 9 : </th><th>" . $row['ingredient9'] ."</th></tr>";
                echo  "<tr><th>Zutat 10 : </th><th>" . $row['ingredient10'] ."</th></tr>";    
                echo  "<tr><th>Zubereitung : </th><th>" . $row['preparation'] ."</th></tr>";
                echo  "<tr><th>Schwierigkeitsgrad : </th><th>" . $row['difficulty'] ."</th></tr>"; 
                echo  "<tr><th>Zeit : </th><th>" . $row['time'] ."</th></tr>";
                echo  "<tr><th>Anzahl : </th><th>" . $row['amount'] ."</th></tr>";
                }
        echo "</table>";
    ?>
        </div>
    </div>

    <div class="footer">
        <p>Resize the browser window to see how the content respond to the resizing.</p>
    </div>

</body>

</html>
