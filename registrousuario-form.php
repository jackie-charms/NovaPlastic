<?php
    $serverName = "192.168.100.52, 1433";
    $connectionInfo = array("Database"=>"JAAPA", "UID"=>"JAAPAPAM", "PWD"=>"123");
    $varuser=$_POST["usuario"];
    $varpass=$_POST["password"];
    $varnom=$_POST["nombre"];
    $varap=$_POST["apaterno"];
    $varam=$_POST["amaterno"];
    $varfecnac=$_POST["fecnac"];
    $varpuesto=$_POST["puesto"];
    $varcalle=$_POST["calle"];
    $vartel=$_POST["telefono"];
    $varnumext=$_POST["numeroext"];
    $varnumint=$_POST["numeroint"];
    $varcolonia=$_POST["colonia"];
    $varcp=$_POST["codpostal"];
    $varpais=$_POST["pais"];
    
    $conn = sqlsrv_connect( $serverName, $connectionInfo );
    if( $conn === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
    // el exec esta mal brou, checa las variables
    $sql = "exec sp_insertusuario ".$varrz.", ".$varcalle.", ".$vartel.", ".$varcolonia.", ".$varnumint.", ".$varnumext.", ".$varcp.", ".$varpais;
    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['mensaje']."<br />";
    }

    sqlsrv_free_stmt( $stmt);
?>