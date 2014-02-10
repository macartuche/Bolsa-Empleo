<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
		<script language='javascript' type='text/javascript'>
		<!--
		function submitjobform()
		{
			var type=document.getElementById("payment_type_jobs").value;
			if (type == ''){
				return alert( "<?php echo _lkn_error_payment_type_is_empty;?>" );
			} else {
				document.adminForm.submit();
			}	 			
				
		}
		  
	//-->
	</script>
<div class="jl_wrap_div grad">
	<table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
		<tbody>
			<tr>
				<th align="left"><?php echo _lkn_package_title;?></th>
				<th align="left"><?php echo _lkn_package_price;?></th>
				<th align="left"><?php echo _lkn_package_job_count;?></th>
				<th align="left"><?php echo _lkn_package_job_duration;?></th>
				<th align="left"><?php echo _lkn_package_resume_view;?></th>
				<th align="left"><?php echo _lkn_package_resume_view_duration;?></th>
				<th align="left"></th>
			</tr>
							
			<?php 
			$k=1;
			foreach ($rows as $row) {
				$id = $row->id;
				$title = lknMakeHtmlSafe(temizleSlash ( $row->title ));
				$price=$row->price;
				$job_count=$row->job_count;
				$job_duration=$row->job_duration;
				if ($job_count=='0' || $job_duration=='0') {
					$job_count='-';
					$job_duration='-';
				}
				
				$resume_view=$row->resume_view;
				if ($resume_view=='0') {
					$resume_view=_lkn_package_resume_view_unlimited;
				}
				
				$resume_view_duration=$row->resume_view_duration;
				if ($resume_view_duration=='0') {
					$resume_view='-';
					$resume_view_duration='-';
				}
				
						
				if ($k=='1') {
					$class='jl_odd_row';
				}else {
					$class='jl_even_row';
				}
			?>
				<tr class="<?php echo $class;?>">
					<td align="left"><?php echo $title;?></td>
					<td align="left"><?php echo $price; ?></td>
					<td align="left"><?php echo $job_count; ?></td>
					<td align="left"><?php echo $job_duration;?></td>
					<td align="left"><?php echo $resume_view;?></td>
					<td align="left"><?php echo $resume_view_duration; ?></td>
					<td align="left">
					<button type="button" class="btn" onclick="document.adminForm.package_id.value='<?php echo $id;?>';document.adminForm.package_name.value='<?php echo $title;?>';document.adminForm.package_price.value='<?php echo $price;?>';javascript: submitjobform()"><?php echo _lkn_package_buy;?></button></td>
				</tr>
			<?php
				$k=3-$k;
			}
			?>
		</tbody>
	</table>
</div>