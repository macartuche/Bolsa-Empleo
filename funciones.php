<?php
error_reporting(1);
ini_set("display_errors ", "1");
set_time_limit(10800); 
define( '_JEXEC', 1 );
define('JPATH_BASE', dirname(__FILE__) );
define( 'DS', DIRECTORY_SEPARATOR );
require_once ( JPATH_BASE .DS.'includes'.DS.'defines.php' );
require_once ( JPATH_BASE .DS.'includes'.DS.'framework.php' );

JDEBUG ? $_PROFILER->mark( 'afterLoad' ) : null;
ini_set('display_errors','On');
/**
 * CREATE THE APPLICATION
 *
 * NOTE :
 */
$mainframe =& JFactory::getApplication('site');

function verificar_usernames(){
	$db = &JFactory::getDBO();  
	$queryTotalUsers="Select count(*) as total from #__users";
	$db->setQuery($queryTotalUsers);
	$totalUsersJoomla = $db->loadObjectList(); 
	$totalUsersJoomla = $totalUsersJoomla[0]->total;
	$inicio=1;
	$cantidad=100;
	$contador =1;
	while($i<$totalUsersJoomla){
		$final = $inicio+$cantidad;
		$queryUsers="Select id, password, username, name from #__users where id > ".$inicio." and id <= ".$final;//where id=11714
		$db->setQuery($queryUsers);
		$UsersObject = $db->loadObjectList();
		$inicio = $final; 
		$i=$final;
		$contador++;

		//recorrer los 100 usuarios botenidos 
		foreach ($UsersObject as $User) 
		{
			if(tiene_tilde($User->name)){
				//se debe reemplazar las tildes 
				$User->name= reemplazarTildes($User->name);
				$partes = split(" ", $User->name);


				if(count($partes)%2 == 0){
					$nombres=$partes[0]." ".$partes[1];
					$apellidos=$partes[2]." ".$partes[3];
					$User->username = nombre_usuario($nombres, $apellidos);
				}else{
					$nombres=$partes[0];
					$apellidos=$partes[1]." ".$partes[2];
					$User->username = nombre_usuario($nombres, $apellidos); 
				}
				
				//actualizar los datos 
				//$ret = $db->updateObject('jos_users', $User,'id');
 
				$updateQuery = "Update jos_users ".
								" SET username = '".$User->username ."' ".
								" Where id=".$User->id;

 				$db->setQuery($updateQuery); 
				$db->query(); 
				echo $User->name." ".$User->username."<br />";

				if($contador >=3000){
					$contador=0;
					sleep(60);
				}		
			}
		}
	}
}

function tiene_tilde($palabra){ 
	$patrones = array("/&aacute;/i", "/&eacute;/i", "/&iacute;/i",
			 		"/&oacute;/i", "/&uacute;/i","/&ntilde;/i");

	$tilde=false;
	foreach ($patrones as $patron) {
		if(preg_match($patron,$palabra) == 1){
			$tilde=true;
			break;
		}
	}	
	
	return $tilde;
}
//Permite buscar si existe un registro de exalumno ya en la bolsa de trabajo 
function buscarExAlumnoinCMS($cedula){
	if(empty($cedula)){
		return;
	}


	//instancia de la bd
	$db = &JFactory::getDBO();  
	$query = "SELECT title, name, cedula FROM #__jobs_resumes WHERE cedula= '".$cedula."';";
	$db->setQuery($query);
	$exalumno = $db->loadObjectList(); 
	$db = null;
	return $exalumno;
}

 
 
