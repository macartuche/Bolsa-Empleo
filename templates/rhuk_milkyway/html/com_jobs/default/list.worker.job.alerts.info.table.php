<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
	<p class="header4"><?php echo _lkn_info;?></p>
	<table width="100%" cellspacing="2" cellpadding="2" border="0" class="table">
			<tbody>
			<tr>
				<td width="2%"><img alt="active" src="<?php echo TEMPLATE_IMAGE_PATH. "published.gif";?>"/></td>
				<td width="48%"><?php echo _lkn_worker_job_alerts_info_table_published;?></td>
				<td width="2%"><img alt="inactive" src="<?php echo TEMPLATE_IMAGE_PATH. "published_x.gif";?>"/></td>
				<td width="48%"><?php echo _lkn_worker_job_alerts_info_table_published_x;?></td>
			</tr>
			<tr>
				<td><img alt="read" src="<?php echo TEMPLATE_IMAGE_PATH. "edit.gif";?>"/></td>
				<td><?php echo _lkn_worker_job_alerts_info_table_edit;?></td>
				<td><img alt="unread" src="<?php echo TEMPLATE_IMAGE_PATH. "delete.gif";?>"/></td>
				<td><?php echo _lkn_worker_job_alerts_info_table_delete;?></td>
			</tr>
		</tbody>
	</table>