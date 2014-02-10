<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

		global $_lknBaseFramework,$_config, $_db;

		$template=$_config['lknjobstemplate'];

		$Itemid=lknJobsItemId();

		$template_url=$_lknBaseFramework->lknGetPath('live') . "/components/com_jobs/templates/$template/images";
		$id=$row->id;

		$job_alias=$row->alias;

		$inform_employer=$row->inform_me;

		$title=temizleSlash($row->title);

		$reference=$row->reference;

		$created=lknDate::formatDate($row->created);

		$company_name=temizleSlash($row->company_name);

		$company_logo=$row->company_logo;

		$company_id=$row->company_id;

		$company_alias=$row->company_alias;

			$hide=$_config['hide_company'];

			if ($hide=='2') {

				//şirketin seçmesine izin verilmiş

				$hide_company_name=$row->hide_company_name;

			}elseif ($hide=='1'){

				$hide_company_name='0';

			}elseif ($hide=='3'){

				$hide_company_name='1';

			}

		if ($hide_company_name=='1') {

			$company_link=_lkn_job_company_name_is_hidden;

		}else {

			$company_link="index.php?option=com_jobs&task=detail_company&id=$company_id:$company_alias" .$Itemid;

			$company_link=lknSef::url($company_link);

			$company_link="<a href=\"$company_link\">$company_name</a>";			

		}

		?>

		<script>

		function validateFormOnSubmit2() {
		
			var reason = "";

			var theForm=document.forms['resume'];

			

		  reason += validateEmpty(theForm.db2_resume_id);

		      

		  if (reason!= "") {

		    alert("<?php echo _lkn_error_form;?>\n" + reason);

		    return false;

		  }

		  theForm.submit();

		}

		function validateFormOnSubmit3() {

		

			var theForm=document.forms['adminForm'];

			var reason= validateFormOnSubmit('theForm');

			var apply_form=document.forms['resume'];

			  

		  if (reason== true) {

			  theForm.elements["applicant_name"].value=apply_form.elements["applicant_name"].value;

			  theForm.elements["job_title"].value=apply_form.elements["job_title"].value;

			  theForm.elements["job_alias"].value=apply_form.elements["job_alias"].value;

			  theForm.elements["company_name"].value=apply_form.elements["company_name"].value;

			  theForm.elements["db2_job_id"].value=apply_form.elements["db2_job_id"].value;

			  theForm.elements["inform_employer"].value=apply_form.elements["inform_employer"].value;

			  theForm.elements["company_id"].value=apply_form.elements["company_id"].value;

			  theForm.elements["db2_cover_letter"].value=apply_form.elements["db2_cover_letter"].value;

			  theForm.submit();
		  }
		}

		function validateEmpty(fld) {

		    var error = "";

		 

		    if (fld.value.length == 0) {

		        fld.style.background = 'Yellow'; 

		        error = "<?php echo _lkn_error_form_empty;?>\n"

		    } else {

		        fld.style.background = 'White';

		    }

		    return error;  

		}

	</script>

