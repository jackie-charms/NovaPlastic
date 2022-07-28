<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro de clientes</title>
  <!--     Fonts and icons     -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/registro.png"/>
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--     CSS Files     -->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> 
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body style="background-color: #e9fff9;">
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" action="profile.html" method="post">
          <span class="login100-form-title p-b-43">Registro de clientes</span>
<?php
    $serverName = "192.168.137.116, 1433";
    $connectionInfo = array("Database"=>"JAAPA", "UID"=>"JAAPAPAM", "PWD"=>"123");
    
    $varrz = $_POST["razonsocial"];
    $varcalle = $_POST["calle"];
    $vartel = $_POST["telefono"];
    $varcolonia = $_POST["colonia"];
    $varnumint = $_POST["numeroint"];
    $varnumext = $_POST["numeroext"];
    $varcp = $_POST["codpostal"];
    $varpais = $_POST["pais"];

    $conn = sqlsrv_connect( $serverName, $connectionInfo );
    if( $conn === false ) {
        die( print_r( sqlsrv_errors(), true));
    }

    $sql = "exec sp_insertempresa ".$varrz.", ".$varcalle.", ".$vartel.", ".$varcolonia.", ".$varnumint.", ".$varnumext.", ".$varcp.", ".$varpais;
    
    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['mensaje']."<br />";
    }

    sqlsrv_free_stmt( $stmt);
?>
<br>
          <div class="container-login100-form-btn">
            <a class="login100-form-btn" href="tablaclientes-cap.html">Ingresar</a>
          </div>
        </form>

        <div class="login100-more" style="background-image:url('https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80')">
        </div>
      </div>
    </div>
  </div>
  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/animsition/js/animsition.min.js"></script>
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
  <script src="vendor/countdowntime/countdowntime.js"></script>
  <script src="js/main.js"></script>

</body>
</html>