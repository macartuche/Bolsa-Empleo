<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
	<p class="header4"><?php echo _lkn_info;?></p>
	<table width="100%" cellspacing="2" cellpadding="2" border="0" class="table">
		<tbody>
			<tr>
				<td width="2%"><img alt="active" src="<?php echo TEMPLATE_IMAGE_PATH."edit.gif";?>"/></td>
				<td width="48%"><?php echo _lkn_employer_pending_credit_payment_made;?></td>
				<td width="2%"><img alt="inactive" src="<?php echo TEMPLATE_IMAGE_PATH."edit_.gif";?>"/></td>
				<td width="48%"><?php echo _lkn_employer_pending_credit_payment_not_made;?></td>
			</tr>
		</tbody>
	</table>