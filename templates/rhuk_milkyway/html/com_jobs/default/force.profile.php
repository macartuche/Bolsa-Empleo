<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }	
?>
<div class="jl_wrap_div grad">
	<table cellspacing="0" border="0" class="jl_tbl" style="border-collapse: collapse;">
		<tbody>
			<tr>
				<th align="left" colspan="2"><?php echo _lkn_user_registration_create_profile;?></th>
			</tr>
			<tr class="jl_odd_row">
				<?php if ($who_can_create_employer_profile=='2' || $who_can_create_employer_profile=='3') {?>
					<td align="left">
						<?php echo _lkn_user_registration_create_profile_worker_message;?>
						<br /><a href="<?php echo $create_resume_link;?>" class="btn"><?php echo _lkn_user_registration_create_profile_worker_link_message;?></a>
					</td>
				<?php }?>
				<?php if ($who_can_create_employer_profile=='1' || $who_can_create_employer_profile=='3') {?>
				<td align="left">
					<?php echo _lkn_user_registration_create_profile_employer_message;?>
					<br /><a href="<?php echo $new_company_link;?>" class="btn"><?php echo _lkn_user_registration_create_profile_employer_link_message;?></a>
				</td>
				<?php }?>
			</tr>
		</tbody>
	</table>
</div>