<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>

			<p class="header4"><?php echo _lkn_info;?></p>
		<table width="100%" cellspacing="2" cellpadding="2" border="0" class="table">
			<tbody><tr>
				<td width="3%"><img alt="active" src="<?php echo TEMPLATE_IMAGE_PATH.'published.gif';?>"/></td>
				<td width="47%"><?php echo _lkn_employer_info_table_job_is_published;?></td>
				<td width="3%"><img alt="inactive" src="<?php echo TEMPLATE_IMAGE_PATH."published_x.gif";?>"/></td>
				<td width="47%"><?php echo _lkn_employer_info_table_job_is_unpublished;?></td>
			</tr>
			<tr>
				<td><img alt="read" src="<?php echo TEMPLATE_IMAGE_PATH."view.gif";?>"/></td>
				<td><?php echo _lkn_employer_info_table_view;?></td>
				<td><img alt="unread" src="<?php echo TEMPLATE_IMAGE_PATH. "edit.gif";?>"/></td>
				<td><?php echo _lkn_employer_info_table_edit;?></td>
			</tr>
			<tr>
				<td><img alt="edit" src="<?php echo TEMPLATE_IMAGE_PATH."inactive.gif";?>"/></td>
				<td><?php echo _lkn_employer_info_inactive;?></td>
				<td><img alt="draft" src="<?php echo TEMPLATE_IMAGE_PATH."draft.png";?>"/></td>
				<td><?php echo _lkn_employer_info_draft;?></td>
			</tr>
			<tr>
				<td><img alt="edit" src="<?php echo TEMPLATE_IMAGE_PATH."active.gif";?>"/></td>
				<td><?php echo _lkn_employer_info_active_but_pending;?></td>
				<td></td>
				<td></td>
			</tr>
		</tbody></table>