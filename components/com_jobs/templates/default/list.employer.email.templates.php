<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); 
}
?>
<div id="linkredirectresume">
<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&task=employer&Itemid=2" id="titletopfrontal" />
<img title="Regresar a herramientas del empleador" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
<?php echo _lkn_backfrontal;?>
</a>
</div>
<br />
<table cellspacing="0" cellpadding="5" border="0" id="tools_employees">
    <thead>
            <tr>
                <th colspan="5">
                    <strong>
                        <?php echo _lkn_info;?>
                    </strong>
                </th>
            </tr>
        </thead>
    <tbody>
    <tr>
        <td valign="top" align="right">
            <img border="0" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'email.gif';?>"/>
        </td>
        <td width="100%" valign="top">
                <?php echo _lkn_employer_email_templates_desc;?>
        </td>
    </tr>
    </tbody>
</table>
<br />
<br />
<?php if ($email_count>0) 
{
?>	
<table cellpadding="5" cellspacing="0" border="0" id="tools_employees" >
<thead>
<tr>
    <th colspan="5">
        <strong>
			<?php echo _lkn_email_template_user; ?>
        </strong>
    </th>
</tr>
</thead>
<tbody>
<tr>
<td align="left">
    <strong>
        <?php //echo _lkn_id; ?>
    </strong>
</td>
<td>
    <strong>
        <?php echo _lkn_title; ?>
    </strong>
</td>
<td>
    <strong>
        <?php echo _lkn_published; ?>
    </strong>
</td>
<td>
    <strong>
        <?php echo _lkn_edit; ?>
    </strong>
</td>
<td>
    <strong>
        <?php echo _lkn_delete_email; ?>
    </strong>
</td>
</tr>
<?php 
$k=1;
foreach ($rows as $row)
{
$title=temizleSlash($row->title);
$id=$row->id;
$published=$row->published;
$edit="index.php?option=com_jobs&task=edit_employer_email_template&id=$id" . $Itemid;
$edit=lknSef::url($edit);
$edit="<a href=\"$edit\">";
$edit.="<img src=\"". TEMPLATE_IMAGE_PATH."edit.gif\" border=\"0\" alt=\"edit\" title=\"Editar\"/></a>";
$link_job="index.php?option=com_jobs&task=delete_employer_email_template&id=$id" . $Itemid;
$link_job=lknSef::url($link_job);
$delete="<a href=\"$link_job\">";
$delete.="<img src=\"". TEMPLATE_IMAGE_PATH."delete.gif\" border=\"0\" alt=\"edit\" title=\"Eliminar\"/></a>";
if ($k=='1') 
{
    $class='jl_odd_row';
}
else
{
    $class='jl_even_row';
}				
?>
<tr>
    <td align="center"><?php //echo $id; ?></td>
    <td><?php echo $title; ?></td>
    <td>
        <?php
        $publish_image=lknJobsFunctions::getPublishingImage($published);
        $publish_image=lknJobsFunctions::getPublishLink($published,$publish_image,'publish_employer_email_template','unpublish_employer_email_template',$id);
        echo $publish_image;	
        ?>
    </td>
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
<div>
    <div align="center">
        <a href="<?php echo $new_email_template_link;?>" class="btn">
            <?php echo _lkn_email_template_add;?>
        </a>
    </div>
</div>
<br />
<div style="margin: auto;">
<?php
    echo $info_table;
?>
</div>
<div style="margin: auto; width:780px;">
    <div style="margin: 5px; padding: 5px;">
        <?php echo $paging_links;?>
    </div>
</div>	
<br /><br /><br />