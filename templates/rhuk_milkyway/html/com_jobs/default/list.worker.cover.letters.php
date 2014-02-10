<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
	<?php //tepedki açıklama yazdırılmaya başladı?>
		<h1><?php echo _lkn_list_cover_letters;?></h1>
	<?php //tepedki açıklama yazdırılması bitti?>	
	
	<?php //kategoriye ait işlerin yazırılması başladı?>

		<?php if ($count>0) {?>
		<div class="jl_wrap_div grad">	
		   <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
			<thead>
				<tr>
				<th><strong><?php echo _lkn_id; ?></strong></th>
				<th><strong><?php echo _lkn_title; ?></strong></th>
				<th><strong><?php echo _lkn_published; ?></strong></th>
				<th></th>
				<th></th>
				</tr>
			</thead>
		<tbody>
		<?php 
	
		$k=1;

		foreach ($rows as $row) {
//			print_r($row);
			$title=$row->title;
			$id=$row->id;
			$published=$row->published;
			
				$link_cover_letter="index.php?option=com_jobs&task=edit_worker_cover_letter&id=$id" . $itemid;
				$link_cover_letter=lknSef::url($link_cover_letter);
				$edit="<a href=\"$link_cover_letter\">";
				$edit.="<img src=\"". TEMPLATE_IMAGE_PATH ."edit.gif\" border=\"0\" alt=\""._lkn_edit."\" title=\""._lkn_edit."\"/></a>";
				
				$link_cover_letter="index.php?option=com_jobs&task=delete_worker_cover_letter&id=$id" . $itemid;
				$link_cover_letter=lknSef::url($link_cover_letter);
				$delete="<a href=\"$link_cover_letter\">";
				$delete.="<img src=\"". TEMPLATE_IMAGE_PATH ."delete.gif\" border=\"0\" alt=\""._lkn_delete."\" title=\""._lkn_delete."\" /></a>";
				
				if ($k=='1') {
					$class='jl_odd_row';
				}else {
					$class='jl_even_row';
				}
				
				$publish_image=lknJobsFunctions::getPublishingImage($published);
				$publish_image=lknJobsFunctions::getPublishLink($published,$publish_image,'publish_worker_cover_letter','unpublish_worker_cover_letter',$id);
								
						
			?>
			<tr class="<?php echo $class;?>">
				<td align="center"><?php echo $id; ?></td>
				<td><?php echo $title; ?></td>
				<td><?php echo $publish_image;?></td>
				<td><?php echo $edit;?></td>
				<td><?php echo $delete;?></td>
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
			
		<?php }else 
		{
			echo _lkn_worker_no_cover_letter;
		}
		?>
		
		<div class="floatRight">
		<?php
		 $link="index.php?option=com_jobs&task=new_worker_cover_letter" .$itemid;
		 $link=lknSef::url($link);
			?>
			<a href="<?php echo $link;?>" class="btn"><?php echo _lkn_cover_letter_add;?></a>
		</div>