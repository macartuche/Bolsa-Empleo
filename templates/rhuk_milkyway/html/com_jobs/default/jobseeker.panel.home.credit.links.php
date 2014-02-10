<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
		//eğer credi sistemi aktif ise bununla ilgili verileri göster

		echo $total_credit_message;

		?>
		<ul>
			<?php echo $you_can_create_x_resumes;?>
			<?php echo $you_can_apply_x_jobs;?>
			<li><?php echo $credit_buying_history_link?></li>
			<li><?php echo $credit_speding_history_link;?></li>
			<?php echo $bank_transfer_link; ?>
		</ul>