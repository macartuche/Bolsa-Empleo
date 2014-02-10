<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
echo $employer_total_credit_message;
?><br />
<?php echo $you_can_post_x_message;?>
<ul>
<li><?php echo $you_can_search_until;?></li>
<li><?php echo $credit_buying_history_link?></li>
<li><?php echo $credit_speding_history_link;?></li>
<?php echo $bank_transfer_link;//bu <li>link comes here</li> . comes from jobs.php->employer() ?>
</ul>