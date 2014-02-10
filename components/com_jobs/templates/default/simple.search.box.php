<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

?>
<form action="index.php" method="get" name="resume_search">
	<div id="lknjobs_qsb_box_container" class="lknclearfix">
    	<div id="keySearchBox" class="bodyBox grad lknclearfix" style="z-index: 1; position: relative;">
        	<div id="bodyBoxWrapper" class="lknclearfix">
            	<div class="SearchLeftHalf"> 
                	<div class="qsb_input_wrapper_left" id="qsb_input_wrapper_left">
                    	<div id="lblKeyword" class="qsb_input_big_label">
                  			<?php echo _lkn_search_word2;?>
                            
                   		</div>
                        <input type="text" size="15" class="input_field_keywords" onfocus="if(this.value=='<?php echo _lkn_search_word;?>') this.value='';" onblur="if(this.value=='') this.value='<?php echo _lkn_search_word;?>';" value="<?php echo _lkn_search_word;?>" name="search_word" /><br />
  						<?php //echo _lkn_search_job_title_example;?>
                      	<div id="lblLocation" class="qsb_input_big_label lknclearfix">
							<?php echo _lkn_job_city;?>
                      	</div>
  						<input class="input_field_location" size="15" type="text" value="" name="job_city" />
  						<?php //echo " ";DO NOT DELETE THIS?>
                        
                        <input type="submit" class="qsbButton" name="submitbutton" value="<?php echo _lkn_search;?>" onclick="disableSelectOptions('resume_search', 'job_category[]');"/>
                 	</div>
          		</div>
                <div id="jsHomeCategories" class="jsHomeMoreSpace">
  					<div align="center" id="lblCategories" class="qsb_input_big_label" style="color:#000066; width:62px;">
						<?php echo _lkn_category_categories;?>
                  	</div>
            		<?php echo $categories;?>
         	</div>
            <div id="jsHomeSavedSearch" class="jsHomeSavedSearch lknclearfix">
          		<a href="<?php echo $adv_search_link;?>" id="jsHomeSearchTitle">
					<?php echo _lkn_search_detailed;?>
              	</a>
             	
         	</div>
      	</div>
   	</div>	        
</div>
<input type="hidden" name="option" value="com_jobs"/>
<input type="hidden" name="task" value="search_jobs"/>
<input type="hidden" name="detailed_results" value="0"/>
<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>"/>
</form>