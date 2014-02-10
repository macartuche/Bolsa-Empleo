<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
			
		$Itemid=lknJobsItemId();
		
		$user=new lknUser();
		if (count($rows)>0) {
			$image=$rows[0]->image;
		}else {
			$image='';
		}	
	
		
				
?>
<br /><br />
<div class="jl_wrap_div grad">
			<table class="jl_tbl" cellspacing="0" border="0" style="border-collapse: collapse;">
				<thead>
					<tr>
						<th colspan="3"><?php echo _lkn_worker_my_details;?></th>
					</tr>
				</thead>
					<tbody>

					<tr class="jl_odd_row">
						<td width="120" rowspan="2">
						<?php 
						if ($image!='')
						{
							$image=lknJobsFunctions::getResumeImage($image,$user->getName());
							echo $image;
						}
						?>
						</td>
						<td width="230" valign="top">
							<br/>
							<p><font class="header3"><?php echo _lkn_worker_worker_name;?>:</font> <?php echo $user->getName();?></p>
							<p><font class="header3"><?php echo _lkn_worker_worker_email;?>:</font> <?php echo $user->getEmail();?></p>
							<br/>
							<p><font class="header3"><?php echo _lkn_worker_worker_last_visit_date;?>:</font> <?php echo lknDate::formatDate($user->getLastVisitDate());?></p>
						</td>
						<td width="250" valign="top">
							<br/>
							<p><?php echo $application_count_link;?></p>
							<br/>
							
							<?php
								echo $credit_system_links;
							?>
						</td>
					</tr>					
			</tbody></table>
			</div>
		<?php
		
		$new_resume_allowed='1';
		if ($resume_count>0) {?>
				<div class="jl_wrap_div grad">
			<table class="jl_tbl" cellspacing="0" border="0" style="border-collapse: collapse;">
				<thead>
				<tr>
					<th><strong><?php echo _lkn_resume_title; ?></strong></th>
					<th><strong><?php echo _lkn_created; ?></strong></th>
					<th><strong><?php echo _lkn_resume_update_date; ?></strong></th>
					<th><strong><?php echo _lkn_resume_hits; ?></strong></th>
					<th><?php echo "&nbsp";?></th>
					<th><?php echo "&nbsp";?></th>
					<th><?php echo "&nbsp";?></th>
					<th><?php echo "&nbsp";?></th>
					<th><?php echo "&nbsp";?></th>
				</tr>
				</thead>
			<tbody>
		<?php 
	
		$k=1;
		$nohtml=lknGetNoHtml();
		foreach ($rows as $row) {
			$title=temizleSlash($row->title);
			$id=$row->id;
			$published=$row->published;
			$memberid=$row->memberid;
			$hits=$row->hits;
			$update_date=lknDate::formatDate($row->update_date);
			$created=$row->created;
			$created=lknDate::formatDate($created);
				
				$link_job="index.php?option=com_jobs&task=edit_resume&id=$id" . $itemid;
				$link_job=lknSef::url($link_job);
				$edit="<a href=\"$link_job\">";
				$edit.="<img src=\"". TEMPLATE_IMAGE_PATH ."edit.gif\" border=\"0\" alt=\""._lkn_edit."\" title=\""._lkn_edit."\"/></a>";
				
				$link_job="index.php?option=com_jobs&task=delete_resume&id=$id" . $itemid;
				$link_job=lknSef::url($link_job);
				$delete="<a href=\"$link_job\">";
				$delete.="<img src=\"". TEMPLATE_IMAGE_PATH ."delete.gif\" border=\"0\" alt=\""._lkn_delete."\" title=\""._lkn_delete."\" /></a>";
				
				$link_job="index.php?option=com_jobs&task=view_resume&id=$id" .$nohtml. $itemid;
				$link_job=lknSef::url($link_job);
				$view="<a href=\"$link_job\" target=\"_new\"
     			onclick=\"window.open(this.href,'win2','width=500,height=750,menubar=yes,resizable=yes,scrollbars=yes'); return false;\">";
				$view.="<img src=\"". TEMPLATE_IMAGE_PATH ."view.gif\" border=\"0\" alt=\""._lkn_view."\" title=\""._lkn_view."\" /></a>";
								
				$link_job="index.php?option=com_jobs&task=print_resume&id=$id" . $nohtml. $itemid;
				$link_job=lknSef::url($link_job);				
				$print="<a href=\"$link_job\" target=\"_new\"
     			onclick=\"window.open(this.href,'win2','width=500,height=750,menubar=yes,resizable=yes,scrollbars=yes'); return false;\">";
				$print.="<img src=\"". TEMPLATE_IMAGE_PATH ."print.gif\" border=\"0\" alt=\""._lkn_print."\" title=\""._lkn_print."\" /></a>";
				
				$publish_image=lknJobsFunctions::getPublishingImage($published);
				$publish_image=lknJobsFunctions::getPublishLink($published,$publish_image,'publish_resume','unpublish_resume',$id);
				
				if ($k=='1') {
					$class='jl_odd_row';
				}else {
					$class='jl_even_row';
				}					
			?>
			<tr class="<?php echo $class;?>">
				<td><?php echo $title; ?></td>
				<td><?php echo $created; ?></td>
				<td><?php echo $update_date; ?></td>
				<td align="center"><?php echo $hits; ?></td>
				<td align="center"><?php echo $publish_image;?></td>
				<td align="center"><?php echo $edit;?></td>
				<td align="center"><?php echo $delete;?></td>
				<td align="center"><?php echo $view;?></td>
				<td align="center"><?php echo $print;?></td>
			</tr>
	
			<?php
			$k=3-$k;
		}
		?>
		</tbody>
		</table>
		
		<?php echo $resume_count_message;?>
		</div><br />
		<?php
			echo $resume_paging_links;
		}else 
		{
			echo _lkn_worker_no_resume;
		}
		?>
		<?php echo $submit_resume_button;?>
		<br />
		<?php echo $job_seeker_tools;?>