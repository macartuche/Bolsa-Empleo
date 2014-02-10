<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

		global $_config;
		$make_national=$_config['make_jobs_national'];
		
		/*
		 * 1:hepsini göster
		 * 2:şirketin seçmesine izin ver;
		 * 3:hepsini gizle
		 * */
		$hide=$_config['hide_company'];

		
		?>
		<?php echo $simple_search_box_wide;?><br />
			<?php 
			if ($job_count==0) { 
				echo _lkn_error_no_job;
			
			}else {?>
			<div style="padding-top: 20px;">
				<div id="middleleftwidgetcontainer">
					<div class="jobsfoundnosuggs" >
						<h1 style="margin: 15px 0px 8px;" class="searchInfo"><?php echo $header_message;?></h1>
					</div>
				</div>
				<div style=""></div>
			</div>
			<?php //kategoriye ait işlerin yazırılması başladı?>
			<div class="jl_wrap_div grad">	
			    <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
						<tbody>
							<tr>
								<th align="left"><?php echo _lkn_job;?></th>
								<?php if ($hide!='3') {?>
								<th align="left"><?php echo _lkn_company;?></th>
								<?php }?>
								<?php if ($make_national=='0') {?>
									<th align="left"><?php echo _lkn_job_country;?></th>
								<?php }?>
								<th align="left"><?php echo _lkn_job_location;?></th>
								<th align="left"><?php echo _lkn_created;?></th>
							</tr>
							<?php
								$k=1;
						
								foreach ($rows as $row) {
									//print_r($row);
									$title=temizleSlash($row->title);
									$id=$row->id;
									$published=$row->published;
									$alias=$row->alias;
									
									$company_name=temizleSlash($row->company_name);
									$company_alias=$row->company_alias;
									$company_id=$row->company_id;
									
									$created=$row->created;
									$created=lknDate::formatDate($created);
									
									$job_location=$row->job_location;
									$job_location=lknJobsFunctions::getCountryLinks($row,$job_location,$Itemid);
									
									$location=temizleSlash($row->j_location);
									if ($location==NULL) {
										$location='-';
									}else {
										$location=lknJobsFunctions::getLocationLinks($row,$location,$Itemid);
									}
									
									
									if ($hide=='2') {
										//şirketin seçmesine izin verilmiş
										$hide_company_name=$row->hide_company_name;
									}elseif ($hide=='1'){
										$hide_company_name='0';
									}elseif ($hide=='3'){
										$hide_company_name='1';
									}
									
									if ($hide_company_name=='1') {
										$company_name=_lkn_job_company_name_is_hidden;
									}else {
										$link_company="index.php?option=com_jobs&task=detail_company&id=$company_id:$company_alias" . $Itemid;
										$link_company=lknSef::url($link_company);
										$company_name="<a href=\"$link_company\">$company_name</a>";			
									}
						
									
										
										$link_job="index.php?option=com_jobs&task=detail_job&id=$id:$alias" . $Itemid;
										$link_job=lknSef::url($link_job);
										$title="<a href=\"$link_job\" class=\"jt\">$title</a>";
										
										
										if ($k=='1') {
											$class='jl_odd_row';
										}else {
											$class='jl_even_row';
										}
									?>
										<tr class="<?php echo $class;?>">
											<td align="left"><?php echo $title;?></td>
											<?php if ($hide!='3') {?>
											<td align="left"><?php echo $company_name; ?></td>
											<?php }?>
											
											<?php if ($make_national=='0') {?>
												<td align="left"><?php echo $job_location;?></td>
											<?php }?>
											<td align="left"><?php echo $location;?></td>
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