<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
	<?php //tepedki açıklama yazdırılmaya başladı?>
	<table width="100%" cellspacing="0" cellpadding="5" border="0" align="center" class="table">
		<tbody>
			<tr>
				<td valign="top" align="right"><img border="0" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'list_jobs.gif';?>"/></td>
				<td width="100%" valign="top"><p class="header4"><?php echo _lkn_info;?></p><?php echo _lkn_employer_list_jobs_desc_;?></td>
			</tr>
		</tbody>
	</table>
	<?php //tepedki açıklama yazdırılması bitti?>	
	<?php //kategoriye ait işlerin yazırılması başladı?>

		<form action="index.php" method="GET" name="adminForm">
		<table class="general_table">
		<tbody><tr>
			<td width="100%">
				<input type="text" onchange="document.adminForm.submit();" class="text_area" value="<?php echo $search;?>" id="search" name="search"/>
				<button onclick="document.adminForm.submit();"><?php echo _lkn_go;?></button>
				<button onclick="document.getElementById('search').value='';document.getElementById('cat_id').value='';document.getElementById('published').value='';document.adminForm.submit();"><?php echo _lkn_reset;?></button>
			</td>
			<td nowrap="nowrap"> <?php echo _lkn_category_name . ': ' . $category_select_list . ' ' . $publish_list;?></td>
		</tr>
		</tbody></table>
		<input type="hidden" name="option" value="com_jobs"/>
		<input type="hidden" name="ItemId" value="<?php echo lknJobsItemId(true);?>"/>
		<input type="hidden" name="task" value="list_employer_jobs"/>
		</form>
		<?php if ($job_count>0) {?>
		<div class="jl_wrap_div grad">	
		   <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
		   	<thead>
				<tr>
				<th><strong><?php echo _lkn_job; ?></strong></th>
				<th><strong><?php echo _lkn_company; ?></strong></th>
				<th><strong><?php echo _lkn_category_name; ?></strong></th>
				<th><strong><?php echo _lkn_job_hits; ?></strong></th>
				<th><strong><?php echo _lkn_app_count; ?></strong></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				</tr>
			</thead>
		<tbody>
		<?php 
	
		$k=1;

		foreach ($rows as $row) {
			$title=temizleSlash($row->title);
			$id=$row->id;
			$alias=$row->alias;
			$published=$row->published;
			$alias=$row->alias;
			$hits=$row->hits;
			$publish_up=lknDate::formatDate($row->publish_up);
			$publish_down=lknDate::formatDate($row->publish_down);
			$tooltip=_lkn_job_publish_up .':' . $publish_up . '<br />' ._lkn_job_publish_down. $publish_down; 
			$company_name=temizleSlash($row->company_name);
			$category_name=temizleSlash($row->category_name);
			
			$publish_down_=$row->publish_down;
			$publish_up_=$row->publish_up;
			
				$link_job="index.php?option=com_jobs&task=edit_employer_job&id=$id" . $Itemid;
				$link_job=lknSef::url($link_job);
				$edit="<a href=\"$link_job\">";
				$edit.="<img src=\"".TEMPLATE_IMAGE_PATH."edit.gif\" border=\"0\" alt=\""._lkn_edit."\" title=\""._lkn_edit."\"/></a>";
						
				$link_job="index.php?option=com_jobs&task=detail_job&id=$id:$alias" .$Itemid;
				$link_job=lknSef::url($link_job);
				$view="<a href=\"$link_job\" target=\"_new\">";
				$view.="<img src=\"".TEMPLATE_IMAGE_PATH."view.gif\" border=\"0\" alt=\""._lkn_view."\" title=\""._lkn_view."\" /></a>";
				
				$link_job="index.php?option=com_jobs&task=delete_employer_job&id=$id:$alias" .$Itemid;
				$link_job=lknSef::url($link_job);
				$delete="<a href=\"$link_job\">";
				$delete.="<img src=\"".TEMPLATE_IMAGE_PATH."delete.gif\" border=\"0\" alt=\""._lkn_delete."\" title=\""._lkn_delete."\" /></a>";
				
				if ($k=='1') {
					$class='jl_odd_row';
				}else {
					$class='jl_even_row';
				}
								
						
			?>
			<tr class="<?php echo $class;?>">
			<td align="left"><?php echo lknToolTip($tooltip,$title); ?></td>
			<td align="left"><?php echo $company_name; ?></td>
			<td align="left"><?php echo $category_name; ?></td>
			<td align="center"><?php echo $hits; ?></td>
			<td align="center"><?php 
			$sql="SELECT id FROM #__jobs_applications WHERE job_id='$id'";
			$count=lknGetCount($sql);
			$count="<a href=\"". lknSef::url("index.php?option=com_jobs&task=list_employer_applications&job_id=$id" .$Itemid) . "\">$count</a>";
			echo $count; ?></td>
			<td align="left"><?php echo $edit; ?></td>
			
			<td align="left"><?php 
				if (($now>$publish_down_) && $publish_down_!=$null_date) {
					//yani publish_down zamanı geçmiş demek
					$image=TEMPLATE_IMAGE_PATH."inactive.gif";
					$image="<img src=\"$image\" alt=\"inactive\" border=\"0\"/>" ;
					echo $image;
				}elseif (($now<$publish_up_) && $publish_up_!=$null_date){
					$image=TEMPLATE_IMAGE_PATH."active.gif";
					$image="<img src=\"$image\" alt=\"active\" border=\"0\"/>" ;
					echo $image;
				}else{
					$publish_image=lknJobsFunctions::getPublishingImage($published);
					if ($job_approval=='0') {
						$publish_image= lknJobsFunctions::getPublishLink($published,$publish_image,'publish_employer_job','unpublish_employer_job',$id);
					}
					
					echo $publish_image;	
				}
				?>
			</td>
			<td align="left"><?php echo $view;?></td>
			<td align="left"><?php echo $delete;?></td>
			</tr>
	
			<?php
			$k=3-$k;
		}
		
		?>
		</tbody>
		</table>
		</div>
		<br />
			<?php //sayfalama linkleri başladı?>
			<div style="margin: 5px; padding: 5px;">
				<?php echo $paging_links;?>
			</div>
			<?php //sayfalama linkleri bitti?>
			<?php
		}else 
		{
			echo _lkn_error_no_job;
		}
		?>
		
		<div class="floatRight">
		<?php
		 $link="index.php?option=com_jobs&task=employer_new_job" . $Itemid;
		 $link=lknSef::url($link);
			?>
			<a href="<?php echo $link;?>" class="btn"><?php echo _lkn_job_add;?></a>
		</div>
		<br />
		<?php //İŞLERİN YAZDIRILMASI BİTTİ
			echo $info_table;
	?>