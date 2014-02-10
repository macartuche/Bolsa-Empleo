<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' );
}
?>
<div id="linkredirectresume">
	<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&task=worker&Itemid=2" id="titletopfrontal" />
<img title="Regresar a herramientas del buscador de empleo" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
	<?php echo _lkn_backfrontal;?>
    </a>
</div>
<div id="titledemo1" style="width:100%;">
	<h1 style="text-align:center;"><?php echo _lkn_list_files;?></h1>
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
            <?php /*?><th><strong><?php echo _lkn_id;?></strong></th><?php */?>
            <td class="textresult"><strong><?php echo _lkn_files_file_name;?></strong></td>
            <td class="textresult"><strong><?php echo _lkn_file_notes;?></strong></td>
            <td class="textresult"><?php echo "&nbsp;" ?></td>
            <td class="textresult"><?php echo "&nbsp;" ?></td>
        </tr>
    <?php
    $k = 1;
    $i = 0;
    foreach ($rows as $row ) 
    {
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
        $edit.="<img src=\"". TEMPLATE_IMAGE_PATH ."edit.gif\" border=\"0\" alt=\"edit\" title=\"Editar\"/>";	
        $edit.='</a>';
        $publish_image=lknJobsFunctions::getPublishingImage($published);
        ?>
        <tr>
           <?php /*?> <td><?php echo $id;?></td><?php */?>
            <td class="textresult">
            <a href="/images/stories/jobs/files/<?php echo $file_name;?>" target="_blank">
			<?php echo $file_name;?>
            </a>
            </td>
            <td class="textresult"><?php echo $file_notes;?></td>
            <td class="textresult"><?php echo $published;?></td>
            <td class="textresult"><?php echo $edit;?></td>
        </tr>
        <?php
        $k = 3 - $k;
        $i ++;
        }
        ?>
    </tbody>
</table>

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

		<div class="buttonresumeuser">

			<a href="<?php echo $link;?>" class="btn"><?php echo $link_message;?></a>

		</div>
        <br /><br /><br /><br /><br />