<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
	
		?>
		<?php echo $simple_search_box_wide;?><br />
			<?php //kategoriye ait işlerin yazırılması başladı?>
			<div class="jl_wrap_div grad">	
			    <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
						<tbody>
						<?php if ($company_count>0) {?>
							<tr>
								<th width="7"></th>
								<th align="left"><?php echo _lkn_company;?></th>
							</tr>
							<?php
									$k=1;
									$number=$limit_start;
									foreach ($rows as $row) {
										//print_r($row);
		
										
										$company_name=temizleSlash($row->title);
										$company_alias=$row->alias;
										$company_id=$row->id;
										
											$link_company="index.php?option=com_jobs&task=detail_company&id=$company_id:$company_alias" . $Itemid;
											$link_company=lknSef::url($link_company);
											$company_name="<a href=\"$link_company\">$company_name</a>";			
		
											
											
											if ($k=='1') {
												$class='jl_odd_row';
											}else {
												$class='jl_even_row';
											}
										?>
											<tr class="<?php echo $class;?>">
												<td width="7"><?php echo $number;?></td>
												<td align="left"><?php echo $company_name; ?></td>
											</tr>
								
										<?php
										$k=3-$k;
										$number++;
									}
																	
								}else { ?>
									<tr class="jl_odd_row">
										<td width="7"></td>
										<td align="left"><?php echo _lkn_company_no_record; ?></td>
									</tr>
								<?php }?>
						</tbody>
					</table>
			</div>
			<?php //kategoriye ait işlerin yazırılması bitti?>
			
			<?php if ($company_count>0) {?>
				<div style="margin: 5px; padding: 5px;">
					<?php echo $paging_links;?>
				</div>
			<?php }?>