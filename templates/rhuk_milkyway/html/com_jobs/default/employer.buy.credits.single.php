<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

global $_config;
$tax_active=$_config ['credit_system_tax_activate'];

?>
	<?php //tepedki açıklama yazdırılmaya başladı?>
		<table class="table" width="100%" cellspacing="0" cellpadding="5" border="0" align="center">
		<tbody>
			<tr>
				<td valign="top" align="right">
					<img border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'buy_credits.gif';?>"/>
				</td>
				<td width="100%" valign="top">
				<p class="header4"><?php echo _lkn_info;?></p>
				<?php echo _lkn_employer_buy_credits_desc;?></p>
				</td>
			</tr>
		</tbody>
		</table>
		
	<?php //tepedki açıklama yazdırılması bitti
		if ($action=='') {
				?>
				<form action="index.php" method="post" name="adminForm">
				<table class="general_table">
					<tr>
						<td class="key" width="15%">
							<?php echo lknToolTip(_lkn_credit_count_tip,_lkn_credit_count);?>
						</td>
						<td width="20%">
							<input type="text" class="text_area" name="credit_number" size="25" maxlength="50" value="<?php echo $credit_number;?>"/>
						</td>
						<td width="60%">
						<?php echo $credit_cost_message;?>
						</td>
					</tr>
					<tr>
							<td class="key" width="15%">
								<?php echo lknToolTip(_lkn_credit_payment_method_tip,_lkn_credit_payment_method);?>
							</td>
							<td width="20%">
								<?php echo $payment_type_select_list;	?>
							</td>
							<td width="60%">
							</td>
					</tr>
					<?php if ($tax_active=='1'){?>
					<tr>
						<td class="key" width="15%">
							<?php echo _lkn_credit_system_tax;?>
						</td>
						<td valign="top" colspan="2">
							<?php echo temizleSlash($_config ['credit_system_tax_confirmation_text']);?> 
							<input type="radio" checked="checked" value="0" name="tax" id="tax_yes"><?php echo _lkn_yes;?> 
                        	<input type="radio" value="1" name="tax" id="tax_no"><?php _lkn_no;?>
                        </td>
                        
						</td>
					</tr>
					<?php }?>
				</table>
				<input type="hidden" name="option" value="com_jobs" />
				<input type="hidden" name="task" value="buy_credits" />
				<input type="hidden" name="action" value="confirm" />
				<input type="hidden" name="Itemid" value="<?php echo $itemid_number;?>"/>
				<br />
				<div class="floatRight">
					<input type="submit" class="btn" name="submit" value="<?php echo _lkn_submit;?>"/>
				</div>
				</form>

		<?php }else	{?>

				<table class="general_table">
				<tr>
					<td align="left">
					<?php echo $credits_final_message;?>
					</td>
					</tr>
					</table>

				<br />
				<div align="right">
					<form action="index.php" method="post" name="adminForm">
						<input class="btn" type="submit" name="submit" value="<?php echo _lkn_submit;?>"/> &nbsp; &nbsp;
						<input type="hidden" name="option" value="com_jobs"/>
						<input type="hidden" name="task" value="completePayment"/>
						<input type="hidden" name="credit_number" value="<?php echo $credit_number;?>"/>
						<input type="hidden" name="total" value="<?php echo $payment_amount_t;?>"/>
						<input type="hidden" name="item_name_payment" value="<?php echo $item_name_payment;?>"/>
						<input type="hidden" name="Itemid" value="<?php echo $itemid_number;?>"/>
						<input type="hidden" name="payment_type_jobs" value="<?php echo $payment_type_jobs;?>"/>
						<?php
							$url=lknSef::url("index.php?option=com_jobs&task=buy_credits" . $itemid);
						?>
						<input type="button" class="btn" onclick="window.location.href='<?php echo $url;?>';" value="<?php echo _lkn_cancel;?>" />
					</form>
				</div>
				</form>
				<?php


			
		}
		
?>