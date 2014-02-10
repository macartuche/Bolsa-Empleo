<?php
$latitud = $_GET['latitud'];
$longitud = $_GET['longitud'];
$conexion = mysql_connect("localhost", "wutoloja_bolsa", "loja09wuto");
mysql_select_db("wutoloja_bolsaDB", $conexion);
$db = mysql_query("INSERT INTO jos_jobs_companies (lat, lng) VALUES ('".$latitud."','".$longitud."');");
?>