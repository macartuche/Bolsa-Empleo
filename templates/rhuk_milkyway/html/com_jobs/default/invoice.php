<?php if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
global $_config;
$tax_active=$_config ['credit_system_tax_activate'];

?>
	
	<div class="jl_wrap_div grad">
	<table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
			<thead>
				<th colspan="2"><strong><?php echo _lkn_credit_order_information;?></strong></th>
			</thead>
			<tbody>
				<tr>
					<td class="key" width="15%"><?php echo _lkn_credit_order_date;?>:</td><td><?php echo $current_date;?></td>
				</tr>
				<tr>
					<td class="key" width="15%"><?php echo _lkn_credit_order_status;?>:</td><td><?php echo _lkn_credit_order_status_p;?></td>
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
	 			 <tr valign="top"> 
	    			<td>
	    				<table width="100%" cellspacing="0" cellpadding="2" border="0">
	      	        		<tbody>
	      	        			<tr> 
		          					<td class="key" width="15%"><?php echo _lkn_worker_worker_email;?>:</td>
		          						<td><a target="_blank" href="mailto:<?php echo $user_email;?>"><?php echo $user_email;?></a></td>
		        					</tr>
		        					<tr>
		        						<td class="key" width="15%"><?php echo _lkn_worker_worker_name;?>:</td>
		          						<td><?php echo $user_full_name;?></td>
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
					<th colspan="2"><b><?php echo _lkn_credit_order_items;?></b></th>
				</thead>
				<tbody>
				<tr>
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
							<td><?php echo $credit_number;?></td>
							<td><?php echo $item_name;?></td>
							<td><?php echo _lkn_currency;?><?php echo $credit_cost?></td>
							<td><?php echo _lkn_currency;?><?php echo $payment_amount_;?></td>
						</tr>
						<tr>
							<td align="right" colspan="3">&nbsp;&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td align="right" colspan="3"><?php echo _lkn_credit_order_items_subtotal;?> :</td>
							<td><?php echo _lkn_currency;?><?php echo $payment_amount_;?></td>
						</tr>
						<?php if ($tax_active=='1') {?>
						<tr>
							<td align="right" colspan="3"><?php echo _lkn_credit_system_tax_;?> :</td>
							<td><?php if ($tax=='1') {?><?php echo $_config['credit_system_tax_rate']?>%<?php }else {?>-<?php }?></td>
						</tr>
						<?php }?>
						<tr>
							<td align="right" colspan="3"><b><?php echo _lkn_credit_order_items_total;?>: </b></td>
							<td><?php echo _lkn_currency;?><?php echo $payment_amount;?></td>
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
					<tr>
						<td><?php echo $payment_plugin_name;?></td>
					</tr>
				</tbody>
				</table>
		</div>