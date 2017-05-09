<?php
require_once('config.php');
conectar('localhost', 'root', '', 'amaszonas');

mysql_query ("SET NAMES 'utf8'");


//Recibir
$nombre = strip_tags($_POST['nombre']);
$fbid = strip_tags($_POST['fbid']);
$ci = strip_tags($_POST['ci']);
$expedido = strip_tags($_POST['expedido']);
$mail = strip_tags($_POST['mail']);
$telefono = strip_tags($_POST['telefono']);
$ciudad = strip_tags($_POST['ciudad']);
$direccion = strip_tags($_POST['direccion']);
$marido = strip_tags($_POST['marido']);
$hijo = strip_tags($_POST['hijo']);
$amaszonas = strip_tags($_POST['amaszonas']);
$pat = strip_tags($_POST['pat']);


$query = @mysql_query('SELECT * FROM  registros WHERE ci="'.mysql_real_escape_string($ci).'"');

if ($existe = @mysql_fetch_object($query)) {
	header ("Location: gracias.php");
}
else {
	$meter = @mysql_query('INSERT INTO 	registros (fbid, nombre, ci, expedido, mail, telefono, ciudad, direccion, marido, hijo, amaszonas, pat) 
			values 
			("'.$fbid.'", "'.$nombre.'", "'.$ci.'", "'.$expedido.'", "'.$mail.'", "'.$telefono.'", "'.$ciudad.'", "'.$direccion.'", "'.$marido.'", "'.$hijo.'", "'.$amaszonas.'", "'.$pat.'")');

		if($meter)
	{
		header ("Location: gracias.php");
	}else{
		echo 'Hubo un error en el registro.' ;	
	}

}
?>