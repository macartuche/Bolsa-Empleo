<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
			global $_config;
			
			$itemid=lknJobsItemId();
			$tax_active=$_config ['credit_system_tax_activate'];
			
//			print_r($row);
			$user_name=temizleSlash($row->username);
			$user_full_name=temizleSlash($row->user_full_name);
			$user_id=$row->user_id;
			$payer_email=$row->payer_email;
			$payment_date=lknDate::formatDate($row->payment_date);
			$mc_currency=$row->mc_currency;
			$payment_gross=$row->payment_gross;
			$tax_rate=$row->tax_rate;
			if ($tax_active=='1') {
				$payment_gross_=$payment_gross/(float)(1 + $tax_rate/100);
				$payment_gross_=sprintf("%01.2f",$payment_gross_);
			}else {
				$payment_gross_=$payment_gross;
			}
			
			$credits=$row->credits;
			$type=$row->type;
			if ($type=='1') {
				$credit_cost=floatval(str_replace(',','.',$_config['credit_cost']));
				$credits.=' '. _lkn_credit_buying_history_credit_count;
			}elseif ($type=='2'){
				$_db=&lknDb::createInstance();
				$sql="SELECT * FROM #__jobs_package_plans WHERE id='$credits' AND published='1'";
				$_db->query($sql);
				$_db->setQuery();
				if ($_db->num_rows()>0) {
					$row2=$_db->loadObject();
					$credits=temizleSlash($row2->title) . ' ' . _lkn_package_package;
					$credits_cost=$row2->price;
					$credit_cost=floatval(str_replace(',','.',$credits_cost));
				}else {
					$credits=' ';
					$credit_cost='-';
				}				
			}
			$verify_sign=$row->verify_sign;
			
			$txn_id=$row->txn_id;
			$attribs=str_replace('\n','<br/>',$row->attribs);
			echo '<h1>' . _lkn_credit_history_full_payment_detail . '</h1>';
			?>
				<div class="jl_wrap_div grad">
	<table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
			<thead>
				<th colspan="2"><strong><?php echo _lkn_credit_order_information;?></strong></th>
			</thead>
			<tbody>
				<tr class="jl_odd_row">
					<td width="15%"><?php echo _lkn_credit_order_date;?>:</td><td><?php echo $payment_date;?></td>
				</tr>
				<tr class="jl_even_row">
					<td width="15%"><?php echo _lkn_credit_order_status;?>:</td><td><?php echo _lkn_credit_order_status_c;?></td>
				</tr>
			</tbody>
		</table>
		</div>
		<br />
		<div class="jl_wrap_div grad">
			<table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
				<thead>
					<th colspan="2"><b><?php echo _lkn_credit_order_customer;?></b></th>
				</thead>
				<tbody>
	      	        <tr class="jl_odd_row"> 
		          		<td width="15%"><?php echo _lkn_worker_worker_email;?>:</td>
		          		<td><a target="_blank" href="mailto:<?php echo $payer_email;?>"><?php echo $payer_email;?></a></td>
		        	</tr>
		        	<tr class="jl_even_row">
		        		<td width="15%"><?php echo _lkn_worker_worker_name;?>:</td>
		          		<td><?php echo $user_full_name;?></td>
		        	</tr>
		        	<tr class="jl_odd_row">
		        		<td width="15%"><?php echo _lkn_username;?>:</td>
		          		<td><?php echo $user_name;?></td>
		        	</tr>
		        </tbody>
			</table>
		</div>
		<br />
		<div class="jl_wrap_div grad">
			<table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
				<thead>
					<th colspan="2"><b><?php echo _lkn_credit_order_items;?></b></th>
				</thead>
				<tbody>
				<tr class="jl_even_row">
					<td colspan="2"> 
				      <table width="100%" cellspacing="0" cellpadding="2" border="0">
				        <tbody>
				        <tr align="left">
							<th><?php echo _lkn_credit_order_items_quantity;?></th>
					        <th><?php echo _lkn_credit_order_items_name;?></th>
							<th><?php echo _lkn_credit_order_items_unit_price;?></th>
							<th><?php echo _lkn_credit_order_items_subtotal;?></th>
				        </tr>
				        <tr>
							<td>1</td>
							<td><?php echo $credits;?></td>
							<td><?php echo _lkn_currency;?><?php echo $credit_cost?></td>
							<td><?php echo _lkn_currency;?><?php echo $payment_gross_;?></td>
						</tr>
						<tr>
							<td align="right" colspan="3">&nbsp;&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td align="right" colspan="3"><?php echo _lkn_credit_order_items_subtotal;?> :</td>
							<td><?php echo _lkn_currency;?><?php echo $payment_gross_;?></td>
						</tr>
						<?php if ($tax_active=='1') {?>
						<tr>
							<td align="right" colspan="3"><?php echo _lkn_credit_system_tax_;?> :</td>
							<td><?php if ($tax_rate=='0') {?> -<?php } else {	echo $tax_rate.'%';}?></td>
						</tr>
						<?php }?>
						<tr>
							<td align="right" colspan="3"><b><?php echo _lkn_credit_order_items_total;?>: </b></td>
							<td><?php echo _lkn_currency;?><?php echo $payment_gross;?></td>
						</tr>
					</tbody>
					</table>
				</td>
			</tr>
			</tbody>
			</table>
		</div>
		<br />
		<div class="jl_wrap_div grad">
			<table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
				<thead>
					<th colspan="2"><b><?php echo _lkn_credit_payment_method;?></b></th>
				</thead>
				<tbody>
					<tr class="jl_odd_row"><td width="15%"><?php echo _lkn_credit_buying_history_verify_sign;?></td><td><?php echo $verify_sign;?></td></tr>
					<tr class="jl_odd_row"><td width="15%"><?php echo _lkn_credit_buying_history_transaction_id;?></td><td><?php echo $txn_id;?></td></tr>
					<tr class="jl_odd_row"><td width="15%"><?php echo _lkn_credit_buying_history_attribs;?></td><td><?php echo $attribs;?></td></tr>
				</tbody>
				</table>
		</div><!--
		
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
			

		--><br />
		<div class="floatRight">
			<a href="<?php echo $link;?>" class="btn"><?php echo _lkn_back;?></a>
		</div>