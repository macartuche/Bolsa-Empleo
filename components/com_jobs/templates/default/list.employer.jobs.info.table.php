<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); 
}
?>
<table width="100%" cellspacing="0" border="0" id="tools_employees" cellpadding="5">
        <thead>
            <tr>
                <th colspan="9">
                    <?php echo _lkn_info;?>
                </th>                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="textresult">
                <img alt="active" src="<?php echo TEMPLATE_IMAGE_PATH.'published.gif';?>"/>
                </td>
                <td class="textresult">
				<?php echo _lkn_employer_info_table_job_is_published;?>
                </td>
                <td class="textresult">
                <img alt="inactive" src="<?php echo TEMPLATE_IMAGE_PATH."published_x.gif";?>"/>
                </td>
                <td class="textresult">
				<?php echo _lkn_employer_info_table_job_is_unpublished;?>
                </td>
            </tr>
        <tr>
            <td class="textresult">
            <img alt="read" src="<?php echo TEMPLATE_IMAGE_PATH."view.gif";?>"/>
            </td>
            <td class="textresult">
			<?php echo _lkn_employer_info_table_view;?>
            </td>
            <td class="textresult">
            <img alt="unread" src="<?php echo TEMPLATE_IMAGE_PATH. "edit.gif";?>"/>
            </td>
            <td class="textresult">
			<?php echo _lkn_employer_info_table_edit;?>
            </td>
        </tr>
        <tr>
            <td class="textresult"><img alt="edit" src="<?php echo TEMPLATE_IMAGE_PATH."inactive.gif";?>"/></td>
            <td class="textresult"><?php echo _lkn_employer_info_inactive;?></td>
            <td class="textresult"><img alt="draft" src="<?php echo TEMPLATE_IMAGE_PATH."draft.png";?>"/></td>
            <td class="textresult"><?php echo _lkn_employer_info_draft;?></td>
        </tr>
    </tbody>
</table>