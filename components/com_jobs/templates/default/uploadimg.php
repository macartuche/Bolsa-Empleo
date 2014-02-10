<?php
global $_db;
$conexion = mysql_connect("localhost", "wutoloja_bolsa", "loja09wuto");
mysql_select_db("wutoloja_bolsaDB", $conexion);
$sql="UPDATE #__jobs_resumes SET thumb_img_r = '$nuevaimg' WHERE id=".$id;
$_db->query($sql);
$_db->setQuery();
?>
<body>
<input type="file" name="db_logo" size="32" value="<?php echo $logo;?>"/>
<input type="hidden" value="<?php echo $logo;?>" name="old_logo"/>
</body>
</html>
