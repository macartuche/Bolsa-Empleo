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
				<form action="index.php" method="GET" name="adminForm">
				<table class="general_table">
				<tr>
					<td class="key" width="15%"><?php echo _lkn_employer_extend_resume_database_search_days;?></td>
					<td width="20%"><input type="text" class="text_area" name="days_count" size="25" maxlength="50" value="<?php echo $days_count;?>"/></td>
					<td width="60%">

					<?php
						echo $days_description;
					?>
					</td>
					</tr>
					</table>
				<input type="hidden" name="option" value="com_jobs" />
				<input type="hidden" name="task" value="employer_extend_resume_search" />
				<input type="hidden" name="user_id" value="<?php echo $user_id;?>" />
				<input type="hidden" name="action" value="confirm" />
				<br />
				<div class="floatRight">
					<input type="submit" class="btn" name="submit" value="<?php echo _lkn_submit;?>"/>
				</div>
				</form>

		<?php
		}else{


				?>

				<table class="general_table">
				<tr>
					<td align="left">
					<?php echo $credits_final_message;?>
					</td>
					</tr>
					</table>

				<br />
				<div class="floatRight">
					<?php
						$url=lknSef::url("index.php?option=com_jobs&task=employer_extend_resume_search&user_id=$user_id&days_count=$days_count&action=submit" . $itemid);
					?>
					<a class="btn" href="<?php echo $url;?>"><?php echo _lkn_submit;?></a> &nbsp; &nbsp;
					<?php
						$url=lknSef::url("index.php?option=com_jobs&task=employer_extend_resume_search&user_id=$user_id&days_count=echo $days_count" . $itemid);
					?>
					<a class="btn" href="<?php echo $url;?>"><?php echo _lkn_cancel;?></a>
				</div>
				</form>

		<?php }?>