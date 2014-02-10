<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' );
}
global $_config, $_db;
$cover_letter=temizleSlash(lknText::nl2br($row->cover_letter));
$id=$row->application_id;
$action=_lkn_app_update;
$task='update_employer_application';
?>
<div id="linkredirectresume">
<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&task=list_employer_applications&Itemid=2" id="titletopfrontal" />
<img title="Regresar a herramientas del empleador" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
<?php echo _lkn_backfrontal;?>
</a>
</div>
<h1 style="text-align:center;"><?php echo $action;?></h1><br />
<form id="adminForm" name="adminForm" method="post" action="index.php"  enctype="multipart/form-data">
	<?php lknTabs::startTabPanel();?>
		<?php lknTabs::startTab(_lkn_resume);?>
			<table class="general_table">
				<tbody>     
				<?php if ($cover_letter!='') 
                {
                ?>
                <fieldset class="resume">
                    <legend><?php echo _lkn_cover_letter; ?></legend>
                    <?php echo $cover_letter;?>
                 </fieldset>
                <?php }?>
                <?php 
                $title=temizleSlash($row->title);
                $id=$row->resume_id;
				$memberid=$row->memberid;
				$sql="SELECT file_name FROM #__jobs_resume_files WHERE memberid=".$memberid;
				$_db->query($sql);
    			$_db->setQuery();
				$rows=$_db->loadObjectList();
                $app_id=$row-application_id;
				//Oskar
				//08/08/2010
				//Obteniedno datos personales del solicitante
                $name=temizleSlash($row->name);
				$city=temizleSlash($row->city);
				$street=temizleSlash($row->street);
				$home_phone=temizleSlash($row->home_phone);
				$cell_phone=temizleSlash($row->cell_phone); 
				$email_address=temizleSlash($row->email_address);
				//obteniendo datos universitarios del solicitante
				$school1=temizleSlash($row->school1);
				$school_city1=temizleSlash($row->school_city1);
				$school_state1=temizleSlash($row->school_state1);
				$study_area1=temizleSlash($row->study_area1);
				$diploma_text1=temizleSlash($row->lknjobs_schooldiplomauniversity);
				//Obteniendo datos de postgrado
				$school2=temizleSlash($row->school2);
				$study_area2 =temizleSlash($row->study_area2);
				$diploma_text2=temizleSlash($row->lknjobs_schooldiplomagrad);
				//*************//
				$school5=temizleSlash($row->school5);
				$study_area5=temizleSlash($row->diploma_text5);
				$diploma_text5=temizleSlash($row->lknjobs_schooldiplomagrad5);
				//*************//
				$school6=temizleSlash($row->school6);
				$study_area6=temizleSlash($row->study_area6);
				$diploma_text6=temizleSlash($row->lknjobs_schooldiplomagrad6);
				//*************//
				$school7=temizleSlash($row->school7);
				$study_area7=temizleSlash($row->study_area7);
				$diploma_text7=temizleSlash($row->lknjobs_schooldiplomagrad7);
				//*************//
				$school8=temizleSlash($row->school8);
				$study_area8=temizleSlash($row->study_area8);
				$diploma_text8=temizleSlash($row->lknjobs_schooldiplomagrad8);
				//Obteniendo datos del tipo de trabajo
				$school2=temizleSlash($row->school2);
				$study_area2 =temizleSlash($row->study_area2);
				//Obteniendo datos del empleador
				//obteniendo datos del tipo de trabajo
				$employer=temizleSlash($row->employer);
				$employer_phone =temizleSlash($row->employer_phone);
				$employer_pos =temizleSlash($row->employer_pos);
                $url="index.php?option=com_jobs&task=view_resume&id=$id&action=employer_application&application_id=$app_id&user_id=$user_id" . $Itemid . lknGetNoHtml();

               	$url=lknSef::url($url);
				?>               
				<tr>
					<td>
						<fieldset id="datepersonecampos" class="datepersonecampos">
							<legend>Datos Personales</legend>
							<table class="general_table">
								<tr>
									<td class="key personalKey">
									<?php echo lknToolTip(_lkn_resume_title_tip,_lkn_resume_title);?>
									</td>
									<td>
									<?php echo $title;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_name_tip,_lkn_resume_name);?>
									</td>
									<td>
									<?php echo $name;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_city_tip,_lkn_resume_city);?>
									</td>
									<td>
									<?php echo $city;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_street_tip,_lkn_resume_street);?>
									</td>
									<td>
									<?php echo $street;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_phone_tip,_lkn_resume_phone);?>
									</td>
									<td>
									<?php echo $home_phone;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_cellphone_tip,_lkn_resume_cellphone);?>
									</td>
									<td>
									<?php echo $cell_phone;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_config_email_tip,_lkn_config_email);?>
									</td>
									<td>
									<?php echo $email_address;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_config_link_files_tip,_lkn_resume_link_files);?>
									</td>
									<td>
									<?php 
									foreach($rows as $k)
									{
										$filename = $k->file_name;
										$file="<a href='images/stories/jobs/files/$filename' target='_blank'>$filename</a>";
										echo $file;
										echo "<br />";
									}
									?>
									</td>
								</tr>
							</table>
						</fieldset>
					</td>
				</tr>
				<tr>
					<td>
						<fieldset id="datepersonecampos" class="datepersonecampos">
							<legend>Universidad</legend>
							<table class="general_table">
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_university1_tip,_lkn_resume_user_university1);?>
									</td>
									<td>
									<?php echo $school1;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_ciudad1_tip,_lkn_resume_user_ciudad1);?>
									</td>
									<td>
									<?php echo $school_city1;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_provincia1_tip,_lkn_resume_user_provincia1);?>
									</td>
									<td>
									<?php echo $school_state1;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resumes_title_get,_lkn_resume_user_area_estudio1);?>
									</td>
									<td>
									<?php echo $study_area1;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_diploma1_tip,_lkn_resume_user_diploma1);?>
									</td>
									<td>
									<?php echo $diploma_text1;?>
									</td>
								</tr>
							</table>
						</fieldset>
					</td>
				</tr>
				<tr>
					<td>
						<fieldset id="datepersonecampos" class="datepersonecampos">
							<legend>Postgrados</legend>
							<table class="general_table">
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_university1_tip,_lkn_resume_user_university2);?>
									</td>
									<td>
									<?php echo $school2;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resumes_title_get,_lkn_resume_user_area_estudio2);?>
									</td>
									<td>
									<?php echo $study_area2;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_diploma1_tip,_lkn_resume_user_diploma2);?>
									</td>
									<td>
									<?php echo $diploma_text2;?>
									</td>
								</tr>
							</table>
                            <br />
                            <table class="general_table">
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_university1_tip,_lkn_resume_user_university2);?>
									</td>
									<td>
									<?php echo $school5;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resumes_title_get,_lkn_resume_user_area_estudio2);?>
									</td>
									<td>
									<?php echo $study_area5;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_diploma1_tip,_lkn_resume_user_diploma2);?>
									</td>
									<td>
									<?php echo $diploma_text5;?>
									</td>
								</tr>
							</table>
                            <br />
                            <table class="general_table">
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_university1_tip,_lkn_resume_user_university2);?>
									</td>
									<td>
									<?php echo $school6;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resumes_title_get,_lkn_resume_user_area_estudio2);?>
									</td>
									<td>
									<?php echo $study_area6;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_diploma1_tip,_lkn_resume_user_diploma2);?>
									</td>
									<td>
									<?php echo $diploma_text6;?>
									</td>
								</tr>
							</table>
                            <br />
                            <table class="general_table">
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_university1_tip,_lkn_resume_user_university2);?>
									</td>
									<td>
									<?php echo $school7;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resumes_title_get,_lkn_resume_user_area_estudio2);?>
									</td>
									<td>
									<?php echo $study_area7;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_diploma1_tip,_lkn_resume_user_diploma2);?>
									</td>
									<td>
									<?php echo $diploma_text7;?>
									</td>
								</tr>
							</table>
                             <br />
                            <table class="general_table">
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_university1_tip,_lkn_resume_user_university2);?>
									</td>
									<td>
									<?php echo $school8;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resumes_title_get,_lkn_resume_user_area_estudio2);?>
									</td>
									<td>
									<?php echo $study_area8;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_diploma1_tip,_lkn_resume_user_diploma2);?>
									</td>
									<td>
									<?php echo $diploma_text8;?>
									</td>
								</tr>
							</table>
						</fieldset>
					</td>
				</tr>
				<tr>
				<td>
						<fieldset id="datepersonecampos" class="datepersonecampos">
							<legend>Empleo más reciente</legend>
							<table class="general_table">
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_employer_tip,_lkn_resume_user_employer);?>
									</td>
									<td>
									<?php echo $employer;?>
									</td>
								</tr>
								<tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_phone_employer,_lkn_resume_user_phone_employer);?>
									</td>
									<td>
									<?php echo $employer_phone;?>
									</td>
								</tr>
								 <tr>
									<td class="key">
									<?php echo lknToolTip(_lkn_resume_user_position_employer,_lkn_resume_user_position_employer);?>
									</td>
									<td>
									<?php echo $employer_pos;?>
									</td>
								</tr>
							</table>
						</fieldset>
					</td>
				</tr>
			</tbody>
		</table>
		<?php lknTabs::endTab();?>
        
		<?php lknTabs::startTab(_lkn_app_details);?>
			<table class="general_table">
				<tbody>
					<tr>
    					<td>
							<?php lknJobsFunctions::print_application_details($row);?>
      					</td>
  					</tr>
    			</tbody>
			</table>
		<?php lknTabs::endTab();?>
		<?php lknTabs::startTab(_lkn_job_details);?>
			<table class="general_table" cellpadding="5" cellspacing="0" border="0">
				<tbody>
   					<tr>
        				<td>
							<?php lknJobsFunctions::getJobDetail($row); ?>
            			</td>
        			</tr>
    			</tbody>
			</table>
		<?php lknTabs::endTab();?>
		<?php lknTabs::startTab(_lkn_app_email_history);?>
            <table class="general_table">
            	<tbody>
                	<tr>
                    	<td>
                        	<?php lknJobsFunctions::createMailForm($row);?>
                            <div id="buttonemailemployees" style="float:right;">
                            <input class="btn" onclick="document.adminForm.task.value='<?php echo 'send_mail_to_applicant';?>';document.adminForm.submit();" value="<?php echo _lkn_app_email_send;?>" size="38"/>
                    		</div>
                        </td>
                	</tr>
            	</tbody>
            </table>
		<?php lknTabs::endTab();?>
        <?php /*?><?php lknTabs::startTab(_lkn_history_solicitud);?>
        <div id="historysolicitudes">
        <?php echo $application_history;?>
        </div>
        <?php lknTabs::endTab();?><?php */?>
        <div id="floatRight">
  <input class="btn" onclick="document.adminForm.task.value='<?php echo $task;?>';document.adminForm.submit();" value="<?php echo $action;?>" size="25"/>
        <input type="hidden" value="<?php echo $row->application_id;?>" name="cid"/>
        <input type="hidden" value="com_jobs" name="option"/>
        <input type="hidden" value="" name="task"/>
        <input type="hidden" value="<?php echo $row->application_id; ?>" name="id_a"/>
        </div>
		<br /><br /><br /><br /><br /><br />
	<?php lknTabs::endTabPanel();?>
</form>
