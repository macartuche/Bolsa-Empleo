<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

global $_config;
?>
		            <form action="index.php" method="get" name="resume_search">             
		                <div id="lknjobs_qsb_box_container" class="lknclearfix">                                    
		                    <div id="keySearchBox" class="bodyBox grad lknclearfix" style="z-index: 1; position: relative;">	       
		                         <div id="bodyBoxWrapper" class="lknclearfix">	
		                            <div class="SearchLeftHalf">
		                                <div class="qsb_input_wrapper_left">
			                                <div id="lblKeyword" class="qsb_input_big_label"><?php echo _lkn_search_word;?></div>
		
			                                <input type="text" class="input_field_keywords" onfocus="if(this.value=='<?php echo _lkn_search_word;?>') this.value='';" onblur="if(this.value=='') this.value='<?php echo _lkn_search_word;?>';" value="<?php echo _lkn_search_word;?>" name="search_word" /><br />
			                                <?php echo _lkn_search_job_title_example;?>
		                                </div>		
		                                <div id="jsHomeCategories" class="jsHomeMoreSpace">
			                                <div id="lblCategories" class="qsb_input_big_label"><?php echo _lkn_category_categories;?></div>
												<?php echo $categories;?>                     
			                            </div>			                             
		                            </div>	                
		                            <div class="SearchRightHalf lknclearfix">
		                                <div class="qsb_input_wrapper_left lknclearfix">
			                                <div id="lblLocation" class="qsb_input_big_label lknclearfix"><?php echo _lkn_job_location;?></div>
			                                <input class="input_field_location" type="text" value="" maxlength="80" name="db_location" /><br />
			                                <?php echo _lkn_job_location_desc;?>                                
		                                </div>
			                            <div id="submitWrapper" class="submitKey">
			                                <input type="submit" class="btn" id="qsbButton" name="submitbutton" value="<?php echo _lkn_search;?> >>" onclick="disableSelectOptions('resume_search', 'job_category[]');"/>
			                            </div>				                        
		                            </div>
		                            <div id="jsHomeSavedSearch" class="jsHomeSavedSearch lknclearfix">
		                                <div class="qsb_input_med_label lknclearfix">
		                                	<?php if ($_config['disable_advanced_search']=='1') {
											}else {?>
		                                	<a href="<?php echo $adv_search_link;?>"><?php echo _lkn_search_detailed;?></a><br />
		                                	<?php }?>
		                                	<a href="<?php echo $browse_by_company;?>"><?php echo _lkn_search_company;?></a><br />
		                                	<a href="<?php echo $list_all_jobs;?>"><?php echo _lkn_home_all_jobs;?></a><br />
		                                </div>						                
					                </div>	
					            </div>     
		                    </div>	        
		                </div>
		                <?php ?>
		                	<input type="hidden" name="option" value="com_jobs"/>
							<input type="hidden" name="task" value="search_jobs"/>
							<input type="hidden" name="detailed_results" value="0"/>
							<input type="hidden" name="Itemid" value="<?php echo lknJobsItemId(true);?>"/>
		               </form>