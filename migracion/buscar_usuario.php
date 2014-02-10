<form method="post">
	<h3>Ingrese el n&uacute;mero de c&eacute;dula: </h3><input type="text" name="cedula" id="cedula"/>
	<input type="hidden" value="2" name="opc" id="opc" />
	<input type="submit" value="Buscar" />
</form> 
<?php  
	if($_POST["cedula"]){
		//buscar el exalumno en la bolsa de empleo
		$bolsaEmpleoUser = buscarExAlumnoinCMS($_POST["cedula"]); 
		if(!$bolsaEmpleoUser){
			//si no existe presentar los datos de exalumno
			//para que puedan ser pasados a la bolsa de empleo
		 
			$exalumno  = consultar_exalumnoOracle($_POST["cedula"]);
			if(!empty($exalumno)){ 
				//presentar los resultados en un formulario
				echo '<strong>Los datos de usuario son </strong>';
				echo '<form method="post">';
					echo '<table border="1" width="100%">';
						echo '<tr class="cabecera_table">';
							echo '<td>ID</td>';
							echo '<td>CEDULA</td>';
							echo '<td>NOMBRES</td>';
							echo '<td>APELLIDOS</td>';
							echo '<td>E-MAIL</td>';
							echo '<td>TITULO</td>';
							echo '<td>&nbsp</td>';
						echo '</tr>';						
						echo '<tr class="contenido_tabla">';
							echo '<td>'.$exalumno->id.'</td>';
							echo '<td>'.$exalumno->cedula.'</td>';
							echo '<td>'.$exalumno->nombres.'</td>';
							echo '<td>'.$exalumno->apellidos.'</td>';
							echo '<td>'.$exalumno->mail.'</td>';
							echo '<td>'.$exalumno->titulo.'</td>'; 
							echo '<td><input type="submit" name="enviar_migrar" value="Migrar usuario" />
									<input type="hidden" name="cedula_migrar" id="cedula_migrar" value="'.$exalumno->cedula.'" />
									</td>';
						echo '</tr>';
					echo '</table>';
				echo '</form>';
			} else{

				echo '<p>No se encuentra el usuario en la base de ex-alumnos Oracle</p>';
			}
		}else{

			echo '<p class="alerta">*El ex alumno ya está registrado en la base de datos de Bolsa de Empleo UTPL</p>';
			//mostrar los datos en una tabla
			echo '<table border="1" width="100%">';
				echo '<tr class="cabecera_table">';
					echo '<td><strong>Título</strong></td>';
					echo '<td><strong>Nombre</strong></td>';
					echo '<td><strong>Cédula</strong></td>';  
				echo '</tr>';
				echo '<tr class="contenido_tabla">';
					echo '<td>'.$bolsaEmpleoUser[0]->title.'</td>';
					echo '<td>'.$bolsaEmpleoUser[0]->name.'</td>';
					echo '<td>'.$bolsaEmpleoUser[0]->cedula.'</td>';  
				echo '</tr>';
			echo '</table>';
		}
	} 



?>