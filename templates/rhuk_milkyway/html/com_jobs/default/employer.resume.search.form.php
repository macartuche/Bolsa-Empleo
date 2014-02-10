<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
		<div id="resume_search" class="grad lknclearfix jdpInnerContent">
		<table width="100%" border="0">
		<tr>
		    <td width="100%" valign="top" style="padding: 5px;" colspan="5">
		    <form method="get" name="resume_search" action="index.php">
		    <input type="hidden" name="option" value="com_jobs"/>
		    <input type="hidden" name="task" value="search_resume"/>
		   	<input type="hidden" name="detailed_results" value="0"/>
		    <input type="hidden" name="user_id" value="<?php echo $user_id;?>"/>
		    <input type="hidden" name="Itemid" value="<?php echo lknJobsItemId(true);?>"/>


			  <table>
			    <tbody>
			    <tr>
			      <td colspan="5"><?php echo _lkn_search_resume_desc;?></td>
			    </tr>
				<?php 
				foreach ($value as $v){
					echo $v;
				}
				?>
	
			    <tr>
			      <td width="100%" valign="top" colspan="5" style="padding-left: 1.5em;">
						<?php echo _lkn_search_resume_search_attention;?>
			      </td>
			    </tr>
	
			    	<tr><td colspan="5"> </td></tr>
				    <tr>
				      <td width="100%" valign="top" align="center" colspan="5">
				        <p><input type="reset" value="<?php echo _lkn_reset;?>" class="btn" />
				        <input type="submit" value="<?php echo _lkn_submit;?>" name="cmdSearch" class="btn" /></p>
				      </td>
				    </tr>
			  </tbody></table>
		</form>
		        </td>
		    </tr>
		</tbody></table>
		</div>