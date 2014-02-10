<?php
//Abrir conexion mysql al servidor 
$mydb =& JFactory::getDBO();
$query = 'SELECT * FROM #__jobs_companies WHERE 1';
$mydb->setQuery($query);
$empresasReg = $mydb->loadObjectList(); 
foreach ($empresasReg as $empresa) {  
	echo"<div id='resultcompanies' style='margin:10px;'>";
		echo"<div id='logocompanyregister'>";
		echo "<img src=../../../../../images/stories/jobs/logos/".$empresa->thumb_img.">";
		echo"</div>";
		echo" <div id='contentcompany' style='margin-left: 80px; margin-top:-60px;'>";
       		echo"<h2 style='font-size: 12px;'>";
           		echo"<label><strong>Empresa:</strong> </label>";
				echo $empresa->title;
				echo "<br />";
				echo"<label style='font-weight:100';><strong>Representante:</strong> </label>";
				echo $empresa->contactname;
				echo"<br />";
				echo"<label><strong>Sitio web:</strong> </label>";
				echo "<a href='http://".$empresa->companyurl."' target='_blank'>".$empresa->companyurl."</a>";
				echo"<br />";
				echo"<label><strong>Descripción:</strong> </label>";
				echo strip_tags($empresa->description);
				echo"<br />";
        	echo"</h2>";
      	echo"</div>";
	echo "</div>";
	echo"<br />";
}
 
?>