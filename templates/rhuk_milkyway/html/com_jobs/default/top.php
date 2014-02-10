<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
global $_config;
?>		

	<div class="cb_header">
			<div class="cb_nav lknclearfix">
			    <div class="bounds lknclearfix">
					<div class="nav_wrapper" >
							<ul id="navlist">
								<li>
									<a href="<?php echo $home;?>"><?php echo _lkn_toolbar_job_categories;?></a>
								</li>
								<?php if (($userType=='worker' || $userType=='new') || $user_id=='') { 
									if ($_config['disable_advanced_search']=='1') {
										}else {?>
								<li>
										<?php
											
											$link="index.php?option=com_jobs&task=advanced_search&Itemid=$Itemid";
											$link=lknSef::url($link);
											
										?>
										<a href="<?php echo $link;?>"><?php echo _lkn_search_detailed;?></a>
								</li>									
								<?php 
										}
										}?>

								<?php if ($user_registration_way=='1' and  $userType=='new') { 
								}else {?>
									<?php if ((($userType=='employer' || $userType=='new') and $user_id!='' and $company_functions=='1')) { ?>
									<li>
										<a href="<?php echo $employer_tools;?>"><?php echo _lkn_toolbar_employer_tools;?></a>
									</li>
									<li>
										<?php
											$link="index.php?option=com_jobs&task=employer_resume_search_form&Itemid=$Itemid";
											$link=lknSef::url($link);
										?>
										<a href="<?php echo $link;?>"><?php echo _lkn_search_resume;?></a>
									</li>
									<?php }?>
									<?php if ((($userType=='worker' || $userType=='new') and $user_id!='' and $job_seeker_functions=='1')) { ?>
									<li>
									    <a href="<?php echo $job_seeker_tools;?>"><?php echo _lkn_toolbar_job_seeker_tools;?></a>
									</li>

									<?php }?>
									
									
								<?php }?>
							</ul>
							<div class="toolbar-username"><?php echo $greetings;?></div>
					</div>
				</div>
			</div>
		<div class="edge"></div>
	</div>