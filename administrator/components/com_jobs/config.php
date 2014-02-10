<style type="text/css">
#contentresultuser
{
	width:500px;
	height:auto;
	font-family:helvetica;
	font-size:12px;
	border-color:#06F solid 1px;
}
#btnselecteduser
{
	background: url("images/bg_btn.gif") repeat-x scroll 0 0 #FF7D00 !important;
    border-color: #FFCC66 #CC3300 #CC3300;
    border-radius: 5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
    border-style: solid;
    border-width: 1px;
    color: #FFFFFF;
    font-size: 12px;
	margin:10px;
    font-weight: bold;
    width: auto;
}
</style>

</script>
<?php
include("../../../configuration.php");
$config = new JConfig();

$conexion = $config->host;
$user = $config->user;
$pass = $config->password;
$bd = $config->db;



if (!@mysql_connect($conexion, $user, $pass))
{
	print "Error de conexión";
}
else
{
	if(!@mysql_select_db($bd))
	{
		print "No existe la base de datos";
	}
}

function extraer($q)
{ 
	$sql= mysql_query("SELECT * FROM jos_users WHERE name LIKE '$q%'");
	if (mysql_num_rows($sql)==0)
	{ 
	print("No se encontraron resultados");
	}
	else
	{
		echo "<form name='miForm' action=''>"; 
		while ($row=mysql_fetch_assoc($sql))
		{	
			echo "<div id='contentresultuser'>";		
			echo "<input type=\"radio\" value=".$row['id']." id='MiRadio' name='MiRadio' onclick='seleccionar(this.value);' >";
			echo $row["name"]. '<br />';
			echo "</div>";
		}
		echo "<input id='valorrecojido' class='valorrecojido' value='' type='hidden'>";
		echo "<input type='submit' onclick='ponerValor();self.close();' name='Seleccionar' id='btnselecteduser'>"; 
		echo "</form>"; 
	}	
}
?>