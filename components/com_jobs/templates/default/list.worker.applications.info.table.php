<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

?>
<table cellspacing="0" border="0" id="tools_employees" cellpadding="5">
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
            <td class="textresult"><img alt="active" src="<?php echo TEMPLATE_IMAGE_PATH. "active.gif";?>"/></td>

            <td class="textresult"><?php echo _lkn_worker_app_info_table_job_active;?></td>

            <td class="textresult"><img alt="inactive" src="<?php echo TEMPLATE_IMAGE_PATH. "inactive.gif";?>"/></td>

            <td class="textresult"><?php echo _lkn_worker_app_info_table_job_inactive;?></td>

        </tr>

        <tr>

            <td class="textresult"><img alt="read" src="<?php echo TEMPLATE_IMAGE_PATH. "open_envelope.gif";?>"/></td>

            <td class="textresult"><?php echo _lkn_worker_app_info_table_read_message;?></td>

            <td class="textresult"><img alt="unread" src="<?php echo TEMPLATE_IMAGE_PATH. "closed_envelope.gif";?>"/></td>

            <td class="textresult"><?php echo _lkn_worker_app_info_table_unread_message;?></td>

        </tr>

        <tr>

            <td class="textresult"><img alt="edit" src="<?php echo TEMPLATE_IMAGE_PATH. "edit.gif";?>"/></td>

            <td class="textresult"><?php echo _lkn_worker_app_info_table_has_cover_letter;?></td>

            <td class="textresult"><img alt="edit" src="<?php echo TEMPLATE_IMAGE_PATH. "edit_.gif";?>"/></td>

            <td class="textresult"><?php echo _lkn_worker_app_info_table_has_not_cover_letter;?></td>

        </tr>

    </tbody>

</table>
<br /><br /><br /><br />