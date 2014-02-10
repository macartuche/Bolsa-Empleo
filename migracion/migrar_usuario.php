<?php
// cadena de conexion en caso de no tener archivo tsnames.ora 
$sid = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.50.111)(PORT = 1521))) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME= desa)))";
//realizar una conexion con oracle
$conexion = @oci_connect("BOLSA_TRABAJO", "BOLSA_TRABAJO", $sid);
print_r($conexion);


//$stid = oci_parse($conexion , 'SELECT *  FROM AREA_ACADEMICA');
//$stid = oci_parse($conexion , 'SELECT *  FROM CENTRO_UNIVERSITARIO');
//$stid = oci_parse($conexion , 'SELECT *  FROM EGRESADO WHERE ROWNUM <= 10000');
//$stid = oci_parse($conexion , 'SELECT *  FROM ESCUELA');
//$stid = oci_parse($conexion , 'SELECT *  FROM INFORMACION');
//$stid = oci_parse($conexion , 'SELECT *  FROM INFORMACION_AREAS');
//$stid = oci_parse($conexion , 'SELECT *  FROM INFORMACION_MODALIDAD');
//$stid = oci_parse($conexion , 'SELECT *  FROM MODALIDAD');
//$stid = oci_parse($conexion , 'SELECT *  FROM PAIS');
//$stid = oci_parse($conexion , 'SELECT *  FROM POSTGRADO');
//$stid = oci_parse($conexion , 'SELECT *  FROM POSTGRADO_INSTITUCIONES');
//$stid = oci_parse($conexion , 'SELECT *  FROM POSTGRADO_UTPL');
//$stid = oci_parse($conexion , 'SELECT *  FROM PREGRADO');
//$stid = oci_parse($conexion , 'SELECT *  FROM PRE_POSTGRADO');
//$stid = oci_parse($conexion , 'SELECT *  FROM REGISTRO_USUARIO');
//$stid = oci_parse($conexion , 'SELECT *  FROM TIPO');
//$stid = oci_parse($conexion , 'SELECT *  FROM TIPO_INFORMACION');
//$stid = oci_parse($conexion , 'SELECT *  FROM TITULO');
//$stid = oci_parse($conexion , 'SELECT *  FROM TRABAJO_ACTUAL');
//$stid = oci_parse($conexion , 'SELECT *  FROM USUARIO');
//$stid = oci_parse($conexion , 'SELECT *  FROM USUARIO_POSTGRADOUTPL');



oci_execute($stid);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n"; 
?>
 