/*** EMPEZAR LA MIGRACION DE DATOS DE EX ALUMNOS ORACLE A BASE DE DATOS -BOLSA DE EMPLEO UTPL (MYSQL)- *****/
//abrir conexion al servidor oracle 172.16.50.11 =>sid = desa
 function migrar_exalumnos(){
	$conexion = conectar_oracle();
	//ejecutar consultas

	//MIGRAR TODOS LOS EGRESADOS DE BD EX ALUMNOS
	$consultaTotalEgresados = oci_parse($conexion , 'SELECT  MAX(ID_EGRESADO) as MAX, count(*) as TOTAL FROM EGRESADO');
	oci_execute($consultaTotalEgresados);

	//extraer el total de exalumnos 
	while ($row = oci_fetch_array($consultaTotalEgresados, OCI_ASSOC+OCI_RETURN_NULLS)) {
	        $maximo 		= $row["MAX"];
	        $totalExALumnos = $row["TOTAL"];
	     
	} 
 
	//migrar los usuarios por lotes para no consumir en exceso memoria del servidor y del pc
 	
 	$i=0;
	$inicial=1;
	$cantidad = 500;
	$cvs=0;
	$iterador=1;
	while ( $i<= $maximo) {
		$final = $inicial + $cantidad;
		$egresados = oci_parse($conexion , 'SELECT  *  FROM EGRESADO WHERE ID_EGRESADO >= '.$inicial.' and ID_EGRESADO <='.$final.' ORDER BY ID_EGRESADO'); // WHERE ROWNUM <= 10
		oci_execute($egresados);
		$inicial = $final;
		$i = $inicial;

		//descansar el computador cada 3000 registros
		if($iterador>3000){
			//descansar 2 minutos
			sleep(120);
			$iterador=0;
		}

		$iterador++;
		while ($row = oci_fetch_array($egresados, OCI_ASSOC+OCI_RETURN_NULLS)) {

		    //buscar si el egresado ya se encuentra en la base de datos de BOLSA DE EMPLEO caso contrario continuar el proceso
		    if(!empty($row["CEDULA_EGRESADO"])){ 

		    	$exalumno = buscarExAlumnoinCMS($row["CEDULA_EGRESADO"]);
		     
		    	if(empty($exalumno)){
		    		//caso contrario se determina el resto de datos para el CV	   	
				    $idEXA 			= $row["ID_EGRESADO"];
				    $paisEXA 		= $row["ID_PAIS"];    
				    $tipoEXA 		= $row["ID_TIPO"];    
				    $cedulaEXA 		= $row["CEDULA_EGRESADO"];
				    $nombreEXA 		= $row["NOMBRE_EGRESADO"];
				    $apellidoEXA	= $row["APELLIDO_EGRESADO"];
				    $telfEXA 		= $row["TELEFONO_EGRESADO"];
				    $celEXA 		= $row["CELULAR_EGRESADO"];
				    $provEXA 		= $row["PROVINCIA_EGRESADO"];
				    $ciudEXA 		= $row["CIUDAD_EGRESADO"];
				    $dirEXA 		= $row["DIRECCION_EGRESADO"];
				    $emailEXA 		= $row["EMAIL_EGRESADO"];
				    $sexoEXA 		= $row["SEXO_EGRESADO"];
				    $ecivilEXA 		= $row["ECIVIL_EGRESADO"];
				    $fnacEXA 		= $row["FECHANACI_EGRESADO"];
 
				    $cvs++;
				    //extraer el resto de datos de egresados para enviarlos al CMS MYSQL
					migrar($conexion, $idEXA, $cedulaEXA, $nombreEXA, $apellidoEXA, $telfEXA, $celEXA, 
							$provEXA, $ciudEXA, $dirEXA, $emailEXA, $sexoEXA, $ecivilEXA, 
							$fnacEXA, $paisEXA);
		    	}	
		    	 
		    }
		} 
		//descansar el computador cada 5000 registros
		//sleep(60);

	}
	
	//cerrar la conexion
	echo "Total de ex alumnos en base de datos oracle.".$totalExALumnos;
	echo "<br />";
	echo "Total de CVs creados en la bolsa de empleo: ".$cvs;
	cerrar_oracle($conexion);

 }

