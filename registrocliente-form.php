<?php
    $serverName = "172.16.22.106, 1433";
    $connectionInfo = array("Database"=>"JAAPA", "UID"=>"JAAPAPAM", "PWD"=>"123");
    $varrz=$_POST["razonsocial"];
    $varcalle=$_POST["calle"];
    $vartel=$_POST["telefono"];
    $varcolonia=$_POST["colonia"];
    $varnumint=$_POST["numeroint"];
    $varnumext=$_POST["numeroext"];
    $varcp=$_POST["codpostal"];
    $varpais=$_POST["pais"];
    $varnomcont=$_POST["nomcontacto"];

    $conn = sqlsrv_connect( $serverName, $connectionInfo );
    if( $conn === false ) {
        die( print_r( sqlsrv_errors(), true));
    }

    $sql = "exec sp_insertcliente ".$varrz.", ".$varcalle.", ".$vartel.", ".$varcolonia.", ".$varnumint.", ".$varnumext.", ".$varcp.", ".$varpais.", ".$varnomcont;
    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['mensaje']."<br />";
    }

    sqlsrv_free_stmt( $stmt);
?>