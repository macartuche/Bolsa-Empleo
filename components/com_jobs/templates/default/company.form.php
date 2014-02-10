<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

//function company_form($row='',$force='0')
//{
	global $_lknBaseFramework,$_config;

	$editor=new lknEditor();
//	print_r($row);
	if ($row!='') {
		$id=$row->id;
		$title=temizleSlash($row->title);
		$alias=$row->alias;
		$logo=$row->logo;
		$description=temizleSlash($row->description);
		$address=temizleSlash($row->address);
		$city=temizleSlash($row->city);
		$country=$row->country;
		$zipcode=$row->zipcode;
		$companyurl=temizleSlash($row->companyurl);
		$contactname=temizleSlash($row->contactname);
		$contactphone=$row->contactphone;
		$contactemail=$row->contactemail;
		$rhumanos=$row->rhumanos;
		$telefono=$row->telefono;
		$fax=$row->fax;
		$meta_keywords=temizleSlash($row->meta_keywords);
		$meta_description=temizleSlash($row->meta_description);
		$memberid=$row->memberid;
		$created=$row->created;
		$published=$row->published;
		$action=_lkn_company_update;
		$task='update_company';
	}else 
	{
		$id='';
		$title='';
		$alias='';
		$logo='';
		$description='';
		$address='';
		$city='';
		$country='';
		$zipcode='';
		$companyurl='';
		$contactname='';
		$contactphone='';
		$contactemail='';
		$meta_keywords='';
		$meta_description='';
		$created='';
		$published=0;
		$latitud='';
		$longitud='';
		$action=_lkn_company_add;
		$task='save_company';
		
		$user=new lknUser();
		$memberid=$user->getUserID();
	}
	$approve_new=$_config['employer_approve_all_companies'];
	if ($force=='0') {
		if ($approve_new=='0') {
			$published_form='<td class="key">';
			//$published_form.=lknToolTip(_lkn_published_tip,_lkn_published);
			$published_form.='</td>';
			$published_form.='<td>';
			
			$published_form.='</td>';
			$ph='0';
		}elseif ($approve_new=='1'){
			$published_form='<td colspan="2">';
			$published_form.="<input type=\"hidden\" name=\"db_published\" value=\"$published\"/>";
			$published_form.='</td>';
			$ph='1';	
		}
		$apply_button="<input style=\"width:100px;\" type=\"submit\" value=\"" ._lkn_apply."\" class=\"btn\" onclick=\"document.adminForm.task.value='apply_company';\"/>";
	}elseif ($force=='1'){
		if ($approve_new=='0') {
			$t='1';
		}else {
			$t='0';
		}
		$published_form='<td colspan="2">';
		$published_form.="<input type=\"hidden\" name=\"db_published\" value=\"$t\"/>";
		$published_form.='</td>';
		$task='save_company_with_forcing';
		$apply_button='';
		$ph='1';
	}
	
	$make_national=$_config['make_jobs_national'];
	if ($make_national=='0') {
		//normal country list. yani international
		$country_field='<td class="key"><span style="color:#FF9900;">' . lknToolTip(_lkn_company_country_tip,_lkn_country) . ' </span></td>';
		$country_field.='<td>' . lknJobsFunctions::getJobCountries('db_country',$country).'</td>';
		$ch='0';
	}else {
		//yani bir country için kullanılıyor
		$country_field='<td colspan="2">';
		$country_field.="<input type=\"hidden\" name=\"db_country\" value=\"$make_national\"/>";
		$country_field.='</td>';
		$ch='1';
	}
	
	if ($ph=='1' and $ch=='1') {
		$fields="<input type=\"hidden\" name=\"db_country\" value=\"$make_national\"/>" . '<br />';
		if ($force=='1') {
			if ($approve_new=='0') {
				$t='1';
			}else {
				$t='0';
			}
			$fields.="<input type=\"hidden\" name=\"db_published\" value=\"$t\"/>";
		}else {
			$fields.="<input type=\"hidden\" name=\"db_published\" value=\"$published\"/>";
		}			
	}else {
		$fields='<tr>';
		if ($ch=='1' and $ph!='1') {
			$fields.=$published_form . $country_field . '</tr>';
		}else {
			$fields.=$country_field . $published_form . '</tr>';
		}
	}		
	
	?>
	<script language="javascript" type="text/javascript">
		function x(theForm) {
		var reason = "";

	  reason += validateEmpty(theForm.db_title,"<?php echo _lkn_error_form_company_title;?>");
	  reason += validateEmpty(theForm.db_country,"<?php echo _lkn_error_form_company_country;?>");
	  reason += validateEmpty(theForm.db_contactemail,"<?php echo _lkn_error_form_company_email;?>");
	  
	  if (validateEmpty(theForm.hay_logo,"ERROR")!="")
	  {
	  	//<macf>
	  	//agregado 2011-02-02
	  	reason += validateEmpty(theForm.db_logo,"<?php echo _lkn_error_form_company_logo;?>");
	  }
	  
	  
	  reason += validateEmpty(theForm.db_address,"<?php echo _lkn_error_form_company_address;?>");
	  reason += validateEmpty(theForm.db_city,"<?php echo _lkn_error_form_company_city;?>");
	  //reason += validateEmpty(theForm.db_zipcode,"<?php //echo _lkn_error_form_company_zipcode;?>");
	  //reason += validateEmpty(theForm.db_companyurl,"<?php //echo _lkn_error_form_company_companyurl;?>");
	  reason += validateEmpty(theForm.db_contactname,"<?php echo _lkn_error_form_company_contactname;?>");
	  reason += validateEmpty(theForm.db_contactphone,"<?php echo _lkn_error_form_company_contactphone;?>");
	  reason += validateEmpty(theForm.db_contactemail,"<?php echo _lkn_error_form_company_contactemail;?>");
	  //Oskar
	  //agregado 2011-08-23
	  reason += validateEmpty(theForm.db_rhumanos,"<?php echo _lkn_error_form_company_db_rhumanos;?>");
	  reason += validateEmpty(theForm.db_telefono,"<?php echo _lkn_error_form_company_db_telefono;?>");
	  

	  if (reason != "") {
		alert("<?php echo _lkn_error_form;?>\n" + reason);
		return false;
	  }
	
	  return true;
	}
	
	function validateEmpty(fld,err) {
		var error = "";
	 
		if (fld.value.length == 0) {
			fld.style.background = 'Yellow'; 
			error = err+"\n"
		} else {
			fld.style.background = 'White';
		}
		return error;  
	}
	function mostrardiv()
	{
		div = document.getElementById('flotante');
		div.style.display = '';
	}
	function cerrar()
	{
		div = document.getElementById('flotante');
		div.style.display='none';
	} 
	</script>
	<div id="linkredirectresume">
		<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&task=employer&Itemid=2" id="titletopfrontal" />
			<img title="Regresar a herramientas del empleador" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
            <?php echo _lkn_backfrontal;?>
		</a>
	</div>
	<h1 style="text-align:center;"><?php echo $action;?></h1><br />
	<form id="adminForm" name="adminForm" method="post" action="index.php"  enctype="multipart/form-data" onSubmit="return x(this)">
	<?php lknTabs::startTabPanel();?>
		<?php lknTabs::startTab(_lkn_company_details);?>
				<table class="general_table" cellpadding="5" cellspacing="0" border="0">
					<tbody>
						<tr>
							<td class="key" colspan="5">
								<p style="margin-left:15px;">
									Los campos de color <span class="obligatorio">naranja</span> 
									son obligatorios.</p>
							 </td>
						</tr>
						<tr>
							<td class="key" style="color:#FF9900;">
								<span style="color:#FF9900;">
								<?php echo lknToolTip(_lkn_company_tip,_lkn_company);?>
								</span>
							</td>
							<td> 
								<input maxlength="100" size="30" value="<?php echo $title;?>" name="db_title"/>
							</td>
							<td class="key">
						
								<?php echo lknToolTip(_lkn_company_companyurl_tip,_lkn_company_companyurl);?>
					 
							</td>
							<td>
								<input type="text" name="db_companyurl" id="db_companyurl" size="30" maxlength="100" value="<?php echo $companyurl;?>">
							</td>
						</tr>
						<tr>
							<td class="key">
							<span style="color:#FF9900;">
								<?php echo lknToolTip(_lkn_company_address_tip,_lkn_company_address);?>
								</span>
							</td>
							<td>
								<textarea name="db_address" id="db_address" cols="25" rows="5">
									<?php echo $address;?>
								</textarea>
							</td>
							<td class="key">
							<span style="color:#FF9900;">
							<?php echo lknToolTip(_lkn_company_contactname_tip,_lkn_company_contactname);?>
							</span>
							</td>
							<td>
								<input value="<?php echo $rhumanos;?>" maxlength="100" size="30" id="db_rhumanos" name="db_rhumanos">
							</td>
					  </tr>					
						<tr>
							<td class="key">
							<span style="color:#FF9900;">
							<?php echo lknToolTip(_lkn_company_telefono_tip,_lkn_company_telefono);?>
							</span>
							</td>
							<td> 
							<input maxlength="100" size="30" value="<?php echo $telefono;?>" name="db_telefono"/>
							</td>
							<td class="key">
							<span style="color:#FF9900;">
							<?php echo lknToolTip(_lkn_rhumanos_tip,_lkn_rhumanos);?>
							</span>
							</td>
							<td>
								<input type="text" name="db_contactname" id="db_contactname" size="30" maxlength="100" 
								value="<?php echo $contactname;?>">
							</td>
					  </tr>						
						<tr>
							<td class="key">
							<span style="color:#FF9900;">
								<?php echo lknToolTip(_lkn_company_fax_tip,_lkn_company_fax);?>
								</span>
							</td>
							<td> 
								<input maxlength="100" size="30" value="<?php echo $fax;?>" name="db_fax"/>
							</td>
							<td class="key">
							<span style="color:#FF9900;">
								<?php echo lknToolTip(_lkn_company_contactemail_tip,_lkn_company_contactemail);?></span>
							</td>
							<td>
								<input type="text" name="db_contactemail" id="db_contactemail" size="30" maxlength="100" 
								value="<?php echo $contactemail;?>" />
							</td>
						</tr>
						<tr>
							<td class="key">
							<span style="color:#FF9900;">
								<?php echo lknToolTip(_lkn_company_city_tip,_lkn_company_city);?>
								</span>
							</td>
							<td>
								<input type="text" name="db_city" id="db_city" size="30" maxlength="100" 
								value="<?php echo $city;?>">
							</td>
							<td class="key">
							<span style="color:#FF9900;">
								<?php echo lknToolTip(_lkn_company_contactphone_tip,_lkn_company_contactphone);?></span>
							</td>
							<td>
								<input type="text" name="db_contactphone" id="db_contactphone" size="30" maxlength="100" 
								value="<?php echo $contactphone;?>">
							</td>	
					  </tr>
					  <tr>
						<td class="key">
								<?php echo lknToolTip(_lkn_company_zipcode_tip,_lkn_company_zipcode);?>
							</td>
							<td>
								<input type="text" name="db_zipcode" id="db_zipcode" size="30" maxlength="10" 
								value="<?php echo $zipcode;?>">
							</td>
						</tr>
					<?php echo $fields;?>
				

				</tbody>
				</table>
				<?php lknTabs::endTab();?>
				<?php lknTabs::startTab(_lkn_company_description);?>
					<table class="general_table">
						<tbody>
							<tr>
							  <td class="key" style="text-align:left !important;">
								  <?php echo lknToolTip(_lkn_company_description_tip,_lkn_company_description);?>
							  </td>
							</tr>
							<tr>
								<td>
									<?php 
										echo $editor->display( 'db_description',  $description, '40%;', '250', '45', '10', array('pagebreak', 'readmore','image') ) ;
									?>
								</td>
							</tr>
						</tbody>
	  </table>
			<?php lknTabs::endTab();?>
			<?php lknTabs::startTab(_lkn_company_logo);?>
				<table class="general_table">
					<tbody>
						<tr>
							<td class="key" style="text-align: left ! important;">
							<span style="color:#FF9900;">
								<?php echo lknToolTip(_lkn_company_logo_tip,_lkn_company_logo);?>
							</span>
							</td>
						</tr>
						<tr>
                        	<td>
                                <input type="file" name="db_logo" size="32"/>
                                <input type="hidden" value="<?php echo $logo;?>" name="old_logo"/>
								<?php if ($row!='' or $logo!='')
                                { 
                                    $logo=lknJobsFunctions::getCompanyLogo($logo,$title);
                                    echo $logo;
                                 }
                                 ?>
                         	</td>
						</tr>
						<tr>
							<td>
							<?php 
							echo $allowed_image_desc;
							//MACF
							//2011-08-30
							if(!empty($allowed_image_desc))
							{
						   ?>
                                <input type="hidden" name="hay_logo" id="hay_logo" value="1" />
						   <?php	
							}else{
							?>
                                <input type="hidden" name="hay_logo" id="hay_logo" value="" />
							<?php	
							}
							?>
							</td>
						</tr>
					</tbody>
				</table>
			<?php lknTabs::endTab();?>
				<?php lknTabs::startTab("Condiciones y Políticas");?>
                    <div id="condicionregistroempresa">
                     <p>
                     	<strong>Condiciones de registro Empresas</strong><br /><br />
                            1. Acepto que toda oferta de empleo publicada por mi empresa deberá cumplir las
                            
                            siguientes normas de publicación.<br />
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;a) Suscribir un convenio institucional con la UTPL, para utilizar los servicios de la
                            
                            Bolsa de empleo Ex Alumnos UTPL<br />
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;b) Los anuncios deben ser redactados correctamente y en lo posible sin errores
                            
                            ortográficos.<br />
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;c) Deben ser claros, especificando el puesto y los requisitos exigidos.<br />
                            &nbsp;&nbsp;&nbsp;&nbsp;d) Todas las ofertas de empleo serán revisadas por la administración de la Bolsa de
                            
                            Empleo Ex Alumnos UTPL, para su correspondiente publicación.<br />
                            &nbsp;&nbsp;&nbsp;&nbsp;e) La Bolsa de empleo Ex Alumnos UTPL se reserva el derecho de aceptar o
                            rechazar la publicación de cualquier anuncio.<br />
                            &nbsp;&nbsp;&nbsp;&nbsp;f) La Bolsa de empleo Ex Alumnos UTPL podrá realizar cualquier cambio en
                            esta política de publicación sin previo aviso. Los cambios se publicarán en esta
                            misma página.<br />
                            &nbsp;&nbsp;&nbsp;&nbsp;g) Las empresas que intencionadamente no cumplan con las normas indicadas
                            serán eliminadas del sistema sin previo aviso<br /><br />
                            
                            2. Entiendo que si no cumpliera con las condiciones indicadas anteriormente, el
                            
                            registro de mi empresa podrá ser dado de baja en cualquier momento, sin previa
                            notificación.<br />
                            3. He llenado todas las casillas solicitadas y todos los datos aportados son correctos.<br />
                            4. He sido autorizado por los representantes legales de la empresa a registrar sus datos
                            en este sitio web y usar sus servicios a nombre de la empresa.<br />
                
                    </p>
                    <div id="seleccinarestado">  
                    <?php
                    //Oskar
                    //para cuando se crea una empresa
                    if($row2[0]->published==''){$row2[0]->published=0;} 
                    
                    //Valor en caso de que se edite la empresa
                    $check1="";
                    if($published==1)
                    {
                        $check1='checked="checked"';
                    }
                    
                    $check0="";
                    if($published==0)
                    {
                        $check0='checked="checked"';
                    }
                    ?>
                    Acepto
                    <input name="db_published" type="radio" value="1" id="db_published" <?php echo $check1;?> />
                    No acepto
                    <input name="db_published" type="radio" value="0" id="db_published" <?php echo $check0;?> />   				        </div>
              <input type="hidden" value="<?php echo $id;?>" name="cid"/>
              <input type="hidden" name="db_memberid" value="<?php echo $memberid;?>"/>
              <input type="hidden" value="com_jobs" name="option"/>
              <input type="hidden" value="<?php echo $task;?>" name="task"/>
              <input type="hidden" value="<?php echo $alias;?>" name="db_alias"/>
              <br />       
              </div>
              <div id="floatfooter">
              <?php 
              //MACF
              //2011-08-30
              if($task=="edit_company"){
              	echo $apply_button;
              }
			  else
			  {
              ?>
              <input class="btn" type="submit" value="<?php echo $action;?>" />
              <?php
              }
              ?>
              </div>
              <br /><br /><br /><br /><br />
              <?php lknTabs::endTab();?>
		<?php lknTabs::endTabPanel();?>
		<br /><br /><br /><br /><br />		  
   
</form>	