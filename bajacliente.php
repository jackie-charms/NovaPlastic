<?php
    $serverName = "192.168.137.116, 1433";
    $connectionInfo = array("Database"=>"JAAPA", "UID"=>"JAAPAPAM", "PWD"=>"123");

    $conn = sqlsrv_connect( $serverName, $connectionInfo );
    if( $conn === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
    $variempresa=$_POST["iempresa"];

    $sql="exec sp_deleteempresa "

?>