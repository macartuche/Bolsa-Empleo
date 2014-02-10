<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
	<?php //tepedki açıklama yazdırılmaya başladı?>
	<table width="100%" cellspacing="0" cellpadding="5" border="0" align="center" class="table">
		<tbody>
			<tr>
				<td valign="top" align="right"><img border="0" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'info.gif';?>"/></td>
				<td width="100%" valign="top"><p class="header4"><?php echo _lkn_info;?></p><?php echo _lkn_list_job_templates_desc;?></td>
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
				<button onclick="document.getElementById('search').value='';document.getElementById('published').value='';document.adminForm.submit();"><?php echo _lkn_reset;?></button>
			</td>
			<td nowrap="nowrap"><?php echo $publish_list;?></td>
		</tr>
		</tbody></table>
		<input type="hidden" name="option" value="com_jobs"/>
		<input type="hidden" name="ItemId" value="<?php echo lknJobsItemId(true);?>"/>
		<input type="hidden" name="task" value="list_employer_job_templates"/>
		</form>
		<?php if ($job_template_count>0) {?>
		<div class="jl_wrap_div grad">	
		   <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
		   	<thead>
				<tr>
				<th><strong><?php echo _lkn_id; ?></strong></th>
				<th><strong><?php echo _lkn_list_job_template_name; ?></strong></th>
				<th><strong><?php echo _lkn_published; ?></strong></th>
				<th></th>
				<th></th>
				</tr>
			</thead>
		<tbody>
		<?php 
	
		$k=1;

		foreach ($rows as $row) {
			$t_name=temizleSlash($row->t_name);
			$id=$row->id;			
			$published=lknJobsFunctions::getPublishingImage ( $row->published );
			$published= lknJobsFunctions::getPublishLink($row->published,$published,'publish_employer_job_template','unpublish_employer_job_template',$id,'id');
			
				
			$link_job="index.php?option=com_jobs&task=edit_employer_job_template&id=$id" . $Itemid;
			$link_job=lknSef::url($link_job);
			$edit="<a href=\"$link_job\">";
			$edit.="<img src=\"".TEMPLATE_IMAGE_PATH."edit.gif\" border=\"0\" alt=\""._lkn_edit."\" title=\""._lkn_edit."\"/></a>";
			
				
			$link_job="index.php?option=com_jobs&task=delete_employer_job_template&id=$id" .$Itemid;
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
			<td align="left"><?php echo $id; ?></td>
			<td align="left"><?php echo $t_name; ?></td>
			<td align="left"><?php echo $published; ?></td>
			<td align="left"><?php echo $edit; ?></td>
			<td align="left"><?php echo $delete; ?></td>
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
		 $link="index.php?option=com_jobs&task=employer_new_job_template" . $Itemid;
		 $link=lknSef::url($link);
			?>
			<a href="<?php echo $link;?>" class="btn"><?php echo _lkn_job_templates_add;?></a>
		</div>