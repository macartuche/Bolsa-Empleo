<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
			
		$Itemid=lknJobsItemId();
				
		$user=new lknUser();
		if (isset($rows[0]->logo)) {
			$logo=$rows[0]->logo;
		}else {
			$logo='';
		}
?>
<br /><br />		
<div class="jl_wrap_div grad">
			<table class="jl_tbl" cellspacing="0" border="0" style="border-collapse: collapse;">
				<thead>
					<tr>
						<th colspan="3"> <?php echo _lkn_worker_my_details;?></th>
					</tr>
				</thead>
					<tbody>
					<tr class="jl_odd_row">
						<td width="120" rowspan="2">
						<?php 
						if ($logo!='')
						{
							$logo=lknJobsFunctions::getCompanyLogo($logo,$user->getUserName());
							echo $logo;
						}
						?>							
						<td width="230" valign="top">
							<br/>
							<p><font class="header3"><?php echo _lkn_worker_worker_name;?>:</font> <?php echo $user->getName();?></p>
							<p><font class="header3"><?php echo _lkn_worker_worker_email;?>:</font> <?php echo $user->getEmail();?></p>
							<br/>
							<p><font class="header3"><?php echo _lkn_worker_worker_last_visit_date;?>:</font> <?php echo lknDate::formatDate($user->getLastVisitDate());?></p>
						</td>
						<td width="250" valign="top">
							<br/>
							
							<?php
								echo $credit_system_links;
							?>
						</td>
					</tr>
			</tbody></table>
			</div>
		<?php if ($company_count>0) {?>
		<div class="jl_wrap_div grad">
			<table class="jl_tbl" cellspacing="0" border="0" style="border-collapse: collapse;">
			<thead>
			<tr>
				<th><strong><?php echo _lkn_company; ?></strong></th>
				<th><?php echo "&nbsp";?></th>
				<th><?php echo "&nbsp";?></th>
				<th><?php echo "&nbsp";?></th>
				<th><?php echo "&nbsp";?></th>
			</tr>
			</thead>
		<tbody>
		<?php 
	
		$k=1;
		foreach ($rows as $row) {
			$title=temizleSlash($row->title);
			$id=$row->id;
			$published=$row->published;
			$alias=$row->alias;
			$memberid=$row->memberid;
			$publish_image=lknJobsFunctions::getPublishingImage($published);
			
			$created=$row->created;
			$created=lknDate::formatDate($created);
				
				$link_job="index.php?option=com_jobs&task=edit_company&id=$id:$alias" . $Itemid;
				$link_job=lknSef::url($link_job);
				$edit="<a href=\"$link_job\">";
				$edit.="<img src=\"".TEMPLATE_IMAGE_PATH."edit.gif\" border=\"0\" alt=\""._lkn_edit."\" title=\""._lkn_edit."\"/></a>";
						
				$link_job="index.php?option=com_jobs&task=detail_company&id=$id:$alias" .$Itemid;
				$link_job=lknSef::url($link_job);
				$view="<a href=\"$link_job\" target=\"_new\">";
				$view.="<img src=\"".TEMPLATE_IMAGE_PATH."view.gif\" border=\"0\" alt=\""._lkn_view."\" title=\""._lkn_view."\" /></a>";
				
				$rss=lknSef::url("index.php?option=com_jobs&task=rss&company=$id" .$Itemid);
				$rss="<a href=\"$rss\" target=\"_new\">";
				$rss.="<img src=\"".TEMPLATE_IMAGE_PATH."rss.jpg\" border=\"0\" alt=\"rss feeds for this company\" title=\"rss feeds for this company\" /></a>";

				if ($k=='1') {
					$class='jl_odd_row';
				}else {
					$class='jl_even_row';
				}

			?>
			<tr class="<?php echo $class;?>">
			<td><?php echo $title; ?></td>
			<td><?php echo $publish_image;?></td>
			<td><?php echo $edit;?></td>
			<td><?php echo $view;?></td>
			<td><?php echo $rss;?></td>
			</tr>
	
			<?php
			$k=3-$k;
		}
		
		?>
		</tbody>
		</table>
		<?php echo $company_count_message;?>
		</div><br />
		<?php
			echo $company_paging_links;
		}else 
		{
			echo _lkn_employer_no_company;
		}
		?><br />
		<?php echo $submit_company_button;?>
		<br />
		<?php echo $employer_tools;?>