<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas</title>
</head>
<body>
    <?php
    $serverName = "192.168.137.116, 1433";
    $connectionInfo = array("Database"=>"JAAPA", "UID"=>"JAAPAPAM", "PWD"=>"123");

    $conn = sqlsrv_connect( $serverName, $connectionInfo );
    if( $conn === false ) {
        die( print_r( sqlsrv_errors(), true));
    }

    $varusu=$_POST["usuario"];
    $varpwd=$_POST["contra"];

    $sql="exec sp_valida ".$varusu.", ".$varpwd;
    $stmt=sqlsrv_query( $conn, $sql);

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['mensaje']."<br />";
    }

    ?>
</body>
</html>