<?php
function test($cedula, $nombre, $apellido, $telefono, $celular, $provincia, $ciudad, $direccion, $email, $sexo, $estadocivil, $fechanaci, $titulo, $pais, $insttrabajo, $cargotrabajo, $telftrabajo, $escuela, $area)
{
	//Caracteres especiales para los datos recibidos
	//Provincia
	$provincia = str_replace("&aacute;","a",$provincia);
	$provincia = str_replace("&eacute;","e",$provincia);
	$provincia = str_replace("&iacute;","i",$provincia);
	$provincia = str_replace("&oacute;","o",$provincia);
	$provincia = str_replace("&uacute;","u",$provincia);
	$provincia = str_replace("&ntilde;","n",$provincia);
	//Ciudad
	$ciudad = str_replace("&aacute;","a",$ciudad);
	$ciudad = str_replace("&eacute;","e",$ciudad);
	$ciudad = str_replace("&iacute;","i",$ciudad);
	$ciudad = str_replace("&oacute;","o",$ciudad);
	$ciudad = str_replace("&uacute;","u",$ciudad);
	$ciudad = str_replace("&ntilde;","n",$ciudad);
	//Direccion
	$direccion = str_replace("&aacute;","a",$direccion);
	$direccion = str_replace("&eacute;","e",$direccion);
	$direccion = str_replace("&iacute;","i",$direccion);
	$direccion = str_replace("&oacute;","o",$direccion);
	$direccion = str_replace("&uacute;","u",$direccion);
	$direccion = str_replace("&ntilde;","n",$direccion);
	//Estado Civil
	$estadocivil = str_replace("&aacute;","a",$estadocivil);
	$estadocivil = str_replace("&eacute;","e",$estadocivil);
	$estadocivil = str_replace("&iacute;","i",$estadocivil);
	$estadocivil = str_replace("&oacute;","o",$estadocivil);
	$estadocivil = str_replace("&uacute;","u",$estadocivil);
	$estadocivil = str_replace("&ntilde;","n",$estadocivil);
	//Esculea
	$escuela = str_replace("&aacute;","a",$escuela);
	$escuela = str_replace("&eacute;","e",$escuela);
	$escuela = str_replace("&iacute;","i",$escuela);
	$escuela = str_replace("&oacute;","o",$escuela);
	$escuela = str_replace("&uacute;","u",$escuela);
	$escuela = str_replace("&ntilde;","n",$escuela);
	//Area Academica
	$area = str_replace("&aacute;","a",$area);
	$area = str_replace("&eacute;","e",$area);
	$area = str_replace("&iacute;","i",$area);
	$area = str_replace("&oacute;","o",$area);
	$area = str_replace("&uacute;","u",$area);
	$area = str_replace("&ntilde;","n",$area);
	//Pais
	$pais = str_replace("&aacute;","a",$pais);
	$pais = str_replace("&eacute;","e",$pais);
	$pais = str_replace("&iacute;","i",$pais);
	$pais = str_replace("&oacute;","o",$pais);
	$pais = str_replace("&uacute;","u",$pais);
	$pais = str_replace("&ntilde;","n",$pais);
	//Institución del trabajo
	$insttrabajo = str_replace("&aacute;","a",$insttrabajo);
	$insttrabajo = str_replace("&eacute;","e",$insttrabajo);
	$insttrabajo = str_replace("&iacute;","i",$insttrabajo);
	$insttrabajo = str_replace("&oacute;","o",$insttrabajo);
	$insttrabajo = str_replace("&uacute;","u",$insttrabajo);
	$insttrabajo = str_replace("&ntilde;","n",$insttrabajo);
	//Cargo del trabajo
	$cargotrabajo = str_replace("&aacute;","a",$cargotrabajo);
	$cargotrabajo = str_replace("&eacute;","e",$cargotrabajo);
	$cargotrabajo = str_replace("&iacute;","i",$cargotrabajo);
	$cargotrabajo = str_replace("&oacute;","o",$cargotrabajo);
	$cargotrabajo = str_replace("&uacute;","u",$cargotrabajo);
	$cargotrabajo = str_replace("&ntilde;","n",$cargotrabajo);
	//Titulo
	$titulo = str_replace("&aacute;","a",$titulo);
	$titulo = str_replace("&eacute;","e",$titulo);
	$titulo = str_replace("&iacute;","i",$titulo);
	$titulo = str_replace("&oacute;","o",$titulo);
	$titulo = str_replace("&uacute;","u",$titulo);
	$titulo = str_replace("&ntilde;","n",$titulo);
	//Nombres
	$nombre = str_replace("&aacute;","a",$nombre);
	$nombre = str_replace("&eacute;","e",$nombre);
	$nombre = str_replace("&iacute;","i",$nombre);
	$nombre = str_replace("&oacute;","o",$nombre);
	$nombre = str_replace("&uacute;","u",$nombre);
	$nombre = str_replace("&ntilde;","n",$nombre);
	//Apellidos
	$apellido = str_replace("&aacute;","a",$apellido);
	$apellido = str_replace("&eacute;","e",$apellido);
	$apellido = str_replace("&iacute;","i",$apellido);
	$apellido = str_replace("&oacute;","o",$apellido);
	$apellido = str_replace("&uacute;","u",$apellido);
	$apellido = str_replace("&ntilde;","n",$apellido);
	//Conexion a la base de datos de mysql bolsa de empleo
	$conexion       	= mysql_connect("localhost", "root", "");
	mysql_select_db("wutoloja_bolsadb", $conexion);
	$sql_resume			= "SELECT cedula, title from jos_jobs_resumes WHERE cedula=".$cedula;
	$result 			= mysql_query($sql_resume, $conexion) or die(mysql_error());
	$filas 				= mysql_num_rows($result);		
	//Fecha actual
	$mysqldate 			= date( 'Y-m-d H:i:s' );
	if($filas > 0)
	{	
		while ($row = mysql_fetch_assoc($result, MYSQL_BOTH)) 
			{
				$sql_resumes = "UPDATE jos_jobs_resumes SET title='".$titulo."' WHERE cedula=".$cedula;
				mysql_query($sql_resumes) or die(mysql_error());
			}
		}
	else
	{	
		//Crear CV y usuario
		$nomCV 		= $nombre . ' ' .$apellido;
		//Generar username, determinar si existe mail y crear una clave
		$username 		= nombre_usuario($nombre, $apellido);
		$mail 			= ($email!= "" ?  $email : "nomail@mail.com") ;
		$clave 			= mosMakePassword();
		//Insertar datos de usuario en la tabla jos_user
		$sql_users 		= "INSERT into jos_users
						   (
								name, username,
								email, password,
								usertype,block,
								sendEmail, gid,
								registerDate, clave
						   ) 
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
		$school1 		= "UTPL";	//universidad
		$school_city1	= "Loja";	//ciudad
		$school_state1	= "Loja";  	//provincia
		$diplomauniversity = "Graduado";
		$diploma_text1 	= ""; 
		//Estudios superiores
		$school2 		= "";
		$study_area2 	= "";
		$diploma_text2	= "";
		//Publicado y tipo de trabajo
		$published  = 1;
		$job_type	= 1;
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
						 '$school_state1','$diploma_text1',    'diplomauniversity', 
						 '$study_area1',  '$school2',          '$study_area2',      
						 '$diploma_text2','$insttrabajo',      '$telftrabajo',      
						 '$cargotrabajo', '$published',        '$job_type'";
		$sql_resumes .= ");";
		mysql_query($sql_resumes) or die(mysql_error());
		}
	mysql_close();
}
//Función para crear un username
function nombre_usuario($nombre, $apellido, $username="")
{ 	
	$nombre = str_replace("&aacute;","a",$nombre);
	$nombre = str_replace("&eacute;","e",$nombre);
	$nombre = str_replace("&iacute;","i",$nombre);
	$nombre = str_replace("&oacute;","o",$nombre);
	$nombre = str_replace("&uacute;","u",$nombre);
	$nombre = str_replace("&ntilde;","n",$nombre);
	$apellido = str_replace("&aacute;","a",$apellido);
	$apellido = str_replace("&eacute;","e",$apellido);
	$apellido = str_replace("&iacute;","i",$apellido);
	$apellido = str_replace("&oacute;","o",$apellido);
	$apellido = str_replace("&uacute;","u",$apellido);
	$apellido = str_replace("&ntilde;","n",$apellido);

	
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
	$pri_nombre = preg_replace("[АЮБЦ╙]","a",$pri_nombre);
	$pri_nombre = preg_replace("[аюбц]","A",$pri_nombre);
	$pri_nombre = preg_replace("[ИХЙ]","e",$pri_nombre);
	$pri_nombre = preg_replace("[ихй]","E",$pri_nombre);
	$pri_nombre = preg_replace("[МЛН]","i",$pri_nombre);
	$pri_nombre = preg_replace("[млн]","I",$pri_nombre);
	$pri_nombre = preg_replace("[СРТУ╨]","o",$pri_nombre);
	$pri_nombre = preg_replace("[срту]","O",$pri_nombre);
	$pri_nombre = preg_replace("[ЗЫШ]","u",$pri_nombre);
	$pri_nombre = preg_replace("[зыш]","U",$pri_nombre);
	$pri_nombre = str_replace(" ","-",$pri_nombre);
	$pri_nombre = str_replace("Я","n",$pri_nombre);
	$pri_nombre = str_replace("я","N",$pri_nombre);
	
	$seg_nombre = preg_replace("[АЮБЦ╙]","a",$seg_nombre);
	$seg_nombre = preg_replace("[аюбц]","A",$seg_nombre);
	$seg_nombre = preg_replace("[ИХЙ]","e",$seg_nombre);
	$seg_nombre = preg_replace("[ихй]","E",$seg_nombre);
	$seg_nombre = preg_replace("[МЛН]","i",$seg_nombre);
	$seg_nombre = preg_replace("[млн]","I",$seg_nombre);
	$seg_nombre = preg_replace("[СРТУ╨]","o",$seg_nombre);
	$seg_nombre = preg_replace("[срту]","O",$seg_nombre);
	$seg_nombre = preg_replace("[ЗЫШ]","u",$seg_nombre);
	$seg_nombre = preg_replace("[зыш]","U",$seg_nombre);
	$seg_nombre = str_replace(" ","-",$seg_nombre);
	$seg_nombre = str_replace("Я","n",$seg_nombre);
	$seg_nombre = str_replace("я","N",$seg_nombre);
	//Caracteres raros Apellidos
	$pri_apellido = preg_replace("[АЮБЦ╙]","a",$pri_apellido);
	$pri_apellido = preg_replace("[аюбц]","A",$pri_apellido);
	$pri_apellido = preg_replace("[ИХЙ]","e",$pri_apellido);
	$pri_apellido = preg_replace("[ихй]","E",$pri_apellido);
	$pri_apellido = preg_replace("[МЛН]","i",$pri_apellido);
	$pri_apellido = preg_replace("[млн]","I",$pri_apellido);
	$pri_apellido = preg_replace("[СРТУ╨]","o",$pri_apellido);
	$pri_apellido = preg_replace("[срту]","O",$pri_apellido);
	$pri_apellido = preg_replace("[ЗЫШ]","u",$pri_apellido);
	$pri_apellido = preg_replace("[зыш]","U",$pri_apellido);
	$pri_apellido = str_replace(" ","-",$pri_apellido);
	$pri_apellido = str_replace("Я","n",$pri_apellido);
	$pri_apellido = str_replace("я","N",$pri_apellido);
	
	$seg_apellido = preg_replace("[АЮБЦ╙]","a",$seg_apellido);
	$seg_apellido = preg_replace("[аюбц]","A",$seg_apellido);
	$seg_apellido = preg_replace("[ИХЙ]","e",$seg_apellido);
	$seg_apellido = preg_replace("[ихй]","E",$seg_apellido);
	$seg_apellido = preg_replace("[МЛН]","i",$seg_apellido);
	$seg_apellido = preg_replace("[млн]","I",$seg_apellido);
	$seg_apellido = preg_replace("[СРТУ╨]","o",$seg_apellido);
	$seg_apellido = preg_replace("[срту]","O",$seg_apellido);
	$seg_apellido = preg_replace("[ЗЫШ]","u",$seg_apellido);
	$seg_apellido = preg_replace("[зыш]","U",$seg_apellido);
	$seg_apellido = str_replace(" ","-",$seg_apellido);
	$seg_apellido = str_replace("Я","n",$seg_apellido);
	$seg_apellido = str_replace("я","N",$seg_apellido);

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
//Función para crear password para los usuarios
function mosMakePassword($length=8) 
{
	$salt = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$makepass = '';
	mt_srand(10000000*(double)microtime());
	
	for ($i = 0; $i < $length; $i++)
		$makepass .= $salt[mt_rand(0,61)];
	return $makepass;
}
echo test($_POST["cedula"], $_POST["nombre"], 
		  $_POST["apellido"], $_POST["telefono"], 
		  $_POST["celular"], $_POST["provincia"], 
		  $_POST["ciudad"], $_POST["direccion"],
		  $_POST["email"], $_POST["sexo"], 
		  $_POST["estadocivil"],$_POST["fechanaci"],
		  $_POST["titulo"],$_POST["pais"],
		  $_POST["insttrabajo"],$_POST["cargotrabajo"],
		  $_POST["telftrabajo"],$_POST["escuela"],
		  $_POST["area"]
		  );
?>