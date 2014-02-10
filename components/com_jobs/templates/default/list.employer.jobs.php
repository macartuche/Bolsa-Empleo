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
<table cellspacing="0" cellpadding="5" border="0" id="tools_employees">
    	<thead>
        	<tr>
            	<th colspan="4">
                	<?php echo _lkn_info;?>
                </th>
            </tr>
        </thead>
		<tbody>
			<tr>
				<td class="textresult"><img border="0" alt="" src="<?php echo TEMPLATE_IMAGE_PATH . 'list_jobs.gif';?>"/></td>
				<td class="textresult">
					<?php echo _lkn_employer_list_jobs_desc_;?>
               	</td>
			</tr>
	<br />
		<form action="index.php" method="GET" name="adminForm">
		  <tr>
		    <td class="textresult">Filtro:</td>
		    <td class="textresult">
		    	<input type="text" onchange="document.adminForm.submit();" value="<?php echo $search;?>" id="search" name="search" />
		        <button onclick="document.adminForm.submit();" class="btn"><?php echo _lkn_go;?></button>
				<button onclick="document.getElementById('search').value='';document.getElementById('cat_id').value='';document.getElementById('published').value='';document.adminForm.submit();" class="btn"><?php echo _lkn_reset;?></button>
</td>
		  </tr>
		   <tr>
		    <td align="left">
			 <?php 
			 	echo _lkn_category_name;
			 ?>
			 </td>
		    <td class="textresult"><?php echo $category_select_list; ?></td>
		  </tr>
		  <tr>
		    <td class="textresult">Estado</td>
		    <td class="textresult"><?php echo $publish_list;?></td>
		  </tr>
          	<input type="hidden" name="option" value="com_jobs"/>
		<input type="hidden" name="task" value="list_employer_jobs"/>
		</form>
		</tbody></table>
	
	 <br />
		<?php if ($job_count>0) {?>
		<div >	
		<table id="tools_employees" cellpadding="5" cellspacing="0" border="0">
		   	<thead>
		   	    <tr>
		   	     	<th colspan="9">
                    	<strong>
                    	Empleos creados
                        </strong>
                  	</th>
		   	    </tr>
			</thead>
		    <tbody>
		   	<tr>
				<td class="textresult"><strong><?php echo _lkn_job; ?></strong></td>
				<td class="textresult"><strong><?php echo _lkn_company; ?></strong></td>
				<td class="textresult"><strong><?php echo _lkn_category_name; ?></strong></td>
				<td class="textresult"><strong><?php echo _lkn_job_hits; ?></strong></td>
				<td class="textresult"><strong><?php echo _lkn_app_count; ?></strong></td>
			</tr>
		<?php 
		$k=1;
		foreach ($rows as $row) {
			$title=temizleSlash($row->title);
			$id=$row->id;
			$alias=$row->alias;
			$published=$row->published;
			$alias=$row->alias;
			$hits=$row->hits;
			$publish_up=lknDate::formatDate($row->publish_up);
			$publish_down=lknDate::formatDate($row->publish_down);
			$tooltip=_lkn_job_publish_up .':' . $publish_up . '<br />' ._lkn_job_publish_down. $publish_down; 
			$company_name=temizleSlash($row->company_name);
			$category_name=temizleSlash($row->category_name);		
			$publish_down_=$row->publish_down;			
			$link_job="index.php?option=com_jobs&task=edit_employer_job&id=$id" . $Itemid;
			$link_job=lknSef::url($link_job);
			$edit="<a href=\"$link_job\">";
			$edit.="<img src=\"".TEMPLATE_IMAGE_PATH."edit.gif\" border=\"0\" alt=\"edit\" title=\"Editar\"/></a>";
					
			$link_job="index.php?option=com_jobs&task=detail_job&id=$id:$alias" .$Itemid;
			$link_job=lknSef::url($link_job);
			$view="<a href=\"$link_job\" target=\"_new\">";
			$view.="<img src=\"".TEMPLATE_IMAGE_PATH."view.gif\" border=\"0\" alt=\"view\" title=\"Ver\" /></a>";
			
			$link_job="index.php?option=com_jobs&task=delete_employer_job&id=$id:$alias" .$Itemid;
			$link_job=lknSef::url($link_job);
			$delete="<a href=\"$link_job\">";
			$delete.="<img src=\"".TEMPLATE_IMAGE_PATH."delete.gif\" border=\"0\" alt=\"delete\" title=\"Eliminar\" /></a>";	
			if ($k=='1') {
				$class='jl_odd_row';
			}else {
				$class='jl_even_row';
			}			
			?>
			<tr>
			<td class="textresult"><?php echo lknToolTip($tooltip,$title); ?></td>
			<td class="textresult"><?php echo $company_name; ?></td>
			<td class="textresult"><?php echo $category_name; ?></td>
			<td class="textresult"><?php echo $hits; ?></td>
			<td class="textresult"><?php 
			$sql="SELECT id FROM #__jobs_applications WHERE job_id='$id'";
			$count=lknGetCount($sql);
			$count="<a href=\"". lknSef::url("index.php?option=com_jobs&task=list_employer_applications&job_id=$id" .$Itemid) . "\">$count</a>";
			echo $count; ?></td>
			<td class="textresult"><?php echo $edit; ?></td>
			
			<td class="textresult">
			<?php 
			if (($now>$publish_down_) && $publish_down_!=$null_date) {
				$image=TEMPLATE_IMAGE_PATH."inactive.gif";
				$image="<img src=\"$image\" alt=\"inactive\" border=\"0\"/>" ;
				echo $image;
			}else 
			{
				$publish_image=lknJobsFunctions::getPublishingImage($published);
				$publish_image= lknJobsFunctions::getPublishLink($published,$publish_image,'publish_employer_job','unpublish_employer_job',$id);
				echo $publish_image;	
			}
			?>
			</td>
			<td class="textresult"><?php echo $view;?></td>
			<td class="textresult"><?php echo $delete;?></td>
			</tr>
	
			<?php
			$k=3-$k;
		}
		
		?>
		</tbody>
		</table>
		</div>
        <div>
            <?php echo $paging_links;?>
        </div>
			<?php
		}else 
		{
			echo _lkn_error_no_job;
		}
		?>
		
		<div>
		<?php
		 $link="index.php?option=com_jobs&task=employer_new_job" . $Itemid;
		 $link=lknSef::url($link);
			?>
		<div align="center"><a href="<?php echo $link;?>" class="btn"><?php echo _lkn_job_add;?></a></div>
		</div>
		<br />
		<div style="margin: auto; width:780px;">
		<?php 
			echo $info_table;
		?>
		</div>
		<br /><br /><br /><br /><br />