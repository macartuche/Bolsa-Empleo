<?php if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); } ?>
<?php global $_config;?>
		<br />
		<div class="jl_wrap_div grad">
			<table class="jl_tbl" cellspacing="0" border="0" style="border-collapse: collapse;">
			<thead>
			<tr>
				<th><strong><?php echo _lkn_employer_tools;?></strong></th>
			</tr>
			</thead>
	<tbody>
	<tr>
		<td valign="top" class="jl_odd_row">
			<p class="header3">
			<a href="<?php echo lknSef::url("index.php?option=com_jobs&task=employer_new_job".$Itemid);?>">
				<?php echo _lkn_employer_add_new_job;?></p>
			</a>
			<p>
			<img height="60" width="60" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'post_a_job.gif';?>"/>
			<?php echo _lkn_employer_add_new_job_desc;?></p>
		</td>
	</tr>
	<tr class="jl_even_row">
		<td valign="top">
			<p class="header3">
				<a href="<?php echo lknSef::url("index.php?option=com_jobs&task=list_employer_jobs" . $Itemid)?>">
					<?php echo _lkn_employer_list_jobs;?>
				</a>
			</p>
			<p>
			<img height="60" width="60" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'list_jobs.gif';?>"/>
			<?php echo _lkn_employer_list_jobs_desc;?></p>
		</td>
	</tr>
	<?php if ($_config['activate_job_templates']=='1') {?>
		<tr class="jl_even_row">
			<td valign="top">
				<p class="header3">
					<a href="<?php echo lknSef::url("index.php?option=com_jobs&task=list_employer_job_templates" . $Itemid)?>">
						<?php echo _lkn_list_job_templates;?>
					</a>
				</p>
				<p>
				<img height="60" width="60" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'jt.gif';?>"/>
				<?php echo _lkn_list_job_templates_desc;?></p>
			</td>
		</tr>
	<?php }?>
	<tr class="jl_odd_row">
		<td valign="top">
			<p class="header3">
			<a href="<?php echo lknSef::url("index.php?option=com_jobs&task=list_employer_email_templates" . $Itemid)?>">
				<?php echo _lkn_employer_email_templates;?>
			</a>
			</p>
			<p>
			<img height="60" width="60" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'email.gif';?>"/>
			<?php echo _lkn_employer_email_templates_desc;?></p>
		</td>
	</tr>

	<tr class="jl_even_row">
		<td valign="top">
			<p class="header3">
			<a href="<?php echo lknSef::url("index.php?option=com_jobs&task=list_employer_applications" . $Itemid)?>">
				<?php echo _lkn_employer_applications;?>
			</a>
			</p>
			<p>
			<img height="60" width="60" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'response.gif';?>"/>
			<?php echo _lkn_employer_applications_desc;?></p>
		</td>
	</tr>
	<?php if ($credit_system_active=='1') { ?>
	<tr class="jl_odd_row">
		<td valign="top">
			<p class="header3">
			<a href="<?php echo lknSef::url("index.php?option=com_jobs&task=buy_credits" . $Itemid)?>">
				<?php echo _lkn_employer_buy_credits;?>
			</a>
			</p>
			<p>
			<img height="60" width="60" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'buy_credits.gif';?>"/>
			<?php echo _lkn_employer_buy_credits_desc;?></p>
		</td>
	</tr>		
	<?php }?>
	<tr class="jl_even_row">
		<td valign="top">
			<p class="header3">
			<a href="<?php echo lknSef::url("index.php?option=com_jobs&task=employer_resume_search_form" . $Itemid)?>">
				<?php echo _lkn_employer_search_resume;?>
			</a>
			</p>
			<p>
			<img height="60" width="60" border="0" align="right" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'resume_search.gif';?>"/>
			<?php echo _lkn_employer_search_resume_desc;?></p>
		</td>
	</tr>	
</tbody></table>
</div>