<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
	<?php //tepedki açıklama yazdırılmaya başladı?>
		<table width="100%" cellspacing="0" cellpadding="5" border="0" align="center" class="table">
			<tbody>
				<tr>
					<td valign="top" align="right">
						<img border="0" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'job_alerts.gif';?>"/>
					</td>
					<td width="100%" valign="top"><p class="header4"><?php echo _lkn_info;?></p>
						<?php echo _lkn_worker_job_alerts_desc;?>
					</td>
				</tr>
			</tbody>
		</table>
		
	<?php //tepedki açıklama yazdırılması bitti?>	
	<?php //kategoriye ait işlerin yazırılması başladı?>		
		<?php if ($alert_count>0) {?>
		<div class="jl_wrap_div grad">	
		   <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
			<thead>
				<tr>
					<th width="6"/>
					<th><strong><?php echo _lkn_created;?></strong></th>
					<th width="30"/>
					<th><strong><?php echo _lkn_worker_job_alert_name;?></strong></th>
					<th><strong><?php echo _lkn_published;?></strong></th>
					<th width="30"/>
					<th width="30"/>
				</tr>
			</thead>
		<tbody>
		<?php 
	
		$k=1;
		foreach ($rows as $row) {
			//print_r($row);
			$id=$row->id;
			$name=temizleSlash($row->name);
			$date=lknDate::formatDate($row->created);

			$published=$row->published;
			$image=lknJobsFunctions::getPublishingImage($published);
			$image=lknJobsFunctions::getPublishLink($published,$image,'publish_worker_job_alert','unpublish_worker_job_alert',$id);	
			
			if ($k=='1') {
				$class='jl_odd_row';
			}else {
				$class='jl_even_row';
			}
			
			$link_edit="index.php?option=com_jobs&task=edit_worker_job_alert&id=$id" . $itemid;
			$link_edit=lknSef::url($link_edit);
			$edit="<a href=\"$link_edit\">";
			$edit.="<img src=\"". TEMPLATE_IMAGE_PATH ."edit.gif\" border=\"0\" alt=\""._lkn_edit."\" title=\""._lkn_edit."\"/>";	
			$edit.='</a>';
			
			$link="index.php?option=com_jobs&task=delete_worker_job_alert&id=$id" . $itemid;
			$link=lknSef::url($link);
			$link="<a href=\"$link\">";
			$link.="<img src=\"". TEMPLATE_IMAGE_PATH ."delete.gif\" border=\"0\" alt=\""._lkn_delete."\" title=\""._lkn_delete."\" /></a>";
			?>
				<tr class="<?php echo $class;?>">
					<td width="6"/>
					<td><?php echo $date;?></td>
					<td width="6"/>
					<td><?php echo $name;?></td>
					<td><b><?php echo $image;?></b> </td>
					<td><?php echo $edit;?></td>
					<td><?php echo $link;?></td>
		</tr>
	
			<?php
			$k=3-$k;
		}
		
		?>
		</tbody>
		</table>
		</div>

		<?php //sayfalama linkleri başladı?>
		<div style="margin: 5px; padding: 5px;">
			<?php echo $paging_links;?>
		</div>
		<?php //sayfalama linkleri bitti?>
		<?php
		}else 
		{
			echo _lkn_error_form_no_job_alert;
		}
		?>
		<br />
			<div align="right">
			<?php echo $job_alert_message;?>
			</div>
			<br />
			<?php echo $new_job_alert_button;?>
			<br />
		<br />
		<?php echo $info_table;?>