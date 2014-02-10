<?php
/*
*   MACF-WUTOLOJA 2012
* 	FRONTAL PARA LA MIGRACION DE USUARIOS UTPL
*
*/
	include("../funciones.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Migración de usuarios</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" type="text/javascript" src="emblematiq-Niceforms-c63b192/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="emblematiq-Niceforms-c63b192/niceforms-default.css" />
</head>

<body> 
	<div id="container">
		<fieldset>
			<legend>Migraci&oacute;n de exalumnos a bolsa de empleo utpl</legend> 
			<form method="post" onsubmit="aviso(this)" id="opciones">
			 <input type="radio" name="opc" id="opc" value="1" checked="checked" /><label>Migrar todos los exalumnos a bolsa de empleo UTPL </label><br />
			 <input type="radio" name="opc" id="opc" value="2" /><label>Buscar un exalumno para su posterior migraci&oacute;n a bolsa de empleo UTPL</label><br />
			 <input type ="submit" name="enviar" value="Enviar">
			</form>
			<?php
				if($_POST["opc"]==1){
					//migrar todos los usuarios
					migrar_exalumnos();
				}else if($_POST["opc"]==2){
					//desplegar formulario para busqueda
					include("buscar_usuario.php");
				}
				
				//accion para el formulario de busqueda por cedula 
				if($_POST["cedula_migrar"]){
					//migrar usuario
					migrar_oracleTO_mysql($_POST["cedula_migrar"]);
				}
			?>
		</fieldset>
	</div>
</body>
<script type="text/javascript">
	function aviso(form){ 
		var i;
	    for (i=0;i<form.opc.length;i++){
	       if (form.opc[i].checked)
	          break;
	    }
	    var valor = form.opc[i].value ;
		if(valor ==1 ){
			alert("La migración de ex alumnos de la base de datos Oracle, hacia la Bolsa de Empleo, tomará un tiempo considerable. Por favor no recargue la página.");
		}
		return true;	
	}
</script>