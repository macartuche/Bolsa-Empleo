<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
	<?php //tepedki açıklama yazdırılmaya başladı?>
		<table width="100%" cellspacing="0" cellpadding="5" border="0" align="center" class="table">
			<tbody>
				<tr>
					<td valign="top" align="right">
						<img border="0" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'response.gif';?>"/>
					</td>
					<td width="100%" valign="top"><p class="header4"><?php echo _lkn_info;?></p>
						<?php echo _lkn_employer_applications_desc;?>
					</td>
				</tr>
			</tbody>
		</table>
	<?php //tepedki açıklama yazdırılması bitti?>	
	<?php //kategoriye ait işlerin yazırılması başladı?>

		<form name="adminForm" method="GET" action="index.php">
		<table class="general_table">
		<tbody><tr>
			<td width="100%">

				<input type="text" onchange="document.adminForm.submit();" class="text_area" value="<?php echo $search;?>" id="search" name="search"/>
				<button onclick="document.adminForm.submit();"><?php echo _lkn_go;?></button>
				<button onclick="document.getElementById('search').value='';document.getElementById('status').value='';document.getElementById('cat_id').value='';document.adminForm.submit();"><?php echo _lkn_reset;?></button>
			</td>
			<td nowrap="nowrap">
			<?php
				//tüm kategorileri listeler
				echo _lkn_category_name . ': ' . $category_select_list . ' ';
				
				echo _lkn_status . ': ' . $status_select_list;
				?>
			
			</td>

		</tr>
		</tbody></table>
		<input type="hidden" name="option" value="com_jobs" />
		<input type="hidden" name="ItemId" value="<?php echo lknJobsItemId(true);?>"/>
		<input type="hidden" name="task" value="list_employer_applications"/>
		</form>
		
		<?php if ($application_count>0) {?>
		<div class="jl_wrap_div grad">	
		   <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
			<thead>
				<tr>
				<th><strong><?php echo _lkn_id; ?></strong></th>
				<th><strong><?php echo _lkn_app_date; ?></strong></th>
				<th><strong><?php echo _lkn_job; ?></strong></th>
				<th><strong><?php echo _lkn_resume; ?></strong></th>
				<th><strong><?php echo _lkn_company; ?></strong></th>
				<th><strong><?php echo _lkn_category_name; ?></strong></th>
				<th><strong><?php echo _lkn_status; ?></strong></th>
				<th></th>
				</tr>
			</thead>
		<tbody>
		<?php 
	
		$k=1;
		//print_r($rows);
		foreach ($rows as $row) {
	//			print_r($row);
				$job_title=$row->job_title;
				$job_id=$row->job_id;
				$job_alias=$row->job_alias;
				$job_title="<a href=\"" . lknSef::url("index.php?option=com_jobs&task=detail_job&id=$job_id:$job_alias" .$Itemid) ."\">$job_title</a>";
	
				$category_name=$row->category_name;
				$category_alias=$row->category_alias;
				$category_id=$row->category_id;
				$category_name="<a href=\"" . lknSef::url("index.php?option=com_jobs&task=detail_category&id=$category_id:$category_alias" .$Itemid) ."\">$category_name</a>";
				
				$company_title=$row->company_title;
				$company_alias=$row->company_alias;
				$company_id=$row->company_id;
				$company_title="<a href=\"" . lknSef::url("index.php?option=com_jobs&task=detail_company&id=$company_id:$company_alias" .$Itemid) ."\">$company_title</a>";
							
				$resume_title=$row->resume_title;
				$id=$row->id;
				$application_date=$row->application_date;
				$application_date=lknDate::formatDate($application_date);
				$status_name=$row->status_name;
				$username=$row->username;
				
				
				$application_link="index.php?option=com_jobs&task=edit_employer_application&id=$id" . $Itemid;
				$application_link=lknSef::url($application_link);
				$edit="<a href=\"$application_link\">";
				$edit.="<img src=\"".TEMPLATE_IMAGE_PATH."edit.gif\" border=\"0\" alt=\""._lkn_edit."\" title=\""._lkn_edit."\"/></a>";
				
				if ($k=='1') {
					$class='jl_odd_row';
				}else {
					$class='jl_even_row';
				}
								
						
			?>
				<tr class="<?php echo $class;?>">
				<td align="center"><?php echo $id; ?></td>
				<td align="center"><?php echo $application_date; ?></td>
				<td><?php echo $job_title; ?></td>
				<td><?php echo $resume_title; ?></td>
				<td><?php echo $company_title; ?></td>
				<td><?php echo $category_name; ?></td>
				<td><?php echo $status_name; ?></td>
				<td><?php echo $edit; ?></td>
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
			echo _lkn_error_no_application;
		}
		?>
		
		<br />

