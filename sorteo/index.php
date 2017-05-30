<?php
    require_once('funciones.php');
    conectar('localhost', 'root', '', 'camion');
    //conectar('localhost', 'ecdts', 'WdFb-pgg*AnB', 'ecdts');
    mysql_query ("SET NAMES 'utf8'");
    $query= "Select * from datos";
    $info = mysql_query($query);
    $suma = mysql_num_rows($info);
    $random = rand(1, $suma);
?>

<html lang="Es_es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>El Camion de tus sueños</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->





    </head>

    <body>
        <div id="clouds">
    <div class="cloud x1"></div>
    <!-- Time for multiple clouds to dance around -->
    <div class="cloud x2"></div>
    <div class="cloud x3"></div>
    <div class="cloud x4"></div>
    <div class="cloud x5"></div>
    <div class="roja x3"></div>
</div>      
        <!-- Top menu -->
<div class="col-md-12">
    <div class="col-md-6">
        <img class="amas_img" src="assets/img/amaszonas.png" alt="">
    </div>
    <div class="col-md-6">
        <img class="amas_img derecha" src="assets/img/pat.png" alt="">
    </div>
</div>
        
        <!-- Description -->
        <div class="description-container">
            <img src="assets/img/logo.png" alt="">
            <form action="index.php" method="POST">
            <button class="btn btn-primary wow fadeIn" type="submit" name="sorteo"> Sortear </button>
            </form>
        </div>      


    <div class="footer">
        
    </div>
        <!-- Javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

            <script src="assets/js/wow.js"></script>
              <script>
              new WOW().init();
            </script>
    </body>

</html>

<?php 

if(isset($_REQUEST['sorteo'])) {
    $consulta="SELECT * FROM bdshort WHERE id LIKE $random";
    $resultado = mysql_query($consulta) or die(mysql_error());



    echo '<div class="msf-container">
            <div class="container">
            <div class="row">
            <div class="col-md-offset-3 col-md-6">
            <center><img class="wow slideInleft" data-wow-duration="1s" src="assets/img/avion.png" alt=""></center>
            <div class="resultados wow lightspeedIn" data-wow-delay="2s"';
    while ( $columna= mysql_fetch_array($resultado)) { 

            $telefono = $columna['telefono'];
            $mostrartelefono =  str_repeat('*', strlen($telefono) - 2) . substr($telefono, -4);

            echo '<p><strong>Registro: </strong>' .$columna['id'].'</p>';
            echo '<p><strong>Nombres: </strong>' .$columna['nombre']. '</p>';
            echo '<p><strong>CI: </strong>' .$columna['ci']. '-' .$columna['expedido'].'</p>';
            echo '<p><strong>Teléfono: </strong>' .$mostrartelefono. '</p>';
            echo '<p><strong>Departamento: </strong>' .$columna['departamento']. '</p>'; 
            echo '<p><strong>Destino amaszonas favorito: </strong>' .$columna['destino']. '</p>'; 
            echo '<p><strong>Programa favorito de PAT: </strong>' .$columna['pat']. '</p>'; 
            echo '</div></div></div></div></div>';


    }
}



?>