<?php 

    $serverName = "nbc.wir.th-wildau.de";

    $uid = file_get_contents("includes\uid.txt");  
    $pwd = file_get_contents("includes\pwd.txt");
    $connectionInfo=array('UID'=>'$uid',
                          'PWD'=>'$pwd',
                          'Database'=>'Spielwiese');
    
    $conn = sqlsrv_connect($serverName,$connectionInfo);

    if( $conn === false )  
{  
     echo "Unable to connect.</br>";  
     die( print_r( sqlsrv_errors(), true));  
} 

?>
