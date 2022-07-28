<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/icons/analista.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <title>Tabla Prueba</title>
  </head>
  <body>
  <div class="content">
    <div class="container">
      <h2 class="mb-5">Clientes</h2>
      <div class="container-login100-form-btn-right">
        <left><button text-align: class="login100-form-btn">Añadir contacto</button></left>
      </div>
      <br><br>
      <div class="table-responsive">
        <table class="table table-striped custom-table">
          <thead>
            <tr> 
              <th scope="col">Id</th>
              <th scope="col">Razón Social</th>
              <th scope="col">Calle</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Colonia</th>
              <th scope="col">Número Interior</th>
              <th scope="col">Número Exterior</th>
              <th scope="col">Codigo Postal</th>
              <th scope="col">Pais</th>
              <th scope="col">Borrar</th>
            </tr>
          </thead>
          <tbody>
          <!-- CEO -->
          <?php
            $serverName = "192.168.137.116, 1433";
            $connectionInfo = array("Database"=>"JAAPA", "UID"=>"JAAPAPAM", "PWD"=>"123");

            $conn = sqlsrv_connect( $serverName, $connectionInfo );
            if( $conn === false ) {
                die( print_r( sqlsrv_errors(), true));
            }

            $sql = "SELECT * FROM Empresa";
            $stmt=sqlsrv_query( $conn, $sql );

            while ($nreg=sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC))
            {
                printf("<tr><td>&nbsp;%s&nbsp;</td>
                            <td>&nbsp;%s&nbsp;</td>
                            <td>&nbsp;%s&nbsp;</td>
                            <td>&nbsp;%s&nbsp;</td>
                            <td>&nbsp;%s&nbsp;</td>
                            <td>&nbsp;%s&nbsp;</td>
                            <td>&nbsp;%s&nbsp;</td>
                            <td>&nbsp;%s&nbsp;</td>
                            <td><a href=\"bajacliente.php?iempresa=%d\">BORRAR</a></td>
                        </tr>",
                        $nreg["iempresa"], $nreg["razonsocial"], $nreg["calle"], $nreg["telefono"], $nreg["colonia"], 
                        $nreg["numeroint"], $nreg["numeroext"], $nreg["codpostal"], $nreg["pais"], $nreg["iempresa"]);
            }
          ?>
            <!-- <tr scope="row">
              <td><IMG ALIGN=top width=50 height=50></td>
                      <td><a href="#">McDonald's</a></td>
                      <td>Jose Carillo Juarez <small class="d-block">CEO</small></td>
                      <td>Av. de los Insurgentes Sur 1457, Insurgentes Mixcoac, Benito Juárez, 03920 Ciudad de México, CDMX </td>
                      <td>55-7648-3392</td>
            </tr>
            <tr scope="row">
              <td><IMG ALIGN=top width=50 height=50 SRC="images/icons/mc.png"></td>
                      <td><a href="#">McDonald's</a></td>
                      <td>Andrea Islas Quiroz <small class="d-block">Contacto</small></td>
                      <td>Av. de los Insurgentes Sur 1457, Insurgentes Mixcoac, Benito Juárez, 03920 Ciudad de México, CDMX </td>
                      <td>55-7832-0933</td>
            </tr>
            <td><IMG ALIGN=top width=50 height=50 SRC="images/icons/star.png"></td>
              <td><a href="#">Starbucks Coffee</a></td>
              <td>Paulina Suarez Lopez<small class="d-block">CEO</small></td>
              <td>Eje 7 Sur Félix Cuevas, Av. Insurgentes Sur esq, Santa Cruz Atoyac, Benito Juárez, 03200 CDMX</td>
              <td>55 4635 3677</td>
            </tr>
            <td><IMG ALIGN=top width=50 height=50 SRC="images/icons/star.png"></td>
              <td><a href="#">Starbucks Coffee</a></td>
              <td>Eduardo Salazar Camacho<small class="d-block">Contacto</small></td>
              <td>Eje 7 Sur Félix Cuevas, Av. Insurgentes Sur esq, Santa Cruz Atoyac, Benito Juárez, 03200 CDMX</td>
              <td>55 0022 2345</td>
            </tr>
            <tr>
              <td><IMG ALIGN=top width=50 height=50 SRC="images/icons/vi.png"></td>
              <td><a href="#">Vips</a></td>
              <td>Mariano Gutierrez Silva<small class="d-block">CEO</small></td>
              <td>Calz Acoxpa 744, Coapa, Col. San Bartolo Coapa, Tlalpan, 06700 Ciudad de México, CDMX</td>
              <td>55 0022 2345</td>
            </tr>
            <tr>
              <td><IMG ALIGN=top width=50 height=50 SRC="images/icons/vi.png"></td>
              <td><a href="#">Vips</a></td>
              <td>Fernanda Ten Terreros<small class="d-block">Contacto</small></td>
              <td>Calz Acoxpa 744, Coapa, Col. San Bartolo Coapa, Tlalpan, 06700 Ciudad de México, CDMX</td>
              <td>55 0022 2345</td>
            </tr>
            <tr>
              <td><IMG ALIGN=top width=50 height=50 SRC="images/icons/chi.png"></td>
              <td><a href="#">Chili's</a></td>
              <td>Lela Anna Alexis<small class="d-block">CEO</small></td>
              <td>Av. San Jerónimo 720, San Jerónimo Lídice, La Magdalena Contreras, 10200 Ciudad de México, CDMX</td>
              <td>55 0022 2345</td>
            </tr>
            <tr>
              <td><IMG ALIGN=top width=50 height=50 SRC="images/icons/chi.png"></td>
              <td><a href="#">Chili's</a></td>
              <td>Luis Fernando Rattia López<small class="d-block">Contacto</small></td>
              <td>Av. San Jerónimo 720, San Jerónimo Lídice, La Magdalena Contreras, 10200 Ciudad de México, CDMX</td>
              <td>55 0022 2345</td>
            </tr>
            <tr>
              <td><IMG ALIGN=top width=50 height=50 SRC="images/icons/bu.png"></td>
              <td><a href="#">Burger King</a></td>
              <td>Warrick Justy Vinnie<small class="d-block">CEO</small></td>
              <td>Prol. División del Nte. 5151, Paseos del Sur, Xochimilco, 16010 Ciudad de México, CDMX</td>
              <td>55 0022 2345</td>
            </tr>
            <tr>
              <td><IMG ALIGN=top width=50 height=50 SRC="images/icons/bu.png"></td>
              <td><a href="#">Burger King</a></td>
              <td>Norma Gabriela Torres Fierro<small class="d-block">Contacto</small></td>
              <td>Prol. División del Nte. 5151, Paseos del Sur, Xochimilco, 16010 Ciudad de México, CDMX</td>
              <td>55 0022 2345</td>
            </tr> -->
          </tbody>
        </table>
        <br><br>
        
      </div>
    </div>
  </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>