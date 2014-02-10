<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
	<?php //tepedki açıklama yazdırılmaya başladı?>
		<h1><?php echo _lkn_list_files;?></h1>
	<?php //tepedki açıklama yazdırılması bitti?>	
	
	<?php //kategoriye ait işlerin yazırılması başladı?>

		<?php if ($count>0) {?>
		<div class="jl_wrap_div grad">	
		   <table cellspacing="0" border="0" style="border-collapse: collapse;" class="jl_tbl">
			   	<thead>
					<tr>
						<th><strong><?php echo _lkn_id;?></strong></th>
						<th><strong><?php echo _lkn_files_file_name;?></strong></th>
						<th><strong><?php echo _lkn_file_notes;?></strong></th>
						<th><strong><?php echo _lkn_file_hits;?></strong></th>
						<th></th>
						<th></th>
					</tr>
				</thead>
		<tbody>
		<?php

				$k = 1;
				$i = 0;
				foreach ($rows as $row ) {

					//print_r($row);
					$id=$row->id;
					$file_name=$row->file_name;
					$file_notes=temizleSlash($row->file_notes);
					$file_hits=temizleSlash($row->hits);
					$published=lknJobsFunctions::getPublishingImage( $row->published );
						if ($k=='1') {
							$class='jl_odd_row';
						}else {
							$class='jl_even_row';
						}
						
						$link_edit="index.php?option=com_jobs&task=edit_worker_file&id=$id" . $itemid;
						$link_edit=lknSef::url($link_edit);
						$edit="<a href=\"$link_edit\">";
						$edit.="<img src=\"". TEMPLATE_IMAGE_PATH ."edit.gif\" border=\"0\" alt=\""._lkn_edit."\" title=\""._lkn_edit."\"/>";	
						$edit.='</a>';
				
						
						$publish_image=lknJobsFunctions::getPublishingImage($published);
				
					?>
					<tr class="<?php echo $class;?>">
						<td><?php echo $id;?></td>
						<td><?php echo $file_name;?></td>
						<td><?php echo $file_notes;?></td>
						<td><?php echo $file_hits;?></td>
						<td><?php echo $published;?></td>
						<td><?php echo $edit;?></td>
					</tr>
					<?php
					$k = 3 - $k;
					$i ++;
				}

				?>
		</tbody>
		</table>
		</div>
		<div class="floatRight">
			<?php echo $file_count_note;?>
		</div>
		<?php //sayfalama linkleri başladı?>
			<div style="margin: 5px; padding: 5px;">
				<?php echo $paging_links;?>
			</div>
			<?php //sayfalama linkleri bitti?>
			
		<?php }else 
		{
			echo _lkn_list_files_no;
		}
		?>		
		<div class="floatRight">
			<a href="<?php echo $link;?>" class="btn"><?php echo $link_message;?></a>
		</div>