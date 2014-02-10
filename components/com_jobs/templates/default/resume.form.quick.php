<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }


		global $_db,$option,$_lknBaseFramework,$_config,$offset,$task;
		
			
		?>
        <div id="titledemo1" style="width:100%;">
			<h1 style="text-align:center;"><?php echo _lkn_resume_add_quick_resume;?></h1><br />
            </div>
	<script language="javascript" type="text/javascript">
			function validateFormOnSubmit(theForm) {
			var reason = "";
			
		  reason += validateEmpty(theForm.db_title,"<?php echo _lkn_error_form_resume_title;?>");
		  reason += validateEmpty(theForm.db_name,"<?php echo _lkn_error_form_resume_name;?>");
		  reason += validateEmpty(theForm.db_email_address,"<?php echo _lkn_error_form_resume_email;?>");
		  reason += validateEmpty(theForm.db_language,"<?php echo _lkn_error_form_resume_language;?>");
 
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
		
		<form action="index.php" method="post" id="adminForm" name="adminForm" enctype="multipart/form-data" onsubmit="return validateFormOnSubmit(this)" >
				<table id="tools_employees" cellpadding="5" cellspacing="0" border="0">
                <thead>
                	<tr>
                    	<th colspan="5">
                        </th>
                    </tr>
                </thead>
                <tbody>
					<tr>
						<td width="100" align="right" class="key" style="padding:5px;">
							<?php echo lknToolTip(_lkn_resume_title_tip,_lkn_resume_title); ?>:
						</td>
						<td style="padding:5px;">
							<input class="text_area" type="text" name="db_title" id="db_title" size="50" maxlength="255" value = "" />
						</td>
						
					</tr>
					<tr>
						<td width="100" align="right" class="key" style="padding:5px;">
							<?php echo lknToolTip(_lkn_resume_name_tip,_lkn_resume_name); ?>:
						</td>
						<td style="padding:5px;">
							<input class="text_area" type="text" name="db_name" id="db_name" size="50" maxlength="255" value = "" />
						</td>
					</tr>
					<tr>
						<td width="100" align="right" class="key" style="padding:5px;">
							<?php echo lknToolTip(_lkn_resume_email_address_tip,_lkn_resume_email_address); ?>:
						</td>
						<td style="padding:5px;">
							<input class="text_area" type="text" name="db_email_address" 
							id="db_email_address" size="20" maxlength="255" 
							value = "" />
						</td>						
					</tr>
					<tr>
						<td width="100" align="right" class="key" style="padding:5px;">
							<?php echo lknToolTip(_lkn_resume_posting_language_tip,_lkn_resume_posting_language); ?>:
						</td>
						<td style="padding:5px;">
							<input class="text_area" type="text" name="db_language" id="db_language" size="50" maxlength="255" value = "" />
						</td>

						
					</tr>
					<tr>
						<td width="100" align="right" class="key" style="padding:5px;">
							<?php echo lknToolTip(_lkn_published_tip,_lkn_published); ?>:
						</td>
						<td style="padding:5px;">
							<?php echo lknhtmlMaker::publishedSelectList('db_published','1');?>
						</td >
					</tr>
					<tr>
						<td width="100" align="right" class="key" style="padding:5px;">
							<?php echo lknToolTip ( _lkn_file_upload_tip, _lkn_files_file_new );?>:
						</td>
						<td style="padding:5px;">
							<input type="file" name="resume_file" title="Pick a file to attach the resume" size="50" class="text_area" id="db_file"/>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="padding:5px; color:#01376E;">
								<?php
									$allowed_images = $_config['files_file_types'] . ',' . $_config['files_image_types'];
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

					</tbody>
				</table>			
		<div class="floatRight">
			<input type="submit" value="<?php echo _lkn_resume_add;?>" class="btn"/ style="margin-left:66px;">
		</div>

			<input type="hidden" name="db_memberid" value = "<?php echo $memberid;?>" />
			<input type="hidden" name="option" value="com_jobs" />
			<input type="hidden" name="task" value="save_resume_quick" />

		</form>
        <br /><br /><br /><br />