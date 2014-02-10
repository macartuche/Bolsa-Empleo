<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
if ($count>0)
{
	global $_db,$_config;
	$Itemid=lknJobsItemId();
	$columns=$_config['home_page_category_column'];
	$show_job_count=$_config['home_page_category_job_count'];
	$width=100/($columns);
?>
<div class="jsHomeSearchBoxes lknclearfix">
	<div class="jsHomeCategories">
    	<img src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/imagesbe/play_button.png" align="left"/>
        <h3 class="medGrey" style="margin-left:20px; text-transform:uppercase;">
            <?php echo _lkn_category_categories;?>
        </h3>
        <div id="pnlFeatCatContent" class="pnlFeatCatContent">
		  <?php 
		  $p=0;
		  $k=1;
		  foreach ($cats as $cat)
		  {
		  $parent_id=$cat->parent_id;
		  if ($parent_id==0) {				
			  $category=$cat->title;
			  $id=$cat->id;
			  $alias=$cat->alias;
			  $link="index.php?option=com_jobs&task=detail_category&id=$id:$alias" . $Itemid;
			  $link=lknSef::url($link);
			  $link="<a style='color:#FFFFFF;' href=\"$link\" class=\"itemcategoryfront\">$category</a>";
			  if ($columns>1) 
			  {
				  if ($p%$columns == 0) { // Start of row
				  }
				  
				
				  if ($show_job_count=='1')
				  {
					  $job_count=lknJobsFunctions::GetJobCount($cat_array[$id]);
					  $job_count=" <span id='numbercategoryfront'> ($job_count)</span>";
					  echo "<br />";
					  unset($where);
				  }
				  else 
				  {
					  $job_count='';
			      }
				  echo "$link$job_count" ;
			
			      if (($p+1)%$columns == 0) 
				  { // End of row
			
					 }

			  }else {
			  ?>  
			  <strong><?php echo $link;?></strong>
			  <?php if ($show_job_count=='1')
			  {
				  $job_count=lknJobsFunctions::GetJobCount($cat_array[$id]);
			  ?>
              <?php echo $job_count;?>
			  <?php }?>
			  <?php 
			  	$k=3-$k;
			  }		        
  				$p++;
			  }
  		} 
		echo "</div></div></div>";
}
else 
{
	echo _lkn_category_no;
}
?>