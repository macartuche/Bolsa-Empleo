<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php
$mydb =& JFactory::getDBO();
$query = 'SELECT * FROM #__jobs_companies WHERE 1';
$mydb->setQuery($query);
$empresasReg = $mydb->loadObjectList();  
?>
<link rel="stylesheet" href="<?php echo JURI::base(); ?>components/com_jobs/templates/default/default.css" type="text/css" />
<body>
<br />
<div id="linkredirectresume">
		<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&Itemid=6" id="titletopfrontal" />
			<img title="Regresar a herramientas del empleador" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
            <?php echo Atrás;?>
		</a>
	</div>
<br /><br />
<table cellspacing="0" border="0" style="border-collapse: separate" id="tools_employees">
	<thead>
		<tr>
			<th colspan="5">
          		<strong>Empresas registradas</strong>
          	</th>
		</tr>
	</thead>
    <tbody>
    <tr valign="top">
    <?php
		$contaux = 1;
		if(!empty($empresasReg)){

			foreach ($empresasReg as $empresa) {
				if ($contaux > 2) 
				{
	  				echo "</tr><tr valign='top'>";
	  				$contaux = 1;
	 			}  
	 			echo "<td class='textresult' width='50%'>";
					echo "<div id='imgfrontcompanydefault'>";
						echo "<img src=/images/stories/jobs/logos/".$empresa->logo.">";
					echo "</div>";
					echo "<div>";
						echo "<label><strong>Empresa:</strong> </label>";
						echo $empresa->title;
						echo "<br />";
						echo "<label><strong>Representante:</strong> </label>";
						echo $empresa->contactname;
					echo "<br />";
					echo "<label><strong>Sitio web:</strong> </label>";
					echo "<a href='".$empresa->companyurl."' target='_blank'>".$empresa->companyurl."</a>";
					echo "<br />";
					echo "<label><strong>Descripción:</strong> </label>";
					echo strip_tags($empresa->description);
					echo "</div>";
					echo "<br />";
				echo "</td>";
				$contaux++;
			}
		}		 
		?>
        </tr>
  	</tbody>
</table>
<br /><br /><br /><br />
</body>
</html>