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
                <?php echo _lkn_employer_view_credit_buying_history_desc;?>
            </td>
		</tr>
	</tbody>
</table>
<?php if ($record_count>0) 
{ 
?>
	<div class="jl_wrap_div grad">	
        <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl" cellpadding="0">
            <thead>
                <tr>
                    <th><strong><?php echo _lkn_credit_buying_history_transaction_id; ?></strong></th>
                    <th><strong><?php echo _lkn_credit_buying_history_payer_email; ?></strong></th>
                    <th><strong><?php echo _lkn_credit_buying_history_payment_date; ?></strong></th>
                    <th><strong><?php echo _lkn_credit_buying_history_credit_count; ?></strong></th>
                    <th><strong><?php echo _lkn_credit_buying_history_credit_cost; ?></strong></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $k=1;
                foreach ($rows as $row) {
                    $payer_email=$row->payer_email;
                    $payment_date=lknDate::formatDate($row->payment_date);
                    $credits=$row->credits;
                    $payment_gross=$row->payment_gross . ' ' . $row->mc_currency;
                    $txn_id=$row->txn_id;
                    $id=$row->id;
                    $url=lknSef::url("index.php?option=com_jobs&task=employer_credit_history_full_payment_detail&id=$id" . $itemid);
                    if ($k=='1') {
                        $class='jl_odd_row';
                    }else {
                        $class='jl_even_row';
                    }
                    ?>
                    <tr class="<?php echo $class;?>">
                        <td><a href="<?php echo $url;?>"><?php echo $txn_id;?></a></td>
                        <td><?php echo $payer_email;?></td>
                        <td><?php echo $payment_date; ?></td>
                        <td><?php echo $credits; ?></td>
                        <td><?php echo $payment_gross; ?></td>
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
}
else 
{
	echo _lkn_credit_buying_history_no_result;
}
?>
<br />