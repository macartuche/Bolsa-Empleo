<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

?>
<div class="herramientas_empleo">
	<div class="jsHomeOtherSearches">
    	<img src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/imagesbe/play_button.png" align="left"/>
        <h3 class="medGrey" style="margin-left:20px; text-transform:uppercase;">
            <?php echo _lkn_toolbar_job_seeker_tools;?>
        </h3>
        <ul>
            <?php /*?><li>
            <a style="color:#FFF;" href="<?php echo $job_seeker_panel;?>">
            <?php echo _lkn_resume_add;?>
            </a>: <?php echo _lkn_home_page_post_resume;?>
            </li><?php */?>
            <li>
            <a href="<?php echo $job_seeker_panel;?>">
            <?php echo _lkn_worker_rss;?>
            </a>: <?php echo _lkn_home_page_rss_feeds;?>
            </li>
            <li>
            <a href="<?php echo $job_seeker_panel;?>">
            <?php echo _lkn_worker_my_cover_letters;?>
            </a>: <?php echo _lkn_home_page_cover_letter_desc;?>
            </li>
            <li>
            <a href="<?php echo $job_seeker_panel;?>">
            <?php echo _lkn_worker_my_applications;?>
            </a>: <?php echo _lkn_home_page_my_application_desc;?>
            </li>
        </ul>
   	</div>
</div>