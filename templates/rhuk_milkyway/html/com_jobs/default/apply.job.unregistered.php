<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

		global $_lknBaseFramework,$_config;
		
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
		$form=lknGetParamatre($_REQUEST,'form','0');
		if ($form=='1') {
			$form='display:block';
		}else {
			$form='display:none';
		}
		
		
		?>


		<script type="text/javascript">
		function toggleLayer(whichLayer) {
		    var elem, vis;

		    if( document.getElementById ) // this is the way the standards work
		        elem = document.getElementById( whichLayer );
		    else if( document.all ) // this is the way old msie versions work
		        elem = document.all[whichLayer];
		    else if( document.layers ) // this is the way nn4 works
		        elem = document.layers[whichLayer];
		  
		    vis = elem.style;
		    // if the style.display value is blank we try to figure it out here
		    if(vis.display==''&&elem.offsetWidth!=undefined&&elem.offsetHeight!=undefined)
		        vis.display = (elem.offsetWidth!=0&&elem.offsetHeight!=0)?'block':'none';
		    vis.display = (vis.display==''||vis.display=='block')?'none':'block';
		}
		
	</script>
		<?php echo $js;?>
		<div class="lknjobs_style">
		
			<div class="jl_wrap_div grad">
			<table width="100%">
				<tr>
					<td style="padding-left: 5px; padding-top: 5px;">
						<a href="#" onclick="javascript:toggleLayer('login_table_jobs');document.getElementById('apply_table_jobs').style.display='none';return false;">
						<?php echo _lkn_error_you_must_be_logged_in_to_apply_job_;?>
						</a>
					</td>
				</tr>
				<tr>
					<td style="padding-left: 5px; padding-top: 5px;">
						<a href="#" onclick="javascript:toggleLayer('apply_table_jobs');document.getElementById('login_table_jobs').style.display='none';return false;">
							<?php echo _lkn_apply_without_register;?>
						</a>
					</td>
				</tr>
			</table>
			<br />
			<div id="login_table_jobs" style="display:none">
			<table class="jl_tbl" cellspacing="0" border="0" style="border-collapse: collapse; border-left: medium none; border-right: medium none;">
				<tbody>	
					<tr>
						<td><?php echo $login_form;?></td>
					</tr>
								
				</tbody>
			</table>
			</div>
			<div id="apply_table_jobs" style="<?php echo $form;?>">
			<form autocomplete="off" name="adminForm" id="adminForm" method="post" action="index.php" enctype="multipart/form-data" >
			<table class="jl_tbl" cellspacing="0" border="0" style="border-collapse: collapse; border-left: medium none; border-right: medium none;">
				<tbody>	
					<tr>
						<td class="key"><strong><?php echo _lkn_job;?>:</strong></td>
						<td width="80%" colspan="5"><?php echo $title;?> 
							<?php if ($reference!='') {?>
								(<?php echo _lkn_ref_short;?> : <?php echo  $reference;?>)
							<?php }?>
							</td>
					</tr>
					<tr>
						<td class="key"><strong><?php echo _lkn_created;?>:</strong></td>
						<td width="80%"><?php echo $created;?></td>
					</tr>
					<?php echo $fields;?>
					<tr>
						<td class="key"><strong><?php echo _lkn_cover_letter;?>:</strong></td>
						<td width="80%"><textarea rows="5" style="width: 330px;" cols="39" id="cover_letter" name="cover_letter"/></textarea></td>
					</tr>
					<?php echo $upload_field;?>
					<?php if ($user_captcha=='local') {
						?>
					<tr>
						<td class="key"><?php echo $pass;?></td>
						<td width="80%"><?php echo _lkn_config_unregistered_user_apply_image_verify_write;?><br /><input value="" type="text" class="text_area" style="width: 80%;" name="verifyregcode"></td>
					</tr>
					<?php }?>	
					<tr align="right" colspan="2">
						<td colspan="2"><input type="button" value="<?php echo _lkn_job_apply;?>" class="btn" onclick="javascript:validateFormOnSubmit();"/></td>
					</tr>
				</tbody>
			</table>
				<input type="hidden" name="option" value="com_jobs"/>
				<input type="hidden" name="task" value="apply_job_"/>
				<input type="hidden" name="applicant_name" value=""/>
				<input type="hidden" name="job_title" value="<?php echo $title;?>"/>
				<input type="hidden" name="job_alias" value="<?php echo $job_alias;?>"/>
				<input type="hidden" name="company_name" value="<?php echo $company_name;?>"/>
				<input type="hidden" name="db2_job_id" value="<?php echo $id;?>"/>
				<input type="hidden" name="inform_employer" value="<?php echo $inform_employer;?>"/>
				<input type="hidden" name="company_id" value="<?php echo $company_id;?>"/>
			</form>
			</div>
			</div>
			</div>
