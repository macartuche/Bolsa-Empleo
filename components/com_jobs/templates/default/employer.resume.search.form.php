<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); 
}
?>
<div id="linkredirectresume">
<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&task=employer&Itemid=2" id="titletopfrontal" />
<img title="Regresar a herramientas del empleador" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
<?php echo _lkn_backfrontal;?>
</a>
</div>
<br />
<table border="0" cellpadding="5" cellspacing="0" id="tools_employees">
	<thead>
    	<tr>
        	<th>
            	<strong>
                	<?php echo _lkn_search_resume_desc;?>
                </strong>
            </th>
        </tr>
    </thead>
    <tr>
        <td valign="top" style="padding: 5px;" colspan="5">
            <form method="get" name="resume_search" action="index.php">
            <input type="hidden" name="option" value="com_jobs"/>
            <input type="hidden" name="task" value="search_resume"/>
            <input type="hidden" name="detailed_results" value="0"/>
            <input type="hidden" name="user_id" value="<?php echo $user_id;?>"/>
            <input type="hidden" name="Itemid" value="<?php echo lknJobsItemId(true);?>"/>
                <table>
                    <tbody>
                        <?php 
                            foreach ($value as $v)
                            {
                                echo $v;
                            }
                        ?>
                        <tr>
                            <td width="100%" valign="top" colspan="5">
                                <?php echo _lkn_search_resume_search_attention;?>	
                            </td>
                        </tr>
                        <tr><td colspan="5"></td></tr>
                        <tr>
                            <td width="100%" valign="top" align="center" colspan="5">
                                <p>
                                    <input type="reset" value="<?php echo _lkn_reset;?>" class="btn" />	                                 
                                    <input type="submit" value="<?php echo _lkn_submit;?>" 
                                    name="cmdSearch" class="btn" />
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </td>
    </tr>
</tbody>
</table>
<br /><br /><br /><br />