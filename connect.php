<?php 

    $serverName = "nbc.wir.th-wildau.de";
    $connectionInfo=array('UID'=>'<sqlusername>','PWD'=>'<sqlpassword>','Database'=>'Spielwiese');
    
    $conn = sqlsrv_connect($serverName,$connectionInfo);

    if( $conn === false )  
{  
     echo "Unable to connect.</br>";  
     die( print_r( sqlsrv_errors(), true));  
} 

?>
