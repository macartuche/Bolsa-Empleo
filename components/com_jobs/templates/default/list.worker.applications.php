<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
<div id="linkredirectresume">
	<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&task=worker&Itemid=2" id="titletopfrontal" />
<img title="Regresar a herramientas del buscador de empleo" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
<?php echo _lkn_backfrontal;?>
    </a>
</div>
<div id="titledemo1" style="width:100%;">
<h1 style="text-align:center;">
<?php echo _lkn_list_applications;?>
</h1>
</div>		
<?php if ($application_count>0) 
{
?>
<table cellspacing="0" border="0" id="tools_employees" cellpadding="5">
	<thead>
		<tr>   
        	<th colspan="9">
            	<strong>
                <?php echo _lkn_list_applicationslist;?>
                </strong>
            </th>
       	</tr>
   	</thead>
    <tbody>
   		<tr> 
            <td class="textresult"><strong><?php echo _lkn_job;?></strong></td>
            <td class="textresult"><strong><?php echo _lkn_company;?></strong> </td>
            <td class="textresult"><strong><?php echo _lkn_category_name;?></strong></td> 
            <td class="textresult"><strong><?php echo _lkn_cover_letter;?></strong></td>
           	<td class="textresult"><strong><?php echo _lkn_worker_response;?></strong> </td>  
            <td class="textresult"><strong><?php echo _lkn_worker_response_date;?></strong></td>
            <td><strong><?php echo _lkn_app_date;?></strong></td>
            <td class="textresult"><?php echo "&nbsp;";?></td>
        </tr>
		<?php 
        $k=1;
        //print_r($rows);
        foreach ($rows as $row)
        {
            $job_title=$row->job_title;
            $resume_title=$row->resume_title;
            $id=$row->id;
            $memberid=$row->memberid;
            $company_title=$row->company_title;
            $category_name=$row->category_name;
            $application_date=$row->application_date;
            $cover_letter=$row->cover_letter;
            $application_date=lknDate::formatDate($application_date);
            $job_published=$row->job_published;
            $job_publish_up=$row->job_publish_up;
            $job_publish_down=$row->job_publish_down;
            if ($job_published=='1' 
                AND ($job_publish_up == $nullDate OR $job_publish_up <= $now)
                AND ($job_publish_down == $nullDate OR $job_publish_down >= $now)
                ) {
                $job_published=1;
            }else {
                $job_published=0;
            }
            $link_cover_letter="index.php?option=com_jobs&task=edit_worker_application_cover_letter&id=$id" . $itemid;
            $link_cover_letter=lknSef::url($link_cover_letter);
            $edit="<a href=\"$link_cover_letter\">";
            if ($cover_letter!='')
            {
                $edit.="<img src=\"". TEMPLATE_IMAGE_PATH ."edit.gif\" border=\"0\" alt=\"edit\" title=\"Editar\"/>";	
            }
            else 
            {
                $edit.="<img src=\"". TEMPLATE_IMAGE_PATH ."edit_.gif\" border=\"0\" alt=\"edit\" title=\"Editar\"/>";						
            }
            $edit.='</a>';
            if ($k=='1')
            {
                $class='jl_odd_row';
            }
            else
            {
                $class='jl_even_row';
            }
            $data= lknJobsFunctions::worker_application_envelope($id,$memberid);
            $image=$data['image'];
            $date=$data['date'];
        ?>
        <tr>
            <td class="textresult"><?php echo $job_title;?></td>
            <td class="textresult"><?php echo $company_title;?> </td>
            <td class="textresult"><?php echo $category_name;?></td>
           	<td class="textresult"><?php echo $edit;?></td> 
            <td class="textresult"><?php echo $image;?></td>  
            <td class="textresult"><?php echo $date;?></td>
            <td class="textresult"><?php echo $application_date;?></td>
            <td class="textresult"><?php echo lknJobsFunctions::getActiveImage($job_published);?></td>
        </tr>
        <?php
        $k=3-$k;
        }
        ?>
	</tbody>
</table>
<br />
<div style="margin: 5px; padding: 5px;">
<?php echo $paging_links;?>
</div>
<?php
}
else
{
	echo "<h3 style='text-align:center;'>";
	echo _lkn_worker_application_no;
	echo "</h3>";
}
?>
<br />
<?php echo $info_table;?>
<?php 
?>