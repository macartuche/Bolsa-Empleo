<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

		global $_lknBaseFramework,$_config;
	
		if ($row!='') { 
			$id=$row->id;
			$title=temizleSlash($row->title);
			$name=temizleSlash($row->name);
			$memberid=$row->memberid;
			$published=$row->published;
			$action=_lkn_worker_job_alerts_update;
			$task='update_worker_job_alert';
		}else 
		{
			$id='';
			$title='';
			$name='';
			$published=1;
			$action=_lkn_worker_job_alerts_new;
			$task='save_worker_job_alert';
			
			$user=new lknUser();
			$memberid=$user->getUserID();
		}
		
		
		
		?>
		<script language="javascript" type="text/javascript">
			function validateFormOnSubmit(theForm) {
			var reason = "";

		  reason += validateEmpty(theForm.db_name,"<?php echo _lkn_error_form_job_alert_title;?>");
		      
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
		
		
		<h1><?php echo $action;?></h1><br />
		<form id="adminForm" name="adminForm" method="post" action="index.php"  enctype="multipart/form-data" onsubmit="return validateFormOnSubmit(this)">
		<?php echo _lkn_worker_job_alert_alert_help;?>
		<table class="adminForm">
			<tbody><tr>
				<td class="key" style="width: 20% ! important;">
					<?php echo lknToolTip(_lkn_worker_job_alerts_search_word_tip,_lkn_search_word);?>
				</td>
				<td>
					<input maxlength="100" size="30" value="<?php echo $title;?>" name="db_title"/>
				</td>
			</tr>
		    <tr>
		      <td class="key" style="width: 20% ! important;">
		      	<?php echo lknToolTip(_lkn_search_job_category_tip,_lkn_search_job_category);?>
		      </td>
		      	<td width="70%">
		      		<?php echo $list['category_list'];?>
		      	</td>
		    </tr>
		   <?php if ($make_national=='0') {?>
		    <tr>
		      <td class="key" style="width: 20% ! important;">
		      	<?php echo lknToolTip(_lkn_search_job_country_tip,_lkn_search_job_country);?>
		      </td>
		      <td width="70%" style="width: 20% ! important;">
		               <?php echo $list['job_countries'];?>
		      </td>
		   </tr>
		   <?php }?>
		   <tr>
		      <td class="key" style="width: 20% ! important;">
		      	<strong><?php echo lknToolTip(_lkn_job_alert_location_tip,_lkn_job_location);?></strong>
		      </td>
		      <td nowrap="nowrap" width="70%">
		      	<?php echo $list['location'];?></td>
		    </tr>
		    <tr>
		      <td class="key" style="width: 20% ! important;">
		        <?php echo lknToolTip(_lkn_search_job_salary_range_tip,_lkn_search_job_salary_range_);?>
		      </td>
		       <td width="70%">
		        <?php echo $list['salary'];?>
		       </td>
		    </tr>
		    <tr>
		      <td class="key" style="width: 20% ! important;">
		        <?php echo lknToolTip(_lkn_search_job_experience_tip,_lkn_search_job_experience_);?></td>
		      <td width="70%">
		        <?php echo $list['experince'];?>
		       </td>
		    </tr>
		    <tr>
		      <td class="key" style="width: 20% ! important;">
		        <strong><?php echo lknToolTip(_lkn_search_job_education_level_tip,_lkn_search_job_education_level_);?></strong>
		      </td>
		      <td nowrap="" width="70%">
		       		<?php echo $list['degree'];?>
		      </td>
		    </tr>
		    <tr>
		      <td class="key" style="width: 20% ! important;">
		        <strong><?php echo lknToolTip(_lkn_search_job_emp_type_tip,_lkn_search_job_emp_type);?></strong>
		      </td>
		      <td nowrap="" width="70%">
		       		<?php echo $list['job_type'];?>
		      </td>
		    </tr>
		    <tr>
		      <td class="key" style="width: 20% ! important;">
		        <strong><?php echo _lkn_worker_job_alert_f;?></strong>
		      </td>
		      <td nowrap="" width="70%">
		       		<?php echo $list['alert_type'];?>
		      </td>
		    </tr>
		    <tr>
		      <td class="key" style="width: 20% ! important;">
		        <strong><?php echo _lkn_worker_job_alert_email_format;?></strong>
		      </td>
		      <td nowrap="" width="70%">
		       		<?php echo $list['mail_type'];?>
		      </td>
		    </tr>
			<tr>
				<td class="key" style="width: 20% ! important;">
					<?php echo lknToolTip(_lkn_published_tip,_lkn_published);?> * 
				</td>
				<td width="70%">
					<?php echo lknhtmlMaker::publishedSelectList ( 'db_published', $published );?>
				</td>
			</tr>
			<tr>
				<td class="key" style="width: 20% ! important;">
					<?php echo lknToolTip(_lkn_worker_job_alert_name_tip,_lkn_worker_job_alert_name);?> * 
				</td>
				<td width="70%">
					<input maxlength="100" size="30" value="<?php echo $name;?>" name="db_name"/>
				</td>
			</tr>
		</tbody>
		</table>

	<input type="hidden" value="<?php echo $id;?>" name="cid"/>
	<input type="hidden" name="db_memberid" value="<?php echo $memberid;?>"/>
	<input type="hidden" value="com_jobs" name="option"/>
	<input type="hidden" value="<?php echo $task;?>" name="task"/>
	<div class="floatRight">
		<input type="submit" value="<?php echo _lkn_apply;?>" class="btn" onclick="document.adminForm.task.value='apply_worker_job_alert';"/>
		<input class="btn" type="submit" value="<?php echo $action;?>"/>
	</div>
	</form>			