<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
		global $option, $_lknBaseFramework, $_config, $offset, $task;
		$_db=&lknDb::createInstance();	
		?>

		<h1><?php echo _lkn_app_history;?></h1><br />
		<div class="jl_wrap_div grad">	
		   <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
					<thead>
						<tr>
							<th><strong><?php echo _lkn_id;?></strong></th>
							<th><strong><?php echo _lkn_app_date;?></strong></th>
							<th><strong><?php echo _lkn_app_last_update_date;?></strong></th>
							<th><strong><?php echo _lkn_app_status;?></strong></th>
							<th><strong><?php echo _lkn_app_comments;?></strong></th>
							<th><strong><?php echo _lkn_job;?></strong></th>
							<th><strong><?php echo _lkn_job_reference;?></strong></th>
							<th><strong><?php echo _lkn_resume;?></strong></th>
						</tr>
					</thead>
					<?php
					$k=1;
					
					foreach ( $row_app_history as $row ) {
						
						//print_r($row);
						$id=$row->id;
						$app_date=$row->application_date;
						$app_date=lknDate::formatDate($app_date);
						
						$update_date=$row->update_date;
						$update_date=lknDate::formatDate($update_date);
						
						$status_title=temizleSlash($row->status_title);
						
						$comments=$row->comments;
						if ($comments=='') {
							$comments='-';
						}

						$job_title=$row->job_title;
						$job_id=$row->job_id;
						$job_ref=$row->job_ref;
						if ($job_ref=='') {
							$job_ref='-';
						}
						
						
						$resume_title=$row->resume_title;
						$resume_language=$row->resume_language;
						
						if ($k=='1') {
							$class='jl_odd_row';
						}else {
							$class='jl_even_row';
						}
						
						$app_url="index.php?option=com_jobs&task=edit_employer_application&id=$id".$itemid;
						$app_url=lknSef::url($app_url);

						$job_url="index.php?option=com_jobs&task=edit_employer_job&id=$job_id".$itemid;
						$job_url=lknSef::url($job_url);
						?>

						<tr class="<?php echo $class;?>">
							<td><a href="<?php echo $app_url;?>" target="app"><?php echo $id;?></a></td>
							<td><?php echo $app_date;?></td>
							<td><?php echo $update_date;?></td>
							<td><?php echo $status_title;?></td>
							<td><?php echo $comments;?></td>
							<td><a href="<?php echo $job_url;?>" target="_job_"><?php echo $job_title;?></a></td>							
							<td><?php echo $job_ref;?></td>
							<td><?php echo $resume_title;?></td>
						</tr>

						<?php

						$k = 3 - $k;

					}
				?>
			</table>
		</div>