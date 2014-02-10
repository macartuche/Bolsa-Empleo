<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); 
}
global $_config;
$make_national=$_config['make_jobs_national'];
$hide=$_config['hide_company'];
?>
<br />
<?php 
if ($job_count==0) 
{
	echo _lkn_error_no_job;
}
else 
{
?>
<div id="linkredirectresume">
<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&Itemid=6" id="titletopfrontal" />
<img title="Regresar al inicio" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
<?php echo _lkn_backfrontal;?>
</a>
</div>
	<div id="middleleftwidgetcontainer">
    	<div class="jobsfoundnosuggs" >
        	<h1>
				<?php echo $header_message;?>
           	</h1>
		</div>
	</div>
<table cellspacing="0" border="0" id="tools_employees" cellpadding="5">
    <thead>
    <tr>
        <th colspan="5">
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
		<?php echo _lkn_empresas;?>
        </strong>
        </td>
		<?php }?>
		<?php if ($make_national=='0') {?>
        <td class="textresult">
        <strong>
		<?php echo _lkn_job_category;?>
        </strong>
        </td>
		<?php }?>
		<td class="textresult">
        <strong>
		<?php echo _lkn_job_cityjobstate;?>
        </strong>
        </td>
        <td class="textresult">
        <strong>
		<?php echo _lkn_until;?>
        </strong>
        </td>
  	</tr>
	<?php
    $k=1;
	foreach ($rows as $row)
	{
		if ($row->is_featured=='1' && $_config['job_posting_featured_allowed']=='1')
		{
			$featured_note2=' <img src="components/com_jobs/images/featured.png" border="0" alt="'._lkn_employer_featured_job.'" title="'._lkn_employer_featured_job.'"/>';
		}
		else
		{
			$featured_note2='';
		}

			$title=temizleSlash($row->title);
			$id=$row->id;
			$published=$row->published;
			$alias=$row->alias;
			$company_name=temizleSlash($row->company_name);
			$company_alias=$row->company_alias;
			$company_id=$row->company_id;
			$until=$row->created;

			$created=lknDate::formatDate($until);
			$category=$row->category_name;
			$city = $row->city;
			$state = $row->state;
		
			if ($hide=='2')
			{
				$hide_company_name=$row->hide_company_name;

			}
			elseif ($hide=='1')
			{
				$hide_company_name='0';

			}
			elseif ($hide=='3')
			{
				$hide_company_name='1';
			}
			if ($hide_company_name=='1')
			{
				$company_name=_lkn_job_company_name_is_hidden;

			}
			else
			{
				$link_company="index.php?option=com_jobs&task=detail_company&id=$company_id:$company_alias" . $Itemid;
				$link_company=lknSef::url($link_company);
				$company_name="<a href=\"$link_company\">$company_name</a>";			
			}
			$link_job="index.php?option=com_jobs&task=detail_job&id=$id:$alias" . $Itemid;
			$link_job=lknSef::url($link_job);
			$title="<a href=\"$link_job\" class=\"jt\">$title</a>";
			if ($k=='1')
			{
				$class='jl_odd_row';

			}
			else
			{
				$class='jl_even_row';
			}
			?>
            <tr>
            <td class="textresult">
			<?php echo $title;?>
			<?php echo $featured_note2;?>
            </td>
			<?php if ($hide!='3') {?>
            <td class="textresult">
			<?php echo $company_name; ?>
            </td>
			<?php }?>
            <!--
            Para la presentacion de la ubicaci—n
            <?php if ($make_national=='0') {?>
            <td align="left"><?php echo $job_location;?></td>
			<?php }?>
            <td align="left"><?php echo $location;?></td>
            -->
            <td class="textresult"><?php echo $category; ?></td>
            <td class="textresult"><?php echo $state; ?>/<?php echo $city; ?></td>
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
<br /><br /><br />
<?php 
}
?>