<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }


					$cover_letter=temizleSlash(lknText::nl2br($row->cover_letter));
					$id=$row->application_id;
					//$email_memberid=$row->company_owner_id;
					$action=_lkn_app_update;
					$task='update_employer_application';
				?>
				<h1><?php echo $action;?></h1><br />
				<form id="adminForm" name="adminForm" method="post" action="index.php"  enctype="multipart/form-data">
				<?php lknTabs::startTabPanel();?>
					<?php lknTabs::startTab(_lkn_resume);?>
							<table class="general_table">
								<tbody><tr>
									<td>
									<?php if ($cover_letter!='') { ?>
										<fieldset class="resume">
											<legend><?php echo _lkn_cover_letter; ?></legend>
											<table class="general_table">
												<tr>
													<td>
														<?php echo $cover_letter;?>
													</td>
												</tr>
											</table>
										</fieldset>
									<?php }?>
										<?php 
										
										//resume yazımı başladı
/*										$title=temizleSlash($row->title);
										$id=$row->resume_id;
										$app_id=$row->application_id;
										
										$url="index.php?option=com_jobs&task=view_resume&id=$id&action=employer_application&application_id=$app_id&user_id=$user_id" . $Itemid . lknGetNoHtml();
										$url=lknSef::url($url);
										$title="<a href=\"$url\" target=\"_new\"
					    					 onclick=\"window.open(this.href,'win2','width=500,height=750,menubar=yes,resizable=yes,scrollbars=yes'); return false;\">$title</a>";
					    					 echo _lkn_resume_title . ':' . $title;*/
										
					    				echo $resume_data;
													
										 //resume yazımı bitti; ?>

									</td>
								</tr>
							</tbody></table>

					<?php lknTabs::endTab();?>
					<?php lknTabs::startTab(_lkn_app_details);?>
							<table class="general_table">
									<tr>
										<td>
											<?php lknJobsFunctions::print_application_details($row);?>
										</td>
									</tr>
								</table>

					<?php lknTabs::endTab();?>
					<?php lknTabs::startTab(_lkn_job_details);?>
						<?php //iş detayları yazdırılmaya başlandı; ?>
								<table class="general_table">
									<tbody>
										<tr>
											<td>
												<?php echo $job_details; ?>
											</td>
										</tr>
									</tbody>
								</table>
						<?php //iş detayları yazdırılması bitti; ?>
					<?php lknTabs::endTab();?>
					<?php lknTabs::startTab(_lkn_app_email_history);?>
							<table class="general_table">
								<tr>
									<td>
										<?php lknJobsFunctions::createMailForm($row);?>
									</td>

								</tr>
								</table>

							<table class="general_table">
								<tr>
									<td>
										<?php echo $email_history;
										//htmlFrontJobs::employer_print_email_history($id,$email_memberid);?>
									</td>

								</tr>
							</table>

					<?php lknTabs::endTab();?>
					<?php lknTabs::startTab(_lkn_app_history);?>
						<?php echo _lkn_app_history_desc;?>
						<?php echo $application_history;?>
					<?php lknTabs::endTab();?>
					<?php lknTabs::endTabPanel();?>

		<input type="hidden" value="<?php echo $id;?>" name="cid"/>
		<input type="hidden" value="com_jobs" name="option"/>
		<input type="hidden" value="" name="task"/>
		<br />
		<div class="floatRight">
			<button class="btn" onclick="document.adminForm.task.value='<?php echo $task;?>';document.adminForm.submit();"><?php echo $action;?></button>&nbsp; &nbsp;<button class="btn" onclick="document.adminForm.task.value='<?php echo 'send_mail_to_applicant';?>';document.adminForm.submit();"><?php echo _lkn_app_email_send;?></button>
		</div>
		</form>