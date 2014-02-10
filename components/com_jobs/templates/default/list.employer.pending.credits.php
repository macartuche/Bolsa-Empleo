<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" class="table">
		<tbody>
			<tr>
				<td valign="top" align="right">
					<img border="0" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'info.gif';?>"/></td>
				<td width="100%" valign="top">
					<p class="header4"><?php echo _lkn_info;?></p>
					<?php echo _lkn_employer_pending_credit_desc;?>
				</td>
			</tr>
		</tbody>
	</table>
		<?php if ($count>0) { ?>

		<div class="jl_wrap_div grad">	

		   <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">

				<thead>

					<tr>

						<th><strong><?php echo _lkn_id; ?></strong></th>

						<th><strong><?php echo _lkn_employer_pending_credit_date; ?></strong></th>

						<th ><strong><?php echo _lkn_employer_pending_payment_date; ?></strong></th>

						<th><strong><?php echo _lkn_employer_pending_inform_date; ?></strong></th>

						<th><strong><?php echo _lkn_credit_buying_history_credit_count; ?></strong></th>

						<th><strong><?php echo _lkn_credit_buying_history_credit_cost; ?></strong></th>

						<th></th>

					</tr>

				</thead>

		<tbody>

		<?php 

	

		$k=1;



		foreach ($rows as $row) {

				

				if ($k=='1') {

					$class='jl_odd_row';

				}else {

					$class='jl_even_row';

				}

				

					$requested_date=lknDate::formatDate($row->requested_date);

						$credits=$row->credits;

						$payment_gross=$row->payment_gross . ' ' . _lkn_currency;

						$id=$row->id;

						$payment_date=$row->payment_date;

						$inform_date=$row->inform_date;

						

						if ($payment_date!='' and $payment_date!=$null_date) {

							$url="index.php?option=com_jobs&task=pending_credit_payment_details&id=$id" . $itemid;

							$url=lknSef::url($url);

							$img="<a href=\"$url\"><img src=\"". TEMPLATE_IMAGE_PATH ."edit.gif\" border=\"0\"></a>";

							$payment_date=lknDate::formatDate($payment_date);

							$inform_date=lknDate::formatDate($inform_date);

						}else {

							$url="index.php?option=com_jobs&task=pending_credit_payment_details&id=$id" . $itemid;

							$url=lknSef::url($url);

							$img="<a href=\"$url\"><img src=\"". TEMPLATE_IMAGE_PATH ."edit_.gif\" border=\"0\"></a>";

							$payment_date='-';

							$inform_date='-';

						}



						$url=lknSef::url("index.php?option=com_jobs&task=employer_credit_history_full_payment_detail&id=$id" . $itemid);

					?>

					<tr class="<?php echo $class;?>">

						<td align="center"><?php echo $id;?></td>

						<td align="center"><?php echo $requested_date; ?></td>

						<td align="center"><?php echo $payment_date; ?></td>

						<td align="center"><?php echo $inform_date; ?></td>

						<td align="center"><?php echo $credits; ?></td>

						<td align="center"><?php echo $payment_gross; ?></td>

						<td align="center"><?php echo $img; ?></td>

					</tr>

								

						



	

			<?php

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

			echo _lkn_employer_pending_credit_count_zero;

		}

				//sayfalama linkleri bitti

				echo $info_table;

			?>