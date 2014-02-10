<?php
require_once("excel.php"); 
require_once("excel-ext.php"); 
//traer el archivo de configuracion
include_once "../../../configuration.php" ;
$config = new JConfig();

function array_recibe($url_array)
{
    $tmp = stripslashes($url_array);
    $tmp = urldecode($tmp);
    $tmp = unserialize($tmp);
   	return $tmp;
}
$array=$_GET['cid'];
 // el método de envio usado. (en el ejemplo un link genera un GET. En el formulario se usa POST podria ser GET tambien ...)
$array=array_recibe($array);
$idResume =0;
$conEmp = mysql_connect($config->host, $config->user, $config->password);
mysql_select_db($config->db, $conEmp);
foreach ($array as $indice => $valor)
{
	 $idResume = $valor;
	$queEmp = "SELECT title Titulo, name Nombre, alias Renombre, language Idioma, 
	           discapacidad Discapacidad, home_phone Telefono_Casa, work_phone Telefono_Trabajo, 
			   cell_phone Celular, email_address Correo_Electronico, street Direccion, city Ciudad, state Provincia 
			   FROM jos_jobs_resumes WHERE id  = $idResume";
	$resEmp = mysql_query($queEmp, $conEmp);

	while($datatmp = mysql_fetch_assoc($resEmp)) { 
		$data[] = $datatmp; 
	}
}  
createExcel("excel-mysql.xls", $data);
exit;
?>
