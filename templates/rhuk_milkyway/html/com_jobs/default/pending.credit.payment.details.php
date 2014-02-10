<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
		
		//var_dump($row);
		$user_name=$row->username;
		$user_id=$row->user_id;
		$id=$row->id;
		$other=$row->attribs;
		$txn_id=$row->txn_id;
		$payment_gross=$row->payment_gross;
		$credits=$row->credits;
		
		$type=$row->type;
		if ($type=='2') {
			$credits=lknJobsFunctions::getPackageName($credits);
		}else {
			$credits=$credits . ' ' . _lkn_credit_buying_history_credit_count;
		}
		
		$requested_date=lknDate::formatDate($row->requested_date);
		$payment_date=$row->payment_date;
		
		if ($payment_date==$null_date) {
		
			$payment_date='';
			$readonly='';
			$onlick='onclick="return showCalendar(\'db_payment_date\', \'%Y-%m-%d %H:%M:%S\', \'24\', true);"';
		}else {
			$readonly=' disabled=""';
			$onlick='';
		}
		
		$inform_date=lknDate::formatDate($row->inform_date);
		?>
		<script language="javascript" type="text/javascript">
			function validateFormOnSubmit(theForm) {
			var reason = "";
		
		  reason += validateEmpty(theForm.db_txn_id,"<?php echo _lkn_error_pending_credit_tnx_id_empty;?>");
		  reason += validateEmpty(theForm.db_payment_date,"<?php echo _lkn_error_pending_credit_payment_date_empty;?>");
		  
		  if (reason != "") {
		    alert("<?php echo _lkn_error_form;?>\n" + reason);
		    return false;
		  }
		
		  return true;
		}
		
		function validateEmpty(fld,err) {
		    var error = "";
		 
		    if (fld.value.length == 0) {
		        fld.style.background = 'Yellow'; 
		        error = err+"\n"
		    } else {
		        fld.style.background = 'White';
		    }
		    return error;  
		}
		</script>

	<h2><?php echo _lkn_employer_pending_credit_inform_site_editor;?></h2><br />
	<form id="adminForm" name="adminForm" method="post" action="index.php"  onsubmit="return validateFormOnSubmit(this)" >

		<table class="general_table">
			<tbody>
				<tr>
					<td class="key"><?php echo _lkn_username;?></td>
					<td><?php echo $user_name;?></td>
        		</tr>
        		<tr>
        			<td class="key"><?php echo lknToolTip(_lkn_employer_pending_credit_credit_cost_tip,_lkn_credit_buying_history_credit_cost);?></td>
        			<td>
        				<?php echo $payment_gross . ' ' . _lkn_currency;;?>
        			</td>
        		</tr>
        		<tr>
        			<td class="key"><?php echo lknToolTip(_lkn_employer_pending_credit_credit_count_tip,_lkn_credit_buying_history_item_name);?></td>
        			<td>
        				<?php echo $credits;?>
        			</td>
        		</tr>
        		<tr>
					<td class="key">
						<?php
							echo lknToolTip(_lkn_employer_pending_credit_date_tip,_lkn_employer_pending_credit_date);
						?>
					</td>
					<td>
						<?php echo $requested_date;?>
					</td>
				</tr>
        		<tr>
					<td class="key">
						<?php
							echo lknToolTip(_lkn_employer_pending_payment_date_tip,_lkn_employer_pending_payment_date);
						?>
					</td>
					<td>
						<input type="text" readonly name="db_payment_date" id="db_payment_date" size="30" maxlength="100" value="<?php echo $payment_date;?>" <?php echo $readonly;?>/>
						<input type="reset"	<?php echo $onlick;?> value=" ... " <?php echo $readonly;?>/>
					</td>
				</tr>
        		<tr>
					<td class="key">
						<?php
							echo lknToolTip(_lkn_employer_pending_inform_date_tip,_lkn_employer_pending_inform_date);
						?>
					</td>
					<td>
						<?php echo $inform_date;
						?>
					</td>
				</tr>
        		<tr>
        			<td class="key"><?php echo lknToolTip(_lkn_employer_pending_credit_tnx_id_tip,_lkn_credit_buying_history_transaction_id);?></td>
        			<td>
        				<input maxlength="100" size="50" value="<?php echo $txn_id;?>" name="db_txn_id" <?php echo $readonly;?>/>
        			</td>
        		</tr>
        		<tr>
        			<td class="key"><?php echo lknToolTip(_lkn_employer_pending_credit_other_details_tip,_lkn_credit_buying_history_attribs);?></td>
        			<td>
        				<textarea cols="40" rows="7" name="db_attribs" <?php echo $readonly;?>><?php echo $other;?></textarea>
        			</td>
        		</tr>
        	</tbody>
        </table>
        
			<input type="hidden" value="<?php echo $id;?>" name="cid" />
			<input type="hidden" value="<?php echo $user_id;?>" name="db_user_id" />
			<input type="hidden" value="com_jobs" name="option" />
			<input type="hidden" value="save_pending_credit" name="task" />
		<div align="left">
		<?php echo _lkn_employer_pending_credit_warn;?>
			<input class="btn" type="submit" name="submit" value="<?php echo _lkn_submit;?>" />	
		</div>
	</form>