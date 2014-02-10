<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
	
?>
		
<div class="grad lknclearfix">
	<div id="advSrchBox">
		<form action="index.php" method="get" name="resume_search">
			<table width="100%">
				<tbody>
					<tr><td colspan="5"><?php echo _lkn_search_adv_desc;?></td></tr>
						<?php 
						foreach ($value as $v){
							echo $v;
						}
						?>
				    <tr>
				    	<td colspan="5" style="padding-left: 1.5em;"><span><?php echo _lkn_search_not_necessary;?></span></td>
				    </tr>
				    <tr>
				      <td width="100%" align="center" colspan="5">
				        <p><input type="reset" value="<?php echo _lkn_reset;?>"  class="btn" />
				        <input type="submit" value="<?php echo _lkn_search;?>" name="cmdSearch" class="btn" onclick="disableSelectOptions('resume_search', 'job_category[]');"/></p>
				      </td>
				    </tr>
				</tbody></table>


				<input type="hidden" name="option" value="com_jobs"/>
				<input type="hidden" name="task" value="search_jobs"/>
				<input type="hidden" name="detailed_results" value="0"/>
				<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>"/>
		</form>
		</div>
		</div>