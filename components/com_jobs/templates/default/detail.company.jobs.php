<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

		global $_config;

		$make_national=$_config['make_jobs_national'];	
		if ($job_count==0) { 

			echo _lkn_error_no_job;
			echo "<br /><br /><br />";
		}else {

			?>

			<div style="padding-top: 20px;">

				<div id="middleleftwidgetcontainer">

					<div class="jobsfoundnosuggs" >

						<?php 

							$msg=_lkn_company_has_active_jobs;

							//{COMPANY_NAME} has {COUNT} active jobs

							$msg=str_replace('{COUNT}',$job_count,$msg);
							$msg=str_replace('{COMPANY_NAME}',temizleSlash($rows[0]->company_name),$msg);
						?>
						<h1><?php echo $msg;?></h1>

					</div>

				</div>

			</div>
			<table cellspacing="0" border="0" cellpadding="5" id="tools_employees">
                		<thead>
                        	<tr>
                            	<th colspan="5">
                                </th>
                            </tr>
                        </thead>

						<tbody>
							 <tr>

								<td class="textresult"><?php echo _lkn_job;?></td>

								<td class="textresult"><?php echo _lkn_job_category;?></td>

								<?php if ($make_national=='0') {?>

									<td class="textresult"><?php echo _lkn_job_country;?></td>

								<?php }?>

								<td class="textresult"><?php echo _lkn_job_location;?></td>

								<td class="textresult"><?php echo _lkn_created;?></td>

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

									$city=$row->city;

									$state=$row->state;

									

									$location=array();

									if ($city!='') {

										$location[]=$city;

									}

									

									if ($state!='') {

										$location[]=$state;

									}

									

									if (count( $location )>0) {

										$location= implode( ' , ', $location );

									}else {
										 $location= ' - ';
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
                                    <tr>
                                        <td class="textresult">
                                            <?php echo $title;?>
                                        </td>
										<td class="textresult">
											<?php echo $category_name;?>
                                      	</td>
											<?php if ($make_national=='0') {?>

												<td class="textresult"><?php echo $job_location;?></td>
											<?php }?>
											<td class="textresult"><?php echo $location;?></td>
											<td class="textresult"><?php echo $created; ?></td>
										</tr>
									<?php
									$k=3-$k;
								}
								?>
						</tbody>
					</table>
                    <div style="margin: 5px; padding: 5px;">
						<?php echo $paging_links;?>
					</div>
                    <?php echo $simple_search_box_wide;?>
                    <br /><br /><br /><br /><br />
		<?php }?>