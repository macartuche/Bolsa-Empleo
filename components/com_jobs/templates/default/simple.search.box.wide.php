<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); 
}
?>
<div id="fomrserachnew">
	<form action="index.php" method="get" name="resume_search">  
    	<label>
        	<strong>
				<?php echo _lkn_search_word;?>
           	</strong>
     	</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="search_word" value="Buscar palabra" onblur="if(this.value=='') this.value='Search word';" 
    	onfocus="if(this.value=='Search word') this.value='';" class="input_field_keyword"/><br /><br />
    	<label>
        	<strong>
				<?php echo _lkn_job_city;?>
        	</strong>
     	</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<input type="text"name="job_city" maxlength="80" value=""/><br /><br />
		<label style="width: 90px;">
        	<strong>
				<?php echo _lkn_job_category;?>
          	</strong>
     	</label>
        &nbsp;&nbsp;&nbsp;
		<?php echo $categories;?><br />
		<?php //echo $job_countries;?>
        <input type="submit" value="<?php echo _lkn_search;?> >>" name="submitbutton" id="btnsubmit" class="btnsubmit btn"/>
        <input type="hidden" name="option" value="com_jobs"/>
        <input type="hidden" name="task" value="search_jobs"/>
        <input type="hidden" name="detailed_results" value="0"/>
        <input type="hidden" name="Itemid" value="<?php echo $Itemid;?>"/>
</form>
</div>