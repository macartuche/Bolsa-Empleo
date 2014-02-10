<?php
require_once("excel.php"); 
require_once("excel-ext.php");
//traer el archivo de configuracion
include_once "../../../configuration.php" ;
$config = new JConfig();

function array_recibe($url_array) {
    $tmp = stripslashes($url_array);
    $tmp = urldecode($tmp);
    $tmp = unserialize($tmp);
   	return $tmp;
}
$array=$_GET['cid'];
 // el método de envio usado. (en el ejemplo un link genera un GET. En el formulario se usa POST podria ser GET tambien ...)
$array=array_recibe($array);
$idCompanie =0;
$conEmp = mysql_connect($config->host, $config->user, $config->password);
mysql_select_db($config->db, $conEmp);
foreach ($array as $indice => $valor){
	 $idCompanie = $valor;
	 $queEmp = "SELECT id ID, title Titulo, alias Renombre, logo Logo, description Descripcion, address Direccion, city Ciudad, country Pais, zipcode Zipcode, companyurl URLcompania, contactname Nombre, rhumanos Humanos, contactphone Telefono,  contactemail Correodecontacto, meta_keywords, meta_description Descipciondelameta, memberid Memberid, created Creado, published Publicado FROM jos_jobs_companies WHERE id = $idCompanie";
$resEmp = mysql_query($queEmp, $conEmp) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$data[] = $datatmp; 
} 
}

 
createExcel("Compania-mysql.xls", $data);
exit;
?>
 