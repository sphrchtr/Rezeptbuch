<?php
    $link = mysqli_connect("127.0.0.1", "root", "", "rezeptbuch");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    exit;
}

echo "" . PHP_EOL;



    $output =('');
    //collect
    if(isset($_POST['search'])) {
        $searchq = $_POST['search'];
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
        
        $query = mysqli_query($link,"SELECT * FROM zutaten WHERE zutat LIKE '%$searchq%' OR kategorie LIKE '%$searchq%' ") or die("Kann nicht Suchen");
        $count = mysqli_num_rows($query);
        if($count == 0){
            $output = 'Es wurde nichts gefunden';
        }
        else{
            while($row = mysqli_fetch_array($query)){
                $cat = $row['kategorie'];
                $name = $row['zutat'];
                $id = $row['id'];
                
                $output .= '<div>'.$cat.' '.$name.'</div> ';       
            }
        }
    }
?>