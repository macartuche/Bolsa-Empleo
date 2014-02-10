<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
		global $_lknBaseFramework,$_config;
		$make_national=$_config['make_jobs_national'];
		$Itemid=lknJobsItemId();		
		$cat_id=$row->cat_id;
		$category_name=temizleSlash($row->category_name);
		$category_alias=$row->category_alias;
		$category_link="index.php?option=com_jobs&task=detail_category&id=$cat_id:$category_alias" . $Itemid;
		$category_link=lknSef::url($category_link);
		$category_link="<a href=\"$category_link\">$category_name</a>";
		$id=$row->id;
		$title=temizleSlash($row->title);
		$alias=$row->alias;
		$reference=$row->reference;
		$number_of_jobs=$row->number_of_jobs;
		$job_type=$row->job_type;
		$experience=$row->experience;
		$salary=$row->salary;
		$degree=$row->degree;
		$show_salary=$row->show_salary;
		$created=lknDate::formatDate($row->created);
		$description=temizleSlash($row->description);
		$country_name=temizleSlash($row->country_name);
		$city=temizleSlash($row->city);
		$state=temizleSlash($row->state);
		$qualifications=temizleSlash($row->qualifications);

?>
    <!-- Job Description Area -->
    <div class="jdpInfo lknDetailJobInnerContent lknclearfix" id="jdpSnapShot">
    	<!-- Snapshot -->
    			<?php if ($reference!='') { ?>
	    			<div class="lknclearfix">
                    	<span class="lknclearfixjobdetail">
							<?php echo _lkn_ref_short;?>:
                       	</span>
	    				<div>
							<?php echo $reference;?>
                      	</div>
	    			</div>
    			<?php } ?>
    			<div class="lknclearfix">
    				<span class="lknclearfixjobdetail">
						<?php echo _lkn_created;?>: 
                   	</span>
    				<div>
						<?php echo $created;?>
                  	</div>
    			</div>
    			<div class="lknclearfix">
    				<span class="lknclearfixjobdetail"><?php echo _lkn_job_category;?>: </span>
    				<?php /*<div><?php echo $category_name;?></div>*/?>
    				<div><?php echo $category_link;?></div>
    			</div>

    			<?php if ($make_national=='0') {?>

	                <div class="lknclearfix">

	                	<span class="lknclearfixjobdetail"><?php echo _lkn_job_country;?>: </span>

	                	<div><?php echo $country_name;?></div>

	               </div>

				<?php }?>               

    			<?php if ($city!='') {

    				$city=explode(',',$city);

    				$cities='';

    				foreach ($city as $c){

    					if ($c!='') {

    						$c=ucfirst($c);

    						$cities.=",$c";

    					}

    				}
    				$cities=lknText::cleanFirst($cities,',');

    			?>

	                <div class="lknclearfix">

	                	<span class="lknclearfixjobdetail"><?php echo _lkn_job_city;?>: </span>

	                	<div><?php echo $cities;?></div>

	               </div>

               <?php }?>

               <?php if ($state!='') {

               		$state=explode(',',$state);

               		$states='';

               		foreach ($state as $s){

               			if ($s!='') {

               				$s=strtoupper($s);

               				$states.=",$s";

               			}

               		}

               		$states=lknText::cleanFirst($states,',');

               	?>

               		<div class="lknclearfix">

	                	<span class="lknclearfixjobdetail"><?php echo _lkn_job_state;?>: </span>

	                	<div><?php echo $states;?></div>

	               	</div>

	           <?php }?>

	           

	           <?php if ($number_of_jobs!='' && $number_of_jobs!=0) { ?>

	                 <div class="lknclearfix">

	                	<span class="lknclearfixjobdetail"><?php echo _lkn_job_number_of_jobs;?>: </span>

	                	<div><?php echo $number_of_jobs;?></div>

	               	</div>

	           <?php } ?>

	           <?php if ($job_type!='' && $job_type!=0) { ?>

	                 <div class="lknclearfix">

	                	<span class="lknclearfixjobdetail"><?php echo _lkn_job_job_type;?>: </span>

	                	<div><?php echo lknJobsFunctions::writeJobType($job_type);?></div>

	               	</div>

	           <?php } ?>

	           <?php if ($degree!='' && $degree!=0) { ?>

	                 <div class="lknclearfix">

	                	<span class="lknclearfixjobdetail"><?php echo _lkn_job_degree;?>: </span>

	                	<div><?php echo lknJobsFunctions::writeDegree($degree);?></div>

	               	</div>

	           <?php } ?>

	           <?php if ($experience!='' && $experience>0) { ?>

	                 <div class="lknclearfix">

	                	<span class="lknclearfixjobdetail"><?php echo _lkn_job_experience;?>: </span>

	                	<div><?php echo $experience;?></div>

	               	</div>

	           <?php } ?>

	           <?php if ($show_salary==1) { ?>

	                 <div class="lknclearfix">

	                	<span class="lknclearfixjobdetail"><?php echo _lkn_job_salary;?>: </span>

	                	<div><?php echo $salary;?> <?php echo _lkn_currency;?></div>

	               	</div>

	           <?php }?>

                <!-- End Snapshot -->

            </div>

            

	           <?php if ($description!='') { ?>

	           <div class="lknDetailJobInnerContent" id="jdpDescrption">

	           	<span class="jdpSectionHeading"><?php echo _lkn_job_description;?></span>

		           	<!-- Description Content -->

		           		<?php echo $description;?>

		           	<!-- End Description Content -->

                </div>

               <?php }?>

               <?php if ($qualifications!='') { ?>

                <div class="jdpContent lknDetailJobInnerContent" id="jdpRequirements">                                	

                    <span class="jdpSectionHeading"><?php echo _lkn_job_qualifications;?></span>

                    <!-- Requirements Area -->

                    	<?php echo $qualifications;?>

                    <!-- End Requirements Area -->

                </div>

                <?php }?>

                <!-- Job Description Area  End -->