function migrar($conexion,$idEXA, $cedulaEXA, $nombreEXA, $apellidoEXA, $telfEXA, $celEXA, $provEXA, $ciudEXA, $dirEXA, 
						  $emailEXA, $sexoEXA, $ecivilEXA, $fnacEXA, $paisEXA){
	//consultar el pais del egresado
	$paisData = oci_parse($conexion , 'SELECT NOMBRE_PAIS as PAIS FROM PAIS WHERE ID_PAIS ='.$paisEXA);
	oci_execute($paisData);
	while ($paisRow = oci_fetch_array($paisData, OCI_ASSOC+OCI_RETURN_NULLS)) {
		$pais = $paisRow["PAIS"];
	}

	//consultar los datos de pregrado (en caso de tenerlos) titulo, tesis, anio etc
	$pregradoData = oci_parse($conexion , 'SELECT * FROM PREGRADO WHERE ID_EGRESADO = '.$idEXA); 
	oci_execute($pregradoData);


	$graduado = false;
	while ($pregRow = oci_fetch_array($pregradoData, OCI_ASSOC+OCI_RETURN_NULLS)) 
	{
		//el egresado es graduado
 		$graduado = true;
		$idPregradoEXA 			= $pregRow["ID_PREGRADO"];
		$idTitPregradoEXA 		= $pregRow["ID_TITULO"];
		$idEscPregradoEXA 		= $pregRow["ID_ESCUELA"];
		$anioEPregradoEXA 		= $pregRow["ANIOEGRESADO_PREGRADO"];
		$anioTitPregradoEXA		= $pregRow["ANIOTITULACION_PREGRADO"];
		$temaTesisPregradoEXA 	= $pregRow["TEMATESIS_PREGRADO"];    
		$univPregradoEXA 		= $pregRow["UNIVERSIDAD_PREGRADO"]; 
		$temaTesPregradoEXA 	= $pregRow["TEMATESIS_PREGRADO"];
		$centroPregradoEXA 		= $pregRow["ID_CENTRO"];   	 

		//CONSULTAR LOS DATOS DE TITULO, ESCUELA y AREA ACADEMICA
		if(!empty($idTitPregradoEXA) and !empty($idEscPregradoEXA)){
			$tituloEscuelaData = oci_parse($conexion , 'SELECT E.NOMBRE_ESCUELA as ESCUELA, T.NOMBRE_TITULO  AS TITULO , A.NOMBRE_AREA_ACADEMICA AS AREA '.
				    												'FROM TITULO T, ESCUELA E,  AREA_ACADEMICA A '.
				    												'WHERE T.ID_ESCUELA = E.ID_ESCUELA  AND T.ID_TITULO = '.$idTitPregradoEXA.' AND T.ID_ESCUELA = '.$idEscPregradoEXA.' AND A.ID_AREA_ACADEMICA = E.ID_AREA_ACADEMICA');   	    		
			oci_execute($tituloEscuelaData);
 	 		while ($tituloEscuelaRow = oci_fetch_array($tituloEscuelaData, OCI_ASSOC+OCI_RETURN_NULLS)) 
			{
				$escuela 			= $tituloEscuelaRow["ESCUELA"];
				$titulo 			= $tituloEscuelaRow["TITULO"];
				$area 				= $tituloEscuelaRow["AREA"];
			}
		}

		//centro universitario
		if(!empty($centroPregradoEXA)){
			$centroData = oci_parse($conexion , 'SELECT  NOMBRE_CENTRO FROM CENTRO_UNIVERSITARIO WHERE ID_CENTRO='.$centroPregradoEXA);   	    		
			oci_execute($centroData);
 	 		while ($centroRow = oci_fetch_array($centroData, OCI_ASSOC+OCI_RETURN_NULLS)) 
			{
				$centro 			= $centroRow["NOMBRE_CENTRO"]; 
			}
		}
	}//fin pregrado

	//CONSULTAR INFORMACION ADICIONAL DE LUGARES DE TRABAJO
	$trabajoActualData = oci_parse($conexion , 'SELECT INSTITUCION_TRABAJO AS EMPRESA, DIRECCION_TRABAJO AS DIRECCIONEMPR, CARGO_TRABAJO AS CARGOEMPR, TELEFONO_TRABAJO AS TELFEMPR '.
																	'FROM TRABAJO_ACTUAL WHERE ID_EGRESADO = '.$idEXA);   	    		
		

	oci_execute($trabajoActualData);
	while ($trabajoRow = oci_fetch_array($trabajoActualData, OCI_ASSOC+OCI_RETURN_NULLS)) 
	{
		$empresa 			= $trabajoRow["EMPRESA"];
		$direccionEmp 		= $trabajoRow["DIRECCIONEMPR"];
		$cargo 				= $trabajoRow["CARGOEMPR"];
		$telfEmp 			= $trabajoRow["TELFEMPR"]; 
	}

	//CONSULTAR ESTUDIOS DE NIVEL SUPERIOR
	$postgrado = oci_parse($conexion , 'SELECT INSTITUCION_PREPOSTGRADO AS INSTITUCION_PS,
																TITULO_PREPOSTGRADO AS TITULO_PS,
																ANIO_PREPOSTGRADO AS ANIO_PS '.
																'FROM PRE_POSTGRADO '.
																' WHERE ID_EGRESADO = '.$idEXA); 
	oci_execute($postgrado); 
	while ($prePostgradoRow = oci_fetch_array($postgrado, OCI_ASSOC+OCI_RETURN_NULLS)) 
	{
		$institucionPost 			= $prePostgradoRow["INSTITUCION_PS"];
		$tituloPost 				= $prePostgradoRow["TITULO_PS"];
		$anioPost 					= $prePostgradoRow["ANIO_PS"];
	}
	
	$titulo = (empty($titulo)) ? "Sin titulo": $titulo;
	$grado = ($graduado)? "Graduado" : "Estudiante";
	
	//descansar el computador
	createUserinCMS($cedulaEXA, $nombreEXA, $apellidoEXA, $telfEXA, $celEXA, $provEXA, $ciudEXA, $dirEXA, 
						  $emailEXA, $sexoEXA, $ecivilEXA, $fnacEXA, $titulo, $pais, $empresa, $cargo, 
						  $telfEmp, $escuela, $area, $institucionPost, $tituloPost, $univPregradoEXA, $centro, 
						  $grado, $anioTitPregradoEXA,
						  $tituloPost, $anioPost);
	 		
	echo "<p><strong>Se ha migrado la información del usuario: ".$nombreEXA." ".$apellidoEXA.", con id = ".$idEXA."</strong></p>";
}

