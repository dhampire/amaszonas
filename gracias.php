<?php
    session_start(); 
	require_once("config.php");
    conectar('localhost', 'root', '', 'amaszonas');

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mamá | Red PAT y Amaszonas</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

    <div class="container-fluid">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
        <h3>
            Tu registro se ha hecho corretamente.
        </h3>
        </div>
    </div>

<!--?php endif ?-->

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
<script src="js/functions.js"></script>
</body>
</html>