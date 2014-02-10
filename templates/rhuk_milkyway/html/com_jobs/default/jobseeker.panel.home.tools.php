<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
			
?>

		<br />
		<div class="jl_wrap_div grad">
			<table class="jl_tbl" cellspacing="0" border="0" style="border-collapse: collapse;">
			<thead>
			<tr>
				<th><strong><?php echo _lkn_worker_my_tools;?></strong></th>
			</tr>
			</thead>
				<tbody>
					<tr class="jl_even_row">
						<td valign="top">
							<p class="header3">
								<a href="<?php echo lknSef::url("index.php?option=com_jobs&task=list_worker_applications" . $itemid)?>"><?php echo _lkn_worker_my_applications;?></a>
							</p>
							<p>
								<img height="58" width="53" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'info.gif';?>"/>
								<?php echo _lkn_worker_my_applications_desc;?>
							</p>
						</td>
					</tr>
					<tr class="jl_odd_row">
						<td valign="top">
							<p class="header3">
								<a href="<?php echo lknSef::url("index.php?option=com_jobs&task=list_worker_cover_letters" . $itemid)?>"><?php echo _lkn_worker_my_cover_letters;?></a>
							</p>
							<p>
								<img height="58" width="53" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'cover_letter_small.gif';?>"/>
								<?php echo _lkn_worker_my_cover_letters_desc;?>
							</p>
						</td>
					</tr>
					<?php if ($files_active=='1') {?>
						<tr class="jl_odd_row">
							<td valign="top">
								<p class="header3">
									<a href="<?php echo lknSef::url("index.php?option=com_jobs&task=list_worker_files" . $itemid)?>"><?php echo _lkn_worker_files;?></a>
								</p>
								<p>
									<img height="58" width="53" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'file.gif';?>"/>
									<?php echo _lkn_worker_files_desc;?>
								</p>
							</td>
						</tr>
					<?php }?>
					<?php if ($feeds_active=='1') { ?>
					<tr class="jl_even_row">
						<td valign="top">
							<p class="header3">
								<a href="<?php echo lknSef::url("index.php?option=com_jobs&task=rss_page" . $itemid)?>"><?php echo _lkn_worker_rss;?></a>
							</p>
							<p>
								<img height="58" width="53" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'rss_big.gif';?>"/>
									<?php echo _lkn_worker_rss_desc;?>
								</p>
						</td>
					</tr>
					<?php }	?>
					<?php if ($credit_system_active=='1') { ?>
					<tr class="jl_odd_row">
						<td valign="top">
							<p class="header3">
							<a href="<?php echo lknSef::url("index.php?option=com_jobs&task=buy_credits" . $Itemid)?>">
								<?php echo _lkn_employer_buy_credits;?>
							</a>
							</p>
							<p>
							<img height="60" width="60" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'buy_credits.gif';?>"/>
							<?php echo _lkn_worker_buy_credits_desc;?></p>
						</td>
					</tr>		
					<?php }?>
					<?php if ($job_alerts_active=='1') { ?>
					<tr class="jl_even_row">
						<td valign="top">
							<p class="header3">
							<a href="<?php echo lknSef::url("index.php?option=com_jobs&task=list_worker_job_alerts" . $Itemid)?>">
								<?php echo _lkn_worker_job_alerts;?>
							</a>
							</p>
							<p>
							<img height="60" width="60" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'job_alerts.gif';?>"/>
							<?php echo _lkn_worker_job_alerts_desc;?></p>
						</td>
					</tr>		
					<?php }?>
				</tbody>
			</table>
		</div>