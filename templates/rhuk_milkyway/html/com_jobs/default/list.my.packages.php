<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
	<?php //tepedki açıklama yazdırılmaya başladı?>
		<table width="100%" cellspacing="0" cellpadding="5" border="0" align="center" class="table">
			<tbody><tr>
				<td valign="top" align="right">
				<img border="0" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'info.gif';?>"/>
				</td>
				<td width="100%" valign="top">
					<p class="header4"><?php echo _lkn_info;?></p>
					<?php echo _lkn_employer_my_packages_desc;?>
				</td>
			</tr>
		</tbody></table>
	<?php //tepedki açıklama yazdırılması bitti?>	
	<?php //kategoriye ait işlerin yazırılması başladı?>

		
		
		<div class="jl_wrap_div grad">	
			<?php if ($userType=='worker') {?>
				   <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
						<thead>
							<tr>
							<th><strong><?php echo _lkn_id; ?></strong></th>
							<th><strong><?php echo _lkn_package_title; ?></strong></th>
							<th><strong><?php echo _lkn_package_job_apply_count;?></strong></th>
							<th><strong><?php echo _lkn_package_job_applied_count?></strong></strong></th>
							<th><strong><?php echo _lkn_package_resume_count;?></strong></th>
							<th><strong><?php echo _lkn_package_resume_count_created;?></strong></th>
							<th><strong><?php echo _lkn_package_ended; ?></strong></th>
							</tr>
						</thead>
				<tbody>
				<?php 
			
				$k=1;
				$e=0;
				foreach ($rows as $row) {
					$e=1;
					//print_r($row);
					$id=$row->id;
					$title=temizleSlash($row->plan_name);
					$title="<a href=\"" .lknSef::url("index.php?option=com_jobs&task=list_employer_credit_speding_history&user_id=$user_id&package_id=$id".$itemid)."\">$title</a>";
					
					$job_job_apply_count=$row->job_job_apply_count;
					$job_apply_count=$row->job_apply_count;
					
					$allowed_resume_count=$row->allowed_resume_count;
					$resume_count=$row->resume_count;
					
					$isended=$row->isended;
					if ($isended=='0') {
						$isended=_lkn_no;
					}else {
						$isended=_lkn_yes;
					}
						
					
					
						
					if ($k=='1') {
						$class='jl_odd_row';
					}else {
						$class='jl_even_row';
					}
										
								
					?>
						<tr class="<?php echo $class;?>">
							<td><?php echo $id;?></td>
							<td><?php echo $title;?></td>
							<td><?php echo $job_job_apply_count; ?></td>
							<td><?php echo $job_apply_count; ?></td>
							<td><?php echo $allowed_resume_count; ?></td>
							<td><?php echo $resume_count; ?></td>
							<td><?php echo $isended; ?></td>
						</tr>
			
					<?php
					$k=3-$k;
				}
				
				if($e==0){
					?>
					<tr class="jl_odd_row">
							<td colspan="6"><h1><?php echo _lkn_error_form_no_package;?></h1></td>
						</tr>
					<?php 
				}
		}else {
			//employer
			?>				
				   <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
						<thead>
							<tr>
								<th><strong><?php echo _lkn_id; ?></strong></th>
								<th><strong><?php echo _lkn_package_title; ?></strong></th>
								<th><strong><?php echo _lkn_package_job_count; ?></strong></th>
								<th><strong><?php echo _lkn_package_job_count_posted; ?></strong></th>
								<th><strong><?php echo _lkn_package_has_resume_access; ?></strong></th>
								<th><strong><?php echo _lkn_package_ended; ?></strong></th>
							</tr>
						</thead>
				<tbody>
				<?php 
			
				$k=1;
				$e=0;
				foreach ($rows as $row) {
					$e=1;
			//			print_r($row);
					$id=$row->id;
					$title=temizleSlash($row->plan_name);
					$title="<a href=\"" .lknSef::url("index.php?option=com_jobs&task=list_employer_credit_speding_history&user_id=$user_id&package_id=$id".$itemid)."\">$title</a>";
					
					$allowed_job_count=$row->allowed_job_count;
					$posted_job_count=$row->posted_job_count;
					if ($allowed_job_count=='0') {
						$allowed_job_count='-';
						$posted_job_count='-';
					}
					
					$resume_view_duration=$row->resume_view_duration;
					if ($resume_view_duration>0) {
						$can_search_start=$row->can_search_start;
						if ($can_search_start==$nulldate) {
							$resume_view_duration=_lkn_package_has_resume_access_;
						}else {
							$can_search_end=lknDate::formatDate($row->can_search_end);
							$can_search_start=lknDate::formatDate($can_search_start);
							//You have used this package to access resume database between {START} and {END} dates
							$resume_view_duration=_lkn_package_has_resume_access_used;
							$resume_view_duration=str_replace('{START}',$can_search_start,$resume_view_duration);
							$resume_view_duration=str_replace('{END}',$can_search_end,$resume_view_duration);
						}
					}else {
						$resume_view_duration=_lkn_package_has_resume_access_no;

						
					}
					
					$isended=$row->isended;
					if ($isended=='0') {
						$isended=_lkn_no;
					}else {
						$isended=_lkn_yes;
					}
						
					
					
						
					if ($k=='1') {
						$class='jl_odd_row';
					}else {
						$class='jl_even_row';
					}
										
								
					?>
						<tr class="<?php echo $class;?>">
							<td><?php echo $id;?></td>
							<td><?php echo $title;?></td>
							<td><?php echo $allowed_job_count; ?></td>
							<td><?php echo $posted_job_count; ?></td>
							<td><?php echo $resume_view_duration; ?></td>
							<td><?php echo $isended; ?></td>
						</tr>
			
					<?php
					$k=3-$k;
				}
				
				if($e==0){
					?>
					<tr class="jl_odd_row">
							<td colspan="6"><h1><?php echo _lkn_error_form_no_package;?></h1></td>
						</tr>
					<?php 
				}
		}
		
		?>
		</tbody>
		</table>
		</div>