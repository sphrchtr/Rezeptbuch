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
    <script>
    function printdiv(el){
        var printcontent = document.getElementById(el).innerHTML;
        var restorepage = document.body.innerHTML;
        
        document.body.innerHTML = "<html><head><title></title><head><body>" + printcontent + "</body>";
        window.print();
        document.body.innerHTML = restorepage;
    }
    </script>
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
            <li onclick="location.href='../Rezeptform.php'">
                <a>Rezepte hinzufügen</a>
            </li>
            
            <li onclick="location.href='../Alle_Rezepte.php'">
                <a>Alle Rezepte</a>
            </li>
            <li onclick="location.href='../Einkaufsliste.php'">
                <a>Einkaufsliste</a>
            </li>
            <li onclick="location.href='../Impressum.php'">
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
                echo  "<h2>Dein Rezept</h2>";
                echo  "<tr><th>Rezept Name : </th><th>" . $row['namerecipe'] ."</th></tr>";
                echo  "<tr><th>Zutat 1 : </th><th><a href='/includes/ek.php?ingredient=" . $row['ingredient1'] ."&id=" . $id ."'>" . $row['ingredient1'] ."</th></tr>";
                echo  "<tr><th>Zutat 2 : </th><th><a href='/includes/ek.php?ingredient=" . $row['ingredient2'] ."&id=" . $id ."'>" . $row['ingredient2'] ."</th></tr>";
                echo  "<tr><th>Zutat 3 : </th><th><a href='/includes/ek.php?ingredient=" . $row['ingredient3'] ."&id=" . $id ."'>" . $row['ingredient3'] ."</th></tr>";
                echo  "<tr><th>Zutat 4 : </th><th><a href='/includes/ek.php?ingredient=" . $row['ingredient4'] ."&id=" . $id ."'>" . $row['ingredient4'] ."</th></tr>";
                echo  "<tr><th>Zutat 5 : </th><th><a href='/includes/ek.php?ingredient=" . $row['ingredient5'] ."&id=" . $id ."'>" . $row['ingredient5'] ."</th></tr>";
                echo  "<tr><th>Zutat 6 : </th><th><a href='/includes/ek.php?ingredient=" . $row['ingredient6'] ."&id=" . $id ."'>" . $row['ingredient6'] ."</th></tr>";
                echo  "<tr><th>Zutat 7 : </th><th><a href='/includes/ek.php?ingredient=" . $row['ingredient7'] ."&id=" . $id ."'>" . $row['ingredient7'] ."</th></tr>";
                echo  "<tr><th>Zutat 8 : </th><th><a href='/includes/ek.php?ingredient=" . $row['ingredient8'] ."&id=" . $id ."'>" . $row['ingredient8'] ."</th></tr>";
                echo  "<tr><th>Zutat 9 : </th><th><a href='/includes/ek.php?ingredient=" . $row['ingredient9'] ."&id=" . $id ."'>" . $row['ingredient9'] ."</th></tr>";
                echo  "<tr><th>Zutat 10 : </th><th><a href='/includes/ek.php?ingredient=" . $row['ingredient10'] ."&id=" . $id ."'>" . $row['ingredient10'] ."</th></tr>";    
                echo  "<tr><th>Zubereitung : </th><th>" . $row['preparation'] ."</th></tr>";
                echo  "<tr><th>Schwierigkeitsgrad : </th><th>" . $row['difficulty'] ."</th></tr>"; 
                echo  "<tr><th>Zeit : </th><th>" . $row['time'] ."</th></tr>";
                echo  "<tr><th>Anzahl : </th><th>" . $row['amount'] ."</th></tr>";
                }
                echo "</table>";
        echo "<br>";
        echo "<a href = .././Alle_Rezepte.php>Zurück</a>";
        echo "<br>";
        echo "<button onClick='window.print()'>Drucken</button>";
    ?>
        </div>
        <div class="row col-2 col-s-9">
                <div class="aside">
                    <h2>HINWEIS</h2>
                    <p>Um Zutaten zur Einkaufsliste hinzuzufügen, klicken sie auf die Zutat.</p>
                    

                </div>
            </div>
    </div>

    <div class="footer">
        <p>Resize the browser window to see how the content respond to the resizing.</p>
    </div>

</body>

</html>