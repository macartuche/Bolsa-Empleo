<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
	global $_config;
	$_db=&lknDb::createInstance();	
	$hide=$_config['hide_company'];
	$locations_disable=$_config['locations_disable'];
	
		if ($job_count==0) { 
			echo _lkn_error_no_job;
			
		}else {?>
			<div style="padding-top: 20px;">
				<div id="middleleftwidgetcontainer">
					<div class="jobsfoundnosuggs" >
						<table width="100%" cellspacing="0" cellpadding="0" border="0">
						   <tbody>
						   		<tr>
							      <td><?php echo $search_url;?></td>
							      <td align="right"><?php echo _lkn_search_view;?>: <b><?php echo $brief;?> | <?php echo $detail;?></b></td>
						      	</tr>
						  </tbody>
						</table>
								<?php
		
			if ($job_count>0) {
			$limit_start=$_db->get('limit_start');
			$limit_end=$_db->get('limit_end');
			if ($limit_end>$job_count) {
				$limit_end=$job_count;
			}
			
			//Search Results ({START} to {END} from {TOTAL})
			$msg=_lkn_search_count_display;
			$msg=str_replace('{START}',$limit_start,$msg);
			$msg=str_replace('{END}',$limit_end,$msg);
			$msg=str_replace('{TOTAL}',$job_count,$msg);
			echo $msg;
			?>
					</div>
				</div>
				<div style="clear: both;"></div>
			</div>
			<?php //kategoriye ait işlerin yazırılması başladı?>
			<div class="jl_wrap_div grad">	
			    <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
			    		<thead>
							<tr>
								<th><strong><?php echo _lkn_created;?></strong></th>
								<th><strong><?php echo _lkn_job;?></strong></th>
								<?php if ($hide!='3') {?>
								<th><strong><?php echo _lkn_company;?></strong></th>
								<?php }?>
								<th><strong><?php echo _lkn_job_category;?></strong></th>
								<?php if ($make_national=='0') {?>
									<th><strong><?php echo _lkn_job_country;?></strong></th>
								<?php }?>
								<?php if ($locations_disable=='1') {?>
								<?php }else {?>
								<th><strong><?php echo _lkn_job_location?></strong></th>
								<?php }?>
								
							</tr>
						</thead>
						<tbody>
						          <?php 
          $k=1;
          foreach ($rows as $row) 
          { 
          	$title=temizleSlash($row->title);
          	$alias=$row->alias;
          	$id=$row->id;
          	$created=lknDate::formatDate($row->created);
          	
          	$company_id=$row->company_id;
          	$company_title=temizleSlash($row->company_title);
          	$company_alias=$row->company_alias;
          	
          	$country_title=temizleSlash($row->country_title);
			$country_title=lknJobsFunctions::getCountryLinks($row,$country_title,$Itemid);
			
			if ($locations_disable=='1') {
			}else {
	          	$location=temizleSlash($row->j_location);
				if ($location==NULL) {
					$location='-';
				}else {
					$location=lknJobsFunctions::getLocationLinks($row,$location,$Itemid);
				}
			}
          	
          	
          	$category_title=temizleSlash($row->category_title);
          	$cat_id=temizleSlash($row->cat_id);
          	$category_alias=$row->category_alias;
          	
          	if ($hide=='2') {
          	//şirketin seçmesine izin verilmiş
			$hide_company_name=$row->hide_company_name;
			}elseif ($hide=='1'){
				$hide_company_name='0';
			}elseif ($hide=='3'){
				$hide_company_name='1';
			}
          	
          	if ($k=='1') {
          		$class='jl_odd_row';
          	}else {
          		$class='jl_even_row';
          	}

          	$link="index.php?option=com_jobs&task=detail_job&id=$id:$alias".$Itemid;
          	$link=lknSef::url($link);
          	$job_link="<a href=\"$link\">$title</a>";
          	
          	if ($hide_company_name=='1') {
				$company_link=_lkn_job_company_name_is_hidden;
			}else {
	          	$link="index.php?option=com_jobs&task=detail_company&id=$company_id:$company_alias".$Itemid;
			    $link=lknSef::url($link);
			    $company_link="<a href=\"$link\">$company_title</a>";			
			}

		    
		    $link="index.php?option=com_jobs&task=detail_category&id=$cat_id:$category_alias".$Itemid;
		    $link=lknSef::url($link);
		    $category_link="<a href=\"$link\">$category_title</a>";
    
          	?>
          		<tr class="<?php echo $class;?>">
          			<td><?php echo $created;?></td>
          			<td><?php echo $job_link;?></td>
          			<?php if ($hide!='3') {?>
						<td><?php echo $company_link;?></td>
					<?php }?>
          			<td><?php echo $category_link;?></td>
          			<?php if ($make_national=='0') {?>
          				<td><?php echo $country_title;?></td>
          			<?php }?>
					<?php if ($locations_disable=='1') {?>
					<?php }else {?>
						<td><?php echo $location;?></td>
					<?php }?>
          			
          		</tr>
			  	<?php if ($detailed_results==1) { 
				  		$description=temizleSlash($row->description);
				  		$job_type=lknJobsFunctions::writeJobType($row->job_type);
				  		$degree=lknJobsFunctions::writeDegree($row->degree);
				  		$experience=$row->job_experience;
				  		$experience=(($experience=='')?'-':$experience);
				  		$salary=temizleSlash($row->lknjobs_jobsalary);
				  		$salary=(($salary=='')?'-':$salary);
			  		//burası detaylı arama sonuçları istenirse gösterilecek
			  		?>
			  		
			        <tr class="<?php echo $class;?>">
			        	<td style="padding-top: 5px; padding-bottom: 5px;" colspan="6">
			        		<table width="100%" cellspacing="0" cellpadding="4" border="0" align="center">
			        			<tbody>
			        				<tr>
			        					<td valign="top">
			        						<table width="100%" cellspacing="0" cellpadding="1" border="0" align="center">
			        							<tbody>
			        								<tr>
			        									<td colspan="2"><?php echo $description;?></td>
			        								</tr>
			        								<tr>
			        									<td width="60%" valign="top">
			        									<b><?php echo _lkn_job_salary;?>:</b> <?php	echo $salary;?>
			        									</td>
			        										<td width="40%" valign="top">
			        										<b><?php echo _lkn_job_experience;?>:</b><?php echo $experience;?>
			        										</td>
			        								</tr>
			        								<tr>
			        									<td width="60%" valign="top"><b><?php echo _lkn_job_job_type;?>:</b> <?php echo $job_type;?></td>
			        									<td width="40%" valign="top"><b><?php echo _lkn_job_degree;?>:</b> <?php echo $degree;?></td>
			        								</tr>
			        							</tbody>
			        						</table>
			        					</td>
			        				</tr>
			        			</tbody>
			        		</table>
			        	</td>
			        </tr>
        <?php }

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
		<?php }?>