<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
<form action="index.php" method="get" name="resume_search">  
	<div style="" class="grad searchbar">
		<div>
			<p>
				<label style="width: 120px;"><strong><?php echo _lkn_search_word;?></strong></label>
				<input type="text" style="height: 16px; width: 150px;" name="search_word" value="<?php echo _lkn_search_word;?>" onblur="if(this.value=='') this.value='<?php echo _lkn_search_word;?>';" onfocus="if(this.value=='<?php echo _lkn_search_word;?>') this.value='';" class="input_field_keywords"/>
			</p>
			<p>
				<label style="width: 120px;"><strong><?php echo _lkn_job_location;?></strong></label>
				<input type="text" style="height: 16px; width: 150px;" name="db_location" maxlength="80" value=""/>
			</p>
		</div>
		<div style="padding-left: 10px;">
			<p>
				<label style="width: 90px;"><strong><?php echo _lkn_job_category;?></strong></label>
				<?php echo $categories;?>
			</p>
			<p>
			</p>
		</div>
		<div class="btnSearch">
			<input type="submit" value="<?php echo _lkn_search;?> >>" name="submitbutton" id="btnsubmit" class="btnsubmit btn"/>
		</div>
	</div>
	
	<input type="hidden" name="option" value="com_jobs"/>
	<input type="hidden" name="task" value="search_jobs"/>
	<input type="hidden" name="detailed_results" value="0"/>
	<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>"/>
</form>