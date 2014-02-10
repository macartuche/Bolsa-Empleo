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
    <?php echo _lkn_list_cover_letters;?>
    </h1>
</div>
<?php if ($count>0) {?>
	<table cellpadding="5" cellspacing="0" border="0" class="jl_tbl" id="tools_employees">
			<thead>
				<tr>
                	<th colspan="5">
                    </th>
                </tr>
			</thead>
		<tbody>
         <tr>
				<?php /*?><th><strong><?php echo _lkn_id; ?></strong></th><?php */?>
				<td><strong><?php echo _lkn_title; ?></strong></td>
				<td><?php echo "&nbsp;" ?></td>
                <td><?php echo "&nbsp;" ?></td>
                <td><?php echo "&nbsp;" ?></td>
			</tr>
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

				$edit.="<img src=\"". TEMPLATE_IMAGE_PATH ."edit.gif\" border=\"0\" alt=\"edit\" title=\"Editar\"/></a>";

				

				$link_cover_letter="index.php?option=com_jobs&task=delete_worker_cover_letter&id=$id" . $itemid;

				$link_cover_letter=lknSef::url($link_cover_letter);

				$delete="<a href=\"$link_cover_letter\">";

				$delete.="<img src=\"". TEMPLATE_IMAGE_PATH ."delete.gif\" border=\"0\" alt=\"delete\" title=\"Eliminar\" /></a>";

				

				if ($k=='1') {

					$class='jl_odd_row';

				}else {

					$class='jl_even_row';

				}

				

				$publish_image=lknJobsFunctions::getPublishingImage($published);

				$publish_image=lknJobsFunctions::getPublishLink($published,$publish_image,'publish_worker_cover_letter','unpublish_worker_cover_letter',$id);

								

						

			?>

			<tr>

				<?php /*?><td align="center"><?php echo $id; ?></td><?php */?>

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

		

		<div class="buttonresumeuser">

		<?php

		 $link="index.php?option=com_jobs&task=new_worker_cover_letter" .$itemid;

		 $link=lknSef::url($link);

		?>

			<a href="<?php echo $link;?>" class="btn"><?php echo _lkn_cover_letter_add;?></a>

		</div><br /><br /><br /><br /><br />