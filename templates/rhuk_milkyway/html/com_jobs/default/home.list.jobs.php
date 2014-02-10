<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
global $_config;
$hide=$_config['hide_company'];
?>
		                <div id="pnlRecommendList" class="pnlRecommendList">
			                <div id="RecommendBody" class="RecommendBody">
			                    <div id="RecommendLocation" class="recommend_location lknclearfix">
			                       <h2><?php echo _lkn_job_latest;?> <a href="<?php echo $rss_link;?>" style="height:14px;width:36px;"><img title="rss" src="<?php echo TEMPLATE_IMAGE_PATH . 'rss.jpg'?>" border="0" /></a></h2>
			                    </div>
			                </div>
				                <div id="results_body">
				             	<table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; width: 100%;">
				             		<tbody>
				             		<?php if ($count==0) {?>
				             			<tr>
				             				<td>
				             					<table cellspacing="0" cellpadding="0" class="title">
				             						<tbody>
				             							<tr>
				             								<td class="titleLeft">
				             									<?php echo _lkn_error_no_job;?>
				             								</td>
				             							</tr>
				             						</tbody>
				             					</table>
				             				</td>
				             			</tr>
				             	<?php } else {
				             	
				             			foreach ($rows as $row) {
				             				//print_r($row);
											$title=temizleSlash($row->title);
											$id=$row->id;
											$published=$row->published;
											$alias=$row->alias;
											
											$company_name=temizleSlash($row->company_name);
											$company_alias=$row->company_alias;
											$company_id=$row->company_id;
											
				             				if ($hide=='2') {
												//şirketin seçmesine izin verilmiş
												$hide_company_name=$row->hide_company_name;
				             					if ($hide_company_name=='1') {
													$company_name=_lkn_job_company_name_is_hidden;
												}
											}elseif ($hide=='1'){
												$hide_company_name='0';
											}elseif ($hide=='3'){
												//hepsini gizle
												$hide_company_name='1';
												$company_name='';
											}
											

											
											$cat_id=$row->cat_id;
											$category_name=temizleSlash($row->category_name);
											$category_alias=$row->category_alias;
											
											$job_location=$row->job_location;
											
											$created=$row->created;
											$created=lknDate::formatDate($created);
								
												
												$link_job="index.php?option=com_jobs&task=detail_job&id=$id:$alias" . $Itemid;
												$link_job=lknSef::url($link_job);
												$title="<a href=\"$link_job\" target=\"_top\" title=\"". _lkn_job_country. ": $job_location - ".  _lkn_created . ":  $created "."\">$title</a>";
																							
														
											?>
						             			<tr>
						             				<td>
						             					<table cellspacing="0" cellpadding="0" class="title">
						             						<tbody>
						             							<tr>
						             								<td class="titleLeft">
						             									<?php echo $title; ?><br/>
						             									<span class="company"><?php echo $company_name;?></span>
						             								</td>
						             								<td class="titleRight"><?php echo $category_name;?></td>
						             							</tr>
						             						</tbody>
						             					</table>
						             				</td>
						             			</tr>
									
											<?php
										}
				             	}?>
				             		</tbody>
				             	</table>
				             </div>
			             
			             </div>