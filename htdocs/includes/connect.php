<?php
$link = mysqli_connect('localhost', 'root', '', 'rezeptbuch');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysqli_close($link);
?>