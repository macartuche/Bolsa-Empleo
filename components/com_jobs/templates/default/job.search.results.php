<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
global $_db,$_config;
$hide=$_config['hide_company'];
if ($job_count==0) { 
	echo _lkn_error_no_job;
}else {?>
<div id="linkredirectresume">
<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&Itemid=6" id="titletopfrontal" />
<img title="Regresar a herramientas del empleador" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
<?php echo _lkn_backfrontal;?>
</a>
</div>
<br />
<table id="tools_employees" cellspacing="0" cellpadding="5" border="0">
	<thead>
    	<tr>
        	<th colspan="3">
            </th>
        </tr>
    </thead>
   <tbody>
        <tr>
            <td class="textresult">
            <a href="<?php echo lknSef::url("index.php?option=com_jobs&task=advanced_search" . $Itemid);?>">
            <h3>
     		<?php echo _lkn_search_new;?>
            </h3>
            </a>
            </td>
            <td align="right">
				<?php echo _lkn_search_view;?>: <?php echo $brief;?> | <?php echo $detail;?>
            </td>
        </tr>
  </tbody>
</table>
<?php
if ($job_count>0)
{
	$limit_start=$_db->get('limit_start');
	$limit_end=$_db->get('limit_end');
	if ($limit_end>$job_count)
	{
		$limit_end=$job_count;
	}
//Search Results ({START} to {END} from {TOTAL})
$msg=_lkn_search_count_display;
$msg=str_replace('{START}',$limit_start,$msg);
$msg=str_replace('{END}',$limit_end,$msg);
$msg=str_replace('{TOTAL}',$job_count,$msg);
echo $msg;
?>
<table cellspacing="0" border="0" id="tools_employees" cellpadding="5"> 
        <thead>
            <tr>
                <th colspan="6">
                </th>
            </tr>
        </thead>
        <tbody>
        	<tr>
                <td class="textresult">
                <strong>
                <?php echo _lkn_job;?>
                </strong>
                </td>  
                <?php if ($hide!='3') {?>    
                <td class="textresult">
                <strong>
                <?php echo _lkn_company;?>
                </strong>
                </td>   
                <?php }?>    
                <td class="textresult">
                <strong>
                <?php echo _lkn_job_category;?>
                </strong>
                </td>    
                <?php if ($make_national=='0') {?>    
                <td class="textresult">
                <strong>
                <?php echo _lkn_job_country;?>
                </strong>
                </td>   
                <?php }?>    
            <?php /*?>          <td>
                <strong>
                <?php echo _lkn_job_location?>
                </strong>
                </td>   
                <td>
                <strong>
                <?php echo _lkn_created;?>
                </strong>
                </td> <?php */?>
                <td class="textresult">
                <strong>
                <?php echo _lkn_job_cityjobstate;?>
                </strong>
                </td> 
            </tr>
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
			$job_city=temizleSlash($row->city);
			$job_state=temizleSlash($row->state);
			if ($job_state!='')
			{
			$job_city.=',' . $job_state;
			}
			$category_title=temizleSlash($row->category_title);
			$cat_id=temizleSlash($row->cat_id);
			$category_alias=$row->category_alias;
			if ($hide=='2') 
			{
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
            
            <tr>
                <td class="textresult"><?php echo $job_link;?></td>
                <?php if ($hide!='3') {?>
                <td class="textresult"><?php echo $company_link;?></td>
                <?php }?>
                <td class="textresult"><?php echo $category_link;?></td>
                
                <?php if ($make_national=='0') {?>
                <td class="textresult"><?php echo $country_title;?></td>
                <td class="textresult"><?php echo $job_city;?></td>
                <?php }?>
            <?php /*?><td><?php echo $job_city;?></td>
                <td><?php echo $created;?></td><?php */?>
            </tr>
			<?php if ($detailed_results==1) { 
                $description=temizleSlash($row->description);
                $job_type=lknJobsFunctions::writeJobType($row->job_type);
                $degree=lknJobsFunctions::writeDegree($row->degree);
                $experience=$row->experience;
                $show_salary=$row->show_salary;
                $salary=$row->salary;
                $salary.=' ' . _lkn_currency;
                ?> 
                <tr>
                	<td width="45%" class="textresult">
                    <strong>
                        <?php echo _lkn_description_front_end;?>
                    </strong>
                    </td>
                    <td class="textresult">
                    	<strong>
                   			<?php echo _lkn_job_salary;?>: 
                        </strong>
                        
                    </td>
                    <td class="textresult">
                    <strong>
                    	<?php echo _lkn_job_experience;?>:
                    </strong>
                    </td>
                    <td class="textresult">
                    	<strong>
                        	  <?php echo _lkn_job_job_type;?>: 
                        </strong>
                    </td>
                    <td class="textresult">
                    	<strong>
                        	<?php echo _lkn_job_degree;?>:
                        </strong>
                    </td>
             	</tr>
               	<tr>
                	<td width="45%" class="textresult">
						<?php echo $description;?>
                  	</td>
                 	<td class="textresult">
						<?php 
                      	if ($show_salary==1) 
						{
							echo $salary;

						}
						else 
						{
							echo '-';
						}
                        ?>
               		</td>
                    <td class="textresult">
                        <?php 
                        if ($experience!=0 && $experience!='')
                        {
                            echo $experience;
                        }
                        else
                        {
                            echo '-';
                        }
                        ?>
                    </td>
                    <td class="textresult">
                      <?php echo $job_type;?>
                    </td>
                    <td class="textresult">
                        <?php echo $degree;?>
                    </td>
                </tr>
                <tr>
                	<td class="textresult">
                    ---------------------------------------------------------------------------------------
                    </td>
                </tr>
            <?php }
            $k=3-$k;
            }
            ?>
</tbody>
</table>
<div style="margin: 5px; padding: 5px;">
<?php echo $paging_links;?>
</div>
<br /><br />
<br />
<?php //sayfalama linkleri bitti?>
<?php }?>
<?php }?>