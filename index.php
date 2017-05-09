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

<?php if ($_SESSION['FBID']): ?>    <!--  After user login  -->
    <!--Formulario-->
    <div class="container-fluid">
    <div class="row">
    	<div class="container">
                <div class="col-xs-12 col-md-6 col-md-offset-3">
                    <div class="col-xs-12">              
                        <form action="registro.php" class="" method="POST" id="formulario">
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                	<label class="control-label">Nombres y Apellidos</label>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  name="nombre" placeholder="Nombre y Apellido" class="form-control"  value="<?php echo $_SESSION['FULLNAME'];?>" type="text">
                                    </div>
                                  </div>
                            </div>
                            <div class="form-group col-xs-8 padding-left">
                                <div class="inputGroupContainer">
                                <label class="control-label">Carnet de Identidad</label>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                    <input  name="ci" placeholder="Numero de Carnet de Identidad" class="form-control"  type="text">
                                    </div>
                                  </div>
                            </div>
                            <div class="form-group"> 
                                <label class="control-label">Expedido</label>
                                <div class="selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                    <select name="expedido" class="form-control selectpicker" >
                                             <option value="" selected></option>
                                             <option value="SC">SC</option>
                                             <option value="LP">LP</option> 
                                             <option value="CB">CB</option> 
                                             <option value="OR">OR</option> 
                                             <option value="PO">PO</option>
                                             <option value="TJ">TJ</option> 
                                             <option value="CH">CH</option> 
                                             <option value="BE">BE</option>
                                             <option value="PA">PA</option> 
                                    </select>
                                </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                            	<div class="inputGroupContainer">
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input  name="mail" placeholder="Correo Electrónico" value="<?php echo $_SESSION['EMAIL'];?>" class="form-control"  type="text">
                                    </div>
                                  </div>
                            </div>
                            <!-- Telefono -->
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input  name="telefono" placeholder="Numero telefónico o móvil" class="form-control"  type="text">
                                    </div>
                                  </div>
                            </div>
                            <!-- ciudad -->
                                <div class="form-group">
                                    <div class="inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                            <input  name="ciudad" placeholder="Ciudad" class="form-control"  type="text">
                                        </div>
                                    </div>
                                </div>
                            <!-- direccion -->
                            <div class="form-group">
                            	<div class="inputGroupContainer">
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                    <input  name="direccion" placeholder="Dirección" class="form-control"  type="text">
                                    </div>
                            	</div>
                            </div>
                            <!-- esposo -->

                            <div class="form-group"> 
                                <div class="selectContainer">
                                <label class="control-label">Número de integrantes de su familia directa</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-child"></i></span>
                                    <select name="integrantes" class="form-control selectpicker" >
                                             <option value="" selected></option>
                                             <option value="2 Integrante">2 Integrante</option>
                                             <option value="3 Integrantes">3 Integrantes</option> 
                                             <option value="4 Integrantes">4 Integrantes</option> 
                                             <option value="5 Integrantes">5 Integrantes</option> 
                                             <option value="6 Integrantes">6 Integrantes</option> 
                                             <option value="7 o más Integranes">7 o más Integranes</option>
                                               
                                    </select>
                                </div>
                                </div>
                            </div>
                            <!--div class="form-group">
                                <div class="inputGroupContainer">
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-male"></i></span>
                                    <input  name="marido" placeholder="Nombre del esposo" class="form-control"  type="text">
                                    </div>
                                </div>
                            </div-->
                            <!-- Nombre del hijo -->
                            <!--div class="form-group">
                                <div class="inputGroupContainer">
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-child"></i></span>
                                    <input  name="hijo" placeholder="Coloque nombre completo de su hijo" class="form-control"  type="text">
                                    </div>
                                </div>
                            </div-->
    			             <!-- Destino Favorito de Amaszonas-->
                            <div class="form-group"> 
                                <div class="selectContainer">
                                <label class="control-label">Destino Favorito de Amaszonas</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-plane"></i></span>
                                    <select name="amaszonas" class="form-control selectpicker" >
                                             <option value="" selected></option>
                                             <option value="Santa Cruz">Santa Cruz</option>
                                             <option value="La Paz">La Paz</option> 
                                             <option value="Cochabamba">Cochabamba</option> 
                                             <option value="Sucre">Sucre</option> 
                                             <option value="Tarija">Tarija</option> 
                                             <option value="Yacuiba">Yacuiba</option>
                                             <option value="Rurrenabaque">Rurrenabaque</option> 
                                             <option value="Uyuni">Uyuni</option>
                                             <option value="Cuzco">Cuzco</option>
                                             <option value="Arica">Arica</option> 
                                             <option value="Iquique">Iquique</option> 
                                             <option value="Antofagasta">Antofagasta</option> 
                                             <option value="Copiapó">Copiapó</option> 
                                             <option value="La Serena">La Serena</option> 
                                             <option value="Asunción">Asunción</option> 
                                             <option value="Ciudad del Este">Ciudad del Este</option> 
                                             <option value="Salta">Salta</option> 
                                             <option value="Buenos Aires">Buenos Aires</option>
                                             <option value="Montevideo">Montevideo</option>    
                                    </select>
                                </div>
                                </div>
                            </div>
    			                 <!-- Programa Favorito de PAT-->
                            <div class="form-group"> 
                                <div class="selectContainer">
                                <label class="control-label">Programa Favorito de la Red PAT</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-television"></i></span>
                                    <select name="pat" class="form-control selectpicker" >
                                             <option value="" selected></option>
                                             <option value="Hola País">Hola País</option>
                                             <option value="En Hora Buena">En Hora Buena</option> 
                                             <option value="PA Tilandia">PA Tilandia</option> 
                                             <option value="Super Sport 365">Super Sport 365</option> 
                                             <option value="Noticias PAT">Noticias PAT</option> 
                                             <option value="Esto es Guerra Bolivia">Esto es Guerra Bolivia</option>
                                             <option value="No Mentiras">No Mentiras</option>
                                    </select>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <label class="checkbox-inline"><input type="checkbox" name="acepto" value="">Acepta las bases del concurso?</label>
                                </div>
                            </div>
                            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Gracias por registrarte</div>

                            <!--id -->
                            <input type="text" name="fbid" hidden value="<?php echo $_SESSION['FBID']?>">


                            <!-- Enviar --> 
                            <div class="form-group">
                                <label for="enviar" class="control-label"></label>
                                <a href=""><button type="submit" class="btn boton btn-amaszonas" name="enviar">Registrate <span class="fa fa-send"></span></button></a>
                            </div>
                        </form>
                    </div>
                </div>
    	</div>
    </div>
</div>

    <?php else: ?>

    <div class="container">
    	<div class="col-md-6 col-md-offset-3 ingreso">
    		Para registrarte en el concurso de la <strong>Red PAT</strong> y <strong>Amaszonas</strong> necesitas ingresar tus datos personales
            <a href="fbconfig.php" class="button facebook"><span><i class="fa fa-facebook"></i></span><p>Facebook</p></a>
    	</div>
    </div>
<?php endif ?>
<!--?php endif ?-->

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
<script src="js/functions.js"></script>
</body>
</html>