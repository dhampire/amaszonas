<?php
session_start(); 
	require_once("../config.php");
    conectar('localhost', 'root', '', 'amaszonas');

    $fbid = $_SESSION['FBID'];
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mamá | Red PAT y Amaszonas</title>

<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

<link rel="stylesheet" href="css/estilos.css">
</style>


</head>

<body>
    <!-- cabecera -->
 	<div class="container">
		<div class="col-md-12">
			<center><img src="img/logo.png" alt=""></center>
		</div>
	</div>

<div class="row">
    <?php 
    $consulta="SELECT * FROM registros WHERE fbid LIKE $fbid";
    $resultado = mysql_query($consulta) or die(mysql_error());



    echo '<div class="msf-container">
            <div class="container">
            <div class="row">
            <div class="col-md-offset-3 col-md-6">
            <img class="wow slideInRight" data-wow-duration="1s" src="../assets/img/camion.png" alt="">
            <div class="resultados wow lightspeedIn" data-wow-delay="2s"';
    while ( $columna= mysql_fetch_array($resultado)) { 

            echo '<p><strong>Registro: </strong>' .$columna['nombre'].'</p>';
            echo '<p><strong>Departamento: </strong>' .$columna['ciudad']. '</p>'; 
            echo '</div></div></div></div></div>';


    }
?>
</div>


<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
<script src="js/functions.js"></script>
</body>
</html>