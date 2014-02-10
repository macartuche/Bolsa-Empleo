<?php
include ("config.php");
$q = $_GET['q'];
if (strlen($q) > 2)
{
	extraer($q);
}
?>