//crear al usuario en la base de datos BOLSA DE EMPLEO UTPL -MOTOR MYSQL
function createUserinCMS($cedula, $nombre, $apellido, $telefono, $celular, $provincia, $ciudad, $direccion, 
			  $email, $sexo, $estadocivil, $fechanaci, $titulo, $pais, $insttrabajo, $cargotrabajo, 
			  $telftrabajo, $escuela, $area, $institucionPost="", $tituloPost="", $univPregradoEXA="",$centro="",
			  $graduado="", $aniotitulacion="", $tituloPost="", $anioPost="")
{

	//Caracteres especiales para los datos recibidos
	//Provincia
	$provincia 		= reemplazarTildes($provincia);
	//Ciudad
	$ciudad 		= reemplazarTildes($ciudad);
	//Direccion
	$direccion 		= reemplazarTildes($direccion);
	//Estado Civil
	$estadocivil 	= reemplazarTildes($estadocivil);
	//institucion de postgrado
	$institucionPost= reemplazarTildes($institucionPost);
	//titulo de postgrado
	$tituloPost 	= reemplazarTildes($tituloPost);
	//Esculea
	$escuela 		= reemplazarTildes($escuela);
	//Area Academica
	$area 			= reemplazarTildes($area);
	//Pais
	$pais 			= reemplazarTildes($pais);	
	//Institución del trabajo
	$insttrabajo 	= reemplazarTildes($insttrabajo);
	//Cargo del trabajo
	$cargotrabajo 	= reemplazarTildes($cargotrabajo);
	//Titulo
	$titulo 		= reemplazarTildes($titulo); 
	//Nombres
	$nombre 		= reemplazarTildes($nombre); 
	//Apellidos
	$apellido 		= reemplazarTildes($apellido);
	//centro
	$centro 		= reemplazarTildes($centro); 


	//poner los valores de interfaz para estado civil
	switch ($estadocivil) {
		case 'Soltero': case 'Soltera': default:
			$estadocivil = 'Soltero(a)';
		break;
		case 'Casado': case 'Casada':
			$estadocivil = 'Casado(a)';
		break;
		case 'Divorciado': case 'Divorciada':
			$estadocivil = 'Divorciado(a)';
		break;
		case 'Viudo': case 'Viuda':
			$estadocivil = 'Viudo(a)';
		break;
		case 'Religioso': case 'Religiosa':
			$estadocivil = 'Religioso(a)';
		break; 
	}



	//Conexion a la base de datos de mysql bolsa de empleo
	$conexion       	= mysql_connect("localhost", "root", "");
	mysql_select_db("wutoloja_bolsadb", $conexion);
	$sql_resume			= "SELECT cedula, title from jos_jobs_resumes WHERE cedula='".$cedula."'";

	$result 			= mysql_query($sql_resume, $conexion) or die(mysql_error());
	$filas 				= mysql_num_rows($result);		
	//Fecha actual
	$mysqldate 			= date( 'Y-m-d H:i:s' );
 

	if($filas > 0)
	{	
		while ($row = mysql_fetch_assoc($result, MYSQL_BOTH)) {
				$sql_resumes = "UPDATE jos_jobs_resumes SET title='".$titulo."' WHERE cedula='".$cedula."'";
				
				mysql_query($sql_resumes) or die(mysql_error());
		}
		return;
	}else{	
		//Crear CV y usuario
		$nomCV 		= $nombre . ' ' .$apellido;
		//Generar username, determinar si existe mail y crear una clave
		$username 		= nombre_usuario($nombre, $apellido);
		$mail 			= ($email!= "" ?  $email : "nomail@mail.com") ;
		$clave 			= mosMakePassword();
		//Insertar datos de usuario en la tabla jos_user
		$sql_users 		= "INSERT into jos_users(
								name, username,
								email, password,
								usertype,block,
								sendEmail, gid,
								registerDate, clave)  
						   VALUES ('".$nomCV."','".$username."',
								   '".$mail."','".md5($clave)."', 
								   'Registered',0,0,18,
								   '".$mysqldate."', '".$clave."')";
		
		//Insertar el dato en la tabla jos_user		   			
		mysql_query($sql_users, $conexion) or die(mysql_error());
		//Obtener el ultimo id generado
		$id = mysql_insert_id();
		//Obtener datos para insertar en la tabla jos_jobs_resumes
		//Informacion Universitaria
		$school1 			= (empty($univPregradoEXA ))? "UTPL": $univPregradoEXA;	//universidad
		$school_city1		= (empty($centro ))? "Loja": $centro; //centro
		$school_state1		= $pais;  
		$diploma_text1 		= $aniotitulacion; //correspondiente al  anio de titulacion en el UI de cv
		$diplomauniversity 	= $graduado;
		$study_area1 		= $titulo;	

		//Estudios superiores
		$school2 			= $institucionPost; 
		$diploma_text2		= $anioPost;
		$study_area2 		= $tituloPost;
		//Publicado y tipo de trabajo
		$published  		= 1;
		$job_type			= 1;

		$sql_resumes = "INSERT INTO jos_jobs_resumes
						(
							title,         memberid,      created, 
							name,          civil,         cedula, 
							home_phone,    cell_phone,
							email_address, street,        city,           
							state,         school1,       school_city1,                    
							school_state1, diploma_text1, lknjobs_schooldiplomauniversity, 
							study_area1,   school2,       study_area2,                     
							diploma_text2, employer,      employer_phone,                  
							employer_pos,  published,     job_type
						)
						VALUES(";
		$sql_resumes .= "'$titulo',       '$id',               '$mysqldate', 
						 '$nomCV',        '$estadocivil',      '$cedula',
						 '$telefono',     '$celular',
						 '$mail',         '$direccion',        '$ciudad', 
						 '$provincia',    '$school1',          '$school_city1',     
						 '$school_state1','$diploma_text1',    '$diplomauniversity', 
						 '$study_area1',  '$school2',          '$study_area2',      
						 '$diploma_text2','$insttrabajo',      '$telftrabajo',      
						 '$cargotrabajo', '$published',        '$job_type'";
		$sql_resumes .= ");";
		mysql_query($sql_resumes) or die(mysql_error());
		} 
	mysql_close();
}

