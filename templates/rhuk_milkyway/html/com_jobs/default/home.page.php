<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>		
<div id="pnlOuterWrapper" class="jsBodyBlueGrad pnlOuterWrapper" style="padding-left:0px;padding-right:0px;">
    <div id="pnlInnerWrapper" class="lknjobs_style lknclearfix pnlInnerWrapper">
		    <div class="jsWhiteBoxWrapper">        
		        <div class="jsContentWrapper lknclearfix">
		            <div id="jsHomeLeftWrapper">
						<?php echo $simple_search_box;?>
						<?php echo $new_to_lknjobs;?>
		                <?php echo $list_categories;?>
		                <?php echo $job_seeker;?>
		                <?php echo $companies;?>
		                
		            </div>
		            
		            <div id="jsHomeRightWrapper" class="lknclearfix">
		            	 <?php echo $login_form;?>
                         {lknloadposition  mod_jobs}
		                 <?php echo $who_are_we;?>
		                 <?php echo $ads;?>
		                 <?php echo $list_jobs;?>
			             <?php echo $indeed_code;?>
		            </div>
		        </div>
		               
		    </div>
		    <div class="clear"></div>
	</div>
</div>