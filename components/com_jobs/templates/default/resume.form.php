<style type="text/css">
.titulostables
{
	color:#000;
}
.titulofielset
{
	margin:10px;
	margin-right:50px;
}
.titulosfielsetempleo
{
	margin-right:-5px;
}
.adminform
{
	margin-right:-25px;
	margin-left:10px;
}
.titulosfielsetempleo {
    margin-right: 10px;
}
</style>
<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); 
}			
?>
<div id="linkredirectresume">
	<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&task=worker&Itemid=2" id="titletopfrontal" />
<img title="Regresar a herramientas del buscador de empleo" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
	<?php echo _lkn_backfrontal;?>
    </a>
</div>
<div id="titledemo1" style="width:100%;">
<h1 style="text-align:center;"><?php echo $action;?></h1><br />
</div>
<?php echo $js;?>
<form action="index.php" method="post" id="adminForm" name="adminForm" enctype="multipart/form-data" onSubmit="return validateFormOnSubmit(this)" > 
	<?php
	global $_db, $_config;
	$sql = "select * from #__jobs_resumes where id='$id'";
	$_db->query($sql);
	$_db->setQuery(); 
	$row2=$_db->loadObjectList();
	?> 
    <?php $count_cats=count($row_cats); 
	if ($count_cats>0) {
		lknTabs::startTabPanel(0);
	lknTabs::startTab ("Datos Personales"); 
	?>
    <table width="782" border="0" >
      <tr>
        <td colspan="4">
        <p style="margin-left:30px;">
        Los campos de color <span class="obligatorio">naranja</span> son obligatorios.</p></td>
      </tr>
      <tr>
        <td width="24">&nbsp;</td>
        <td width="304" class="obligatorio"><span style="color:#FF9900;" class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese su nombre completo, por ejemplo Luis Romero', CAPTION, 'Información', BELOW, RIGHT);">Nombre Completo</span></td>
        <td width="41">&nbsp;</td>
        <td width="385" class="obligatorio"><span style="color:#FF9900;" class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('Ingrese su correo electrónico', CAPTION, 'Información', BELOW, RIGHT);">Correo Electrónico</span></td>
      </tr>
      <tr>
        <td></td>
        <td><input name="db_name" type="text" class="text_area" id="db_name" value="<?php echo $row2[0]->name; ?>" size="50" maxlength="255" /></td>
        <td>&nbsp;</td>
        <td>
        <input type="text" class="text_area" size="50" maxlength="255" name="db_email_address" 
        value="<?php echo $row2[0]->email_address; ?>" />
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="obligatorio"><span style="color:#FF9900;" class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el título para éste Curriculum', CAPTION, 'Información', BELOW, RIGHT);"> Título del Curriculum</span><br />
        <span style=" color: #000000; font-weight: lighter;">
        Si eres estudiante mencionar: Carrera y ciclo.
        </span>
        </td>
        <td>&nbsp;</td>
        <td><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Puede ingresar un alias o dejar vacio. Si deja vacio se generara automáticamente. Alias es usado para crear URL amigables', CAPTION, 'Información', BELOW, RIGHT);">Alias</span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="text" class="text_area" size="50" maxlength="50" name="db_title" value="<?php echo $row2[0]->title; ?>" /></td>
        <td>&nbsp;</td>
        <td><input name="db_alias" type="text" class="text_area" value="<?php echo $row2[0]->alias; ?>" size="50" maxlength="255" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="obligatorio"><span style="color:#FF9900;" class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Seleccione el tipo de trabajo que esta buscando', CAPTION, 'Información', BELOW, RIGHT);">Tipo de trabajo que busca</span></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><select id="db_job_type" name="db_job_type">
          <option></option>
          <?php 
			  if($row2[0]->job_type==1)
			  {
				  echo "<option value='1' selected='selected'>Temporalmente</option>"; 
			  }
			  else 
			  {
				  echo "<option value='1'>Temporalmente</option>"; 
			  }
			  if($row2[0]->job_type==2)
			  {
				  echo "<option value='2' selected='selected'>Estudiante</option>"; 
			  }
			  else 
			  {
				  echo "<option value='2'>Estudiante</option>";
			  } 
			 /*?> if($row2[0]->job_type==3)
			  {
				  echo "<option value='3' selected='selected'>Interno</option>";
			  }
			  else 
			  {
				  echo "<option value='3'>Interno</option>";
			  } 	
			 /*?>  if($row2[0]->job_type==4)
			  {
				  echo "<option value='4' selected='selected'>Contrato</option>"; 
			  }
			  else 
			  {
				  echo "<option value='4'>Contrato</option>"; 
			  }<?php */
			  if($row2[0]->job_type==5){ echo "<option value='5' selected='selected'>Medio Tiempo</option>"; }
			  else { echo "<option value='5'>Medio Tiempo</option>"; } 
			  if($row2[0]->job_type==6){ echo "<option value='6' selected='selected'>Tiempo Completo</option>"; }
			  else { echo "<option value='6'>Tiempo Completo</option>"; }
			  ?>
        </select></td>
        <td>&nbsp;</td>
        <!--<?php  //if($row2[0]->published==''){$row2[0]->published=1;} 	?>
          <select id="db_published" name="db_published">
            <?php 				  
                                 // if($row2[0]->published==1){ echo "<option value='1' selected='selected'>Acepto los terminos y condiciones</option>"; }
                                 // else {  echo "<option value='1' selected='selected'>Published</option>"; }
                                 // if($row2[0]->published==0){ echo "<option value='0' selected='selected'>Unpublished</option>"; }
                                
								//  else { echo "<option value='0'>No acepto los terminos y condicones/Mi CV no sera publicado</option>"; } 
                                 // if($row2[0]->published==-2){ echo "<option value='-2' selected='selected'>Deleted by user</option>"; }
                                  //else { echo "<option value='-2'>Deleted by user</option>"; } 	
                                  ?>
          </select>-->
      </tr>
      <tr>
      <td>&nbsp;</td>
        <td class="obligatorio"><span style="color:#FF9900;" class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese su Idioma', CAPTION, 'Información', BELOW, RIGHT);">Idioma</span></td>
        <td>&nbsp;</td>
        <td class="obligatorio"><span style="color:#FF9900;" class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese su estado civil', CAPTION, 'Información', BELOW, RIGHT);">Estado Civil</span></td>
      </tr>
      
      
      <tr>
        <td>&nbsp;</td>
        <td><input name="db_language" type="text" class="text_area" value="<?php echo $row2[0]->language; ?>" size="50" maxlength="30" /></td>
        <td>&nbsp;</td>
        <td>
        <select size="1" name="db_civil" id="db_civil">
          <?php $selectedCivil = ($row2[0]->civil == "Soltero(a)")? 'selected="selected"': ''  ?>
          <option <?php echo $selectedCivil;?> >Soltero(a)</option>
          <?php $selectedCivil = ($row2[0]->civil == "Casado(a)")? 'selected="selected"': ''  ?>
          <option <?php echo $selectedCivil;?> >Casado(a)</option>
          <?php $selectedCivil = ($row2[0]->civil == "Divorciado(a)")? 'selected="selected"': ''  ?>
          <option <?php echo $selectedCivil;?> >Divorciado(a)</option>
          <?php $selectedCivil = ($row2[0]->civil == "Viudo(a)")? 'selected="selected"': ''  ?>
          <option <?php echo $selectedCivil;?> >Viudo(a)</option>
          <?php $selectedCivil = ($row2[0]->civil == "Religioso(a)")? 'selected="selected"': ''  ?>
          <option <?php echo $selectedCivil;?> >Religioso(a)</option>
          <?php $selectedCivil = ($row2[0]->civil == "Union Libre")? 'selected="selected"': ''  ?>
          <option <?php echo $selectedCivil;?> >Union Libre</option>
        </select>	
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la ciudad en la que vive', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
        <td>&nbsp;</td>
        <td><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el estado o provincia', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name="db_city" type="text" class="text_area" id="db_city" value="<?php echo $row2[0]->city; ?>" size="50" maxlength="255" /></td>
        <td>&nbsp;</td>
        <td><input name="db_state" type="text" class="text_area" id="db_state" value="<?php echo $row2[0]->state; ?>" size="50" maxlength="20" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese su dirección actual', CAPTION, 'Información', BELOW, RIGHT);">Dirección</span></td>
        <td>&nbsp;</td>
        <td><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese su código postal', CAPTION, 'Información', BELOW, RIGHT);">Código Postal</span></td>
      </tr>
      <tr>
        <td height="26">&nbsp;</td>
        <td rowspan="3"><textarea class="text_area" name="db_street" rows="3" cols="43" onKeyUp="return ismaxlength(this);" va="va" id="db_street" ><?php echo $row2[0]->street; ?></textarea></td>
        <td>&nbsp;</td>
        <td><input name="db_zip_code" type="text" class="text_area" id="db_zip_code" value="<?php echo $row2[0]->zip_code; ?>" size="50" maxlength="20" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td rowspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Tiene licencia para conducir?', CAPTION, 'Información', BELOW, RIGHT);">¿Tiene licencia para conducir?</span></td>
        <td>&nbsp;</td>
        <td><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('Si tiene licencia de conducir, ingrese el número', CAPTION, 'Información', BELOW, RIGHT);">Número licencia de conducir en caso de tener</span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><select id="db_lknjobs_dl" name="db_lknjobs_dl">
          <option></option>
          <?php 
				  if($row2[0]->lknjobs_dl=='Si'){ echo "<option value='Yes' selected='selected'>Si</option>"; }
				  else {  echo "<option value='Si'>Si</option>"; }
				  if($row2[0]->lknjobs_dl=='No'){ echo "<option value='No' selected='selected'>No</option>"; }
				  else { echo "<option value='No'>No</option>"; } 
				  
			  ?>
        </select></td>
        <td>&nbsp;</td>
        <td><input type="text" class="text_area" size="50" maxlength="255" name="db_lknjobs_dlnumber" value="<?php echo $row2[0]->lknjobs_dlnumber; ?>" id="db_lknjobs_dlnumber" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td></td>
        <td>&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Escriba sus habilidades de trabajo como por ejemplo conocimientos informáticos, etc', CAPTION, 'Información', BELOW, RIGHT);">Habilidades</span></td>
        <td>&nbsp;</td>
        <td class="obligatorio"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Puede cargar una imagen para su Curriculum. Click sobre el botón y seleccione la imagen de su computadora', CAPTION, 'Información', BELOW, RIGHT);" style="color:#FF9900;">Fotografía</span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><textarea class="text_area" name="db_skills" rows="5" cols="43" id="db_skills" 
									  ><?php echo $row2[0]->skills; ?></textarea></td>
        <td>&nbsp;</td>
        <td><input type="file" name="db_image" title="Elige una imagen para subir" size="36" class="text_area" id="db_image" />
          <input type="hidden" id="old_image" name="old_image" value="<?php echo $row2[0]->image?>" /><br />
          	<span style="color:#FF9900;">
          		<h4 style="width:320px;">
                    Únicamente se permiten los extensiones jpeg,jpg,png,
                    gif como tipos de imágenes. Tiene permitido cargar 
                    una imagen de 128x128 pixeles.                               
             	</h4>
       		</span>
          </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
			<?php
				$imagen_cv = $_config ['resume_image_folder'];
				$allowed_images = $_config ['allowedimages'];
				$image_size = $_config ['uploadSizeLimit'];
				$logo_folder = LIVE_SITE . $logo_folder;
			?>
          	<img src="<?php	echo $logo_folder . $imagen_cv . $row2[0]->image;?>" name="imagelib" 
            width="80" height="80" border="2" id="imagelib" />
      	</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <?php
		lknTabs::endTab ();					 
		lknTabs::startTab ("Contactos"); 
	?>
    <table width="718" border="0">
      <tr><td>&nbsp;</td></tr>
      <tr>
        <td width="24">&nbsp;</td>
        <td colspan="2"><p><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese número de teléfono de su casa', CAPTION, 'Información', BELOW, RIGHT);">Teléfono de Casa</span></p></td>
        <td width="12">&nbsp;</td>
        <td width="301"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Si actualmente trabaja, registre el teléfono de su trabajo', CAPTION, 'Información', BELOW, RIGHT);">Teléfono de Trabajo Actual</span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><input name="db_home_phone" type="text" class="text_area" id="db_home_phone" value="<?php echo $row2[0]->home_phone; ?>" size="50" maxlength="20" /></td>
        <td>&nbsp;</td>
        <td><input name="db_work_phone" type="text" class="text_area" id="db_work_phone" value="<?php echo $row2[0]->work_phone; ?>" size="50" maxlength="20" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Su número de celular', CAPTION, 'Información', BELOW, RIGHT);">Número de Celular</span></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2" ><input name="db_cell_phone" type="text" class="text_area" id="db_cell_phone" value="<?php echo $row2[0]->cell_phone; ?>" size="50" maxlength="20" /></td>
        <td>&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>

      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Fecha de creación del Curriculum', CAPTION, 'Información', BELOW, RIGHT);">Fecha de Creación</span></td>
        <td>&nbsp;</td>
        <td><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Fecha de la ultima modificación', CAPTION, 'Información', BELOW, RIGHT);">Última Modificación</span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2">
      <!--<input type="reset" value=" ... " onClick="return showCalendar('db_created', '%Y-%m-%d %H:%M:%S', '24', true);" />-->
      <?php echo $row2[0]->created; ?>
      	</td>
        <td>&nbsp;</td>
        <td><?php echo $row2[0]->update_date;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2" class="obligatorio"></td>
        <td>&nbsp;</td>
        <!--<td><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¡Cuantas veces a sido visitado?', CAPTION, 'Información', BELOW, RIGHT);">Resume Hits</span></td>-->
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('¿Usted actualmente trabaja?', CAPTION, 'Información', BELOW, RIGHT);">Trabaja Actualmente</span></td>
        <td>&nbsp;</td>
        <td><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('Fecha desde la que puede empezar a trabajar', CAPTION, 'Información', BELOW, RIGHT);">Fecha en que puede empezar a trabajar</span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><select id="db_lknjobs_currentlyworking" name="db_lknjobs_currentlyworking">
          <option></option>
          <?php 
				  if($row2[0]->lknjobs_currentlyworking=='Yes'){ echo "<option value='Yes' selected='selected'>Si</option>"; }
				  else {  echo "<option value='Yes'>Si</option>"; }
				  if($row2[0]->lknjobs_currentlyworking=='No'){ echo "<option value='No' selected='selected'>No</option>"; }
				  else { echo "<option value='No'>No</option>"; } 
				  
			  ?>
        </select></td>
        <td>&nbsp;</td>
        <td><input type="text" value="<?php echo $row2[0]->created; ?>" maxlength="100" size="30" id="db_available_date" name="db_available_date"/>
          <input type="reset" value="..." onClick="return showCalendar('db_available_date', '%Y-%m-%d', '24', true);" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
 <!--       <td colspan="2"><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('Si existe una razon de indisponibilidad, ingresela aquí', CAPTION, 'Información', BELOW, RIGHT);">Indisponibilidad</span></td>-->
        <td><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('Salario que desea ganar por realizar el trabajo', CAPTION, 'Información', BELOW, RIGHT);">Aspiración Salarial</span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
     <!--   <td colspan="2" rowspan="3">
        	<textarea class="text_area" name="db_unavailability" rows="3" cols="40" 
            onkeyup="return ismaxlength(this);" >
			<?php //echo $row2[0]->unavailability; ?>
            </textarea>
      	</td>-->
        <td><input type="text" class="text_area" size="50" maxlength="255" name="db_desired_pay" value="<?php echo $row2[0]->desired_pay; ?>" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><p>&nbsp;</p>
        <p><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('¿Puede trabajar los fines de semana y noches?', CAPTION, 'Información', BELOW, RIGHT);">¿Puede trabajar los fines de semana y noches?</span></p></td>
        <td>&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
			<?php
			if ($row2[0]->lknjobs_canwork[0]=="E")
			{ 
			echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Evening' name='db_lknjobs_canwork[]' />";
			}
			else {
			echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Evening' name='db_lknjobs_canwork[]' />";
			}
			?>
          Noches
      	</td>
        <td>
			<?php
			if ($row2[0]->lknjobs_canwork[8]=="W" || $row2[0]->lknjobs_canwork[0]=="W")
			{ 
			echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Weekdays' name='db_lknjobs_canwork[]' />";
			}
			else {
			echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Weekdays' name='db_lknjobs_canwork[]' />";
			}
              ?>
          Fines de Semana</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><p>&nbsp;</p>
        <p><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('¿Qué días puede trabajar?', CAPTION, 'Información', BELOW, RIGHT);">Disponible</span></p></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">
          <?php 
			  if ($row2[0]->lknjobs_available[0]=="L")
			  { 
			  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Lunes' name='db_lknjobs_available[]' />";
			  }
			  else {
			  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Lunes' name='db_lknjobs_available[]' />";
			  }?>
	Lunes
	<?php 
			  if ($row2[0]->lknjobs_available[1]=="a" || $row2[0]->lknjobs_available[7]=="a")
			  { 
			  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Martes' name='db_lknjobs_available[]' />";
			  }
			  else {
			  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Martes' name='db_lknjobs_available[]' />";
			  }?>
          Martes
          <?php 
			  if (
			  ($row2[0]->lknjobs_available[0]=="M") && ($row2[0]->lknjobs_available[1]=="i") || 
			  ($row2[0]->lknjobs_available[13]=="M") && ($row2[0]->lknjobs_available[14]=="i") ||
			  ($row2[0]->lknjobs_available[6]=="M") && ($row2[0]->lknjobs_available[7]=="i") ||
			  ($row2[0]->lknjobs_available[7]=="M") && ($row2[0]->lknjobs_available[8]=="i")
			  )
			  { 
			  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Miércoles' name='db_lknjobs_available[]' />";
			  }
			  else {
			  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Miércoles' name='db_lknjobs_available[]' />";
			  }
			  ?>
	Miércoles
	<?php 
			  if (
			  $row2[0]->lknjobs_available[0]=="J" ||
			  $row2[0]->lknjobs_available[24]=="J" ||
			  $row2[0]->lknjobs_available[13]=="J" ||
			  $row2[0]->lknjobs_available[6]=="J" ||
			  $row2[0]->lknjobs_available[7]=="J" ||
			  $row2[0]->lknjobs_available[11]=="J" ||
			  $row2[0]->lknjobs_available[17]=="J" ||
			  $row2[0]->lknjobs_available[18]=="J"
			  )
			  { 
			  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Jueves' name='db_lknjobs_available[]' />";
			  }
			  else {
			  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Jueves' name='db_lknjobs_available[]' />";
			  }
			  ?>
	Jueves
	<?php 
			  if (
			  $row2[0]->lknjobs_available[0]=="V" ||
			  $row2[0]->lknjobs_available[31]=="V" ||
			  $row2[0]->lknjobs_available[13]=="V" ||
			  $row2[0]->lknjobs_available[6]=="V" ||
			  $row2[0]->lknjobs_available[7]=="V" ||
			  $row2[0]->lknjobs_available[11]=="V" ||
			  $row2[0]->lknjobs_available[17]=="V" ||
			  $row2[0]->lknjobs_available[18]=="V" ||
			  $row2[0]->lknjobs_available[24]=="V" ||
			  $row2[0]->lknjobs_available[25]=="V" ||
			  $row2[0]->lknjobs_available[20]=="V" ||
			  $row2[0]->lknjobs_available[14]=="V"
			  )
			  { 
			  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Viernes' name='db_lknjobs_available[]' />";
			  }
			  else {
			  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Viernes' name='db_lknjobs_available[]' />";
			  }
			  ?>
	Viernes
	<?php 
			  if (
			  $row2[0]->lknjobs_available[0]=="S"  ||
			  $row2[0]->lknjobs_available[39]=="S" ||
			  $row2[0]->lknjobs_available[31]=="S" ||
			  $row2[0]->lknjobs_available[13]=="S" ||
			  $row2[0]->lknjobs_available[6]=="S"  ||
			  $row2[0]->lknjobs_available[7]=="S"  ||
			  $row2[0]->lknjobs_available[11]=="S" ||
			  $row2[0]->lknjobs_available[17]=="S" ||
			  $row2[0]->lknjobs_available[18]=="S" ||
			  $row2[0]->lknjobs_available[24]=="S" ||
			  $row2[0]->lknjobs_available[25]=="S" ||
			  $row2[0]->lknjobs_available[20]=="S" ||
			  $row2[0]->lknjobs_available[14]=="S" ||
			  $row2[0]->lknjobs_available[15]=="S" ||
			  $row2[0]->lknjobs_available[21]=="S" ||
			  $row2[0]->lknjobs_available[16]=="S" ||
			  $row2[0]->lknjobs_available[33]=="S" ||
			  $row2[0]->lknjobs_available[26]=="S" ||
			  $row2[0]->lknjobs_available[8]=="S"
			  )
			  { 
			  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Sábado' name='db_lknjobs_available[]' />";
			  }
			  else {
			  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Sábado' name='db_lknjobs_available[]' />";
			  }
			  ?>
          Sábado</td>
      </tr>
    </table>
    <?php
		lknTabs::endTab ();
		lknTabs::startTab ( "Estudios" ); 
	?>
    <table height="618" border="0">
      <tr>
        <td height="74" ><fieldset class="titulofielset">
          <legend>Colegio </legend>
          <table width="779" border="0">
            <tr>
              <td width="148"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el nombre del Colegio', CAPTION, 'Información', BELOW, RIGHT);">Nombre del Colegio</span></td>
              
              <td width="96"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Actualmente es un estudiante o graduado?', CAPTION, 'Información', BELOW, RIGHT);">Diploma</span></td>
              
              <td width="126"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la Ciudad donde se encuentra el Colegio', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
              
              <td width="391"><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('Ingrese la Provincia donde se encuentra el Colegio', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
            </tr>
            <tr>
              
              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_school" value="<?php echo $row2[0]->school; ?>" /></td>
              
              <td><select id="db_lknjobs_schooldiploma" name="db_lknjobs_schooldiploma" >
                <option></option>
                <?php 
                                  if($row2[0]->lknjobs_schooldiploma=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
                                  else {  echo "<option value='Graduado'>Graduado</option>"; }
                                  if($row2[0]->lknjobs_schooldiploma=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
                                  else { echo "<option value='Estudiante'>Estudiante</option>"; } 
                                  
                                  ?>
              </select></td>
              
              <td><input type="text" class="text_area" size="15" maxlength="255" name="db_school_city" value="<?php echo $row2[0]->school_city; ?>" /></td>
              
              <td><input type="text" class="text_area" size="15" maxlength="255" name="db_school_state" value="<?php echo $row2[0]->school_state; ?>" /></td>
            </tr>
          </table>
        </fieldset></td>
      </tr>
      <tr>
       <td height="74">
        <fieldset class="titulofielset">
          <legend>Universidad</legend>
          <table border="0">
            <tr>
              <td width="160"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el nombre de la Universidad', CAPTION, 'Información', BELOW, RIGHT);">Nombre de la Universidad</span></td>
             
              <td width="69"><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('¿Actualmente es un estudiante o graduado?', CAPTION, 'Información', BELOW, RIGHT);">Estado academico</span></td>
              <td width="13">&nbsp;</td>
              <td width="112"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la Ciudad donde se encuentra la Universidad', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
              <td width="13">&nbsp;</td>
              <td width="97"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la Provincia donde se encuentra la Universidad', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
              <td width="9">&nbsp;</td>
              <td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Año que estudio en la Institución', CAPTION, 'Información', BELOW, RIGHT);">Año</span></td>
              <td width="10">&nbsp;</td>
              <td width="131"><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('Área que estudio en la Institución', CAPTION, 'Información', BELOW, RIGHT);">Título obtenido</span></td>
            </tr>
            <tr>
              <td>
              <input type="text" class="text_area" size="20" maxlength="255" name="db_school1" value="<?php echo $row2[0]->school1; ?>" />
              </td>
              <td>
              	<select name="db_lknjobs_schooldiplomauniversity" id="db_lknjobs_schooldiplomauniversity">
                <option></option>
                <?php 
				if($row2[0]->lknjobs_schooldiplomauniversity=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
				else {  echo "<option value='Graduado'>Graduado</option>"; }
				if($row2[0]->lknjobs_schooldiplomauniversity=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
				else { echo "<option value='Estudiante'>Estudiante</option>"; } 
				?>
              	</select>
              </td>
              <td>&nbsp;</td>
              <td>
              	<input type="text" class="text_area" size="15" maxlength="255" name="db_school_city1" value="<?php echo $row2[0]->school_city1; ?>" />
            	</td>
              <td>&nbsp;</td>
              <td>
              	<input type="text" class="text_area" size="15" maxlength="255" name="db_school_state1" value="<?php echo $row2[0]->school_state1; ?>" />
           	  </td>
              <td>&nbsp;</td>
              <td>
              	<input type="text" class="text_area" size="20" maxlength="255" name="db_diploma_text1" value="<?php echo $row2[0]->diploma_text1; ?>"/>
              </td>
              <td>&nbsp;</td>
              <td>
                <input type="text" class="text_area" size="20" maxlength="255" name="db_study_area1"  value="<?php echo $row2[0]->study_area1; ?>" />
              </td>
            </tr>
            <tr>
              <td>
              <input type="text" class="text_area" size="20" maxlength="255" name="db_school1a" value="<?php echo $row2[0]->school1a; ?>" />
              </td>
              <td>
              	<select name="db_lknjobs_schooldiplomauniversity1a" id="db_lknjobs_schooldiplomauniversity1a">
                <option></option>
                <?php 
				if($row2[0]->lknjobs_schooldiplomauniversity1a=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
				else {  echo "<option value='Graduado'>Graduado</option>"; }
				if($row2[0]->lknjobs_schooldiplomauniversity1a=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
				else { echo "<option value='Estudiante'>Estudiante</option>"; } 
				?>
              	</select>
              </td>
              <td>&nbsp;</td>
              <td>
              	<input type="text" class="text_area" size="15" maxlength="255" name="db_school_city1a" value="<?php echo $row2[0]->school_city1a; ?>" />
            	</td>
              <td>&nbsp;</td>
              <td>
              	<input type="text" class="text_area" size="15" maxlength="255" name="db_school_state1a" value="<?php echo $row2[0]->school_state1a; ?>" />
           	  </td>
              <td>&nbsp;</td>
              <td>
              	<input type="text" class="text_area" size="20" maxlength="255" name="db_study_area1a"  value="<?php echo $row2[0]->study_area1a; ?>" />
              </td>
              <td>&nbsp;</td>
              <td>
              	<input type="text" class="text_area" size="20" maxlength="255" name="db_diploma_text1a" value="<?php echo $row2[0]->diploma_text1a; ?>"/>
              </td>
            </tr>
          </table>
        </fieldset></td>
      </tr>
      
      <tr>
        <td height="74" ><fieldset class="titulofielset">
          <legend>Estudios de 4to Nivel</legend>
          <table border="0">
            <tr>
             
              <td width="164"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el nombre de la Universidad', CAPTION, 'Información', BELOW, RIGHT);">Nombre de la Universidad</span></td>
              
              <td width="68"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Actualmente es un estudiante o graduado?', CAPTION, 'Información', BELOW, RIGHT);">Estado académico</span></td>
              <td width="10">&nbsp;</td>
              <td width="112"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la Ciudad donde se encuentra el Instituto', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
              <td width="14">&nbsp;</td>
              <td width="97"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la Provincia donde se encuentra la Universidad', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
              <td width="10">&nbsp;</td>
              <td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Año que estudio en el Instituto', CAPTION, 'Información', BELOW, RIGHT);">Año</span></td>
              <td width="10">&nbsp;</td>
              <td width="130"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Área que estudio en el Institución', CAPTION, 'Información', BELOW, RIGHT);">Título obtenido</span></td>
            </tr>
            
        

            <tr>
             
              <td>
            <input name="db_school2" type="text" class="text_area" value="<?php echo $row2[0]->school2; ?>" size="20" maxlength="255" />		
            </td>
              
              <td><select id="db_lknjobs_schooldiplomagrad" name="db_lknjobs_schooldiplomagrad">
                <option></option>
                <?php 
                                  if($row2[0]->lknjobs_schooldiplomagrad=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
                                  else {  echo "<option value='Graduado'>Graduado</option>"; }
                                  if($row2[0]->lknjobs_schooldiplomagrad=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
                                  else { echo "<option value='Estudiante'>Estudiante</option>"; } 
                                  
                                  ?>
              </select></td>
              <td>&nbsp;</td>
              <td><input name="db_school_city2" type="text" class="text_area" value="<?php echo $row2[0]->school_city2; ?>" size="15" maxlength="255" /></td>
              <td>&nbsp;</td>
              <td><input name="db_school_state2" type="text" class="text_area" value="<?php echo $row2[0]->school_state2; ?>" size="15" maxlength="255" /></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_diploma_text2" value="<?php echo $row2[0]->diploma_text2; ?>" /></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_study_area2" value="<?php echo $row2[0]->diploma_text2; ?>" /></td>
            </tr>
            
                <!-- 
                MACF
                2ESTUDIO 4 NIVEL 
                -->
              <tr>
              <td>
            <input name="db_school5" type="text" class="text_area" value="<?php echo $row2[0]->school5; ?>" size="20" maxlength="255" />
              </td>
              
              <td>
              <select id="db_lknjobs_schooldiplomagrad5" name="db_lknjobs_schooldiplomagrad5">
                <option></option>
                <?php 
                                  if($row2[0]->lknjobs_schooldiplomagrad5=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
                                  else {  echo "<option value='Graduado'>Graduado</option>"; }
                                  if($row2[0]->lknjobs_schooldiplomagrad5=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
                                  else { echo "<option value='Estudiante'>Estudiante</option>"; } 
                                  
                                  ?>
              </select></td>
              <td>&nbsp;</td>
              <td><input name="db_school_city5" type="text" class="text_area" value="<?php echo $row2[0]->school_city5; ?>" size="15" maxlength="255" /></td>
              <td>&nbsp;</td>
              <td><input name="db_school_state5" type="text" class="text_area" value="<?php echo $row2[0]->school_state5; ?>" size="15" maxlength="255" /></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_diploma_text5" value="<?php echo $row2[0]->diploma_text5; ?>" /></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_study_area5" value="<?php echo $row2[0]->diploma_text5; ?>" /></td>
            </tr>
            
               <!-- 
                MACF
                3ESTUDIO 4 NIVEL 
                -->
              <tr>
              <td><input name="db_school6" type="text" class="text_area" value="<?php echo $row2[0]->school6; ?>" size="20" maxlength="255" /></td>
              
              <td>
              <select id="db_lknjobs_schooldiplomagrad6" name="db_lknjobs_schooldiplomagrad6">
                <option></option>
                <?php 
                                  if($row2[0]->lknjobs_schooldiplomagrad6=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
                                  else {  echo "<option value='Graduado'>Graduado</option>"; }
                                  if($row2[0]->lknjobs_schooldiplomagrad6=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
                                  else { echo "<option value='Estudiante'>Estudiante</option>"; } 
                                  
                                  ?>
              </select></td>
              <td>&nbsp;</td>
              <td><input name="db_school_city6" type="text" class="text_area" value="<?php echo $row2[0]->school_city6; ?>" size="15" maxlength="255" /></td>
              <td>&nbsp;</td>
              <td><input name="db_school_state6" type="text" class="text_area" value="<?php echo $row2[0]->school_state6; ?>" size="15" maxlength="255" /></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_diploma_text6" value="<?php echo $row2[0]->diploma_text6; ?>" /></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_study_area6" value="<?php echo $row2[0]->diploma_text6; ?>" /></td>
            </tr>
            
            
                <!-- 
                MACF
                4ESTUDIO 4 NIVEL 
                -->
              <tr>
              <td><input name="db_school7" type="text" class="text_area" value="<?php echo $row2[0]->school7; ?>" size="20" maxlength="255" /></td>
              
              <td>
              <select id="db_lknjobs_schooldiplomagrad7" name="db_lknjobs_schooldiplomagrad7">
                <option></option>
                <?php 
                                  if($row2[0]->lknjobs_schooldiplomagrad7=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
                                  else {  echo "<option value='Graduado'>Graduado</option>"; }
                                  if($row2[0]->lknjobs_schooldiplomagrad7=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
                                  else { echo "<option value='Estudiante'>Estudiante</option>"; } 
                                  
                                  ?>
              </select></td>
              <td>&nbsp;</td>
              <td><input name="db_school_city7" type="text" class="text_area" value="<?php echo $row2[0]->school_city7; ?>" size="15" maxlength="255" /></td>
              <td>&nbsp;</td>
              <td><input name="db_school_state7" type="text" class="text_area" value="<?php echo $row2[0]->school_state7; ?>" size="15" maxlength="255" /></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_diploma_text7" value="<?php echo $row2[0]->diploma_text7; ?>" /></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_study_area7" value="<?php echo $row2[0]->diploma_text7; ?>" /></td>
            </tr>
            
				<!-- 
                MACF
                5ESTUDIO 4 NIVEL 
                -->
              <tr>
              <td><input name="db_school8" type="text" class="text_area" value="<?php echo $row2[0]->school8; ?>" size="20" maxlength="255" /></td>
              
              <td>
              <select id="db_lknjobs_schooldiplomagrad8" name="db_lknjobs_schooldiplomagrad8">
                <option></option>
                <?php 
                                  if($row2[0]->lknjobs_schooldiplomagrad8=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
                                  else {  echo "<option value='Graduado'>Graduado</option>"; }
                                  if($row2[0]->lknjobs_schooldiplomagrad8=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
                                  else { echo "<option value='Estudiante'>Estudiante</option>"; } 
                                  
                                  ?>
              </select></td>
              <td>&nbsp;</td>
              <td><input name="db_school_city8" type="text" class="text_area" value="<?php echo $row2[0]->school_city8; ?>" size="15" maxlength="255" /></td>
              <td>&nbsp;</td>
              <td><input name="db_school_state8" type="text" class="text_area" value="<?php echo $row2[0]->school_state8; ?>" size="15" maxlength="255" /></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_diploma_text8" value="<?php echo $row2[0]->diploma_text8; ?>" /></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_study_area8" value="<?php echo $row2[0]->diploma_text8; ?>" /></td>
            </tr>            
          </table>
        </fieldset></td>
      </tr>
      <tr>
        <td height="74"><fieldset class="titulofielset">
          <legend>Otros Estudios</legend>
          <table width="771" border="0">
            <tr>
              
              <td width="165"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el nombre de la Universidad', CAPTION, 'Información', BELOW, RIGHT);">Nombre de la Universidad</span></td>
              
              <td width="68"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Actualmente es un estudiante o graduado?', CAPTION, 'Información', BELOW, RIGHT);">Estado académico</span></td>
              <td width="12">&nbsp;</td>
              <td width="112"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la Ciudad donde se encuentra el Instituto', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
              <td width="10">&nbsp;</td>
              <td width="99"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la Provincia donde se encuentra la Universidad', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
              <td width="10">&nbsp;</td>
              <td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Año que estudio en el Instituto', CAPTION, 'Información', BELOW, RIGHT);">Año</span></td>
              <td width="10">&nbsp;</td>
              <td width="123"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Área que estudio en la Institución', CAPTION, 'Información', BELOW, RIGHT);">Título obtenido</span></td>
            </tr>
            <tr>
              
              <td><input name="db_school3" type="text" class="text_area" size="20" value="<?php echo $row2[0]->school3; ?>" /></td>
              
              <td><select id="db_lknjobs_schooldiplomaother" name="db_lknjobs_schooldiplomaother">
                <option></option>
                <?php 
				if($row2[0]->lknjobs_schooldiplomaother=='Graduate'){ echo "<option value='Graduate' selected='selected'>Graduado</option>"; }
				else {  echo "<option value='Graduate'>Graduado</option>"; }
				if($row2[0]->lknjobs_schooldiplomaother=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
				else { echo "<option value='Estudiante'>Estudiante</option>"; } 
				
				?>
              </select></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="15" maxlength="255" name="db_school_city3" value="<?php echo $row2[0]->school_city3; ?>" /></td>
              <td>&nbsp;</td>
              <td><span class="adminlist">
                <input type="text" class="text_area" size="15" maxlength="255" name="db_school_state3" value="<?php echo $row2[0]->school_state3; ?>" />
              </span></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="20" maxlength="255"  name="db_diploma_text3" value="<?php echo $row2[0]->diploma_text3; ?>" /></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_study_area3" value="<?php echo $row2[0]->study_area3; ?>" /></td>
            </tr>
            
            
            <!--
            MACF
             2OTROS ESTUDIOS
            -->
             <tr>
              
              <td><input name="db_school9" type="text" class="text_area" size="20" value="<?php echo $row2[0]->school9; ?>" /></td>
              
              <td><select id="db_lknjobs_schooldiplomaother9" name="db_lknjobs_schooldiplomaother9">
                <option></option>
                <?php 
				if($row2[0]->lknjobs_schooldiplomaother9=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
				else {  echo "<option value='Graduado'>Graduado</option>"; }
				if($row2[0]->lknjobs_schooldiplomaother9=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
				else { echo "<option value='Estudiante'>Estudiante</option>"; } 
				
				?>
              </select></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="15" maxlength="255" name="db_school_city9" value="<?php echo $row2[0]->school_city9; ?>" /></td>
              <td>&nbsp;</td>
              <td><span class="adminlist">
                <input type="text" class="text_area" size="15" maxlength="255" name="db_school_state9" value="<?php echo $row2[0]->school_state9; ?>" />
              </span></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="20" maxlength="255"  name="db_diploma_text9" value="<?php echo $row2[0]->diploma_text9; ?>" /></td>
              <td>&nbsp;</td>
              <td><input type="text" name="db_study_area9" class="text_area" size="20" maxlength="255" value="<?php echo $row2[0]->study_area9; ?>" /></td>
            </tr>
            
            <!--
             MACF
             3OTROS ESTUDIOS
            -->
             <tr>
              
              <td><input name="db_school10" type="text" class="text_area" size="20" value="<?php echo $row2[0]->school10; ?>" /></td>
              
              <td><select id="db_lknjobs_schooldiplomaother10" name="db_lknjobs_schooldiplomaother10">
                <option></option>
                <?php 
				if($row2[0]->lknjobs_schooldiplomaother10=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
				else {  echo "<option value='Graduado'>Graduado</option>"; }
				if($row2[0]->lknjobs_schooldiplomaother10=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
				else { echo "<option value='Estudiante'>Estudiante</option>"; } 
				
				?>
              </select></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="15" maxlength="255" name="db_school_city10" value="<?php echo $row2[0]->school_city10; ?>" /></td>
              <td>&nbsp;</td>
              <td><span class="adminlist">
                <input type="text" class="text_area" size="15" maxlength="255" name="db_school_state10" value="<?php echo $row2[0]->school_state10; ?>" />
              </span></td>
              <td>&nbsp;</td>
              <td><input type="text" class="text_area" size="20" maxlength="255"  name="db_diploma_text10" value="<?php echo $row2[0]->diploma_text10; ?>" /></td>
              <td>&nbsp;</td>
              <td><input type="text" name="db_study_area10" class="text_area" size="20" maxlength="255" value="<?php echo $row2[0]->study_area10; ?>" /></td>
            </tr>
          </table>
        </fieldset></td>
      </tr>
      <tr>
        <td colspan="10"></td>
      </tr>
      <tr></tr>
      <tr></tr>
    </table>
    <?php
		lknTabs::endTab ();
		lknTabs::startTab ( "Idiomas" ); 
		?>
			<table width="603" border="0" >
			<tr><td>&nbsp;</td></tr>
			<tr>
			<td>&nbsp;</td>
			<td>
			<span 	class="titulostables" onMouseOut="return nd();" 
			onmouseover="return overlib('Ingrese el idioma aprendido', CAPTION, 'Información', BELOW, RIGHT);">
			Idiomas
			</span> 
			</td>
			<td width="58"><span 	class="titulostables" onMouseOut="return nd();" 
			onmouseover="return overlib('Nivel que puede leer éste Idioma', CAPTION, 'Información', BELOW, RIGHT);">
			Lectura
			</span></td>
			<td width="66"><span 	class="titulostables" onMouseOut="return nd();" 
			onmouseover="return overlib('Nivel que puede escribir éste Idioma', CAPTION, 'Información', BELOW, RIGHT);">
			Escritura
			</span></td>
			<td width="90"><span 	class="titulostables" onMouseOut="return nd();" 
			onmouseover="return overlib('Nivel que puede entender éste Idioma', CAPTION, 'Información', BELOW, RIGHT);">
			Comprensión
			</span></td>
			<td width="190"><span class="titulostables"	onmouseout="return nd();" 
			onmouseover="return overlib('Lugar donde aprendio éste idioma', CAPTION, 'Información', BELOW, RIGHT);">¿Dónde lo aprendio?</span></td>
			</tr>
			<tr>
			<td width="16"></td>
			<td width="157">
			<input type="text" class="text_area" name="db_lang_1" id="db_lang_1" maxlength="10" value="<?php echo $row2[0]->lang_1; ?>">
			</td>
			<td>
			<select id="db_lang_1_reading" name="db_lang_1_reading">
			<option></option>
			<?php 
			if($row2[0]->lang_1_reading==1){ echo "<option value=1 selected='selected'>1</option>"; }
			else {  echo "<option value=1>1</option>"; }
			if($row2[0]->lang_1_reading==2){ echo "<option value=2 selected='selected'>2</option>"; }
			else {  echo "<option value=2>2</option>"; }
			if($row2[0]->lang_1_reading==3){ echo "<option value=3 selected='selected'>3</option>"; }
			else {  echo "<option value=3>3</option>"; }
			if($row2[0]->lang_1_reading==4){ echo "<option value=4 selected='selected'>4</option>"; }
			else {  echo "<option value=4>4</option>"; }
			if($row2[0]->lang_1_reading==5){ echo "<option value=5 selected='selected'>5</option>"; }
			else {  echo "<option value=5>5</option>"; }
			if($row2[0]->lang_1_reading==6){ echo "<option value=6 selected='selected'>6</option>"; }
			else {  echo "<option value=6>6</option>"; }
			if($row2[0]->lang_1_reading==7){ echo "<option value=7 selected='selected'>7</option>"; }
			else {  echo "<option value=7>7</option>"; }
			if($row2[0]->lang_1_reading==8){ echo "<option value=8 selected='selected'>8</option>"; }
			else {  echo "<option value=8>8</option>"; }
			if($row2[0]->lang_1_reading==9){ echo "<option value=9 selected='selected'>9</option>"; }
			else {  echo "<option value=9>9</option>"; }
			if($row2[0]->lang_1_reading==10){ echo "<option value=10 selected='selected'>10</option>"; }
			else {  echo "<option value=10>10</option>"; }
			?>
			</select>	
			</td>
			<td><select name="db_lang_1_writing" id="db_lang_1_writing">
			<option></option>
			<?php 
			if($row2[0]->lang_1_writing==1){ echo "<option value=1 selected='selected'>1</option>"; }
			else {  echo "<option value=1>1</option>"; }
			if($row2[0]->lang_1_writing==2){ echo "<option value=2 selected='selected'>2</option>"; }
			else {  echo "<option value=2>2</option>"; }
			if($row2[0]->lang_1_writing==3){ echo "<option value=3 selected='selected'>3</option>"; }
			else {  echo "<option value=3>3</option>"; }
			if($row2[0]->lang_1_writing==4){ echo "<option value=4 selected='selected'>4</option>"; }
			else {  echo "<option value=4>4</option>"; }
			if($row2[0]->lang_1_writing==5){ echo "<option value=5 selected='selected'>5</option>"; }
			else {  echo "<option value=5>5</option>"; }
			if($row2[0]->lang_1_writing==6){ echo "<option value=6 selected='selected'>6</option>"; }
			else {  echo "<option value=6>6</option>"; }
			if($row2[0]->lang_1_writing==7){ echo "<option value=7 selected='selected'>7</option>"; }
			else {  echo "<option value=7>7</option>"; }
			if($row2[0]->lang_1_writing==8){ echo "<option value=8 selected='selected'>8</option>"; }
			else {  echo "<option value=8>8</option>"; }
			if($row2[0]->lang_1_writing==9){ echo "<option value=9 selected='selected'>9</option>"; }
			else {  echo "<option value=9>9</option>"; }
			if($row2[0]->lang_1_writing==10){ echo "<option value=10 selected='selected'>10</option>"; }
			else {  echo "<option value=10>10</option>"; }
			?>
			</select></td>
			<td><select name="db_lang_1_understanding" id="db_lang_1_understanding">
			<option></option>
			<?php 
			if($row2[0]->lang_1_understanding==1){ echo "<option value=1 selected='selected'>1</option>"; }
			else {  echo "<option value=1>1</option>"; }
			if($row2[0]->lang_1_understanding==2){ echo "<option value=2 selected='selected'>2</option>"; }
			else {  echo "<option value=2>2</option>"; }
			if($row2[0]->lang_1_understanding==3){ echo "<option value=3 selected='selected'>3</option>"; }
			else {  echo "<option value=3>3</option>"; }
			if($row2[0]->lang_1_understanding==4){ echo "<option value=4 selected='selected'>4</option>"; }
			else {  echo "<option value=4>4</option>"; }
			if($row2[0]->lang_1_understanding==5){ echo "<option value=5 selected='selected'>5</option>"; }
			else {  echo "<option value=5>5</option>"; }
			if($row2[0]->lang_1_understanding==6){ echo "<option value=6 selected='selected'>6</option>"; }
			else {  echo "<option value=6>6</option>"; }
			if($row2[0]->lang_1_understanding==7){ echo "<option value=7 selected='selected'>7</option>"; }
			else {  echo "<option value=7>7</option>"; }
			if($row2[0]->lang_1_understanding==8){ echo "<option value=8 selected='selected'>8</option>"; }
			else {  echo "<option value=8>8</option>"; }
			if($row2[0]->lang_1_understanding==9){ echo "<option value=9 selected='selected'>9</option>"; }
			else {  echo "<option value=9>9</option>"; }
			if($row2[0]->lang_1_understanding==10){ echo "<option value=10 selected='selected'>10</option>"; }
			else {  echo "<option value=10>10</option>"; }
			?>
			</select></td>
			<td>
			<input type="text" name="db_lang_1_where" id="db_lang_1_where" maxlength="255" value="<?php echo $row2[0]->lang_1_where; ?>">
			</td>
			</tr>
			<tr>
			<td></td>
			<td><input type="text" class="text_area" name="db_lang_2" id="db_lang_2" maxlength="10" value="<?php echo $row2[0]->lang_2; ?>">
			</td>
			<td><select name="db_lang_2_reading" id="db_lang_2_reading">
			<option></option>
			<?php 
			if($row2[0]->lang_2_reading==1){ echo "<option value=1 selected='selected'>1</option>"; }
			else {  echo "<option value=1>1</option>"; }
			if($row2[0]->lang_2_reading==2){ echo "<option value=2 selected='selected'>2</option>"; }
			else {  echo "<option value=2>2</option>"; }
			if($row2[0]->lang_2_reading==3){ echo "<option value=3 selected='selected'>3</option>"; }
			else {  echo "<option value=3>3</option>"; }
			if($row2[0]->lang_2_reading==4){ echo "<option value=4 selected='selected'>4</option>"; }
			else {  echo "<option value=4>4</option>"; }
			if($row2[0]->lang_2_reading==5){ echo "<option value=5 selected='selected'>5</option>"; }
			else {  echo "<option value=5>5</option>"; }
			if($row2[0]->lang_2_reading==6){ echo "<option value=6 selected='selected'>6</option>"; }
			else {  echo "<option value=6>6</option>"; }
			if($row2[0]->lang_2_reading==7){ echo "<option value=7 selected='selected'>7</option>"; }
			else {  echo "<option value=7>7</option>"; }
			if($row2[0]->lang_2_reading==8){ echo "<option value=8 selected='selected'>8</option>"; }
			else {  echo "<option value=8>8</option>"; }
			if($row2[0]->lang_2_reading==9){ echo "<option value=9 selected='selected'>9</option>"; }
			else {  echo "<option value=9>9</option>"; }
			if($row2[0]->lang_2_reading==10){ echo "<option value=10 selected='selected'>10</option>"; }
			else {  echo "<option value=10>10</option>"; }
			?>
			</select></td>
			<td><select name="db_lang_2_writing" id="db_lang_2_writing">
			<option></option>
			<?php 
			if($row2[0]->lang_2_writing==1){ echo "<option value=1 selected='selected'>1</option>"; }
			else {  echo "<option value=1>1</option>"; }
			if($row2[0]->lang_2_writing==2){ echo "<option value=2 selected='selected'>2</option>"; }
			else {  echo "<option value=2>2</option>"; }
			if($row2[0]->lang_2_writing==3){ echo "<option value=3 selected='selected'>3</option>"; }
			else {  echo "<option value=3>3</option>"; }
			if($row2[0]->lang_2_writing==4){ echo "<option value=4 selected='selected'>4</option>"; }
			else {  echo "<option value=4>4</option>"; }
			if($row2[0]->lang_2_writing==5){ echo "<option value=5 selected='selected'>5</option>"; }
			else {  echo "<option value=5>5</option>"; }
			if($row2[0]->lang_2_writing==6){ echo "<option value=6 selected='selected'>6</option>"; }
			else {  echo "<option value=6>6</option>"; }
			if($row2[0]->lang_2_writing==7){ echo "<option value=7 selected='selected'>7</option>"; }
			else {  echo "<option value=7>7</option>"; }
			if($row2[0]->lang_2_writing==8){ echo "<option value=8 selected='selected'>8</option>"; }
			else {  echo "<option value=8>8</option>"; }
			if($row2[0]->lang_2_writing==9){ echo "<option value=9 selected='selected'>9</option>"; }
			else {  echo "<option value=9>9</option>"; }
			if($row2[0]->lang_2_writing==10){ echo "<option value=10 selected='selected'>10</option>"; }
			else {  echo "<option value=10>10</option>"; }
			?>
			</select></td>
			<td><select name="db_lang_2_understanding" id="db_lang_2_understanding">
			<option></option>
			<?php 
			if($row2[0]->lang_2_understanding==1){ echo "<option value=1 selected='selected'>1</option>"; }
			else {  echo "<option value=1>1</option>"; }
			if($row2[0]->lang_2_understanding==2){ echo "<option value=2 selected='selected'>2</option>"; }
			else {  echo "<option value=2>2</option>"; }
			if($row2[0]->lang_2_understanding==3){ echo "<option value=3 selected='selected'>3</option>"; }
			else {  echo "<option value=3>3</option>"; }
			if($row2[0]->lang_2_understanding==4){ echo "<option value=4 selected='selected'>4</option>"; }
			else {  echo "<option value=4>4</option>"; }
			if($row2[0]->lang_2_understanding==5){ echo "<option value=5 selected='selected'>5</option>"; }
			else {  echo "<option value=5>5</option>"; }
			if($row2[0]->lang_2_understanding==6){ echo "<option value=6 selected='selected'>6</option>"; }
			else {  echo "<option value=6>6</option>"; }
			if($row2[0]->lang_2_understanding==7){ echo "<option value=7 selected='selected'>7</option>"; }
			else {  echo "<option value=7>7</option>"; }
			if($row2[0]->lang_2_understanding==8){ echo "<option value=8 selected='selected'>8</option>"; }
			else {  echo "<option value=8>8</option>"; }
			if($row2[0]->lang_2_understanding==9){ echo "<option value=9 selected='selected'>9</option>"; }
			else {  echo "<option value=9>9</option>"; }
			if($row2[0]->lang_2_understanding==10){ echo "<option value=10 selected='selected'>10</option>"; }
			else {  echo "<option value=10>10</option>"; }
			?>
			</select></td>
			<td><input type="text" name="db_lang_2_where" id="db_lang_2_where" maxlength="255" value="<?php echo $row2[0]->lang_2_where; ?>"></td>
			</tr>
			<tr>
			<td></td>
			<td><input type="text" class="text_area" name="db_lang_3" id="db_lang_3" maxlength="10" value="<?php echo $row2[0]->lang_3; ?>">
			</td>
			<td><select name="db_lang_3_reading" id="db_lang_3_reading">
			<option></option>
			<?php 
			if($row2[0]->lang_3_reading==1){ echo "<option value=1 selected='selected'>1</option>"; }
			else {  echo "<option value=1>1</option>"; }
			if($row2[0]->lang_3_reading==2){ echo "<option value=2 selected='selected'>2</option>"; }
			else {  echo "<option value=2>2</option>"; }
			if($row2[0]->lang_3_reading==3){ echo "<option value=3 selected='selected'>3</option>"; }
			else {  echo "<option value=3>3</option>"; }
			if($row2[0]->lang_3_reading==4){ echo "<option value=4 selected='selected'>4</option>"; }
			else {  echo "<option value=4>4</option>"; }
			if($row2[0]->lang_3_reading==5){ echo "<option value=5 selected='selected'>5</option>"; }
			else {  echo "<option value=5>5</option>"; }
			if($row2[0]->lang_3_reading==6){ echo "<option value=6 selected='selected'>6</option>"; }
			else {  echo "<option value=6>6</option>"; }
			if($row2[0]->lang_3_reading==7){ echo "<option value=7 selected='selected'>7</option>"; }
			else {  echo "<option value=7>7</option>"; }
			if($row2[0]->lang_3_reading==8){ echo "<option value=8 selected='selected'>8</option>"; }
			else {  echo "<option value=8>8</option>"; }
			if($row2[0]->lang_3_reading==9){ echo "<option value=9 selected='selected'>9</option>"; }
			else {  echo "<option value=9>9</option>"; }
			if($row2[0]->lang_3_reading==10){ echo "<option value=10 selected='selected'>10</option>"; }
			else {  echo "<option value=10>10</option>"; }
			?>
			</select></td>
			<td><select name="db_lang_3_writing" id="db_lang_3_writing">
			<option></option>
			<?php 
			if($row2[0]->lang_3_writing==1){ echo "<option value=1 selected='selected'>1</option>"; }
			else {  echo "<option value=1>1</option>"; }
			if($row2[0]->lang_3_writing==2){ echo "<option value=2 selected='selected'>2</option>"; }
			else {  echo "<option value=2>2</option>"; }
			if($row2[0]->lang_3_writing==3){ echo "<option value=3 selected='selected'>3</option>"; }
			else {  echo "<option value=3>3</option>"; }
			if($row2[0]->lang_3_writing==4){ echo "<option value=4 selected='selected'>4</option>"; }
			else {  echo "<option value=4>4</option>"; }
			if($row2[0]->lang_3_writing==5){ echo "<option value=5 selected='selected'>5</option>"; }
			else {  echo "<option value=5>5</option>"; }
			if($row2[0]->lang_3_writing==6){ echo "<option value=6 selected='selected'>6</option>"; }
			else {  echo "<option value=6>6</option>"; }
			if($row2[0]->lang_3_writing==7){ echo "<option value=7 selected='selected'>7</option>"; }
			else {  echo "<option value=7>7</option>"; }
			if($row2[0]->lang_3_writing==8){ echo "<option value=8 selected='selected'>8</option>"; }
			else {  echo "<option value=8>8</option>"; }
			if($row2[0]->lang_3_writing==9){ echo "<option value=9 selected='selected'>9</option>"; }
			else {  echo "<option value=9>9</option>"; }
			if($row2[0]->lang_3_writing==10){ echo "<option value=10 selected='selected'>10</option>"; }
			else {  echo "<option value=10>10</option>"; }
			?>
			</select></td>
			<td><select name="db_lang_3_understanding" id="db_lang_3_understanding">
			<option></option>
			<?php 
			if($row2[0]->lang_3_understanding==1){ echo "<option value=1 selected='selected'>1</option>"; }
			else {  echo "<option value=1>1</option>"; }
			if($row2[0]->lang_3_understanding==2){ echo "<option value=2 selected='selected'>2</option>"; }
			else {  echo "<option value=2>2</option>"; }
			if($row2[0]->lang_3_understanding==3){ echo "<option value=3 selected='selected'>3</option>"; }
			else {  echo "<option value=3>3</option>"; }
			if($row2[0]->lang_3_understanding==4){ echo "<option value=4 selected='selected'>4</option>"; }
			else {  echo "<option value=4>4</option>"; }
			if($row2[0]->lang_3_understanding==5){ echo "<option value=5 selected='selected'>5</option>"; }
			else {  echo "<option value=5>5</option>"; }
			if($row2[0]->lang_3_understanding==6){ echo "<option value=6 selected='selected'>6</option>"; }
			else {  echo "<option value=6>6</option>"; }
			if($row2[0]->lang_3_understanding==7){ echo "<option value=7 selected='selected'>7</option>"; }
			else {  echo "<option value=7>7</option>"; }
			if($row2[0]->lang_3_understanding==8){ echo "<option value=8 selected='selected'>8</option>"; }
			else {  echo "<option value=8>8</option>"; }
			if($row2[0]->lang_3_understanding==9){ echo "<option value=9 selected='selected'>9</option>"; }
			else {  echo "<option value=9>9</option>"; }
			if($row2[0]->lang_3_understanding==10){ echo "<option value=10 selected='selected'>10</option>"; }
			else {  echo "<option value=10>10</option>"; }
			?>
			</select></td>
			<td><input type="text" name="db_lang_3_where" id="db_lang_3_where" maxlength="255" value="<?php echo $row2[0]->lang_3_where; ?>"></td>
			</tr>
			<tr>
			<td></td>
			<td><input type="text" class="text_area" name="db_lang_4" id="db_lang_4" maxlength="10" value="<?php echo $row2[0]->lang_4; ?>">
			</td>
			<td><select name="db_lang_4_reading" id="db_lang_4_reading">
			<option></option>
			<?php 
			if($row2[0]->lang_4_reading==1){ echo "<option value=1 selected='selected'>1</option>"; }
			else {  echo "<option value=1>1</option>"; }
			if($row2[0]->lang_4_reading==2){ echo "<option value=2 selected='selected'>2</option>"; }
			else {  echo "<option value=2>2</option>"; }
			if($row2[0]->lang_4_reading==3){ echo "<option value=3 selected='selected'>3</option>"; }
			else {  echo "<option value=3>3</option>"; }
			if($row2[0]->lang_4_reading==4){ echo "<option value=4 selected='selected'>4</option>"; }
			else {  echo "<option value=4>4</option>"; }
			if($row2[0]->lang_4_reading==5){ echo "<option value=5 selected='selected'>5</option>"; }
			else {  echo "<option value=5>5</option>"; }
			if($row2[0]->lang_4_reading==6){ echo "<option value=6 selected='selected'>6</option>"; }
			else {  echo "<option value=6>6</option>"; }
			if($row2[0]->lang_4_reading==7){ echo "<option value=7 selected='selected'>7</option>"; }
			else {  echo "<option value=7>7</option>"; }
			if($row2[0]->lang_4_reading==8){ echo "<option value=8 selected='selected'>8</option>"; }
			else {  echo "<option value=8>8</option>"; }
			if($row2[0]->lang_4_reading==9){ echo "<option value=9 selected='selected'>9</option>"; }
			else {  echo "<option value=9>9</option>"; }
			if($row2[0]->lang_4_reading==10){ echo "<option value=10 selected='selected'>10</option>"; }
			else {  echo "<option value=10>10</option>"; }
			?>
			</select></td>
			<td><select name="db_lang_4_writing" id="db_lang_4_writing">
			<option></option>
			<?php 
			if($row2[0]->lang_4_writing==1){ echo "<option value=1 selected='selected'>1</option>"; }
			else {  echo "<option value=1>1</option>"; }
			if($row2[0]->lang_4_writing==2){ echo "<option value=2 selected='selected'>2</option>"; }
			else {  echo "<option value=2>2</option>"; }
			if($row2[0]->lang_4_writing==3){ echo "<option value=3 selected='selected'>3</option>"; }
			else {  echo "<option value=3>3</option>"; }
			if($row2[0]->lang_4_writing==4){ echo "<option value=4 selected='selected'>4</option>"; }
			else {  echo "<option value=4>4</option>"; }
			if($row2[0]->lang_4_writing==5){ echo "<option value=5 selected='selected'>5</option>"; }
			else {  echo "<option value=5>5</option>"; }
			if($row2[0]->lang_4_writing==6){ echo "<option value=6 selected='selected'>6</option>"; }
			else {  echo "<option value=6>6</option>"; }
			if($row2[0]->lang_4_writing==7){ echo "<option value=7 selected='selected'>7</option>"; }
			else {  echo "<option value=7>7</option>"; }
			if($row2[0]->lang_4_writing==8){ echo "<option value=8 selected='selected'>8</option>"; }
			else {  echo "<option value=8>8</option>"; }
			if($row2[0]->lang_4_writing==9){ echo "<option value=9 selected='selected'>9</option>"; }
			else {  echo "<option value=9>9</option>"; }
			if($row2[0]->lang_4_writing==10){ echo "<option value=10 selected='selected'>10</option>"; }
			else {  echo "<option value=10>10</option>"; }
			?>
			</select></td>
			<td><select name="db_lang_4_understanding" id="db_lang_4_understanding">
			<option></option>
			<?php 
			if($row2[0]->lang_4_understanding==1){ echo "<option value=1 selected='selected'>1</option>"; }
			else {  echo "<option value=1>1</option>"; }
			if($row2[0]->lang_4_understanding==2){ echo "<option value=2 selected='selected'>2</option>"; }
			else {  echo "<option value=2>2</option>"; }
			if($row2[0]->lang_4_understanding==3){ echo "<option value=3 selected='selected'>3</option>"; }
			else {  echo "<option value=3>3</option>"; }
			if($row2[0]->lang_4_understanding==4){ echo "<option value=4 selected='selected'>4</option>"; }
			else {  echo "<option value=4>4</option>"; }
			if($row2[0]->lang_4_understanding==5){ echo "<option value=5 selected='selected'>5</option>"; }
			else {  echo "<option value=5>5</option>"; }
			if($row2[0]->lang_4_understanding==6){ echo "<option value=6 selected='selected'>6</option>"; }
			else {  echo "<option value=6>6</option>"; }
			if($row2[0]->lang_4_understanding==7){ echo "<option value=7 selected='selected'>7</option>"; }
			else {  echo "<option value=7>7</option>"; }
			if($row2[0]->lang_4_understanding==8){ echo "<option value=8 selected='selected'>8</option>"; }
			else {  echo "<option value=8>8</option>"; }
			if($row2[0]->lang_4_understanding==9){ echo "<option value=9 selected='selected'>9</option>"; }
			else {  echo "<option value=9>9</option>"; }
			if($row2[0]->lang_4_understanding==10){ echo "<option value=10 selected='selected'>10</option>"; }
			else {  echo "<option value=10>10</option>"; }
			?>
			</select></td>
			<td><input type="text" name="db_lang_4_where" id="db_lang_4_where" value="<?php echo $row2[0]->lang_4_where; ?>" maxlength="255" /></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
	</table>
		<?php
		lknTabs::endTab ();
		lknTabs::startTab ("Historial de empleos"); 
		?>
			<table width="904" border="0">
			<tr>
			<td width="1">&nbsp;</td>
			</tr>
			<tr>
			<td></td>
			<td colspan="3">
			<fieldset class="titulosfielsetempleo"><legend>Empleo Actual</legend>
			<div id="trresumen" style="margin:5px;">
			<table width="841" border="0" style="margin-right:-50px;">
			
			<tr>
			<td width="2">&nbsp;</td>
			<td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el nombre de la empresa', CAPTION, 'Información', BELOW, RIGHT);">Nombre de la empresa</span></td>
			
			<td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la ciudad de la empresa', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
			<td>&nbsp;</td>
			<td width="128">&nbsp;</td>
			<td width="10">&nbsp;</td>
			<td width="263"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Sus responsabilidades o actividades en la empresa', CAPTION, 'Información', BELOW, RIGHT);">Funciones</span></td>
			</tr>                                
		   <tr>
			<td>&nbsp;</td>
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer" value="<?php echo $row2[0]->employer; ?>" /></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer_city" value="<?php echo $row2[0]->employer_city; ?>" /></td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el salario que gana', CAPTION, 'Información', BELOW, RIGHT);">Salario</span></td>
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer_pay" value="<?php echo $row2[0]->employer_pay; ?>" /></td>
			<td>&nbsp;</td>
			<td rowspan="4"><textarea class="text_area" name="db_employer_dut" rows="5" cols="20" onKeyUp="return ismaxlength(this);" ><?php echo $row2[0]->employer_dut; ?></textarea></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('La provincia de la empresa', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer_state" value="<?php echo $row2[0]->employer_state; ?>" /></td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuándo empezó a trabajar para esta empresa?', CAPTION, 'Información', BELOW, RIGHT);">Fecha</span></td>
			<td><input type="text" class="text_area" size="20" maxlength="20" name="db_employer_from" 
			value="<?php echo $row2[0]->employer_from; ?>" /></td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Número de teléfono de la empresa', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="20" name="db_employer_phone" value="<?php echo $row2[0]->employer_phone; ?>" /></td>
			<td width="168" align="right"  ><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál es el nombre completo de su jefe en la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Nombre de su jefe inmediato superior</span></td>
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer_sup" value="<?php echo $row2[0]->employer_sup; ?>" /></td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿En qué posición esta registrado en la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Cargo actual</span></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="50" name="db_employer_pos" value="<?php echo $row2[0]->employer_pos; ?>" /></td>
		 
			
			<td>&nbsp;</td>
			</tr>     
			
			</table>
			</div>
			</fieldset>
			</td>
			</tr>       
			<tr>
			<td></td>
			<td colspan="3">
			<fieldset class="titulosfielsetempleo"><legend>Empleo anterior (1) </legend>
			<table width="901" border="0">
			<tr>
			<td width="1">&nbsp;</td>
			<td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el nombre de la empresa', CAPTION, 'Información', BELOW, RIGHT);">Nombre de la empresa</span></td>
			
			<td width="126"><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('Ingrese la ciudad de la empresa', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
			<td>&nbsp;</td>
			<td width="122">&nbsp;</td>
			<td width="10">&nbsp;</td>
			<td width="250"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Sus responsabilidades o actividades en la empresa', CAPTION, 'Información', BELOW, RIGHT);">Funciones a su cargo</span></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer1" value="<?php echo $row2[0]->employer1; ?>" /></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer1_city" value="<?php echo $row2[0]->employer1_city; ?>" /></td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Salario antes de salir de la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Salario</span></td>
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer1_pay" 
			value="<?php echo $row2[0]->employer1_pay; ?>" /></td>
			<td>&nbsp;</td>
			<td rowspan="4"><textarea class="text_area" name="db_employer1_dut" rows="5" cols="20" onKeyUp="return ismaxlength(this);"><?php echo $row2[0]->employer1_dut; ?></textarea></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la provincia de la empresa', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer1_state" 
			value="<?php echo $row2[0]->employer1_state; ?>" /></td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuándo empezó a trabajar para esta empresa?', CAPTION, 'Información', BELOW, RIGHT);">Fecha</span></td>
			<td><input type="text" class="text_area" size="20" maxlength="20" name="db_employer1_from" value="<?php echo $row2[0]->employer1_from; ?>" /></td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Número de teléfono de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="20" name="db_employer1_phone" value="<?php echo $row2[0]->employer1_phone; ?>" /></td>
			<td width="242" align="right"  ><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál era el nombre completo de su jefe en esta empresa?', CAPTION, 'Información', BELOW, RIGHT);">Nombre de su jefe inmediato superior</span></td>
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer1_sup" value="<?php echo $row2[0]->employer1_sup; ?>" /></td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿En qué posición estaba a cargo antes de abandonar la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Cargo</span></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="50" name="db_employer1_pos" value="<?php echo $row2[0]->employer1_pos; ?>" /></td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Por qué dejó la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Razón por la cual dejo el trabajo</span></td>
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer1_leave" value="<?php echo $row2[0]->employer1_leave; ?>" /></td>
			<td>&nbsp;</td>
			</tr>     
			</table>
			</fieldset>
			</td>
			</tr>
			
			<tr>
			<td></td>
			<td colspan="3">
			<fieldset class="titulosfielsetempleo"><legend>Empleo anterior (2) </legend>
			<table width="900" border="0">
			<tr>
			<td width="1">&nbsp;</td>
			<td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Nombre de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Nombre de la empresa</span></td>
			
			<td width="127"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ciudad de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
			<td>&nbsp;</td>
			<td width="120">&nbsp;</td>
			<td width="16">&nbsp;</td>
			<td width="240"><span class="titulostables"  onmouseout="return nd();" onMouseOver="return overlib('Sus responsabilidades o actividades en la empresa', CAPTION, 'Información', BELOW, RIGHT);">Funciones a su cargo</span></td>
			</tr>
			
			
			
			
			<tr>
			<td>&nbsp;</td>
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer2" value="<?php echo $row2[0]->employer2; ?>" /></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer2_city" value="<?php echo $row2[0]->employer2_city; ?>" /></td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Su salario antes de salir de la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Salario</span></td>
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer2_pay" value="<?php echo $row2[0]->employer2_pay; ?>" /></td>
			<td>&nbsp;</td>
			<td rowspan="4"><textarea class="text_area" name="db_employer2_dut" rows="5" cols="20" onKeyUp="return ismaxlength(this);"><?php echo $row2[0]->employer2_dut; ?></textarea></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('La provincia de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer2_state" value="<?php echo $row2[0]->employer2_state; ?>" /></td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuándo empezó a trabajar para esta empresa?', CAPTION, 'Información', BELOW, RIGHT);">Fecha</span></td>
			<td><input type="text" class="text_area" size="20" maxlength="20" name="db_employer2_from" value="<?php echo $row2[0]->employer2_from; ?>" /></td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Número de teléfono de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="20" name="db_employer2_phone" value="<?php echo $row2[0]->employer2_phone; ?>" /></td>
	<td width="249" align="right"  >
			<span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál era el nombre completo de su jefe en esta empresa?', CAPTION, 'Información', BELOW, RIGHT);">
			Nombre de su jefe inmediato superior
			</span>
			</td>
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer2_sup" value="<?php echo $row2[0]->employer2_sup; ?>" /></td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿En qué posición estaba registrado Él antes de abandonar la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Posición</span></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="50" name="db_employer2_pos" value="<?php echo $row2[0]->employer2_pos; ?>" /></td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Por qué dejó la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Razón por la cual dejo el trabajo</span></td>
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer2_leave" value="<?php echo $row2[0]->employer2_leave; ?>" /></td>
			<td>&nbsp;</td>
			</tr>     
			</table>
			<p>&nbsp;</p>
			</fieldset>
			</td>
			</tr>
			
			<tr>
			<td></td>
			<td colspan="2">
			<fieldset class="titulosfielsetempleo"><legend>Empleo anterior (3) </legend>
			<table width="896" border="0">
			<tr>
			<td width="1">&nbsp;</td>
			<td width="124"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Nombre de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Nombre de la empresa</span></td>
			
			<td width="124"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ciudad de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
			<td>&nbsp;</td>
			<td width="120">&nbsp;</td>
			<td width="17">&nbsp;</td>
			<td width="231"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Sus responsabilidades o actividades en la empresa', CAPTION, 'Información', BELOW, RIGHT);">Funciones a su cargo</span></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer3" value="<?php echo $row2[0]->employer3; ?>" /></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer3_city" value="<?php echo $row2[0]->employer3_city; ?>" /></td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Su salario antes de salir de la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Salario</span></td>
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer3_pay" value="<?php echo $row2[0]->employer3_pay; ?>" /></td>
			<td>&nbsp;</td>
			<td rowspan="4"><textarea class="text_area" name="db_employer3_dut" rows="5" cols="20" onKeyUp="return ismaxlength(this);"><?php echo $row2[0]->employer3_dut; ?></textarea></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('La provincia de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer3_state" value="<?php echo $row2[0]->employer3_state; ?>" /></td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuándo empezó a trabajar para esta empresa?', CAPTION, 'Información', BELOW, RIGHT);">Fecha</span></td>
			<td><input type="text" class="text_area" size="20" maxlength="20" name="db_employer3_from" value="<?php echo $row2[0]->employer3_from; ?>" /></td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('Número de teléfono de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="20" name="db_employer3_phone" value="<?php echo $row2[0]->employer3_phone; ?>" /></td>
			<td width="249" align="right"  ><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál era el nombre completo de su jefe en esta empresa?', CAPTION, 'Información', BELOW, RIGHT);">Nombre de su jefe inmediato superior</span></td>
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer3_sup" value="<?php echo $row2[0]->employer3_sup; ?>" /></td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿En qué posición estaba registrado Él antes de abandonar la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Posición</span></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="50" name="db_employer3_pos" value="<?php echo $row2[0]->employer3_leave; ?>" /></td>
			<td align="right"><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('¿Por qué dejó la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Razón por la cual dejo el trabajo</span></td>
			<td><input type="text" class="text_area" size="20" maxlength="255" name="db_employer3_leave" value="<?php echo $row2[0]->employer3_pos; ?>" /></td>
			<td>&nbsp;</td>
			</tr>     
			</table>
			</fieldset>
			</td>
			</tr>
			</table>
		<?php
		lknTabs::endTab ();
		lknTabs::startTab ( "Referencias" );
		?>
			<table width="828" height="504" border="0">
			<tr>
			<td width="843">
			<fieldset class="adminform">
			<legend>Referencia (1)</legend>
				<table width="744"  border="0">
			<tr>
			<td width="0"></td>
			<td width="120">
			<span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('El nombre de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Nombre</span>
			</td>
			
			<td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál es la relación entre usted y su referencia (por ejemplo amigo, supervisor de antigua empresa, etc.)?', CAPTION, 'Información', BELOW, RIGHT);">Relación</span></td>
			
			<td width="120"><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('El número de teléfono de su referencia para contactarnos con él/ella', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
			
			<td width="167"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('La dirección de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Dirección</span>
			</td>
			<td width="150">
			<span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuántos años conoce a este referencia?', CAPTION, 'Información', BELOW, RIGHT);">
			Lugar de trabajo
			</span>
			</td>
			</tr>
			<tr><td><!-- Tooltip -->
			</td>
			  <td>
				  <input type="text" class="text_area" size="20" maxlength="255" 
				  name="db_ref1_name" value="<?php echo $row2[0]->ref1_name; ?>" />
			  </td>
			<td>
			  <input type="text" class="text_area" size="20" maxlength="20" 
			  name="db_ref1_relationship" value="<?php echo $row2[0]->ref1_relationship; ?>" />
			  </td>
		 
			<td>
			<input type="text" class="text_area" size="20" maxlength="20" 
			name="db_ref1_telephone" value="<?php echo $row2[0]->ref1_telephone; ?>" />
			</td>
			
			<td>
			<textarea class="text_area" name="db_ref1_address" rows="3" cols="20" 
			onKeyUp="return ismaxlength(this);"><?php echo $row2[0]->ref1_address; ?>
			</textarea>
			</td>
			  <td>
			  <textarea class="text_area" name="db_ref1_years" rows="3" cols="20" 
			  onKeyUp="return ismaxlength(this);"><?php echo $row2[0]->ref1_years; ?>
			  </textarea>
			</td>
			</tr>
			<tr><td><!-- Tooltip -->
			</td><td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td width="10">&nbsp;</td>
			<td width="82">&nbsp;</td>
			</tr>
			<tr><td><!-- Tooltip -->
			</td><td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		  
			<td>&nbsp;</td>
			
			</table>
			</fieldset>
			</td>
			</tr>
			<tr>
			<td>   
			<fieldset class="adminform">
			<legend>Referencia (2)</legend>
			<table width="744"  border="0"> <tr><td width="1"><!-- Tooltip -->
			</td><td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('El nombre de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Nombre</span></td>                               
			<td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál es la relación entre usted y su referencia (por ejemplo amigo, supervisor de antigua empresa, etc.)?', CAPTION, 'Información', BELOW, RIGHT);">Relación</span></td>
			
			 
			<td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('El número de teléfono de su referencia para contactarnos con él/ella', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
			
			<td width="167"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('La dirección de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Dirección</span></td>
							 <td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuántos años conoce a este referencia?', CAPTION, 'Información', BELOW, RIGHT);">Lugar de trabajo</span></td>
			</tr>
			<tr><td ><!-- Tooltip -->
			</td><td><input type="text" class="text_area" size="20" maxlength="255" name="db_ref2_name" value="<?php echo $row2[0]->ref2_name; ?>" /></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="20" name="db_ref2_relationship" value="<?php echo $row2[0]->ref2_relationship; ?>" /></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="20" name="db_ref2_telephone" value="<?php echo $row2[0]->ref2_telephone; ?>" /></td>
			
			<td><textarea class="text_area" name="db_ref2_address" rows="3" cols="20" onKeyUp="return ismaxlength(this);"><?php echo $row2[0]->ref2_address; ?></textarea></td>
			
			<td><textarea class="text_area" name="db_ref2_years" rows="3" cols="20" onKeyUp="return ismaxlength(this);"><?php echo $row2[0]->ref2_years; ?></textarea></td>
			</tr>
			<tr><td ><!-- Tooltip -->
			</td><td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td width="10">&nbsp;</td>
			<td width="111">&nbsp;</td>
			</tr>
			<tr><td ><!-- Tooltip -->
			</td><td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			
			</table>
			</fieldset>
			</td>
			</tr>
			<tr>
			<td> 
			<fieldset class="adminform">
			<legend>Referencia (3)</legend>
				<table width="745" border="0"> <tr><td width="0" ><!-- Tooltip -->
			</td><td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('El nombre de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Nombre</span></td>
			
			<td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál es la relación entre usted y su referencia (por ejemplo amigo, supervisor de antigua empresa, etc.)?', CAPTION, 'Información', BELOW, RIGHT);">Relación</span></td>
			
			 <td width="120"><span class="titulostables"  onmouseout="return nd();" onMouseOver="return overlib('El número de teléfono de su referencia para contactarnos con él/ella', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
			
			<td width="167"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('La dirección de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Dirección</span></td>
			<td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuántos años conoce a este referencia?', CAPTION, 'Información', BELOW, RIGHT);">Lugar de trabajo</span></td>
			</tr>
			<tr><td ><!-- Tooltip -->
			</td><td><input type="text" class="text_area" size="20" maxlength="255" name="db_ref3_name" value="<?php echo $row2[0]->ref3_name; ?>" /></td>
			
			  <td><input type="text" class="text_area" size="20" maxlength="20" name="db_ref3_relationship" value="<?php echo $row2[0]->ref3_relationship; ?>" /></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="20" name="db_ref3_telephone" value="<?php echo $row2[0]->ref3_telephone; ?>" /></td>
			
			<td><textarea class="text_area" name="db_ref3_address" rows="3" cols="20" onKeyUp="return ismaxlength(this);"><?php echo $row2[0]->ref3_address; ?></textarea></td>
			
			<td><textarea class="text_area" name="db_ref3_years" rows="3" cols="20" onKeyUp="return ismaxlength(this);"><?php echo $row2[0]->ref3_years; ?></textarea></td>
			</tr>
			<tr><td ><!-- Tooltip -->
			</td><td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td width="10">&nbsp;</td>
			<td width="112">&nbsp;</td>
			</tr>
			<tr><td ><!-- Tooltip -->
			</td><td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			
			</table>
			</fieldset>
			</td>
			</tr>
			<tr>
			<td> 
			<fieldset class="adminform">
			<legend>Referencia (4)</legend>
				<table width="746" border="0"> <tr><td width="0" ><!-- Tooltip -->
			</td><td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('El nombre de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Nombre</span></td>                               
			<td width="120"> <span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál es la relación entre usted y su referencia (por ejemplo amigo, supervisor de antigua empresa, etc.)?', CAPTION, 'Información', BELOW, RIGHT);">Relación</span></td>
			
			<td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('El número de teléfono de su referencia para contactarnos con él/ella', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
		   
			<td width="167"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('La dirección de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Dirección</span></td>
		  <td width="150"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Cuántos años conoce a este referencia?', CAPTION, 'Información', BELOW, RIGHT);">Lugar de trabajo</span></td>
			</tr>
			<tr><td ><!-- Tooltip -->
			</td><td><input type="text" class="text_area" size="20" maxlength="255" name="db_ref4_name" value="<?php echo $row2[0]->ref4_name; ?>" /></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="20" name="db_ref4_relationship" value="<?php echo $row2[0]->ref4_relationship; ?>" /></td>
			
			<td><input type="text" class="text_area" size="20" maxlength="20" name="db_ref4_telephone" value="<?php echo $row2[0]->ref4_telephone; ?>" /></td>
			
			<td><textarea class="text_area" name="db_ref4_address" rows="3" cols="20" onKeyUp="return ismaxlength(this);"><?php echo $row2[0]->ref4_address; ?></textarea></td>
			
			<td><textarea class="text_area" name="db_ref4_years" rows="3" cols="20" onKeyUp="return ismaxlength(this);"><?php echo $row2[0]->ref4_years; ?></textarea></td>
			</tr>
			<tr><td ><!-- Tooltip -->
			</td><td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td width="10">&nbsp;</td>
	
			<td width="82">&nbsp;</td>
			</tr>
			<tr><td ><!-- Tooltip -->
			</td><td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			
			</table>
			</fieldset>
			</td>
			
			<tr>
			</table>
			
		  <?php lknTabs::endTab ();?>
		 <!--Implementacio de un campo de texto para la descripción de habilidades-->
		  <?php lknTabs::startTab ("Descripción de habilidades");?>
		  <div id="text_resume_discapaciadad">
		  <textarea class="text_area" name="db_text_resume" 
		  rows="3" cols="43" id="db_text_resume" >
		  <?php echo $row2[0]->text_resume; ?></textarea>
		  </div>
		  <?php lknTabs::endTab ();?>
		  <?php lknTabs::startTab(_lkn_resumes_discapacidad);?>
		  <div id="text_resume_discapaciadad">
		  <textarea class="text_area" name="db_text_resume_discapacidad" 
		  rows="3" cols="43" id="db_text_resume_discapacidad" >
		  <?php echo $row2[0]->dicapacidad; ?></textarea>
		  </div>
		  <?php lknTabs::endTab ();?>
		  <?
			  lknTabs::startTab ("Condiciones de registro"); 
	
			  ?>
			  <div id="condicionesresumes" style="text-align:left;">
			  <p>
			  <strong>CONDICIONES DE ACEPTACIÓN DE EX ALUMNOS</strong><br />
		  Autorizo a la UTPL para que a través de la Bolsa de Empleo Ex Alumnos, haga uso del registro de mis datos (Hoja de Vida) en forma directa o por medio de terceros en ofertas laborales.
		  .<br /></p>
                  <div id="seleccinarestado">  
                  <?php
                  //MACF
                  //para cuando se crear un CV
                  if($row2[0]->published==''){$row2[0]->published=0;} 
                  
                  //en caso de edicion
                  $check1="";
                  if($row2[0]->published==1)
                  {
                      $check1='checked="checked"';
                  }
                  
                  $check0="";
                  if($row2[0]->published==0)
                  {
                      $check0='checked="checked"';
                  }
                  ?>
                  Acepto
                  <input name="db_published" type="radio" value="1" id="db_Published" <?php echo $check1; ?> />
                  No acepto
                  <input name="db_published" type="radio" value="0" id="db_Published" <?php echo $check0; ?> /> 
                  <br />
                  <!--<input type="submit" value="<?php echo _lkn_apply;?>" class="btn" onClick="document.adminForm.task.value='update_resume';"><!--onClick="document.adminForm.task.value='apply_resume';" --> 
                  </div>
          </div>
          <br /><br /><br /><br /><br /><br />
			  <?
			  lknTabs::endTab ();?>
		  	  <? lknTabs::endTabPanel();
			}
                        ?>	
      <?php if (!isset($_buttons)) {?>
			<?php //_buttons parametresi gelirse gizlenicek?>
			<?php //@todo: salakça bir fikir bu. günü kurtarıyor sadece ?>
			<div class="floatRight">
             <input name="azul" type="hidden" id="azul" value="azul"/>
			<input type="submit" value="<?php echo $action;?>" class="btn"/>
			</div>			
		<?php }else {?>
		<?php //bu kısım appy_job_ task'ı tarafından kullanıcak?>
			<input type="hidden" name="applicant_name" value=""/>
			<input type="hidden" name="job_title" value=""/>
			<input type="hidden" name="job_alias" value=""/>
			<input type="hidden" name="company_name" value=""/>
			<input type="hidden" name="db2_job_id" value=""/>
			<input type="hidden" name="inform_employer" value=""/>
			<input type="hidden" name="company_id" value=""/>
			<textarea rows="0" style="display:none;" cols="0" id="db2_cover_letter" name="db2_cover_letter"/>
            </textarea>	
		<?php }?>
      <input type="hidden" name="cid" value="<?php echo $id; ?>" />
			<input type="hidden" name="db_memberid" value = "<?php echo $memberid;?>" />
			<input type="hidden" name="option" value="com_jobs" />
			<input type="hidden" name="task" value="<?php echo $task;?>" />						
	</form>
<br /><br /><br /><br />