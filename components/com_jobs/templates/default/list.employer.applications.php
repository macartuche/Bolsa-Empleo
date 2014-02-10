<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
<div id="linkredirectresume">
<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&task=employer&Itemid=2" id="titletopfrontal" />
<img title="Regresar a herramientas del empleador" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
<?php echo _lkn_backfrontal;?>
</a>
</div>
<br />
<table cellspacing="0" cellpadding="5" border="0" id="tools_employees">
	<thead>
		<tr>
			<th colspan="5">
            	<strong>
                	<?php echo _lkn_info;?>
                </strong>
            </th>
		</tr>
	</thead>
    <tbody>
        <tr>
            <td>
                <img border="0" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'response.gif';?>"/>
            
                <?php echo _lkn_employer_applications_desc;?>
            </td>
        </tr>
        <tr>
        <td>
        <form name="adminForm" method="GET" action="index.php">
		<table class="general_table">
		<tbody>
			<tr>
				<td>Filtro:</td>
				<td>
				 <input type="text" onchange="document.adminForm.submit();" class="text_area" value="<?php echo $search;?>" id="search" name="search"/>
				<button onclick="document.adminForm.submit();" class="btn"><?php echo _lkn_go;?></button>
				<button onclick="document.getElementById('search').value='';document.getElementById('status').value='';document.getElementById('cat_id').value='';document.adminForm.submit();" class="btn"><?php echo _lkn_reset;?></button>
                 </td>
			</tr>
			<tr>
				<td>
				<?php
					//tüm kategorileri listeler
					echo _lkn_category_name 
				?>
				</td>
				<td>
				<?php
					//tüm kategorileri listeler
					echo $category_select_list; 
				?>
				</td>
			</tr>
			<tr>
				<td>
				<?php
					//tüm kategorileri listeler
					echo _lkn_status; 
				?>
				</td>
				<td>
				<?php
					//tüm kategorileri listeler
					echo $status_select_list; 
				?>
				</td>
			</tr>
		</tbody></table>
		</div><br /><br /><br />
		<input type="hidden" name="option" value="com_jobs" />
		<input type="hidden" name="task" value="list_employer_applications"/>
		</form>
        <td>
        </tr>
    </tbody>
</table>	
<br />
		<?php if ($application_count>0) {?>
		<div >	
		   <table cellpadding="5" cellspacing="0" border="0" style="border-collapse: separate;" id="tools_employees" >
			<thead>
				<tr>
					<th colspan="8">
                    	<strong>
                        	<?php echo _lkn_info;?>
                        </strong>
                    </th>
				</tr>
			</thead>
		<tbody>
			<tr>
				<?php /*?><td><strong><?php echo _lkn_id; ?></strong></td><?php */?>
				<td class="textresult"><strong><?php echo _lkn_job; ?></strong></td>
				<td class="textresult" colspan="2">
                <strong>
				<?php echo _lkn_resume; ?>&nbsp/&nbsp<?php echo _lkn_name_resume_front; ?>
                </strong>
                </td>
                <td class="textresult"><strong>Hoja de vida</strong></td>
				<td class="textresult"><strong><?php echo _lkn_category_name; ?></strong></td>
				<td class="textresult"><strong><?php echo _lkn_status; ?></strong></td>
                <td class="textresult"><strong><?php echo _lkn_app_date; ?></strong></td>
                <td class="textresult"><?php echo "&nbsp;";?></td>
			</tr>
		<?php 
	
		$k=1;
		//print_r($rows);
		foreach ($rows as $row) {
				$job_title=$row->job_title;
				$job_id=$row->job_id;
				$job_alias=$row->job_alias;
				$cover_letter=$row->cover_letter;
				$job_title="<a href=\"" . lknSef::url("index.php?option=com_jobs&task=detail_job&id=$job_id:$job_alias" .$Itemid) ."\">$job_title</a>";
	
				$category_name=$row->category_name;
				$category_alias=$row->category_alias;
				$category_id=$row->category_id;
				$category_name="<a href=\"" . lknSef::url("index.php?option=com_jobs&task=detail_category&id=$category_id:$category_alias" .$Itemid) ."\">$category_name</a>";
				
				$company_title=$row->company_title;
				$company_alias=$row->company_alias;
				$company_id=$row->company_id;
				$company_title="<a href=\"" . lknSef::url("index.php?option=com_jobs&task=detail_company&id=$company_id:$company_alias" .$Itemid) ."\">$company_title</a>";
							
				$resume_title=$row->resume_title;
				$resume_name=$row->resume_name;
				$resumeId = $row->resume_id;
				$id=$row->id;
				$application_date=$row->application_date;
				$application_date=lknDate::formatDate($application_date);
				$status_name=$row->status_name;
				$username=$row->username;
				
				$cvHTML = "<a href='javascript:void(0)' onclick='imprimirCVHTML(".$resumeId.")'>";				
				$cvHTML .= "<img  style='margin-left:0px;' src=\"".TEMPLATE_IMAGE_PATH."pdf-icon.png\" border=\"0\" alt=\"CV\" title=\"CV\"/></a>";
				
				$application_link="index.php?option=com_jobs&task=edit_employer_application&id=$id" . $Itemid;
				$application_link=lknSef::url($application_link);
				$edit="<a href=\"$application_link\">";
				$edit.="<img src=\"".TEMPLATE_IMAGE_PATH."edit.gif\" border=\"0\" alt=\"edit\" title=\"Editar\"/></a>";
				
				if ($k=='1') {
					$class='jl_odd_row';
				}else {
					$class='jl_even_row';
				}
								
						
			?>
				<tr>
				<?php /*?><td align="left"><?php echo $id; ?></td><?php */?>
				<td class="textresult" width="15%"><?php echo $job_title; ?></td>
				<td class="textresult" colspan="2" width="28%">
				<?php echo $resume_name; ?>&nbsp/&nbsp<?php echo $resume_title; ?>
                </td>
                            
                <td class="textresult" width="8%" align="center"><?php echo $cvHTML ?></td>
				<td class="textresult" width="15%"><?php echo $category_name; ?></td>
				<td class="textresult" width="10%"><?php echo $status_name; ?></td>
				<td class="textresult" width="15%"><?php echo $application_date; ?></td>
				<td class="textresult" width="5%"><?php echo $edit; ?></td>
				</tr>
	
			<?php
			$k=3-$k;
		}
		?>
		</tbody>
		</table>
		</div>
		<br />
		<div style="margin: 5px; padding: 5px;">
			<?php echo $paging_links;?>
		</div>
		<?php
		}else 
		{
			echo _lkn_error_no_application;
		}
		?>
		<br />
		<br />
<br />
<script type="text/javascript">
	function imprimirCV(idCV){		
        window.open('administrator/components/com_jobs/mpdf50/examples/datosdbcv.php?cid='+idCV , 'ventana2' , 'width=500,height=500,scrollbars=SI');
	}

/**
 * MOSTRAR LA HOJA DE VIDA EN FORMATO EN HTML
 * COLOCAR LA OPCION DE IMPRIMIR DENTRO DEL HTML
 **/
	function imprimirCVHTML(idCV){		
        window.open('components/com_jobs/html/datosdbcvHTML.php?cid='+idCV , 'ventana2' , 'width=800,height=500,scrollbars=si');
	}
</script>