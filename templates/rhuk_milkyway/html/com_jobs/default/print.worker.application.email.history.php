<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

		global $_config;
		$hide_mails=$_config['hide_mails_on_application_form'];
		
?>
	<?php //tepedki açıklama yazdırılmaya başladı?>
		<h1><?php echo _lkn_app_email_history; ?></h1>
	<?php //tepedki açıklama yazdırılması bitti?>	
	<?php //kategoriye ait işlerin yazırılması başladı?>
		<?php if ($count>0) { ?>
		<div class="jl_wrap_div grad">	
		   <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
				<thead>
				<tr>
					<td><?php echo _lkn_app_email_subject;?></td>
					<td><?php echo _lkn_app_email_date;?></td>
					<td><?php echo _lkn_app_email_sender;?></td>
				</tr>
			</thead>
		<tbody>
		<?php 
	
		$k=1;

		foreach ($rows as $v) {
				
				if ($k=='1') {
					$class='jl_odd_row';
				}else {
					$class='jl_even_row';
				}
				
			$id=$v->id;
			$subject=$v->email_subject;
			$application_id=$v->application;
			$link="index.php?option=com_jobs&task=print_worker_application_email_history&application_id=$application_id&email_id=$id" . $itemid;
			$link=lknSef::url($link);
			$link="<a href=\"$link\">$subject</a>";			
			$date=$v->email_date;
			$email_from=$v->email_from;
			$email_subject=$v->email_subject;
			$email_to=$v->email_to;
			$email_body=temizleSlash($v->email_body);
			$date=lknDate::formatDate($date);
			
					if ($id==$email_id) { ?>
			<tr><td colspan="4">
			<table class="general_table">
					<tr>
						<td class="key">
							<?php echo _lkn_worker_response_date;?>
						</td>
						<td>
							<?php echo $date;?>
						</td>
					</tr>	
					<tr>
						<?php if ($hide_mails=='1') {?>
							<td class="key"><?php echo _lkn_company;?></td>
							<td><?php echo temizleSlash($v->company_title);?></td>
						<?php }else {?>
							<td class="key"><?php echo _lkn_worker_company_email;?></td>
							<td><?php echo $email_from;?></td>
						<?php }?>
					</tr>
					<tr>
						<?php if ($hide_mails=='1') {?>
							<td class="key"><?php echo _lkn_app_email_to_;?></td>
							<td><?php echo temizleSlash($v->name);?></td>
						<?php }else {?>
							<td class="key"><?php echo _lkn_worker_applicant_email;?></td>
							<td><?php echo $email_to;?></td>
						<?php }?>
					</tr>
					<tr>
						<td class="key">
							<?php echo _lkn_app_email_subject;?>
						</td>
						<td>
							<?php echo $email_subject;?>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<?php echo _lkn_app_email_body;?>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<?php echo $email_body;?>
						</td>
					</tr>
					
				</table>
				</td></tr>
					
			<?php }?>
			<tr class="<?php echo $class;?>">
				<td><?php echo $link;?></td>
				<td><?php echo $date;?></td>
				<?php if ($hide_mails=='1') {?>
					<td><?php echo temizleSlash($v->company_title);?></td>
				<?php }else {?>
					<td><?php echo $email_from;?></td>
				<?php }?>
			</tr>
			<?php
			$k=3-$k;
		}
		
		?>
		</tbody>
		</table>
		</div>
		<br />
		<?php //sayfalama linkleri başladı?>
		<div style="margin: 5px; padding: 5px;">
			<?php echo $paging_links;?>
		</div>
		<?php //sayfalama linkleri bitti?>
			<?php
		}else 
		{
			echo '<h1>'. _lkn_error_no_response . '</h1>';
		}

			?>