function consultar_exalumnoOracle($cedula){
	$conexion = conectar_oracle();
	$consultarEgresado = oci_parse($conexion , "SELECT * FROM EGRESADO WHERE CEDULA_EGRESADO='".$cedula."'");
	oci_execute($consultarEgresado); 

	$exalumno = new stdClass();
	while ($row = oci_fetch_array($consultarEgresado, OCI_ASSOC+OCI_RETURN_NULLS)) {
  
		$exalumno->id = $row["ID_EGRESADO"];
		$exalumno->cedula = $row["CEDULA_EGRESADO"];
		$exalumno->nombres = $row["NOMBRE_EGRESADO"];
		$exalumno->apellidos = $row["APELLIDO_EGRESADO"];
		$exalumno->mail = $row["EMAIL_EGRESADO"];

		//obtener el pregrado del ex alumno
		$pregradoData = oci_parse($conexion , 'SELECT * FROM PREGRADO WHERE ID_EGRESADO = '.$exalumno->id);
		oci_execute($pregradoData);
		//titulo 
		while ($pregrado = oci_fetch_array($pregradoData, OCI_ASSOC+OCI_RETURN_NULLS)) {
			$titulo_id =  $pregrado["ID_TITULO"];
			$tituloData = oci_parse($conexion , 'SELECT NOMBRE_TITULO  AS TITULO FROM TITULO T WHERE T.ID_TITULO = '.$titulo_id );

			oci_execute($tituloData);
			while ($tituloRow = oci_fetch_array($tituloData, OCI_ASSOC+OCI_RETURN_NULLS)) {
				$exalumno->titulo = $tituloRow["TITULO"];
			}
		}
	}
 	
	$exalumno->titulo=(empty($exalumno->titulo))? "Sin titulo": $exalumno->titulo;
	cerrar_oracle($conexion);
	//retornar el exalumno
	return $exalumno;
}

