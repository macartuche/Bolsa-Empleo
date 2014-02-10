<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

		//function job_form($row='',$credit=''){
			global $_lknBaseFramework,$_config,$_db;
			$inform_employer=$_config['employer_inform_on_application'];
			$make_national=$_config['make_jobs_national'];
			
			$editor=new lknEditor();								
			if ($row!='') {
				$id=$row->id;
				$title=temizleSlash($row->title);
				$alias=$row->alias;
				$reference=$row->reference;
				$number_of_jobs=$row->number_of_jobs;
				$job_type=$row->job_type;
				$description=temizleSlash($row->description);
				$country=$row->country;
				$city=temizleSlash($row->city);
				$state=temizleSlash($row->state);
				$qualifications=temizleSlash($row->qualifications);
				$experience=$row->experience;
				$degree=$row->degree;
				$cat_id=$row->cat_id;
				$company_id=$row->company_id;
				$salary=$row->salary;
				$show_salary=$row->show_salary;
				$created=$row->created;
				$publish_up=$row->publish_up;
				$publish_down=$row->publish_down;
				$meta_keywords=temizleSlash($row->meta_keywords);
				$meta_description=temizleSlash($row->meta_description);
				$published=$row->published;
				$latitud=$row->latitud;
				$longitud=$row->longitud;
				$hide_company_name=$row->hide_company_name;
				$inform_me=$row->inform_me;
				$action=_lkn_job_update;
					//1:users can choose their publish up and publish down time. Do nothink
					//0:users are not allowed to choose the publish up and publish down time.
					//	jobs will be unpublished after $_config['default_publish_down'] months.
					//	do not allow them to edit the publish up and publish down time
					if ($published!='-1') {
						$dates_are_editable=$_config['job_publish_down_up_time_is_editable'];
						if ($dates_are_editable=='0') {
							$date_disabled='disabled="disabled"';	
						}else {
							$date_disabled='';
						}
						$publish_list=lknhtmlMaker::publishedSelectList( 'db_published', $published );
					}else {
						//yani draft olan bir iş
						$date_disabled='';
						$publish_list=lknJobsFunctions::publishSelectList_( 'db_published', $published );
					}
					
				$task='update_employer_job';
				$save_as_new_button="<input type=\"submit\" value=\"" . _lkn_save_as_new . "\" class=\"btn\" onclick=\"document.adminForm.task.value='save_as_new_employer_job';\"/>";
				
				$old_published=$published;
			}else 
			{
				$id='';
				$title='';
				$alias='';
				$reference='';
				$number_of_jobs='';
				$job_type='';
				$description='';
				$country='';
				$city='';
				$state='';
				$qualifications='';
				$experience='';
				$degree='';
				$cat_id='';
				$company_id='';
				$salary='';
				$show_salary='';
				$created='';
				$publish_up='';
				$publish_down='';
				$meta_keywords='';
				$meta_description='';
				$published='';
				$latitud='';
				$longitud='';
				$date_disabled='';
				$hide_company_name='';
				$action=_lkn_job_add;
				$task='save_employer_job';
				$date_disabled='';
				$save_as_new_button='';
				$publish_list=lknJobsFunctions::publishSelectList_( 'db_published', $published );
				$old_published='';
				$inform_me='';
			}
			?>
			
		<script language="javascript" type="text/javascript">
			function validateFormOnSubmit(theForm) {
			var reason = "";
		  reason += validateEmpty(theForm.db_title,"<?php echo _lkn_error_form_job_title;?>");
		  reason += validateEmpty(theForm.db_cat_id,"<?php echo _lkn_error_form_job_category;?>");
		  reason += validateEmpty(theForm.db_company_id,"<?php echo _lkn_error_form_job_company;?>");
		  reason += validateEmpty(theForm.db_country,"<?php echo _lkn_error_form_job_country;?>");
		  
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
		</script>
<div id="linkredirectresume">
<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&task=employer&Itemid=2" id="titletopfrontal" />
<img title="Regresar a herramientas del empleador" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
<?php echo _lkn_backfrontal;?>
</a>
</div>
<div id="titledemo1" style="width:100%;">
  <h1 style="text-align:center;"><?php echo $action;?></h1><br />
  </div>
  <form id="adminForm" name="adminForm" method="post" action="index.php" enctype="multipart/form-data" onsubmit="return validateFormOnSubmit(this)" >
  
  <table width="100%" cellspacing="0" cellpadding="0" border="0">
      <tbody><tr>
          <td valign="top">
          
          </td></tr>
          <tr>
          <td>
          <?php lknTabs::startTabPanel();?>						
              <?php lknTabs::startTab(_lkn_job_details);?>
              <table class="general_table">
                  <tbody><tr>
                      <td class="key">
                      <?php echo lknToolTip(_lkn_job_tip,_lkn_job) .': ';?>
                      </td>
                      <td>
                          <input maxlength="100" size="30" value="<?php echo $title;?>" name="db_title"/>
                      </td>
                  <!--	<td class="key">
                      <?php //echo lknToolTip(_lkn_published_tip,_lkn_published) .': ' ?>
                      </td>-->
                      
                      <?php 
                          //echo $publish_list;
                      ?>
                      <input type="hidden" name="old_published" value="0"/>
                          <td class="key">
                          <?php echo lknToolTip(_lkn_job_company_tip,_lkn_company);?>
                      </td>
                      <td>
                          <?php 
                          $user=new lknUser();
                          $user_id=$user->getUserID();
                          echo lknJobsFunctions::getCompanyList('db_company_id',$company_id,'',$user_id);?>
                      </td>
                  </tr>
                  <tr>
                      <td class="key">
                          <?php echo lknToolTip(_lkn_job_category_name_tip,_lkn_category_name) . ': ';?>
                      </td>
                      <td>	
                          <?php 
                              $where[]="published='1'";
                              $cat=new lknCategory();
                              echo $cat->getCategoryList('db_cat_id',$cat_id);
                          ?>
                      </td>
                  
                  </tr>
                  <tr>
                      <td class="key">
                          <?php echo lknToolTip(_lkn_job_reference_tip,_lkn_job_reference);?>
                      </td>
                      <td>
                          <input type="text" name="db_reference" id="db_reference" size="30" maxlength="100" value="<?php echo $reference;?>">
                      </td>
                      <td class="key">
                          <?php echo lknToolTip(_lkn_job_number_of_jobs_tip,_lkn_job_number_of_jobs);?>
                      </td>
                      <td>
                          <input type="text" name="db_number_of_jobs" id="db_number_of_jobs" size="20" maxlength="100" value="<?php echo $number_of_jobs;?>">
                      </td>
                  </tr>
                  <tr>
                      <td class="key">
                          <?php echo lknToolTip(_lkn_job_degree_tip,_lkn_job_degree);?>
                      </td>
                      <td>
                          <?php echo lknJobsFunctions::getDegree('db_degree',$degree);?>
                      </td>
                      <td class="key">
                          <?php echo lknToolTip(_lkn_job_job_type_tip,_lkn_job_job_type);?>
                      </td>
                      <td>
                          <?php 
                              echo lknJobsFunctions::getJobType('db_job_type',$job_type);
                          ?>
                          </td>
                  </tr>
                  <tr>
                      <td class="key">
                          <?php echo lknToolTip(_lkn_job_show_salary_tip,_lkn_job_show_salary);?>
                      </td>
                      <td>
                          <?php echo lknhtmlMaker::yesNoSelectList('db_show_salary',$show_salary);?>				
                      </td>
                      <td class="key">
                          <?php echo lknToolTip(_lkn_job_salary_tip, _lkn_job_salary . ' (' . _lkn_currency . ')');?>
                      </td>
                      <td>
                          <input type="text" name="db_salary" id="db_salary" size="20" maxlength="100" value="<?php echo $salary;?>">
                      </td>
                  </tr>	
                  <tr>
                      <td class="key">
                          <?php echo lknToolTip(_lkn_job_publish_down_tip,_lkn_job_publish_down);?>
                      </td>
                      <td>
                          <input type="text" readonly name="db_publish_down" id="db_publish_down" 
                          size="20" maxlength="100" value="<?php echo $publish_down;?>"
                          <?php echo $date_disabled;?>/>
                          <input type="reset" onclick="return showCalendar('db_publish_down', '%Y-%m-%d %H:%M:%S', '24', true);" value=" ... "/>
                      </td>
                      <td class="key">
                          <?php echo lknToolTip(_lkn_job_publish_up_tip,_lkn_job_publish_up);?>
                      </td>
                      <td>
                      <?
                          $fecha = time ();
                      ?>
              <input type="text" readonly name="db_publish_up" id="db_publish_up" size="20" maxlength="100"
               value="<?php echo date ("Y-m-d H:i:s" , $fecha );?>"/>
                              <input type="reset" onclick="return showCalendar('db_publish_up', '%Y-%m-%d %H:%M:%S', '24', true);" value=" ... "/>
                      </td>
                  </tr>
                  <tr>
                      <td class="key"><?php echo lknToolTip ( _lkn_job_state_tip, _lkn_job_state );?></td>
                      <td><input type="text" name="db_state" id="db_state" size="30" maxlength="100" value="<?php echo $state;?>"></td>
                      <td class="key"><?php echo lknToolTip(_lkn_job_experience_tip,_lkn_job_experience);?></td>
                      <td><input type="text" name="db_experience" id="db_experience" size="20" maxlength="100" value="<?php echo $experience;?>"></td>
                  </tr>
                  <tr>
                      <td class="key"><?php echo lknToolTip ( _lkn_job_city_tip, _lkn_job_city );?></td>
                      <td><input type="text" name="db_city" id="db_city" size="30" maxlength="100" value="<?php echo $city;?>"></td>
                      <?php if ($make_national=='0') {
                      //yani ülkeler çıkabiliyorsa
                          ?>
                      <td class="key"><?php echo lknToolTip(_lkn_job_country_tip,_lkn_job_country);?></td>
                      <td><?php echo lknJobsFunctions::getJobCountries('db_country',$country);?></td>
                      </tr>
                      <tr>
                      <?php }else {?>
                          <input type="hidden" name="db_country" value="<?php echo $make_national;?>"/>
                      <?php }?>
                  <?php if ($inform_employer=='1') {?>
                      <?php /*?><td class="key">
                          <?php echo lknToolTip ( _lkn_job_inform_me_tip, _lkn_job_inform_me );?>
                      </td>
                      <td>
                          <?php echo lknhtmlMaker::yesNoSelectList('db_inform_me',$inform_me);?>
                      </td><?php */?>
                      
                  
                  <?php }elseif ($inform_employer=='2')
                  {
                  ?>
                  <input type="hidden" value="1" name="db_inform_me" />
                  <?php }else {?>
                      <input type="hidden" value="0" name="db_inform_me" />
                  <?php }?>
                  <?php if ($make_national=='0') {?>
                      <td></td>
                      <td></td>
                  <?php }?>
                  </tr>
                  <?php 
                  /*
               * 1:hepsini göster
               * 2:şirketin seçmesine izin ver;
               * 3:hepsini gizle
               * */
              
                  $hide=$_config['hide_company'];
                  if ($hide=='1') {
                      //şirketin seçmesine izin verilmiş
                      ?>
                  <tr>
                      <td class="key">
                          <?php 
                          echo lknToolTip ( _lkn_job_hide_company_name_tip, _lkn_job_hide_company_name );                                    ?>
                      </td>
                      <td>
                          <?php 
                          echo lknhtmlMaker::yesNoSelectList('db_hide_company_name',$hide_company_name);	                                    ?>
                      </td>
                  </tr>

                  <?php }?>
              </tbody></table>
          <?php lknTabs::endTab();?>
          <?php lknTabs::startTab(_lkn_job_description);?>
              <table class="general_table">
                  <tbody>
                  <tr>
                      <td class="key" colspan="2" style="text-align:left !important;">  	
                          <?php echo lknToolTip(_lkn_job_description_tip,_lkn_job_description);?>
                      </td>
                  </tr>
                  
                  <tr>
                      <td>
                          <?php 
                              echo $editor->display( 'db_description',  $description, '100%;', '350', '75', '20', array('pagebreak', 'readmore','image') ) ;
                          ?>
                      </td>
                  </tr>
              </tbody></table>
          <?php lknTabs::endTab();?>
          <?php lknTabs::endTabPanel();?>
          </td>
      </tr>
  </tbody></table>

<input type="hidden" value="<?php echo $id;?>" name="cid"/>
<input type="hidden" value="com_jobs" name="option"/>
<input type="hidden" value="<?php echo $credit;?>" name="credit"/>
<input type="hidden" value="<?php echo $task;?>" name="task"/>
<input type="hidden" value="<?php echo $alias;?>" name="db_alias"/>
<div align="right" style="float:left;">
  <input type="submit" value="<?php echo _lkn_apply;?>" class="btn" onclick="document.adminForm.task.value='apply_employer_job';"/>
 <?php /*?> <?php echo $save_as_new_button;?><?php */?>  
  <?php /*?><input type="submit" value="<?php echo $action;?>" class="btn"/><?php */?>
</div><br /><br /><br /><br />
</form><br /><br />