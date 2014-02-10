<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
		<div id="resume_search" class="grad lknclearfix jdpInnerContent">
		<table width="100%" border="0">
		<tr>
		    <td width="100%" valign="top" style="padding: 5px;" colspan="5">
		    huhjjij
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
		     <tr>
		         <td class="search_criteria" colspan="5">
		           <b><?php echo _lkn_search_resume_specify_criteria;?></b>
		         </td>
		    </tr>
		   <tr>
		      <td width="40%" valign="top" style="padding-left: 1.5em;">
		     	<strong><?php echo lknToolTip(_lkn_search_resume_resume_summary_tip,_lkn_search_resume_resume_summary);?></strong>
		     </td>
		      <td nowrap="nowrap" width="60%" valign="top" colspan="4">
		      		<input type="text" size="30" class="inputbox" value="" name="search_word"/>
		      </td>
		    </tr>
		    <tr>
		        <td> </td>
		        <td colspan="4"><?php echo _lkn_search_resume_resume_summary_example;?></td>
		    </tr>
		    <?php if ($use_city==1 || $use_state==1) { ?>
		    <tr>
		        <td class="search_criteria" colspan="5">
		           <?php echo _lkn_search_resume_specify_city;?>
		         </td>
		    </tr>
		    <?php if ($use_city==1) { ?>
		    <tr>
		      <td width="40%" valign="top" style="padding-left: 1.5em;">
		        	<strong><?php echo lknToolTip(_lkn_search_resume_city_tip,_lkn_search_resume_city);?></strong>
		              </td>
		      <td width="60%" valign="top" colspan="4">
		      		<input type="text" size="30" class="inputbox" value="" name="city"/>
		      </td>
		    </tr>
		    <?php } ?>
		    <?php if ($use_state==1) { ?>
		    <tr>
		      <td width="40%" valign="top" style="padding-left: 1.5em;">
		        <strong><?php echo lknToolTip(_lkn_search_resume_state_tip,_lkn_search_resume_state);?></strong>
		              </td>
		      <td width="60%" colspan="4">
		                <input type="text" value="" size="20" name="state" class="inputbox"/>
		              </td>
		    </tr>
		    <?php } ?>
		     <tr>
		      <td width="100%" valign="top" colspan="5" style="padding-left: 1.5em;">
					<?php echo _lkn_search_resume_search_attention;?>
		      </td>
		    </tr>
		    <?php } ?>

		    <tr>
		        <td class="search_criteria" colspan="5">
		           <?php echo _lkn_search_resume_specify_resume_language;?>
		         </td>
		    </tr>
		    <tr>
		      <td width="40%" valign="top" style="padding-left: 1.5em;">
		        <?php echo lknToolTip(_lkn_search_resume_resume_language_tip,_lkn_search_resume_resume_language);?>

		      </td>
		      <td width="60%" valign="top" colspan="4">
		                <input type="text" value="" size="20" name="language" class="inputbox"/>
		      </td>
		    </tr>

		    <?php if ($use_desired_pay==1) { ?>
		    <tr>
		        <td class="search_criteria" colspan="5" style="padding-left: 1.5em;">
		           <?php echo _lkn_search_resume_specify_salary_range;?>
		         </td>
		    </tr>
		    <tr>
		      <td width="40%" valign="top" style="padding-left: 1.5em;">
					<?php echo lknToolTip(_lkn_search_resume_specify_salary_range_tip, _lkn_search_resume_specify_salary_range_desc);?>
		      </td>
		      <td nowrap="" width="19%" valign="top">
		        <?php echo _lkn_search_resume_search_salary_range_from;?><br/>
		      	  <input type="text" value="" size="7" name="minsalary" class="inputbox"/>
		      </td>
		      <td nowrap="" width="20%" valign="top" style="padding-left: 1.5em;">
		      		<?php echo _lkn_search_resume_search_salary_range_to;?><br/>
		      		<input type="text" value="" size="7" name="maxsalary" class="inputbox"/>
		        </td>
		      <td width="22%" valign="top" colspan="2">
		        <?php echo _lkn_search_resume_search_salary_yearly;?>
		      </td>
		    </tr>
		    <?php } ?>
		    <tr>
		      <td width="100%" valign="top" colspan="5" style="padding-left: 1.5em;">
					<?php echo _lkn_search_resume_search_attention;?>
		      </td>
		    </tr>
		    <?php if (($use_lang_1==1)
					 || ($use_lang_2==1)
					 || ($use_lang_3==1)
					 || ($use_lang_4==1)) { ?>
			<tr>
		        <td class="search_criteria" colspan="5">
		           <?php echo _lkn_search_resume_specify_spoken_language;?>
		         </td>
		    </tr>
		    <tr>
		      <td width="40%" valign="top" style="padding-left: 1.5em;">
		        <?php echo lknToolTip(_lkn_search_resume_specify_spoken_language_desc_tip,_lkn_search_resume_specify_spoken_language_desc);?>
		      </td>
		      <td width="30%" valign="top" colspan="4">
					<?php //konuşulan diller başlangıcı?>
						<table class="general_table">
							<thead>
								<tr>
	
									<th><?php echo _lkn_resume_language;?></th>
									<th><?php echo _lkn_resume_language_reading;?></th>
									<th><?php echo _lkn_resume_language_writing;?></th>
									<th><?php echo _lkn_resume_language_understanding;?></th>
								</tr>
							</thead>
							<tbody>
						<?php if ($use_lang_1==1) { ?>
								<tr>
									<td>
										<input class="text_area" type="text" name="lang_1" id="lang_1" size="20" maxlength="255" value = "" />
									</td>
						<?php if ($use_lang_1_reading==1) { ?>
									<td>
										<?php echo lknJobsFunctions::getLanguageLevel('lang_1_reading','','',1);?>
									</td>
						<?php } ?>
						<?php if ($use_lang_1_writing==1) { ?>
									<td>
										<?php echo lknJobsFunctions::getLanguageLevel('lang_1_writing','','',1);?>
									</td>
						<?php } ?>
						<?php if ($use_lang_1_understanding==1) { ?>
									<td>
										<?php echo lknJobsFunctions::getLanguageLevel('lang_1_understanding','','',1);?>
									</td>
						<?php } ?>
							</tr>
						<?php }
						if ($use_lang_2==1) { ?>
								<tr>
									<td>
										<input class="text_area" type="text" name="lang_2" id="lang_2" size="20" maxlength="255" value = "" />
									</td>
						<?php if ($use_lang_2_reading==1) { ?>
									<td>
										<?php echo lknJobsFunctions::getLanguageLevel('lang_2_reading','','',1);?>
									</td>
						<?php } ?>
						<?php if ($use_lang_2_writing==1) { ?>
									<td>
										<?php echo lknJobsFunctions::getLanguageLevel('lang_2_writing','','',1);?>
									</td>
						<?php } ?>
						<?php if ($use_lang_2_understanding==1) { ?>
									<td>
										<?php echo lknJobsFunctions::getLanguageLevel('lang_2_understanding','','',1);?>
									</td>
						<?php } ?>
								</tr>
						<?php } ?>
						<?php if ($use_lang_3==1) { ?>
								<tr>
									<td>
										<input class="text_area" type="text" name="lang_3" id="lang_3" size="20" maxlength="255" />
									</td>
						<?php if ($use_lang_3_reading==1) { ?>
									<td>
										<?php echo lknJobsFunctions::getLanguageLevel('lang_3_reading','','',1);?>
									</td>
						<?php } ?>
						<?php if ($use_lang_3_writing==1) { ?>
									<td>
										<?php echo lknJobsFunctions::getLanguageLevel('lang_3_writing','','',1);?>
									</td>
						<?php } ?>
						<?php if ($use_lang_3_understanding==1) { ?>
									<td>
										<?php echo lknJobsFunctions::getLanguageLevel('lang_3_understanding','','',1);?>
									</td>
						<?php } ?>
								</tr>
						<?php } ?>
						<?php if ($use_lang_4==1) { ?>
								<tr>
									<td>
										<input class="text_area" type="text" name="lang_4" id="lang_4" size="20" maxlength="255" />
									</td>
						<?php if ($use_lang_4_reading==1) { ?>
									<td>
										<?php echo lknJobsFunctions::getLanguageLevel('lang_4_reading','','',1);?>
									</td>
						<?php } ?>
						<?php if ($use_lang_4_writing==1) { ?>
									<td>
										<?php echo lknJobsFunctions::getLanguageLevel('lang_4_writing','','',1);?>
									</td>
						<?php } ?>
						<?php if ($use_lang_1_understanding==1) { ?>
									<td>
										<?php echo lknJobsFunctions::getLanguageLevel('lang_4_understanding','','',1);?>
									</td>
						<?php } ?>
								</tr>
						<?php } ?>
							</tbody>
						</table>
					<?php
					//konuşulan diller bitişi?>
		      </td>
		    </tr>
		    <tr>
		      <td width="100%" valign="top" colspan="5" style="padding-left: 1.5em;">
					<?php echo _lkn_search_resume_search_attention;?>
		      </td>
		    </tr>
		   	<?php } ?>
		   	<?php if ($use_job_type==1) { ?>
		    <tr>
		        <td class="search_criteria" colspan="5">
		            <?php echo _lkn_search_resume_specify_employment_type;?>
		         </td>
		    </tr>
		    <tr>
		      <td width="40%" valign="top" style="padding-left: 1.5em;">
		        <?php echo lknToolTip(_lkn_search_resume_specify_employment_type_tip,_lkn_search_resume_specify_employment_type);?>
		      </td>
		      <td nowrap="" width="60%" colspan="4">
		        	<?php echo lknJobsFunctions::getJobType('job_type[]','','multiple="multiple" size="5"');?>
		      </td>
		    </tr>
		    <tr>
		      <td width="100%" valign="top" colspan="5" style="padding-left: 1.5em;">
					<?php echo _lkn_search_resume_search_attention;?>
		      </td>
		    </tr>
		    <?php } ?>
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