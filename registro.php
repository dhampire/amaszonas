<?php
require_once('config.php');
conectar('localhost', 'root', '', 'amaszonas');
//conectar ('localhost', 'lostajibosnews_blackfriday', 'r)zq4X*(iW8?', 'lostajibosnews_blackfriday');
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
$amaszonas = strip_tags($_POST['amaszonas']);
$pat = strip_tags($_POST['pat']);


	$meter = @mysql_query('INSERT INTO 	registros (fbid, nombre, ci, expedido, mail, telefono, ciudad, direccion, amaszonas, pat) 
			values 
			("'.$fbid.'", "'.$nombre.'", "'.$ci.'", "'.$expedido.'", "'.$mail.'", "'.$telefono.'", "'.$ciudad.'", "'.$direccion.'", "'.$amaszonas.'", "'.$pat.'")');

		if($meter)
	{
		header ("Location: /");
	}else{
		echo 'Hubo un error en el registro.' ;	
	}
?>