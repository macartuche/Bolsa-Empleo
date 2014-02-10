<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
	<?php //tepedki açıklama yazdırılmaya başladı?>
		<table class="table" width="100%" cellspacing="0" cellpadding="5" border="0" align="center">
		<tbody>
			<tr>
				<td valign="top" align="right">
					<img border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'resume_search.gif';?>"/>
				</td>
				<td width="100%" valign="top">
				<p class="header4"><?php echo _lkn_info;?></p>
					<?php echo $search_description;?>

				</p>
				</td>
			</tr>
		</tbody>
		</table>
		
	<?php //tepedki açıklama yazdırılması bitti?>	
		<?php if ($action=='') {
				?>
				<script type="text/javascript" language="javascript">
					<!--
					function submitjobform()
					{
			
						document.adminForm.submit();
				
					}
					  
				//-->
				</script>
				<form action="index.php" method="post" name="adminForm" id="adminForm">
					<div class="jl_wrap_div grad">
						<table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
							<tbody>
								<tr>
									<th align="left"><?php echo _lkn_package_title;?></th>
									<th align="left"><?php echo _lkn_package_resume_view;?></th>
									<th align="left"><?php echo _lkn_package_resume_view_duration;?></th>
									<th align="left"></th>
								</tr>
												
					<?php 
					$k=1;
					$r=0;//at least one review package is displayed or not
					foreach ($rows as $row) {	
						//print_r($row);
						$id=$row->id;				
						$resume_view_duration=$row->resume_view_duration;
						$can_search_start=$row->can_search_start;
						if ($resume_view_duration>0 && $can_search_start==$null_date) {
							$r=1;
							$plan_id = $row->plan_id;
							$title = lknMakeHtmlSafe(temizleSlash ( $row->title ));						
							$resume_view=$row->allowed_resume_view;
							if ($resume_view=='0') {
								$resume_view=_lkn_package_resume_view_unlimited;
							}
						
								
						if ($k=='1') {
							$class='jl_odd_row';
						}else {
							$class='jl_even_row';
						}
					?>
						<tr class="<?php echo $class;?>">
							<td align="left"><?php echo $title;?></td>
							<td align="left"><?php echo $resume_view;?></td>
							<td align="left"><?php echo $resume_view_duration;?></td>
							<td align="left">
							<input type="hidden" name="package_id" value="<?php echo $id;?>" />
							<button type="button" class="btn" onclick="javascript: submitjobform()"><?php echo _lkn_employer_package_use_this;?></button></td>
						</tr>
					<?php
						$k=3-$k;
						}
					}
					
					if ($r=='0') {
					//there is no package that employer can use for the resume search.
					//inform him
						?>
						<tr class="jl_odd_row">
							<td align="left" colspan="4"><h2><?php echo _lkn_error_form_job_package_for_resume_search;?></h2></td>
						</tr>
					<?php }?>
							</tbody>
						</table>
					</div>
				<input type="hidden" name="option" value="com_jobs" />
				<input type="hidden" name="task" value="employer_extend_resume_search" />
				<input type="hidden" name="user_id" value="<?php echo $user_id;?>" />
				<input type="hidden" name="action" value="confirm" />
				</form>

		<?php
		}else{
				?>
			<form action="index.php" method="post" name="adminForm" id="adminForm">
				<table class="general_table">
				<tr>
					<td align="left">
					<?php echo $credits_final_message;?>
					</td>
					</tr>
				</table>

				<br />
				<div class="floatRight">
					<input type="hidden" name="option" value="com_jobs" />
					<input type="hidden" name="task" value="employer_extend_resume_search" />
					<input type="hidden" name="user_id" value="<?php echo $user_id;?>" />
					<input type="hidden" name="action" value="submit" />
					<input type="hidden" name="package_id" value="<?php echo $package_id;?>" />
					<input type="submit" class="btn" name="submit" value="<?php echo _lkn_submit;?>" /> &nbsp; &nbsp;
					<input type="button" class="btn" value="<?php echo _lkn_cancel;?>" onClick="history.go(-1)">
				</div>
				</form>

		<?php }?>