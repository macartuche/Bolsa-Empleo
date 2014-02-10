<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

?>
		<table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tbody>
				<tr>
					<td><?php echo $new_search_link;?></td>
					<td align="right"><?php echo _lkn_search_view;?>: <b><?php echo $brief_link;?> | <?php echo $detail_link;?></b></td>
				</tr>
			</tbody>
		</table>
  
			<div style="padding-top: 20px;">
				<div id="middleleftwidgetcontainer">
					<div class="jobsfoundnosuggs" >
						<h1 style="margin: 15px 0px 8px;" class="searchInfo"><?php echo $resume_count_message;?></h1>
					</div>
				</div>
				<div style="clear: both;"></div>
			</div>
			<?php //kategoriye ait işlerin yazırılması başladı?>
			<div class="jl_wrap_div grad">	
			    <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
			    	<thead>
						<tr>
							<th><strong><?php echo _lkn_created;?></th>
							<th><strong><?php echo _lkn_resume_update_date;?></th>
							<th><strong><?php echo _lkn_resume;?></th>
							<th><strong><?php echo _lkn_resume_name;?></th>
							<th><strong><?php echo _lkn_resume_city;?></th>
							<th><strong><?php echo _lkn_resume_state;?></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
		
						<tbody>
							<?php
								$k=1;
						
				foreach ($rows as $row) {
					if ($k=='1') {
						$class='jl_odd_row';
					}else {
						$class='jl_even_row';
					}
					$title=temizleSlash($row->title);
					$name=temizleSlash($row->name);
					$city=temizleSlash($row->city);
					$state=temizleSlash($row->state);
					$created=lknDate::formatDate($row->created);
					$update_date=lknDate::formatDate($row->update_date);
					$id=$row->id;
					
					$url="index.php?option=com_jobs&task=view_resume&id=$id&action=company_view&user_id=$user_id" . $Itemid . lknGetNoHtml();
					$url=lknSef::url($url);
					$title="<a href=\"$url\" target=\"_new\"
    					 onclick=\"window.open(this.href,'win2','width=500,height=750,menubar=yes,resizable=yes,scrollbars=yes'); return false;\">$title</a>";

						
						$view="<img src=\"". TEMPLATE_IMAGE_PATH ."view.gif\" border=\"0\" alt=\""._lkn_view."\" title=\""._lkn_view."\" />";
						$view="<a href=\"$url\" target=\"_new\"
    					 onclick=\"window.open(this.href,'win2','width=500,height=750,menubar=yes,resizable=yes,scrollbars=yes'); return false;\">$view</a>";
    					 						
    				$print="index.php?option=com_jobs&task=print_resume&id=$id&action=company_view&user_id=$user_id" . $Itemid . lknGetNoHtml();
					$print=lknSef::url($print);				
					$print="<a href=\"$print\" target=\"_new\"
		     		onclick=\"window.open(this.href,'win2','width=500,height=750,menubar=yes,resizable=yes,scrollbars=yes'); return false;\">";
					$print.="<img src=\"". TEMPLATE_IMAGE_PATH ."print.gif\" border=\"0\" alt=\""._lkn_print."\" title=\""._lkn_print."\" /></a>";
    					?>
					<tr class="<?php echo $class;?>">
						<td><?php echo $created;?></td>
						<td><?php echo $update_date;?></td>
						<td><?php echo $title;?></td>
						<td><?php echo $name;?></td>
						<td><?php echo $city;?></td>
						<td><?php echo $state;?></td>
						<td><?php echo $print;?></td>
						<td><?php echo $view;?></td>
					</tr>
					<?php if ($detailed_results==1) {
						//burası detaylı arama sonuçları istenirse gösterilecek
						$job_type=lknJobsFunctions::writeJobType($row->job_type);
						$experience=$row->experience;
						$desired_pay=$row->desired_pay;
					?>
						<tr class="<?php echo $class;?>">
							<td style="padding-top: 5px; padding-bottom: 5px;" colspan="8">
								<table width="100%" cellspacing="0" cellpadding="4" border="0" align="center">
									<tbody>
										<tr>
											<td width="60%" valign="top"><b><?php echo _lkn_resume_desired_pay;?>:</b> 
												<?php 
													if ($desired_pay!='') {
														echo $desired_pay. ' ' . _lkn_currency;
													}else {
														echo '-';
													}
												?>
											</td>
											<td width="40%" valign="top"><b><?php echo _lkn_job_experience;?>:</b>
												<?php 
													if ($experience!=0 && $experience!='') {
														echo $experience;
													}else {
														echo '-';
													}
												?>
											</td>
										</tr>
										<tr>
											<td width="60%" valign="top"><b><?php echo _lkn_job_job_type;?>:</b> <?php echo $job_type;?></td>
											<td width="40%" valign="top"></td>
										</tr>
									</tbody>
							</table>
						</td>
					</tr>
				<?php
				}
				$k=3-$k;
				}
				?>
				</tbody>
			</table>
		</div>
	<?php //kategoriye ait işlerin yazırılması bitti?>
	<?php //sayfalama linkleri başladı?>
			<div style="margin: 5px; padding: 5px;">
				<?php echo $paging_links;?>
			</div>
	<?php //sayfalama linkleri bitti?>