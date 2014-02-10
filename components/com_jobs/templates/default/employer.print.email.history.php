<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
	//function employer_print_email_history($application_id,$member)
	//{
		$itemid=lknJobsItemId();
		$row=lknJobsFunctions::getEmailHistory($application_id,$member,'employer');
		$email_id=lknGetParamatre($_GET,'email_id');
		$count=count($row);
		if ($count>0) {
			?>
		<fieldset class="resume">
			<legend><?php echo _lkn_app_email_history; ?></legend>
				<table class="general_table">

				<thead>

				<tr>

			<?php /*?><td class="key" style="text-align: center ! important;"><?php echo _lkn_id;?></td><?php */?>

			<td class="key" style="text-align: center ! important;"><?php echo _lkn_app_email_subject;?></td>

			<td class="key" style="text-align: center ! important;"><?php echo _lkn_app_email_date;?></td>

			<td class="key" style="text-align: center ! important;"><?php echo _lkn_app_email_sender;?></td>

			</tr>

			</thead>

			<tbody>
			<?php
		}
		foreach ($row as $v )
		{
			$id=$v->id;
			$subject=$v->email_subject;
			$link="index.php?option=com_jobs&task=edit_employer_application&id=$application_id&email_id=$id".$itemid;

			$link=lknSef::url($link);
			$link="<a href=\"$link\">$subject</a>";
			$date=$v->email_date;
			$email_from=$v->email_from;
			$email_subject=$v->email_subject;
			$email_to=$v->email_to;
			$email_body=temizleSlash($v->email_body);
			$date=lknDate::formatDate($date);
			if ($id==$email_id) { ?>
			<tr><td colspan="4">
			<table class="general_table">
					<tr>

						<?php /*?><td class="key"><?php echo _lkn_id;?></td>

						<td><?php echo $id;?></td><?php */?>

					</tr>

					<tr>

						<td class="key"><?php echo _lkn_app_email_from;?></td>

						<td><?php echo $email_from;?></td>

					</tr>

					<tr>

						<td class="key"><?php echo _lkn_app_email_to;?></td>

						<td><?php echo $email_to;?></td>

					</tr>

					<tr>

						<td class="key"><?php echo _lkn_app_email_subject;?></td>

						<td><?php echo $email_subject;?></td>

					</tr>

					<tr>

						<td colspan="2" class="key" style="text-align: left ! important;">

							<?php echo _lkn_app_email_body;?>

						</td>

					</tr>

					<tr>

						<td colspan="2" align="left"><?php echo $email_body;?></td>

					</tr>

				</table>

				</td></tr>



			<?php

			}

			?>

			<tr>

				<td align="center"><?php echo $id;?></td>

				<td align="center"><?php echo $link;?></td>

				<td align="center"><?php echo $date;?></td>

				<td align="center"><?php echo $email_from;?></td>

			</tr>

			<?php

		}?>



		</tbody></table>