<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
		global $_config;
		$title=temizleSlash($row->title);
		
		$company_name=temizleSlash($row->company_name);
		$company_logo=$row->company_logo;
		$company_id=$row->company_id;
		$company_alias=$row->company_alias;
		
		$company_link="index.php?option=com_jobs&task=detail_company&id=$company_id:$company_alias" .$Itemid;
		$company_link=lknSef::url($company_link);
		/*
		 * 1:hepsini göster
		 * 2:şirketin seçmesine izin ver;
		 * 3:hepsini gizle
		 * */
		$hide=$_config['hide_company'];
		if ($hide=='2') {
			//şirketin seçmesine izin verilmiş
			$hide_company_name=$row->hide_company_name;
		}elseif ($hide=='1'){
			$hide_company_name='0';
		}elseif ($hide=='3'){
			$hide_company_name='1';
		}

?>
	<div class="jdpPageWrapper lknclearfix lknjobs_style">
		<!-- Standard JDP Control -->
			<div class="jdpInnerContent lknclearfix">
						<!-- JDP Heading Section -->
							<h1><?php echo $title;?></h1>
          				<!-- End JDP Heading Section -->
          				
            <!-- Apply and Action Bar -->
            <?php echo $apply_bar;?>
            <!-- End Apply and Action Bar -->
            
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
            	<tbody>
            		<tr valign="top">
            			<td width="76%">
            				<?php echo $job_description;?>
            			</td>
            			<td width="2%"> </td>
            			<td width="20%" align="center">
            			<?php if ($hide!='3') {?>
	            			<?php if ($hide_company_name=='1') {?>
	            				<?php echo _lkn_job_company_name_is_hidden;?>
	            			<?php }else {?>
		            			<?php if ($company_logo!='') {
		            				$company_logo=lknJobsFunctions::getCompanyLogo($company_logo,$company_name);
		            			?>
									<a href="<?php echo $company_link?>"><?php echo $company_logo;?></a>
		            			<?php }	?>
		            			<div class="lknclearfix" id="jdpCompany">
									<h2 class="companyInfoLink"><a href="<?php echo $company_link?>"><?php echo $company_name;?></a></h2>
								</div><br />
	            			<?php }?>
            			<?php }?>
						<table width="100%" class="sbb_table">
							<tbody>
								<tr>
									<td>
										<?php echo $sbb;?>
									</td>
								</tr>
							</tbody>	
						</table>
            			</td>
            		</tr>
            	</tbody></table>
									
	
                <!-- Apply and Action Bar -->
                	<?php echo $apply_bar;?>
                <!-- End Apply and Action Bar -->
                <!-- advice section is started -->
                	<?php echo $advice;?>
                <!-- advice section is ended -->
             </div>
             <div class="clear"> </div>
            <!-- End Standard JDP Control -->
		</div>