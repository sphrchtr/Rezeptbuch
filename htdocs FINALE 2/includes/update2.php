<?php

$pdo = new PDO('mysql:host=localhost;dbname=rezeptbuch', 'root', '');
 
$statement = $pdo->prepare("UPDATE users SET email = ? WHERE id = ?");
$statement->execute(array('neu@php-einfach.de', 1));

 
// Escape user inputs for security
$namerecipe = mysqli_real_escape_string($pdo, $_REQUEST['namerecipe']);
$preparation = mysqli_real_escape_string($pdo, $_REQUEST['preparation']);
$difficulty = mysqli_real_escape_string($pdo, $_REQUEST['difficulty']);
$ingredient1 =  mysqli_real_escape_string($pdo, $_REQUEST['ingredient1']);
$ingredient2 =  mysqli_real_escape_string($pdo, $_REQUEST['ingredient2']);
$ingredient3 =  mysqli_real_escape_string($pdo, $_REQUEST['ingredient3']);
$ingredient4 =  mysqli_real_escape_string($pdo, $_REQUEST['ingredient4']);
$ingredient5 =  mysqli_real_escape_string($pdo, $_REQUEST['ingredient5']);
$ingredient6 =  mysqli_real_escape_string($pdo, $_REQUEST['ingredient6']);
$ingredient7 =  mysqli_real_escape_string($pdo, $_REQUEST['ingredient7']);
$ingredient8 =  mysqli_real_escape_string($pdo, $_REQUEST['ingredient8']);
$ingredient9 =  mysqli_real_escape_string($pdo, $_REQUEST['ingredient9']);
$ingredient10 =  mysqli_real_escape_string($pdo, $_REQUEST['ingredient10']);
$cathegory1 = mysqli_real_escape_string($pdo, $_REQUEST['cathegory1']);
$cathegory2 = mysqli_real_escape_string($pdo, $_REQUEST['cathegory2']);
$cathegory3 = mysqli_real_escape_string($pdo, $_REQUEST['cathegory3']);
$time = mysqli_real_escape_string($pdo, $_REQUEST['time']);
$amount = mysqli_real_escape_string($pdo, $_REQUEST['amount']);
$source = mysqli_real_escape_string($pdo, $_REQUEST['source']);

$id = $_GET['id'];

$statement = $pdo->prepare("UPDATE rezepte SET namerecipe = namerecipe_new, ingredient1 = :ingredient1_new, ingredient2 = :ingredient2_new, ingredient3 = :ingredient3_new, ingredient4 = :ingredient4_new, ingredient5 = :ingredient5_new, ingredient6 = :ingredient6_new, ingredient7 = :ingredient7_new, ingredient8 = :ingredient8_new, ingredient9 = :ingredient9_new, ingredient10 = :ingredient10_new, preparation = :preparation_new, cathegory1 = :cathegory1_new, cathegory2 = :cathegory2_new, cathegory3 = :cathegory3_new, difficulty = :difficulty_new, time = :time_new,  amount = :amount_new, source = :source_new WHERE id = :id");
$statement->execute(array('namerecipe_new' => $namerecipe, 'ingredient1_new' => $ingredient1, 'ingredient2_new' => $ingredient2, 'ingredient3_new' => $ingredient3, 'ingredient4_new' => $ingredient4, 'ingredient5_new' => $ingredient5, 'ingredient6_new' => $ingredient6, 'ingredient7_new' => $ingredient7, 'ingredient8_new' => $ingredient8, 'ingredient9_new' => $ingredient9, 'ingredient10_new' => $ingredient10, 'preparation_new' => $preparation, 'cathegory1_new' => $cathegory1, 'cathegory2_new' => $cathegory2, 'cathegory3_new' => $cathegory3, 'difficulty_new' => $difficulty, 'time_new' => $time, 'amount_new' => $amount, 'id' => $id));

/*$sql = "UPDATE rezepte Set namerecipe ='" .$namerecipe . "',ingredient1 ='" . $ingredient1 . "',ingredient2 ='" . $ingredient2 . "',ingredient3 ='" . $ingredient3 . "',ingredient4 ='" . $ingredient4 . "',ingredient5 ='" . $ingredient5 . "',ingredient6 ='" . $ingredient6 . "',ingredient7 ='" . $ingredient7 . "',ingredient8 ='" . $ingredient8 . "',ingredient9 ='" . $ingredient9 . "',ingredient10 ='" . $ingredient10 . "', preparation ='" . $preparation . "', cathegory1 ='" . $cathegory1 . "', cathegory2 = " . $cathegory2 . "', cathegory3 ='" . $cathegory3 . "', difficulty ='" . $difficulty . "',time ='" . $time . "', amount ='" .$amount . "', source ='" . $source . "' WHERE ID='" . $id . "'"; */

?> 