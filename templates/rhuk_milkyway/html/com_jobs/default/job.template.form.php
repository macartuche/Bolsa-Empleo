<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

		//function job_form($row='',$credit=''){
			global $_lknBaseFramework,$_config;

			
			if ($row!='') {
				$id=$row->id;
				$t_name=temizleSlash($row->t_name);
				$memberid=temizleSlash($row->memberid);
				$t_id=$row->t_id;
				$published=$row->published;
				$action = _lkn_job_templates_update;
				
				$action=_lkn_job_templates_update;
				$task='update_employer_job_template';				
			}else 
			{
				$id = '';
				$t_name='';
				$t_id='';
				$user=new lknUser();
				$memberid=$user->getUserID();
				$published='';
				$action=_lkn_job_templates_add;
				$task='save_employer_job_template';
			}
			
			?>
			<?php echo lknJobsFields::getJsCode($row_fields,'front','list_job_templates');?>
			<h1><?php echo $action;?></h1><br />
			<form id="adminForm" name="adminForm" method="post" action="index.php" enctype="multipart/form-data">
			
			<table width="100%" cellspacing="0" cellpadding="0" border="0">
				<tbody>
					<tr>
					<td>

				<?php $count_cats=count($row_cats);
			
					if ($count_cats>0) {
						lknTabs::startTabPanel(0);
							$fields_array=lknJobsFields::getFieldsArrayJobs($row_fields,$row);
							lknJobsFields::printFields($row_cats,$fields_array,$parent_id_array);					
						lknTabs::endTabPanel();
					}
					
					?>	
			

					<table class="general_table">
						<tr>
							<td class="key"><?php echo lknToolTip ( _lkn_list_job_template_name_tip, _lkn_list_job_template_name );?></td>
							<td><input type="text" name="t_name" id="t_name" size="30" maxlength="100" value="<?php	echo $t_name;?>"></td>
						</tr>
						<tr>
							<td class="key"><?php echo lkntooltip ( _lkn_published_tip, _lkn_published ) . ': ';?></td>
							<td><?php echo lknhtmlMaker::publishedSelectList('published', $published );?></td>
						</tr>
					</table>
					</td>
				</tr>
			</tbody></table>
		<input type="hidden" value="<?php echo $id;?>" name="cid" />
		<input type="hidden" value="<?php echo $t_id;?>" name="t_id" />
		<input type="hidden" value="<?php echo $memberid;?>" name="memberid" />
		<input type="hidden" value="com_jobs" name="option"/>
		<input type="hidden" value="<?php echo $task;?>" name="task"/>
		<div class="floatRight">
			<button type="button" class="btn" onclick="document.adminForm.task.value='apply_employer_job_template';javascript: validateFormOnSubmit();"><?php echo _lkn_apply;?></button>
			<button type="button" class="btn" onclick="javascript: validateFormOnSubmit();"><?php echo $action;?></button>
		</div>
		</form>