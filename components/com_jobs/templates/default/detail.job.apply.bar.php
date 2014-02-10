<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

		global $_config;

		$job_seeker_functions=$_config['job_seeker_activate'];

		$user=new lknUser();

		$user_id=$user->getUserID();

		if ($user_id=='' || $user_id=='0') {

			$width='width:45%;';

		}else {

			$width='';

		}

?>
<br /><!-- Apply and Action Bar -->
<div class="jdpActionBar grad lknclearfix">
    <div class="lknDetailJobInnerContent lknclearfix">
        <table class="actionBar" border="0" cellpadding="5" cellspacing="0">
            <tbody>
               	<tr>
                    <td style="text-align: left !important;<?php echo $width;?>">
                        <?php if ($job_seeker_functions=='1') 
						{
						?>
						<?php if ($user_id=='') 
						{
						?>
                        <a href="javascript:void(0)" class="btn">
							<?php echo _lkn_login_to_continue;?>
                       	</a>
                      	<?php
                      	}
						else
						{
                       	$link="index.php?option=com_jobs&task=apply_job&id=$id:$alias" . $Itemid;
                      	$link=lknSef::url($link);
                      	?>
                        <button style="cursor:pointer;" name="apply_button" class="btn" 
                            onclick="javascript: window.location='<?php echo $link;?>'">
                            <?php echo _lkn_job_apply;?> >>
                        </button>
						<?php 
                       	}
						?>
                        <?php 
						}
						?>
                	</td>
                    <td class="actionBarLast">
                    	<a href="<?php echo $print_link;?>" target="_blank">
							<?php echo _lkn_job_print;?>
                      	</a>
                  	</td>
            	</tr>
   			</tbody>
   		</table>
   	</div>
</div>
<!-- End Apply and Action Bar -->