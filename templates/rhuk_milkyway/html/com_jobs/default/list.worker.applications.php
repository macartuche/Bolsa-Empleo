<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
	<?php //tepedki açıklama yazdırılmaya başladı?>
		<h1><?php echo _lkn_list_applications;?></h1>
	<?php //tepedki açıklama yazdırılması bitti?>	
	<?php //kategoriye ait işlerin yazırılması başladı?>		
		<?php if ($application_count>0) {?>
		<div class="jl_wrap_div grad">	
		   <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
			<thead>
				<tr>
					<th><strong><?php echo _lkn_app_date;?></strong></th>
					<th width="15"/>
					<th><strong><?php echo _lkn_category_name;?></strong></th>
					<th><strong><?php echo _lkn_job;?></strong></th>
					<th><strong><?php echo _lkn_company;?></strong> </th> 
					<th><strong><?php echo _lkn_worker_response;?></strong> </th>  
					<th><strong><?php echo _lkn_worker_response_date;?></strong></th>
					<th><strong><?php echo _lkn_status;?></strong></th>
					<th><strong><?php echo _lkn_cover_letter;?></strong></th>
				</tr>
			</thead>
		<tbody>
		<?php 
	
		$k=1;
		foreach ($rows as $row) {
	//		print_r($row);
			$job_title=$row->job_title;
			$resume_title=$row->resume_title;
			$id=$row->id;
			$job_id=$row->job_id;
			$job_alias=$row->job_alias;
			$memberid=$row->memberid;
			$company_title=$row->company_title;
			$category_name=$row->category_name;
			$application_date=$row->application_date;
			$cover_letter=$row->cover_letter;
			$application_date=lknDate::formatDate($application_date);

			$job_published=$row->job_published;
			$job_publish_up=$row->job_publish_up;
			$job_publish_down=$row->job_publish_down;


			if ($job_published=='1' 
				AND ($job_publish_up == $nullDate OR $job_publish_up <= $now)
				AND ($job_publish_down == $nullDate OR $job_publish_down >= $now)
				) {
				$job_published=1;
				$job_link="index.php?option=com_jobs&task=detail_job&id=$job_id:$job_alias" . $itemid;
				$job_link=lknSef::url($job_link);
				$job_title="<a href=\"$job_link\">$job_title</a>";
			}else {
				$job_published=0;
			}
		
				$link_cover_letter="index.php?option=com_jobs&task=edit_worker_application_cover_letter&id=$id" . $itemid;
				$link_cover_letter=lknSef::url($link_cover_letter);
				$edit="<a href=\"$link_cover_letter\">";
				if ($cover_letter!='') {
					$edit.="<img src=\"". TEMPLATE_IMAGE_PATH ."edit.gif\" border=\"0\" alt=\""._lkn_edit."\" title=\""._lkn_edit."\"/>";	
				}else 
				{
					$edit.="<img src=\"". TEMPLATE_IMAGE_PATH ."edit_.gif\" border=\"0\" alt=\""._lkn_edit."\" title=\""._lkn_edit."\"/>";						
				}
				$edit.='</a>';
				
				if ($k=='1') {
					$class='jl_odd_row';
				}else {
					$class='jl_even_row';
				}
				
				$data= lknJobsFunctions::worker_application_envelope($id,$memberid);
				$image=$data['image'];
				$date=$data['date'];
				
				$status_name=temizleSlash($row->status_name);
								
						
			?>
				<tr class="<?php echo $class;?>">
					<td><?php echo $application_date;?></td>
					<td width="30"><?php echo lknJobsFunctions::getActiveImage($job_published);?></td>
					<td><?php echo $category_name;?></td>
					<td><?php echo $job_title;?></td>
					<td><?php echo $company_title;?> </td> 
					<td><?php echo $image;?> </td>  
					<td><?php echo $date;?></td>
					<td><?php echo $status_name;?></td>
					<td><?php echo $edit;?></td>
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
			echo _lkn_worker_application_no;
		}
		?>
		
		<br />
		<?php echo $info_table;?>