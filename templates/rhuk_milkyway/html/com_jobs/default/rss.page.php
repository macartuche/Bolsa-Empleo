<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }


		global $_config;
		$criteria_count=$_config['rss_feeds_criteria_select_count'];	
		$link='';
		$itemid=lknJobsItemId();
		?>
		<script language="javascript">
		function link_yaz() {
		    var link="<?php echo $link=LIVE_SITE."/index.php?option=com_jobs&task=rss" . $itemid;?>";
		    rss_text=document.getElementById('rss_address');

		    <?php $cat_js='job_category=document.rss_form.job_category;
		    var s_link="";
		    for(i=0;i<job_category.length;i++)
			{
				//alert(job_category.options[i].selected);
				if (job_category.options[i].selected && job_category.options[i].value!=\'F\') {
				    s_link=s_link+job_category.options[i].value+"-";
				}
			}	
			
			if (s_link.length>0) {
			    s_link=s_link.substring(0,s_link.length-1);
			    link=link+"&category="+s_link;
			}';
		    
		    if ($category_list!='') {
		    	echo $cat_js;
		    }
		    
		    
		    
		    $country_js='
		    job_country=document.rss_form.job_country;
			var b_link="";
		    for(i=0;i<job_country.length;i++)
			{
				if (job_country.options[i].selected && job_country.options[i].value!=\'F\') {
				    b_link=b_link+job_country.options[i].value+"-";
				}
			}	
			
			if (b_link.length>0) {
			    b_link=b_link.substring(0,b_link.length-1);
			    link=link+"&country="+b_link;
			}
		    ';
		    
		    if ($job_countries!='') {
		    	echo $country_js;
		    }
		    
			$company_js='
			job_companies=document.rss_form.job_companies;
			var i_link="";
		    for(i=0;i<job_companies.length;i++)
			{
				if (job_companies.options[i].selected && job_companies.options[i].value!=\'F\') {
				    i_link=i_link+job_companies.options[i].value+"-";
				}
			}	
			
			if (i_link.length>0) {
			    i_link=i_link.substring(0,i_link.length-1);
			    link=link+"&company="+i_link;
			}
			
			if(link.length==39) {
			    link=link.substr(0,31);
			} ';
			
			if ($job_companies!='') {
				echo $company_js;
			}
			
		    ?>
			rss_text.value=link;
			
			
		    return true;
		}

	function link_kopyala() {
	    tempval=document.getElementById('rss_address');
	    tempval.focus();
	    tempval.select();
	}

	function checkPos(sel,err)
	{
		scount=checkSelect(sel,<?php echo $criteria_count;?>);
		if (scount><?php echo $criteria_count;?>) 
		{
			alert (err);
		}
		return true;
	}
	function checkSelect(sel,smax)
	{
		scount=0;
		for(i=0;i<sel.length;i++)
		{
			if (sel.options[i].selected) scount++;
			if (scount>smax) sel.options[i].selected=false;
		}	
		return (scount);
	}

	</script>
		
			<table class="general_table">
				<tbody>
					<tr>
						<td style="font-size: 12px;">
							<?php echo _lkn_worker_rss_rss_page_desc;?>
						</td>
					</tr>
					<tr>
						<td bgcolor="#f4f4f4">
							<table width="540" cellspacing="0" cellpadding="0" border="0" align="center">
								<form method="get" action="" name="rss_form"/>
									<tbody>
										<tr>
										<?php if ($category_list!=''){ ?>
											<td align="left"><b><?php echo _lkn_worker_rss_category;?></b></td>
										<?php }?>
										<?php if ($job_countries!=''){ ?>	
											<td align="left"><b><?php echo _lkn_worker_rss_country;?></b></td>
										<?php }?>
										<?php if ($job_companies!=''){ ?>
											<td align="left"><b><?php echo _lkn_worker_rss_company;?></b></td>
										<?php }?>
										</tr>
										<tr>
										<?php if ($category_list!=''){ ?>
											<td align="left">
												<?php echo $category_list;?>
											</td>
										<?php }?>
											<?php if ($job_countries!=''){ ?>
											<td align="left">
												<?php echo $job_countries;?>
											</td>
											<?php }?>
											<?php if ($job_companies!=''){ ?>
											<td align="left">
												<?php echo $job_companies;?>
											</td>
											<?php }?>
										</tr>
										<tr>
											<td height="5" colspan="3"/>
										</tr>
										<tr>
											<td colspan="3">
												<table width="100%" cellspacing="0" cellpadding="0" border="0">
													<tbody>
														<tr>
															<td><b><?php echo _lkn_worker_rss_address?></b></td>
														</tr>
														<tr>
															<td>
																<input class="text_area" type="text" name="rss_address" id="rss_address" size="100" value = "" onclick="link_kopyala()"/>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr>
											<td height="5" colspan="3"/>
										</tr>
										<tr>
											<td height="30" colspan="3">
												<?php echo _lkn_worker_rss_address_desc;?>
											</td>
										</tr>
										<tr>
											<td height="5" colspan="3"/>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>