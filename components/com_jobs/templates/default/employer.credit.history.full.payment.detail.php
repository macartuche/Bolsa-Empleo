<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
			$itemid=lknJobsItemId();
			$user_name=$row->username;
			$user_id=$row->user_id;
			$payer_email=$row->payer_email;
			$payment_date=lknDate::formatDate($row->payment_date);
			$mc_currency=$row->mc_currency;
			$payment_gross=$row->payment_gross;
			$credits=$row->credits;
			$verify_sign=$row->verify_sign;
			$txn_id=$row->txn_id;
			$attribs=str_replace('\n','<br/>',$row->attribs);
			echo '<h1>' . _lkn_credit_history_full_payment_detail . '</h1>';
			?>
			<table class="general_table">
			<tr><td class="key"><?php echo _lkn_username;?></td><td><?php echo $user_name;?></td></tr>
			<tr><td class="key"><?php echo _lkn_credit_buying_history_payer_email;?></td><td><?php echo $payer_email;?></td></tr>
			<tr><td class="key"><?php echo _lkn_credit_buying_history_payment_date;?></td><td><?php echo $payment_date;?></td></tr>
			<tr><td class="key"><?php echo _lkn_credit_buying_history_curreny;?></td><td><?php echo $mc_currency;?></td></tr>
			<tr><td class="key"><?php echo _lkn_credit_buying_history_credit_cost;?></td><td><?php echo $payment_gross;?></td></tr>
			<tr><td class="key"><?php echo _lkn_credit_buying_history_credit_count;?></td><td><?php echo $credits;?></td></tr>
			<tr><td class="key"><?php echo _lkn_credit_buying_history_verify_sign;?></td><td><?php echo $verify_sign;?></td></tr>
			<tr><td class="key"><?php echo _lkn_credit_buying_history_transaction_id;?></td><td><?php echo $txn_id;?></td></tr>
			<tr><td class="key"><?php echo _lkn_credit_buying_history_attribs;?></td><td><?php echo $attribs;?></td></tr>
			</table>
		<br />
		<div class="floatRight">
			<a href="<?php echo $link;?>" class="btn"><?php echo _lkn_back;?></a>
		</div>