<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

		global $_lknBaseFramework, $_config;

		//	print_r($row);
		if ($row!='') {
			$id = $row->id;
			$file_name=$row->file_name;
			$file="<a href=\"".LIVE_SITE . $_config['files_folder'] . $file_name."\">$file_name</a>";
			$published = $row->published;
			$file_notes=$row->file_notes;
			$action = _lkn_files_file_update;
			$task = 'update_worker_file';
		} else {
			$id = '';
			$file='-';
			$published = '0';
			$file_notes='';
			$file_name='';
			$action = _lkn_files_file_new;
			$task = 'save_worker_file';
		}
		?>
	<script language="javascript" type="text/javascript">
			function validateFormOnSubmit(theForm) {
			var reason = "";
			<?php if ($task=='save_worker_file') {?>
				reason += validateEmpty(theForm.db_file_name,"<?php echo _lkn_error_files_no;?>");
			<?php }?>
		  
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
		
		<form action="index.php" method="post" id="adminForm" name="adminForm" enctype="multipart/form-data" onsubmit="return validateFormOnSubmit(this)" >
		
		<?php lknTabs::startTabPanel ();?>
			<?php lknTabs::startTab ( $action );?>
				<table class="general_table">
					<tbody>
						<tr>
							<td><?php echo _lkn_files_file_name  . ': ';?></td>
							<td><?php echo $file;?></td>
							<td><?php echo lknToolTip ( _lkn_published_tip, _lkn_published ) . ': ';?></td>
							<td><?php echo lknhtmlMaker::publishedSelectList ( 'db_published', $published );?></td>
						</tr>
						<tr>
							<td><?php echo lknToolTip ( _lkn_file_notes_tip, _lkn_file_notes ) . ': ';?></td>
							<td><textarea rows="10" cols="30" name="db_file_notes"><?php echo $file_notes ;?></textarea></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
				<table class="general_table">
					<tbody>
						<tr>
							<td><?php echo lknToolTip ( _lkn_file_upload_tip, $action );?></td>
						</tr>
						<tr>
							<td>
								<?php
									$allowed_images = lknJobsFunctions::getAllowedFileTypes() . ',' . $_config['files_image_types'];
									$image_size = $_config['files_size'];
								?>
									<input type="file" name="db_file_name" size="32" />
									<input type="hidden" value="<?php echo $file_name;?>" name="old_file" />
							</td>
						</tr>
						<tr>
							<td>
								<?php
									//Only {IMAGE_TYPES} images are allowed. You and upload maximum {LOGO_SIZE} Kb images size');
									//Only jpeg,jpg,gif,png images are allowed. You and upload maximum 200 Kb images size
									$msg = _lkn_company_logo_desc;
									$msg = str_replace ( '{IMAGE_TYPES}', $allowed_images, $msg );
									$msg = str_replace ( '{LOGO_SIZE}', $image_size, $msg );
									echo $msg;
								?>
							</td>
						</tr>
				</table>
		<?php lknTabs::endTab();?>
		<?php if ($row!='') {?>
		<?php lknTabs::startTab(_lkn_resume);?>
			<?php echo _lkn_file_is_used .'<br />';?>
				<div class="jl_wrap_div grad">
					<table class="jl_tbl" cellspacing="0" border="0" style="border-collapse: collapse;">
						<thead>
							<tr>
								<th><strong><?php echo _lkn_id;?></strong></th>
								<th><strong><?php echo _lkn_resume;?></strong></th>
								<th><strong><?php echo _lkn_resume_hits;?></strong></th>
								<th><strong><?php echo _lkn_published;?></strong></th>
							</tr>
						</thead>
				<?php 
					$count = count($row_resumes);
					if ($count>0) {
						$k=1;
						foreach ($row_resumes as $row) {
							$title = $row->title;
							$resume_id = $row->id;
							$published = $row->published;
							$hits = $row->hits;
							if ($k=='1') {
								$class='jl_odd_row';
							}else {
								$class='jl_even_row';
							}
							
							$r_link="index.php?option=com_jobs&task=edit_resume&id=$resume_id" . $itemid;
							$r_link=lknSef::url($r_link);
						
							?>
							<tr class="<?php echo $class;?>">
								<td align="center"><?php echo $id;?></td>
								<td><a href="<?php echo $r_link;?>"><?php echo $title;?></a></td>
								<td><?php echo $hits;?></td>
								<td><?php echo lknJobsFunctions::getPublishingImage ( $published );?></td>
							</tr>
		
							<?php
							$k = 3 - $k;
						}
				}
		?>
		</table></div>
		<?php lknTabs::endTab();?>
		<?php }?>

		<div class="floatRight">
			<input type="submit" value="<?php echo _lkn_apply;?>" class="btn" onclick="document.adminForm.task.value='apply_worker_file';"/>
			<input type="submit" value="<?php echo $action;?>" class="btn"/>
		</div>

		<input type="hidden" value="<?php echo $id;?>" name="cid" />
		<input type="hidden" value="com_jobs" name="option" />
		<input type="hidden" value="<?php echo $task;?>" name="task" />
		<input type="hidden" value="<?php echo $memberid;?>" name="db_memberid" />

		</form>
		<?php lknTabs::endTabPanel();?>		