function migrar_oracleTO_mysql($cedula){
	$conexion = conectar_oracle();
	$consultarEgresado = oci_parse($conexion , "SELECT * FROM EGRESADO WHERE CEDULA_EGRESADO='".$cedula."'");
	oci_execute($consultarEgresado); 	
	while ($row = oci_fetch_array($consultarEgresado, OCI_ASSOC+OCI_RETURN_NULLS)) {
		$idEXA 			= $row["ID_EGRESADO"];
		$paisEXA 		= $row["ID_PAIS"];    
		$tipoEXA 		= $row["ID_TIPO"];    
		$cedulaEXA 		= str_replace(".","",$row["CEDULA_EGRESADO"]);;
  		$nombreEXA 		= $row["NOMBRE_EGRESADO"];
		$apellidoEXA	= $row["APELLIDO_EGRESADO"];
		$telfEXA 		= $row["TELEFONO_EGRESADO"];
		$celEXA 		= $row["CELULAR_EGRESADO"];
		$provEXA 		= $row["PROVINCIA_EGRESADO"];
		$ciudEXA 		= $row["CIUDAD_EGRESADO"];
		$dirEXA 		= $row["DIRECCION_EGRESADO"];
		$emailEXA 		= $row["EMAIL_EGRESADO"];
		$sexoEXA 		= $row["SEXO_EGRESADO"];
		$ecivilEXA 		= $row["ECIVIL_EGRESADO"];
		$fnacEXA 		= $row["FECHANACI_EGRESADO"];

		//extraer el resto de datos de egresados para enviarlos al CMS MYSQL
		migrar($conexion, $idEXA, $cedulaEXA, $nombreEXA, $apellidoEXA, $telfEXA, $celEXA, 
				$provEXA, $ciudEXA, $dirEXA, $emailEXA, $sexoEXA, $ecivilEXA, 
				$fnacEXA, $paisEXA);
	}

}
//abrir la conexion con oracle
function conectar_oracle(){
	// cadena de conexion en caso de no tener archivo tsnames.ora 
	$sid = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.50.111)(PORT = 1521))) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME= desa)))";
	//realizar una conexion con oracle
	$conexion = @oci_connect("system", "manuco08", "orcl");
	if (!$conexion) {
		echo "<b>HUBO UN ERROR DE CONEXION</b>";
    	$e = oci_error();
    	print_r($e);
    	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	}

	return $conexion;
}

