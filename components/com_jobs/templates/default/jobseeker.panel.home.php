<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
		session_start();
		global $_db;
		$_SESSION['objetoDB'] = $_db;
		$Itemid=lknJobsItemId();
		
		
		$user=new lknUser();
		if (count($rows)>0) {
			$image=$rows[0]->image;
		}else {
			$image='';
		}				
?>
<div style="text-align:center">
	<div style="height:auto; margin:auto;">
   	<table id="tools_employees" cellspacing="0" border="0" cellpadding="5">
            <thead>
                <tr>
                    <th colspan="3">
                        <strong>
                            <?php echo _lkn_worker_my_details;?>
                        </strong>
                    </th>
                </tr>
            </thead>
                <tbody>
        
                <tr>
                    <td width="120" rowspan="2" align="center">
                    <?php 
                    if ($image!='')
                    {
                        $image=lknJobsFunctions::getResumeImage($image,$user->getName());
                        echo $image;
                    }
                    ?>
                    <td width="450" valign="top">
                  	<br/>
                        <p id="resumesdescriptionuser">
                        	<font class="header3resumes">
								<?php echo _lkn_worker_worker_name;?>: 
                          	</font>
							<?php echo $user->getName();?>
                       	</p>
                        <p id="resumesdescriptionuser">
                        	<font class="header3resumes">
								<?php echo _lkn_worker_worker_email;?>: 
                           	</font>
							<?php echo $user->getEmail();?>
                      	</p>
                        <p id="resumesdescriptionuser">
                        	<font class="header3resumes">
								<?php echo _lkn_worker_worker_last_visit_date;?>: 
                           	</font>
							<?php echo lknDate::formatDate($user->getLastVisitDate());?>
                     	</p>
                        <p id="resumesdescriptionuser">
                        	<font class="header3resumes">
							Cambiar datos de perfil: 
                            <a href="index.php?option=com_user&view=user&task=edit">
        						Clic aquí
        					</a>
                           	</font>
                     	</p>
                    </td>
                  <td width="150" valign="top" style="padding-top:66px;">
                        <br/>
                        <?php echo $application_count_link;?>
                        <br/>
                        <p>
                        </p>
                        <?php
                        if (!empty ($videoYoutube)){
                        ?>
                            <object width="500" height="400">
                                <param name="movie" value="http://www.youtube-nocookie.com/v/<?php echo $videoYoutube; ?>"></param>
                                <param name="wmode" value="true"></param>
                                    <embed src="http://www.youtube-nocookie.com/v/<?php echo $videoYoutube; ?>" type="application/x-shockwave-flash" wmode="true" width="250" height="200"></embed></object>
                        <?php
                        } else	{
                            echo $credit_system_links;
                            //echo "<p>Deseas subir tu propio video personal.<a href='javascript:ventanaSecundaria(\"components/com_jobs/youtube.php?id=$idUser\")'>Haz clic aquí</a></p>";
                        }		
            ?>
        
                    </td>
                </tr>					
        </tbody>
        </table>
	</div>
  	<br />
		<?php
		
		$new_resume_allowed='1';
		if ($resume_count>0) {?>
			<table id="tools_employees" cellspacing="0" border="0" cellpadding="5">
				<thead>
                	<th colspan="9">
                        	<strong>
                                <?php echo _lkn_title_curriculum_resume; ?>
                        	</strong></th>
                </thead>
				
                
				<tbody>
				<tr>
                	<td class="textresultjobseeker">
                    	<strong><?php echo _lkn_resume_title; ?></strong></th>
					<td class="textresult">
                    	<strong><?php echo _lkn_created; ?></strong></th>
					<td class="textresult">
                    	<strong><?php echo _lkn_resume_update_date; ?></strong></th>
					<td class="textresult">
                    	<strong><?php echo _lkn_resume_hits; ?></strong></th>
					<td class="textresult"><?php echo "&nbsp";?></th>
					<td class="textresult"><?php echo "&nbsp";?></th>
					<td class="textresult"><?php echo "&nbsp";?></th>
					<td class="textresult"><?php echo "&nbsp";?></th>
					<td class="textresult"><?php echo "&nbsp";?></th>
				</tr>
		<?php 
	
		$k=1;
		$nohtml=lknGetNoHtml();
		foreach ($rows as $row) { 
			$title=temizleSlash($row->title);
			$id=$row->id;
			$published=$row->published;
			$alias=$row->alias;
			$memberid=$row->memberid;
			$hits=$row->hits;
			$update_date=lknDate::formatDate($row->update_date);
			$created=$row->created;
			$created=lknDate::formatDate($created);

				
				$link_job="index.php?option=com_jobs&task=edit_resume&id=$id:$alias" . $itemid;
				$link_job=lknSef::url($link_job);
				$edit="<a href=\"$link_job\">";
				$edit.="<img src=\"". TEMPLATE_IMAGE_PATH ."edit.gif\" border=\"0\" alt=\"edit\" title=\"Editar\"/></a>";
				
				$link_job="index.php?option=com_jobs&task=delete_resume&id=$id:$alias" . $itemid;
				$link_job=lknSef::url($link_job);
				$delete="<a href=\"$link_job\">";
				$delete.="<img src=\"". TEMPLATE_IMAGE_PATH ."delete.gif\" border=\"0\" alt=\"delete\" title=\"Eliminar\" /></a>";
				
				$link_job="index.php?option=com_jobs&task=view_resume&id=$id:$alias" .$nohtml. $itemid;
				$link_job=lknSef::url($link_job);
				$view="<a href=\"$link_job\" target=\"_new\"
     			onclick=\"window.open(this.href,'win2','width=500,height=750,menubar=yes,resizable=yes,scrollbars=yes'); return false;\">";
				$view.="<img src=\"". TEMPLATE_IMAGE_PATH ."view.gif\" border=\"0\" alt=\"print\" title=\"Ver\" /></a>";
								
				$link_job="index.php?option=com_jobs&task=print_resume&id=$id:$alias" . $nohtml. $itemid;
				$link_job=lknSef::url($link_job);				
				$print="<a href=\"$link_job\" target=\"_new\"
     			onclick=\"window.open(this.href,'win2','width=500,height=750,menubar=yes,resizable=yes,scrollbars=yes'); return false;\">";
				$print.="<img src=\"". TEMPLATE_IMAGE_PATH ."print.gif\" border=\"0\" alt=\"print\" title=\"Imprimir\" /></a>";
				
				$cvHTML = "<a href='javascript:void(0)' onclick='imprimirCVHTML(".$id.")'>";				
				$cvHTML .= "<img  style='margin-left:0px;' src=\"".TEMPLATE_IMAGE_PATH."pdf-icon.png\" border=\"0\" alt=\"CV\" title=\"CV\"/></a>";
			
				$publish_image=lknJobsFunctions::getPublishingImage($published);
				$publish_image=lknJobsFunctions::getPublishLink($published,$publish_image,'publish_resume','unpublish_resume',$id);
				
				if ($k=='1') {
					$class='jl_odd_row';
				}else {
					$class='jl_even_row';
				}					
			?>
			<tr>
				<td class="textresult"><?php echo $title; ?></td>
				<td class="textresult"><?php echo $created; ?></td>
				<td class="textresult"><?php echo $update_date; ?></td>
				<td class="textresult"><?php echo $hits; ?></td>
				<td class="textresult"><?php echo $publish_image;?></td>
				<td class="textresult"><?php echo $edit;?></td>
				<!-- MACF PATCH <td class="textresult"><?php echo $delete;?></td>-->
				<td class="textresult"><?php //echo $delete;?></td>
				<td class="textresult"><?php echo $view;?></td>
				<td class="textresult"><?php echo $cvHTML;?></td>
				<!-- <td class="textresult"><?php echo $print;?></td>-->
			</tr>
	
			<?php
			$k=3-$k;
		}
		?> 
		</tbody>
		</table>
          
		<?php echo $resume_count_message;?> 
		<?php
			echo $resume_paging_links;
		}else 
		{
			echo _lkn_worker_no_resume;
			echo "<br /><br />";
		}
		?>
		<?php echo $submit_resume_button;?>
		<?php echo $job_seeker_tools;?>
		<br />
        <script language=javascript>
			function ventanaSecundaria (URL){
					
				var posicion_x;
				var posicion_y;
				posicion_x=(screen.width/2)-(800/2);
				posicion_y=(screen.height/2)-(300/2); 
				window.open(URL, "Sube tu video", "width="+800+",height="+300+",menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left="+posicion_x+",top="+posicion_y+""); 
				
			}
			
			function obtener_ancho(){
				if (navigator.userAgent.indexOf("MSIE") > 0){
					return(document.body.clientWidth);
				}else{
					return window.outerWidth;
				}
			}
			
			function obtener_alto(){
				if (navigator.userAgent.indexOf("MSIE") > 0){
					return(document.body.clientHeight);
				}else{
					return(window.outerHeight);
				}
			}


			function imprimirCV(idCV){		
		        window.open('administrator/components/com_jobs/mpdf50/examples/datosdbcv.php?cid='+idCV , 'ventana2' , 'width=500,height=500,scrollbars=SI');
			}

			/**
			 * MOSTRAR LA HOJA DE VIDA EN FORMATO EN HTML
			 * COLOCAR LA OPCION DE IMPRIMIR DENTRO DEL HTML
			 **/
			function imprimirCVHTML(idCV){
			 	//comentario	
				window.open('components/com_jobs/html/datosdbcvHTML.php?cid='+idCV , 'ventana2' , 'width=800,height=500,scrollbars=si');
			} 
        </script>