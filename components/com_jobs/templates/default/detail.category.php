<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
		global $_config;
		$make_national=$_config['make_jobs_national'];
		$hide=$_config['hide_company'];
		?>
			<?php 
			if ($job_count==0) { 
				echo _lkn_error_no_job;
			}else {?>
                <div id="linkredirectresume">
    <a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&task=list_employer_applications&Itemid=2" id="titletopfrontal"/>
        <img title="Regresar a sus postulantes" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
<?php echo _lkn_backfrontal;?>
    </a>
</div>
			<h1 id="advSrchdefault">
				<?php echo $job_count;?> - <?php echo temizleSlash($cat_name);?> <?php echo _lkn_jobs?>
          	</h1>
<br />
			    <table id="tools_employees" cellpadding="5" cellspacing="0" border="0">
                	<thead>
                    	<tr>
                        	<th colspan="9">
                            </th>
                        </tr>
                    </thead>

						<tbody>
                        <tr>
                        	<?php if ($hide!='3') {?>
    
                            <td class="textresult"><strong><?php echo _lkn_company;?></strong></td>
    
                            <?php }?>
    
                            <?php if ($make_national=='0') {?>
                            
                            <td class="textresult">
                            <strong>
                            <?php echo _lkn_job;?>
                            </strong>
                            </td>
    
                            <td class="textresult"><strong><?php echo _lkn_job_country;?></strong></td>
    
                            <?php }?>
    
                            <td class="textresult"><?php //echo _lkn_job_location;?></td>
    
                            <td class="textresult"><strong><?php echo _lkn_created;?></strong></td>
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
                                <tr>
                                	 <?php if ($hide!='3') {?>
                                    <td class="textresult"><?php echo $company_name; ?></td>
                                    <?php }?>
                                    <?php if ($make_national=='0') {?>
                                    <td class="textresult"><?php echo $title;?></td>
                                    <td class="textresult"><?php echo $job_location;?></td>
                                    <?php }?>
                                    <td class="textresult"><?php //echo $location;?></td>
                                    <td class="textresult"><?php echo $created; ?></td>
                                </tr>
								<?php
                                $k=3-$k;
								}
								?>
						</tbody>
					</table>
                    <br /><br />
                    <?php echo $subcats;?>
                    <br /><br />
                    <?php echo $simple_search_box_wide;?>
			<div style="margin: 5px; padding: 5px;">
				<?php echo $paging_links;?>
			</div>
		<?php }?>
		<br /><br /><br />