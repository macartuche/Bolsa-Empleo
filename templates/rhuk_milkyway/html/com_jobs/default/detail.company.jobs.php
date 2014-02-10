<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
		global $_config;
		$make_national=$_config['make_jobs_national'];
		$locations_disable=$_config['locations_disable'];
		
		if ($job_count==0) { 
			echo _lkn_error_no_job;
			
		}else {
			echo $simple_search_box_wide;?>
			<div style="padding-top: 20px;">
				<div id="middleleftwidgetcontainer">
					<div class="jobsfoundnosuggs" >
						<?php 
							$msg=_lkn_company_has_active_jobs;
							//{COMPANY_NAME} has {COUNT} active jobs
							$msg=str_replace('{COUNT}',$job_count,$msg);
							$msg=str_replace('{COMPANY_NAME}',temizleSlash($rows[0]->company_name),$msg);
						?>
						<h1 style="margin: 15px 0px 8px;" class="searchInfo"><?php echo $msg;?></h1>
					</div>
				</div>
				<div style="clear: both;"></div>
			</div>
			<?php //kategoriye ait işlerin yazırılması başladı?>
			<div class="jl_wrap_div grad">	
			    <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
						<tbody>
							<tr>
								<th><?php echo _lkn_job;?></th>
								<th><?php echo _lkn_job_category;?></th>
								<?php if ($make_national=='0') {?>
									<th><?php echo _lkn_job_country;?></th>
								<?php }?>
								<?php if ($locations_disable=='1') {?>
								<?php }else {?>
								<th align="left"><?php echo _lkn_job_location;?></th>
								<?php }?>
								<th><?php echo _lkn_created;?></th>
							</tr>
							<?php
								$k=1;
						
								foreach ($rows as $row) {
									$title=temizleSlash($row->title);
									
									$id=$row->id;
									$published=$row->published;
									$alias=$row->alias;
																		
									$cat_id=$row->cat_id;
									$category_name=temizleSlash($row->category_name);
									$category_alias=$row->category_alias;
									
									$created=$row->created;
									$created=lknDate::formatDate($created);
									
									$job_location=$row->job_location;
									$job_location=lknJobsFunctions::getCountryLinks($row,$job_location,$Itemid);
									
									if ($locations_disable=='1') {
									}else {
									    $location=temizleSlash($row->j_location);
										if ($location==NULL) {
											$location='-';
										}else {
											$location=lknJobsFunctions::getLocationLinks($row,$location,$Itemid);
										}
									}
									
										$link_job="index.php?option=com_jobs&task=detail_job&id=$id:$alias" . $Itemid;
										$link_job=lknSef::url($link_job);
										$title="<a href=\"$link_job\" class=\"jt\">$title</a>";
										
										$link_category="index.php?option=com_jobs&task=detail_category&id=$cat_id:$category_alias" . $Itemid;
										$link_category=lknSef::url($link_category);
										$category_name="<a href=\"$link_category\">$category_name</a>";
										
										if ($k=='1') {
											$class='jl_odd_row';
										}else {
											$class='jl_even_row';
										}
									?>
										<tr class="<?php echo $class;?>">
											<td><?php echo $title;?></td>
											<td><?php echo $category_name;?></td>
											<?php if ($make_national=='0') {?>
												<td align="left"><?php echo $job_location;?></td>
											<?php }?>
											<?php if ($locations_disable=='1') {?>
											<?php }else {?>
											<td align="left"><?php echo $location;?></td>
											<?php }?>
											<td align="left"><?php echo $created; ?></td>
										</tr>
							
									<?php
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
		<?php }?>