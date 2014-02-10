<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
			
?>
<br /><br />
<div>
	<table id="tools_employees" cellpadding="5" cellspacing="0" border="0">
		<thead>
			<tr>
				<th><strong><?php echo _lkn_worker_my_tools;?></strong></th>
			</tr>
		</thead>
        <tbody>
            <tr>
                <td class="textresult">
                    <p class="header3">
                        <a href="<?php echo lknSef::url("index.php?option=com_jobs&task=list_worker_applications" . $itemid)?>"><?php echo _lkn_worker_my_applications;?></a>
                    </p>
                    <p>
                        <img height="58" width="53" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'info.gif';?>"/>
                        <?php echo _lkn_worker_my_applications_desc;?>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="textresult">
                    <p class="header3">
                        <a href="<?php echo lknSef::url("index.php?option=com_jobs&task=list_worker_cover_letters" . $itemid)?>"><?php echo _lkn_worker_my_cover_letters;?></a>
                    </p>
                    <p>
                        <img height="58" width="53" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'cover_letter_small.gif';?>"/>
                        <?php echo _lkn_worker_my_cover_letters_desc;?>
                    </p>
                </td>
            </tr>
            <?php if ($files_active=='1') {?>
                <tr>
                    <td class="textresult">
                        <p class="header3">
                            <a href="<?php echo lknSef::url("index.php?option=com_jobs&task=list_worker_files" . $itemid)?>"><?php echo _lkn_worker_files;?></a>
                        </p>
                        <p>
                            <img height="58" width="53" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'file.gif';?>"/>
                            <?php echo _lkn_worker_files_desc;?>
                        </p>
                    </td>
                </tr>
            <?php }?>
            <?php if ($feeds_active=='1') { ?>
            <tr>
                <td class="textresult">
                    <p class="header3">
                        <a href="<?php echo lknSef::url("index.php?option=com_jobs&task=rss_page" . $itemid)?>"><?php echo _lkn_worker_rss;?></a>
                    </p>
                    <p>
                        <img height="58" width="53" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'rss_big.gif';?>"/>
                            <?php echo _lkn_worker_rss_desc;?>
                        </p>
                </td>
            </tr>
            <?php }	?>
            <?php if ($credit_system_active=='1') { ?>
            <tr>
                <td class="textresult">
                    <p class="header3">
                    <a href="<?php echo lknSef::url("index.php?option=com_jobs&task=buy_credits" . $Itemid)?>">
                        <?php echo _lkn_employer_buy_credits;?>
                    </a>
                    </p>
                    <p>
                    <img height="60" width="60" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'buy_credits.gif';?>"/>
                    <?php echo _lkn_worker_buy_credits_desc;?>
                    </p>
                </td>
            </tr>		
            <?php }?>
        </tbody>
	</table>
</div>
<br /><br /><br />