<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

	?>
		<h2><?php echo $error_msg;?></h2><br />
		<form action="index.php" method="post" name="adminForm">
			<input type="hidden" name="option" value="com_jobs"/>
			<input type="hidden" name="task" value="buy_credits"/>
			<input type="hidden" name="credit_number" value="<?php echo $credit_number;?>"/>
			<input type="hidden" name="payment_type_jobs" value="<?php echo $payment_type_jobs;?>"/>
			<input type="submit" class="btn" value="<?php echo _lkn_back;?>" />
			<input type="hidden" name="Itemid" value="<?php echo $itemid_number;?>"/>
		</form>