<table id="tools_employees" cellspacing="0" border="0" cellpadding="5">
			<thead>
            	<tr>

					<th colspan="5"><?php echo _lkn_job_add_cover_letter;?></th>

				</tr>
            </thead>
			<tbody>

						<?php if ($hide=='3'){?>

							<?php }else {?>			

								<tr class="jl_odd_row">

									<td width="20%" style="padding:5px;"><strong><?php echo _lkn_company;?>:</strong></td>

									<td width="80%" colspan="2" style="padding:5px;"><?php echo $company_link;?></td>

								</tr>

							<?php }?>

							<tr class="jl_even_row">

								<td style="padding:5px;"><strong><?php echo _lkn_job;?>:</strong></td>

								<td colspan="2" style="padding:5px;"><?php echo $title;?> (<?php echo _lkn_ref_short;?>:<?php echo $reference;?>)</td>

							</tr>

							<tr class="jl_odd_row">

								<td style="padding:5px;"><strong><?php echo _lkn_created;?>:</strong></td>

								<td colspan="2" style="padding:5px;"><?php echo $created;?></td>

							</tr>

							

							<tr class="jl_even_row">

								<td valign="top" style="padding:5px;"><strong><?php echo _lkn_cover_letter;?>:</strong></td>

								<td colspan="2" style="padding:5px;"><?php echo _lkn_cover_letter_front_desc;?>

								</td>

							</tr>

			

							<tr class="jl_odd_row">

								<td/>

								<td style="padding:5px;">

								<form action="index.php?Itemid=<?php echo lknJobsItemId(true);?>" method="POST" name="resume" id="resume" >

									<?php echo lknJobsFunctions::getCoverLetterList('cover_letter','','onchange="change_cover_letter()"');?>

									<script>

										function change_cover_letter() {

											document.getElementById('db2_cover_letter').value=document.getElementById('cover_letter').options[document.getElementById('cover_letter').selectedIndex].value;

										}

									</script><br /><br />

									<textarea rows="5" style="width: 330px;" cols="39" id="db2_cover_letter" name="db2_cover_letter"/></textarea>

									<br/>

									<div class="info"><?php echo _lkn_cover_letter_what;?></div><br/>

								</td>

								<td style="padding:5px;"><img src="<?php echo "$template_url/cover_letter.gif";?>" valign="middle"/></td>

							</tr>							

							<tr class="jl_even_row">

								<td nowrap="" valign="top" style="padding:5px;"><strong><?php echo _lkn_resume_selection;?>:</strong></td>

								<td align="justify" colspan="2" style="padding:5px;">
                                <?php
							  	$usuario =& JFactory::getUser();
								if($id_usuario=$usuario->get('id'))
								{
									$_db = & JFactory::getDBO();
									$sql="SELECT id, title FROM #__jobs_resumes WHERE memberid= '$id_usuario'";
									$_db->setQuery($sql);
									$rows = $_db->loadObjectList();
									$resume_title = $rows[0]->title;
									$resume_id =$rows[0]->id;
								}
							   ?>
                               <?php echo $resume_title; ?><br />
								<input type="hidden" name="db2_resume_id" id="db2_resume_id" value="<?php echo $resume_id; ?>"/>
								
                                </td>

							</tr>

							<tr class="jl_odd_row">

								<td nowrap="" style="padding:5px;">

								<td colspan="2" style="padding:5px;">

						<?php /*?>		<?php echo lknJobsFunctions::getResumeList('db2_resume_id');?><?php */?>
                                
                              
                            
                                
								<input type="hidden" name="option" value="com_jobs"/>

								<input type="hidden" name="task" value="apply_job_"/>

								<input type="hidden" name="applicant_name" value="<?php echo $user->getName();?>"/>

								<input type="hidden" name="job_title" value="<?php echo $title;?>"/>

								<input type="hidden" name="job_alias" value="<?php echo $job_alias;?>"/>

								<input type="hidden" name="company_name" value="<?php echo $company_name;?>"/>

								<input type="hidden" name="db2_job_id" value="<?php echo $id;?>"/>

								<input type="hidden" name="inform_employer" value="<?php echo $inform_employer;?>"/>

								<input type="hidden" name="company_id" value="<?php echo $company_id;?>"/>

								</form>

								

								<?php if ($can_create_new_resume=='1') { ?>

								<a href='javascript: toggle()'><?php /*?><?php echo _lkn_job_apply_new_resume_create;?><?php */?></a>

									</td>

								</tr>

								<tr class="jl_odd_row">

									<td colspan="3" style="padding:5px;">	

									<div id='div1' style='display:none'>

										<?php echo $resume_form;?>

									</div>

									</td>

								</tr>

									<script>

									function toggle(){

										var div1 = document.getElementById('div1')

										if (div1.style.display == 'none') {

											div1.style.display = 'block'

										} else {

											div1.style.display = 'none'

										}

									}

									</script>

								

								<?php }else {?>

									</td>

								</tr>						

								

								<?php }?>
                               	</tbody></table>
        <div class="buttonresumeuser">
<input type="button" value="<?php echo _lkn_job_apply;?>" class="btn" onclick="javascript:validateFormOnSubmit2();"/>

									<?php if ($can_create_new_resume=='1') { ?>

										<input type="button" value="<?php echo _lkn_job_apply_new_resume_createand_apply;?>" class="btn" onclick="javascript:validateFormOnSubmit3();"/>

									<?php }?>
                                    </div>
                                    <br /><br /><br /><br /><br /><br /><br />
        