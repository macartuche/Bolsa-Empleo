<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }	
?>
<div class="creationprofilediv">
	<table cellspacing="0" border="0" id="tools_employees" cellpadding="5">
    	<thead>
        	<tr>
            	<th>
                </th>
            </tr>
        </thead>
		<tbody>
			<tr>
				<th align="left" colspan="2"><?php echo _lkn_user_registration_create_profile;?></th>
			</tr>
			<tr class="jl_odd_row" style="width:50%;">
				<td align="left" width="50%">
					<?php echo _lkn_user_registration_create_profile_worker_message;?>
                    <div style="margin-left:60px">
					<br /><a href="<?php echo $create_resume_link;?>" class="btn"><?php echo _lkn_user_registration_create_profile_worker_link_message;?></a>
					</div>
				</td>
				<td align="left" width="35%">
					<br  /><br />
					<?php echo _lkn_user_registration_create_profile_employer_message;?>
					<div  style="margin-left:40px">
					<br /><a href="<?php echo $new_company_link;?>" class="btn"><?php echo _lkn_user_registration_create_profile_employer_link_message;?></a>
                    </div>
                    <br /><br />
				</td>
			</tr>
		</tbody>
	</table>
</div>
 <br /><br /> <br /><br />