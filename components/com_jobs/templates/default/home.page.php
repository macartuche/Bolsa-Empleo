<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>		
<div id="content-left">
    <div id="content-1">
		    <!-- <div class="jsWhiteBoxWrapper">    -->    
            <div id="content-2"> 
		      	<div id="content-3">
             <!--   <div class="jsContentWrapper lknclearfix"> -->
		            <div id="jsHomeLeftWrapper">
                    	<div id="welcome-bolsa">
                        <img src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/bienvenido.png" width="133" height="37" align="left"/>
                       	  <div id="line-bolsa" style="border:#09F 1px solid; width:445px; float:left;">
                      	  </div><br />
                        </div><br />
                    	<?php echo $who_are_we;?>
		               	<?php echo $indeed_code;?>                        
		            </div> 
		            <div id="jsHomeRightWrapper" class="lknclearfix">
		          		{lknloadposition mod_login}
                        <?php echo $simple_search_box;?>
		                <?php echo $new_to_lknjobs;?> 
                        <?php echo $ads;?>
		            </div>
		        </div>     
		    </div>
	</div>
</div>
<div style="clear:both">
</div><br /><br /><br />
<div id="contentclr">
	<div id="clr">
	
	   <div id="col1">
	   	 	<?php echo $list_jobs;?>
			<?php echo $list_categories;?>
			<br /><br />
        	<?php //echo $job_seeker;?>
 		     <div class="clear_float"></div>
	   </div>
	   <div id="col2">
	        <br />
			<?php echo $companies; ?>	   		
 		     <div class="clear_float"></div>
	   </div>
  	</div>
   	<div id="clr2">
   	<!-- espacio para mas m—dulos -->
   	</div>
</div>