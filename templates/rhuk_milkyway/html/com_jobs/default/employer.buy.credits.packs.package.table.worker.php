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
				<th align="left"><?php echo _lkn_package_job_apply_count;?></th>
				<th align="left"><?php echo _lkn_package_resume_count;?></th>
				<th align="left"></th>
			</tr>
							
		<?php 
		$k=1;
		foreach ($rows as $row) {
			$id = $row->id;
			$title = lknMakeHtmlSafe(temizleSlash ( $row->title ));
			$price=$row->price;
			$job_apply_count=$row->job_apply_count;
			$allowed_resume_count=$row->resume_count;
			
					
			if ($k=='1') {
				$class='jl_odd_row';
			}else {
				$class='jl_even_row';
			}
		?>
			<tr class="<?php echo $class;?>">
				<td align="left"><?php echo $title;?></td>
				<td align="left"><?php echo $price; ?></td>
				<td align="left"><?php echo $job_apply_count; ?></td>
				<td align="left"><?php echo $allowed_resume_count;?></td>
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