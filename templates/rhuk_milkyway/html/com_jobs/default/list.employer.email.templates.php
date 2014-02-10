<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
	<?php //tepedki açıklama yazdırılmaya başladı?>
			<table width="100%" cellspacing="0" cellpadding="5" border="0" align="center" class="table">
			<tbody><tr>
				<td valign="top" align="right">
				<img border="0" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'email.gif';?>"/>
				</td>
				<td width="100%" valign="top">
					<p class="header4"><?php echo _lkn_info;?></p>
					<?php echo _lkn_employer_email_templates_desc;?>
				</td>
			</tr>
		</tbody></table>
	<?php //tepedki açıklama yazdırılması bitti?>	
	<?php //kategoriye ait işlerin yazırılması başladı?>
		<?php if ($email_count>0) {?>
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
			$title=temizleSlash($row->title);
			$id=$row->id;
			$published=$row->published;
			
				$edit="index.php?option=com_jobs&task=edit_employer_email_template&id=$id" . $Itemid;
				$edit=lknSef::url($edit);
				$edit="<a href=\"$edit\">";
				$edit.="<img src=\"". TEMPLATE_IMAGE_PATH."edit.gif\" border=\"0\" alt=\""._lkn_edit."\" title=\""._lkn_edit."\"/></a>";

				$link_job="index.php?option=com_jobs&task=delete_employer_email_template&id=$id" . $Itemid;
				$link_job=lknSef::url($link_job);
				$delete="<a href=\"$link_job\">";
				$delete.="<img src=\"". TEMPLATE_IMAGE_PATH."delete.gif\" border=\"0\" alt=\""._lkn_delete."\" title=\""._lkn_delete."\"/></a>";
				
				if ($k=='1') {
					$class='jl_odd_row';
				}else {
					$class='jl_even_row';
				}
								
						
			?>
			<tr class="<?php echo $class;?>">
			<td align="center"><?php echo $id; ?></td>
			<td><?php echo $title; ?></td>
			<td><?php
					$publish_image=lknJobsFunctions::getPublishingImage($published);
					$publish_image=lknJobsFunctions::getPublishLink($published,$publish_image,'publish_employer_email_template','unpublish_employer_email_template',$id);
					echo $publish_image;	
					?></td>
			<td><?php echo $edit; ?></td>
			<td><?php echo $delete; ?></td>
			</tr>
	
			<?php
			$k=3-$k;
		}
		
		?>
		</tbody>
		</table>
		</div>
		<br />
			<?php

			echo $paging_links;
		}
		?>
		
		<div class="floatRight">
				<a href="<?php echo $new_email_template_link;?>" class="btn"><?php echo _lkn_email_template_add;?></a>
		</div>
		<br />
		<?php //İŞLERİN YAZDIRILMASI BİTTİ
			echo $info_table;
	?>
	

			<?php //sayfalama linkleri başladı?>
			<div style="margin: 5px; padding: 5px;">
				<?php echo $paging_links;?>
			</div>
			<?php //sayfalama linkleri bitti?>