//cerrar conexion oracle
function cerrar_oracle($conn){
	oci_close($conn);
}

function reemplazarTildes($dato)
{
	$dato = str_replace("&aacute;","a",$dato);	
	$dato = str_replace("&eacute;","e",$dato);
	$dato = str_replace("&iacute;","i",$dato);
	$dato = str_replace("&oacute;","o",$dato);
	$dato = str_replace("&uacute;","u",$dato);
	$dato = str_replace("&Aacute;","A",$dato);	
	$dato = str_replace("&Eacute;","E",$dato);
	$dato = str_replace("&Iacute;","I",$dato);
	$dato = str_replace("&Oacute;","O",$dato);
	$dato = str_replace("&Uacute;","U",$dato);
	$dato = str_replace("&ntilde;","n",$dato);
	return $dato;
}

function reemplazarCaracteresRaros($dato)
{
	$dato = preg_replace("[АЮБЦ╙]","a",$dato);
	$dato = preg_replace("[аюбц]","A",$dato);
	$dato = preg_replace("[ИХЙ]","e",$dato);
	$dato = preg_replace("[ихй]","E",$dato);
	$dato = preg_replace("[МЛН]","i",$dato);
	$dato = preg_replace("[млн]","I",$dato);
	$dato = preg_replace("[СРТУ╨]","o",$dato);
	$dato = preg_replace("[срту]","O",$dato);
	$dato = preg_replace("[ЗЫШ]","u",$dato);
	$dato = preg_replace("[зыш]","U",$dato);
	$dato = str_replace(" ","-",$dato);
	$dato = str_replace("Я","n",$dato);
	$dato = str_replace("я","N",$dato);
	return $dato;
}

//Función para crear un username
function nombre_usuario($nombre, $apellido, $username="")
{ 	
	$nombre = reemplazarTildes($nombre);
	$apellido = reemplazarTildes($apellido); 

	
	$NAME 		= explode(" ",$nombre);
	$APELLIDO 	= explode(" ",$apellido);
	
	if(count($NAME)== 1)		$NAME[1] = "";
	if(count($APELLIDO)== 1)	$APELLIDO[1] = "";
	if(count($NAME)>2)			unset($NAME[2]);
	if(count($APELLIDO)>2)		unset($APELLIDO[2]);
	
	//Separamos los Nombres
	list($pri_nombre,$seg_nombre) = $NAME;
	//Separamos los Apellidos
	list($pri_apellido,$seg_apellido) = $APELLIDO;
	//Quitamos los espacios en blanco
	$pri_nombre= preg_replace('/[ <>\'\"]/','',$pri_nombre); 
	$seg_nombre= preg_replace('/[ <>\'\"]/','',$seg_nombre); 
	$pri_apellido= preg_replace('/[ <>\'\"]/','',$pri_apellido); 
	$seg_apellido= preg_replace('/[ <>\'\"]/','',$seg_apellido); 
	//Caracteres raros Nombres
	$pri_nombre = reemplazarCaracteresRaros($pri_nombre); 
	$seg_nombre = reemplazarCaracteresRaros($seg_nombre);
	//Caracteres raros Apellidos
	$pri_apellido = reemplazarCaracteresRaros($pri_apellido);	
	$seg_apellido = reemplazarCaracteresRaros($seg_apellido);

	$a = $pri_nombre[0].$pri_apellido;
	//Otorgamos un número ramdomico al username
	if($username)	{ 
		$valor = rand(0,99);
		 $a = $username."".$valor;
	}   
	$a = strtolower($a);
	$sql = "SELECT id FROM jos_users where username = '$a'";
	$resultado = mysql_query($sql);
	$filas = mysql_num_rows($resultado);
	if($filas > 0){
		$a= nombre_usuario($pri_nombre, $pri_apellido,$a);
	} 
	return strtolower($a);
		
} 


//FUNCION GENERADORA DE CLAVES CON UN TAMANIO POR DEFECTO DE 8
function mosMakePassword($length=8) 
{
	$salt = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$makepass = '';
	mt_srand(10000000*(double)microtime());
	
	for ($i = 0; $i < $length; $i++)
		$makepass .= $salt[mt_rand(0,61)];
	return $makepass;
}
?>