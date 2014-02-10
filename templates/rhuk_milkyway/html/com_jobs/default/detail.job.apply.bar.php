<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
		global $_config;
		$job_seeker_functions=$_config['job_seeker_activate'];
		$login_warning=$_config ['job_apply_login_warning'];
		//1: Job Detail Pages. That means HERE
		//2: Warn the job seeker that he needs to login on Job Apply PAge
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
            			<table class="actionBar">
            				<tbody>
            					<tr>
            						<td style="text-align: left !important;<?php echo $width;?>">
            							<?php if ($application_link!='') {?>
            								<button name="apply_button" class="btn" onclick="javascript: window.location='<?php echo $application_link;?>'"><?php echo _lkn_job_apply;?> >></button>
            							<?php }else{ ?>
	            							<?php if ($job_seeker_functions=='1') {?>
		            							<?php if ($user_id=='' and $login_warning=='1') {?>
													<a href="javascript:void(0)" class="btn"><?php echo _lkn_login_to_continue;?></a>
												<?php
		            							}else {
		            								$link="index.php?option=com_jobs&task=apply_job&id=$id:$alias" . $Itemid;
		            								$link=lknSef::url($link);
		            								?>
		            								<button name="apply_button" class="btn" onclick="javascript: window.location='<?php echo $link;?>'"><?php echo _lkn_job_apply;?> >></button>
		            								<?php 
		            							}
		            							?>
		            						<?php }?>
	            						<?php }?>
            						</td>
            						<td class="actionBarLast">	<a href="<?php echo $print_link;?>" target="_blank"><?php echo _lkn_job_print;?></a></td>
                            		</tr>
                            	</tbody>
                            </table>
                         </div>
                     </div>	
    <!-- End Apply and Action Bar -->