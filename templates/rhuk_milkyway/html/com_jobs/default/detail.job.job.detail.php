<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
		
?>
    <!-- Job Description Area -->
    <div class="jdpInfo lknDetailJobInnerContent lknclearfix" id="jdpSnapShot">
    	<!-- Snapshot -->
    			<?php foreach ($field_values_array as $key=>$value){
    				if ($value!='') {?>
	    				<div class="lknclearfix"><span><?php echo $key;?>:</span>
		    				<div><?php echo $value;?></div>
		    			</div>
    				<?php }?>
    			<?php }?>
                <!-- End Snapshot -->
            </div>
            
	           <?php if ($description!='') { ?>
	           <div class="lknDetailJobInnerContent">
	           	<span class="jdpSectionHeading"><?php echo _lkn_job_description;?></span>
		           	<!-- Description Content -->
		           		<?php echo $description;?>
		           	<!-- End Description Content -->
                </div>
               <?php }?>
               <?php if ($qualifications!='') { ?>
                <div class="jdpContent lknDetailJobInnerContent">                                	
                    <span class="jdpSectionHeading"><?php echo _lkn_job_qualifications;?></span>
                    <!-- Requirements Area -->
                    	<?php echo $qualifications;?>
                    <!-- End Requirements Area -->
                </div>
                <?php }?>
                <!-- Job Description Area  End -->