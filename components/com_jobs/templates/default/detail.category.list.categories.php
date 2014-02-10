<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
if ($count>0) {
	global $_db,$_config;
	$Itemid=lknJobsItemId();
	$columns=$_config['home_page_category_column'];
	$show_job_count=$_config['home_page_category_job_count'];
	$width=100/($columns);
	?>
   	<table id="tools_employees" cellpadding="5" border="0" cellspacing="0">
    	<thead>
            <tr>
                <th colspan="5">
                        <?php echo _lkn_category_categories;?>
                </th>
            </tr>
        </thead>
        <tbody>
    <?php 
    $p=0;
    $k=1;
    foreach ($cats as $cat)
	{
    	$parent_id=$cat->parent_id;
		if ($active_id==$parent_id)
		{				

                $category=$cat->title;
                $id=$cat->id;
                $alias=$cat->alias;
                $link="index.php?option=com_jobs&task=detail_category&id=$id:$alias" . $Itemid;
                $link=lknSef::url($link);
                $link="<a href=\"$link\">$category</a>";
                if ($columns>1)
				{
					if ($p%$columns == 0) 
					{
						echo "<tr>";
                   	}
                   	echo "<td style=\"width: $width%;\padding:10px;\" valign=\"top\">";
					if ($show_job_count=='1')
					{
						$job_count=lknJobsFunctions::GetJobCount(lknText::cleanFirst($cat_array[$id],','));						
                     	$job_count=" <span> ($job_count)</span>";
                       	unset($where);
                	}
					else 
					{
						$job_count='';

                   	}
                    echo "$link$job_count" ;
                    echo "</td>";
					if (($p+1)%$columns == 0)
					{ 
						// End of row
                     	print "</tr>";
                    }
                }
				else 
				{
                    ?>
                    <tr class="sectiontableentry<?php echo $k;?>">
                        <td width="90%" style=""><strong><?php echo $link;?></strong></td>
                        <?php if ($show_job_count=='1'){
                        $job_count=lknJobsFunctions::GetJobCount(lknText::cleanFirst($cat_array[$id],','));
                            ?>
                            <td width="10%" align="center"><?php echo $job_count;?></td>
                        <?php }?>
                    </tr>
                    <?php 
                    $k=3-$k;
                }		        
    $p++;		
        }
    } 
    echo "</tbody>";
echo "</table>";
}
?>