<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

	//function company_form($row='',$force='0')
	//{
		global $_lknBaseFramework,$_config;
	
		$editor=new lknEditor();
	//	print_r($row);
		if ($row!='') {
			$id=$row->id;
			$title=temizleSlash($row->title);
			$alias=$row->alias;
			$logo=$row->logo;
			$description=temizleSlash($row->description);
			$address=temizleSlash($row->address);
			$city=temizleSlash($row->city);
			$country=$row->country;
			$zipcode=$row->zipcode;
			$companyurl=temizleSlash($row->companyurl);
			$contactname=temizleSlash($row->contactname);
			$contactphone=$row->contactphone;
			$contactemail=$row->contactemail;
			$meta_keywords=temizleSlash($row->meta_keywords);
			$meta_description=temizleSlash($row->meta_description);
			$memberid=$row->memberid;
			$created=$row->created;
			$published=$row->published;
			$action=_lkn_company_update;
			$task='update_company';
		}else 
		{
			$id='';
			$title='';
			$alias='';
			$logo='';
			$description='';
			$address='';
			$city='';
			$country='';
			$zipcode='';
			$companyurl='';
			$contactname='';
			$contactphone='';
			$contactemail='';
			$meta_keywords='';
			$meta_description='';
			$created='';
			$published=0;
			$action=_lkn_company_add;
			$task='save_company';
			
			$user=new lknUser();
			$memberid=$user->getUserID();
		}
		$approve_new=$_config['employer_approve_all_companies'];
		if ($force=='0') {
			if ($approve_new=='0') {
				$published_form='<td class="key">';
				$published_form.=lknToolTip(_lkn_published_tip,_lkn_published);
				$published_form.='</td>';
				$published_form.='<td>';
				$published_form.=lknhtmlMaker::publishedSelectList('db_published',$published);
				$published_form.='</td>';
				$ph='0';
			}elseif ($approve_new=='1'){
				//eğer adam yeni şirketlerin tamamını onaylamak istiyorsa
				$published_form='<td colspan="2">';
				$published_form.="<input type=\"hidden\" name=\"db_published\" value=\"$published\"/>";
				$published_form.='</td>';
				$ph='1';	
			}
			$apply_button="<input type=\"submit\" value=\"" ._lkn_apply."\" class=\"btn\" onclick=\"document.adminForm.task.value='apply_company';\"/>";
		}elseif ($force=='1'){
			if ($approve_new=='0') {
				$t='1';
			}else {
				$t='0';
			}
			$published_form='<td colspan="2">';
			$published_form.="<input type=\"hidden\" name=\"db_published\" value=\"$t\"/>";
			$published_form.='</td>';
			$task='save_company_with_forcing';
			$apply_button='';
			$ph='1';
		}
		
		$make_national=$_config['make_jobs_national'];
		if ($make_national=='0') {
			//normal country list. yani international
			$country_field='<td class="key">' . lknToolTip(_lkn_company_country_tip,_lkn_country) . '</td>';
			$country_field.='<td>' . lknJobsFunctions::getJobCountries('db_country',$country).'</td>';
			$ch='0';
		}else {
			//yani bir country için kullanılıyor
			$country_field='<td colspan="2">';
			$country_field.="<input type=\"hidden\" name=\"db_country\" value=\"$make_national\"/>";
			$country_field.='</td>';
			$ch='1';
		}
		
		if ($ph=='1' and $ch=='1') {
			$fields="<input type=\"hidden\" name=\"db_country\" value=\"$make_national\"/>" . '<br />';
			if ($force=='1') {
				if ($approve_new=='0') {
					$t='1';
				}else {
					$t='0';
				}
				$fields.="<input type=\"hidden\" name=\"db_published\" value=\"$t\"/>";
			}else {
				$fields.="<input type=\"hidden\" name=\"db_published\" value=\"$published\"/>";
			}			
		}else {
			$fields='<tr>';
			if ($ch=='1' and $ph!='1') {
				$fields.=$published_form . $country_field . '</tr>';
			}else {
				$fields.=$country_field . $published_form . '</tr>';
			}
		}
		
		
		
		?>
		<script language="javascript" type="text/javascript">
			function validateFormOnSubmit(theForm) {
			var reason = "";
		  reason += validateEmpty(theForm.db_title,"<?php echo _lkn_error_form_company_title;?>");
		  reason += validateEmpty(theForm.db_country,"<?php echo _lkn_error_form_company_country;?>");
		  reason += validateEmpty(theForm.db_contactemail,"<?php echo _lkn_error_form_company_email;?>");
		      
		  if (reason != "") {
		    alert("<?php echo _lkn_error_form;?>\n" + reason);
		    return false;
		  }
			<?php echo lknEditor::getEditorJS('db_description');?>
		  return true;
		}
		
		function validateEmpty(fld,err) {
		    var error = "";
		 
		    if (fld.value.length == 0) {
		        fld.style.background = 'Yellow'; 
		        error = err+"\n"
		    } else {
		        fld.style.background = 'White';
		    }
		    return error;  
		}
		</script>
		
		
		<h1><?php echo $action;?></h1><br />
		<form id="adminForm" name="adminForm" method="post" action="index.php"  enctype="multipart/form-data" onsubmit="return validateFormOnSubmit(this)">
		
		<?php lknTabs::startTabPanel();?>
			<?php lknTabs::startTab(_lkn_company_details);?>
					<table class="general_table">
						<tbody><tr>
							<td class="key">
								<?php echo lknToolTip(_lkn_company_tip,_lkn_company);?>
							</td>
							<td>
								<input maxlength="100" size="30" value="<?php echo $title;?>" name="db_title"/>
							</td>
							<td class="key">
								<?php echo lknToolTip(_lkn_company_companyurl_tip,_lkn_company_companyurl);?>
							</td>
							<td>
								<input type="text" name="db_companyurl" id="db_companyurl" size="30" maxlength="100" value="<?php echo $companyurl;?>">
							</td>
						</tr>
						<tr>
							<td class="key"><?php echo lknToolTip(_lkn_company_address_tip,_lkn_company_address);?></td>
							<td><textarea name="db_address" id="db_address" cols="25" rows="5"><?php echo $address;?></textarea></td>
							<td class="key"><?php echo lknToolTip(_lkn_company_contactname_tip,_lkn_company_contactname);?></td>
							<td><input type="text" name="db_contactname" id="db_contactname" size="30" maxlength="100" value="<?php echo $contactname;?>"></td>
						</tr>					
						<tr>
							<td class="key"><?php echo lknToolTip(_lkn_company_city_tip,_lkn_company_city);?></td>
							<td><input type="text" name="db_city" id="db_city" size="30" maxlength="100" value="<?php echo $city;?>"></td>
							<td class="key"><?php echo lknToolTip(_lkn_company_zipcode_tip,_lkn_company_zipcode);?></td>
							<td><input type="text" name="db_zipcode" id="db_zipcode" size="30" maxlength="10" value="<?php echo $zipcode;?>"></td>
						</tr>						
						<tr>
							<td class="key">
								<?php echo lknToolTip(_lkn_company_contactemail_tip,_lkn_company_contactemail);?>
							</td>
							<td>
								<input type="text" name="db_contactemail" id="db_contactemail" size="30" maxlength="100" value="<?php echo $contactemail;?>">
							</td>
							<td class="key">
								<?php echo lknToolTip(_lkn_company_contactphone_tip,_lkn_company_contactphone);?>
							</td>
							<td>
								<input type="text" name="db_contactphone" id="db_contactphone" size="30" maxlength="100" value="<?php echo $contactphone;?>">
							</td>

						</tr>	
						<?php echo $fields;?>					
					
	
					</tbody></table>
				<?php lknTabs::endTab();?>
				<?php lknTabs::startTab(_lkn_company_description);?>
						<table class="general_table">
						<tbody>
						<tr>
							<td class="key" style="text-align:left !important;">
								<?php echo lknToolTip(_lkn_company_description_tip,_lkn_company_description);?>
							</td>
						</tr>
						<tr>
							<td>
								<?php 
									echo $editor->display( 'db_description',  $description, '40%;', '250', '45', '10', array('pagebreak', 'readmore','image') ) ;
								?>
							</td>
						</tr>
					</tbody></table>
				<?php lknTabs::endTab();?>
				<?php lknTabs::startTab(_lkn_meta);?>
					<table class="general_table">
						<tbody>
						<tr>
							<td class="key">
							<?php echo lknToolTip(_lkn_meta_desc_tip,_lkn_meta_desc);?>
							</td>
							<td>
									<textarea id="db_meta_description" name="db_meta_description" rows="5" cols="40" class="inputbox"><?php echo $meta_description;?></textarea>
							</td>
						</tr>
						<tr>
							<td class="key">
								<?php echo lknToolTip(_lkn_meta_keywords_tip,_lkn_meta_keywords);?>
							</td>
							<td>
								<textarea id="db_meta_keywords" name="db_meta_keywords" rows="5" cols="40" class="inputbox"><?php echo $meta_keywords;?></textarea>
							</td>
						</tr>
					</tbody></table>
				<?php lknTabs::endTab();?>
				<?php lknTabs::startTab(_lkn_company_logo);?>
					<table class="general_table">
						<tbody>
						<tr>
							<td class="key" style="text-align: left ! important;">
								<?php echo lknToolTip(_lkn_company_logo_tip,_lkn_company_logo);?>
							</td>
							</tr><tr>
							<td>								
								<input type="file" name="db_logo" size="32"/>
								<input type="hidden" value="<?php echo $logo;?>" name="old_logo"/>
								<?php if ($row!='' and $logo!='') { 
									$logo=lknJobsFunctions::getCompanyLogo($logo,$title);
									echo $logo;
								 }?>
									
			
							</td>
						</tr>
						<tr>
							<td>
							<?php echo $allowed_image_desc;?>
							</td>
						</tr>
					</table>
				<?php lknTabs::endTab();?>
				<?php lknTabs::endTabPanel();?>
	
	<input type="hidden" value="<?php echo $id;?>" name="cid"/>
	<input type="hidden" name="db_memberid" value="<?php echo $memberid;?>"/>
	<input type="hidden" value="com_jobs" name="option"/>
	<input type="hidden" value="<?php echo $task;?>" name="task"/>
	<input type="hidden" value="<?php echo $alias;?>" name="db_alias"/>
	<div class="floatRight">
		<?php echo $apply_button;?>
		<input class="btn" type="submit" value="<?php echo $action;?>"/>
	</div>
	</form>			