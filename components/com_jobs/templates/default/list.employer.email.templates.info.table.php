<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
<table cellspacing="0" border="0" id="tools_employees" cellpadding="5">
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
            <img alt="active" src="<?php echo TEMPLATE_IMAGE_PATH ."published.gif";?>"/>
            </td>
            <td class="textresult">
            <?php echo _lkn_employer_info_table_email_template_published;?>
            </td>
            <td class="textresult">
            <img alt="inactive" src="<?php echo TEMPLATE_IMAGE_PATH. "published_x.gif";?>"/>
            </td>
            <td class="textresult">
            <?php echo _lkn_employer_info_table_email_template_published_x;?>
            </td>
    	</tr>
        <tr>
            <td class="textresult">
            <img alt="read" src="<?php echo TEMPLATE_IMAGE_PATH. "edit.gif";?>"/>
            </td>
            <td class="textresult">
            <?php echo _lkn_employer_info_table_email_template_edit;?>
            </td>
            <td class="textresult">
            <img alt="unread" src="<?php echo TEMPLATE_IMAGE_PATH. "delete.gif";?>"/>
            </td>
            <td class="textresult">
            <?php echo _lkn_employer_info_table_email_template_delete;?>
            </td>
        </tr>
    </tbody>
</table>