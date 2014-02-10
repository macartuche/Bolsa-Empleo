<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
		
		$company_name=temizleSlash($row->title);
		$company_description=temizleSlash($row->description);
		$company_logo=$row->logo;
		$company_id=$row->id;
		$company_alias=$row->alias;
		
		?>
			<table width="100%" cellspacing="0" cellpadding="6" border="0">
				<tbody><tr>
					<td valign="top">
						<table height="125" width="100%" cellspacing="2" cellpadding="2" border="0">
							<tbody><tr>
								<td align="center">
									<?php if ($company_logo!=''){ 
										$company_logo=lknJobsFunctions::getCompanyLogo($company_logo,$company_name);
										echo $company_logo;
									 } ?>
									

							</td>
							</tr>
							<tr>
								<td align="center">
										<h2 style="display: inline; font-size: 10px;">
										<?php echo $company_name;?>
										</h2>

							</td>
							</tr>
							</tbody>
						</table>
						<?php //şirket logo ve adı bitti?>
					</td>
					</tr>
					<tr>
						<td align="center">
							<table width="600" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td align="justify">
										<?php echo $company_description; ?>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					</table>
