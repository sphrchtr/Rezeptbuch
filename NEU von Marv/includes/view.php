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
        <div class=" side_sb col-12 col-s-9">

        </div>
        
    </div>
    <div class="row">
        <div class="col-2 col-s-3 menu">
            <ul>
            <li onclick="location.href='./Suche.php'">
              <a>Suchen</a>
            </li>
            <li onclick="location.href='./Rezeptform.php'">
                <a>Rezepte hinzufügen</a>
            </li>
            
            <li onclick="location.href='./Alle_Rezepte.php'">
                <a>Alle Rezepte</a>
            </li>
            <li onclick="location.href='./Einkaufsliste.html'">
                <a>Einkaufsliste</a>
            </li>
            <li onclick="location.href='./Impressum.html'">
                <a>Impressum</a>
            </li>
        </ul>
        </div>
        <!--- row col-7 col-s-9-->
        <div class="row col-8 col-s-9">
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
        echo "<br>";
        echo "<br>";
        echo "<a href = .././Alle_Rezepte.php>Zurück</a>";    
    ?>
        </div>
        <div class="row col-2 col-s-9">
                <div class="aside">
                    <h2>TEXT</h2>
                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, </p>
                    

                </div>
            </div>
    </div>

    <div class="footer">
        <p>Resize the browser window to see how the content respond to the resizing.</p>
    </div>

</body>

</html>