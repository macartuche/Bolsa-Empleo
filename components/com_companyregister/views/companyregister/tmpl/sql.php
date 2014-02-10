<?php
//Abrir conexion mysql al servidor
$connection=mysql_connect ("localhost", "wutoloja_bolsa", "loja09wuto");
if (!$connection) {
  die('Not connected : ' . mysql_error());
}
//Seleccionamos la base de datos
$db_selected = mysql_select_db("wutoloja_bolsaDB", $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}
//Seleccionamos la la tabla de la dase datos
$query = "SELECT * FROM jos_jobs_companies WHERE 1";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}
$contaux = 0;
while ($row = @mysql_fetch_assoc($result))
{
	if ($contaux%2==0)
	{
		echo "<tr>";
		echo "</tr>";
	}
	else
	{
		echo "<tr>";
		echo "<td>";
		echo "<img src=/images/stories/jobs/logos/".$row['logo'].">";
		echo "</td>";
		echo "<td>";
		echo "<label><strong>Empresa:</strong> </label>";
		echo $row['title'];
		echo "<br />";
		echo "<label><strong>Representante:</strong> </label>";
		echo $row['contactname'];
		echo "<br />";
		echo "<label><strong>Sitio web:</strong> </label>";
		echo "<a href='http://".$row['companyurl']."' target='_blank'>".$row['companyurl']."</a>";
		echo "<br />";
		echo "<label><strong>Descripción:</strong> </label>";
		echo $row['description'];
		echo "<br />";
		echo "</td>";
		echo "</tr>";
	}
	$contaux = $contaux + 1;
}
?>