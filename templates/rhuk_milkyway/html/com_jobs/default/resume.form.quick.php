<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }


		global $option,$_lknBaseFramework,$_config,$offset,$task;
		$_db=&lknDb::createInstance();	
			
		?>
			<h1><?php echo _lkn_resume_add_quick_resume;?></h1><br />
	<script language="javascript" type="text/javascript">
			function validateFormOnSubmit() {
			
			var reason = "";
			var theForm=document.adminForm;
		alert("grrrr");
		  reason += validateEmpty(theForm.db_title,"<?php echo _lkn_error_form_resume_title;?>");
		  reason += validateEmpty(theForm.db_name,"<?php echo _lkn_error_form_resume_name;?>");
		  reason += validateEmpty(theForm.db_email_address,"<?php echo _lkn_error_form_resume_email;?>");
		  reason += validateEmpty(theForm.db_language,"<?php echo _lkn_error_form_resume_language;?>");
		 	<?php if ($package_list!='') {?>
		 	reason += validateEmpty(theForm.package_id,"<?php echo _lkn_credit_package_list_left_resume_create_desc;?>");
			<?php }?>
		  if (reason != "") {
		    alert("<?php echo _lkn_error_form;?>\n" + reason);
		    return false;
		  }	
		  theForm.submit();
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
		
		<form action="index.php" method="post" id="adminForm" name="adminForm" enctype="multipart/form-data">
				<table class="general_table">
					<tr>
						<td width="100" align="right" class="key">
							<?php echo lknToolTip(_lkn_resume_title_tip,_lkn_resume_title); ?>:
						</td>
						<td>
							<input class="text_area" type="text" name="db_title" id="db_title" size="50" maxlength="255" value = "" />
						</td>
						
					</tr>
					<tr>
						<td width="100" align="right" class="key">
							<?php echo lknToolTip(_lkn_resume_name_tip,_lkn_resume_name); ?>:
						</td>
						<td>
							<input class="text_area" type="text" name="db_name" id="db_name" size="50" maxlength="255" value = "" />
						</td>
					</tr>
					<tr>
						<td width="100" align="right" class="key">
							<?php echo lknToolTip(_lkn_resume_email_address_tip,_lkn_resume_email_address); ?>:
						</td>
						<td>
							<input class="text_area" type="text" name="db_email_address" 
							id="db_email_address" size="20" maxlength="255" 
							value = "" />
						</td>						
					</tr>
					<tr>
						<td width="100" align="right" class="key">
							<?php echo lknToolTip(_lkn_resume_posting_language_tip,_lkn_resume_posting_language); ?>:
						</td>
						<td>
							<input class="text_area" type="text" name="db_language" id="db_language" size="50" maxlength="255" value = "" />
						</td>
						
					</tr>
					<tr>
						<td width="100" align="right" class="key">
							<?php echo lknToolTip(_lkn_published_tip,_lkn_published); ?>:
						</td>
						<td>
							<?php echo lknhtmlMaker::publishedSelectList('db_published','1');?>
						</td>
					</tr>
					<tr>
						<td width="100" align="right" class="key">
							<?php echo lknToolTip ( _lkn_file_upload_tip, _lkn_files_file_new );?>:
						</td>
						<td>
							<input type="file" name="resume_file" title="Pick a file to attach the resume" size="50" class="text_area" id="db_file"/>
						</td>
					</tr>
					<tr>
						<td colspan="2">
								<?php
									$allowed_images = lknJobsFunctions::getAllowedFileTypes(). ',' . $_config['files_image_types'];
									$image_size = $_config['files_size'];
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
				<?php echo $package_list;?>	
		<div class="floatRight">
			<button type="button" class="btn" onclick="javascript: validateFormOnSubmit();"/><?php echo _lkn_resume_add;?></button>
		</div>

			<input type="hidden" name="db_memberid" value = "<?php echo $memberid;?>" />
			<input type="hidden" name="option" value="com_jobs" />
			<input type="hidden" name="task" value="save_resume_quick" />

		</form>