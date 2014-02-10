<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
<div id="linkredirectresume">
	<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&task=list_worker_applications&Itemid=2" id="titletopfrontal" />
    <img title="Regresar a herramientas del empleador" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
 	<?php echo _lkn_backfrontal;?>
	</a>
</div>
<h1><?php echo _lkn_app_email_history; ?></h1>
<?php if ($count>0) { ?>
<table cellspacing="0" border="0" cellpadding="5" id="tools_employees">
    <thead>
        <tr>
            <th colspan="3">
            </th>
        </tr>
    </thead>
	<tbody>
        <tr>
            <td class="textresult"><strong><?php echo _lkn_app_email_subject;?></strong></td>
            <td class="textresult"><strong><?php echo _lkn_app_email_date;?></strong></td>
            <td class="textresult"><strong><?php echo _lkn_app_email_sender;?></strong></td>
        </tr>
		<?php 
		$k=1;
		foreach ($rows as $v) 
		{
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
			<tr>
            	<td colspan="4">
                	<table class="general_table">
                    <tbody>
					<tr>
						<td class="key">
							<?php echo _lkn_worker_response_date;?>
						</td>
						<td>
							<?php echo $date;?>
						</td>
					</tr>	
					<tr>
						<td class="key">
							<?php echo _lkn_worker_company_email;?>
						</td>
						<td>
							<?php echo $email_from;?>
						</td>
					</tr>
					<tr>
						<td class="key">
							<?php echo _lkn_worker_applicant_email;?>
						</td>
						<td>
							<?php echo $email_to;?>
						</td>
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
                    </tbody>
             	</table>
			</td>       	
     	</tr>
		<?php }?>
        <tr>
            <td class="textresult"><?php echo $link;?></td>
            <td class="textresult"><?php echo $date;?></td>
            <td class="textresult"><?php echo $email_from;?></td>
        </tr>
		<?php
		}
		?>
	</tbody>
</table>
<div style="margin: 5px; padding: 5px;">
	<?php echo $paging_links;?>
</div>
<br /><br /><br />
<?php
}
else 
{
	echo '<h1>'. _lkn_error_no_response . '</h1>';
}
?>