<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
	<p class="header4"><?php echo _lkn_info;?></p>
	<table width="100%" cellspacing="2" cellpadding="2" border="0" class="table">
			<tbody>
			<tr>
				<td width="2%"><img alt="active" src="<?php echo TEMPLATE_IMAGE_PATH. "active.gif";?>"/></td>
				<td width="48%"><?php echo _lkn_worker_app_info_table_job_active;?></td>
				<td width="2%"><img alt="inactive" src="<?php echo TEMPLATE_IMAGE_PATH. "inactive.gif";?>"/></td>
				<td width="48%"><?php echo _lkn_worker_app_info_table_job_inactive;?></td>
			</tr>
			<tr>
				<td><img alt="read" src="<?php echo TEMPLATE_IMAGE_PATH. "open_envelope.gif";?>"/></td>
				<td><?php echo _lkn_worker_app_info_table_read_message;?></td>
				<td><img alt="unread" src="<?php echo TEMPLATE_IMAGE_PATH. "closed_envelope.gif";?>"/></td>
				<td><?php echo _lkn_worker_app_info_table_unread_message;?></td>
			</tr>
			<tr>
				<td><img alt="edit" src="<?php echo TEMPLATE_IMAGE_PATH. "edit.gif";?>"/></td>
				<td><?php echo _lkn_worker_app_info_table_has_cover_letter;?></td>
				<td><img alt="edit" src="<?php echo TEMPLATE_IMAGE_PATH. "edit_.gif";?>"/></td>
				<td><?php echo _lkn_worker_app_info_table_has_not_cover_letter;?></td>
			</tr>
		</tbody>
	</table>