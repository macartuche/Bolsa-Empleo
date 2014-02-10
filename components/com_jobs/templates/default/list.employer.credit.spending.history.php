<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" class="table">
	<tbody>
    	<tr>
        	<td valign="top" align="right">
            	<img border="0" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'info.gif';?>"/>
        	</td>
        	<td width="100%" valign="top">
            	<p class="header4"><?php echo _lkn_info;?></p>
           		<?php echo _lkn_credit_speding_history_desc;?>
        	</td>
    	</tr>
	</tbody>
</table>
		<?php if ($record_count>0) { ?>

		<div class="jl_wrap_div grad">	

		   <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">

			<thead>

				<tr>

					<th><strong><?php echo _lkn_credit_speding_history_action; ?></strong></th>

					<th><strong><?php echo _lkn_title; ?></strong></th>

					<th><strong><?php echo _lkn_credit_speding_history_spent_credit; ?></strong></th>

					<th><strong><?php echo _lkn_credit_speding_history_spent_date; ?></strong></th>

				</tr>

			</thead>

		<tbody>

		<?php 

	

		$k=1;



		foreach ($rows as $row) {

	//			print_r($row);

			if ($k=='1') {

				$class='jl_odd_row';

			}else {

				$class='jl_even_row';

			}

			

					$spend_action=$row->action;

						

						//1:Adding a job

						if ($spend_action=='1') {

							$spend_action=_lkn_credit_speding_history_action_add_job;

							$job_id=$row->job_id;

								$job_details=$_db->loadTable("SELECT title,created,alias FROM #__jobs_jobs WHERE id='$job_id'");

								$job_details_count=count($job_details);

								if ($job_details_count>0) {

									$job_alias=$job_details->alias;

									$title="<a href=\"" . lknSef::url("index.php?option=com_jobs&task=detail_job&id=$job_id:$job_alias".$itemid) . "\">" . $job_details->title . "</a>";

								}

								

								

							$job_created=lknDate::formatDate($job_details->created);

								

							$credits=$row->credits;

							?>

							<tr class="<?php echo $class;?>">

								<td><?php echo $spend_action;?></a></td>

								<td><?php echo $title;?></td>

								<td><?php echo $credits; ?></td>

								<td><?php echo $job_created; ?></td>

							</tr>

								<?php

						

							

						}elseif ($spend_action=='2') 

						{

							$spend_action=_lkn_credit_speding_history_action_search_resume_database;

							$credits=$row->credits;

							$old_date=lknDate::formatDate($row->old_date);

							$new_date=lknDate::formatDate($row->new_date);

							$date=$old_date . ' - ' . $new_date;

						?>

						<tr class="<?php echo $class;?>">

							<td colspan="2"><?php echo $spend_action;?></a></td>

							<td><?php echo $credits; ?></td>

							<td><?php echo $date; ?></td>

						</tr>

						

						<?php

							

						}elseif ($spend_action=='3'){

							$spend_action=_lkn_credit_speding_history_action_apply_job;

							$job_id=$row->job_id;

								$job_details=$_db->loadTable("SELECT title,created,alias FROM #__jobs_jobs WHERE id='$job_id'");

								$job_details_count=count($job_details);

								if ($job_details_count>0) {

									$job_alias=$job_details->alias;

									$title="<a href=\"" . lknSef::url("index.php?option=com_jobs&task=detail_job&id=$job_id:$job_alias".$itemid) . "\">" . $job_details->title . "</a>";

								}

								

								

							$job_created=lknDate::formatDate($job_details->created);

								

							$credits=$row->credits;

							?>

							<tr class="<?php echo $class;?>">

								<td><?php echo $spend_action;?></a></td>

								<td><?php echo $title;?></td>

								<td><?php echo $credits; ?></td>

								<td><?php echo $job_created; ?></td>

							</tr>

								<?php

						}elseif ($spend_action=='4'){

							$spend_action=_lkn_credit_speding_history_action_create_resume;

							$resume_id=$row->job_id;

								$job_details=$_db->loadTable("SELECT title,created,alias FROM #__jobs_resumes WHERE id='$resume_id'");

								$job_details_count=count($job_details);

								if ($job_details_count>0) {

									$job_alias=$job_details->alias;

									$title="<a href=\"" . lknSef::url("index.php?option=com_jobs&task=view_resume&id=$resume_id:$job_alias".$itemid) . "\">" . $job_details->title . "</a>";

								}

								

								

							$job_created=lknDate::formatDate($job_details->created);

								

							$credits=$row->credits;

							?>

							<tr class="<?php echo $class;?>">

								<td><?php echo $spend_action;?></a></td>

								<td><?php echo $title;?></td>

								<td><?php echo $credits; ?></td>

								<td><?php echo $job_created; ?></td>

							</tr><?php 

						}

	

			$k=3-$k;

		}

		

		?>

		</tbody>

		</table>

		</div>

		<br />

		<?php

		}else 

		{

			echo _lkn_credit_speding_history_no_result;

		}

		?>