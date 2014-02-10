<?php
/*
*   MACF-WUTOLOJA 2012
* 	FRONTAL PARA LA MIGRACION DE USUARIOS UTPL
*
*/
function conectar_oracle(){
	// cadena de conexion en caso de no tener archivo tsnames.ora 
	$sid = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 127.0.0.1)(PORT = 1521))) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME= SYSTEM)))";
	//realizar una conexion con oracle
	$conexion = @oci_connect("system", "manuco08", "orcl");
	if (!$conexion) {
		echo "<b>HUBO UN ERROR DE CONEXION</b>";
    	$e = oci_error();
    	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	}

	return $conexion;
}

$conexion= conectar_oracle();
$consultaTotalEgresados = oci_parse($conexion , 'SELECT  MAX(ID_EGRESADO) as MAX, count(*) as TOTAL FROM EGRESADO');
	oci_execute($consultaTotalEgresados);

	//extraer el total de exalumnos 

	while ($row = oci_fetch_array($consultaTotalEgresados, OCI_ASSOC+OCI_RETURN_NULLS)) {
	        echo $row["MAX"];
		  echo "<br />";
	        echo $row["TOTAL"];
	} 

 
?>