<?php
if (! (defined ( '_JEXEC' ) || defined ( '_VALID_MOS' ))) {

	die ( 'Direct Access to this location is not allowed.' );

}




class HTML_jobs {

	function control_panel($rows) {

		//yapılacak işlemler listelenecek

		global $option, $_lknBaseFramework;

		$imageDir = LIVE_SITE . "/administrator/components/$option/images";

		$url = "index2.php?option=$option";


		?>

	<table width="100%" cellspacing="0" cellpadding="0" border="0">

	<tbody>

		<tr>

			<td valign="top">

			<table class="adminlist">

				<thead>

					<tr>

						<th><?php echo _lkn_management;?></th>

					</tr>

				</thead>

				<tbody>

					<tr>

						<td>

						<div id="cpanel">

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>"><img src="<?php echo "$imageDir/cpanel.png";?>" /> <span><?php	echo _lkn_control_panel;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_categories"> <img	src="<?php echo "$imageDir/categories.png";?>" /> <span><?php echo _lkn_list_category;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_countries"> <img src="<?php echo "$imageDir/countries.png";?>" /> <span><?php echo _lkn_list_countries;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_status"> <img	src="<?php echo "$imageDir/application_status.png";?>" /><span><?php echo _lkn_list_status;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_employers"> <img src="<?php echo "$imageDir/list_employers.png";?>" /> <span><?php echo _lkn_list_employers;?></a></span>

								</div>

							</div>

							 <div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_workers"> <img src="<?php echo "$imageDir/list_workers.png";?>" /> <span><?php echo _lkn_list_workers;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_field_categories"> <img src="<?php echo "$imageDir/field_categories.png";?>" /> <span><?php echo _lkn_list_field_categories;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_fields"> <img src="<?php echo "$imageDir/list_fields.png";?>" /> <span><?php echo _lkn_list_resume_fields_admin;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_tools"> <img src="<?php echo "$imageDir/tools.png";?>" /> <span><?php echo _lkn_list_tools;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_education_levels"> <img src="<?php echo "$imageDir/education_levels.png";?>" /> <span><?php echo _lkn_list_education_levels;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_job_types"> <img src="<?php echo "$imageDir/job_types.png";?>" /> <span><?php echo _lkn_list_job_types;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=show_config"> <img src="<?php echo "$imageDir/config.png";?>" /> <span><?php echo _lkn_list_configuration;?></a></span>

								</div>

							</div>
						</div>



						</td>

					</tr>

				</tbody>

			</table>

			<table class="adminlist">

				<thead>

					<tr>

						<th><?php echo _lkn_toolbar_job_seeker_tools;?></th>

					</tr>

				</thead>

				<tbody>

					<tr>

						<td>

						<div id="cpanel">

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_cover_letters"> <img src="<?php echo "$imageDir/cover_letters.png";?>" /><span><?php echo _lkn_list_cover_letters;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_resumes"><img src="<?php echo "$imageDir/list_resumes.png";?>" /> <span><?php echo _lkn_list_resumes;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_files"><img src="<?php echo "$imageDir/list_files.png";?>" /> <span><?php echo _lkn_list_files;?></a></span>

								</div>

							</div>

						</div>

						</td>

					</tr>

				</tbody>

			</table>

			<table class="adminlist">

				<thead>

					<tr>

						<th><?php echo _lkn_employer_tools;?></th>

					</tr>

				</thead>

				<tbody>

					<tr>

						<td>

						<div id="cpanel">

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_jobs"> <img src="<?php echo "$imageDir/list_jobs.png";?>" /> <span><?php echo _lkn_list_jobs;?></a><span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_companies"><img src="<?php echo "$imageDir/companies.png";?>" /> <span><?php echo _lkn_list_company;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_applications"> <img src="<?php echo "$imageDir/list_applications.png";?>" /> <span><?php echo _lkn_list_applications;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_email_templates"> <img src="<?php echo "$imageDir/list_email_templates.png";?>" /> <span><?php echo _lkn_list_email_templates;?></a></span>

								</div>

							</div>

						</div>

						</td>

					</tr>

				</tbody>

			</table>
            
           <!--
                <macf>
                2011-02-03
                Anadir la parte de estadisticas al menu del componente
           -->
           
           <table class="adminlist">

				<thead>

					<tr>

						<th><?php echo "Estadísticas"; ?></th>

					</tr>

				</thead>

				<tbody>

					<tr>

						<td>

						<div id="cpanel">

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=statistic_employees"> <img src="<?php echo "$imageDir/imgemployees1.jpg";?>" /> <span><?php echo "Empleados";?></a><span>
								</div>
							</div>
							<div style="float: left;">
								<div class="icon">
									<a href="<?php echo $url;?>&task=statistic_companies"><img src="<?php echo "$imageDir/companies-icon.png";?>" /> <span><?php echo "Compañías";?></a></span>
								</div>
							</div>

							<div style="float: left;">
								<div class="icon">
									<a href="<?php echo $url;?>&task=statistic_applications"> <img src="<?php echo "$imageDir/Applications-icon.png";?>" /> <span><?php echo "Aplicaciones";?></a></span>
								</div>
							</div>

						</div>



						</td>

					</tr>

				</tbody>

			</table>
            
			 <!-- fin -->

			<table class="adminlist">

				<thead>

					<tr>

						<th><?php echo _lkn_credit_system;?></th>

					</tr>

				</thead>

				<tbody>

					<tr>

						<td>

						<div id="cpanel">

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_credit_history"> <img src="<?php echo "$imageDir/credit_history.png";?>" /> <span><?php echo _lkn_list_credit_history;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=list_pending_credits"> <img src="<?php echo "$imageDir/pending_credits.png";?>" /> <span><?php echo _lkn_list_pending_credits;?></a></span>

								</div>

							</div>

						</div>

						</td>

					</tr>

				</tbody>

			</table>



			<table class="adminlist">

				<thead>

					<tr>

						<th><?php echo _lkn_info;?></th>

					</tr>

				</thead>

				<tbody>

					<tr>

						<td>

						<div id="cpanel">

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=support"> <img src="<?php echo "$imageDir/support.png";?>" /> <span><?php echo _lkn_support;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=credits"> <img	src="<?php echo "$imageDir/credits.png";?>" /> <span><?php echo _lkn_credits;?></a></span>

								</div>

							</div>

							<div style="float: left;">

								<div class="icon">

									<a href="<?php echo $url;?>&task=license"> <img	src="<?php echo "$imageDir/license.png";?>" /> <span><?php echo _lkn_license;?></a></span>

								</div>

							</div>

						</div>

						</td>

					</tr>

				</tbody>

			</table>

			</td>

			<td width="320" valign="top" style="padding: 7px 0pt 0pt 5px;">

			<?php lknTabs::startTabPanel ();?>

			<?php lknTabs::startTab ( _lkn_admin_rss );?>

					<?php echo _lkn_admin_rss_desc;?>

						<table class="adminlist">

								<thead>

									<tr>

										<th class="title" colspan="2"><strong><?php echo _lkn_admin_rss_title;?></strong></th>

									</tr>

								</thead>

											<?php

						$url = 'http://www.instantphp.com/news.feed?type=rss';

						$url = strip_tags ( $url );

						$cacheDuration = 7200;

				

						$rss = JOOMLA_ROOT . LKN_DS . 'components' . LKN_DS . 'lknlibrary' . LKN_DS . 'simplepie' . LKN_DS;

				

						require_once ($rss . 'simplepie.inc');

						$feed = new SimplePie ( );

						$feed->set_feed_url ( $url );

						$feed->set_cache_duration ( $cacheDuration );

						$feed->init ();

				

						if ($feed->error ()) {

							echo '<p>' . $feed->error () . '</p>';

						} else {

							foreach ( $feed->get_items ( 0, 10 ) as $item ) {

								$url = $item->get_link ();

								$title = $item->get_title ();

								$date = '<small>' . $item->get_date () . '</small>';

								?>

								<tr>

									<td><?php echo "<a href=\"$url\" target=\"_blank\">$title</a>";?></td>

									<td><?php echo $date;?></td>

								</tr>

							<?php

							}

						}

				

						?>

				</table>

		<?php lknTabs::endTab ();?>

		<?php lknTabs::startTab('Empresas despublicadas');?>

		<?php $count=count($rows);

		if ($count=='0') {

			echo 'No hay ninguna empresa de aprobar';

		}else {

		?>
			<table class="adminlist">

				<thead>

					<tr>

					<th class="title"><strong><?php	echo _lkn_id;?></strong></th>

					<th class="title"><strong><?php echo _lkn_company;?></strong></th>

					<th class="title"><strong><?php	echo _lkn_country;?></strong></th>

					<th class="title"><strong><?php	echo _lkn_company_owner;?></strong></th>

				</thead>

				<?php 

				$k=1;

				foreach ($rows as $row){

					$title = $row->title;

					$id = $row->id;

					$country = $row->country;

					$company_owner = $row->company_owner;
					?>
					<tr class="row<?php	echo $k;?>">
						<td align="center"><?php echo $id;?></td>

						<td><a href="index2.php?option=com_jobs&task=edit_company&cid=<?php	echo $id;?>"><?php echo $title;?></a></td>

						<td><?php echo $country;?></td>

						<td><?php echo $company_owner;?></td>

					</tr>

				<?php 

				$k=3-$k;

				}?>

				</table>

		<?php }?>

		<?php lknTabs::endTab ();?>

		<?php lknTabs::startTab('Estadísticas');?>

			<table class="adminlist">

				<tr>

					<td class="key"><?php echo 'Empleados';?></td>

					<td><a href="index2.php?option=com_jobs&task=list_employers"><?php echo lknJobsStats::getEmployerCount();?></a></td>

				</tr>

				<tr>

					<td class="key"><?php echo 'Empresas';?></td>

					<td><a href="index2.php?option=com_jobs&task=list_companies"><?php echo lknJobsStats::getCompanyCount();?></a></td>

				</tr>

				<tr>

					<td class="key"><?php echo 'Empleos';?></td>

					<td><a href="index2.php?option=com_jobs&task=list_jobs"><?php echo lknJobsStats::getJobCount();?></a></td>

				</tr>

				

				<tr>

					<td class="key"><?php echo 'Buscadores de empleo';?></td>

					<td><a href="index2.php?option=com_jobs&task=list_workers"><?php echo lknJobsStats::getWorkerCount();?></a></td>

				</tr>

				<tr>

					<td class="key"><?php echo 'Total de currículum';?></td>

					<td><a href="index2.php?option=com_jobs&task=list_resumes"><?php echo lknJobsStats::getResumeCount();?></a></td>

				</tr>

				<tr>

					<td class="key"><?php echo 'Cartas de presentación';?></td>

					<td><a href="index2.php?option=com_jobs&task=list_cover_letters"><?php echo lknJobsStats::GetCoverLetterCount();?></a></td>

				</tr>

				<tr>

					<td class="key"><?php echo 'Total de solicitudes';?></td>
                    
					<td><a href="index2.php?option=com_jobs&task=list_applications"><?php echo lknJobsStats::getApplicationCount();?></a></td>

				</tr>

				<tr>

					<td class="key"><?php echo 'Lista de archivos de currículum vitae';?></td>

					<td><a href="index2.php?option=com_jobs&task=list_files"><?php echo lknJobsStats::getFileCount();?></a></td>

				</tr>

			</table>

		

		<?php lknTabs::endTab ();?>

		<?php lknTabs::startTab('Version');?>

			<table class="adminlist">

			<thead>

				<tr>

					<th class="title">Tu versión del componente Jobs</th>

				</tr>

			</thead>

			<tbody>

				<tr>

					<td>

					<?php 

					$v=new lknJobsVersion();

					

					echo $v->getLongVersion();?></td>

				</tr>

			</tbody>

			</table>

			

			<table class="adminlist">

			<thead>

				<tr>

					<th class="title">Enlaces relacionados al componente Jobs!</th>

				</tr>

			</thead>

			<tbody>

				<tr>

					<td><a href="http://www.instantphp.com/store/details/6/jobs.html" target="_blank">Descripción del producto</a></td>

				</tr>

				<tr>

					<td><a href="http://www.instantphp.com/support/21-jobs-support.html" target="_blank">Foro de soporte</a></td>

				</tr>

				<tr>

					<td><a href="http://www.instantphp.com/documentation/detail_category/5-jobs-documentations.html" target="_blank">Documentación en el sitio web</a></td>

				</tr>

				<tr>

					<td>Documentación y soporte no se encuentran visibles al público. Recuera iniciar sesión en nuestro sitio web.</td>

				</tr>

			</tbody>

			</table>

		

		<?php lknTabs::endTab ();?>

		<?php lknTabs::endTabPanel ();?>



		</td>

		</tr>

	</tbody>

</table>

<?php



	}

	

	function list_tools(){

		?>

		Note: All tools are experimental <br />

		<table border="0" align="left" width="100%">

			<tbody>

				<tr>

					<td width="20%"><a href="index2.php?option=com_jobs&task=tool&name=check_unstable_records">Check Unstable Records</a></td>

					<td width="80%">This tool will check unstable records in your Jobs! tables</td>

				</tr>

			</tbody>

		</table>

			<form action="index2.php" method="POST" name="adminForm">

				<input type="hidden" name="option" value="com_jobs">

				<input type="hidden" name="task" value="">

			</form>

		<?php 

	}

	
	//<macf>
	//2011-02-03
	//Agregar funcioens administrativas para las estadisticas
	function statistic_employees(){
	
	?>
        <table class="adminlist">
            <thead>
                <tr>
                    <th class="title">Estadísticas de empleados</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td>&nbsp;</td>
                </tr>
            	<tr>
                	<td>
                       <ul>
                       	<li><a href="">Currículum actualizados</a></li>
                       </ul>
                    </td>
                </tr>
                
                <tr>
                	<td>
                    <div style="float:rigth; margin:auto; width:600;" id="contenedor">
					<?php
                    
                    if ( !isset($_POST['anio_sel'] ))
                        $anio_actual=date("Y");
                    else 
                        $anio_actual=$_POST['anio_sel'];

				
						//area de grafico y de opciones
                        echo "<div id='grafico' style='float:left; width:65%; height:auto;'>";
                            echo "<center><h2>Curriculums actualizados: a&ntilde;o ".$anio_actual."</h2>";
                            
                            //datos para el grafico
							$data = HTML_jobs::get_curriculums($anio_actual);
							
							//convertir los numeros en los meses correspondientes
							$i = 0;
							if (!empty($data['x'])){
								foreach($data['x'] as $dat){
							   		$data['x'][$i]= HTML_jobs::getMonth($dat);
							   		$i++;
								}
							}
							
   							 HTML_jobs::grafico($data,"Meses","Curriculums");
                            echo "</center>";
                        echo "</div>";
						
                        //datos para anios
                        $anios = array(2009,2010,2011,2012,2013,2014,2015);
                        //CREAR LOS CONTROLES Y EL BOTON DE IMPRESION
                    ?>
                        <div id="controles" style="float:left; width:30%;">
                         <fieldset style="background:#fff">
                          <legend>Opciones</legend>
                            <form  method="post" id="statistics"  name="statistics">
                                <p align="center"><strong>Ver el detalle de otros años</strong>
                                  <select name="anio_sel" onChange="submit()">
                                    <?php 
                                       foreach ($anios as $anio){
                                           if ($anio_actual==$anio)
                                                echo "<option value='$anio' selected>$anio</option>";
                                            else
                                                echo  "<option value='$anio'>$anio</option>";
                                       }
                                    ?>
                                  </select>
                                </p>
                                <p align="center"><input name="print" type="button" value="Imprimir" onClick="imprimir()"></p>
                              </form>
                           </fieldset>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
	}
	
	
	//<oscar>
	//2011-02-08
	//Funciones estadistica para trabajos ofertados por companias
	
	function statistic_companies(){
	
	?>
        <table class="adminlist">
            <thead>
                <tr>
                    <th class="title">Estadísticas de empleos ofertados</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td>&nbsp;</td>
                </tr>
                
                <tr>
                	<td>
                    <div style="float:rigth; margin:auto; width:600;" id="contenedor">
					<?php
                    
                    if ( !isset($_POST['anio_sel'] ))
                        $anio_actual=date("Y");
                    else 
                        $anio_actual=$_POST['anio_sel'];

				
						//area de grafico y de opciones
                        echo "<div id='grafico' style='float:left; width:65%; height:auto;'>";
                            echo "<center><h2>Trabajos ofertados: año ".$anio_actual."</h2>";
                            
                            //datos para el grafico
							$data = HTML_jobs::getJobs_compania();
   							 HTML_jobs::grafico($data,"Companias","Cantidad de trabajos");
                            echo "</center>";
                        echo "</div>";
						
                        //datos para anios
                        $anios = array(2009,2010,2011,2012,2013,2014,2015);
                        //CREAR LOS CONTROLES Y EL BOTON DE IMPRESION
                    ?>
                        <div id="controles" style="float:left; width:30%;">
                         <fieldset style="background:#fff">
                          <legend>Opciones</legend>
                            <form  method="post" id="statistics"  name="statistics">
                                <p align="center"><strong>Ver el detalle de otros años</strong>
                                  <select name="anio_sel" onChange="submit()">
                                    <?php 
                                       foreach ($anios as $anio){
                                           if ($anio_actual==$anio)
                                                echo "<option value='$anio' selected>$anio</option>";
                                            else
                                                echo  "<option value='$anio'>$anio</option>";
                                       }
                                    ?>
                                  </select>
                                </p>
                                <p align="center"><input name="print" type="button" value="Imprimir" onClick="imprimir()"></p>
                              </form>
                           </fieldset>
                        </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
	}
	
	
	//<macf>
   //2011-02-7
   //funciones de estadisticas para los trabajos

	function statistic_applications(){
	global $_db;
	?>
        <table class="adminlist">
            <thead>
                <tr>
                    <th class="title">Estadísticas de trabajos</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td>&nbsp;</td>
                </tr>
            	<tr>
                	<td>
                       <ul>
                       	<li><a href="">Trabajos por áreas</a></li>
                       	<li><a href="">Trabajos aprobados</a></li>
                       </ul>
                    </td>
                </tr>
                
                <tr>
                	<td>
                    <div style="float:rigth; margin:auto; width:600;" id="contenedor">
					<?php
                    
                    //valor por defecto para el combobox de area
                    if ( !isset($_POST['id_area'] ))
                        $id_area=0;
                    else 
                        $id_area=$_POST['id_area'];


                    //valor por defecto para el combobox de anios
					if ( !isset($_POST['anio_sel'] ))
                        $anio_actual=date("Y");
                    else 
                        $anio_actual=$_POST['anio_sel'];


				
                    //valor por defecto para el combobox de estado
					if ( !isset($_POST['estado'] ))
                        $estado=1;
                    else 
                        $estado=$_POST['estado'];
                        
						//Crear el area del grafico
                        echo "<div id='grafico' style='float:left; width:65%; height:auto;'>";
                            echo "<center><h2>Trabajos por áreas: año ".$anio_actual."</h2>";
                            
                            //  data
							$data = HTML_jobs::getJobs_CarreraArea($id_area, $anio_actual, $estado);
							//graficar
   							 HTML_jobs::grafico($data,"Area","Cantidad");
                            echo "</center>";
                        echo "</div>";
					
						
						
						
                        //datos de area para el combobox
                        $sql = "select id, title 
                        		from #__jobs_categories 
                        		where parent_id = 0
                        		Order by 2";
                        $_db->query($sql);
                        $_db->setQuery(); 
                        $rows=$_db->loadObjectList();		
                        
                        
                        //datos de anios para el combobox
                        $anios = array(2009,2010,2011,2012,2013,2014,2015);
                        
                                     
                        //CREAR LOS CONTROLES Y EL BOTON DE IMPRESION
                    ?>
                        <div id="controles" style="float:left; width:30%;">
                         <fieldset style="background:#fff">
                          <legend>Opciones</legend>
                            <form  method="post" id="statistics"  name="statistics">
                            
                                <!-- combobox areas -->
                                <p align="center"><strong>Seleccionar</strong>
                                  <select name="id_area" onChange="submit()">
                                      <option value="0">TODAS LAS ÁREAS</option>
                                    <?php 
                                     if( !empty ($rows)){
                                    	 foreach ($rows as $row){
                                           if ($row->id==$id_area) 
                                                echo "<option value='".$row->id."' selected>".$row->title."</option>";
                                            else
                                                echo  "<option value='".$row->id."'>".$row->title."</option>";
                                       	}
                                     }
                                    ?>
                                  </select>
                                </p>
                                
                                 <!-- combobox estado -->
                                <p align="center"><strong>Estado:</strong>
                                  <select name="estado" onChange="submit()">
                                  <?php 
                                      //creado
                                      if($estado == 1 )
                                      	echo '<option value="0" selected>Publicado</option>';
                                      else
                                      	echo '<option value="0">Publicado</option>';
                                      	
                                      
                                      //publicado
                                      if($estado == 2 )
                                      	echo '<option value="1" selected>No publicado</option>';
                                      else
                                      	echo '<option value="1">No publicado</option>';

                                  ?>  
                                  </select>
                                </p>

                                
                                <!-- combobox anios -->
                                <p align="center"><strong>Año:</strong>
                                  <select name="anio_sel" onChange="submit()">
                                    <?php 
                                       foreach ($anios as $anio){
                                           if ($anio_actual==$anio)
                                                echo "<option value='$anio' selected>$anio</option>";
                                            else
                                                echo  "<option value='$anio'>$anio</option>";
                                       }
                                    ?>
                                  </select>
                                </p>

                               <!-- boton de impresion -->
								<p align="center"><input name="print" type="button" value="Imprimir" onClick="imprimir()"></p>
                              </form>
                           </fieldset>
                        </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
	}

    
    //FUNCIONES PARA LOS REPORTES POR MES
	function get_curriculums($anio){
		
		//consulta
		
		
		/*$strQuery = "SELECT jjState.title AS estado, count( jjApp.job_id ) AS total
						FROM #__jobs_applications jjApp, #__jobs_status jjState
						WHERE MONTH( application_date ) = $mes_actual
							  AND jjState.id = jjApp.status
						GROUP BY jjApp.STATUS
						ORDER BY jjApp.application_date ";
		*/
		
		$strQuery ="SELECT MONTH( update_date ) Mes, count( update_date ) Total
					FROM `jos_jobs_resumes`
					WHERE update_date != '0000-00-00 00:00:00'
					and year (update_date) = $anio 
					GROUP BY 1  ";

					
		return HTML_jobs::get_data($strQuery,"Mes","Total"); 		      
	
	}

	//Funcion para obtener los trabajos ofertados por las companias
	function getJobs_compania()
	{
 		$strQuery = "SELECT count(j.title) total, c.title companies
					 FROM jos_jobs_jobs j, jos_jobs_companies c 
					 WHERE j.company_id =c.id group by companies";
		return HTML_jobs::get_data($strQuery,"companies","total");
     
	}
	
	
	/*********************************************************
		Funcion para obtener la cantidad de trabajos por areas
	**********************************************************/
	
	function getJobs_CarreraArea($area, $anio, $estado)
	{
		
		//consulta para tener los trabajos creados 
		//por areas
		switch($area){
			case 0: 
				$MOREwhere ="c.parent_id IN ( 6, 14, 22, 34 ) AND ";
			break;
			
			default:
				$MOREwhere ="c.parent_id = $area AND";
			break;			
		
		}
		
		//por el anio correspondiente al campo created en la base de datos
		$MOREwhere .=" YEAR (t.created) = $anio AND ";
		
		//por el estado correspondiente al campo published en la base de datos
		$MOREwhere .=" t.published = $estado ";

		
		//unir toda la consulta
		$strQuery ="SELECT  count( t.id ) total, cc.title area
					FROM jos_jobs_jobs t, 
						 jos_jobs_categories c, 
						 jos_jobs_categories cc
					WHERE 	t.cat_id = c.id AND 
							c.parent_id = cc.id AND
				   ".$MOREwhere." GROUP BY 2";

					                   //EJE:   X      Y
		return HTML_jobs::get_data($strQuery,"area","total"); 
						
	}
	
	 

	function get_data($strQuery, $colX, $colY){		
		
		include ("components/com_jobs/jpgraph/jpgraph.php");
		include ("components/com_jobs/jpgraph/jpgraph_bar.php");
		include("components/com_jobs/claseFuente.php");
		$db = &JFactory::getDBO();
		$db->setQuery($strQuery);
		$rows = $db->loadAssocList();
	
	    $datosx = array();
	    $datosy = array();
	    
	    
	    $data= array();
		//crear el arreglo de datos
		if ( !empty($rows) ){
		
		
			//formar las barras
			foreach ($rows as $row ) {	
				$datosx[] = $row[$colX];
				$datosy[] = $row[$colY];		  
        	}
        	
        	$data['x']= $datosx;
        	$data['y']= $datosy;
		}
		
		

      return $data;
	}
	//OBTENER EL MES DE ACUERDO AL NUMERO
	function getMonth($mes_actual){	
		switch($mes_actual){
			case 1: 	return "Enero"; 	break;
			case 2: 	return "Febrero"; 	break;
			case 3: 	return "Marzo"; 	break;
			case 4: 	return "Abril"; 	break;
			case 5: 	return "Mayo"; 		break;
			case 6: 	return "Junio"; 	break;
			case 7: 	return "Julio"; 	break;
			case 8: 	return "Agosto"; 	break;
			case 9: 	return "Septiembre";break;
			case 10: 	return "Octubre"; 	break;
			case 11: 	return "Noviembre"; break;
			case 12: 	return "Diciembre"; break;
		}		
	}	
   //fin

   function grafico($data, $Xtitle, $Ytitle){   

 		  if (!empty($data)){
 		  	$serieX = array();
 		  	$auxX = $data['x'];
 		  	for ($i=0; $i < count($data['x']); $i++) { 
 		  		$serieX[]=$i+1;
 		  	}

			//uso del framework de JpGraph					
			// Size of graph
			$width=800;
			$height=600;
						 
			// Set the basic parameters of the graph
			$graph = new Graph($width,$height,'auto');
			$graph->SetScale("textlin");


			// Nice shadow
			$graph->SetShadow();

			// Crear las etiquetas
							
			$lbl = array();
			foreach($serieX as $x){
				$lbl[] = $x;
			}
			$graph->xaxis->SetTickLabels($lbl);

			// Label align for X-axis
			$graph->xaxis->SetLabelAlign('right','center','right');
			$graph->xaxis->SetLabelMargin(50);

			// Label align for Y-axis
			$graph->yaxis->SetLabelAlign('center','bottom');

			// Titles
			$graph->title->Set('');
			//$graph->title->SetFont(FF_ARIAL,FS_BOLD,14);
			$graph->img->SetMargin(60,20,100,200);
				
			// Create a bar pot
			$bplot = new BarPlot($data['y']); 
			$bplot->value->Show();
			$bplot->value->SetColor('white');
			$bplot->SetFillColor('white');
			$bplot->SetWidth(0.5);
			$graph->Add($bplot);
														
			$bplot->value-> Show();
			$graph->yaxis->scale-> SetGrace(20);
			$graph->xaxis->title->Set($Xtitle); 

			$graph->yaxis->title->Set($Ytitle);
 
			//fuentes de los ejes X e Y
			$graph->title->SetFont(FF_FONT1,FS_NORMAL);
			$graph->yaxis->SetFont(FF_FONT1,FS_NORMAL);
			$graph->xaxis->SetFont(FF_FONT1 ,FS_NORMAL);
							

			// Display the graph 
			$graph->Stroke(_IMG_HANDLER);
					 
			// Default is PNG so use ".png" as suffix
			$fileName = "components/com_jobs/tmp/imagefile.png";
			$graph->img->Stream($fileName);

			// Send it back to browser
			//$graph->img->Headers("image/png");
			//$graph->img->Stream();

			echo '<img src="components/com_jobs/tmp/imagefile.png" />';
			echo '<div style="margin-top:-90px; margin-left:30px; text-align:left">';
				echo '<h2>'.$Xtitle.'</h2>';
				for ($i=0; $i < count($data['x']); $i++) { 
					echo '<p style="text-align:left;">'.($i+1).' - '.$data['x'][$i].'</p>';

				}
			echo '</div>';
			
		}else {
			echo '<p>No existen datos</p>';
		}

   
   
   
   }
	//fin

	function list_field_categories($cats) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>

		<script language="javascript" type="text/javascript">
		<!--
		function saveorder( n,  task ) {
			checkAll_button( n, task );
		}
		//needed by saveorder function
		function checkAll_button( n, task ) {
		    if (!task ) {

				task = 'saveorder';

			}



			for ( var j = 0; j <= n; j++ ) {

				box = eval( "document.adminForm.cb" + j );

				if ( box ) {

					if ( box.checked == false ) {

						box.checked = true;

					}

				} 

			}

			submitform(task);

		}

		//-->

		</script>

		

		<h1><?php echo _lkn_list_field_categories;?></h1><br />

		<form action="index2.php" method="POST" name="adminForm">

		<table class="adminlist">

		<thead>

		<tr>

			<th class="title">

			<input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count($cats);?>)" /></th>

			<th class="title"><strong><?php echo _lkn_id;?></strong></th>

			<th class="title"><strong><?php	echo _lkn_category_name;?></strong></th>

			<th class="title"><strong><?php	echo _lkn_order;?><a title="Save Order" href="javascript:saveorder(<?php echo count($cats);?>, 'saveorder')"><img alt="Save Order" src="<?php echo LIVE_SITE;?>/administrator/images/filesave.png"/></a></strong></th>

			<th class="title"><strong>Can Unpublish?</th>

			<th class="title"><strong>Can Delete?</th>

			<th class="title"><strong><?php	echo _lkn_published;?></strong></th>

			<th class="title"></th>

		</tr>

	</thead>

		<?php

		$k = 0;

		$i = 0;

		foreach ($cats AS $row) {

			$title = $row->title;

			$id = $row->id;

			$published = $row->published;

			$order = $row->ordering;

			$parent_id = $row->parent_id;

			$can_unpublish = $row->can_unpublish;

			$can_delete=$row->can_delete;

			?>

			<tr class="row<?php	echo $k;?>">

				<td align="center">
					<input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $id;?>" onClick="isChecked(this.checked);" /></td>
				<td align="center"><?php echo $id; ?></td>

				<td><?php echo $title;?></td>

				<td align="center">
					<span>
						<a title="Move Up" href="index2.php?option=com_jobs&task=move_up_field_category&cid=<?php echo $id;?>&parent_id=<?php echo $parent_id;?>&ordering=<?php echo $order;?>"><img width="16" height="16" border="0" alt="Move Up" src="images/uparrow.png"/></a>
					</span>
					<span>
						<a title="Move Down"  href="index2.php?option=com_jobs&task=move_down_field_category&cid=<?php echo $id;?>&parent_id=<?php echo $parent_id;?>&ordering=<?php echo $order;?>">  <img width="16" height="16" border="0" alt="Move Down" src="images/downarrow.png"/></a>
					</span>

				

					<input type="text" style="text-align: center;" class="text_area" value="<?php echo $order;?>" size="5" name="order[]"/></td>

				<td align="center"><?php echo lknJobsFunctions::getPublishingImage( $can_unpublish );?></td>

				<td align="center"><?php echo lknJobsFunctions::getPublishingImage( $can_delete );?></td>

				<td align="center"><?php echo lknJobsFunctions::getPublishingImage( $published );?></td>

				<td align="center"><a href="index2.php?option=com_jobs&task=list_fields&cat_id=<?php echo $id;?>">List Fields</a></td>

			</tr>

			<?php

			$k = 1 - $k;

			$i ++;

		}

		?>

		</table>



		<input type="hidden" name="hidemainmenu" value="0" />

		<input type="hidden" name="option" value="com_jobs" />

		<input type="hidden" name="boxchecked" value="0" />

		<input type="hidden" name="task" value="list_resume_field_categories" />

	</form>

	<?php

	}

	

	function field_category_form($row = '',$cats) {

		global $_lknBaseFramework;

		$editor = new lknEditor();

			//print_r($row);

		if ($row!='') {

			$id = $row->id;

			$parent_id = $row->parent_id;

			$title = temizleSlash ( $row->title );

			$published = $row->published;

				$can_unpublish = $row->can_unpublish;

				if ($can_unpublish=='1') {

					$published_ex='';

				}else {

					$published_ex="disabled='disabled'";

				}

				

			$action= _lkn_field_category_update;

		} else {

			$id='';

			$parent_id = '';

			$title = '';

			$published = '';

			$can_unpublish='';

			$published_ex='';

			$action = _lkn_field_category_add;

			

		}

		?>



		<script language="javascript" type="text/javascript">

		<!--

		function submitbutton(pressbutton)

		{

			var form = document.adminForm;

			if (pressbutton == "list_field_categories" || pressbutton == "panel" || pressbutton == ""){

				submitform( pressbutton );

			}else{

				if (form.db_title.value == ""){

					alert( "Article must have a Title" );

				} else if (form.db_parent_id.value == form.id.value){

					alert( "You must select a different parent category." );

	 			} else {

					submitform( pressbutton );

				}

			}

		}

		//-->

		</script>



		<h1><?php echo $action;?></h1><br />

		<form id="adminForm" name="adminForm" method="post" action="index2.php">



		<table width="100%" cellspacing="0" cellpadding="0" border="0">

		<tbody>

		<tr>

			<td valign="top">

			<table class="adminform">

				<tbody>

					<tr>

						<td>

							<?php echo lknToolTip ( _lkn_category_name_tip, _lkn_category_name, 0 );?>

						</td>

						<td>

							<input maxlength="100" size="50" value="<?php echo $title;?>" name="db_title" />

						</td>

						<td>

							<?php

								echo lkntooltip ( _lkn_published_tip, _lkn_published ) . ': ';

							?>

						</td>

						<td>

							<?php echo lknhtmlMaker::publishedSelectList('db_published', $published,$published_ex );?>

						</td>

					</tr>

					<tr>

						<td>

							<?php

								echo lknToolTip ( _lkn_parent_category_tip, _lkn_parent_category ) . ': ';

							?>

						</td>

						<td>

							<?php

					

								$selectList = lknhtmlMaker::selectList( $cats, 'db_parent_id', $parent_id,$published_ex );

								echo $selectList;

							?>

						</td>

						<td>

						</td>

						<td>

						</td>

					</tr>

				</tbody>

			</table>

			</td>

		</tr>

	</tbody>

	</table>

	<input type="hidden" value="<?php echo $id;	?>" name="cid" />

	<input type="hidden" value="com_jobs" name="option" />

	<input type="hidden" value="" name="task" />

	</form>

	<?php

	}

	

	function list_fields($rows,$params) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>



		<h1><?php	echo _lkn_list_resume_fields;?></h1>

		<form action="index2.php" method="POST" name="adminForm">

		<?php

			HTML_jobs::upper();

		?>

		  	  	  	

		<table class="adminlist">

		<thead>

			<tr>

				<th class="title"><input type="checkbox" name="toggle" value=""	onclick="checkAll(<?php echo $_config ['recordPerPage'];?>)" /></th>

				<th class="title"><strong><?php	echo _lkn_id;?></strong></th>

				<th class="title"><strong><?php	echo _lkn_name_fields;?></strong></th>

				<th class="title"><strong><?php	echo _lkn_name_fields_traductor;?></strong></th>

				<th class="title"><strong><?php	echo _lkn_fields_type_admin;?></strong></th>

				<th class="title"><strong><?php	echo _lkn_fields_category_admin;?></strong></th>

				<th class="title"><strong><?php	echo _lkn_fields_requeride;?></strong></th>

				<th class="title"><strong><?php	echo _lkn_fields_published;?></strong></th>

				<th class="title"><strong><?php	echo _lkn_fields_search_admin;?></strong></th>

				<th class="title"><strong><?php	echo _lkn_fields_can_published;?></strong></th>

				<th class="title"><strong><?php	echo _lkn_fields_can_delete;?></strong></th>

				<th class="title"><strong><?php	echo _lkn_order;?></strong></th>

			</tr>

		</thead>

		<?php

		$k = 0;

		$adet = $params ['count'];

		$i = 0;

		foreach ($rows as $row) {

			//print_r($row);

			$title = temizleSlash($row->title);

			$name = $row->name;

			$required = $row->required;

			$type=$row->type;

			$id = $row->id;

			$field_category=temizleSlash($row->field_category);

			$published = $row->published;

			$searchable = $row->searchable;

			$order=$row->ordering;

			$cat_id=$row->cat_id;

			$can_delete=$row->can_delete;

			$can_unpublish=$row->can_unpublish;

			?>

			<tr class="row<?php	echo $k;?>">

				<td align="center"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $id;?>" onClick="isChecked(this.checked);" /></td>

				<td align="center"><?php echo $id;?></td>

				<td><?php echo $name;?></td>

				<td><?php echo $title;?></td>

				<td><?php echo $type;?></td>

				<td><?php echo $field_category;?></td>

				<td align="center"><?php echo lknJobsFunctions::getPublishingImage ( $required );?></td>

				<td align="center"><?php echo lknJobsFunctions::getPublishingImage ( $published );?></td>

				<td align="center"><?php echo lknJobsFunctions::getPublishingImage ( $searchable );?></td>

				<td align="center"><?php echo lknJobsFunctions::getPublishingImage ( $can_unpublish );?></td>

				<td align="center"><?php echo lknJobsFunctions::getPublishingImage ( $can_delete );?></td>

				<td align="center">

					<span>

						<a title="Move Up" href="index2.php?option=com_jobs&task=move_up_field&cid=<?php echo $id;?>&cat_id=<?php echo $cat_id;?>&ordering=<?php echo $order;?>"><img width="16" height="16" border="0" alt="Move Up" src="images/uparrow.png"/></a>

					</span>

					<span>

						<a title="Move Down"  href="index2.php?option=com_jobs&task=move_down_field&cid=<?php echo $id;?>&cat_id=<?php echo $cat_id;?>&ordering=<?php echo $order;?>">  <img width="16" height="16" border="0" alt="Move Down" src="images/downarrow.png"/></a>

					</span>

				

					<input type="text" style="text-align: center;" class="text_area" value="<?php echo $order;?>" size="5" name="order[]"/></td>

			</tr>

			<?php

			$k = 1 - $k;

			$i ++;

		}



		?>

		</table>

		<input type="hidden" name="hidemainmenu" value="0" />

		<input type="hidden" name="option" value="com_jobs" />

		<input type="hidden" name="boxchecked" value="0" />

		<input type="hidden" name="task" value="list_fields" />

	</form>

<?php

		if ($adet != '') {

			$published = lknGetParamatre ( $_REQUEST, 'published' );

			$search = lknGetParamatre ( $_REQUEST, 'search' );

			$cat_id=lknGetParamatre($_REQUEST,'cat_id');

			$field_type = lknGetParamatre ( $_REQUEST, 'field_type' );

			$toplamSayfa = (int)$adet;

			$sayfa = new lknSayfalama("index2.php?option=com_jobs&task=list_fields&published=$published&field_type=$field_type&search=$search&cat_id=$cat_id", $toplamSayfa );

			echo $sayfa->sayfaLinkiYaz();

		}

	}

	

	function field_form( $row='', $lists, $fieldvalues, $option) {

		if ($row!='') {

			$id=$row->id;

			$name=$row->name;

			$description=temizleSlash($row->description);

			$search_tooltip=temizleSlash($row->search_tooltip);

			$error_message=temizleSlash($row->error_message);

			$title=temizleSlash($row->title);

			$type=$row->type;

			$maxlength=$row->maxlength;

			$size=$row->size;

			$required=$row->required;

			$ordering=$row->ordering;

			$cols=$row->cols;

			$rows=$row->rows;	

			$extra=' disabled="disabled"';

		}else {

			$id='';

			$name='';

			$description='';

			$search_tooltip='';

			$error_message='';

			$title='';

			$type='';

			$maxlength='';

			$size='';

			$required='';

			$ordering='';

			$cols='';

			$rows='';

			$extra='';

		}

	

		?>

<script type="text/javascript">

  function getObject(obj) {

    var strObj;

/*    if (document.all) {

      strObj = document.all.item(obj);

    } else if (document.getElementById) {*/

      strObj = document.getElementById(obj);

    /*}*/

    return strObj;

  }

  

	

	function getSelectedValue(obj) {

		i = obj.selectedIndex;

		if (i != null && i > -1) {

			return obj.options[i].value;

		} else {

			return null;

		}

	}

  

   function submitbutton(pressbutton) {

     if (pressbutton == "list_fields" || pressbutton == "panel" || pressbutton == ""){

    	 document.adminForm.db_type.disabled=false;

         submitform(pressbutton);

         return;

     }

     

     var coll = document.adminForm;

     var errorMSG = '';

     var iserror=0;

     if (coll != null) {

       var elements = coll.elements;

       // loop through all input elements in form

       for (var i=0; i < elements.length; i++) {

         // check if element is mandatory; here mosReq=1

         if (elements.item(i).getAttribute('mosReq') == 1) {

           if (elements.item(i).value == '') {

             //alert(elements.item(i).getAttribute('mosLabel') + ':' + elements.item(i).getAttribute('mosReq'));

             // add up all error messages

             errorMSG += elements.item(i).getAttribute('mosLabel') + ' : Fill this field \n';

             // notify user by changing background color, in this case to red

             elements.item(i).style.background = "red";

             iserror=1;

           }

         }

       }

     }

     if(iserror==1) {

       alert(errorMSG);

     } else {

       document.adminForm.db_type.disabled=false;

       submitform(pressbutton);

     }

   }



  function insertRow() {

    var oTable = getObject("fieldValuesBody");

    var oRow, oCell ,oCellCont, oInput;

    var oCell2 ,oCellCont2, oInput2;

    var i, j;

    i=document.adminForm.valueCount.value;

    i++;

    // Create and insert rows and cells into the first body.

    oRow = document.createElement("TR");



    oTable.appendChild(oRow);



    oCell2 = document.createElement("TD");

    oInput2=document.createElement("INPUT");

    oInput2.name="vValues["+i+"]";

    oInput2.setAttribute('mosLabel','Name');

    oInput2.setAttribute('mosReq',0); 

    oCell2.appendChild(oInput2);

     

    oRow.appendChild(oCell2);



    document.adminForm.valueCount.value=i;

  }





  function disableAll() {

    var elem;

    elem=getObject('divValues');

    elem.style.display = 'none';

    elem=getObject('divColsRows');

    elem.style.display = 'none';

    elem=getObject('divText');

    elem.style.display = 'none';

    if (elem=getObject('vValues[0]')) {

      elem.setAttribute('mosReq',0);

    }

	

  }

  

  function selType(sType) {

    var elem;

    //alert(sType);

    switch (sType) {

      case 'editorta':

      case 'textarea':

        disableAll();

        elem=getObject('divText');

        elem.style.visibility = 'visible';

        elem.style.display = 'block';

        elem=getObject('divColsRows');

        elem.style.visibility = 'visible';

        elem.style.display = 'block';

      break;

      

      case 'emailaddress':

      case 'number':

      case 'text':

        disableAll();

        elem=getObject('divText');

        elem.style.visibility = 'visible';

        elem.style.display = 'block';

      break;

      

      case 'select':

      case 'multiselect':

        disableAll();

        elem=getObject('divValues');

        elem.style.visibility = 'visible';

        elem.style.display = 'block';

        if (elem=getObject('vValues[0]')) {

		  elem.setAttribute('mosReq',1);

		}

      break;

      case 'multicheckbox':

      case 'radio':

        disableAll();

        elem=getObject('divColsRows');

        elem.style.visibility = 'visible';

        elem.style.display = 'block';

        elem=getObject('divValues');

        elem.style.visibility = 'visible';

        elem.style.display = 'block';

        if (elem=getObject('vValues[0]')) {

          elem.setAttribute('mosReq',1);

        }

      break;

      default:

        disableAll();

    }

  }



  function prep4SQL(o){

	if(o.value!='') {

		o.value=o.value.replace('lknjobs_','');

    		o.value='lknjobs_' + o.value.replace(/[^a-zA-Z]+/g,'');

	}

  }



</script>

	<form action="index2.php" method="POST" name="adminForm">

	<table cellspacing="0" cellpadding="0" width="100%">

	<tr valign="top">

		<td width="60%">

		<table class="adminlist adminform">

			<tr>

				<td width="20%"><?php echo lknToolTip('Select the field Type','Type')?></td>

				<td width="20%"><?php echo $lists['type']; ?></td>

				<td>&nbsp;</td>

			</tr>

			<tr>

				<td width="20%"><?php echo lknToolTip('Write the name of this field','Field Name')?></td>

				<td align=left  width="20%"><input onChange="prep4SQL(this);" type="text" name="db_name" mosReq=1 mosLabel="Name" class="inputbox" value="<?php echo $name; ?>" <?php echo $extra;?>/>

				<?php /*<input type="text" name="db_name" mosReq=1 mosLabel="Name" class="inputbox" value="<?php echo $name; ?>" <?php echo $extra;?> />*/?>

				</td>

				<td>&nbsp;</td>

			</tr>

			<tr>

				<td width="20%"><?php echo lknToolTip('Category of this field. You can add/edit/delete the categories from Jobs! Admin Panel>Resume Field Categories','Field Category');?></td>

				<td align=left  width="20%"><?php echo $lists['cats'];?></td>

				<td>&nbsp;</td>

			</tr>

			<tr>

				<td width="20%"><?php echo lknToolTip('Title of this field','Title');?></td>

				<td width="20%" align=left><input type="text" name="db_title" mosReq=1 mosLabel="Title" class="inputbox" value="<?php echo $title; ?>" /></td>

				<td>&nbsp;</td>

			</tr>

			<tr>

				<td width="20%"><?php echo lknToolTip('Write tooltip for this field','Tooltip');?></td>

				<td width="20%" align=left><textarea cols="20" rows="10" name="db_description" mosLabel="Description"><?php echo $description; ?></textarea></td>

				<td>&nbsp;</td>

			</tr>

			<tr>

				<td width="20%"><?php echo lknToolTip('If this field is searchable, This tooltip will be showed in resume search page','Search Tooltip');?></td>

				<td width="20%" align=left><textarea cols="20" rows="10" name="db_search_tooltip" mosLabel="Search Tooltip"><?php echo $search_tooltip; ?></textarea></td>

				<td>&nbsp;</td>

			</tr>

			<tr>

				<td width="20%"><?php echo lknToolTip('This message will be showed to the user in javascript pop up message, if he/she did not fill a required value','Error Message');?></td>

				<td width="20%" align=left><textarea cols="20" rows="10" name="db_error_message" mosLabel="Error Message"><?php echo $error_message; ?></textarea></td>

				<td></td>

			</tr>

			<tr>

				<td width="20%"><?php echo lknToolTip('Is this a required field?','Required')?></td>

				<td width="20%"><?php echo $lists['required']; ?></td>

				<td>&nbsp;</td>

			</tr>

			<tr>

				<td width="20%"><?php echo lknToolTip('Select the publishinh status','Published?')?></td>

				<td width="20%"><?php echo $lists['published']; ?></td>

				<td>&nbsp;</td>

			</tr>

			<tr>

				<td width="20%"><?php echo lknToolTip('Is this field searchable field? If you select YES, This field will be searchable from resume search section','Searchable')?></td>

				<td width="20%"><?php echo $lists['searchable']; ?></td>

				<td>&nbsp;</td>

			</tr>

			<tr>

				<td width="20%">Size</td>

				<td width="20%"><input type="text" name="db_size" mosLabel="Size" class="inputbox" value="<?php echo $size; ?>" /></td>

				<td>&nbsp;</td>

			</tr>

			</table>

		<div id=page1  class="pagetext">

		

		</div>

		<div id="divText"  class="pagetext">

		<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminform">

		<tr>

			<td width="20%">Max Length</td>

			<?php

				if ($row=="")

					$maxlength = 20;

			?>

			<td width="20%"><input type="text" name="db_maxlength" mosLabel="Max Length" class="inputbox" value="<?php echo $maxlength; ?>" /></td>

			<td>&nbsp;</td>

		</tr>

		</table>

		</div>

		<div id="divColsRows"  class="pagetext">

		<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminform">

		<tr>

			<td width="20%">Cols</td>

			<td width="20%"><input type="text" name="db_cols" mosLabel="Cols" class="inputbox" value="<?php echo $cols; ?>" /></td>

			<td>&nbsp;</td>

		</tr>

		<tr>

			<td width="20%">Rows</td>

			<td width="20%"><input type="text" name="db_rows"  mosLabel="Rows" class="inputbox" value="<?php echo $rows; ?>" /></td>

			<td>&nbsp;</td>

		</tr>

		</table>

		</div>

		<div id="divValues" style="text-align:left;">

		Use the table below to add new values.<br />

		<input type=button onClick="insertRow();" value="Add a Value" />

		<table align=left id="divFieldValues" cellpadding="4" cellspacing="1" border="0" width="100%" class="adminform" >

		<tr>

			<th width="20%">Value</th>

		</tr>

		<tbody id="fieldValuesBody">

		<tr>

			<td>&nbsp;</td><td>&nbsp;</td>

		</tr>

	<?php	

		//echo "count:".count( $fieldvalues );

		//print_r (array_values($fieldvalues));

		for ($i=0, $n=count( $fieldvalues ); $i < $n; $i++) {

			//print "count:".$i;

			$fieldvalue = $fieldvalues[$i];

			echo "<tr>\n<input type='hidden' value='".stripslashes($fieldvalue->id)."' name=field_id[$i] /><td width=\"20%\"><input type=text mosReq=0 mosLabel='Value' value='".stripslashes($fieldvalue->fieldvalue)."' name=vValues[$i] /></td>\n</tr>\n";

			

		}

		if ($i > 0)

			$i--;

		if(count( $fieldvalues )< 1) {

			echo "<tr>\n<td width=\"20%\"><input type=text mosReq=0  mosLabel='Value' value='' name=vValues[0] /></td>\n</tr>\n";

			$i=0;

		}

	?>

		</tbody>

		</table>

		</div>



				  </td></tr>

  </table>

  </td></tr>

  </table>

  <input type="hidden" name="option" value="com_jobs" />

  <input type="hidden" name="valueCount" value="<?php echo $i;?>" />

  <input type="hidden" name="task" value="" />

  <input type="hidden" name="cid" value="<?php echo $id;?>" />

  

</form>

  

<?php 

	if($row!='') {

		print "<script type=\"text/javascript\"> document.adminForm.name.readOnly=true; </script>";	

		/*print "<script type=\"text/javascript\"> document.adminForm.type.disabled=true; </script>";*/

	}

	

		print "<script type=\"text/javascript\"> disableAll(); </script>";

		print "<script type=\"text/javascript\"> selType('".$type."'); </script>";	

}

	

	function list_categories($params) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>



		<h1><?php echo _lkn_list_category;?></h1><br />

		<form action="index2.php" method="POST" name="adminForm">

			<?php

				HTML_jobs::upper();

			?>

		<table class="adminlist">

		<thead>

		<tr>

			<th class="title"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo $_config ['recordPerPage'];?>)" /></th>

			<th class="title"><strong><?php echo _lkn_id;?></strong></th>

			<th class="title"><strong><?php	echo _lkn_category_name;?></strong></th>

			<th class="title"><strong><?php	echo _lkn_published;?></strong></th>

		</tr>

	</thead>

		<?php

		$k = 0;

		$adet = $params ['count'];

		$i = 0;

		while ( $row = $_db->fetch_array () ) {

			//			print_r($row);

			$title = $row ['title'];

			$id = $row ['id'];

			$published = $row ['published'];

			$alias = $row ['alias'];

			?>

			<tr class="row<?php	echo $k;?>">

				<td align="center"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $id;	?>"	onclick="isChecked(this.checked);" /></td>

				<td align="center"><?php echo $id; ?></td>

				<td><a href="index2.php?option=com_jobs&task=edit_category&cid=<?php echo $id;?>"><?php	echo $title;?></a></td>

				<td><?php echo lknJobsFunctions::getPublishingImage( $published );?></td>

			</tr>

			<?php

			$k = 1 - $k;

			$i ++;

		}

		?>

		</table>



		<input type="hidden" name="hidemainmenu" value="0" />

		<input type="hidden" name="option" value="com_jobs" />

		<input type="hidden" name="boxchecked" value="0" />

		<input type="hidden" name="task" value="list_categories" />

	</form>

	<?php

		if ($adet != '') {

			$published = lknGetParamatre ( $_REQUEST, 'published' );

			$search = lknGetParamatre ( $_REQUEST, 'search' );

			$parent_id =(int)lknGetParamatre ( $_REQUEST, 'parent_id' );

			$toplamSayfa = ( int ) $adet;

			$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_categories&published=$published&search=$search&parent_id=$parent_id", $toplamSayfa );

			echo $sayfa->sayfaLinkiYaz ();

		}

	}



	function category_form($row = '') {

		global $_lknBaseFramework;

		$editor = new lknEditor();

		//	print_r($row);

		if ($row!='') {

			$id = $row->id;

			$parent_id = $row->parent_id;

			$title = temizleSlash ( $row->title );

			$alias = $row->alias;

			$text = temizleSlash ( $row->text );

			$meta_keywords = temizleSlash ( $row->meta_keywords );

			$meta_description = temizleSlash ( $row->meta_description );

			$published = $row->published;

			$action = _lkn_category_update;

			$task = 'update_category';

		} else {

			$id='';

			$parent_id = '';

			$title = '';

			$alias = '';

			$text = '';

			$meta_keywords = '';

			$meta_description = '';

			$published = '';

			$action = _lkn_category_add;

			$task = 'save_category';

		}

		?>



		<script language="javascript" type="text/javascript">

		<!--

		function submitbutton(pressbutton)
		{
			var form = document.adminForm;
			if (pressbutton == "list_categories" || pressbutton == "panel" || pressbutton == ""){
				submitform( pressbutton );
			}else{
				if (form.db_title.value == ""){
					alert( "Article must have a Title" );
				} else if (form.db_parent_id.value == form.id.value){
					alert( "You must select a different parent category." );
	 			} else {
					tinyMCE.triggerSave();
					submitform( pressbutton );
				}
			}
		}

		//-->

		</script>



		<h1><?php echo $action;?></h1><br />

		<form id="adminForm" name="adminForm" method="post" action="index2.php">



		<table width="100%" cellspacing="0" cellpadding="0" border="0">

		<tbody>

		<tr>

			<td valign="top">

			<table class="adminform">

				<tbody>

					<tr>

						<td>

							<?php echo lknToolTip ( _lkn_category_name_tip, _lkn_category_name, 0 );?>

						</td>

						<td>

							<input maxlength="100" size="50" value="<?php echo $title;?>" name="db_title" />

						</td>

						<td>

							<?php

								echo lkntooltip ( _lkn_published_tip, _lkn_published ) . ': ';

							?>

						</td>

						<td>

							<?php echo lknhtmlMaker::publishedSelectList ( 'db_published', $published );?>

						</td>

					</tr>

					<tr>

						<td>

							<?php

								echo lknToolTip ( _lkn_alias_tip, _lkn_alias ) . ':';

							?>

						</td>

						<td>

							<input type="text" value="<?php	echo $alias;?>" maxlength="100" size="50" id="db_alias" name="db_alias"	class="inputbox" />

						</td>

						<td>

							<?php

								echo lknToolTip ( _lkn_parent_category_tip, _lkn_parent_category ) . ': ';

							?>

						</td>

						<td>

							<?php

								$cat = new lknCategory ();

								$data = $cat->getData ();

								$selectList = lknhtmlMaker::selectList ( $data, 'db_parent_id', $parent_id );

								echo $selectList;

							?>

						</td>

					</tr>

				</tbody>

			</table>

			<table class="adminform">

				<tbody>

					<tr>

						<td>

							<?php

								echo $editor->display ( 'db_text', $text, '100%;', '350', '75', '20', array ('pagebreak', 'readmore' ) );

							?>

						</td>

					</tr>

				</tbody>

			</table>

			</td>

			<td width="320" valign="top" style="padding: 7px 13pt 0pt 5px;">

				<?php

					lknTabs::startTabPanel();

					lknTabs::startTab ( _lkn_meta );

				?>

					<table class="adminform">

						<tbody>

							<tr>

								<td>

									<?php

										echo lknToolTip ( _lkn_meta_desc_tip, _lkn_meta_desc );

									?>

								</td>

								<td>

									<textarea id="db_meta_description" name="db_meta_description" rows="5" cols="20" class="inputbox"><?php	echo $meta_description;?></textarea>

								</td>

							</tr>

							<tr>

								<td>

									<?php

										echo lknToolTip ( _lkn_meta_keywords_tip, _lkn_meta_keywords );

									?>

								</td>

								<td>

									<textarea id="db_meta_keywords" name="db_meta_keywords" rows="5" cols="20" class="inputbox"><?php echo $meta_keywords;?></textarea>

								</td>

							</tr>

							<tr>

								<td>

									<input type="button" onClick="f=document.adminForm;f.db_meta_keywords.value=f.db_title.value;" value="Add category title" class="button" />

								</td>

							</tr>

						</tbody>

					</table>

					<?php lknTabs::endTab ();?>

				<?php lknTabs::endTab();?>

			</td>

		</tr>

	</tbody>

</table>

<input type="hidden" value="<?php echo $id;	?>" name="cid" />

<input type="hidden" value="com_jobs" name="option" />

<input type="hidden" value="<?php echo $task;?>" name="task" />

</form>

<?php

	}

	

	function list_job_types($rows,$params) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>



		<h1><?php echo _lkn_list_job_types;?></h1><br />

		<form action="index2.php" method="POST" name="adminForm">

			<?php HTML_jobs::upper ();?>

		<table class="adminlist">

		<thead>

			<tr>

				<th class="title"><input type="checkbox" name="toggle" value=""	onclick="checkAll(<?php echo $_config ['recordPerPage'];?>)" /></th>

				<th class="title"><strong><?php echo _lkn_job_type_level;?></strong></th>

				<th class="title"><strong><?php echo _lkn_job_type_value;?></strong></th>

				<th class="title"><strong><?php echo _lkn_published;?></strong></th>

			</tr>

		</thead>

		<?php

		$k = 0;

		$adet = $params ['count'];

		$i = 0;

		foreach ($rows as $row){

			$title = $row->title;

			$id = $row->id;

			$published = $row->published;

			?>

			<tr class="row<?php	echo $k;?>">

				<td align="center"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $id;?>" onClick="isChecked(this.checked);" /></td>

				<td><a href="index2.php?option=com_jobs&task=edit_job_type&cid=<?php	echo $id;?>"><?php echo $title;?></a></td>

				<td><?php echo $id;?></td>

				<td><?php echo lknJobsFunctions::getPublishingImage ( $published );?></td>

			</tr>

			<?php

			$k = 1 - $k;

			$i ++;

		}



		?>

		</table>

		<input type="hidden" name="hidemainmenu" value="0" />

		<input type="hidden" name="option" value="com_jobs" />

		<input type="hidden" name="boxchecked" value="0" />

		<input type="hidden" name="task" value="list_job_types" />

	</form>

<?php

		if ($adet != '') {

			$published = lknGetParamatre ( $_REQUEST, 'published' );

			$search = lknGetParamatre ( $_REQUEST, 'search' );

			$toplamSayfa = ( int ) $adet;

			$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_job_types&published=$published&search=$search", $toplamSayfa );

			echo $sayfa->sayfaLinkiYaz();

		}

	}

	

	function job_type_form($row = '') {

		global $_lknBaseFramework;

		//	print_r($row);

		if ($row!='') {

			$id = $row->id;

			$title = temizleSlash ( $row->title );

			$published = $row->published;

			$action = _lkn_job_type_update;

		} else {

			$id='';

			$published = '';

			$title = '';



			$action = _lkn_job_type_add;

		}

		?>

		<script language="javascript" type="text/javascript">

		<!--

		function submitbutton(pressbutton)

		{

			var form = document.adminForm;

			if (pressbutton == "list_job_types" || pressbutton == "panel" || pressbutton == ""){

				submitform( pressbutton );

			}else{

				if (form.db_title.value == ""){

					alert( "You need to write a Title" );

				} else {

					submitform( pressbutton );

				}

			}

		}

		//-->

		</script>

		<h1><?php echo $action;?></h1><br />

		<form id="adminForm" name="adminForm" method="post" action="index2.php">

		<table width="100%" cellspacing="0" cellpadding="0" border="0">

			<tbody>

				<tr>

					<td valign="top">

						<table class="adminform">

							<tbody>

								<tr>

									<td><?php echo lknToolTip ( _lkn_job_type_level_tip, _lkn_job_type_level);?></td>

									<td><input maxlength="100" size="50" value="<?php echo $title;?>" name="db_title" /></td>

									<td><?php echo lknToolTip ( _lkn_published_tip, _lkn_published ) . ': '?></td>

									<td><?php echo lknhtmlMaker::publishedSelectList ( 'db_published', $published );?></td>

								</tr>

							</tbody>

						</table>

					</td>

				</tr>

			</tbody>

		</table>

		<input type="hidden" value="<?php echo $id;?>" name="cid" />

		<input type="hidden" value="com_jobs" name="option" />

		<input type="hidden" value="" name="task" />

	</form>

		<?php

	}

	

	function list_education_levels($rows,$params) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>



		<h1><?php echo _lkn_list_education_levels;?></h1><br />

		<form action="index2.php" method="POST" name="adminForm">

			<?php HTML_jobs::upper ();?>

		<table class="adminlist">

		<thead>

			<tr>

				<th class="title"><input type="checkbox" name="toggle" value=""	onclick="checkAll(<?php echo $_config ['recordPerPage'];?>)" /></th>

				<th class="title"><strong><?php echo _lkn_education_level;?></strong></th>

				<th class="title"><strong><?php echo _lkn_education_level_value;?></strong></th>

				<th class="title"><strong><?php echo _lkn_published;?></strong></th>

			</tr>

		</thead>

		<?php

		$k = 0;

		$adet = $params ['count'];

		$i = 0;

		foreach ($rows as $row){

			$title = $row->title;

			$id = $row->id;

			$published = $row->published;

			?>

			<tr class="row<?php	echo $k;?>">

				<td align="center"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $id;?>" onClick="isChecked(this.checked);" /></td>

				<td><a href="index2.php?option=com_jobs&task=edit_education_level&cid=<?php	echo $id;?>"><?php echo $title;?></a></td>

				<td><?php echo $id;?></td>

				<td><?php echo lknJobsFunctions::getPublishingImage ( $published );?></td>

			</tr>

			<?php

			$k = 1 - $k;

			$i ++;

		}



		?>

		</table>

		<input type="hidden" name="hidemainmenu" value="0" />

		<input type="hidden" name="option" value="com_jobs" />

		<input type="hidden" name="boxchecked" value="0" />

		<input type="hidden" name="task" value="list_education_levels" />

	</form>

<?php

		if ($adet != '') {

			$published = lknGetParamatre ( $_REQUEST, 'published' );

			$search = lknGetParamatre ( $_REQUEST, 'search' );

			$toplamSayfa = ( int ) $adet;

			$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_education_levels&published=$published&search=$search", $toplamSayfa );

			echo $sayfa->sayfaLinkiYaz();

		}

	}

	

	function education_level_form($row = '') {

		global $_lknBaseFramework;

		//	print_r($row);

		if ($row!='') {

			$id = $row->id;

			$title = temizleSlash ( $row->title );

			$published = $row->published;

			$action = _lkn_education_level_update;

		} else {

			$id='';

			$published = '';

			$title = '';



			$action = _lkn_education_level_add;

		}

		?>

		<script language="javascript" type="text/javascript">

		<!--

		function submitbutton(pressbutton)

		{

			var form = document.adminForm;

			if (pressbutton == "list_education_levels" || pressbutton == "panel" || pressbutton == ""){

				submitform( pressbutton );

			}else{

				if (form.db_title.value == ""){

					alert( "You need to write a Title" );

				} else {

					submitform( pressbutton );

				}

			}

		}

		//-->

		</script>

		<h1><?php echo $action;?></h1><br />

		<form id="adminForm" name="adminForm" method="post" action="index2.php">

		<table width="100%" cellspacing="0" cellpadding="0" border="0">

			<tbody>

				<tr>

					<td valign="top">

						<table class="adminform">

							<tbody>

								<tr>

									<td><?php echo lknToolTip ( _lkn_education_level_tip, _lkn_education_level);?></td>

									<td><input maxlength="100" size="50" value="<?php echo $title;?>" name="db_title" /></td>

									<td><?php echo lknToolTip ( _lkn_published_tip, _lkn_published ) . ': '?></td>

									<td><?php echo lknhtmlMaker::publishedSelectList ( 'db_published', $published );?></td>

								</tr>

							</tbody>

						</table>

					</td>

				</tr>

			</tbody>

		</table>

		<input type="hidden" value="<?php echo $id;?>" name="cid" />

		<input type="hidden" value="com_jobs" name="option" />

		<input type="hidden" value="" name="task" />

	</form>

		<?php

	}



	function list_countries($params) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>



		<h1><?php echo _lkn_list_countries;	?></h1><br />

		<form action="index2.php" method="POST" name="adminForm">

		<?php

			HTML_jobs::upper ();

		?>

		<table class="adminlist">

		<thead>

			<tr>

				<th class="title"><input type="checkbox" name="toggle" value=""	onclick="checkAll(<?php echo $_config ['recordPerPage'];?>)" /></th>

				<th class="title"><strong><?php	echo _lkn_id;?></strong></th>

				<th class="title"><strong><?php echo _lkn_country;?></strong></th>

				<th class="title"><strong><?php echo _lkn_published;?></strong></th>

			</tr>

		</thead>

		<?php

		$k = 0;

		$adet = $params ['count'];

		$i = 0;

		while ( $row = $_db->fetch_array () ) {

			$title = $row ['title'];

			$id = $row ['id'];

			$published = $row ['published'];



			?>

			<tr class="row<?php	echo $k;?>">

				<td align="center"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $id;?>" onClick="isChecked(this.checked);" /></td>

				<td align="center"><?php echo $id;?></td>

				<td><a href="index2.php?option=com_jobs&task=edit_country&cid=<?php	echo $id;?>"><?php echo $title;?></a></td>

				<td><?php echo lknJobsFunctions::getPublishingImage ( $published );?></td>

			</tr>

			<?php

			$k = 1 - $k;

			$i ++;

		}



		?>

		</table>

		<input type="hidden" name="hidemainmenu" value="0" />

		<input type="hidden" name="option" value="com_jobs" />

		<input type="hidden" name="boxchecked" value="0" />

		<input type="hidden" name="task" value="list_countries" />

	</form>

<?php

		if ($adet != '') {

			$published = lknGetParamatre ( $_REQUEST, 'published' );

			$search = lknGetParamatre ( $_REQUEST, 'search' );

			$toplamSayfa = ( int ) $adet;

			$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_countries&published=$published&search=$search", $toplamSayfa );

			echo $sayfa->sayfaLinkiYaz ();

		}

	}



	function country_form($row = '') {

		global $_lknBaseFramework;

		//	print_r($row);

		if ($row!='') {

			$id = $row->id;

			$title = temizleSlash ( $row->title );

			$published = $row->published;

			$action = _lkn_country_update;

			$task = 'update_country';

		} else {

			$id='';

			$published = '';

			$title = '';



			$action = _lkn_country_add;

			$task = 'save_country';

		}

		?>

		<script language="javascript" type="text/javascript">

		<!--

		function submitbutton(pressbutton)

		{

			var form = document.adminForm;

			if (pressbutton == "list_countries" || pressbutton == "panel" || pressbutton == ""){

				submitform( pressbutton );

			}else{

				if (form.db_title.value == ""){

					alert("El artículo debe tener un título");

				} else {

					submitform( pressbutton );

				}

			}

		}

		//-->

		</script>

		<h1><?php echo $action;?></h1><br />

		<form id="adminForm" name="adminForm" method="post" action="index2.php">

		<table width="100%" cellspacing="0" cellpadding="0" border="0">

			<tbody>

				<tr>

					<td valign="top">

						<table class="adminform">

							<tbody>

								<tr>

									<td>

									<?php

										echo lknToolTip ( _lkn_country_tip, _lkn_country, 0 );

									?>

									</td>

									<td>

										<input maxlength="100" size="50" value="<?php echo $title;?>" name="db_title" />

									</td>

									<td>

										<?php echo lknToolTip ( _lkn_published_tip, _lkn_published ) . ': '?>

									</td>

									<td>

										<?php

											echo lknhtmlMaker::publishedSelectList ( 'db_published', $published );

										?>

									</td>

								</tr>

							</tbody>

						</table>

					</td>

				</tr>

			</tbody>

		</table>

		<input type="hidden" value="<?php echo $id;?>" name="cid" />

		<input type="hidden" value="com_jobs" name="option" />

		<input type="hidden" value="<?php echo $task;?>" name="task" />

	</form>

		<?php

	}

	

	function list_files($rows,$count) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		$files_active=$_config['files_active'];

		if ($files_active=='0') {

			echo _lkn_config_files_closed;

		}

		

		?>

			<h1><?php echo _lkn_list_files;?></h1><br />

			<form action="index2.php" method="POST" name="adminForm">

			<?php

				HTML_jobs::upper ();

			?>

			<table class="adminlist">

			<thead>

				<tr>

					<th class="title"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo $_config ['recordPerPage'];?>)" /></th>

					<th class="title"><strong><?php	echo _lkn_id;?></strong></th>

					<th class="title"><strong><?php	echo _lkn_username;?></strong></th>

					<th class="title"><strong><?php	echo _lkn_files_file_name;?></strong></th>

					<th class="title"><strong><?php echo _lkn_file_hits?></strong></th>

					<th class="title"><strong><?php echo _lkn_published;?></strong></th>

				</tr>

			</thead>

				<?php

		if ($count>0) {		

				$k = 1;

				$i = 0;

				foreach ($rows as $row ) {



					//print_r($row);

					$id=$row->id;

					$user_name = $row->username;

					$file_name=$row->file_name;

					$file_hits=$row->hits;

					$published=lknJobsFunctions::getPublishingImage( $row->published );

					?>

					<tr class="row<?php	echo $k;?>">

						<td align="center"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php	echo $id;?>" onClick="isChecked(this.checked);" /></td>

						<td align="center"><?php echo $id;?></td>

						<td align="center"><a href="index2.php?option=com_jobs&task=list_files&search=<?php echo $user_name;?>"><?php echo $user_name;?></a></td>

						<td align="center"><a href="index2.php?option=com_jobs&task=edit_file&cid=<?php echo $id;?>"><?php echo $file_name;?></a></td>

						<td align="center"><?php echo $file_hits;?></td>

						<td align="center"><?php echo $published;?></td>

					</tr>

					<?php

					$k = 1 - $k;

					$i ++;

				}

		}else {

			echo '<tr><td colspan="5">' . _lkn_list_files_no . '</td></tr>';

		}



				?>

				</table>

				<input type="hidden" name="hidemainmenu" value="0" />

				<input type="hidden" name="option" value="com_jobs" />

				<input type="hidden" name="boxchecked" value="0" />

				<input type="hidden" name="task" value="list_files" />

			</form>

		<?php

				if ($count != '') {

					$search = lknGetParamatre ( $_REQUEST, 'search' );

					$published = lknGetParamatre ( $_REQUEST, 'published' );

					$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_files&search=$search&published=$published", $count );

					echo $sayfa->sayfaLinkiYaz ();

				}

	}

	

	function file_form($row = '',$row_resumes='') {

		global $_lknBaseFramework, $_config;



		$editor = new lknEditor();

		//	print_r($row);

		if ($row!='') {

			$id = $row->id;

			$memberid=$row->memberid;

			$m_extra='DISABLED';

			$file_name=$row->file_name;

			$file="<a href=\"".LIVE_SITE . $_config['files_folder'] . $file_name."\">$file_name</a>";

			$published = $row->published;

			$file_notes=$row->file_notes;

			$hits=$row->hits;

			$action = _lkn_files_file_update;

			$task = 'update_file';

		} else {

			$id = '';

			$memberid='';

			$m_extra='';

			$file='-';

			$hits='-';

			$published = '0';

			$file_notes='';

			$action = _lkn_files_file_new;

			$task = 'save_file';

		}

		?>

		<script language='javascript' type='text/javascript'>

		<!--

		function submitbutton(pressbutton)

		{

			var form = document.adminForm;

			if (pressbutton == "list_files" || pressbutton == "panel" || pressbutton == ""){

				submitform( pressbutton );

			}else{

				if ((form.db_file.value == '') && (form.old_file.value == ''))
				{

					alert( "You must select the file.");

	 			} else {

					tinyMCE.triggerSave();

					submitform( pressbutton );

				}

			}

		}

	//-->

	</script>

	<h1><?php echo $action;?></h1><br />

		<form id="adminForm" name="adminForm" method="post" action="index2.php"	enctype="multipart/form-data">

					<?php lknTabs::startTabPanel ();?>

					<?php lknTabs::startTab ( $action );?>

						<table class="adminform">

							<tbody>

								<tr>

									<td><?php echo _lkn_files_file_name  . ': ';?></td>

									<td><?php echo $file;?></td>

									<td><?php echo lknToolTip ( _lkn_published_tip, _lkn_published ) . ': ';?></td>

									<td><?php echo lknhtmlMaker::publishedSelectList ( 'db_published', $published );?>

									</td>

								</tr>

								<tr>

									<td><?php echo lknToolTip ( _lkn_owner_tip, _lkn_files_owner ) . ': ';?></td>

									<?php //@todo:editleme sırasında burada yalnızca kullanıcı adı olsun.?>

									<td><?php echo lknJobsFunctions::getUsers( 'db_memberid', $memberid,$m_extra );?></td>

									<td>

										<?php echo _lkn_file_hits . ': ';?>

									</td>

									<td>

										<input maxlength="100" size="50" value="<?php echo $hits;?>" name="db_hits" />

									</td>

								</tr>

								<tr>

									<td><?php echo lknToolTip ( _lkn_file_notes_tip, _lkn_file_notes ) . ': ';?></td>

									<td><textarea rows="10" cols="30" name="db_file_notes"><?php echo $file_notes ;?></textarea></td>

									<td></td>

									<td></td>

								</tr>

							</tbody>

						</table>

						<table class="adminform">

							<tbody>

								<tr>

									<td><?php echo lknToolTip ( _lkn_file_upload_tip, $action );?></td>

								</tr>

								<tr>

									<td>

										<?php

											$allowed_images = $_config['files_file_types'] . ',' . $_config['files_image_types'];

											$image_size = $_config['files_size'];

											?>

												<input type="file" name="db_file_name" size="32" />

												<input type="hidden" value="<?php echo $file_name;?>" name="old_file" />

									</td>

								</tr>

								<tr>

									<td>

									<?php

										//Only {IMAGE_TYPES} images are allowed. You and upload maximum {LOGO_SIZE} Kb images size');

										//Only jpeg,jpg,gif,png images are allowed. You and upload maximum 200 Kb images size

										$msg = _lkn_company_logo_desc;

										$msg = str_replace ( '{IMAGE_TYPES}', $allowed_images, $msg );

										$msg = str_replace ( '{LOGO_SIZE}', $image_size, $msg );

	

										echo $msg;

										?>

	

									</td>

								</tr>

						</table>

				<?php lknTabs::endTab ();			

				if ($row!='') {

					lknTabs::startTab(_lkn_resume);

					

					echo _lkn_file_is_used .'<br />';

					?>

				<table class="adminlist">

					<thead>

						<tr>

							<th class="title"><strong><?php echo _lkn_id;?></strong></th>

							<th class="title"><strong><?php	echo _lkn_resume;?></strong></th>

							<th class="title"><strong><?php	echo _lkn_resume_hits;?></strong></th>

							<th class="title"><strong><?php	echo _lkn_alias;?></strong></th>

							<th class="title"><strong><?php	echo _lkn_published;?></strong></th>

						</tr>

					</thead>

					<?php 

					

				$k = 0;

				$count = count($row_resumes);

				if ($count>0) {

				

				$i = 0;

				$k=1;

				foreach ($row_resumes as $row) {

					$title = $row->title;

					$resume_id = $row->id;

					$published = $row->published;

					$hits = $row->hits;

					$alias = $row->alias;

					?>

					<tr class="row<?php	echo $k;?>">

						<td align="center"><?php echo $id;?></td>

						<td><a href="index2.php?option=com_jobs&task=edit_resume&cid=<?php echo $resume_id;?>"><?php echo $title;?></a></td>

						<td><?php echo $hits;?></td>

						<td><?php echo $alias;?></td>

						<td><?php echo lknJobsFunctions::getPublishingImage ( $published );?></td>

					</tr>



					<?php

					$k = 1 - $k;

					$i ++;

				}

					

				}

				?>

				</table>
                
                <?

				}

				lknTabs::endTab();

				lknTabs::endTabPanel ();

				?>

		<input type="hidden" value="<?php echo $id;?>" name="cid" />

		<input type="hidden" value="com_jobs" name="option" />

		<input type="hidden" value="<?php echo $task;?>" name="task" />

		<input type="hidden" value="1" name="boxchecked"/>

	</form>

		<?php

	}

	

	function list_employers($rows,$count) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>

			<h1><?php echo _lkn_list_employers;?></h1><br />

			<form action="index2.php" method="POST" name="adminForm">

			<?php 
			HTML_jobs::upper();
			?>

			<table class="adminlist">

			<thead>

				<tr>

					<th class="title"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo $_config ['recordPerPage'];?>)" /></th>

					<th class="title"><strong><?php	echo _lkn_id;?></strong></th>

					<th class="title"><strong><?php	echo _lkn_username;?></strong></th>

					<th class="title"><strong><?php	echo _lkn_list_employers_count;?></strong></th>

					<th class="title"><strong><?php	echo _lkn_jobs;?></strong></th>

					<th class="title"><strong><?php	echo _lkn_config_templates;?></strong></th>

				</tr>

			</thead>

				<?php
				$k = 1;

				$i = 0;

				foreach ($rows as $row ) {
					$id=$row->id;

					$company_owner = $row->username;

					$company_count=$row->company_count;

					$link_c="index2.php?option=com_jobs&task=list_companies&memberid=$id";

					$link_j="index2.php?option=com_jobs&task=list_jobs&memberid=$id";

					$link_et="index2.php?option=com_jobs&task=list_email_templates&memberid=$id";
					?>
					<tr class="row<?php	echo $k;?>">
						<td align="center">
                        	<input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" 
                            value="<?php	echo $id;?>" onClick="isChecked(this.checked);" />
                      	</td>
						<td align="center"><?php echo $id;?></td>

						<td><?php echo $company_owner;?></td>

						<td><a href="<?php echo $link_c;?>"><?php echo $company_count;?></a></td>

						<td><a href="<?php echo $link_j;?>"><?php echo _lkn_list_employers_jobs;?></a></td>

						<td><a href="<?php echo $link_et;?>"><?php echo _lkn_list_employers_et;?></a></td>

					</tr>

					<?php

					$k = 1 - $k;

					$i ++;

				}



				?>

				</table>

				<input type="hidden" name="hidemainmenu" value="0" />

				<input type="hidden" name="option" value="com_jobs" />

				<input type="hidden" name="boxchecked" value="0" />

				<input type="hidden" name="task" value="list_employers" />

			</form>

		<?php

				if ($count != '') {

					$search = lknGetParamatre ( $_REQUEST, 'search' );

					$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_employers&search=$search", $count );

					echo $sayfa->sayfaLinkiYaz ();

				}

	}

	

	function list_workers($rows,$count) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>

			<h1><?php echo _lkn_list_workers;?></h1><br />

			<form action="index2.php" method="POST" name="adminForm">

			<?php
				HTML_jobs::upper ();
			?>

			<table class="adminlist">

			<thead>

				<tr>

					<th class="title"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo $_config ['recordPerPage'];?>)" /></th>

					<th class="title"><strong><?php	echo _lkn_id;?></strong></th>

					<th class="title"><strong><?php	echo _lkn_username;?></strong></th>

					<th class="title"><strong><?php	echo _lkn_list_workers_count;?></strong></th>

					<th class="title"><?php	echo _lkn_list_applications;?></th>

					<th class="title"><?php	echo _lkn_list_cover_letters;?></th>

					<th class="title"><?php	echo _lkn_list_files;?></th>

				</tr>

			</thead>

				<?php



				$k = 1;

				$i = 0;

				foreach ($rows as $row ) {

					$id=$row->id;

					$resume_owner = $row->username;

					$resume_count=$row->resume_count;

					$link_c="index2.php?option=com_jobs&task=list_resumes&memberid=$id";

					$link_a="index2.php?option=com_jobs&task=list_applications&search=$id";

					$link_cover="index2.php?option=com_jobs&task=list_cover_letters&memberid=$id";

					$link_f="index2.php?option=com_jobs&task=list_files&search=$resume_owner";

					?>

					<tr class="row<?php	echo $k;?>">

						<td align="center"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php	echo $id;?>" onClick="isChecked(this.checked);" /></td>

						<td align="center"><?php echo $id;?></td>

						<td><?php echo $resume_owner;?></td>

						<td><a href="<?php echo $link_c;?>"><?php echo $resume_count;?></a></td>

						<td><a href="<?php echo $link_a;?>"><?php echo _lkn_list_applications;?></a></td>

						<td><a href="<?php echo $link_cover;?>"><?php echo _lkn_list_cover_letters;?></a></td>

						<td><a href="<?php echo $link_f;?>"><?php echo _lkn_list_files;?></a></td>

					</tr>

					<?php

					$k = 1 - $k;

					$i ++;

				}



				?>

				</table>

				<input type="hidden" name="hidemainmenu" value="0" />

				<input type="hidden" name="option" value="com_jobs" />

				<input type="hidden" name="boxchecked" value="0" />

				<input type="hidden" name="task" value="list_workers" />

			</form>

		<?php

				if ($count != '') {

					$search = lknGetParamatre ( $_REQUEST, 'search' );

					$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_workers&search=$search", $count );

					echo $sayfa->sayfaLinkiYaz ();

				}

	}



	function list_companies($params) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>

			<h1><?php echo _lkn_list_company;?></h1>
            <?php
			function &array_envia($array) 
			{
				$tmp = serialize($array);
				$tmp = urlencode($tmp);             
				return $tmp;
			}
			
			?>


			<form action="index2.php" method="POST" name="adminForm">
           	<table class="adminform"> 
            <tbody>
            <tr>
            <td width="100%">
         	<div id="titledescargar" style="margin-top:20px; width:auto;height:auto;">
            <a href="administrator/index.php?option=com_jobs&task=list_companies" onClick="document.adminForm.submit()">
            </a>Descargar: &nbsp;&nbsp;&nbsp;
            </div>
              <div id="logoexcelmove" style="margin-left: 70px;margin-top: -20px;">
            <img src="components/com_jobs/images/Excel.png" width="30" height="30" onClick="document.adminForm.submit()" style="cursor:pointer;" title="Clic para descargar"/>
            </div>
            <div style="color:#0B55C4;margin-left: 65px;width: auto;">
           		EXCEL
          	</div>
            <br />
            </td>
            </tr>
            </tbody>
            </table>
			<?php
				HTML_jobs::upper ();
				if(!empty($_POST['cid'] ) ){
				  $array =  &array_envia($_POST['cid']);
				  echo '<script>';
				  echo 'window.open("components/com_jobs/mysqlcompanies.php?cid='.$array.'" , "ventana1" , "width=500,height=500,scrollbars=SI")';
				  echo '</script>';
			  }
			?>
         
			<?php echo $live_site; ?>
			<table class="adminlist">

			<thead>

				<tr>

					<th class="title"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo $_config ['recordPerPage'];?>)" /></th>

					<th class="title"><strong><?php	echo _lkn_id;?></strong></th>
                    
                    <th class="title"><strong><?php echo _lkn_company_contactname;?></strong></th>

					<th class="title"><strong><?php echo _lkn_company;?></strong></th>
                    
					<th class="title"><strong><?php	echo _lkn_country;?></strong></th>

					<th class="title"><strong><?php	echo _lkn_user_name_bolsa;?></strong></th>
                    
					<th class="title"><strong><?php echo _lkn_company_contactphone;?></strong></th>
                    
                    <th class="title"><strong><?php echo _lkn_published;?></strong></th>

				</tr>

			</thead>

				<?php
				$k = 1;
				$adet = $params ['count'];
				$i = 0;
				while ( $row = $_db->fetch_array () ) 
				{
					$title = $row ['title'];
					$id = $row ['id'];
					$country = $row ['country'];
					$published = $row ['published'];
					$alias = $row ['alias'];
					$company_owner = $row ['company_owner'];
					$namecontact = $row ['contactname'];
					$phoneconact = $row ['contactphone'];
					?>

					<tr class="row<?php	echo $k;?>">

						<td align="center"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php	echo $id;?>" onClick="isChecked(this.checked);" /></td>

						<td align="center"><?php echo $id;?></td>
                        
                        <td><?php echo $namecontact;?></td>

						<td><a href="index2.php?option=com_jobs&task=edit_company&cid=<?php	echo $id;?>"><?php echo $title;?></a></td>

						<td><?php echo $country;?></td>

						<td><?php echo $company_owner;?></td>
               
                        <td><?php echo $phoneconact;?></td>
                        
                        <td><?php echo lknJobsFunctions::getPublishingImage ($published);?></td>

					</tr>

					<?php

					$k = 1 - $k;

					$i ++;

				}



				?>

				</table>

				<input type="hidden" name="hidemainmenu" value="0" />

				<input type="hidden" name="option" value="com_jobs" />

				<input type="hidden" name="boxchecked" value="0" />

				<input type="hidden" name="task" value="list_companies" />

			</form>

		<?php

				if ($adet != '') {

					$published = lknGetParamatre ( $_REQUEST, 'published' );

					$search = lknGetParamatre ( $_REQUEST, 'search' );

					$memberid = lknGetParamatre ( $_REQUEST, 'memberid' );

					$county = lknGetParamatre ( $_REQUEST, 'county' );

					$toplamSayfa = ( int ) $adet;

					$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_companies&published=$published&search=$search&memberid=$memberid&county=$county", $toplamSayfa );

					echo $sayfa->sayfaLinkiYaz ();

				}

	}



	function company_form($row = '') {
		global $_lknBaseFramework, $_config, $_db;
		$editor = new lknEditor();

		if ($row!='') {

			$id = $row->id;

			$title = temizleSlash ( $row->title );

			$alias = $row->alias;

			$logo = $row->logo;

			$description = temizleSlash ( $row->description );

			$address = temizleSlash ( $row->address );

			$city = temizleSlash ( $row->city );

			$country = $row->country;

			$zipcode = $row->zipcode;

			$companyurl = temizleSlash ( $row->companyurl );

			$contactname = temizleSlash ( $row->contactname );
			
			//<macf>
			//2011-02-03
			$rhumanos = temizleSlash ( $row->rhumanos );

			$contactphone = $row->contactphone;

			$contactemail = $row->contactemail;

			$meta_keywords = temizleSlash ( $row->meta_keywords );

			$meta_description = temizleSlash ( $row->meta_description );

			$memberid = $row->memberid;

			$created = $row->created;

			$published = $row->published;

			$action = _lkn_company_update;

			$task = 'update_company';

		} else {

			$id='';

			$title = '';

			$alias = '';

			$logo = '';

			$description = '';

			$address = '';

			$city = '';

			$country = '';

			$zipcode = '';

			$companyurl = '';

			$contactname = '';
			
			//<macf>
			//2011-02-03
			$rhumanos = '';

			$contactphone = '';

			$contactemail = '';

			$meta_keywords = '';

			$meta_description = '';

			$memberid = '';

			$created = '';

			$published = '';



			$action = _lkn_company_add;

			$task = 'save_company';

		}
		
		?>

		<script language='javascript' type='text/javascript'>

		<!--

		function submitbutton(pressbutton)

		{

			var form = document.adminForm;
			var reason="";

			if (pressbutton == "list_companies" || pressbutton == "panel" || pressbutton == "delete_company" || pressbutton == ""){

				submitform( pressbutton );

			}else{
			
				  reason += validateEmpty(form.db_title,"<?php echo _lkn_error_form_company_title;?>");
				  reason += validateEmpty(form.db_country,"<?php echo _lkn_error_form_company_country;?>");
				  reason += validateEmpty(form.db_contactemail,"<?php echo _lkn_error_form_company_email;?>");
				  //<macf>
				  //agregado 2011-02-02
				  reason += validateEmpty(form.db_logo,"<?php echo _lkn_error_form_company_logo;?>");
				  reason += validateEmpty(form.db_address,"<?php echo _lkn_error_form_company_address;?>");
				  reason += validateEmpty(form.db_city,"<?php echo _lkn_error_form_company_city;?>");
				  reason += validateEmpty(form.db_zipcode,"<?php echo _lkn_error_form_company_zipcode;?>");
				  reason += validateEmpty(form.db_companyurl,"<?php echo _lkn_error_form_company_companyurl;?>");
				  reason += validateEmpty(form.db_contactname,"<?php echo _lkn_error_form_company_contactname;?>");
				  reason += validateEmpty(form.db_rhumanos,"<?php echo _lkn_error_form_company_rhumanos;?>");
				  reason += validateEmpty(form.db_contactphone,"<?php echo _lkn_error_form_company_contactphone;?>");
				  reason += validateEmpty(form.db_contactemail,"<?php echo _lkn_error_form_company_contactemail;?>");
		
					
				  if (form.db_memberid.value == ''){
					reason += "Debe seleccionar el representante legal de la compañía.";
					form.db_memberid.style.background = 'Yellow';
				  } 
				  if (reason != "") {
					alert("<?php echo _lkn_error_form;?>\n" + reason);
				  }else {

					tinyMCE.triggerSave();

					submitform( pressbutton );

				}

			}

		}
	
	//-->

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

		<form id="adminForm" name="adminForm" method="post" action="index2.php"	enctype="multipart/form-data">

		<table width="100%" cellspacing="0" cellpadding="0" border="0" >
		<tbody>
        <tr>
        <td valign="top">
        <table class="adminform">
        <tbody>
        <tr>
        <td>
		<?php
        	echo lknToolTip ( _lkn_company_tip, _lkn_company ) . ': ';
		?>
        </td>
        <td>
        <input maxlength="100" size="50" value="<?php echo $title;?>" name="db_title" />
        </td>
		<td><?php echo lknToolTip ( _lkn_published_tip, _lkn_published ) . ': ';?></td>
		<td><?php echo lknhtmlMaker::publishedSelectList ( 'db_published', $published );?>
		<input type="hidden" name="old_published" value="<?php echo $published;?>"/>
		</td>
		</tr>

								<tr>

									<td><?php echo lknToolTip ( _lkn_alias_tip, _lkn_alias ) . ': ';?></td>

									<td><input type="text" value="<?php echo $alias;?>"	maxlength="100" size="50" id="db_alias" name="db_alias"	class="inputbox" /></td>

									<td>

										<?php

											echo lknToolTip ( _lkn_owner_tip, _lkn_company_owner ) . ': ';

										?>

									</td>

									<td>
                                   <!--MACF-->
                                    <?php
 
										//echo lknJobsFunctions::getUsers ( 'db_memberid', $memberid );
										if(!empty($memberid) ){
											 
											$UserJ = "Select c.*  from #__users as c where c.id=".$memberid;
											$_db->query($UserJ);
											$_db->setQuery();  
											$userTemplate = $_db->loadObject();
 											echo "<b>".$userTemplate->name."<b/>";
										}
									?>
									<a href="components/com_jobs/usersearch.php" 
                                    onClick="var popup = window.open(this.href, this.target, 'width=400,height=400');
                                    		popup.focus();return false;">
                                    	Clic para seleccionar usuario
                                    </a>
                     				<input type="hidden" value="<?php echo $memberid; ?>" size="20" id="db_memberid" name="db_memberid"
                                    class="inputbox" onKeyPress="ponerValor();" />
									<?php
                                    	//echo lknJobsFunctions::getUsers ( 'db_memberid', $memberid );
									?>
									</td>

								</tr>

							</tbody>

						</table>

						<table class="adminform">

						<tbody>

							<tr>

								<td>

									<?php

										echo $editor->display ( 'db_description', $description, '100%;', '350', '75', '20', array ('pagebreak', 'readmore' ) );

									?>

								</td>

							</tr>

						</tbody>

					</table>

					</td>

					<td width="320" valign="top" style="padding: 7px 13pt 0pt 5px;">

					<?php

						lknTabs::startTabPanel ();

						lknTabs::startTab ( _lkn_meta );

					?>

						<table class="adminform">

						<tbody>

							<tr>

								<td>

									<?php

										echo lknToolTip ( _lkn_meta_desc_tip, _lkn_meta_desc );

									?>

								</td>

								<td>

									<textarea id="db_meta_description" name="db_meta_description" rows="5" cols="20" class="inputbox"><?php	echo $meta_description;?></textarea>

								</td>

							</tr>

							<tr>

								<td>

									<?php

										echo lknToolTip ( _lkn_meta_keywords_tip, _lkn_meta_keywords );

									?>

								</td>

								<td>

									<textarea id="db_meta_keywords" name="db_meta_keywords"	rows="5" cols="20" class="inputbox"><?php echo $meta_keywords;?></textarea>

								</td>

							</tr>

							<tr>

								<td>

									<input type="button" onClick="f=document.adminForm;f.db_meta_keywords.value=f.db_title.value;" value="Add category title" class="button" />

								</td>

							</tr>

						</tbody>

					</table>

				<?php



				lknTabs::endTab();

				lknTabs::startTab ( _lkn_company_logo );

				?>

				<table class="adminform">

						<tbody>

							<tr>

								<td>

									<?php

										echo lknToolTip ( _lkn_company_logo_tip, _lkn_company_logo );

									?>

								</td>

							</tr>

							<tr>

								<td>

									<?php

										$logo_folder = $_config ['logo_image_folder'];

										$allowed_images = $_config ['allowedimages'];

										$image_size = $_config ['uploadSizeLimit'];

										$logo_folder = LIVE_SITE . $logo_folder;

										?>

											<input type="file" name="db_logo" size="32" />

											<input type="hidden" value="<?php echo $logo;?>" name="old_logo" />

										<?php

											if ($row!='' and $logo != '') {

										?>

											<img src="<?php	echo $logo_folder . $logo;?>" name="imagelib" width="80" height="80" border="2" alt="Preview" />

										<?php

											}

										?>

								</td>

							</tr>

							<tr>

								<td>

								<?php

									//Only {IMAGE_TYPES} images are allowed. You and upload maximum {LOGO_SIZE} Kb images size');

									//Only jpeg,jpg,gif,png images are allowed. You and upload maximum 200 Kb images size

									$msg = _lkn_company_logo_desc;

									$msg = str_replace ( '{IMAGE_TYPES}', $allowed_images, $msg );

									$msg = str_replace ( '{LOGO_SIZE}', $image_size, $msg );




									echo $msg;

									?>



								</td>

							</tr>

					</table>

				<?php lknTabs::endTab ();

				lknTabs::startTab ( _lkn_company_details );

				?>


				<table class="adminform" border="1">

						<tr>

							<td>

								<?php echo lknToolTip ( _lkn_company_address_tip, _lkn_company_address );?>

							</td>

							<td>

								<textarea name="db_address" id="db_address" cols="30" rows="5"><?php echo $address;?></textarea>

							</td>

						</tr>

						<tr>

							<td>

								<?php echo lknToolTip ( _lkn_company_rhumanos_tip, _lkn_rhumanos );?>

							</td>

							<td>

								<input name="db_rhumanos" id="db_rhumanos" size="30" maxlength="100"  value="<?php echo $rhumanos;?>"  >

							</td>

						</tr>
                        
						<tr>

							<td>

								<?php

									echo lknToolTip ( _lkn_company_country_tip, _lkn_country );

								?>

							</td>

							<td>

								<?php

									echo lknJobsFunctions::getJobCountries ( 'db_country', $country );

								?>

							</td>

						</tr>

						<tr>

							<td>

								<?php

									echo lknToolTip ( _lkn_company_city_tip, _lkn_company_city );

								?>

							</td>

							<td>	
								<input type="text" name="db_city" id="db_city" size="30" maxlength="100" value="<?php echo $city;?>">

							</td>

						</tr>

						<tr>

							<td>

								<?php

									echo lknToolTip ( _lkn_company_zipcode_tip, _lkn_company_zipcode );

								?>

							</td>

							<td>

								<input type="text" name="db_zipcode" id="db_zipcode" size="30" maxlength="10" value="<?php	echo $zipcode;?>">

							</td>

						</tr>

						<tr>

							<td>

								<?php

									echo lknToolTip ( _lkn_company_companyurl_tip, _lkn_company_companyurl );

								?>

							</td>

							<td>

								<input type="text" name="db_companyurl" id="db_companyurl" size="30" maxlength="100" value="<?php echo $companyurl;?>">

							</td>

						</tr>

						<tr>

							<td>

								<?php

									echo lknToolTip ( _lkn_company_contactname_tip, _lkn_company_contactname );

								?>

							</td>

							<td>

								<input type="text" name="db_contactname" id="db_contactname" size="30" maxlength="100" value="<?php	echo $contactname;?>">

							</td>

						</tr>

						<tr>

							<td>

								<?php

									echo lknToolTip ( _lkn_company_contactphone_tip, _lkn_company_contactphone );

								?>

							</td>

							<td>

								<input type="text" name="db_contactphone" id="db_contactphone" size="30" maxlength="100" value="<?php echo $contactphone;?>">

							</td>

						</tr>

						<tr>

							<td>

								<?php

									echo lknToolTip ( _lkn_company_contactemail_tip, _lkn_company_contactemail );

								?>

							</td>

							<td>

								<input type="text" name="db_contactemail" id="db_contactemail" size="30" maxlength="100" value="<?php echo $contactemail;?>">

							</td>

						</tr>

					</table>

				<?php lknTabs::endTab();



				if ($row!='') {

					//eğer yeni ekleniyorsa kimin sahip olacağını bilemeyiz

					//bu tab bu yüzden yeni eklemelerde gereksiz

					lknTabs::startTab ( _lkn_company_owner_credits );

					?>

					<table class="adminform">

						<tr>

							<td>

							<a target="_blank" href="index2.php?option=com_jobs&task=edit_credit_history&cid=<?php echo $memberid;?>"><?php	echo _lkn_company_owner_credits;?></a>

							</td>

						</tr>

					</table>

				<?php lknTabs::endTab ();

				}
				?>
            
                <?php

				lknTabs::endTabPanel ();

				?>

			</td>

		</tr>

	</tbody>

	</table>

		<input type="hidden" value="<?php echo $id;?>" name="cid" />

		<?php

			if ($row == '') {

				//eğer yeni kayıt ekliyorsak bunu eklenme tarihini yaz

				$date = new lknDate();

				$date = $date->getDate ();

				echo "<input type=\"hidden\" value=\"$date\" name=\"db_created\"/>";

			}

		?>

		<input type="hidden" value="com_jobs" name="option" />

		<input type="hidden" value="<?php echo $task;?>" name="task" />

		<input type="hidden" value="1" name="boxchecked"/>

	</form>

		<?php

	}



	function list_jobs($rows, $params) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>

		<h1><?php echo _lkn_list_jobs;?></h1><br />

			<form action="index2.php" method="POST" name="adminForm">

			<?php HTML_jobs::upper();?>

			<table class="adminlist">

				<thead>

					<tr>

						<th class="title"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php	echo $_config ['recordPerPage'];?>)" /></th>

						<th class="title"><strong><?php echo _lkn_id;?></strong></th>
                        
                        <th class="title"><strong><?php	echo _lkn_company;?></strong></th>
				
						<th class="title"><strong><?php	echo _lkn_job;?></strong></th>

						<th class="title"><strong><?php	echo _lkn_category_name;?></strong></th>

						<th class="title"><strong><?php	echo _lkn_user_name_bolsa;?></strong></th>

						<th class="title"><strong><?php	echo _lkn_published;?></strong></th>

					</tr>

				</thead>

			<?php

			$k = 0;

			$adet = $params['count'];

			$i = 0;

			foreach ( $rows as $row ) {

				//			print_r($row);

				$title = temizleSlash ( $row->title );

				$id = $row->id;

				$published = $row->published;

				$alias = $row->alias;

				$company_name = temizleSlash ( $row->company_name );

				$category_name = temizleSlash ( $row->category_name );

				$company_owner=$row->company_owner;

				

		?>

			<tr class="row<?php	echo $k;?>">

				<td align="center">

					<input type="checkbox" id="cb<?php	echo $i;?>"	name="cid[]" value="<?php echo $id;?>" onClick="isChecked(this.checked);" />
                    </td>

					<td align="center"><?php echo $id;?></td>
                    
                    <td><?php echo $company_name;?></td>

					<td><a	href="index2.php?option=com_jobs&task=edit_job&cid=<?php echo $id;?>"><?php echo $title;?></a></td>

					<td><?php echo $category_name;?></td>

					<td><?php echo $company_owner;?></td>

					<td><?php echo lknJobsFunctions::getPublishingImage ( $published );?></td>

			</tr>

		<?php

			$k = 1 - $k;

			$i ++;

		}

	?>

	</table>

		<input type="hidden" name="hidemainmenu" value="0" />

		<input type="hidden" name="option" value="com_jobs" />

		<input type="hidden" name="boxchecked" value="0" />

		<input type="hidden" name="task" value="list_jobs" />

	</form>

		<?php

			if ($adet != '') {

				$published = lknGetParamatre ( $_REQUEST, 'published' );

				$search = lknGetParamatre ( $_REQUEST, 'search' );

				$cat_id = lknGetParamatre ( $_REQUEST, 'cat_id' );

				$toplamSayfa = ( int ) $adet;

				$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_jobs&published=$published&search=$search&cat_id=$cat_id", $toplamSayfa );

					echo $sayfa->sayfaLinkiYaz ();

			}

	}



	function job_form($row = '') {

		global $_lknBaseFramework, $_config, $_db;



		$editor = new lknEditor ( );

		//	print_r($row);

		if ($row!='') {

			$id = $row->id;

			$title = temizleSlash($row->title);

			$alias = $row->alias;

			$reference = $row->reference;

			$number_of_jobs = $row->number_of_jobs;

			$job_type = $row->job_type;

			$description = temizleSlash ( $row->description );

			$country = $row->country;

			$city=temizleSlash($row->city);

			$state=temizleSlash($row->state);

			$hits = $row->hits;

			$hide_company_name=$row->hide_company_name;

			$qualifications = temizleSlash ( $row->qualifications );

			$experience = $row->experience;

			$degree = $row->degree;

			$cat_id = $row->cat_id; 

			$company_id = $row->company_id;

			$salary = $row->salary;

			$show_salary = $row->show_salary;

			$created = $row->created; //

			$publish_up = $row->publish_up;

			$publish_down = $row->publish_down;

			$meta_keywords = temizleSlash ( $row->meta_keywords );

			$meta_description = temizleSlash ( $row->meta_description );

			$published = $row->published;

			$inform_me=$row->inform_me;

			$action = _lkn_job_update;

			$task = 'update_job';

		} else {

			$id='';

			$title = '';

			$alias = '';

			$reference = '';

			$number_of_jobs = '';

			$job_type = '';

			$description = '';

			$country = '';

			$city='';

			$state='';

			$hits = '';

			$hide_company_name='';

			$qualifications = '';

			$experience = '';

			$degree = '';

			$cat_id = ''; //

			$company_id = ''; //

			$salary = '';

			$show_salary = '';

			$created = ''; //

			$publish_up = '';

			$publish_down = '';

			$meta_keywords = '';

			$meta_description = '';

			$published = '';

			$inform_me='';



			$action = _lkn_job_add;

			$task = 'save_job';

		}

		?>

		<script language="javascript" type="text/javascript">

		<!--

		function submitbutton(pressbutton)

		{

			var form = document.adminForm;

			if (pressbutton == "list_jobs" || pressbutton == "panel" || pressbutton == ""){

				submitform( pressbutton );

			}else{

				if (form.db_title.value == ""){

					alert( "Job must have a Title" );

				} else if (form.db_cat_id.value == ''){

					alert( "You must select the category." );

	 			} else if (form.db_company_id.value == ""){

	 				alert( "You must select the company of this job." );

				} else if (form.db_country.value == ""){

	 				alert( "You must select job country." );

				}

	 			else {

					tinyMCE.triggerSave();

					submitform( pressbutton );

				}

			}

		}

		//-->

		</script>

			<h1><?php echo $action;?></h1><br />

			<form id="adminForm" name="adminForm" method="post" action="index2.php" enctype="multipart/form-data">

				<table width="100%" cellspacing="0" cellpadding="0" border="0">

					<tbody>

						<tr>

							<td valign="top">

								<table class="adminform">

									<tbody>

										<tr>

											<td>

												<?php echo lknToolTip ( _lkn_job_tip, _lkn_job ) . ': ';?>

											</td>

											<td>

												<input maxlength="100" size="50" value="<?php echo $title;?>" name="db_title" />

											</td>

											<td>

												<?php

													echo lknToolTip ( _lkn_published_tip, _lkn_published ) . ': ';

												?>

											</td>

											<td>

												<?php

													echo lknJobsFunctions::publishSelectList_( 'db_published', $published );

												?>

											</td>

										</tr>

										<tr>

											<td>

												<?php

													echo lknToolTip ( _lkn_alias_tip, _lkn_alias ) . ': ';

												?>

											</td>

											<td>

												<input type="text" value="<?php	echo $alias;?>"	maxlength="100" size="50" id="db_alias" name="db_alias"	class="inputbox" />

											</td>

											<td>

												<?php

													echo lknToolTip ( _lkn_job_category_name_tip, _lkn_category_name ) . ': ';

												?>

											</td>

											<td>

												<?php

													$cat = new lknCategory ();

													echo $cat->getCategoryList ( 'db_cat_id', $cat_id );

												?>

											</td>

										</tr>

									</tbody>

								</table>

			<table class="adminform">

				<tbody>

					<tr>

						<td colspan="2">

							<?php echo lknToolTip ( _lkn_job_description_tip, _lkn_job_description );?>

						</td>

					</tr>

					<tr>

						<td>

							<?php echo $editor->display ( 'db_description', $description, '100%;', '350', '35', '20', array ('pagebreak', 'readmore' ) );?>

						</td>

					</tr>

					<tr>

						<td colspan="2">

							<?php echo lknToolTip ( _lkn_job_qualifications_tip, _lkn_job_qualifications );?>

						</td>

					</tr>

					<tr>

						<td colspan="2">

							<?php echo $editor->display ( 'db_qualifications', $qualifications, '100%;', '350', '75', '20', array ('pagebreak', 'readmore' ) );?>

						</td>

					</tr>

				</tbody>

			</table>

			</td>

			<td width="320" valign="top" style="padding: 7px 13pt 0pt 5px;">

				<?php lknTabs::startTabPanel ();?>

					<?php lknTabs::startTab ( _lkn_meta );?>

						<table class="adminform">

						<tbody>

							<tr>

								<td>

									<?php echo lknToolTip ( _lkn_meta_desc_tip, _lkn_meta_desc );?>

								</td>

								<td>

										<textarea id="db_meta_description" name="db_meta_description" rows="5" cols="20" class="inputbox"><?php	echo $meta_description;?></textarea>

								</td>

							</tr>

							<tr>

								<td>

									<?php echo lknToolTip ( _lkn_meta_keywords_tip, _lkn_meta_keywords );?>

								</td>

								<td>

									<textarea id="db_meta_keywords" name="db_meta_keywords" rows="5" cols="20" class="inputbox"><?php echo $meta_keywords;?></textarea>

								</td>

							</tr>

							<tr>

								<td colspan="2">

									<input type="button" onClick="f=document.adminForm;f.db_meta_keywords.value=f.db_title.value;" value="Add category title" class="button" />

								</td>

							</tr>

						</tbody>

					</table>

					<?php lknTabs::endTab();?>

					<?php lknTabs::startTab ( _lkn_job_details );?>

					<table class="adminform" border="1">

						<tr>

							<td>

								<?php echo lknToolTip ( _lkn_job_company_tip, _lkn_company );?>

							</td>

							<td>

								<?php echo lknJobsFunctions::getCompanyList ( 'db_company_id', $company_id );?>

							</td>

						</tr>

						<tr>

							<td>

								<?php echo lknToolTip ( _lkn_job_reference_tip, _lkn_job_reference );?>

							</td>

							<td>

								<input type="text" name="db_reference" id="db_reference" size="30" maxlength="100" value="<?php	echo $reference;?>">

							</td>

						</tr>

						<tr>

							<td><?php echo lknToolTip ( _lkn_job_number_of_jobs_tip, _lkn_job_number_of_jobs );?></td>

							<td><input type="text" name="db_number_of_jobs" id="db_number_of_jobs" size="30" maxlength="100" value="<?php echo $number_of_jobs;?>"></td>

						</tr>

						<tr>

							<td><?php echo lknToolTip ( _lkn_job_job_type_tip, _lkn_job_job_type );?></td>

							<td><?php echo lknJobsFunctions::getJobType ( 'db_job_type', $job_type );?>

							</td>

						</tr>

						<tr>

							<td><?php echo lknToolTip ( _lkn_job_country_tip, _lkn_job_country );?></td>

							<td><?php echo lknJobsFunctions::getJobCountries ( 'db_country', $country );?></td>

						</tr>

						<tr>

							<td><?php echo lknToolTip ( _lkn_job_city_tip, _lkn_job_city );?></td>

							<td><input type="text" name="db_city" id="db_city" size="30" maxlength="100" value="<?php echo $city;?>"></td>

						</tr>

						<tr>

							<td><?php echo lknToolTip ( _lkn_job_state_tip, _lkn_job_state );?></td>

							<td><input type="text" name="db_state" id="db_state" size="30" maxlength="100" value="<?php echo $state;?>"></td>

						</tr>

						<tr>

							<td><?php echo lknToolTip ( _lkn_job_experience_tip, _lkn_job_experience );?></td>

							<td><input type="text" name="db_experience" id="db_experience" size="30" maxlength="100" value="<?php echo $experience;?>"></td>

						</tr>

						<tr>

							<td><?php echo lknToolTip ( _lkn_job_degree_tip, _lkn_job_degree );?></td>

							<td><?php echo lknJobsFunctions::getDegree( 'db_degree', $degree );?></td>

						</tr>

						<tr>

							<td>

								<?php

									echo lknToolTip ( _lkn_job_salary_tip, _lkn_job_salary . ' (' . _lkn_currency . ')' );

								?>

							</td>

							<td>

								<input type="text" name="db_salary" id="db_salary" size="30" maxlength="100" value="<?php echo $salary;?>">

							</td>

						</tr>

						<tr>

							<td>

							<?php

								echo lknToolTip ( _lkn_job_show_salary_tip, _lkn_job_show_salary );

							?>

							</td>

							<td>

								<?php

									echo lknhtmlMaker::yesNoSelectList ( 'db_show_salary', $show_salary );

								?>

							</td>

						</tr>

						<tr>

							<td>

								<?php

									echo lknToolTip ( _lkn_job_publish_up_tip, _lkn_job_publish_up );

								?>

							</td>

							<td>

								<input type="text" readonly name="db_publish_up" id="db_publish_up" size="30" maxlength="100" value="<?php echo $publish_up;?>">

									<input type="reset" onClick="return showCalendar('db_publish_up', '%Y-%m-%d %H:%M:%S', '24', true);" value=" ... " />

							</td>

						</tr>

						<tr>

							<td>

								<?php

									echo lknToolTip ( _lkn_job_publish_down_tip, _lkn_job_publish_down );

								?>

							</td>

							<td>

								<input type="text" readonly name="db_publish_down" id="db_publish_down" size="30" maxlength="100" value="<?php echo $publish_down;?>">

								<input type="reset"	onclick="return showCalendar('db_publish_down', '%Y-%m-%d %H:%M:%S', '24', true);" value=" ... " />

							</td>

						</tr>

						<tr>

							<td><?php echo lknToolTip ( _lkn_job_hits_tip, _lkn_job_hits );?></td>

							<td><input type="text" readonly name="db_hits" id="db_hits" size="30" maxlength="100" value="<?php echo $hits;?>"></td>

						</tr>

						<tr>

							<td><?php echo lknToolTip ( _lkn_job_inform_me_tip, _lkn_job_inform_me );?></td>

							<td><?php echo lknhtmlMaker::yesNoSelectList('db_inform_me',$inform_me);?></td>

						</tr>

						<tr>

							<td><?php echo lknToolTip ( _lkn_job_hide_company_name_tip, _lkn_job_hide_company_name );?></td>

							<td><?php echo lknhtmlMaker::yesNoSelectList('db_hide_company_name',$hide_company_name);?></td>

						</tr>

					</table>

				<?php lknTabs::endTab();?>

				<?php lknTabs::endTabPanel();?>

					</td>

				</tr>

			</tbody>

		</table>

		<input type="hidden" value="<?php echo $id;?>" name="cid" />

		<input type="hidden" value="com_jobs" name="option" />

		<input type="hidden" value="<?php echo $task;?>" name="task" />

	</form>

		<?php

	}



	function license($text) {

		?>

			<form action="index2.php" method="POST" name="adminForm">

				<table class="adminlist">

					<thead>

						<tr>

							<th class="title"><strong><?php echo _lkn_license;?></strong></th>

						</tr>

					</thead>

						<tr>

							<td>

								<?php

									echo $text;

								?>

							</td>

						</tr>

					</table>

					<input type="hidden" name="option" value="com_jobs" />

					<input type="hidden" name="task" value="" />

				</form>

	<?php

	}



	function list_cover_letters($params) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>



		<h1><?php echo _lkn_list_cover_letters;?></h1><br />

		<form action="index2.php" method="POST" name="adminForm">

			<?php HTML_jobs::upper();?>

			<table class="adminlist">

			<thead>

				<tr>

					<th class="title"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php	echo $_config ['recordPerPage'];?>)" /></th>

					<th class="title"><strong><?php	echo _lkn_id;?></strong></th>

					<th class="title"><strong><?php	echo _lkn_title;?></strong></th>

					<th class="title"><strong><?php	echo _lkn_username;?></strong></th>

					<th class="title"><strong><?php echo _lkn_published;?></strong></th>

				</tr>

			</thead>

				<?php



				$k = 0;

				$adet = $params ['count'];

				$i = 0;

				while ( $row = $_db->fetch_array () ) {

					//			print_r($row);

					$title = $row ['title'];

					$id = $row ['id'];

					$published = $row ['published'];

					$username = $row ['username'];

					?>

					<tr class="row<?php echo $k;?>">

						<td align="center"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php	echo $id;?>" onClick="isChecked(this.checked);" /></td>

						<td align="center"><?php echo $id;?></td>

						<td><a href="index2.php?option=com_jobs&task=edit_cover_letter&cid=<?php echo $id;?>"><?php echo $title;?></a></td>

						<td><?php echo $username;?></td>

						<td><?php echo lknJobsFunctions::getPublishingImage($published);?></td>

					</tr>

					<?php

					$k = 1 - $k;

					$i ++;

				}



				?>

				</table>

				<input type="hidden" name="hidemainmenu" value="0" />

				<input type="hidden" name="option" value="com_jobs" />

				<input type="hidden" name="boxchecked" value="0" />

				<input type="hidden" name="task" value="list_cover_letters" />

			</form>

		<?php

				if ($adet != '') {

					$published = lknGetParamatre ( $_REQUEST, 'published' );

					$search = lknGetParamatre ( $_REQUEST, 'search' );

					$memberid=lknGetParamatre($_REQUEST,'memberid');

					$toplamSayfa = ( int ) $adet;

					$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_cover_letters&published=$published&search=$search&memberid=$memberid", $toplamSayfa );

					echo $sayfa->sayfaLinkiYaz ();

				}

	}



	function cover_letter_form($row = '') {

		global $_lknBaseFramework,$_db;

		//print_r($row);

		if ($row!='') {

			$id = $row->id;

			$title = temizleSlash ( $row->title );

			$memberid = $row->memberid;

			$cover_letter = $row->cover_letter;

			$published = $row->published;

			$action = _lkn_cover_letter_update;

			$task = 'update_cover_letter';

		} else {

			$id='';

			$title = '';

			$memberid = '';

			$cover_letter = '';

			$published = '';



			$action = _lkn_cover_letter_add;

			$task = 'save_cover_letter';

		}

		?>



		<script language="javascript" type="text/javascript">

		<!--

		function submitbutton(pressbutton)

		{

			var form = document.adminForm;

			if (pressbutton == "list_cover_letters" || pressbutton == "panel" || pressbutton == ""){

				submitform( pressbutton );

			}else{

				if (form.db_title.value == ""){

					alert( "La carta de presentacion debe tener un titulo" );

				} else if (form.db_memberid.value == ""){

					alert( "Debe seleccionar un usuario para esta carta de presentacion" );

	 			} else if (form.db_cover_letter.value == ""){

	 				alert( "Debe escribir el texto de la carta de presentacion" );

				} else {

					submitform( pressbutton );

				}

			}

		}

		//-->

		</script>



		<h1><?php echo $action;?></h1><br />

		<form id="adminForm" name="adminForm" method="post" action="index2.php">

		<table class="adminform">

			<tbody>

				<tr>

					<td>

						<?php

							echo lknToolTip ( _lkn_owner_tip, _lkn_username );

						?>

					</td>

					<td>

						<?php

							//echo lknJobsFunctions::getUsers ( 'db_memberid', $memberid );

						?>
									<?php
 
										//echo lknJobsFunctions::getUsers ( 'db_memberid', $memberid );
										if(!empty($memberid) ){
											 
											$UserJ = "Select c.*  from #__users as c where c.id=".$memberid;
											$_db->query($UserJ);
											$_db->setQuery();  
											$userTemplate = $_db->loadObject();
 											echo "<b>".$userTemplate->name."<b/>";
										}
									?>
									<a href="components/com_jobs/usersearch.php" 
                                    onClick="var popup = window.open(this.href, this.target, 'width=400,height=400');
                                    		popup.focus();return false;">
                                    	Clic para seleccionar usuario
                                    </a>
                     				<input type="hidden" value="<?php echo $memberid; ?>" size="20" id="db_memberid" name="db_memberid"
                                    class="inputbox" onKeyPress="ponerValor();" />
					</td>

				</tr>

				<tr>

					<td>

						<?php

							echo lknToolTip ( _lkn_cover_letter_title_tip, _lkn_title ) . ': ';

						?>

					</td>

					<td>

						<input maxlength="100" size="50" value="<?php echo $title;?>" name="db_title" />

					</td>

				</tr>

				<tr>

					<td>

						<?php

							echo lknToolTip ( _lkn_cover_letter_tip, _lkn_cover_letter );

						?>

					</td>

					<td>

						<textarea id="db_cover_letter" name="db_cover_letter" cols="50"	rows="20" class="inputbox" /><?php echo $cover_letter;?></textarea>

					</td>

				</tr>

				<tr>

				<td>

					<?php

						echo lknToolTip ( _lkn_published_tip, _lkn_published );

					?>

				</td>

				<td>

					<?php

						echo lknhtmlMaker::publishedSelectList ( 'db_published', $published );

					?>

				</td>

			</tr>

		</tbody>

		</table>

			<input type="hidden" value="<?php echo $id;?>" name="cid" />

			<input	type="hidden" value="com_jobs" name="option" />

			<input type="hidden" value="<?php echo $task;?>" name="task" />

		</form>

	<?php

	}



	function list_credit_history($rows, $params) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>



		<h1><?php echo _lkn_list_credit_history;?></h1><br />

			<form action="index2.php" method="POST" name="adminForm">

			<?php HTML_jobs::upper();?>

				<table class="adminlist">

					<thead>

						<tr>

							<th class="title"><input type="checkbox" name="toggle" value=""	onclick="checkAll(<?php	echo $_config ['recordPerPage'];?>)" /></th>

							<th class="title"><strong><?php echo _lkn_username;?></strong></th>

							<th class="title"><strong><?php echo _lkn_credit_total;?></strong></th>

						</tr>

					</thead>

					<?php



					$k = 0;

					$adet = $params ['count'];

					$i = 0;

					foreach ( $rows as $row ) {

						//			print_r($row);

						$username = $row->username;

						$credits = $row->credits;

						$user_id = $row->user_id;



						?>



						<tr class="row<?php	echo $k;?>">

							<td align="center"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php	echo $user_id;?>" onClick="isChecked(this.checked);" /></td>

							<td align="center"><a href="index2.php?option=com_jobs&task=edit_credit_history&cid=<?php echo $user_id;?>"><?php echo $username;?></a></td>

							<td align="center"><?php echo $credits;?></td>

						</tr>



						<?php



						$k = 1 - $k;

						$i ++;

					}

				?>

			</table>

			<input type="hidden" name="hidemainmenu" value="0" />

			<input type="hidden" name="option" value="com_jobs" />

			<input type="hidden" name="boxchecked" value="0" />

			<input type="hidden" name="task" value="list_credit_history" />

		</form>

	<?php

		if ($adet != '') {

			$search = lknGetParamatre ( $_REQUEST, 'search' );

			$toplamSayfa = ( int ) $adet;

			$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_credit_history&search=$search", $toplamSayfa );

			echo $sayfa->sayfaLinkiYaz ();

		}

	}



	function add_new_credit_form(){

		?>

		<script language="javascript" type="text/javascript">

		<!--

			function submitbutton(pressbutton)

				{

				var form = document.adminForm;

					if (form.db_user_id.value == ""){

						alert( "You must select the user name" );

					} else if (form.db_mc_currency.value == ''){

						alert( "You must write the currency." );

		 			} else if (form.db_payment_gross.value == ''){

						alert( "You must write payment amount you have recieved." );

		 			} else if (form.db_payment_gross.value == ''){

						alert( "You must write payment amount you have recieved." );

		 			} else if (form.db_credits.value == ''){

						alert( "You must write the credit count you want to add this user" );

		 			} else if (form.db_txn_id.value == ''){

						alert( "You must write the Transaction ID" );

		 			} else {

						submitform( pressbutton );

					}

				}

			//-->

		</script>



	<h1><?php echo _lkn_credit_add_new_credit;?></h1><br />

	<form id="adminForm" name="adminForm" method="post" action="index2.php"	enctype="multipart/form-data">



		<table class="adminform">

			<tbody>

				<tr>

					<td width="10%"><?php echo lknToolTip(_lkn_owner_tip,_lkn_username);?></td>

					<td width="70%">

						<?php

							$user_list=lknJobsFunctions::getUsers('db_user_id');

							echo $user_list;

						?>

					</td>

        		</tr>

        		<tr>

        			<td>

	        			<?php

	        				echo lknToolTip(_lkn_credit_add_new_credit_payer_email_tip,_lkn_credit_buying_history_payer_email);

	        			?>

        			</td>

        			<td>

        				<input maxlength="100" size="50" value="" name="db_payer_email" />

        			</td>

        		</tr>

        		<tr>

        			<td align="center"><?php echo lknToolTip(_lkn_credit_add_new_credit_currency_tip,_lkn_credit_buying_history_curreny);?></td>

        			<td>

        				<input maxlength="100" size="50" value="" name="db_mc_currency" />

        			</td>

        		</tr>

        		<tr>

        			<td align="center"><?php echo lknToolTip(_lkn_credit_add_new_credit_credit_cost_tip,_lkn_credit_buying_history_credit_cost);?></td>

        			<td>

        				<input maxlength="100" size="50" value="" name="db_payment_gross" />

        			</td>

        		</tr>

        		<tr>

        			<td align="center"><?php echo lknToolTip(_lkn_credit_add_new_credit_credit_count_tip,_lkn_credit_buying_history_credit_count);?></td>

        			<td>

        				<input maxlength="100" size="50" value="" name="db_credits" />

        			</td>

        		</tr>

        		<tr>

        			<td align="center"><?php echo lknToolTip(_lkn_credit_add_new_credit_verify_sign_tip,_lkn_credit_buying_history_verify_sign);?></td>

        			<td>

        				<input maxlength="100" size="50" value="" name="db_verify_sign" />

        			</td>

        		</tr>

        		<tr>

        			<td align="center"><?php echo lknToolTip(_lkn_credit_add_new_credit_tnx_id_tip,_lkn_credit_buying_history_transaction_id);?></td>

        			<td>

        				<input maxlength="100" size="50" value="" name="db_txn_id" />

        			</td>

        		</tr>

        		<tr>

        			<td align="center"><?php echo lknToolTip(_lkn_credit_add_new_credit_attribs_tip,_lkn_credit_buying_history_attribs);?></td>

        			<td>

        				<textarea cols="40" rows="7" name="db_attribs"></textarea>

        			</td>

        		</tr>

        	</tbody>

        </table>



		<input type="hidden" value="com_jobs" name="option" />

		<input type="hidden" value="save_credit" name="task" />



	</form>

		<?php

	}

	

	function list_pending_credits($rows, $params) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		$null_date=$_db->getNullDate();

		?>



		<h1><?php echo _lkn_list_pending_credits;?></h1><br />

			<form action="index2.php" method="POST" name="adminForm">

			<?php HTML_jobs::upper();?>

				<table class="adminlist">

					<thead>

						<tr>

							<th class="title"><input type="checkbox" name="toggle" value=""	onclick="checkAll(<?php	echo $_config ['recordPerPage'];?>)" /></th>

							<th class="title"><strong><?php echo _lkn_id; ?></strong></th>

							<th class="title"><strong><?php echo _lkn_username;?></strong></th>

							<th class="title" ><strong><?php echo _lkn_employer_pending_credit_date; ?></strong></th>

							<th class="title" ><strong><?php echo _lkn_employer_pending_payment_date; ?></strong></th>

							<th class="title" ><strong><?php echo _lkn_employer_pending_inform_date; ?></strong></th>

							<th class="title" ><strong><?php echo _lkn_credit_buying_history_credit_count; ?></strong></th>

							<th class="title" ><strong><?php echo _lkn_credit_buying_history_credit_cost; ?></strong></th>						

						</tr>

					</thead>

					<?php



					

					$adet = $params ['count'];

					if ($adet>0) {					

							$i = 0;

							$k = 0;

							foreach ( $rows as $row ) {

								//			print_r($row);

								$username = $row->username;

								$user_id = $row->user_id;

								$requested_date=lknDate::formatDate($row->requested_date);

								$credits=$row->credits;

								$payment_gross=$row->payment_gross . ' ' . _lkn_currency;

								$id=$row->id;

								$payment_date=$row->payment_date;

								$inform_date=$row->inform_date;

								

								if ($payment_date!='' and $payment_date!=$null_date) {

									$payment_date=lknDate::formatDate($payment_date);

									$inform_date=lknDate::formatDate($inform_date);

								}else {

									$payment_date='-';

									$inform_date='-';

								}

								?>

		

								<tr class="row<?php	echo $k;?>">

									<td align="center"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php	echo $id;?>" onClick="isChecked(this.checked);" /></td>

									<td><?php echo $id;?></td>

									<td align="center"><a href="index2.php?option=com_jobs&task=edit_pending_credit&cid=<?php echo $id;?>"><?php echo $username;?></a></td>

									<td><?php echo $requested_date; ?></td>

									<td><?php echo $payment_date; ?></td>

									<td><?php echo $inform_date; ?></td>

									<td><?php echo $credits; ?></td>

									<td><?php echo $payment_gross; ?></td>

									</tr>

		

								<?php

		

								$k = 1 - $k;

								$i ++;

							}

					}else {

						echo "<tr><td colspan=\"8\">". _lkn_employer_pending_credit_count_zero ."</td></tr>";

					}

						?>

			</table>

			<input type="hidden" name="hidemainmenu" value="0" />

			<input type="hidden" name="option" value="com_jobs" />

			<input type="hidden" name="boxchecked" value="0" />

			<input type="hidden" name="task" value="list_pending_credits" />

		</form>

	<?php

		if ($adet != '') {

			$search = lknGetParamatre ( $_REQUEST, 'search' );

			$toplamSayfa =(int) $adet;

			$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_pending_credits&search=$search", $toplamSayfa );

			echo $sayfa->sayfaLinkiYaz ();

		}

	}

	

	function edit_pending_credit($row){	

		

		$user_name=$row->username;

		$user_id=$row->user_id;

		$id=$row->id;

		$other=temizleSlash($row->attribs);

		$txn_id=$row->txn_id;

		

		$payment_gross=$row->payment_gross;

		$user_email=$row->user_email;

		$credits=$row->credits;

		$requested_date=lknDate::formatDate($row->requested_date);

		$payment_date=$row->payment_date;

		$inform_date=lknDate::formatDate($row->inform_date);

		

		if ($txn_id!='') {

			$status=_lkn_employer_pending_credit_payment_sent;

			$can_approve='1';

			$other.=' -  ' . _lkn_credit_payment_method_bank_transfer;

			$other.=' -  ' . _lkn_employer_pending_credit_date . ': ' . $requested_date;

			$other.=' - ' . _lkn_employer_pending_inform_date . ': ' . $inform_date;

			$other.=' - ' . _lkn_employer_pending_payment_date . ': ' . $payment_date;

		}else {

			$status=_lkn_employer_pending_credit_payment_is_not_sent;

			$other='-';

			$txn_id='-';

			$can_approve='0';

		}

		?>

	<h2><?php echo _lkn_employer_pending_credit_action;?></h2><br />

	<form id="adminForm" name="adminForm" method="post" action="index2.php">

			<input type="hidden" value="<?php echo $id;?>" name="cid" />

			<input type="hidden" value="<?php echo $user_id;?>" name="db_user_id" />

			<input type="hidden" value="<?php echo $payment_date;?>" name="db_payment_date" />

			<input type="hidden" value="<?php echo _lkn_currency;?>" name="db_mc_currency" />

			<input type="hidden" value="<?php echo $payment_gross;?>" name="db_payment_gross" />

			<input type="hidden" value="<?php echo $credits;?>" name="db_credits" />

			<input type="hidden" value="<?php echo $txn_id;?>" name="db_txn_id" />

			<input type="hidden" value="<?php echo $other;?>" name="db_attribs" /> 

			<input type="hidden" value="<?php echo $can_approve;?>" name="can_approve" />

			<input type="hidden" value="<?php echo $user_email;?>" name="user_email" />

			<input type="hidden" value="com_jobs" name="option" />

			<input type="hidden" value="" name="task" />

			

		<table class="general_table">

			<tbody>

				<tr>

					<td width="10%"><?php echo _lkn_status;?></td>

					<td width="70%"><?php echo $status;?></td>

        		</tr>

				<tr>

					<td width="10%"><?php echo _lkn_username;?></td>

					<td width="70%"><?php echo $user_name;?></td>

        		</tr>

        		<tr>

        			<td><?php echo _lkn_credit_buying_history_credit_cost;?></td>

        			<td>

        				<?php echo $payment_gross . ' ' . _lkn_currency;?>

        			</td>

        		</tr>

        		<tr>

        			<td><?php echo _lkn_credit_buying_history_credit_count;?></td>

        			<td>

        				<?php echo $credits;?>

        			</td>

        		</tr>

        		<tr>

					<td>

						<?php

							echo _lkn_employer_pending_credit_date;

						?>

					</td>

					<td>

						<?php echo $requested_date;?>

					</td>

				</tr>

        		<tr>

					<td>

						<?php

							echo _lkn_employer_pending_payment_date;

						?>

					</td>

					<td>

						<?php echo lknDate::formatDate($row->payment_date);?>

					</td>

				</tr>

        		<tr>

					<td>

						<?php

							echo _lkn_employer_pending_inform_date;

						?>

					</td>

					<td>

						<?php echo $inform_date;

						?>

					</td>

				</tr>

        		<tr>

        			<td><?php echo _lkn_credit_buying_history_transaction_id;?></td>

        			<td>

        				<?php echo $txn_id;?>

        			</td>

        		</tr>

        		<tr>

        			<td><?php echo _lkn_credit_buying_history_attribs;?></td>

        			<td>

        				<?php echo $other;?>

        			</td>

        		</tr>

        	</tbody>

        </table>

	</form>

		<?php

	}



	function credit_history_form($row) {

		if (! isset ( $row )) {

			echo _lkn_credit_buying_history_no_result;



		} else {

			global $_lknBaseFramework, $_db;

			$user_id = $row->user_id;

			$credits = $row->credits;

			$can_search_end = $row->can_search_end;

			$action = str_replace ( '{USERNAME}', $row->username, _lkn_credit_history_for );

			$task = 'update_credit_history';



			?>

					<script language="javascript" type="text/javascript">

						<!--

						function submitbutton(pressbutton)

						{

							var form = document.adminForm;

							if (form.db_credits.value == ""){

								alert( "You need to write credit" );

							} else {

								submitform( pressbutton );

							}

						}

						//-->

						</script>



		<h1><?php echo $action;?></h1><br />

		<form id="adminForm" name="adminForm" method="post" action="index2.php"	enctype="multipart/form-data">

		<table width="100%" cellspacing="0" cellpadding="0" border="0">

			<tbody>

				<tr>

					<td valign="top">

					<table class="adminform">

						<tbody>

							<tr>

								<td>

									<?php

										echo lknToolTip ( _lkn_credit_total_tip, _lkn_credit_total ) . ': ';

									?>

								</td>

								<td>

									<input maxlength="100" size="100" value="<?php echo $credits;?>" name="db_credits" />

								</td>

							</tr>

							<tr>

								<td>

									<?php

										echo lknToolTip ( _lkn_credit_can_search_tip, _lkn_credit_can_search ) . ': ';

									?>

								</td>

								<td>

									<input type="text" readonly name="db_can_search_end" id="db_can_search_end" size="30" maxlength="100" value="<?php echo $can_search_end;?>">

									<input type="reset"	onclick="return showCalendar('db_can_search_end', '%Y-%m-%d %H:%M:%S', '24', true);" value=" ... " />

								</td>

							</tr>

						</tbody>

					</table>

					</td>

					<td width="320" valign="top" style="padding: 7px 13pt 0pt 5px;">

							<?php lknTabs::startTabPanel();?>

								<?php lknTabs::startTab ( _lkn_credit_buying_history );	?>

						<?php

							$rows_payment = lknJobsFunctions::getCreditsBuyingHistory ( $row->user_id );

							$count = count ( $rows_payment );

								if ($count > 0) {

								?>

									<table class="adminlist">

										<thead>

											<tr>

												<th class="title">

													<strong>

														<?php

															echo _lkn_credit_buying_history_transaction_id;

														?>

													</strong>

												</th>

												<th class="title">

													<strong>

														<?php

															echo _lkn_credit_buying_history_payer_email;

														?>

													</strong>

												</th>

												<th class="title">

													<strong>

														<?php echo _lkn_credit_buying_history_payment_date;?>

													</strong>

												</th>

												<th class="title">

													<strong>

														<?php echo _lkn_credit_buying_history_credit_count;	?>

													</strong>

												</th>

												<th class="title">

													<strong>

														<?php

															echo _lkn_credit_buying_history_credit_cost;

														?>

													</strong>

												</th>

											</tr>

										</thead>

									<?php

										$k = 1;

										foreach ( $rows_payment as $row ) {

											$payer_email = $row->payer_email;

											$payment_date = lknDate::formatDate ( $row->payment_date );

											$credits = $row->credits;

											$payment_gross = $row->payment_gross . ' ' . $row->mc_currency;

											$txn_id = $row->txn_id;

											$id = $row->id;

									?>

									<tr class="row<?php	echo $k;?>">

										<td>

											<a href="index2.php?option=com_jobs&task=credit_history_full_payment_detail&id=<?php echo $id;?>"><?php echo $txn_id;?></a>

										</td>

										<td>

											<?php echo $payer_email;?>

										</td>

										<td>

											<?php

												echo $payment_date;

											?>

										</td>

										<td>

											<?php

												echo $credits;

											?>

										</td>

										<td>

											<?php

												echo $payment_gross;

											?>

										</td>

									</tr>

								<?php

									$k = 1 - $k;

							}

						?>

					</table>

				<?php

					} else {

						echo _lkn_credit_buying_history_no_result;

					}

			lknTabs::endTab();



			lknTabs::startTab( _lkn_credit_speding_history );



			$rows_payment = lknJobsFunctions::getCreditsSpedingHistory ( $row->user_id );

			//print_r($rows_payment);

			$count = count ( $rows_payment );

			if ($count > 0) {

			?>

				<table class="adminlist">

					<thead>

						<tr>

							<th class="title">

								<strong>

									<?php echo _lkn_credit_speding_history_action;?>

								</strong>

							</th>

							<th class="title">

								<strong>

									<?php echo _lkn_title;?>

								</strong>

							</th>

							<th class="title">

								<strong>

									<?php echo _lkn_credit_speding_history_spent_credit;?>

								</strong>

							</th>

							<th class="title">

								<strong>

									<?php echo _lkn_credit_speding_history_spent_date;?>

								</strong>

							</th>

						</tr>

						</thead>

					<?php

						$k = 1;

						foreach ( $rows_payment as $row ) {

							$spend_action = $row->action;

							//1:Adding a job

							if ($spend_action == '1') {

								$spend_action = _lkn_credit_speding_history_action_add_job;

								$job_id = $row->job_id;

								$job_details = $_db->loadTable ( "SELECT title,created FROM #__jobs_jobs WHERE id='$job_id'" );

								$title = "<a href=\"index2.php?option=com_jobs&task=edit_job&cid=$job_id\">" . $job_details->title . "</a>";

								$job_created = lknDate::formatDate ( $job_details->created );



								$credits = $row->credits;

								?>

							<tr class="row<?php	echo $k;?>">

								<td><?php echo $spend_action;?></td>

								<td><?php echo $title;?></td>

								<td><?php echo $credits;?></td>

								<td><?php echo $job_created;?></td>

							</tr>

							<?php

							} elseif ($spend_action == '2') {

								$spend_action = _lkn_credit_speding_history_action_search_resume_database;

								$credits = $row->credits;

								$old_date = lknDate::formatDate ( $row->old_date );

								$new_date = lknDate::formatDate ( $row->new_date );

								$date = $old_date . ' - ' . $new_date;

								?>

								<tr class="row<?php echo $k;?>">

									<td colspan="2"><?php echo $spend_action;?></td>

									<td><?php echo $credits;?></td>

									<td><?php echo $date;?></td>

								</tr>

							<?php

							}elseif ($spend_action=='3'){

								$spend_action=_lkn_credit_speding_history_action_apply_job;

								$job_id=$row->job_id;

								$job_details=$_db->loadTable("SELECT title,created,alias FROM #__jobs_jobs WHERE id='$job_id'");

								$job_details_count=count($job_details);

								if ($job_details_count>0) {

									$job_alias=$job_details->alias;

									$title = "<a href=\"index2.php?option=com_jobs&task=edit_job&cid=$job_id\">" . $job_details->title . "</a>";

								}

								

								

							$job_created=lknDate::formatDate($job_details->created);

								

							$credits=$row->credits;

							?>

							<tr class="<row<?php echo $k;?>">

								<td><?php echo $spend_action;?></a></td>

								<td><?php echo $title;?></td>

								<td><?php echo $credits; ?></td>

								<td><?php echo $job_created; ?></td>

							</tr>

								<?php

							}elseif ($spend_action=='4'){

								$spend_action=_lkn_credit_speding_history_action_create_resume;

								$resume_id=$row->job_id;

								$job_details=$_db->loadTable("SELECT title,created,alias FROM #__jobs_resumes WHERE id='$resume_id'");

								$job_details_count=count($job_details);

								if ($job_details_count>0) {

									$job_alias=$job_details->alias;

									$title="<a href=\"" . lknSef::url("index.php?option=com_jobs&task=edit_resume&id=$resume_id:$job_alias") . "\">" . $job_details->title . "</a>";

								}

								

								

							$job_created=lknDate::formatDate($job_details->created);

								

							$credits=$row->credits;

							?>

							<tr class="<row<?php echo $k;?>">

								<td><?php echo $spend_action;?></a></td>

								<td><?php echo $title;?></td>

								<td><?php echo $credits; ?></td>

								<td><?php echo $job_created; ?></td>

							</tr><?php 

						}

							$k = 1 - $k;

						}



						?>

				</table>

			<?php

					} else {

						echo _lkn_credit_speding_history_no_result;

					}

			lknTabs::endTab();

			lknTabs::endTabPanel();

					?>

				</td>

			</tr>

			</tbody>

		</table>

		<?php

				} //credit stın alıp almadığını göstermek için kullanıdıığım if bitişi

				?>

				<input type="hidden" value="<?php echo $user_id;?>" name="db_user_id" />

				<input type="hidden" value="com_jobs" name="option" />

				<input type="hidden" value="<?php echo $task;?>" name="task" />

			</form>

<?php

	}



	function credit_history_full_payment_detail($row) {



		//			print_r($row);

		$user_name = $row->username;

		$payer_email = $row->payer_email;

		$payment_date = lknDate::formatDate ( $row->payment_date );

		$mc_currency = $row->mc_currency;

		$payment_gross = $row->payment_gross;

		$credits = $row->credits;

		$verify_sign = $row->verify_sign;

		$txn_id = $row->txn_id;

		$attribs = str_replace ( '\n', '<br/>', $row->attribs );

		echo '<h1>' . _lkn_credit_history_full_payment_detail . '</h1>';

		?>



		<form id="adminForm" name="adminForm" method="post" action="index2.php">

		<table class="admintable">

			<tr>

				<td class="key"><?php echo _lkn_username;?></td>

				<td><?php echo $user_name;?></td>

			</tr>

			<tr>

				<td class="key"><?php echo _lkn_credit_buying_history_payer_email;?></td>

				<td><?php echo $payer_email;?></td>

			</tr>

			<tr>

				<td class="key"><?php echo _lkn_credit_buying_history_payment_date;?></td>

				<td><?php echo $payment_date;?></td>

			</tr>

			<tr>

				<td class="key"><?php echo _lkn_credit_buying_history_curreny;?></td>

				<td><?php echo $mc_currency;?></td>

			</tr>

			<tr>

				<td class="key"><?php echo _lkn_credit_buying_history_credit_cost;?></td>

				<td><?php echo $payment_gross;?></td>

			</tr>

			<tr>

				<td class="key"><?php echo _lkn_credit_buying_history_credit_count;?></td>

				<td><?php echo $credits;?></td>

			</tr>

			<tr>

				<td class="key"><?php echo _lkn_credit_buying_history_verify_sign;?></td>

				<td><?php echo $verify_sign;?></td>

			</tr>

			<tr>

				<td class="key"><?php echo _lkn_credit_buying_history_transaction_id;?></td>

				<td><?php echo $txn_id;?></td>

			</tr>

			<tr>

				<td class="key"><?php echo _lkn_credit_buying_history_attribs;?></td>

				<td><?php echo $attribs;?></td>

			</tr>

		</table>

		<input type="hidden" value="com_jobs" name="option" />

		<input type="hidden" value="" name="task" />

	</form>

		<?php

	}



	function list_status($params) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>

		<h1><?php echo _lkn_list_status;?></h1><br />

		<form action="index2.php" method="POST" name="adminForm">

				<?php HTML_jobs::upper();?>

				<table class="adminlist">

				<thead>

					<tr>

						<th class="title"><input type="checkbox" name="toggle" value=""	onclick="checkAll(<?php	echo $_config ['recordPerPage'];?>)" /></th>

						<th class="title"><strong><?php	echo _lkn_id;?></strong></th>

						<th class="title"><strong><?php	echo _lkn_status;?></strong></th>

						<th class="title"><strong><?php	echo _lkn_published;?></strong></th>

					</tr>

				</thead>

				<?php



				$k = 0;

				$adet = $params ['count'];

				$i = 0;

				while ( $row = $_db->fetch_array () ) {

					//			print_r($row);

					$title = $row ['title'];

					$id = $row ['id'];

					$published = $row ['published'];



					?>

					<tr class="row<?php	echo $k;?>">

						<td align="center"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php	echo $id;?>" onClick="isChecked(this.checked);" /></td>

						<td align="center"><?php echo $id;?></td>

						<td><a href="index2.php?option=com_jobs&task=edit_status&cid=<?php echo $id;?>"><?php echo $title;?></a></td>

						<td><?php echo lknJobsFunctions::getPublishingImage($published);?></td>

					</tr>

				<?php

				$k = 1 - $k;

				$i ++;

				}



				?>

				</table>



				<input type="hidden" name="hidemainmenu" value="0" />

				<input type="hidden" name="option" value="com_jobs" />

				<input type="hidden" name="boxchecked" value="0" />

				<input type="hidden" name="task" value="list_status" />

			</form>

		<?php

				if ($adet != '') {

					$published = lknGetParamatre ( $_REQUEST, 'published' );

					$search = lknGetParamatre ( $_REQUEST, 'search' );

					$toplamSayfa = ( int ) $adet;

					$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_status&published=$published&search=$search", $toplamSayfa );

					echo $sayfa->sayfaLinkiYaz ();

				}

	}



	function status_form($row = '') {

		global $_lknBaseFramework;



		//	print_r($row);

		if ($row!='') {

			$id = $row->id;

			$title = temizleSlash ( $row->title );

			$published = $row->published;

			$action = _lkn_status_update;

			$task = 'update_status';

		} else {

			$id='';

			$title = '';

			$published = '';



			$action = _lkn_status_add;

			$task = 'save_status';

		}

		?>

		<script language="javascript" type="text/javascript">

		<!--

		function submitbutton(pressbutton)

		{

			var form = document.adminForm;

			if (pressbutton == "list_status" || pressbutton == "panel" || pressbutton == ""){

				submitform( pressbutton );

			}else{

				if (form.db_title.value == ""){

					alert( "You need to write the status" );

				} else {

					submitform( pressbutton );

				}

			}

		}

		//-->

		</script>

		<h1><?php echo $action;?></h1><br />

		<form id="adminForm" name="adminForm" method="post" action="index2.php">

		<table width="100%" cellspacing="0" cellpadding="0" border="0">

			<tbody>

				<tr>

					<td valign="top">

					<table class="adminform">

						<tbody>

							<tr>

								<td>

									<?php echo lknToolTip ( _lkn_status_tip, _lkn_status ) . ': ';?>

								</td>

								<td>

									<input maxlength="100" size="50" value="<?php echo $title;?>" name="db_title" />

								</td>

								<td>

									<?php

										echo lknToolTip ( _lkn_published_tip, _lkn_published ) . ': '?>

								</td>

								<td>

								<?php

									echo lknhtmlMaker::publishedSelectList ( 'db_published', $published );

								?>

								</td>

							</tr>

						</tbody>

					</table>

					</td>

				</tr>

			</tbody>

		</table>

		<input type="hidden" value="<?php echo $id;?>" name="cid" />

		<input type="hidden" value="com_jobs" name="option" />

		<input type="hidden" value="<?php echo $task;?>" name="task" />

	</form>

		<?php

	}

	function list_email_templates($params) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>



		<h1><?php echo _lkn_list_email_templates;?></h1><br />

		<form action="index2.php" method="POST" name="adminForm">

				<?php HTML_jobs::upper ();?>

				<table class="adminlist">

				<thead>

					<tr>

						<th class="title"><input type="checkbox" name="toggle" value=""	onclick="checkAll(<?php	echo $_config ['recordPerPage'];?>)" /></th>

						<th class="title"><strong><?php	echo _lkn_id;?></strong></th>

						<th class="title"><strong><?php	echo _lkn_title;?></strong></th>

						<th class="title"><strong><?php	echo _lkn_username;?></strong></th>

						<th class="title"><strong><?php	echo _lkn_published;?></strong></th>

					</tr>

				</thead>

				<?php



				$k = 0;

				$adet = $params ['count'];

				$i = 0;

				while ( $row = $_db->fetch_array () ) {

					//			print_r($row);

					$title = $row ['title'];

					$id = $row ['id'];

					$published = $row ['published'];

					$username = $row ['username'];

					?>

					<tr class="row<?php	echo $k;?>">

						<td align="center"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php	echo $id;?>" onClick="isChecked(this.checked);" /></td>

						<td align="center"><?php echo $id;?></td>

						<td><?php echo $title;?></td>

						<td><?php echo $username;?></td>

						<td><?php echo lknJobsFunctions::getPublishingImage ( $published );?></td>

					</tr>

					<?php

					$k = 1 - $k;

					$i ++;

				}



				?>

				</table>

			<input type="hidden" name="hidemainmenu" value="0" />

			<input type="hidden" name="option" value="com_jobs" />

			<input type="hidden" name="boxchecked" value="0" />

			<input type="hidden" name="task" value="list_email_templates" />

		</form>

		<?php

				if ($adet != '') {

					$published = lknGetParamatre ( $_REQUEST, 'published' );

					$search = lknGetParamatre ( $_REQUEST, 'search' );

					$memberid=lknGetParamatre($_REQUEST,'memberid');

					$toplamSayfa = ( int ) $adet;

					$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_email_templates&published=$published&search=$search&memberid=$memberid", $toplamSayfa );

					echo $sayfa->sayfaLinkiYaz ();

				}

	}



	function email_template_form($row = '') {



		global $_lknBaseFramework, $_config, $_db;

		if ($row!='') {
			$id = $row->id;

			$title = temizleSlash ( $row->title );

			$body = temizleSlash ( $row->body );

			$memberid = $row->memberid;

			$published = $row->published;



			$action = _lkn_email_template_update;

			$task = 'update_email_template';

		} else {

			$id='';

			$title = '';

			$body = '';

			$memberid = '';

			$published = '';



			$action = _lkn_email_template_add;

			$task = 'save_email_template';

		}

		?>

		<script language="javascript" type="text/javascript">

				<!--

				function submitbutton(pressbutton)

				{

					var form = document.adminForm;

					if (form.db_title.value == ""){

						alert( "Article must have a Title" );

					} else if (form.db_memberid.value == ''){

						alert( "You must select the owner of this company." );

		 			} else if (form.db_body.value == ""){

		 				alert( "You must write the email template body" );

					} else {

						submitform( pressbutton );

					}

				}

				//-->

				</script>



				<h1><?php echo $action;?></h1><br />

				<form id="adminForm" name="adminForm" method="post" action="index2.php"	enctype="multipart/form-data">

				<table width="100%" cellspacing="0" cellpadding="0" border="0">

				<tbody>

					<tr>

					<td valign="top">

					<table class="adminform">

						<tbody>

							<tr>

								<td>

									<?php

										echo lknToolTip ( _lkn_email_template_title_tip, _lkn_title ) . ': ';

									?>

								</td>

								<td>

									<input maxlength="100" size="50" value="<?php echo $title;?>" name="db_title" />

								</td>

								<td>

									<?php

										echo lknToolTip ( _lkn_published_tip, _lkn_published ) . ': ';

									?>

								</td>

								<td>

								<?php

									echo lknhtmlMaker::publishedSelectList ( 'db_published', $published );

								?>

								</td>

							</tr>

							<tr>

								<td>

									<?php

										echo lknToolTip ( _lkn_owner_tip, _lkn_username ) . ': ';

									?>

									</td>

								<td>

									<?php

										//echo $memberid;
										//echo lknJobsFunctions::getUsers ( 'db_memberid', $memberid );
										if(!empty($memberid)){
											$UserJ = "Select c.*  from #__users as c where c.id=".$memberid;
											$_db->query($UserJ);
											$_db->setQuery(); 

											$userTemplate = $_db->loadObjectList();
 											echo $userTemplate->name;
										}
									?>
									<a href="components/com_jobs/usersearch.php" 
                                    onClick="var popup = window.open(this.href, this.target, 'width=400,height=400');
                                    		popup.focus();return false;">
                                    	Clic para seleccionar usuario
                                    </a>
                     				<input type="hidden" value="" size="20" id="db_memberid" name="db_memberid"
                                    class="inputbox" onKeyPress="ponerValor();" />
								</td>

								<td></td>

								<td></td>

							</tr>

							<tr>

								<td>

									<?php

										echo lknToolTip ( _lkn_email_template_tip, _lkn_email_template );

									?>

								</td>

							</tr>

							<tr>

								<td colspan="4">

									<textarea id="db_body" name="db_body" rows="20"	cols="75" class="inputbox"><?php echo $body;?></textarea>

								</td>

							</tr>

						</tbody>

					</table>

					</td>

					<td width="320" valign="top" style="padding: 7px 13pt 0pt 5px;">

					<table class="adminlist">

						<thead>

							<tr class="title">

								<td>

									<?php

										echo _lkn_info . ': ';

									?>

								</td>

							</tr>

						<thead>

						<tbody>

							<tr>

								<td>

									<?php

										echo _lkn_email_template_desc;

									?>

								</td>

							</tr>

						</tbody>

					</table>

					</td>

				</tr>

			</tbody>

		</table>

		<input type="hidden" value="<?php echo $id;?>" name="cid" />

		<input type="hidden" value="com_jobs" name="option" />

		<input type="hidden" value="<?php echo $task;?>" name="task" />

	</form>

		<?php

	}

    function array_envia($array) 
	{
    		$tmp = serialize($array);
    		$tmp = urlencode($tmp);             
    		return $tmp;
	}
	
	function array_enviar($ar) 
	{
			$tmpp = serialize($ar);
			$tmpp = urlencode($tmpp);             
			return $tmpp;
	}	


	function list_resumes($rows,$params) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>
		
		<h1><?php echo _lkn_list_resumes;?></h1>
			<form action="index2.php" method="POST" name="adminForm">
            	<!--
            	<table class="adminform">
                <tbody>
                <tr>
                <td width="100%">
            	<span style="font-size: 11px;">
                	<div style="margin-top:20px; width:125px;">
                	Descargar curriculum en: 
                    </div>
               	</span>&nbsp;
                <div style="height: auto; margin-left: 140px; margin-top: -35px; width: 100px;">
                    <a href="javascript:task_Excel()" onClick="">
                        <img src="components/com_jobs/images/Excel.png" 
                        width="30" height="30" style="cursor:pointer;" title="Clic para descargar el curriculum"/>
                    </a>
                    <div style="color:#0B55C4;">
                    	EXCEL
                    </div>
                </div>
                 &nbsp;&nbsp;&nbsp;
                <div style="margin-left:200px; margin-top: -61px; width: 50px; height:auto;">
                   	<a href="javascript:task_PDF()" onClick="">
                        <img src="components/com_jobs/images/Acrobat.png" 
                        width="30" height="30" style="cursor:pointer;" title="Clic para descargar el curriculum"/>
                    </a>
                    <div style="margin-left:7px; color:#0B55C4;">
                    	PDF
                    </div>
                </div>
                </td>
                </tr>
                </tbody>
                </table>-->
            	<input type="hidden" name="pdf" id="pdf" value="0" />
              
			<?php
			
				HTML_jobs::upper ();
				if( !empty($_POST['cid'] )  and $_POST['pdf'] ==0  ){
				  $array =  HTML_jobs::array_envia($_POST['cid']);
				  echo '<script>';
				  echo 'window.open("components/com_jobs/mysqlresumen.php?cid='.$array.'" , "ventana1" , "width=500,height=500,scrollbars=SI")';
				  echo '</script>';
			  }

              if(!empty($_POST['cid'] ) and $_POST['pdf'] ==1 ){
                  $ar = HTML_jobs::array_enviar($_POST['cid']);
                  echo '<script>';
                  echo 'window.open("components/com_jobs/mpdf50/examples/datosdbresumen.php?cid='.$ar.'" , "ventana2" , "width=500,height=500,scrollbars=SI")';
                  echo '</script>';
              }
             
              ?>
              	<script>
					function task_Excel() {
						if(document.adminForm.boxchecked.value == 0) {
              					alert('<?php echo htmlspecialchars("No ha seleccionado un curriculum");?>');
       					}else {
							document.adminForm.submit();
       					}
					}
				</script>
              	<script>
					var ipopup;
					function task_PDF() {
						if(document.adminForm.boxchecked.value == 0) {
              					alert('<?php echo htmlspecialchars("No ha seleccionado un curriculum");?>');
       					}else {
       						var pdf = document.getElementById('pdf');
       						pdf.value=1;
							document.adminForm.submit();
       					}
					}
				</script>
                 
				<table class="adminlist">

					<thead>

						<tr>
							<th class="title"><strong><?php echo _lkn_id;?></strong></th>

							<th class="title"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo $_config ['recordPerPage'];?>)" /></th>

							<th class="title"><strong><?php	echo _lkn_resume_title;?></strong></th>

							<th class="title"><strong><?php	echo _lkn_resume_hits;?></strong></th>
                            
                            <th class="title"><strong><?php	echo _lkn_resume_name;?></strong></th>

							<th class="title"><strong><?php	echo _lkn_username;?></strong></th>
                            
                            <th class="title"><strong><?php	echo _lkn_cedula;?></strong></th>

							<th class="title"><strong><?php	echo _lkn_published;?></strong></th>

						</tr>

					</thead>

				<?php



				$k = 0;

				$adet = $params ['count'];

				$i = 0;

				foreach ($rows as $row) {

					//			print_r($row);

					$title = temizleSlash($row->title);

					$id = $row->id;

					$published = $row->published;

					$hits = $row->hits;
					
					$nameresume = $row->name;

					$username = $row->username;
					
					$cedula	= $row->cedula;

					?>

					<tr class="row<?php	echo $k;?>">

						<td align="center"><?php echo $id;?></td>

						<td align="center">
							<?php 
								$id = $row->id;
								$cvHTML = "<a href='javascript:void(0)' onclick='imprimirCVHTML(".$id.")'>";				
								$cvHTML .= "<img  style='margin-left:0px;' src='components/com_jobs/images/Acrobat.png'  width='30' height='30' border=\"0\" alt=\"CV\" title=\"CV\"/></a>";
								echo $cvHTML;
							?>
							<!--<input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php	echo $id;?>" onClick="isChecked(this.checked);" />-->
						</td>

						<td><a href="index2.php?option=com_jobs&task=edit_resume&cid=<?php echo $id;?>"><?php echo $title;?></a></td>

						<td><?php echo $hits;?></td>
                        
                        <td><?php echo $nameresume;?></td>

						<td><?php echo $username;?></td>
                        
                        <td><?php echo $cedula;?></td>

						<td><?php echo lknJobsFunctions::getPublishingImage ($published);?></td>

					</tr>



					<?php

					$k = 1 - $k;

					$i ++;

				}



				?>

				</table>

				<input type="hidden" name="hidemainmenu" value="0" />

				<input type="hidden" name="option" value="com_jobs" />

				<input type="hidden" name="boxchecked" value="0" />

				<input type="hidden" name="task" value="list_resumes" />

			</form>
            

		<?php

				if ($adet != '') {

					$published = lknGetParamatre ( $_REQUEST, 'published' );

					$search = lknGetParamatre ( $_REQUEST, 'search' );

					$memberid=lknGetParamatre($_REQUEST,'memberid');

					$toplamSayfa = ( int ) $adet;
					
					$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_resumes&published=$published&search=$search&memberid=$memberid", $toplamSayfa );

					echo $sayfa->sayfaLinkiYaz ();

				}

	}
	function resume_form($row = '',$row_cats,$row_fields,$parent_id_array) {
		global $_db, $option, $_lknBaseFramework, $_config, $task;
		if ($row!='') {
			$id=$row->id;
			$action = _lkn_resume_update;
			$task = 'update_resume';
		} else {
			$id = '';
			$action = _lkn_resume_add;
			$task = 'save_resume';
			//$task = 'new_resume';
		}
		?>

		<h1><?php echo $action;?></h1><br />
		<?php echo lknJobsFields::getJsCode($row_fields);?>
        
<form action="index2.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
			<?php $count_cats=count($row_cats);
			if ($count_cats>0) {
			
				lknTabs::startTabPanel(0);
			
					//$fields_array=lknJobsFields::getFieldsArray($row_fields,$row);
					//lknJobsFields::printFields($row_cats,$fields_array,$parent_id_array);

							  lknTabs::startTab ("Datos Personales"); 
							  ?>
                              
							  	  <table width="782" border="0" >
									<tr><td colspan="4">Los campos de color <span class="obligatorio">naranja</span> son obligatorios.</td></tr><tr><td colspan="4">&nbsp;</td></tr>
									<tr>
									  
									  <td width="304" class="obligatorio"><span onMouseOut="return nd();" onMouseOver="return overlib('Ingrese su nombre completo, por ejemplo Luis Romero', CAPTION, 'Información', BELOW, RIGHT);">Nombre Completo</span></td>
									  
									  <td width="385"><span onMouseOut="return nd();" onMouseOver="return overlib('Ingrese número de teléfono de su casa', CAPTION, 'Información', BELOW, RIGHT);">Teléfono de Casa</span></td>
									</tr>
									<tr>
									  <td><input name="db_name" type="text" class="text_area" id="db_name" value="<?php echo $row->name; ?>" size="50" maxlength="255" /></td>
									  
									  <td><input name="db_home_phone" type="text" class="text_area" id="db_home_phone" value="<?php echo $row->home_phone; ?>" size="50" maxlength="20" /></td>
									</tr>
									<tr>
									 
									  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Si actualmente trabaja, registre el teléfono de su trabajo', CAPTION, 'Información', BELOW, RIGHT);">Teléfono de Trabajo</span></td>
									 
									  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Su número de celular', CAPTION, 'Información', BELOW, RIGHT);">Número de Celular</span></td>
									</tr>
									<tr>
									 
									  <td><input name="db_work_phone" type="text" class="text_area" id="db_work_phone" value="<?php echo $row->work_phone; ?>" size="50" maxlength="20" /></td>
									
									  <td><input name="db_cell_phone" type="text" class="text_area" id="db_cell_phone" value="<?php echo $row->cell_phone; ?>" size="50" maxlength="20" /></td>
									</tr>
									<tr>
									  
									  <td class="obligatorio"><span onMouseOut="return nd();" onMouseOver="return overlib('Ingrese su E-MAIL', CAPTION, 'Información', BELOW, RIGHT);">Correo Electrónico</span></td>
									  
									  <td><span onMouseOut="return nd();" onMouseOver="return overlib('¿Usted actualmente trabaja?', CAPTION, 'Información', BELOW, RIGHT);">Yo trabajo actualmente</span></td>
									</tr>
									<tr>
									 
									  <td><input type="text" class="text_area" size="50" maxlength="255" name="db_email_address" value="<?php echo $row->email_address; ?>" /></td>
									  
									  <td><select id="db_lknjobs_currentlyworking" name="db_lknjobs_currentlyworking">
										  <option></option>
                                          
										<?php 
				  if($row->lknjobs_currentlyworking=='Yes'){ echo "<option value='Yes' selected='selected'>Si</option>"; }
				  else {  echo "<option value='Yes'>Si</option>"; }
				  if($row->lknjobs_currentlyworking=='No'){ echo "<option value='No' selected='selected'>No</option>"; }
				  else { echo "<option value='No'>No</option>"; } 
				  
			  ?>
									  </select>
									  </td>
									</tr>
									<tr>
									 
									  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Ingrese su dirección actual', CAPTION, 'Información', BELOW, RIGHT);">Dirección</span></td>
									  
									  <td class="obligatorio"><span onMouseOut="return nd();" onMouseOver="return overlib('Puede cargar una imagen para su Curriculum. Click sobre el botón y seleccione la imagen de su computadora', CAPTION, 'Información', BELOW, RIGHT);">Fotografia del Curriculum</span></td>
									</tr>
									<tr>
									
									  <td rowspan="3"><textarea class="text_area" name="db_street" rows="3" cols="38" onKeyUp="return ismaxlength(this);" va="va" id="db_street" ><?php echo $row->street; ?></textarea></td>
									  
									  <td>
		   <input type="file" name="db_image" title="Elige una imagen para subir" size="36" class="text_area" id="db_image" />
									  <input type="hidden" id="old_image" name="old_image" value="<?php echo $row->image?>" />
									  
									  </td>    
									</tr>
									<tr>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									  	<td rowspan="2">							  
											<?php
                                              	$imagen_cv = $_config ['resume_image_folder'];
                                              	$allowed_images = $_config ['allowedimages'];
                                              	$image_size = $_config ['uploadSizeLimit'];
                                              	$logo_folder = LIVE_SITE . $logo_folder;
                                          	?>
										<img src="<?php	echo $logo_folder . $imagen_cv . $row->image;?>" 
                                        name="imagelib" width="80" height="80" border="1" style="margin-left:-431px;"/>
                                   		</td>
									</tr>
									<tr>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									</tr> 
									<tr>
									 
									  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la ciudad en la que vive', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
									  
									  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el estado o provincia', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
									</tr>
									<tr>
									 
									  <td><input name="db_city" type="text" class="text_area" id="db_city" value="<?php echo $row->city; ?>" size="50" maxlength="255" /></td>
									 
									  <td><input name="db_state" type="text" class="text_area" id="db_state" value="<?php echo $row->state; ?>" size="50" maxlength="20" /></td>
									</tr>
									<tr>
									 
									  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Ingrese su zip code', CAPTION, 'Información', BELOW, RIGHT);">Zip Code</span></td>
									  
									  <td><span onMouseOut="return nd();" onMouseOver="return overlib('¿Tiene licencia para conducir?', CAPTION, 'Información', BELOW, RIGHT);">¿Tiene licencia para conducir?</span></td>
									</tr>
									<tr>
									 
									  <td><input name="db_zip_code" type="text" class="text_area" id="db_zip_code" value="<?php echo $row->zip_code; ?>" size="50" maxlength="20" /></td>
									 
									  <td><select id="db_lknjobs_dl" name="db_lknjobs_dl">
										<option></option>
										<?php 
				  if($row->lknjobs_dl=='Yes'){ echo "<option value='Yes' selected='selected'>Si</option>"; }
				  else {  echo "<option value='Yes'>Si</option>"; }
				  if($row->lknjobs_dl=='No'){ echo "<option value='No' selected='selected'>No</option>"; }
				  else { echo "<option value='No'>No</option>"; } 
				  
			  ?>
									  </select></td>
									  
									</tr>
                                    
                                    
									<tr>
									 
									  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Si tiene licencia de conducir, ingres el número', CAPTION, 'Información', BELOW, RIGHT);">Número licencia de conducir en caso de tener</span></td>
                                      
									  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Escriba sus habilidades de trabajo como por ejemplo conocimientos informáticos, etc', CAPTION, 'Información', BELOW, RIGHT);">Habilidades</span></td>
									</tr>
									<tr>
									
									  <td><input type="text" class="text_area" size="50" maxlength="255" name="db_lknjobs_dlnumber" value="<?php echo $row->lknjobs_dlnumber; ?>" id="db_lknjobs_dlnumber" /></td>
									
									  <td rowspan="4">
									  <textarea class="text_area" name="db_skills" rows="5" cols="40" id="db_skills" 
									  ><?php echo $row->skills; ?></textarea></td>
									</tr>
									<tr>
									  <td>
                                      <span onMouseOut="return nd();" 
                                      onMouseOver="return overlib('Ingrese su estado civil', CAPTION, 'Información', BELOW, RIGHT);">Estado civil</span></td>
									  <td></td>
									  <td>&nbsp;</td>
									</tr>
									<tr>
									 
									  <td>
                                      		<select size="1" name="db_civil"  id="db_civil" style="font-size:12px;">
                                              <?php $selectedCivil = ($row->civil == "Soltero(a)")? 'selected="selected"': ''  ?>
									          <option <?php echo $selectedCivil;?> >Soltero(a)</option>
									          <?php $selectedCivil = ($row->civil == "Casado(a)")? 'selected="selected"': ''  ?>
									          <option <?php echo $selectedCivil;?> >Casado(a)</option>
									          <?php $selectedCivil = ($row->civil == "Divorciado(a)")? 'selected="selected"': ''  ?>
									          <option <?php echo $selectedCivil;?> >Divorciado(a)</option>
									          <?php $selectedCivil = ($row->civil == "Viudo(a)")? 'selected="selected"': ''  ?>
									          <option <?php echo $selectedCivil;?> >Viudo(a)</option>
									          <?php $selectedCivil = ($row->civil == "Religioso(a)")? 'selected="selected"': ''  ?>
									          <option <?php echo $selectedCivil;?> >Religioso(a)</option>
									          <?php $selectedCivil = ($row->civil == "Union Libre")? 'selected="selected"': ''  ?>
									          <option <?php echo $selectedCivil;?> >Union Libre</option>
                                            </select>
        								</td>
									  <td>&nbsp;</td>
									</tr> 
									<tr>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									</tr> 
								  </table>
							  <?php
							  lknTabs::endTab ();
											   
						      lknTabs::startTab ("Curriculum Vitae"); 
							  ?>
                                  <table width="718" border="0">
                                  <tr>
                                  <td colspan="5">Los campos de color <span class="obligatorio">naranja</span> son obligatorios.</td>
                                  </tr>
                                  
                                  <tr>
                                  <td width="24">&nbsp;</td>
                                  <td colspan="2">&nbsp;</td>
                                  <td width="12">&nbsp;</td>
                                  <td width="301">&nbsp;</td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2" class="obligatorio"><span onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el Título para éste Curriculum', CAPTION, 'Información', BELOW, RIGHT);"> Título del Curriculum</span></td>
                                  <td>&nbsp;</td>
                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Puede ingresar un alias o dejar vacio. Si deja vacio se generara automáticamente. Alias es usado para crear URL amigables', CAPTION, 'Información', BELOW, RIGHT);"> Alias </span></td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2"><input type="text" class="text_area" size="50" maxlength="50" name="db_title" value="<?php echo $row->title; ?>" /></td>
                                  <td>&nbsp;</td>
                                  <td><input name="db_alias" type="text" class="text_area" value="<?php echo $row->alias; ?>" size="50" maxlength="255" /></td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2" class="obligatorio"><span onMouseOut="return nd();" onMouseOver="return overlib('Seleccione el nombre de usuario al que le pertenece el Curriculum', CAPTION, 'Información', BELOW, RIGHT);"> Nombre de Usuario</span></td>
                                  <td>&nbsp;</td>
                                  <td class="obligatorio"><span onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el Idioma del Curriculum', CAPTION, 'Información', BELOW, RIGHT);">Idioma</span></td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2">
                                  <?php
                                  $sql = "select id, username from #__users order by 2";
                                  $_db->query($sql);
                                  $_db->setQuery(); 
                                  $rows=$_db->loadObjectList();
								  ?>
                                  
                                  <select id="db_memberid" name="db_memberid">
                                  <option></option>
                                  <?php
                                  foreach($rows as $fila){
                                  if ($fila->id==$row->memberid){
                                  echo "<option value='".$fila->id."' selected='selected'>".$fila->username."</option>";
                                  }
                                  else{
                                  echo "<option value='".$fila->id."'>".$fila->username."</option>";
                                  }
                                  }
                                  
                                  ?>
                                  </select>
                                  </td>
                                  <td>&nbsp;</td>
                                  <td><input name="db_language" type="text" class="text_area" value="<?php echo $row->language; ?>" size="50" maxlength="30" /></td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2"><span onMouseOut="return nd();" onMouseOver="return overlib('Fecha de creación del Curriculum', CAPTION, 'Información', BELOW, RIGHT);">Fecha de Creación</span></td>
                                  <td>&nbsp;</td>
                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Fecha de la ultima modificación', CAPTION, 'Información', BELOW, RIGHT);">Última modificación</span></td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2"><input type="text" value="<?php echo $row->created; ?>" maxlength="100" size="30" id="db_created" name="db_created" />
                                  <input type="reset" value=" ... " onClick="return showCalendar('db_created', '%Y-%m-%d %H:%M:%S', '24', true);" /></td>
                                  <td>&nbsp;</td>
                                  <td><?php echo $row->update_date;?></td>
                                  </tr>
                                  
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2" class="obligatorio"> <span onMouseOut="return nd();" onMouseOver="return overlib('Seleccione el estado de publicación del Curriculum ', CAPTION, 'Información', BELOW, RIGHT);"> Publicar</span></td>
                                  <td>&nbsp;</td>
                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('¡Cuantas veces a sido visitado?', CAPTION, 'Información', BELOW, RIGHT);">Resume Hits</span></td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2">
                                  	<!--
                                  <select id="db_published" name="db_published">-->
                                  <?php 
                                  /*
	                                  if($row->published==1){ echo "<option value='1' selected='selected'>Published</option>"; }
	                                  else {  echo "<option value='1'>Published</option>"; }
	                                  if($row->published==0){ echo "<option value='0' selected='selected'>Unpublished</option>"; }
	                                  else { echo "<option value='0'>Unpublished</option>"; } 
	                                  if($row->published==-2){ echo "<option value='-2' selected='selected'>Deleted by user</option>"; }
	                                  else { echo "<option value='-2'>Deleted by user</option>"; } 	
	                                  */
                                  ?>
                                  <!--
                                  </select>
                              		-->
                                  </td>
                                  <td>&nbsp;</td>
                                  <td>-</td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2"><span onMouseOut="return nd();" onMouseOver="return overlib('Fecha desde la que puede empezar a trabajar', CAPTION, 'Información', BELOW, RIGHT);">Fecha que puede empezar a trabajar</span></td>
                                  <td>&nbsp;</td>
                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Salario que desea ganar por realizar el trabajo', CAPTION, 'Información', BELOW, RIGHT);">Salario que desea ganar</span></td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2"><input type="text" value="<?php echo $row->created; ?>" maxlength="100" size="30" id="db_available_date" name="db_available_date"/>
                                  <input type="reset" value=" ... " onClick="return showCalendar('db_available_date', '%Y-%m-%d', '24', true);" />
                                  
                                  
                                  
                                  
                                  </td>
                                  <td>&nbsp;</td>
                                  <td><input type="text" class="text_area" size="50" maxlength="255" name="db_desired_pay" value="<?php echo $row->desired_pay; ?>" /></td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2"><span onMouseOut="return nd();" onMouseOver="return overlib('Si existe una razon de indisponibilidad, ingresela aquí', CAPTION, 'Información', BELOW, RIGHT);">Indisponibilidad</span></td>
                                  <td>&nbsp;</td>
                                  <td class="obligatorio"><span onMouseOut="return nd();" onMouseOver="return overlib('Seleccione el tipo de trabajo que esta interesado', CAPTION, 'Información', BELOW, RIGHT);">Tipo de trabajo</span></td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2" rowspan="3"><textarea class="text_area" name="db_unavailability" rows="3" cols="40" 
                                  onkeyup="return ismaxlength(this);" ><?php echo $row->unavailability; ?></textarea></td>
                                  <td>&nbsp;</td>
                                  <td><select id="db_job_type" name="db_job_type">
                                  <option></option>
                                  <?php 
                                  if($row->job_type==1){ echo "<option value='1' selected='selected'>Temporalmente</option>"; }
                                  else {  echo "<option value='1'>Temporalmente</option>"; }
                                  if($row->job_type==2){ echo "<option value='2' selected='selected'>Estudiante</option>"; }
                                  else { echo "<option value='2'>Estudiante</option>"; } 
                                  if($row->job_type==3){ echo "<option value='3' selected='selected'>Interno</option>"; }
                                  else { echo "<option value='3'>Interno</option>"; } 	
                                  if($row->job_type==4){ echo "<option value='4' selected='selected'>Contrato</option>"; }
                                  else {  echo "<option value='4'>Contrato</option>"; }
                                  if($row->job_type==5){ echo "<option value='5' selected='selected'>Medio Tiempo</option>"; }
                                  else { echo "<option value='5'>Medio Tiempo</option>"; } 
                                  if($row->job_type==6){ echo "<option value='6' selected='selected'>Tiempo Completo</option>"; }
                                  else { echo "<option value='6'>Tiempo Completo</option>"; }
                                  ?>
                                  </select></td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2"><span onMouseOut="return nd();" onMouseOver="return overlib('¿Puede trabajar los fines de semana y noches?', CAPTION, 'Información', BELOW, RIGHT);">¿Puede trabajar los fines de semana y noches?</span></td>
                                  <td>&nbsp;</td>
                                  <td></td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td width="104">
                                  <?php
                                  if ($row->lknjobs_canwork[0]=="E")
                                  { 
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Evening' name='db_lknjobs_canwork[]' />";
                                  }
                                  else {
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Evening' name='db_lknjobs_canwork[]' />";
                                  }
                                  ?>Noches 
                                  </td>
                                  <td width="272"><?php
                                  if ($row->lknjobs_canwork[8]=="W" || $row->lknjobs_canwork[0]=="W")
                                  { 
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Weekdays' name='db_lknjobs_canwork[]' />";
                                  }
                                  else {
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Weekdays' name='db_lknjobs_canwork[]' />";
                                  }
                                  ?>Fines de Semana</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2"><span onMouseOut="return nd();" onMouseOver="return overlib('¿Qué días puede trabajar?', CAPTION, 'Información', BELOW, RIGHT);">Disponible</span></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="4">
                                  <?php 
                                  if ($row->lknjobs_available[0]=="L")
                                  { 
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Lunes' name='db_lknjobs_available[]' />";
                                  }
                                  else {
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Lunes' name='db_lknjobs_available[]' />";
                                  }?>Lunes     
                                  
                                  <?php 
                                  if ($row->lknjobs_available[1]=="a" || $row->lknjobs_available[7]=="a")
                                  { 
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Martes' name='db_lknjobs_available[]' />";
                                  }
                                  else {
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Martes' name='db_lknjobs_available[]' />";
                                  }?>Martes      
                                  
                                  <?php 
                                  if (
                                  ($row->lknjobs_available[0]=="M") && ($row->lknjobs_available[1]=="i") || 
                                  ($row->lknjobs_available[13]=="M") && ($row->lknjobs_available[14]=="i") ||
                                  ($row->lknjobs_available[6]=="M") && ($row->lknjobs_available[7]=="i") ||
                                  ($row->lknjobs_available[7]=="M") && ($row->lknjobs_available[8]=="i")
                                  )
                                  { 
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Miércoles' name='db_lknjobs_available[]' />";
                                  }
                                  else {
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Miércoles' name='db_lknjobs_available[]' />";
                                  }
                                  ?>Miércoles 
                                  
                                  <?php 
                                  if (
                                  $row->lknjobs_available[0]=="J" ||
                                  $row->lknjobs_available[24]=="J" ||
                                  $row->lknjobs_available[13]=="J" ||
                                  $row->lknjobs_available[6]=="J" ||
                                  $row->lknjobs_available[7]=="J" ||
                                  $row->lknjobs_available[11]=="J" ||
                                  $row->lknjobs_available[17]=="J" ||
                                  $row->lknjobs_available[18]=="J"
                                  )
                                  { 
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Jueves' name='db_lknjobs_available[]' />";
                                  }
                                  else {
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Jueves' name='db_lknjobs_available[]' />";
                                  }
                                  ?>Jueves
                                  
                                  <?php 
                                  if (
                                  $row->lknjobs_available[0]=="V" ||
                                  $row->lknjobs_available[31]=="V" ||
                                  $row->lknjobs_available[13]=="V" ||
                                  $row->lknjobs_available[6]=="V" ||
                                  $row->lknjobs_available[7]=="V" ||
                                  $row->lknjobs_available[11]=="V" ||
                                  $row->lknjobs_available[17]=="V" ||
                                  $row->lknjobs_available[18]=="V" ||
                                  $row->lknjobs_available[24]=="V" ||
                                  $row->lknjobs_available[25]=="V" ||
                                  $row->lknjobs_available[20]=="V" ||
                                  $row->lknjobs_available[14]=="V"
                                  )
                                  { 
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Viernes' name='db_lknjobs_available[]' />";
                                  }
                                  else {
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Viernes' name='db_lknjobs_available[]' />";
                                  }
                                  ?>Viernes
                                  
                                  
                                  <?php 
                                  if (
                                  $row->lknjobs_available[0]=="S"  ||
                                  $row->lknjobs_available[39]=="S" ||
                                  $row->lknjobs_available[31]=="S" ||
                                  $row->lknjobs_available[13]=="S" ||
                                  $row->lknjobs_available[6]=="S" ||
                                  $row->lknjobs_available[7]=="S" ||
                                  $row->lknjobs_available[11]=="S" ||
                                  $row->lknjobs_available[17]=="S" ||
                                  $row->lknjobs_available[18]=="S" ||
                                  $row->lknjobs_available[24]=="S" ||
                                  $row->lknjobs_available[25]=="S" ||
                                  $row->lknjobs_available[20]=="S" ||
                                  $row->lknjobs_available[14]=="S" ||
                                  $row->lknjobs_available[15]=="S" ||
                                  $row->lknjobs_available[21]=="S" ||
                                  $row->lknjobs_available[16]=="S" ||
                                  $row->lknjobs_available[33]=="S" ||
                                  $row->lknjobs_available[26]=="S" ||
                                  $row->lknjobs_available[8]=="S"
                                  )
                                  { 
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' checked='checked' class='checkbox' value='Sábado' name='db_lknjobs_available[]' />";
                                  }
                                  else {
                                  echo "<input type='checkbox' style='margin: 0pt 5px 5px 0pt;' class='checkbox' value='Sábado' name='db_lknjobs_available[]' />";
                                  }
                                  ?>Sábado</td>
                                  </tr>
          </table>
							  <?php
							  lknTabs::endTab ();
							  lknTabs::startTab ( "Estudios" ); 
							  ?>
                                  <table width="936" border="0">
                                  
                                    <tr>
								        <td height="74" ><fieldset class="titulofielset">
								          <legend>Colegio </legend>
								          <table width="779" border="0">
								            <tr>
								              <td width="148"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el nombre del Colegio', CAPTION, 'Información', BELOW, RIGHT);">Nombre del Colegio</span></td>
								              
								              <td width="96"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Actualmente es un estudiante o graduado?', CAPTION, 'Información', BELOW, RIGHT);">Diploma</span></td>
								              
								              <td width="126"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la Ciudad donde se encuentra el Colegio', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
								              
								              <td width="391"><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('Ingrese la Provincia donde se encuentra el Colegio', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
								            </tr>
								            <tr>
								              
								              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_school" value="<?php echo $row->school; ?>" /></td>
								              
								              <td><select id="db_lknjobs_schooldiploma" name="db_lknjobs_schooldiploma" >
								                <option></option>
								                <?php 
								                                  if($row->lknjobs_schooldiploma=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
								                                  else {  echo "<option value='Graduado'>Graduado</option>"; }
								                                  if($row->lknjobs_schooldiploma=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
								                                  else { echo "<option value='Estudiante'>Estudiante</option>"; } 
								                                  
								                                  ?>
								              </select></td>
								              
								              <td><input type="text" class="text_area" size="15" maxlength="255" name="db_school_city" value="<?php echo $row->school_city; ?>" /></td>
								              
								              <td><input type="text" class="text_area" size="15" maxlength="255" name="db_school_state" value="<?php echo $row->school_state; ?>" /></td>
								            </tr>
								          </table>
								        </fieldset></td>
								      </tr>
                                      <tr>
									       <td height="74">
									        <fieldset class="titulofielset">
									          <legend>Universidad</legend>
									          <table border="0">
									            <tr>
									              <td width="160"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el nombre de la Universidad', CAPTION, 'Información', BELOW, RIGHT);">Nombre de la Universidad</span></td>
									             
									              <td width="69"><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('¿Actualmente es un estudiante o graduado?', CAPTION, 'Información', BELOW, RIGHT);">Estado academico</span></td>
									              <td width="13">&nbsp;</td>
									              <td width="112"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la Ciudad donde se encuentra la Universidad', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
									              <td width="13">&nbsp;</td>
									              <td width="97"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la Provincia donde se encuentra la Universidad', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
									              <td width="9">&nbsp;</td>
									              <td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Año que estudio en la Institución', CAPTION, 'Información', BELOW, RIGHT);">Año</span></td>
									              <td width="10">&nbsp;</td>
									              <td width="131"><span class="titulostables"onmouseout="return nd();" onMouseOver="return overlib('Área que estudio en la Institución', CAPTION, 'Información', BELOW, RIGHT);">Título obtenido</span></td>
									            </tr>
									            <tr>
									              <td>
									              <input type="text" class="text_area" size="20" maxlength="255" name="db_school1" value="<?php echo $row->school1; ?>" />
									              </td>
									              <td>
									              	<select name="db_lknjobs_schooldiplomauniversity" id="db_lknjobs_schooldiplomauniversity">
									                <option></option>
									                <?php 

													if($row->lknjobs_schooldiplomauniversity=='Graduado'){ 

														echo "<option value='Graduado' selected='selected'>Graduado</option>";
													}else {  
														echo "<option value='Graduado'>Graduado</option>"; 
													}

													if($row->lknjobs_schooldiplomauniversity=='Estudiante'){ 
														echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; 
													}else { 
														echo "<option value='Estudiante'>Estudiante</option>"; 
													} 
													?>
									              	</select>
									              </td>
									              <td>&nbsp;</td>
									              <td>
									              	<input type="text" class="text_area" size="15" maxlength="255" name="db_school_city1" value="<?php echo $row->school_city1; ?>" />
									            	</td>
									              <td>&nbsp;</td>
									              <td>
									              	<input type="text" class="text_area" size="15" maxlength="255" name="db_school_state1" value="<?php echo $row->school_state1; ?>" />
									           	  </td>
									              <td>&nbsp;</td>
									              <td>
									              	<input type="text" class="text_area" size="20" maxlength="255" name="db_diploma_text1" value="<?php echo $row->diploma_text1; ?>"/>
									              </td>
									              <td>&nbsp;</td>
									              <td>
									                <input type="text" class="text_area" size="20" maxlength="255" name="db_study_area1"  value="<?php echo $row->study_area1; ?>" />
									              </td>
									            </tr>
									            <tr>
									              <td>
									              <input type="text" class="text_area" size="20" maxlength="255" name="db_school1a" value="<?php echo $row->school1a; ?>" />
									              </td>
									              <td>
									              	<select name="db_lknjobs_schooldiplomauniversity1a" id="db_lknjobs_schooldiplomauniversity1a">
									                <option></option>
									                <?php 
													if($row->lknjobs_schooldiplomauniversity1a=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
													else {  echo "<option value='Graduado'>Graduado</option>"; }
													if($row->lknjobs_schooldiplomauniversity1a=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
													else { echo "<option value='Estudiante'>Estudiante</option>"; } 
													?>
									              	</select>
									              </td>
									              <td>&nbsp;</td>
									              <td>
									              	<input type="text" class="text_area" size="15" maxlength="255" name="db_school_city1a" value="<?php echo $row->school_city1a; ?>" />
									            	</td>
									              <td>&nbsp;</td>
									              <td>
									              	<input type="text" class="text_area" size="15" maxlength="255" name="db_school_state1a" value="<?php echo $row->school_state1a; ?>" />
									           	  </td>
									              <td>&nbsp;</td>
									              <td>
									              	<input type="text" class="text_area" size="20" maxlength="255" name="db_study_area1a"  value="<?php echo $row->study_area1a; ?>" />
									              </td>
									              <td>&nbsp;</td>
									              <td>
									              	<input type="text" class="text_area" size="20" maxlength="255" name="db_diploma_text1a" value="<?php echo $row->diploma_text1a; ?>"/>
									              </td>
									            </tr>
									          </table>
									        </fieldset></td>
									      </tr>
									      <tr>
									        <td height="74" ><fieldset class="titulofielset">
									          <legend>Estudios de 4to Nivel</legend>
									          <table border="0">
									            <tr>
									             
									              <td width="164"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el nombre de la Universidad', CAPTION, 'Información', BELOW, RIGHT);">Nombre de la Universidad</span></td>
									              
									              <td width="68"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Actualmente es un estudiante o graduado?', CAPTION, 'Información', BELOW, RIGHT);">Estado académico</span></td>
									              <td width="10">&nbsp;</td>
									              <td width="112"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la Ciudad donde se encuentra el Instituto', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
									              <td width="14">&nbsp;</td>
									              <td width="97"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la Provincia donde se encuentra la Universidad', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
									              <td width="10">&nbsp;</td>
									              <td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Año que estudio en el Instituto', CAPTION, 'Información', BELOW, RIGHT);">Año</span></td>
									              <td width="10">&nbsp;</td>
									              <td width="130"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Área que estudio en el Institución', CAPTION, 'Información', BELOW, RIGHT);">Título obtenido</span></td>
									            </tr>
									            
									            <tr>
									             
									              <td>
									            <input name="db_school2" type="text" class="text_area" value="<?php echo $row->school2; ?>" size="20" maxlength="255" />		
									            </td>
									              
									              <td><select id="db_lknjobs_schooldiplomagrad" name="db_lknjobs_schooldiplomagrad">
									                <option></option>
									                <?php 
									                                  if($row->lknjobs_schooldiplomagrad=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
									                                  else {  echo "<option value='Graduado'>Graduado</option>"; }
									                                  if($row->lknjobs_schooldiplomagrad=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
									                                  else { echo "<option value='Estudiante'>Estudiante</option>"; } 
									                                  
									                                  ?>
									              </select></td>
									              <td>&nbsp;</td>
									              <td><input name="db_school_city2" type="text" class="text_area" value="<?php echo $row->school_city2; ?>" size="15" maxlength="255" /></td>
									              <td>&nbsp;</td>
									              <td><input name="db_school_state2" type="text" class="text_area" value="<?php echo $row->school_state2; ?>" size="15" maxlength="255" /></td>
									              <td>&nbsp;</td>
									              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_diploma_text2" value="<?php echo $row->diploma_text2; ?>" /></td>
									              <td>&nbsp;</td>
									              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_study_area2" value="<?php echo $row->study_area2; ?>" /></td>
									            </tr>
									            
									                <!-- 
									                MACF
									                2ESTUDIO 4 NIVEL 
									                -->
									              <tr>
									              <td>
									            <input name="db_school5" type="text" class="text_area" value="<?php echo $row->school5; ?>" size="20" maxlength="255" />
									              </td>
									              
									              <td>
									              <select id="db_lknjobs_schooldiplomagrad5" name="db_lknjobs_schooldiplomagrad5">
									                <option></option>
									                <?php 
									                                  if($row->lknjobs_schooldiplomagrad5=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
									                                  else {  echo "<option value='Graduado'>Graduado</option>"; }
									                                  if($row->lknjobs_schooldiplomagrad5=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
									                                  else { echo "<option value='Estudiante'>Estudiante</option>"; } 
									                                  
									                                  ?>
									              </select></td>
									              <td>&nbsp;</td>
									              <td><input name="db_school_city5" type="text" class="text_area" value="<?php echo $row->school_city5; ?>" size="15" maxlength="255" /></td>
									              <td>&nbsp;</td>
									              <td><input name="db_school_state5" type="text" class="text_area" value="<?php echo $row->school_state5; ?>" size="15" maxlength="255" /></td>
									              <td>&nbsp;</td>
									              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_diploma_text5" value="<?php echo $row->diploma_text5; ?>" /></td>
									              <td>&nbsp;</td>
									              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_study_area5" value="<?php echo $row->diploma_text5; ?>" /></td>
									            </tr>
									            
									               <!-- 
									                MACF
									                3ESTUDIO 4 NIVEL 
									                -->
									              <tr>
									              <td><input name="db_school6" type="text" class="text_area" value="<?php echo $row->school6; ?>" size="20" maxlength="255" /></td>
									              
									              <td>
									              <select id="db_lknjobs_schooldiplomagrad6" name="db_lknjobs_schooldiplomagrad6">
									                <option></option>
									                <?php 
									                                  if($row->lknjobs_schooldiplomagrad6=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
									                                  else {  echo "<option value='Graduado'>Graduado</option>"; }
									                                  if($row->lknjobs_schooldiplomagrad6=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
									                                  else { echo "<option value='Estudiante'>Estudiante</option>"; } 
									                                  
									                                  ?>
									              </select></td>
									              <td>&nbsp;</td>
									              <td><input name="db_school_city6" type="text" class="text_area" value="<?php echo $row->school_city6; ?>" size="15" maxlength="255" /></td>
									              <td>&nbsp;</td>
									              <td><input name="db_school_state6" type="text" class="text_area" value="<?php echo $row->school_state6; ?>" size="15" maxlength="255" /></td>
									              <td>&nbsp;</td>
									              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_diploma_text6" value="<?php echo $row->diploma_text6; ?>" /></td>
									              <td>&nbsp;</td>
									              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_study_area6" value="<?php echo $row->diploma_text6; ?>" /></td>
									            </tr>
									            
									            
									                <!-- 
									                MACF
									                4ESTUDIO 4 NIVEL 
									                -->
									              <tr>
									              <td><input name="db_school7" type="text" class="text_area" value="<?php echo $row->school7; ?>" size="20" maxlength="255" /></td>
									              
									              <td>
									              <select id="db_lknjobs_schooldiplomagrad7" name="db_lknjobs_schooldiplomagrad7">
									                <option></option>
									                <?php 
									                                  if($row->lknjobs_schooldiplomagrad7=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
									                                  else {  echo "<option value='Graduado'>Graduado</option>"; }
									                                  if($row->lknjobs_schooldiplomagrad7=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
									                                  else { echo "<option value='Estudiante'>Estudiante</option>"; } 
									                                  
									                                  ?>
									              </select></td>
									              <td>&nbsp;</td>
									              <td><input name="db_school_city7" type="text" class="text_area" value="<?php echo $row->school_city7; ?>" size="15" maxlength="255" /></td>
									              <td>&nbsp;</td>
									              <td><input name="db_school_state7" type="text" class="text_area" value="<?php echo $row->school_state7; ?>" size="15" maxlength="255" /></td>
									              <td>&nbsp;</td>
									              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_diploma_text7" value="<?php echo $row->diploma_text7; ?>" /></td>
									              <td>&nbsp;</td>
									              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_study_area7" value="<?php echo $row->diploma_text7; ?>" /></td>
									            </tr>
									            
													<!-- 
									                MACF
									                5ESTUDIO 4 NIVEL 
									                -->
									              <tr>
									              <td><input name="db_school8" type="text" class="text_area" value="<?php echo $row->school8; ?>" size="20" maxlength="255" /></td>
									              
									              <td>
									              <select id="db_lknjobs_schooldiplomagrad8" name="db_lknjobs_schooldiplomagrad8">
									                <option></option>
									                <?php 
									                                  if($row->lknjobs_schooldiplomagrad8=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
									                                  else {  echo "<option value='Graduado'>Graduado</option>"; }
									                                  if($row->lknjobs_schooldiplomagrad8=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
									                                  else { echo "<option value='Estudiante'>Estudiante</option>"; } 
									                                  
									                                  ?>
									              </select></td>
									              <td>&nbsp;</td>
									              <td><input name="db_school_city8" type="text" class="text_area" value="<?php echo $row->school_city8; ?>" size="15" maxlength="255" /></td>
									              <td>&nbsp;</td>
									              <td><input name="db_school_state8" type="text" class="text_area" value="<?php echo $row->school_state8; ?>" size="15" maxlength="255" /></td>
									              <td>&nbsp;</td>
									              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_diploma_text8" value="<?php echo $row->diploma_text8; ?>" /></td>
									              <td>&nbsp;</td>
									              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_study_area8" value="<?php echo $row->diploma_text8; ?>" /></td>
									            </tr>            
									          </table>
									        </fieldset></td>
									      </tr>

									      <tr>
										        <td height="74"><fieldset class="titulofielset">
										          <legend>Otros Estudios</legend>
										          <table width="771" border="0">
										            <tr>
										              
										              <td width="165"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese el nombre de la Universidad', CAPTION, 'Información', BELOW, RIGHT);">Nombre de la Universidad</span></td>
										              
										              <td width="68"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('¿Actualmente es un estudiante o graduado?', CAPTION, 'Información', BELOW, RIGHT);">Estado académico</span></td>
										              <td width="12">&nbsp;</td>
										              <td width="112"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la Ciudad donde se encuentra el Instituto', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
										              <td width="10">&nbsp;</td>
										              <td width="99"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Ingrese la Provincia donde se encuentra la Universidad', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
										              <td width="10">&nbsp;</td>
										              <td width="120"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Año que estudio en el Instituto', CAPTION, 'Información', BELOW, RIGHT);">Año</span></td>
										              <td width="10">&nbsp;</td>
										              <td width="123"><span class="titulostables" onMouseOut="return nd();" onMouseOver="return overlib('Área que estudio en la Institución', CAPTION, 'Información', BELOW, RIGHT);">Título obtenido</span></td>
										            </tr>
										            <tr>
										              
										              <td><input name="db_school3" type="text" class="text_area" size="20" value="<?php echo $row->school3; ?>" /></td>
										              
										              <td><select id="db_lknjobs_schooldiplomaother" name="db_lknjobs_schooldiplomaother">
										                <option></option>
										                <?php 
														if($row->lknjobs_schooldiplomaother=='Graduate'){ echo "<option value='Graduate' selected='selected'>Graduado</option>"; }
														else {  echo "<option value='Graduate'>Graduado</option>"; }
														if($row->lknjobs_schooldiplomaother=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
														else { echo "<option value='Estudiante'>Estudiante</option>"; } 
														
														?>
										              </select></td>
										              <td>&nbsp;</td>
										              <td><input type="text" class="text_area" size="15" maxlength="255" name="db_school_city3" value="<?php echo $row->school_city3; ?>" /></td>
										              <td>&nbsp;</td>
										              <td><span class="adminlist">
										                <input type="text" class="text_area" size="15" maxlength="255" name="db_school_state3" value="<?php echo $row->school_state3; ?>" />
										              </span></td>
										              <td>&nbsp;</td>
										              <td><input type="text" class="text_area" size="20" maxlength="255"  name="db_diploma_text3" value="<?php echo $row->diploma_text3; ?>" /></td>
										              <td>&nbsp;</td>
										              <td><input type="text" class="text_area" size="20" maxlength="255" name="db_study_area3" value="<?php echo $row->study_area3; ?>" /></td>
										            </tr>
										            
										            
										            <!--
										            MACF
										             2OTROS ESTUDIOS
										            -->
										             <tr>
										              
										              <td><input name="db_school9" type="text" class="text_area" size="20" value="<?php echo $row->school9; ?>" /></td>
										              
										              <td><select id="db_lknjobs_schooldiplomaother9" name="db_lknjobs_schooldiplomaother9">
										                <option></option>
										                <?php 
														if($row->lknjobs_schooldiplomaother9=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
														else {  echo "<option value='Graduado'>Graduado</option>"; }
														if($row->lknjobs_schooldiplomaother9=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
														else { echo "<option value='Estudiante'>Estudiante</option>"; } 
														
														?>
										              </select></td>
										              <td>&nbsp;</td>
										              <td><input type="text" class="text_area" size="15" maxlength="255" name="db_school_city9" value="<?php echo $row->school_city9; ?>" /></td>
										              <td>&nbsp;</td>
										              <td><span class="adminlist">
										                <input type="text" class="text_area" size="15" maxlength="255" name="db_school_state9" value="<?php echo $row->school_state9; ?>" />
										              </span></td>
										              <td>&nbsp;</td>
										              <td><input type="text" class="text_area" size="20" maxlength="255"  name="db_diploma_text9" value="<?php echo $row->diploma_text9; ?>" /></td>
										              <td>&nbsp;</td>
										              <td><input type="text" name="db_study_area9" class="text_area" size="20" maxlength="255" value="<?php echo $row->study_area9; ?>" /></td>
										            </tr>
										            
										            <!--
										             MACF
										             3OTROS ESTUDIOS
										            -->
										             <tr>
										              
										              <td><input name="db_school10" type="text" class="text_area" size="20" value="<?php echo $row->school10; ?>" /></td>
										              
										              <td><select id="db_lknjobs_schooldiplomaother10" name="db_lknjobs_schooldiplomaother10">
										                <option></option>
										                <?php 
														if($row->lknjobs_schooldiplomaother10=='Graduado'){ echo "<option value='Graduado' selected='selected'>Graduado</option>"; }
														else {  echo "<option value='Graduado'>Graduado</option>"; }
														if($row->lknjobs_schooldiplomaother10=='Estudiante'){ echo "<option value='Estudiante' selected='selected'>Estudiante</option>"; }
														else { echo "<option value='Estudiante'>Estudiante</option>"; } 
														
														?>
										              </select></td>
										              <td>&nbsp;</td>
										              <td><input type="text" class="text_area" size="15" maxlength="255" name="db_school_city10" value="<?php echo $row->school_city10; ?>" /></td>
										              <td>&nbsp;</td>
										              <td><span class="adminlist">
										                <input type="text" class="text_area" size="15" maxlength="255" name="db_school_state10" value="<?php echo $row->school_state10; ?>" />
										              </span></td>
										              <td>&nbsp;</td>
										              <td><input type="text" class="text_area" size="20" maxlength="255"  name="db_diploma_text10" value="<?php echo $row->diploma_text10; ?>" /></td>
										              <td>&nbsp;</td>
										              <td><input type="text" name="db_study_area10" class="text_area" size="20" maxlength="255" value="<?php echo $row->study_area10; ?>" /></td>
										            </tr>
										          </table>
										        </fieldset></td>
										      </tr>
										      <tr>
										        <td colspan="10"></td>
										      </tr>
										      <tr></tr>
										      <tr></tr>
                                  </table>
							  <?php
							  lknTabs::endTab ();
							  lknTabs::startTab ( "Idiomas" ); 
							  ?>
                                  <table width="475" border="0" >
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td>Idiomas </td>
                                  <td width="59"><span 	onmouseout="return nd();" 
                                  onmouseover="return overlib('Nivel que puede leer éste Idioma', CAPTION, 'Información', BELOW, RIGHT);">
                                  Lectura
                                  </span></td>
                                  <td width="68"><span 	onmouseout="return nd();" 
                                  onmouseover="return overlib('Nivel que puede escribir éste Idioma', CAPTION, 'Información', BELOW, RIGHT);">
                                  Escritura
                                  </span></td>
                                  <td width="83"><span 	onmouseout="return nd();" 
                                  onmouseover="return overlib('Nivel que puede entender éste Idioma', CAPTION, 'Información', BELOW, RIGHT);">
                                  Comprensión
                                  </span></td>
                                  <td width="152"><span 	onmouseout="return nd();" 
                                  onmouseover="return overlib('Lugar donde aprendio éste idioma', CAPTION, 'Información', BELOW, RIGHT);">¿Dónde lo aprendio?</span></td>
                                  </tr>
                                  <tr>
                                  <td width="16">1.</td>
                                  <td width="57">
                                  <input type="text" class="text_area" name="db_lang_1" id="db_lang_1" maxlength="10" value="<?php echo $row->lang_1; ?>">
                                  </td>
                                  <td>
                                  <select id="db_lang_1_reading" name="db_lang_1_reading">
                                  <option></option>
                                  <?php 
                                  if($row->lang_1_reading==1){ echo "<option value=1 selected='selected'>1</option>"; }
                                  else {  echo "<option value=1>1</option>"; }
                                  if($row->lang_1_reading==2){ echo "<option value=2 selected='selected'>2</option>"; }
                                  else {  echo "<option value=2>2</option>"; }
                                  if($row->lang_1_reading==3){ echo "<option value=3 selected='selected'>3</option>"; }
                                  else {  echo "<option value=3>3</option>"; }
                                  if($row->lang_1_reading==4){ echo "<option value=4 selected='selected'>4</option>"; }
                                  else {  echo "<option value=4>4</option>"; }
                                  if($row->lang_1_reading==5){ echo "<option value=5 selected='selected'>5</option>"; }
                                  else {  echo "<option value=5>5</option>"; }
                                  if($row->lang_1_reading==6){ echo "<option value=6 selected='selected'>6</option>"; }
                                  else {  echo "<option value=6>6</option>"; }
                                  if($row->lang_1_reading==7){ echo "<option value=7 selected='selected'>7</option>"; }
                                  else {  echo "<option value=7>7</option>"; }
                                  if($row->lang_1_reading==8){ echo "<option value=8 selected='selected'>8</option>"; }
                                  else {  echo "<option value=8>8</option>"; }
                                  if($row->lang_1_reading==9){ echo "<option value=9 selected='selected'>9</option>"; }
                                  else {  echo "<option value=9>9</option>"; }
                                  if($row->lang_1_reading==10){ echo "<option value=10 selected='selected'>10</option>"; }
                                  else {  echo "<option value=10>10</option>"; }
                                  ?>
                                  </select>	
                                  </td>
                                  <td><select name="db_lang_1_writing" id="db_lang_1_writing">
                                  <option></option>
                                  <?php 
                                  if($row->lang_1_writing==1){ echo "<option value=1 selected='selected'>1</option>"; }
                                  else {  echo "<option value=1>1</option>"; }
                                  if($row->lang_1_writing==2){ echo "<option value=2 selected='selected'>2</option>"; }
                                  else {  echo "<option value=2>2</option>"; }
                                  if($row->lang_1_writing==3){ echo "<option value=3 selected='selected'>3</option>"; }
                                  else {  echo "<option value=3>3</option>"; }
                                  if($row->lang_1_writing==4){ echo "<option value=4 selected='selected'>4</option>"; }
                                  else {  echo "<option value=4>4</option>"; }
                                  if($row->lang_1_writing==5){ echo "<option value=5 selected='selected'>5</option>"; }
                                  else {  echo "<option value=5>5</option>"; }
                                  if($row->lang_1_writing==6){ echo "<option value=6 selected='selected'>6</option>"; }
                                  else {  echo "<option value=6>6</option>"; }
                                  if($row->lang_1_writing==7){ echo "<option value=7 selected='selected'>7</option>"; }
                                  else {  echo "<option value=7>7</option>"; }
                                  if($row->lang_1_writing==8){ echo "<option value=8 selected='selected'>8</option>"; }
                                  else {  echo "<option value=8>8</option>"; }
                                  if($row->lang_1_writing==9){ echo "<option value=9 selected='selected'>9</option>"; }
                                  else {  echo "<option value=9>9</option>"; }
                                  if($row->lang_1_writing==10){ echo "<option value=10 selected='selected'>10</option>"; }
                                  else {  echo "<option value=10>10</option>"; }
                                  ?>
                                  </select></td>
                                  <td><select name="db_lang_1_understanding" id="db_lang_1_understanding">
                                  <option></option>
                                  <?php 
                                  if($row->lang_1_understanding==1){ echo "<option value=1 selected='selected'>1</option>"; }
                                  else {  echo "<option value=1>1</option>"; }
                                  if($row->lang_1_understanding==2){ echo "<option value=2 selected='selected'>2</option>"; }
                                  else {  echo "<option value=2>2</option>"; }
                                  if($row->lang_1_understanding==3){ echo "<option value=3 selected='selected'>3</option>"; }
                                  else {  echo "<option value=3>3</option>"; }
                                  if($row->lang_1_understanding==4){ echo "<option value=4 selected='selected'>4</option>"; }
                                  else {  echo "<option value=4>4</option>"; }
                                  if($row->lang_1_understanding==5){ echo "<option value=5 selected='selected'>5</option>"; }
                                  else {  echo "<option value=5>5</option>"; }
                                  if($row->lang_1_understanding==6){ echo "<option value=6 selected='selected'>6</option>"; }
                                  else {  echo "<option value=6>6</option>"; }
                                  if($row->lang_1_understanding==7){ echo "<option value=7 selected='selected'>7</option>"; }
                                  else {  echo "<option value=7>7</option>"; }
                                  if($row->lang_1_understanding==8){ echo "<option value=8 selected='selected'>8</option>"; }
                                  else {  echo "<option value=8>8</option>"; }
                                  if($row->lang_1_understanding==9){ echo "<option value=9 selected='selected'>9</option>"; }
                                  else {  echo "<option value=9>9</option>"; }
                                  if($row->lang_1_understanding==10){ echo "<option value=10 selected='selected'>10</option>"; }
                                  else {  echo "<option value=10>10</option>"; }
                                  ?>
                                  </select></td>
                                  <td>
                                  <input type="text" name="db_lang_1_where" id="db_lang_1_where" maxlength="255" value="<?php echo $row->lang_1_where; ?>">
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>2.</td>
                                  <td><input type="text" class="text_area" name="db_lang_2" id="db_lang_2" maxlength="10" value="<?php echo $row->lang_2; ?>">
                                  </td>
                                  <td><select name="db_lang_2_reading" id="db_lang_2_reading">
                                  <option></option>
                                  <?php 
                                  if($row->lang_2_reading==1){ echo "<option value=1 selected='selected'>1</option>"; }
                                  else {  echo "<option value=1>1</option>"; }
                                  if($row->lang_2_reading==2){ echo "<option value=2 selected='selected'>2</option>"; }
                                  else {  echo "<option value=2>2</option>"; }
                                  if($row->lang_2_reading==3){ echo "<option value=3 selected='selected'>3</option>"; }
                                  else {  echo "<option value=3>3</option>"; }
                                  if($row->lang_2_reading==4){ echo "<option value=4 selected='selected'>4</option>"; }
                                  else {  echo "<option value=4>4</option>"; }
                                  if($row->lang_2_reading==5){ echo "<option value=5 selected='selected'>5</option>"; }
                                  else {  echo "<option value=5>5</option>"; }
                                  if($row->lang_2_reading==6){ echo "<option value=6 selected='selected'>6</option>"; }
                                  else {  echo "<option value=6>6</option>"; }
                                  if($row->lang_2_reading==7){ echo "<option value=7 selected='selected'>7</option>"; }
                                  else {  echo "<option value=7>7</option>"; }
                                  if($row->lang_2_reading==8){ echo "<option value=8 selected='selected'>8</option>"; }
                                  else {  echo "<option value=8>8</option>"; }
                                  if($row->lang_2_reading==9){ echo "<option value=9 selected='selected'>9</option>"; }
                                  else {  echo "<option value=9>9</option>"; }
                                  if($row->lang_2_reading==10){ echo "<option value=10 selected='selected'>10</option>"; }
                                  else {  echo "<option value=10>10</option>"; }
                                  ?>
                                  </select></td>
                                  <td><select name="db_lang_2_writing" id="db_lang_2_writing">
                                  <option></option>
                                  <?php 
                                  if($row->lang_2_writing==1){ echo "<option value=1 selected='selected'>1</option>"; }
                                  else {  echo "<option value=1>1</option>"; }
                                  if($row->lang_2_writing==2){ echo "<option value=2 selected='selected'>2</option>"; }
                                  else {  echo "<option value=2>2</option>"; }
                                  if($row->lang_2_writing==3){ echo "<option value=3 selected='selected'>3</option>"; }
                                  else {  echo "<option value=3>3</option>"; }
                                  if($row->lang_2_writing==4){ echo "<option value=4 selected='selected'>4</option>"; }
                                  else {  echo "<option value=4>4</option>"; }
                                  if($row->lang_2_writing==5){ echo "<option value=5 selected='selected'>5</option>"; }
                                  else {  echo "<option value=5>5</option>"; }
                                  if($row->lang_2_writing==6){ echo "<option value=6 selected='selected'>6</option>"; }
                                  else {  echo "<option value=6>6</option>"; }
                                  if($row->lang_2_writing==7){ echo "<option value=7 selected='selected'>7</option>"; }
                                  else {  echo "<option value=7>7</option>"; }
                                  if($row->lang_2_writing==8){ echo "<option value=8 selected='selected'>8</option>"; }
                                  else {  echo "<option value=8>8</option>"; }
                                  if($row->lang_2_writing==9){ echo "<option value=9 selected='selected'>9</option>"; }
                                  else {  echo "<option value=9>9</option>"; }
                                  if($row->lang_2_writing==10){ echo "<option value=10 selected='selected'>10</option>"; }
                                  else {  echo "<option value=10>10</option>"; }
                                  ?>
                                  </select></td>
                                  <td><select name="db_lang_2_understanding" id="db_lang_2_understanding">
                                  <option></option>
                                  <?php 
                                  if($row->lang_2_understanding==1){ echo "<option value=1 selected='selected'>1</option>"; }
                                  else {  echo "<option value=1>1</option>"; }
                                  if($row->lang_2_understanding==2){ echo "<option value=2 selected='selected'>2</option>"; }
                                  else {  echo "<option value=2>2</option>"; }
                                  if($row->lang_2_understanding==3){ echo "<option value=3 selected='selected'>3</option>"; }
                                  else {  echo "<option value=3>3</option>"; }
                                  if($row->lang_2_understanding==4){ echo "<option value=4 selected='selected'>4</option>"; }
                                  else {  echo "<option value=4>4</option>"; }
                                  if($row->lang_2_understanding==5){ echo "<option value=5 selected='selected'>5</option>"; }
                                  else {  echo "<option value=5>5</option>"; }
                                  if($row->lang_2_understanding==6){ echo "<option value=6 selected='selected'>6</option>"; }
                                  else {  echo "<option value=6>6</option>"; }
                                  if($row->lang_2_understanding==7){ echo "<option value=7 selected='selected'>7</option>"; }
                                  else {  echo "<option value=7>7</option>"; }
                                  if($row->lang_2_understanding==8){ echo "<option value=8 selected='selected'>8</option>"; }
                                  else {  echo "<option value=8>8</option>"; }
                                  if($row->lang_2_understanding==9){ echo "<option value=9 selected='selected'>9</option>"; }
                                  else {  echo "<option value=9>9</option>"; }
                                  if($row->lang_2_understanding==10){ echo "<option value=10 selected='selected'>10</option>"; }
                                  else {  echo "<option value=10>10</option>"; }
                                  ?>
                                  </select></td>
                                  <td><input type="text" name="db_lang_2_where" id="db_lang_2_where" maxlength="255" value="<?php echo $row->lang_2_where; ?>"></td>
                                  </tr>
                                  <tr>
                                  <td>3.</td>
                                  <td><input type="text" class="text_area" name="db_lang_3" id="db_lang_3" maxlength="10" value="<?php echo $row->lang_3; ?>">
                                  </td>
                                  <td><select name="db_lang_3_reading" id="db_lang_3_reading">
                                  <option></option>
                                  <?php 
                                  if($row->lang_3_reading==1){ echo "<option value=1 selected='selected'>1</option>"; }
                                  else {  echo "<option value=1>1</option>"; }
                                  if($row->lang_3_reading==2){ echo "<option value=2 selected='selected'>2</option>"; }
                                  else {  echo "<option value=2>2</option>"; }
                                  if($row->lang_3_reading==3){ echo "<option value=3 selected='selected'>3</option>"; }
                                  else {  echo "<option value=3>3</option>"; }
                                  if($row->lang_3_reading==4){ echo "<option value=4 selected='selected'>4</option>"; }
                                  else {  echo "<option value=4>4</option>"; }
                                  if($row->lang_3_reading==5){ echo "<option value=5 selected='selected'>5</option>"; }
                                  else {  echo "<option value=5>5</option>"; }
                                  if($row->lang_3_reading==6){ echo "<option value=6 selected='selected'>6</option>"; }
                                  else {  echo "<option value=6>6</option>"; }
                                  if($row->lang_3_reading==7){ echo "<option value=7 selected='selected'>7</option>"; }
                                  else {  echo "<option value=7>7</option>"; }
                                  if($row->lang_3_reading==8){ echo "<option value=8 selected='selected'>8</option>"; }
                                  else {  echo "<option value=8>8</option>"; }
                                  if($row->lang_3_reading==9){ echo "<option value=9 selected='selected'>9</option>"; }
                                  else {  echo "<option value=9>9</option>"; }
                                  if($row->lang_3_reading==10){ echo "<option value=10 selected='selected'>10</option>"; }
                                  else {  echo "<option value=10>10</option>"; }
                                  ?>
                                  </select></td>
                                  <td><select name="db_lang_3_writing" id="db_lang_3_writing">
                                  <option></option>
                                  <?php 
                                  if($row->lang_3_writing==1){ echo "<option value=1 selected='selected'>1</option>"; }
                                  else {  echo "<option value=1>1</option>"; }
                                  if($row->lang_3_writing==2){ echo "<option value=2 selected='selected'>2</option>"; }
                                  else {  echo "<option value=2>2</option>"; }
                                  if($row->lang_3_writing==3){ echo "<option value=3 selected='selected'>3</option>"; }
                                  else {  echo "<option value=3>3</option>"; }
                                  if($row->lang_3_writing==4){ echo "<option value=4 selected='selected'>4</option>"; }
                                  else {  echo "<option value=4>4</option>"; }
                                  if($row->lang_3_writing==5){ echo "<option value=5 selected='selected'>5</option>"; }
                                  else {  echo "<option value=5>5</option>"; }
                                  if($row->lang_3_writing==6){ echo "<option value=6 selected='selected'>6</option>"; }
                                  else {  echo "<option value=6>6</option>"; }
                                  if($row->lang_3_writing==7){ echo "<option value=7 selected='selected'>7</option>"; }
                                  else {  echo "<option value=7>7</option>"; }
                                  if($row->lang_3_writing==8){ echo "<option value=8 selected='selected'>8</option>"; }
                                  else {  echo "<option value=8>8</option>"; }
                                  if($row->lang_3_writing==9){ echo "<option value=9 selected='selected'>9</option>"; }
                                  else {  echo "<option value=9>9</option>"; }
                                  if($row->lang_3_writing==10){ echo "<option value=10 selected='selected'>10</option>"; }
                                  else {  echo "<option value=10>10</option>"; }
                                  ?>
                                  </select></td>
                                  <td><select name="db_lang_3_understanding" id="db_lang_3_understanding">
                                  <option></option>
                                  <?php 
                                  if($row->lang_3_understanding==1){ echo "<option value=1 selected='selected'>1</option>"; }
                                  else {  echo "<option value=1>1</option>"; }
                                  if($row->lang_3_understanding==2){ echo "<option value=2 selected='selected'>2</option>"; }
                                  else {  echo "<option value=2>2</option>"; }
                                  if($row->lang_3_understanding==3){ echo "<option value=3 selected='selected'>3</option>"; }
                                  else {  echo "<option value=3>3</option>"; }
                                  if($row->lang_3_understanding==4){ echo "<option value=4 selected='selected'>4</option>"; }
                                  else {  echo "<option value=4>4</option>"; }
                                  if($row->lang_3_understanding==5){ echo "<option value=5 selected='selected'>5</option>"; }
                                  else {  echo "<option value=5>5</option>"; }
                                  if($row->lang_3_understanding==6){ echo "<option value=6 selected='selected'>6</option>"; }
                                  else {  echo "<option value=6>6</option>"; }
                                  if($row->lang_3_understanding==7){ echo "<option value=7 selected='selected'>7</option>"; }
                                  else {  echo "<option value=7>7</option>"; }
                                  if($row->lang_3_understanding==8){ echo "<option value=8 selected='selected'>8</option>"; }
                                  else {  echo "<option value=8>8</option>"; }
                                  if($row->lang_3_understanding==9){ echo "<option value=9 selected='selected'>9</option>"; }
                                  else {  echo "<option value=9>9</option>"; }
                                  if($row->lang_3_understanding==10){ echo "<option value=10 selected='selected'>10</option>"; }
                                  else {  echo "<option value=10>10</option>"; }
                                  ?>
                                  </select></td>
                                  <td><input type="text" name="db_lang_3_where" id="db_lang_3_where" maxlength="255" value="<?php echo $row->lang_3_where; ?>"></td>
                                  </tr>
                                  <tr>
                                  <td>4.</td>
                                  <td><input type="text" class="text_area" name="db_lang_4" id="db_lang_4" maxlength="10" value="<?php echo $row->lang_4; ?>">
                                  </td>
                                  <td><select name="db_lang_4_reading" id="db_lang_4_reading">
                                  <option></option>
                                  <?php 
                                  if($row->lang_4_reading==1){ echo "<option value=1 selected='selected'>1</option>"; }
                                  else {  echo "<option value=1>1</option>"; }
                                  if($row->lang_4_reading==2){ echo "<option value=2 selected='selected'>2</option>"; }
                                  else {  echo "<option value=2>2</option>"; }
                                  if($row->lang_4_reading==3){ echo "<option value=3 selected='selected'>3</option>"; }
                                  else {  echo "<option value=3>3</option>"; }
                                  if($row->lang_4_reading==4){ echo "<option value=4 selected='selected'>4</option>"; }
                                  else {  echo "<option value=4>4</option>"; }
                                  if($row->lang_4_reading==5){ echo "<option value=5 selected='selected'>5</option>"; }
                                  else {  echo "<option value=5>5</option>"; }
                                  if($row->lang_4_reading==6){ echo "<option value=6 selected='selected'>6</option>"; }
                                  else {  echo "<option value=6>6</option>"; }
                                  if($row->lang_4_reading==7){ echo "<option value=7 selected='selected'>7</option>"; }
                                  else {  echo "<option value=7>7</option>"; }
                                  if($row->lang_4_reading==8){ echo "<option value=8 selected='selected'>8</option>"; }
                                  else {  echo "<option value=8>8</option>"; }
                                  if($row->lang_4_reading==9){ echo "<option value=9 selected='selected'>9</option>"; }
                                  else {  echo "<option value=9>9</option>"; }
                                  if($row->lang_4_reading==10){ echo "<option value=10 selected='selected'>10</option>"; }
                                  else {  echo "<option value=10>10</option>"; }
                                  ?>
                                  </select></td>
                                  <td><select name="db_lang_4_writing" id="db_lang_4_writing">
                                  <option></option>
                                  <?php 
                                  if($row->lang_4_writing==1){ echo "<option value=1 selected='selected'>1</option>"; }
                                  else {  echo "<option value=1>1</option>"; }
                                  if($row->lang_4_writing==2){ echo "<option value=2 selected='selected'>2</option>"; }
                                  else {  echo "<option value=2>2</option>"; }
                                  if($row->lang_4_writing==3){ echo "<option value=3 selected='selected'>3</option>"; }
                                  else {  echo "<option value=3>3</option>"; }
                                  if($row->lang_4_writing==4){ echo "<option value=4 selected='selected'>4</option>"; }
                                  else {  echo "<option value=4>4</option>"; }
                                  if($row->lang_4_writing==5){ echo "<option value=5 selected='selected'>5</option>"; }
                                  else {  echo "<option value=5>5</option>"; }
                                  if($row->lang_4_writing==6){ echo "<option value=6 selected='selected'>6</option>"; }
                                  else {  echo "<option value=6>6</option>"; }
                                  if($row->lang_4_writing==7){ echo "<option value=7 selected='selected'>7</option>"; }
                                  else {  echo "<option value=7>7</option>"; }
                                  if($row->lang_4_writing==8){ echo "<option value=8 selected='selected'>8</option>"; }
                                  else {  echo "<option value=8>8</option>"; }
                                  if($row->lang_4_writing==9){ echo "<option value=9 selected='selected'>9</option>"; }
                                  else {  echo "<option value=9>9</option>"; }
                                  if($row->lang_4_writing==10){ echo "<option value=10 selected='selected'>10</option>"; }
                                  else {  echo "<option value=10>10</option>"; }
                                  ?>
                                  </select></td>
                                  <td><select name="db_lang_4_understanding" id="db_lang_4_understanding">
                                  <option></option>
                                  <?php 
                                  if($row->lang_4_understanding==1){ echo "<option value=1 selected='selected'>1</option>"; }
                                  else {  echo "<option value=1>1</option>"; }
                                  if($row->lang_4_understanding==2){ echo "<option value=2 selected='selected'>2</option>"; }
                                  else {  echo "<option value=2>2</option>"; }
                                  if($row->lang_4_understanding==3){ echo "<option value=3 selected='selected'>3</option>"; }
                                  else {  echo "<option value=3>3</option>"; }
                                  if($row->lang_4_understanding==4){ echo "<option value=4 selected='selected'>4</option>"; }
                                  else {  echo "<option value=4>4</option>"; }
                                  if($row->lang_4_understanding==5){ echo "<option value=5 selected='selected'>5</option>"; }
                                  else {  echo "<option value=5>5</option>"; }
                                  if($row->lang_4_understanding==6){ echo "<option value=6 selected='selected'>6</option>"; }
                                  else {  echo "<option value=6>6</option>"; }
                                  if($row->lang_4_understanding==7){ echo "<option value=7 selected='selected'>7</option>"; }
                                  else {  echo "<option value=7>7</option>"; }
                                  if($row->lang_4_understanding==8){ echo "<option value=8 selected='selected'>8</option>"; }
                                  else {  echo "<option value=8>8</option>"; }
                                  if($row->lang_4_understanding==9){ echo "<option value=9 selected='selected'>9</option>"; }
                                  else {  echo "<option value=9>9</option>"; }
                                  if($row->lang_4_understanding==10){ echo "<option value=10 selected='selected'>10</option>"; }
                                  else {  echo "<option value=10>10</option>"; }
                                  ?>
                                  </select></td>
                                  <td><input type="text" name="db_lang_4_where" id="db_lang_4_where" value="<?php echo $row->lang_4_where; ?>" maxlength="255" /></td>
                                  </tr>
                                  </table>
							  <?php
							  lknTabs::endTab ();
							  lknTabs::startTab ( "Empleo Reciente" ); 
							  ?>
                                  <table width="1024" border="0">
                                  <tr>
                                  <td width="10">&nbsp;</td>
                                  <td width="180" align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuántos años de experiencia tiene?', CAPTION, 'Información', BELOW, RIGHT);">Años de Experiencia</span></td>
                                  <td width="180"><select id="db_experience" name="db_experience">
                                  <option></option>
                                  <?php 
                                  if($row->experience==1){ echo "<option value=1 selected='selected'>1</option>"; }
                                  else {  echo "<option value=1>1</option>"; }
                                  if($row->experience==2){ echo "<option value=2 selected='selected'>2</option>"; }
                                  else {  echo "<option value=2>2</option>"; }
                                  if($row->experience==3){ echo "<option value=3 selected='selected'>3</option>"; }
                                  else {  echo "<option value=3>3</option>"; }
                                  if($row->experience==4){ echo "<option value=4 selected='selected'>4</option>"; }
                                  else {  echo "<option value=4>4</option>"; }
                                  if($row->experience==5){ echo "<option value=5 selected='selected'>5</option>"; }
                                  else {  echo "<option value=5>5</option>"; }
                                  if($row->experience==6){ echo "<option value=6 selected='selected'>6</option>"; }
                                  else {  echo "<option value=6>6</option>"; }
                                  if($row->experience==7){ echo "<option value=7 selected='selected'>7</option>"; }
                                  else {  echo "<option value=7>7</option>"; }
                                  if($row->experience==8){ echo "<option value=8 selected='selected'>8</option>"; }
                                  else {  echo "<option value=8>8</option>"; }
                                  if($row->experience==9){ echo "<option value=9 selected='selected'>9</option>"; }
                                  else {  echo "<option value=9>9</option>"; }
                                  if($row->experience==10){ echo "<option value=10 selected='selected'>10</option>"; }
                                  else {  echo "<option value=10>10</option>"; }
                                  if($row->experience==11){ echo "<option value=10 selected='selected'>10</option>"; }
                                  else {  echo "<option value=11>11</option>"; }
                                  
                                  if($row->experience==12){ echo "<option value=12 selected='selected'>12</option>"; }
                                  else {  echo "<option value=12>12</option>"; }
                                  if($row->experience==13){ echo "<option value=13 selected='selected'>13</option>"; }
                                  else {  echo "<option value=13>13</option>"; }
                                  if($row->experience==14){ echo "<option value=14 selected='selected'>14</option>"; }
                                  else {  echo "<option value=14>14</option>"; }
                                  if($row->experience==15){ echo "<option value=15 selected='selected'>15</option>"; }
                                  else {  echo "<option value=15>15</option>"; }
                                  if($row->experience==16){ echo "<option value=16 selected='selected'>16</option>"; }
                                  else {  echo "<option value=16>16</option>"; }
                                  if($row->experience==17){ echo "<option value=17 selected='selected'>17</option>"; }
                                  else {  echo "<option value=17>17</option>"; }
                                  if($row->experience==18){ echo "<option value=18 selected='selected'>18</option>"; }
                                  else {  echo "<option value=18>18</option>"; }
                                  if($row->experience==19){ echo "<option value=19 selected='selected'>19</option>"; }
                                  else {  echo "<option value=19>19</option>"; }
                                  if($row->experience==20){ echo "<option value=20 selected='selected'>20</option>"; }
                                  else {  echo "<option value=20>20</option>"; }
                                  
                                  if($row->experience==21){ echo "<option value=21 selected='selected'>21</option>"; }
                                  else {  echo "<option value=21>21</option>"; }
                                  if($row->experience==22){ echo "<option value=22 selected='selected'>22</option>"; }
                                  else {  echo "<option value=22>22</option>"; }
                                  if($row->experience==23){ echo "<option value=23 selected='selected'>23</option>"; }
                                  else {  echo "<option value=23>23</option>"; }
                                  if($row->experience==24){ echo "<option value=24 selected='selected'>24</option>"; }
                                  else {  echo "<option value=24>24</option>"; }
                                  if($row->experience==25){ echo "<option value=25 selected='selected'>25</option>"; }
                                  else {  echo "<option value=25>25</option>"; }
                                  if($row->experience==26){ echo "<option value=26 selected='selected'>26</option>"; }
                                  else {  echo "<option value=26>26</option>"; }
                                  if($row->experience==27){ echo "<option value=27 selected='selected'>27</option>"; }
                                  else {  echo "<option value=27>27</option>"; }
                                  if($row->experience==28){ echo "<option value=28 selected='selected'>28</option>"; }
                                  else {  echo "<option value=28>28</option>"; }
                                  if($row->experience==29){ echo "<option value=29 selected='selected'>29</option>"; }
                                  else {  echo "<option value=29>29</option>"; }
                                  if($row->experience==30){ echo "<option value=30 selected='selected'>30</option>"; }
                                  else {  echo "<option value=30>30</option>"; }
                                  
                                  
                                  ?>
                                  </select></td>
                                  <td width="180">&nbsp;</td>
                                  <td width="180">&nbsp;</td>
                                  <td width="10">&nbsp;</td>
                                  <td width="270">&nbsp;</td>
                                  </tr>
                                  <tr>
                                  <td><span class="adminform">
                                  <legend></legend>
                                  </span></td>
                                  <td><span class="adminform">
                                  <legend></legend></span></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                  <td></td>
                                  <td colspan="6">
                                  <fieldset><legend> Empleo Reciente </legend>
                                  <table border="0">
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Nombre de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Empleador</span></td>
                                  
                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Ciudad de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Sus responsabilidades o actividades en la empresa', CAPTION, 'Información', BELOW, RIGHT);">Responsabilidades</span></td>
                                  </tr>
                                  
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer" value="<?php echo $row->employer; ?>" /></td>
                                  
                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer_city" value="<?php echo $row->employer_city; ?>" /></td>
                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('Su salario antes de salir de la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Último salario</span></td>
                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer_pay" value="<?php echo $row->employer_pay; ?>" /></td>
                                  <td>&nbsp;</td>
                                  <td rowspan="4"><textarea class="text_area" name="db_employer_dut" rows="5" cols="25" onKeyUp="return ismaxlength(this);" ><?php echo $row->employer_dut; ?></textarea></td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('La provincia de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
                                  
                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer_state" value="<?php echo $row->employer_state; ?>" /></td>
                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuándo empezó a trabajar para esta empresa?', CAPTION, 'Información', BELOW, RIGHT);">Fecha</span></td>
                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_employer_from" 
                                  value="<?php echo $row->employer_from; ?>" /></td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('Número de teléfono de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
                                  
                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_employer_phone" value="<?php echo $row->employer_phone; ?>" /></td>
                                  <td width="180" align="right"  ><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál era el nombre completo de su supervisor en esta empresa?', CAPTION, 'Información', BELOW, RIGHT);">Supervisor</span></td>
                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer_sup" value="<?php echo $row->employer_sup; ?>" /></td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('¿En qué posición estaba registrado Él antes de abandonar la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Posición</span></td>
                                  
                                  <td><input type="text" class="text_area" size="30" maxlength="50" name="db_employer_pos" value="<?php echo $row->employer_pos; ?>" /></td>
                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('¿Por qué dejó la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Razón por la cual dejo el trabajo</span></td>
                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer_leave" value="<?php echo $row->employer_leave; ?>" /></td>
                                  <td>&nbsp;</td>
                                  </tr>     
                                  </table>
                                  </fieldset>
                                  </td>
                                  </tr>
                                
                                  <tr>
	                                  <td></td>
	                                  <td colspan="6">
	                                  <fieldset><legend> Empleador (1) </legend>
	                                  <table border="0">
	                                  <tr>
	                                  <td>&nbsp;</td>
	                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Nombre de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Empleador</span></td>
	                                  
	                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Ciudad de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
	                                  <td>&nbsp;</td>
	                                  <td>&nbsp;</td>
	                                  <td>&nbsp;</td>
	                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Sus responsabilidades o actividades en la empresa', CAPTION, 'Información', BELOW, RIGHT);">Responsabilidades</span></td>
	                                  </tr>
	                                  <tr>
	                                  <td>&nbsp;</td>
	                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer1" value="<?php echo $row->employer1; ?>" /></td>
	                                  
	                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer1_city" value="<?php echo $row->employer1_city; ?>" /></td>
	                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('Su salario antes de salir de la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Último salario</span></td>
	                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer1_pay" 
	                                  value="<?php echo $row->employer1_pay; ?>" /></td>
	                                  <td>&nbsp;</td>
	                                  <td rowspan="4"><textarea class="text_area" name="db_employer1_dut" rows="5" cols="25" onKeyUp="return ismaxlength(this);"><?php echo $row->employer1_dut; ?></textarea></td>
                                  </tr>
                                  <tr>
	                                  <td>&nbsp;</td>
		                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('La provincia de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
		                                  
		                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer1_state" 
		                                  value="<?php echo $row->employer1_state; ?>" /></td>
		                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuándo empezó a trabajar para esta empresa?', CAPTION, 'Información', BELOW, RIGHT);">Fecha</span></td>
		                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_employer1_from" value="<?php echo $row->employer1_from; ?>" /></td>
		                                  <td>&nbsp;</td>
		                                  </tr>
		                                  <tr>
		                                  <td>&nbsp;</td>
		                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('Número de teléfono de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
		                                  
		                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_employer1_phone" value="<?php echo $row->employer1_phone; ?>" /></td>
		                                  <td width="180" align="right"  ><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál era el nombre completo de su supervisor en esta empresa?', CAPTION, 'Información', BELOW, RIGHT);">Supervisor</span></td>
		                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer1_sup" value="<?php echo $row->employer1_sup; ?>" /></td>
		                                  <td>&nbsp;</td>
		                                  </tr>
		                                  <tr>
		                                  <td>&nbsp;</td>
		                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('¿En qué posición estaba registrado Él antes de abandonar la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Posición</span></td>
		                                  
		                                  <td><input type="text" class="text_area" size="30" maxlength="50" name="db_employer1_pos" value="<?php echo $row->employer1_pos; ?>" /></td>
		                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('¿Por qué dejó la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Razón por la cual dejo el trabajo</span></td>
		                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer1_leave" value="<?php echo $row->employer1_leave; ?>" /></td>
		                                  <td>&nbsp;</td>
	                                  </tr>     
	                                  </table>
	                                  </fieldset>
                                  </td>
                                  </tr>
                                  
                                  <tr>
                                  <td></td>
                                  <td colspan="6">
                                  <fieldset><legend> Empleador (2) </legend>
                                  <table border="0">
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Nombre de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Empleador</span></td>
                                  
                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Ciudad de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Sus responsabilidades o actividades en la empresa', CAPTION, 'Información', BELOW, RIGHT);">Responsabilidades</span></td>
                                  </tr>
                                  
                                  
                                  
                                  
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer2" value="<?php echo $row->employer2; ?>" /></td>
                                  
                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer2_city" value="<?php echo $row->employer2_city; ?>" /></td>
                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('Su salario antes de salir de la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Último salario</span></td>
                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer2_pay" value="<?php echo $row->employer2_pay; ?>" /></td>
                                  <td>&nbsp;</td>
                                  <td rowspan="4"><textarea class="text_area" name="db_employer2_dut" rows="5" cols="25" onKeyUp="return ismaxlength(this);"><?php echo $row->employer2_dut; ?></textarea></td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('La provincia de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
                                  
                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer2_state" value="<?php echo $row->employer2_state; ?>" /></td>
                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuándo empezó a trabajar para esta empresa?', CAPTION, 'Información', BELOW, RIGHT);">Fecha</span></td>
                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_employer2_from" value="<?php echo $row->employer2_from; ?>" /></td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                  <td>&nbsp;</td>
                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('Número de teléfono de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
                                  
                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_employer2_phone" value="<?php echo $row->employer2_phone; ?>" /></td>
                                  <td width="180" align="right"  ><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál era el nombre completo de su supervisor en esta empresa?', CAPTION, 'Información', BELOW, RIGHT);">Supervisor</span></td>
                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer2_sup" value="<?php echo $row->employer2_sup; ?>" /></td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  <tr>
	                                  <td>&nbsp;</td>
	                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('¿En qué posición estaba registrado Él antes de abandonar la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Posición</span></td>
	                                  
	                                  <td><input type="text" class="text_area" size="30" maxlength="50" name="db_employer2_pos" value="<?php echo $row->employer2_pos; ?>" /></td>
	                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('¿Por qué dejó la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Razón por la cual dejo el trabajo</span></td>
	                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer2_leave" value="<?php echo $row->employer2_leave; ?>" /></td>
	                                  <td>&nbsp;</td>
	                                  </tr>     
	                                  </table>
	                                  <p>&nbsp;</p>
	                                  </fieldset>
	                                  </td>
                                  </tr>
                                  
                                  <tr>
	                                  <td></td>
	                                  <td colspan="6">
	                                  <fieldset><legend> Empleador (3) </legend>
	                                  <table border="0">
	                                  <tr>
	                                  <td>&nbsp;</td>
	                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Nombre de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Empleador</span></td>
	                                  
	                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Ciudad de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Ciudad</span></td>
	                                  <td>&nbsp;</td>
	                                  <td>&nbsp;</td>
	                                  <td>&nbsp;</td>
	                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('Sus responsabilidades o actividades en la empresa', CAPTION, 'Información', BELOW, RIGHT);">Responsabilidades</span></td>
                                  </tr>
                                  <tr>
	                                  <td>&nbsp;</td>
	                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer3" value="<?php echo $row->employer3; ?>" /></td>
	                                  
	                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer3_city" value="<?php echo $row->employer3_city; ?>" /></td>
	                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('Su salario antes de salir de la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Último salario</span></td>
	                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer3_pay" value="<?php echo $row->employer3_pay; ?>" /></td>
	                                  <td>&nbsp;</td>
	                                  <td rowspan="4"><textarea class="text_area" name="db_employer3_dut" rows="5" cols="25" onKeyUp="return ismaxlength(this);"><?php echo $row->employer3_dut; ?></textarea></td>
	                                  </tr>
	                                  <tr>
	                                  <td>&nbsp;</td>
	                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('La provincia de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Provincia</span></td>
	                                  
	                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer3_state" value="<?php echo $row->employer3_state; ?>" /></td>
	                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuándo empezó a trabajar para esta empresa?', CAPTION, 'Información', BELOW, RIGHT);">Fecha</span></td>
	                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_employer3_from" value="<?php echo $row->employer3_from; ?>" /></td>
	                                  <td>&nbsp;</td>
	                                  </tr>
	                                  <tr>
	                                  <td>&nbsp;</td>
	                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('Número de teléfono de su Jefe', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
	                                  
	                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_employer3_phone" value="<?php echo $row->employer3_phone; ?>" /></td>
	                                  <td width="180" align="right"  ><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál era el nombre completo de su supervisor en esta empresa?', CAPTION, 'Información', BELOW, RIGHT);">Supervisor</span></td>
	                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer3_sup" value="<?php echo $row->employer3_sup; ?>" /></td>
	                                  <td>&nbsp;</td>
	                                  </tr>
	                                  <tr>
	                                  <td>&nbsp;</td>
	                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('¿En qué posición estaba registrado Él antes de abandonar la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Posición</span></td>
	                                  
	                                  <td><input type="text" class="text_area" size="30" maxlength="50" name="db_employer3_pos" value="<?php echo $row->employer3_leave; ?>" /></td>
	                                  <td align="right"><span onMouseOut="return nd();" onMouseOver="return overlib('¿Por qué dejó la empresa?', CAPTION, 'Información', BELOW, RIGHT);">Razón por la cual dejo el trabajo</span></td>
	                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_employer3_leave" value="<?php echo $row->employer3_pos; ?>" /></td>
	                                  <td>&nbsp;</td>
	                                  </tr>     
	                                  </table>
	                                  </fieldset>
	                                  </td>
	                                  </tr>
                                  </table>
							  <?php
							  lknTabs::endTab ();
							  lknTabs::startTab ( "Referencias" ); 
							  ?>
                                  <table width="874" border="0">
                                  <tr>
                                  <td>
                                  <fieldset class="adminform">
                                  <legend>Referencia (1)</legend>
                                      <table width="831"  border="0">
                                  <tr>
                                  <td></td>
                                  <td width="208">
                                  <span onMouseOut="return nd();" onMouseOver="return overlib('El nombre de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Nombre</span>
                                  </td>
                                  <td width="27">&nbsp;</td>
                                  <td width="180"><span onMouseOut="return nd();" onMouseOver="return overlib('El número de teléfono de su referencia para contactarnos con él/ella', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
                                  <td width="83">&nbsp;</td>
                                  <td width="180"><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál es la relación entre usted y su referencia (por ejemplo amigo, supervisor de antigua empresa, etc.)?', CAPTION, 'Información', BELOW, RIGHT);">Relación</span></td>
                                  <td width="37">&nbsp;</td>
                                  <td width="168"><span onMouseOut="return nd();" onMouseOver="return overlib('La dirección de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Dirección</span>
                                  </td>
                                  </tr>
                                  <tr><td><!-- Tooltip -->
                                  </td><td><input type="text" class="text_area" size="30" maxlength="255" name="db_ref1_name" value="<?php echo $row->ref1_name; ?>" /></td>
                                  <td>&nbsp;</td>
                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_ref1_telephone" value="<?php echo $row->ref1_telephone; ?>" /></td>
                                  <td>&nbsp;</td>
                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_ref1_relationship" value="<?php echo $row->ref1_relationship; ?>" /></td>
                                  <td>&nbsp;</td>
                                  <td rowspan="3"><textarea class="text_area" name="db_ref1_address" rows="3" cols="25" onKeyUp="return ismaxlength(this);"><?php echo $row->ref1_address; ?></textarea></td>
                                  </tr>
                                  <tr><td><!-- Tooltip -->
                                  </td><td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuántos años conoce a este referencia?', CAPTION, 'Información', BELOW, RIGHT);">Años</span></td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  <tr><td><!-- Tooltip -->
                                  </td><td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_ref1_years" value="<?php echo $row->ref1_years; ?>" /></td>
                                  <td>&nbsp;</td>
                                  
                                  </table>
                                  </fieldset>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>   
                                  <fieldset class="adminform">
                                  <legend>Referencia (2)</legend>
                                      <table width="827"  border="0"> <tr><td><!-- Tooltip -->
                                  </td><td width="190"><span onMouseOut="return nd();" onMouseOver="return overlib('El nombre de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Nombre</span></td>
                                  <td width="110">&nbsp;</td>
                                  <td width="33"><span onMouseOut="return nd();" onMouseOver="return overlib('El número de teléfono de su referencia para contactarnos con él/ella', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
                                  <td width="183">&nbsp;</td>
                                  <td width="22"><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál es la relación entre usted y su referencia (por ejemplo amigo, supervisor de antigua empresa, etc.)?', CAPTION, 'Información', BELOW, RIGHT);">Relación</span></td>
                                  <td width="136">&nbsp;</td>
                                  <td width="17"><span onMouseOut="return nd();" onMouseOver="return overlib('La dirección de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Dirección</span></td>
                                  </tr>
                                  <tr><td ><!-- Tooltip -->
                                  </td><td><input type="text" class="text_area" size="30" maxlength="255" name="db_ref2_name" value="<?php echo $row->ref2_name; ?>" /></td>
                                  <td>&nbsp;</td>
                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_ref2_telephone" value="<?php echo $row->ref2_telephone; ?>" /></td>
                                  <td>&nbsp;</td>
                                  
                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_ref2_relationship" value="<?php echo $row->ref2_relationship; ?>" /></td>
                                  <td>&nbsp;</td>
                                  <td rowspan="3"><textarea class="text_area" name="db_ref2_address" rows="3" cols="25" onKeyUp="return ismaxlength(this);"><?php echo $row->ref2_address; ?></textarea></td>
                                  </tr>
                                  <tr><td ><!-- Tooltip -->
                                  </td><td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuántos años conoce a este referencia?', CAPTION, 'Información', BELOW, RIGHT);">Años</span></td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  <tr><td ><!-- Tooltip -->
                                  </td><td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_ref2_years" value="<?php echo $row->ref2_years; ?>" /></td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  
                                  </table>
                                  </fieldset>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td> 
                                  <fieldset class="adminform">
                                  <legend>Referencia (3)</legend>
                                      <table width="831" border="0"> <tr><td ><!-- Tooltip -->
                                  </td><td width="223"><span onMouseOut="return nd();" onMouseOver="return overlib('El nombre de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Nombre</span></td>
                                  <td width="76">&nbsp;</td>
                                  <td width="36"><span onMouseOut="return nd();" onMouseOver="return overlib('El número de teléfono de su referencia para contactarnos con él/ella', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
                                  <td width="175">&nbsp;</td>
                                  <td width="34"><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál es la relación entre usted y su referencia (por ejemplo amigo, supervisor de antigua empresa, etc.)?', CAPTION, 'Información', BELOW, RIGHT);">Relación</span></td>
                                  <td width="133">&nbsp;</td>
                                  <td width="18"><span onMouseOut="return nd();" onMouseOver="return overlib('La dirección de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Dirección</span></td>
                                  </tr>
                                  <tr><td ><!-- Tooltip -->
                                  </td><td><input type="text" class="text_area" size="30" maxlength="255" name="db_ref3_name" value="<?php echo $row->ref3_name; ?>" /></td>
                                  <td>&nbsp;</td>
                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_ref3_telephone" value="<?php echo $row->ref3_telephone; ?>" /></td>
                                  <td>&nbsp;</td>
                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_ref3_relationship" value="<?php echo $row->ref3_relationship; ?>" /></td>
                                  <td>&nbsp;</td>
                                  <td rowspan="3"><textarea class="text_area" name="db_ref3_address" rows="3" cols="25" onKeyUp="return ismaxlength(this);"><?php echo $row->ref3_address; ?></textarea></td>
                                  </tr>
                                  <tr><td ><!-- Tooltip -->
                                  </td><td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuántos años conoce a este referencia?', CAPTION, 'Información', BELOW, RIGHT);">Años</span></td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  <tr><td ><!-- Tooltip -->
                                  </td><td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_ref3_years" value="<?php echo $row->ref3_years; ?>" /></td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  
                                  </table>
                                  </fieldset>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td> 
                                  <fieldset class="adminform">
                                  <legend>Referencia (4)</legend>
                           			<table width="844" border="0"> <tr><td ><!-- Tooltip -->
                                  </td><td width="223"><span onMouseOut="return nd();" onMouseOver="return overlib('El nombre de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Nombre</span></td>
                                  <td width="76">&nbsp;</td>
                                  <td width="94"><span onMouseOut="return nd();" onMouseOver="return overlib('El número de teléfono de su referencia para contactarnos con él/ella', CAPTION, 'Información', BELOW, RIGHT);">Teléfono</span></td>
                                  <td width="175">&nbsp;</td>
                                  <td width="168"> <span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuál es la relación entre usted y su referencia (por ejemplo amigo, supervisor de antigua empresa, etc.)?', CAPTION, 'Información', BELOW, RIGHT);">Relación</span></td>
                                  <td width="164">&nbsp;</td>
                                  <td width="15"><span onMouseOut="return nd();" onMouseOver="return overlib('La dirección de su referencia', CAPTION, 'Información', BELOW, RIGHT);">Dirección</span></td>
                                  </tr>
                                  <tr><td ><!-- Tooltip -->
                                  </td><td><input type="text" class="text_area" size="30" maxlength="255" name="db_ref4_name" value="<?php echo $row->ref4_name; ?>" /></td>
                                  <td>&nbsp;</td>
                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_ref4_telephone" value="<?php echo $row->ref4_telephone; ?>" /></td>
                                  <td>&nbsp;</td>
                                  <td><input type="text" class="text_area" size="30" maxlength="20" name="db_ref4_relationship" value="<?php echo $row->ref4_relationship; ?>" /></td>
                                  <td>&nbsp;</td>
                                  <td rowspan="3"><textarea class="text_area" name="db_ref4_address" rows="3" cols="25" onKeyUp="return ismaxlength(this);"><?php echo $row->ref4_address; ?></textarea></td>
                                  </tr>
                                  <tr><td ><!-- Tooltip -->
                                  </td><td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><span onMouseOut="return nd();" onMouseOver="return overlib('¿Cuántos años conoce a este referencia?', CAPTION, 'Información', BELOW, RIGHT);">Años</span></td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  <tr><td ><!-- Tooltip -->
                                  </td><td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><input type="text" class="text_area" size="30" maxlength="255" name="db_ref4_years" value="<?php echo $row->ref4_years; ?>" /> </td>
                                  <td>&nbsp;</td>
                                  </tr>
                                  
                                  </table>
                                  </fieldset>
                                  </td>
                                  
                                  <tr>
                                  
                                  
                                  </table>
							  <?php
							  lknTabs::endTab ();
							  
							  lknTabs::startTab ( "Resumen" ); 
							  
							  ?>
                              <textarea class="text_area" name="db_text_resume" rows="3" cols="40" onKeyUp="return ismaxlength(this);"><?php echo $row->text_resume; ?></textarea>
					<?php
					
							  lknTabs::endTab ();?>
							  
							   <?php lknTabs::startTab ("Discapacidad");
								?>
                                <div id="text_resume_discapaciadad">
                                	<textarea class="text_area" name="db_text_resume_discapacidad" 
                                		rows="3" cols="43" id="db_text_resume_discapacidad" >
										<?php echo $row->discapacidad; ?></textarea>
                                </div>
                			  	<?php 
                			  		lknTabs::endTab ();   
								  	lknTabs::startTab ("Condiciones de registro"); 
								?>
									<div id="condicionesresumes" style="text-align:left;">
									<p>
									<strong>CONDICIONES DE ACEPTACIÓN DE EX ALUMNOS</strong>
									<br /> Autorizo a la UTPL para que a través de la Bolsa de Empleo Ex Alumnos, haga uso del registro de mis datos (Hoja de Vida) en forma directa o por medio de terceros en ofertas laborales.<br /></p>
					                <div id="seleccinarestado">
					                <?php
					                
					                  //MACF
					                  //para cuando se crear un CV


					                  if($row->published==''){
					                  	$row->published=0;
					                  } 
					                  
					                  //en caso de edicion
					                  $check1="";
					                  if($row->published==1)
					                  {
					                      $check1='checked="checked"';
					                  }
					                  
					                  $check0="";
					                  if($row->published==0)
					                  {
					                      $check0='checked="checked"';
					                  } 

					                ?>
					                  Acepto
					                  <input name="db_published" type="radio" value="1" id="db_published" <?php echo $check1; ?> />
					                  No acepto
					                  <input name="db_published" type="radio" value="0" id="db_published" <?php echo $check0; ?> /> 
					                  <br />
					                  <!--<input type="submit" value="<?php echo _lkn_apply;?>" class="btn" onClick="document.adminForm.task.value='apply_resume';">    
					                  
					                  --></div>
							          </div>
							          <br /><br /><br /><br /><br /><br />
								  <?php
								  lknTabs::endTab();  
                        lknTabs::endTabPanel();
                        }
					?>			
					<input type="hidden" name="cid" value="<?php echo $id;?>" />
					<input type="hidden" name="option" value="com_jobs" />
					<input type="hidden" name="task" value="<?php echo $task;?>" />
				</form>
				<?php
	}




		



	function list_applications($params) {

		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>

		

		<h1><?php echo _lkn_list_applications;?></h1><br />

		

		<form action="index2.php" method="POST" name="adminForm">

		<?php HTML_jobs::upper ();?>

		<table class="adminlist">

			<thead>

				<tr>

					<th class="title"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo $_config ['recordPerPage'];?>)" /></th>

					<th class="title"><strong><?php echo _lkn_id;?></strong></th>
                    
                    <th class="title"><strong><?php echo _lkn_resume_name;?></strong></th>

					<th class="title"><strong><?php echo _lkn_resume_title;?></strong></th>
                    
                    <th class="title"><strong><?php echo _lkn_company;?></strong></th>

					<th class="title"><strong><?php echo _lkn_job;?></strong></th>
                    
                    <th class="title"><strong><?php echo _lkn_username;?></strong></th>

					<th class="title"><strong><?php echo _lkn_category_name;?></strong></th>
                    
                    <th class="title"><strong><?php	echo _lkn_status;?></strong></th>
				</tr>

	</thead>

		<?php



		$k = 0;

		$adet = $params ['count'];

		$i = 0;

		while ( $row = $_db->fetch_array () ) {

			$job_title = $row ['job_title'];
			$resume_title = $row ['resume_title'];
			$id = $row ['id'];
			$company_title = $row ['company_title'];
			$category_name = $row ['category_name'];
			$status_name = $row ['status_name'];
			$username = $row ['username'];
			$resume_name = $row['resume_name'];
			?>
			<tr class="row<?php
			echo $k;
			?>">
            <td align="center">
            <input type="checkbox" id="cb<?php echo $i;?>"name="cid[]" value="<?php echo $id;?>"onclick="isChecked(this.checked);" />
            </td>
            <td align="center"><?php echo $id;?></td>
       		<td><?php echo $resume_name;?></td>
            <td><?php echo $resume_title;?></td>
            <td><?php echo $company_title;?></td>
            <td><?php echo $job_title;?></td>
            <td><?php echo $username;?></td>
            <td><?php echo $category_name;?></td>
            <td><?php echo $status_name;?></td>
	</tr>



			<?php

			$k = 1 - $k;

			$i ++;

		}



		?>

		</table>

<input type="hidden" name="hidemainmenu" value="0" /> <input

	type="hidden" name="option" value="com_jobs" /> <input type="hidden"

	name="boxchecked" value="0" /> <input type="hidden" name="task"

	value="list_applications" /></form>

<?php

		if ($adet != '') {

			$cat_id = lknGetParamatre ( $_REQUEST, 'cat_id' );

			$company_id = lknGetParamatre ( $_REQUEST, 'company_id' );

			$search = lknText::strToLower(lknGetParamatre($_REQUEST, 'search'));

			$search=urlencode($search);

			$status = lknGetParamatre ( $_REQUEST, 'status' );

			$toplamSayfa = ( int ) $adet;

			$sayfa = new lknSayfalama ( "index2.php?option=com_jobs&task=list_applications&cat_id=$cat_id&company_id=$company_id&search=$search&status=$status", $toplamSayfa );

			echo $sayfa->sayfaLinkiYaz ();

		}

	}



	function application_form($row,$row_resume_files,$row_app_history,$resume_text) {

		global $_lknBaseFramework, $_config, $_db;

		$cover_letter = temizleSlash ( lknText::nl2br ( $row->cover_letter ) );

		$id = $row->application_id;

		$email_memberid = $row->company_owner_id;

		$action = _lkn_app_update;

		$task = 'update_application';

		?>

		<script language="javascript" type="text/javascript">

			<!--

			function submitbutton(pressbutton)

			{

				if(pressbutton=='send_mail_to_applicant')

				{

						var form = document.adminForm;

						if (form.email_email_from.value == ""){

							alert( "You forget to write your email" );

						} else if (form.email_email_to.value == "") {

							alert( "You forget to write applicant e-mail" );

						} else if (form.email_email_subject.value == "") {

							alert( "You forget to write the e-mail subject" );

						} else if (form.email_email_body.value == "") {

							alert( "You forget to write the e-mail body" );

						}else{

							submitform( pressbutton );

						}

				}else

				{

					submitform( pressbutton );

				}





			}

			//-->

			</script>

			

			<h1><?php echo $action;?></h1><br />

			<form id="adminForm" name="adminForm" method="post" action="index2.php"	enctype="multipart/form-data">

			

		<?php lknTabs::startTabPanel();?>

			<?php lknTabs::startTab ( _lkn_resume );?>

					<table class="adminform">

						<tbody>

							<tr>

								<td>

									<fieldset class="adminform">

										<legend><?php echo _lkn_cover_letter;?></legend>

											<table class="admintable">

												<tr>

													<td>

														<?php

															echo $cover_letter;

														?>

													</td>

												</tr>

											</table>

										</fieldset>

										<?php //resume yazımı başladı

											echo $resume_text;

										?>

								</td>

							</tr>

						</tbody>

					</table>

				<?php lknTabs::endTab();?>

			<?php lknTabs::startTab ( _lkn_job_details );?>

				<?php //iş detayları yazdırılmaya başlandı;	?>

					<table class="adminform" border="1">

						<tbody>

							<tr>

								<td>

									<?php lknJobsFunctions::getJobDetail($row);?>

								</td>

							</tr>

						</tbody>

					</table>

				<?php //iş detayları yazdırılması bitti; ?>

				<?php lknTabs::endTab ();?>

				<?php lknTabs::startTab (_lkn_app_details);?>

						<table class="adminform" border="1">

							<tr>

								<td><?php lknJobsFunctions::print_application_details($row);?>

								</td>

							</tr>

						</table>

				<?php lknTabs::endTab ();?>

				<?php lknTabs::startTab (_lkn_app_email_history);?>

					<table class="adminform" border="1">

						<tr>

							<td><?php lknJobsFunctions::createMailForm ( $row );?></td>

						</tr>

					</table>

					<table class="adminform" border="1">

						<tr>

							<td><?php HTML_jobs::print_email_history ( $id, $email_memberid );?></td>

						</tr>

					</table>

				<?php lknTabs::endTab ();?>

				<?php /*?><?php lknTabs::startTab (_lkn_app_history);?>

					<?php echo _lkn_app_history_desc;?>

					<?php HTML_jobs::list_application_history($row_app_history);?>

				<?php lknTabs::endTab ();?><?php */?>

				<?php lknTabs::endTabPanel ();?>

				<input type="hidden" value="<?php echo $id;?>" name="cid" />

				<input type="hidden" value="com_jobs" name="option" />

				<input type="hidden" value="<?php echo $task;?>" name="task" />

			</form>

			<?php

	}

	

	function list_application_history($rows)
	{
		global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;

		?>



		<h1><?php echo _lkn_app_history;?></h1><br />

				<table class="adminlist">

					<thead>

						<tr>

							<th class="title"><strong><?php echo _lkn_id;?></strong></th>

							<th class="title"><strong><?php echo _lkn_app_date;?></strong></th>

							<th class="title"><strong><?php echo _lkn_app_last_update_date;?></strong></th>

							<th class="title"><strong><?php echo _lkn_app_status;?></strong></th>

							<th class="title"><strong><?php echo _lkn_app_comments;?></strong></th>

							<th class="title"><strong><?php echo _lkn_job;?></strong></th>

							<th class="title"><strong><?php echo _lkn_job_reference;?></strong></th>

							<th class="title"><strong><?php echo _lkn_resume;?></strong></th>

						</tr>

					</thead>

					<?php

					$k=1;

					foreach ( $rows as $row ) {

						//print_r($row);

						$id=$row->id;

						$app_date=$row->application_date;

						$app_date=lknDate::formatDate($app_date);

						

						$update_date=$row->update_date;

						$update_date=lknDate::formatDate($update_date);

						

						$status_title=temizleSlash($row->status_title);

						

						$comments=$row->comments;

						if ($comments=='') {

							$comments='-';

						}



						$job_title=$row->job_title;

						$job_id=$row->job_id;

						$job_ref=$row->job_ref;

						if ($job_ref=='') {

							$job_ref='-';

						}

						

						

						$resume_title=$row->resume_title;

						$resume_language=$row->resume_language;



						?>



						<tr class="row<?php	echo $k;?>">

							<td><a href="index2.php?option=com_jobs&task=edit_application&cid=<?php echo $id;?>" target="app"><?php echo $id;?></a></td>

							<td><?php echo $app_date;?></td>

							<td><?php echo $update_date;?></td>

							<td><?php echo $status_title;?></td>

							<td><?php echo $comments;?></td>

							<td><a href="index2.php?option=com_jobs&task=edit_job&cid=<?php echo $job_id?>" target="_job_"><?php echo $job_title;?></a></td>							

							<td><?php echo $job_ref;?></td>

							<td><?php echo $resume_title;?></td>

						</tr>



						<?php



						$k = 1 - $k;



					}

				?>

			</table>

	<?php

	}



	function print_email_history($application_id, $member) {

		$row = lknJobsFunctions::getEmailHistory ( $application_id, $member, 'employer' );

		$email_id = lknGetParamatre ( $_REQUEST, 'email_id' );

		$count = count ( $row );

		if ($count > 0) {

			?>

			

			<fieldset class="adminform">

				<legend><?php echo _lkn_app_email_history;?></legend>

					<table class="adminlist">

						<thead>

							<tr>

								<td class="title"><?php echo _lkn_id;?></td>

								<td class="title"><?php echo _lkn_app_email_subject;?></td>

								<td class="title"><?php echo _lkn_app_email_date;?></td>

								<td class="title"><?php echo _lkn_app_email_sender;?></td>

							</tr>

						</thead>

					<tbody>

					<?php

		}

		foreach ( $row as $v ) {

			$id = $v->id;

			$subject = $v->email_subject;

			$link = "index2.php?option=com_jobs&task=edit_application&cid=$application_id&email_id=$id";

			$link = "<a href=\"$link\">$subject</a>";

			$date = $v->email_date;

			$email_from = $v->email_from;

			$email_subject = $v->email_subject;

			$email_to = $v->email_to;

			$email_body = temizleSlash ( $v->email_body );

			$date = lknDate::formatDate ( $date );

			if ($id == $email_id) {

				?>

			<tr>

			<td colspan="4">

			<table class="adminlist" border="1">

				<tr>

					<td><?php echo _lkn_id;?></td>

					<td><?php echo $id;?></td>

				</tr>

				<tr>

					<td><?php echo _lkn_app_email_from;?></td>

					<td><?php echo $email_from;?></td>

				</tr>

				<tr>

					<td><?php echo _lkn_app_email_to;?></td>

					<td><?php echo $email_to;?></td>

				</tr>

				<tr>

					<td><?php echo _lkn_app_email_subject;?></td>

					<td><?php echo $email_subject;?></td>

				</tr>

				<tr>

					<td colspan="2"><?php echo _lkn_app_email_body;?></td>

				</tr>

				<tr>

					<td colspan="2" align="center"><?php echo $email_body;?></td>

				</tr>

			</table>

			</td>

		</tr>



			<?php

			}

			?>

			<tr>

			<td><?php echo $id;?></td>

			<td><?php echo $link;?></td>

			<td><?php echo $date;?></td>

			<td><?php echo $email_from;?></td>

		</tr>

			<?php

		}



		echo '</tbody></table>';

	}



	function upper() {



		global $task;

		$published = lknGetParamatre ( $_REQUEST, 'published' );

		$search = lknText::strToLower ( lknGetParamatre ( $_REQUEST, 'search' ) );

		?>

		<table class="adminform">

			<tbody>

				<tr>

					<td width="100%"><?php HTML_jobs::searchForm ( $search );?></td>
					<td nowrap="nowrap"><?php 

					$extra = 'onchange="document.adminForm.submit();"';

					if ($task == 'list_categories') {



					$parent_id = lknGetParamatre ( $_REQUEST, 'parent_id' );

		

					$cat = new lknCategory();

					$selectList = $cat->getCategoryList ( 'parent_id', $parent_id, $extra );

		

					//tüm kategorileri listeler

					echo _lkn_parent_category . ': ' . $selectList;

					echo lknhtmlMaker::publishedSelectList ( 'published', $published, $extra );

				} elseif ($task == 'list_companies') {

					$country = lknGetParamatre ( $_REQUEST, 'country', 0 );

					$selectListCountry = lknJobsFunctions::getJobCountries( 'country', $country, $extra,1 );

					//tüm kategorileri listeler

					echo _lkn_country . ': ' . $selectListCountry . ' ';

					echo lknhtmlMaker::publishedSelectList ( 'published', $published, $extra );
					
				}elseif ($task == 'list_jobs') {

					$cat_id = lknGetParamatre ( $_REQUEST, 'cat_id' );

					$cat = new lknCategory();

					$selectList = $cat->getCategoryList ( 'cat_id', $cat_id, $extra );

		

					//tüm kategorileri listeler

					echo _lkn_category_name . ': ' . $selectList . ' ';

					echo lknJobsFunctions::publishSelectList_( 'published', $published, $extra );

				} elseif ($task == 'list_applications') {

					$cat_id = lknGetParamatre ( $_REQUEST, 'cat_id' );

					$company_id = lknGetParamatre ( $_REQUEST, 'company_id' );

					$status = lknGetParamatre ( $_REQUEST, 'status' );

					$cat = new lknCategory ( );

					$selectList = $cat->getCategoryList ( 'cat_id', $cat_id, $extra );

					$companies = lknJobsFunctions::getCompanyList ( 'company_id', $company_id, $extra ,'',1);

					$status = lknJobsFunctions::getStatus ( 'status', $status, $extra ,1);

					//tüm kategorileri listeler

					echo _lkn_category_name . ': ' . $selectList . ' ';

					echo _lkn_company . ': ' . $companies . ' ';

					echo _lkn_status . ': ' . $status . ' ';

				} elseif ($task == 'list_fields') {

					$cat_id = lknGetParamatre ( $_REQUEST, 'cat_id' );

					$field_type = lknGetParamatre ( $_REQUEST, 'field_type' );

					$cats=resumeFieldCategoryList();

					$cats=lknhtmlMaker::selectList($cats,'cat_id',$cat_id,$extra);

					$field_types= lknJobsFields::getFieldTypes('1');

					$field_types=lknhtmlMaker::selectList($field_types,'field_type',$field_type,$extra,'1');

					//tüm kategorileri listeler

					echo _lkn_category_name . ': ' . $cats . ' ';

					echo 'Field Type: ' . $field_types . ' ';

					echo lknhtmlMaker::publishedSelectList ( 'published', $published, $extra );

				} 
				else
				if ($task == 'list_credit_history' || $task=='list_pending_credits' || $task=='list_employers' || $task=='list_workers' ) {

				} else {

					echo lknhtmlMaker::publishedSelectList ( 'published', $published, $extra );

				}
		?>
			</td>

				</tr>

			</tbody>

		</table>

		<?php

	}

	function searchForm($search)
	{
		echo _lkn_search . ':';?>
        <input type="text" onChange="document.adminForm.submit();"	class="text_area" 
        value="<?php echo $search;?>" id="search"	name="search" />
        <button onClick="document.adminForm.submit();">
		<?php echo _lkn_go;?>
        </button>
		<button onClick="document.getElementById('search').value='';document.adminForm.submit();">
		<?php echo _lkn_reset;?>
        </button>
		<?php

	}



	function configuration_form($Itemid) {

		global $_config, $_lknBaseFramework, $option;

		$editor = new lknEditor ();

		$task = 'save_config';

		?>

		<script language="javascript" type="text/javascript">

		<!--

		function submitbutton(pressbutton)

		{

			var form = document.adminForm;

			if (form.config_dateFormat.value.value == ""){

				alert( "<?php echo _lkn_error_date_field;?>" );

			} else if (form.config_recordPerPage.value == ""){

				alert( "<?php echo _lkn_error_records_on_page;?>" );

			}else if (form.config_default_status.value == ""){

				alert( "You need to select the default status" );

			}else if (form.config_download_id.value == ""){

				alert( "You need to write your Download ID" );

			} else {

				tinyMCE.triggerSave();

				submitform( pressbutton );

			}

		}

		//-->

		</script>

		<form action="index2.php" method="post" name="adminForm" id="adminForm">

			<h1><?php echo _lkn_config;?></h1><br />



		<?php lknTabs::startTabPanel();?>

			<?php lknTabs::startTab ( _lkn_config_general );?>

				<table class="adminform" border="1">

					<tr>

						<td width="15%"><strong>Download ID</strong></td>

						<td width="25%"><input type="text" name="config_download_id" id="config_download_id" size="25" value="<?php echo $_config ['download_id'];?>">	</td>

						<td width="60%"><?php echo _lkn_config_download_id_desc;?></td>

					</tr>

					<?php 

					$data=array();

					$data['%Y-%m-%d']='2007-06-01';

					$data['%Y-%m-%d %H:%M:%S']='2007-06-01 14:35:12';

					$data['%e.%m.%Y']='1.06.2007';

					$data['%e.%m.%Y %H:%M:%S']='1.06.2007 14:35:12';

					$data['%e %B %Y']='1 June 2007';

					$data['%e %B %Y %H:%M:%S']='1 June 2007 14:35:12';

					$data['%e/%m/%Y']='1/06/2007';

					$data['%m/%e/%Y %H:%M:%S']='06/1/2007 14:35:12';

					$data['%m/%e/%Y']='06/1/2007';

					$data['%m/%e/%Y %H:%M:%S']='06/1/2007 14:35:12';

					$data['%d-%B-%Y']='01-06-2007';

					$data['%d-%B-%Y %H:%M:%S']='01-06-2007 14:35:12';

					$selectList=lknhtmlMaker::selectList($data,'config_dateFormat',$_config['dateFormat'],'',0);

					?>

					<tr>

						<td width="15%"><?php echo _lkn_config_date_format;?></td>

						<td width="25%"><?php echo $selectList;?></td>

						<td width="60%"><?php echo _lkn_config_date_format_desc;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_records_per_page;?></td>

						<td width="25%"><input type="text" name="config_recordPerPage" id="config_recordPerPage" size="25" value="<?php	echo $_config ['recordPerPage'];?>"></td>

						<td width="60%"><?php echo _lkn_config_records_per_page;?></td>

					</tr>

					</tr>

					<?php 

						$lknFiles = new lknFiles();

						$files = $lknFiles->findFiles($_lknBaseFramework->lknGetPath ( 'component' ) . "/$option/language/", 'php' );

					?>

					<tr>

						<td width="15%"><?php echo _lkn_config_language;?></td>

						<td width="25%"><?php echo lknhtmlMaker::selectList ( $files, "config_languageFile", $_config ['languageFile'], '', 0 );?></td>

						<td width="60%"><?php echo _lkn_config_language_desc;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_default_status;?></td>

						<td width="25%"><?php echo lknJobsFunctions::getStatus( "config_default_status", $_config ['default_status'] );?></td>

						<td width="60%"><?php echo _lkn_config_default_status_desc;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_company_activate;?></td>

						<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( "config_company_activate", $_config ['company_activate'] );?></td>

						<td width="60%"><?php echo _lkn_config_company_activate_desc;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_job_seeker_activate;?></td>

						<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( "config_job_seeker_activate", $_config ['job_seeker_activate'] );?></td>

						<td width="60%"><?php echo _lkn_config_job_seeker_activate_desc;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_show_tool_bar;?></td>

						<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( "config_show_tool_bar", $_config ['show_tool_bar'] , 0, _lkn_show, _lkn_hide );?></td>

						<td width="60%"><?php echo _lkn_config_show_tool_bar_desc;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_category_order;?></td>

						<td width="25%"><?php 

						$data=array();

						$data['title DESC']='Title Descending';

						$data['title ASC']='Title Ascending';

						$data['id DESC']='Category ID Descending';

						$data['id ASC']='Category ID Ascending';

						$selectList=lknhtmlMaker::selectList($data,'config_category_order',$_config['category_order'],'',0);

						echo $selectList;

						?></td>

						<td width="60%"><?php echo _lkn_config_category_order_desc;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_make_jobs_national;?></td>

						<td width="25%"><input type="text" name="config_make_jobs_national" id="config_make_jobs_national" size="25" value="<?php echo $_config ['make_jobs_national'];?>"></td>

						<td width="60%"><?php echo _lkn_config_make_jobs_national_desc;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_hide_company;?></td>

						<td width="25%">

						<?php 

						$data=array();

						$data['1']=_lkn_config_hide_company_all;

						$data['2']=_lkn_config_hide_company_choose;

						$data['3']=_lkn_config_hide_company_hide;

						$selectList=lknhtmlMaker::selectList($data,'config_hide_company',$_config['hide_company'],'',0);

						echo $selectList;

						?>

						</td>

						<td width="60%"><?php echo _lkn_config_hide_company_desc;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_user_registration;?></td>

						<td width="25%">
						<?php 
						$data=array();
						$data['1']=_lkn_config_user_registration_force;
						$data['2']=_lkn_config_user_registration_plugins;
						$selectList=lknhtmlMaker::selectList($data,'config_user_registration',$_config['user_registration'],'',0);
						echo $selectList;
						?>
						</td>
						<td width="60%"><?php echo _lkn_config_user_registration_desc;?></td>
					</tr>
				</table>
			<?php lknTabs::endTab();?>
			<?php lknTabs::startTab ( _lkn_config_email );?>
				<table class="adminform" border="1">
					<tr>
						<td width="15%"><?php echo _lkn_config_email_mailer;?></td>
						<td width="25%">
						<?php 
							$data = array();

							$data ['sendmail'] = _lkn_config_email_mailer_sendmail;

							$data ['mail'] = _lkn_config_email_mailer_mail;

							$data ['smtp'] = _lkn_config_email_mailer_smtp;

							$data ['gmail'] = _lkn_config_email_mailer_gmail;

							$selectList = lknhtmlMaker::selectList ( $data, 'config_mailer', $_config['mailer'], '', 1 );

							echo $selectList;

						?>

						</td>

						<td width="60%" rowspan="5"><?php echo _lkn_config_email_desc;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_gmail_username;?></td>

						<td width="25%"><input type="text" name="config_gmail_username" id="config_gmail_username" size="25" value="<?php echo $_config ['gmail_username'];?>"></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_gmail_password;?></td>

						<td width="25%"><input type="text" name="config_gmail_password" id="config_gmail_password" size="25" value="<?php echo $_config ['gmail_password'];?>"></td>

					</tr>

				</table>

				<br /><br />

				<table class="adminform" border="1">

					<tr>

						<td width="15%"><?php echo _lkn_config_credit_system_inform_me;?></td>

						<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_credit_system_inform_me', $_config ['credit_system_inform_me'] );?></td>

						<td width="60%"><?php echo _lkn_config_credit_system_inform_me_desc;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_company_adding_inform_me;?></td>

						<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_company_adding_inform_me', $_config ['company_adding_inform_me'] );?></td>

						<td width="60%"><?php echo _lkn_config_company_adding_inform_me_desc;?></td>

					</tr>

				</table>

				<table class="adminform" border="1">

					<tr>

						<td width="15%"><?php echo _lkn_config_inform_email;?></td>

						<td width="25%"><input class="inputbox" type="text" name="config_inform_email" size="50" value="<?php echo $_config ['inform_email'];?>" /></td>

						<td width="60%"><?php echo _lkn_config_inform_email_desc;?></td>

					</tr>

				</table>

				<?php lknTabs::endTab();?>
				<?php lknTabs::startTab ( _lkn_config_job_posting );?>

					<table class="adminform" border="1">

						<tr>

							<td width="15%"><?php echo _lkn_config_job_publish_down_up_time_is_editable;?></td>

							<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_job_publish_down_up_time_is_editable', $_config ['job_publish_down_up_time_is_editable'] );?></td>

							<td width="60%"><?php echo _lkn_config_job_publish_down_up_time_is_editable_desc;?></td>

						</tr>

						<tr>

							<td width="15%"><?php echo _lkn_config_job_publish_down;?></td>

							<td width="25%"><?php 

							$data = array();

							for($i = 1; $i < 36; $i ++) {

								$data [$i] = $i;

							}

							$selectList = lknhtmlMaker::selectList ( $data, 'config_default_publish_down', $_config ['default_publish_down'], '', 0 );

							echo $selectList . ' ' . _lkn_config_job_publish_down_months;

							?>

							</td>

							<td width="60%"><?php echo _lkn_config_job_publish_down_desc;?></td>

						</tr>

					</table>

					

				<table class="adminform" border="1">

					<tr>

						<td width="15%"><?php echo _lkn_config_job_posting_redirect_payment_page;?></td>

						<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList('config_job_posting_redirect_payment_page',$_config ['job_posting_redirect_payment_page'])?></td>

						<td width="60%"><?php echo _lkn_config_job_posting_redirect_payment_page_desc;?></td>

					</tr>

				</table>

				<?php lknTabs::endTab();?>
				
				<?php lknTabs::startTab ( _lkn_config_image );?>

				<table class="adminform" border="1">

					<tr>

						<td width="15%"><?php echo _lkn_config_image_logo_image_folder;?></td>

						<td width="25%"><input type="text" name="config_logo_image_folder" id="config_logo_image_folder" size="50" value="<?php echo $_config ['logo_image_folder'];?>"></td>

						<td width="60%"><?php echo _lkn_config_image_logo_image_folder_desc;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_image_resume_image_folder;?></td>

						<td width="25%"><input type="text" name="config_resume_image_folder" id="config_resume_image_folder" size="50" value="<?php echo $_config ['resume_image_folder'];?>"></td>

						<td width="60%"><?php echo _lkn_config_image_resume_image_folder;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_image_allowedimages;?></td>

						<td width="25%"><input type="text" name="config_allowedimages" id="config_allowedimages" size="50" value="<?php echo $_config ['allowedimages'];?>"></td>

						<td width="60%"><?php echo _lkn_config_image_allowedimages_desc;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_image_uploadSizeLimit;?></td>

						<td width="25%"><input type="text" name="config_uploadSizeLimit" id="config_uploadSizeLimit" size="50" value="<?php echo $_config ['uploadSizeLimit'];?>"></td>

						<td width="60%"><?php echo _lkn_config_image_uploadSizeLimit_desc;?></td>

					</tr>

				</table>

				<?php echo _lkn_config_image_resize_desc;?>

				<?php if ($gdv = lknGdVersion ()) {

							if ($gdv >= 2) {

								echo _lkn_config_image_resize_gd_yes;

							} else {

								echo _lkn_config_image_resize_gd_no;

							}

						} else {

							echo _lkn_config_image_resize_gd_no;

						}

						

					echo _lkn_config_image_resize_desc2;?>

					<table class="adminform" border="1">

						<tr>

							<td width="15%"><?php echo _lkn_config_image_resize_active;?></td>

							<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_image_resize_active', $_config ['image_resize_active'] );?></td>

							<td width="60%"><?php echo _lkn_config_image_resize_active_desc;?></td>

						</tr>

						<tr>

							<td width="15%"><?php echo _lkn_config_image_watermark_text;?></td>

							<td width="25%"><input type="text" name="config_image_watermark_text" id="config_image_watermark_text" size="50" value="<?php echo $_config ['image_watermark_text'];?>"></td>

							<td width="60%"><?php echo _lkn_config_image_watermark_text_desc;?></td>

						</tr>

						<tr>

							<td width="15%"><?php echo _lkn_config_image_watermark_text_color;?></td>

							<td width="25%"><input type="text" name="config_image_watermark_text_color" id="config_image_watermark_text" size="50" value="<?php echo $_config ['image_watermark_text_color'];?>"></td>

							<td width="60%"><?php echo _lkn_config_image_watermark_text_color_desc;?></td>

						</tr>

						<tr>

							<td width="15%"><?php echo _lkn_config_image_watermark_text_background_color;?></td>

							<td width="25%"><input type="text" name="config_image_watermark_text_background_color" id="config_image_watermark_text" size="50" value="<?php echo $_config ['image_watermark_text_background_color'];?>"></td>

							<td width="60%"><?php echo _lkn_config_image_watermark_text_background_color_desc;?></td>

						</tr>

					</table>

					<?php echo _lkn_config_image_dimensions;?>

					<table class="adminform" border="1">

						<tr>

							<td width="15%"><?php echo _lkn_config_resume_image_watermark;?></td>

							<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_resume_image_watermark', $_config ['resume_image_watermark'] );?></td>

							<td width="60%"><?php echo _lkn_config_resume_image_watermark_desc;?></td>

						</tr>

						<tr>

							<td width="15%"><?php echo _lkn_config_resume_image_width;?></td>

							<td width="25%"><input type="text" name="config_resume_image_width" id="config_resume_image_width" size="50" value="<?php echo $_config ['resume_image_width'];?>"></td>

							<td width="60%"><?php echo _lkn_config_resume_image_width_desc;?></td>

						</tr>

						<tr>

							<td width="15%"><?php echo _lkn_config_resume_image_height;?></td>

							<td width="25%"><input type="text" name="config_resume_image_height" id="config_resume_image_height" size="50" value="<?php echo $_config ['resume_image_height'];?>"></td>

							<td width="60%"><?php echo _lkn_config_resume_image_height_desc;?></td>

						</tr>

					</table>

					<table class="adminform" border="1">

						<tr>

							<td width="15%"><?php echo _lkn_config_company_logo_watermark;?></td>

							<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_company_logo_watermark', $_config ['company_logo_watermark'] );?></td>

							<td width="60%"><?php echo _lkn_config_company_logo_watermark_desc;?></td>

						</tr>

						<tr>

							<td width="15%"><?php echo _lkn_config_company_logo_width;?></td>

							<td width="25%"><input type="text" name="config_company_logo_width"	id="config_company_logo_width" size="50" value="<?php echo $_config ['company_logo_width'];?>"></td>

							<td width="60%"><?php echo _lkn_config_company_logo_width_desc;?></td>

						</tr>

						<tr>

							<td width="15%"><?php echo _lkn_config_company_logo_height;?></td>

							<td width="25%"><input type="text" name="config_company_logo_height" id="config_resume_image_height" size="50" value="<?php echo $_config ['company_logo_height'];?>"></td>

							<td width="60%"><?php echo _lkn_config_company_logo_height_desc;?></td>

						</tr>

					</table>

				<?php lknTabs::endTab();?>

				<?php lknTabs::startTab(_lkn_config_templates);?>

					<table class="adminform" border="1">

						<tr>

							<td width="15%"><?php echo _lkn_config_templates_select;?>

							</td>

							<td width="25%">

								<?php

									$templates_dir=JOOMLA_ROOT . LKN_DS . 'components' . LKN_DS . 'com_jobs' . LKN_DS . 'templates' . LKN_DS; 

									$template=lknFiles::dirlist($templates_dir);

									$data=array();

									foreach ($template as $key=>$value){

										$data[$value]=$value;

									}

									$list=lknhtmlMaker::selectList($data,'config_lknjobstemplate',$_config['lknjobstemplate'],'',0);

									echo $list;?>

							</td>

							<td width="60%"><?php echo _lkn_config_templates_select_desc;?></td>

						</tr>

						<tr>

							<td width="15%"><?php echo _lkn_config_templates_advice_title;?></td>

							<td width="25%"><input type="text" name="config_templates_advice_title" id="config_templates_advice_title" size="50" value="<?php echo $_config ['templates_advice_title'];?>"></td>

							<td width="60%" rowspan="2"><?php echo _lkn_config_templates_advice_desc;?></td>

						</tr>

						<tr>

							<td width="15%"><?php echo _lkn_config_templates_advice;?>

							</td>

							<td width="25%">

								<textarea name="config_templates_advice" cols="30" rows="10"/><?php echo $_config ['templates_advice'];?></textarea>

							</td>

						</tr>

					</table>

					<table class="adminform" border="1">

						<tr>

							<td width="15%">Template Footer</td>

							<td width="50%" valign="top">

								<textarea name="config_templates_footer" cols="70" rows="20"/><?php echo $_config ['templates_footer'];?></textarea>

							</td>

							<td width="35%">

								<p>You edit the footer of all templates from here. If you do not want to use the footer feature, Make it empty</p>

								<p><span style="text-decoration: underline;">The default one is below<br /></span><em>&lt;div id="lknfooter"&gt;<br /> &lt;div&gt;&lt;/div&gt;<br /> &lt;div id="footer-intl-links"&gt;<br /> &lt;table width="100%" cellspacing="4" cellpadding="0" border="0"&gt;<br /> &lt;tbody&gt;<br /> &lt;tr&gt;<br /> &lt;td nowrap="nowrap" valign="top" align="center"&gt;<br /> &lt;strong&gt;<br /> &lt;span style="text-decoration: none;"&gt;<br /> © 2008 All Rights Reserved.<br /> &lt;/span&gt;<br /> &lt;/strong&gt;<br /> &lt;span style="text-decoration: none;"/&gt;&lt;/td&gt;<br /> &lt;/tr&gt;<br /> &lt;/tbody&gt;<br /> &lt;/table&gt;<br /> &lt;/div&gt;<br /> &lt;div&gt;&lt;/div&gt;<br />&lt;/div&gt;</em></p>

							</td>

							

						</tr>

					</table>

				<?php lknTabs::endTab();?>

		<?php lknTabs::startTab ( _lkn_config_home_page );?>

		<table class="adminform" border="1">

			<tr>

				<td width="15%"><?php echo _lkn_config_home_page_categories;?></td>

				<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_home_page_categories', $_config ['home_page_categories'] );?></td>

				<td width="60%"><?php echo _lkn_config_home_page_categories_desc;?></td>

			</tr>

			<tr>

				<td width="15%"><?php echo _lkn_config_home_page_category_column;?></td>

				<td width="25%"><input type="text" name="config_home_page_category_column" id="config_home_page_category_column" size="25" value="<?php echo $_config ['home_page_category_column'];?>"></td>

				<td width="60%"><?php echo _lkn_config_home_page_category_column_desc;?></td>

			</tr>

			<tr>

				<td width="15%"><?php echo _lkn_config_home_page_category_job_count;?></td>

				<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_home_page_category_job_count', $_config ['home_page_category_job_count'], 0, _lkn_show, _lkn_hide );?></td>

				<td width="60%"><?php echo _lkn_config_home_page_category_job_count_desc;?></td>

			</tr>

			<tr>

				<td width="15%"><?php echo _lkn_config_home_page_latest_jobs;?></td>

				<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_home_page_latest_jobs', $_config ['home_page_latest_jobs'], 0, _lkn_show, _lkn_hide );?></td>

				<td width="60%"><?php echo _lkn_config_home_page_latest_jobs_desc;?></td>

			</tr>

			<tr>

				<td width="15%"><?php echo _lkn_config_home_page_indeed;?></td>

				<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_home_page_indeed', $_config ['home_page_indeed'] ,0, _lkn_show, _lkn_hide );?></td>

				<td width="60%"><?php echo _lkn_config_home_page_indeed_desc;?></td>

			</tr>

			<tr>

				<td width="15%"><?php echo _lkn_config_home_page_latest_jobs_count;?></td>

				<td width="25%"><input type="text" name="config_home_page_latest_jobs_count" id="config_home_page_latest_jobs_count" size="25" value="<?php echo $_config ['home_page_latest_jobs_count'];?>"></td>

				<td width="60%"><?php echo _lkn_config_home_page_latest_jobs_count_desc;?></td>

			</tr>

			<tr>

				<td width="15%"><?php echo _lkn_config_home_page_simple_search_form;?></td>

				<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_home_page_simple_search_form', $_config ['home_page_simple_search_form'] );?>

				<td width="60%"><?php echo _lkn_config_home_page_simple_search_form_desc;?></td>

			</tr>

			<tr>

				<td width="15%">"New to lknJobs?"</td>

				<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList('config_home_page_new_to_lknjobs', $_config ['home_page_new_to_lknjobs'],0,_lkn_show,_lkn_hide );?>

				<td width="60%" rowspan="2">We suggest you to show "New to lknJobs?" and "Who We Are?" parts of the home page. Write an article about your job web site or your web site and link to that article with using these. The suggested one is keeping these 2 settings on your home.</td>

			</tr>

			<tr>

				<td width="15%">"Who We Are?"</td>

				<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_home_page_who_are_we', $_config ['home_page_who_are_we'],0,_lkn_show,_lkn_hide );?>

			</tr>

			<tr>

				<td width="15%"><?php echo _lkn_config_home_page_ads;?></td>

				<td width="25%"><textarea rows="15" cols="45" name="config_home_page_ads"><?php echo $_config ['home_page_ads'];?></textarea>

				<td width="60%"><?php echo _lkn_config_home_page_ads_desc;?></td>

			</tr>

			<tr>

				<td width="15%"><?php echo _lkn_config_home_page_companies;?></td>

				<td width="25%"><?php 

				$data=array();

				$data['latest']='Latest Companies';

				$data['random']='Random Companies';

				$data['hide']='Hide';

				$selectList=lknhtmlMaker::selectList($data,'config_home_companies',$_config['home_companies'],'',0);

				echo $selectList;

				?></td>

				<td width="60%" rowspan="2"><?php echo _lkn_config_home_page_companies_desc;?></td>

			</tr>

			<tr>

				<td width="15%"><?php echo _lkn_config_home_page_company_count;?></td>

				<td width="25%"><input type="text" name="config_home_page_company_count" id="config_home_page_company_count" size="25" value="<?php echo $_config ['home_page_company_count'];?>"></td>

			</tr>

		</table>

		<h1>Indeed Parameters</h1>

		<table class="adminform" border="1">

			<tr>

			 

				<td width="15%">Div CSS codes</td>

				<td width="25%"><input type="text" name="config_home_page_indeed_ad_css" id="config_home_page_indeed_ad_css" size="25" value="<?php echo $_config ['home_page_indeed_ad_css'];?>"></td>

				<td width="60%">Input any css code that you want here. By default, width and height are autoadjusted based on the ad format that you choose. Default is "text-align:center;" (without quotes)</td>

			</tr>

			<tr>

				<td width="15%">Ad Format</td>

				<?php 

					$data = array();

					$data ['120x600'] = '120 x 600 Skyscraper';

					$data ['160x600'] = '160 x 600 Wide Skyscraper';

					$data ['300x250'] = '300 x 250 Medium rectangle';

					$data ['728x90'] = '728 x 90 Leaderboard';

					$selectList = lknhtmlMaker::selectList ( $data, 'config_home_page_indeed_ad_format', $_config ['home_page_indeed_ad_format'], '', 0 );

					

				?>

				<td width="25%"><?php echo $selectList;?></td>

				<td width="60%">Choose the Jobroll ad format and size that you would like to display on your page.</td>

			</tr>

			<tr>

				<td width="15%">Publisher ID</td>

				<td width="25%"><input type="text" name="config_home_page_indeed_jobroll_clientId" id="config_home_page_indeed_ad_css" size="25" value="<?php echo $_config ['home_page_indeed_jobroll_clientId'];?>"></td>

				<td width="60%">Please type your Publisher ID provided by Indeed Jobroll. It is a 16 digit numerical string like 123456789123456</td>

			</tr>

			<tr>

				<td width="15%">Ad Keywords</td>

				<td width="25%"><input type="text" name="config_home_page_indeed_jobroll_ad_keywords" id="config_home_page_indeed_jobroll_ad_keywords" size="25" value="<?php echo $_config ['home_page_indeed_jobroll_ad_keywords'];?>"></td>

				<td width="60%">Please type What kind of job you want to provide Indeed Jobroll. Example string: Php Developer</td>

			</tr>

			<tr>

				<td width="15%">Ad Location</td>

				<td width="25%"><input type="text" name="config_home_page_indeed_jobroll_ad_location" id="config_home_page_indeed_jobroll_ad_location" size="25" value="<?php echo $_config ['home_page_indeed_jobroll_ad_location'];?>"></td>

				<td width="60%">Set the location your Jobroll Ad. In this field enter either City, State or Zip</td>

			</tr>

			<tr>

				<td width="15%">Country</td>

				<?php 

					$data = array();

					$data ['US'] = 'United States';

					$data ['UK'] = 'United Kingdom';

					$data ['CA'] = 'Canada';

					$selectList = lknhtmlMaker::selectList ( $data, 'config_home_page_indeed_jobroll_ad_country', $_config ['home_page_indeed_jobroll_ad_country'], '', 0 );

					

				?>

				<td width="25%"><?php echo $selectList;?></td>

				<td width="60%">Choose the Country of the Jobroll you would like to display on your page.</td>

			</tr>

			<tr>

				<td width="15%">Channel</td>

				<td width="25%"><input type="text" name="config_home_page_indeed_jobroll_ad_channel" id="config_home_page_indeed_jobroll_ad_channel" size="25" value="<?php echo $_config ['home_page_indeed_jobroll_ad_channel'];?>"></td>

				<td width="60%">Type the channel number that you may have set in Indeed Jobroll. It is text like joomla and that you can choose to set.</td>

			</tr>	

			<tr>

				<td width="15%">Background Color</td>

				<td width="25%"><input type="text" name="config_home_page_indeed_jobroll_color_background" id="config_home_page_indeed_jobroll_color_background" size="25" value="<?php echo $_config ['home_page_indeed_jobroll_color_background'];?>"></td>

				<td width="60%">Background Color, in hex, without # . default is "FFFFFF" (without quotes)</td>

			</tr>

			<tr>

				<td width="15%">Border Color</td>

				<td width="25%"><input type="text" name="config_home_page_indeed_jobroll_color_border" id="config_home_page_indeed_jobroll_color_border" size="25" value="<?php echo $_config ['home_page_indeed_jobroll_color_border'];?>"></td>

				<td width="60%">Border Color, in hex, without # . default is  AAAAAA</td>

			</tr>

			<tr>

				<td width="15%">Text Color</td>

				<td width="25%"><input type="text" name="config_home_page_indeed_jobroll_color_text" id="config_home_page_indeed_jobroll_color_text" size="25" value="<?php echo $_config ['home_page_indeed_jobroll_color_text'];?>"></td>

				<td width="60%">Text Color, in hex, without # . default is 000000</td>

			</tr>

			<tr>

				<td width="15%">Link Color</td>

				<td width="25%"><input type="text" name="config_home_page_indeed_jobroll_color_link" id="config_home_page_indeed_jobroll_color_link" size="25" value="<?php echo $_config ['home_page_indeed_jobroll_color_link'];?>"></td>

				<td width="60%">Link Color, in hex, without # . default is 0000CC</td>

			</tr>

			<tr>

				<td width="15%">Accent Color</td>

				<td width="25%"><input type="text" name="config_home_page_indeed_jobroll_color_accent" id="config_home_page_indeed_jobroll_color_accent" size="25" value="<?php echo $_config ['home_page_indeed_jobroll_color_accent'];?>"></td>

				<td width="60%">Accent Color, in hex, without # . default is FF6600</td>

			</tr>

			<tr>

				<td width="15%">Title Color</td>

				<td width="25%"><input type="text" name="config_home_page_indeed_jobroll_color_title" id="config_home_page_indeed_jobroll_color_title" size="25" value="<?php echo $_config ['home_page_indeed_jobroll_color_title'];?>"></td>

				<td width="60%">Title Color, in hex, without # . default is 000000</td>

			</tr>

			<tr>

				<td width="15%">Job Title Color</td>

				<td width="25%"><input type="text" name="config_home_page_indeed_jobroll_color_jobtitle" id="config_home_page_indeed_jobroll_color_jobtitle" size="25" value="<?php echo $_config ['home_page_indeed_jobroll_color_jobtitle'];?>"></td>

				<td width="60%">Job Title Color, in hex, without #. default is 0000CC</td>

			</tr>

			<tr>

				<td width="15%">Company Color</td>

				<td width="25%"><input type="text" name="config_home_page_indeed_jobroll_color_company" id="config_home_page_indeed_jobroll_color_company" size="25" value="<?php echo $_config ['home_page_indeed_jobroll_color_company'];?>"></td>

				<td width="60%">Company Color, in hex, without # . default is 000000</td>

			</tr>

			<tr>

				<td width="15%">Source Color</td>

				<td width="25%"><input type="text" name="config_home_page_indeed_jobroll_color_source" id="config_home_page_indeed_jobroll_color_source" size="25" value="<?php echo $_config ['home_page_indeed_jobroll_color_source'];?>"></td>

				<td width="60%">Source Color, in hex, without # . default is 008800</td>

			</tr>

			<tr>

				<td width="15%">Location Color</td>

				<td width="25%"><input type="text" name="config_home_page_indeed_jobroll_color_location" id="config_home_page_indeed_jobroll_color_location" size="25" value="<?php echo $_config ['home_page_indeed_jobroll_color_location'];?>"></td>

				<td width="60%">Location Color, in hex, without # . default is 666666</td>

			</tr>

			

		</table>

		

		<?php lknTabs::endTab();?>

				<?php lknTabs::startTab(_lkn_config_social_bookmarking);?>

				<table class="adminform" border="1">

					<tr>

						<td width="15%">

							<?php echo _lkn_config_social_bookmarking_active;?>

						</td>

						<td width="25%">

							<?php echo lknhtmlMaker::yesNoSelectList('config_social_bookmarking_active',$_config ['social_bookmarking_active']);?>

						</td>

						<td width="60%">

							<?php echo _lkn_config_social_bookmarking_active_desc;?>

						</td>

					</tr>

					<tr>

						<td width="15%">

							<?php echo _lkn_config_social_bookmarking_type;?>

						</td>

						<td width="25%">

						<?php 

						$data=array();

						$data['local']=_lkn_config_social_bookmarking_type_local;

						$data['addthis']=_lkn_config_social_bookmarking_type_addthis;

						

						echo lknhtmlMaker::selectList($data,'config_social_bookmarking_button_type',$_config['social_bookmarking_button_type'],'',0); 

						?>

						</td>

						<td width="60%">

							<?php echo _lkn_config_social_bookmarking_type_desc;?>

						</td>

					</tr>

					<tr>

						<td width="15%">

							<?php echo _lkn_config_social_bookmarking_addthis_id;?>

						</td>

						<td width="25%">

							<input type="text" name="config_social_bookmarking_addthis_id" id="config_social_bookmarking_addthis_id" size="50" value="<?php echo $_config ['social_bookmarking_addthis_id'];?>">

						</td>

						<td width="60%">

							<?php echo _lkn_config_social_bookmarking_addthis_id_desc;?>

						</td>

					</tr>

					<tr>

						<td width="15%">

							<?php echo _lkn_config_social_bookmarking_addthis_button_url;?>

						</td>

						<td width="25%">

							<input type="text" name="config_social_bookmarking_addthis_button_url" id="config_social_bookmarking_addthis_button_url" size="50" value="<?php echo $_config ['social_bookmarking_addthis_button_url'];?>">

						</td>

						<td width="60%">

							<?php echo _lkn_config_social_bookmarking_addthis_button_url_desc;?>

						</td>

					</tr>

				</table>

				

		<?php lknTabs::endTab();?>

			<?php lknTabs::startTab ( _lkn_config_thank_you_message );?>

			<table class="adminform" border="1">

				<tr>

					<td width="15%"><?php echo _lkn_config_thank_you_message;?></td>

					<td width="25%"><?php echo $editor->display ( 'config_thank_you_message', $_config ['thank_you_message'], '100%;', '350', '75', '20', array ('pagebreak', 'readmore' ) );?></td>

					<td width="60%"><?php echo _lkn_config_thank_you_message_desc;?></td>

				</tr>

			</table>

			<?php lknTabs::endTab();?>

			<?php lknTabs::startTab( _lkn_config_job_apply );?>			

				<table class="adminform" border="1">

					<tr>

						<td width="15%"><?php echo _lkn_config_job_apply_new_resume_create;?></td>

						<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_job_apply_new_resume_create', $_config ['job_apply_new_resume_create'] );?></td>

						<td width="60%"><?php echo _lkn_config_job_apply_new_resume_create_desc;?></td>

					</tr>

				</table>

			<?php lknTabs::endTab();?>

			<?php lknTabs::startTab ( _lkn_config_credit_system );?>

			<em><?php echo _lkn_config_credit_system_note;?></em>

			<table class="adminform" border="1">

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_cost;?></td>

					<td width="25%"><input class="inputbox" type="text" name="config_credit_cost" size="50" value="<?php echo $_config ['credit_cost'];?>" /></td>

					<td width="60%"><?php echo _lkn_config_credit_system_cost_desc;?></td>

				</tr>

			</table>

			<table class="adminform" border="1">

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_active_for_job_seekers;?></td>

					<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_credit_system_active_for_job_seekers', $_config ['credit_system_active_for_job_seekers'] );?></td>

					<td width="60%"></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_for_job_seekers_adding_a_resume_cost;?></td>

					<td width="25%"><input class="inputbox" type="text" name="config_credit_system_for_job_seekers_adding_a_resume_cost" size="50" value="<?php echo $_config ['credit_system_for_job_seekers_adding_a_resume_cost'];?>" /></td>

					<td width="60%"><?php echo _lkn_config_credit_system_for_job_seekers_adding_a_resume_cost_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_for_job_seekers_applying_a_job_cost;?></td>

					<td width="25%"><input class="inputbox" type="text" name="config_credit_system_for_job_seekers_applying_a_job_cost" size="50" value="<?php echo $_config ['credit_system_for_job_seekers_applying_a_job_cost'];?>" /></td>

					<td width="60%"><?php echo _lkn_config_credit_system_for_job_seekers_applying_a_job_cost_desc;?></td>

				</tr>

			</table>

			<table class="adminform" border="1">

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_active;?></td>

					<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_credit_system_active', $_config ['credit_system_active'] );?></td>

					<td width="60%"><?php echo _lkn_config_credit_system_active_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_adding_a_job_cost;?></td>

					<td width="25%"><input class="inputbox" type="text" name="config_credit_system_adding_a_job_cost" size="50" value="<?php echo $_config ['credit_system_adding_a_job_cost'];?>" /></td>

					<td width="60%"><?php echo _lkn_config_credit_system_adding_a_job_cost_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_resume_search_one_day_cost;?></td>

					<td width="25%"><input class="inputbox" type="text" name="config_credit_system_resume_search_one_day_cost" size="50" value="<?php echo $_config ['credit_system_resume_search_one_day_cost'];?>" /></td>

					<td width="60%"><?php echo _lkn_config_credit_system_resume_search_one_day_cost_desc;?></td>

				</tr>

			</table>

			<h1>Paypal</h1>

			<table class="adminform" border="1">

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_paypal_active;?></td>

					<td width="100"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_credit_system_paypal_active', $_config ['credit_system_paypal_active'] );?></td>

					<td width="60%"><?php echo _lkn_config_credit_system_paypal_active_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_paypal_email;?></td>

					<td width="100"><input class="inputbox" type="text" name="config_paypal_email" size="50" value="<?php echo $_config ['paypal_email'];?>" /></td>

					<td width="60%"><?php echo _lkn_config_credit_system_paypal_email_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_sandbox_email;?></td>

					<td width="25%"><input class="inputbox" type="text" name="config_sandbox_email" size="50" value="<?php echo $_config ['sandbox_email'];	?>" /></td>

					<td width="60%"><?php echo _lkn_config_credit_system_sandbox_email_desc;?></td>

				</tr>

				<?php 

				$data=array();

				$data['AUD']='Australian Dollars (A $)';

				$data['CAD']='Canadian Dollars (C $)';

				$data['EUR']='Euros (€)';

				$data['GBP']='Pounds Sterling (£)';

				$data['JPY']='Yen (¥)';

				$data['USD']='U.S. Dollars ($)';

				$data['NZD']='New Zealand Dollar ($)';

				$data['CHF']='Swiss Franc';

				$data['HKD']='Hong Kong Dollar ($)';

				$data['SGD']='Singapore Dollar ($)';

				$data['SEK']='Swedish Krona';

				$data['DKK']='Danish Krone';

				$data['PLN']='Polish Zloty';

				$data['NOK']='Norwegian Krone';

				$data['HUF']='Hungarian Forint';

				$data['CZK']='Czech Koruna';

				$data['ILS']='Israeli Shekel';

				$data['MXN']='Mexican Peso';

				$data['BRL']='Brazilian Real';

				$data['MYR']='Malaysian Ringgits';

				$data['PHP']='Philippine Pesos';

				$data['TWD']='Taiwan New Dollars';

				$data['THB']='Thai Baht';

				if (!isset($_config['credit_system_paypal_curreny'])) {

					$_config['credit_system_paypal_curreny']='USD';

				}

				

				$selectList=lknhtmlMaker::selectList($data,'config_credit_system_paypal_curreny',$_config['credit_system_paypal_curreny'],'',0);

 	

				?>

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_paypal_currency;?></td>

					<td width="25%"><?php echo $selectList;?></td>

					<td width="60%"><?php echo _lkn_config_credit_system_paypal_currency_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_sandbox;?></td>

					<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_sandbox', $_config ['sandbox'] );?></td>

					<td width="60%"><?php echo _lkn_config_credit_system_sandbox_desc;?></td>

				</tr>

			</table>

			<h1>Google Checkout</h1>

			<table class="adminform" border="1">

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_googlecheckout_active;?></td>

					<td width="100"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_credit_system_googlecheckout_active', $_config ['credit_system_googlecheckout_active'] );?></td>

					<td width="60%" rowspan="3"><?php 

					$url=LIVE_SITE . '/index.php?option=com_jobs&task=google_checkout&action=ipn';

					$url=str_replace('{API_URL}',$url,_lkn_config_credit_system_googlecheckout_notes);

					echo $url;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_googlecheckout_merchant_id;?></td>

					<td width="100"><input class="inputbox" type="text" name="config_credit_system_googlecheckout_merchant_id" size="50" value="<?php echo $_config ['credit_system_googlecheckout_merchant_id'];?>" /></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_googlecheckout_merchant_key;?></td>

					<td width="25%"><input class="inputbox" type="text" name="config_credit_system_googlecheckout_merchant_key" size="50" value="<?php echo $_config ['credit_system_googlecheckout_merchant_key'];	?>" /></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_googlecheckout_currency;?></td>

					<td width="25%"><input class="inputbox" type="text" name="config_credit_system_googlecheckout_currency" size="50" value="<?php echo $_config ['credit_system_googlecheckout_currency'];	?>" /></td>

					<td width="60%"><?php echo _lkn_config_credit_system_googlecheckout_currency_desc;?><a href="http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/currency_codes/currency_codes_list-1.htm" target="_blank">?</a></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_googlecheckout_sandbox;?></td>

					<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_credit_system_googlecheckout_sandbox', $_config ['credit_system_googlecheckout_sandbox'] );?></td>

					<td width="60%"></td>

				</tr>

			</table>

			<h1><?php echo _lkn_credit_payment_method_bank_transfer;?></h1>

			<table class="adminform" border="1">

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_bank_transfer_active;?></td>

					<td width="100"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_credit_system_bank_transfer_active', $_config ['credit_system_bank_transfer_active'] );?></td>

					<td width="60%"><?php echo _lkn_config_credit_system_bank_transfer_active_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_credit_system_bank_transfer_inform_user;?></td>

					<td width="100"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_credit_system_bank_transfer_inform_user', $_config ['credit_system_bank_transfer_inform_user'] );?></td>

					<td width="60%"><?php echo _lkn_config_credit_system_bank_transfer_inform_user_desc;?></td>

				</tr>

			</table>

			<?php 

				//TODO: kullanıcı adına kredi eklendiğinde kullanıcıyı haberdar et

			?>

		<?php lknTabs::endTab();?>

		<?php lknTabs::startTab(_lkn_config_rss_feeds );?>

			<table class="adminform" border="1">

				<tr>

					<td width="15%"><?php echo _lkn_config_rss_feeds_active;?></td>

					<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_rss_feeds_active', $_config ['rss_feeds_active'] );?></td>

					<td width="60%"><?php echo _lkn_config_rss_feeds_active_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_rss_feeds_categories;?></td>

					<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_rss_feeds_categories', $_config ['rss_feeds_categories'] );?></td>

					<td width="60%"><?php echo _lkn_config_rss_feeds_categories_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_rss_feeds_company;?></td>

					<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_rss_feeds_company', $_config ['rss_feeds_company'] );?></td>

					<td width="60%"><?php echo _lkn_config_rss_feeds_company_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_rss_feeds_country;?></td>

					<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_rss_feeds_country', $_config ['rss_feeds_country'] );?></td>

					<td width="60%"><?php echo _lkn_config_rss_feeds_country_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_rss_feeds_count;?></td>

					<td width="25%"><input maxlength="100" size="50" value="<?php echo $_config ['rss_feeds_count'];?>" name="config_rss_feeds_count" /></td>

					<td width="60%"><?php echo _lkn_config_rss_feeds_count_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_rss_feeds_limit_job_description;?></td>

					<td width="25%"><input maxlength="100" size="50" value="<?php echo $_config ['rss_feeds_limit_job_description'];?>" name="config_rss_feeds_limit_job_description" /></td>

					<td width="60%"><?php echo _lkn_config_rss_feeds_limit_job_description_desc;?></td>

				</tr>

			</table>

			

			<table class="adminform" border="1">

				<tr>

					<td width="15%"><?php echo _lkn_config_rss_feeds_criteria_select_count;?></td>

					<td width="25%"><input maxlength="100" size="50" value="<?php echo $_config ['rss_feeds_criteria_select_count'];?>" name="config_rss_feeds_criteria_select_count" /></td>

					<td width="60%"><?php echo _lkn_config_rss_feeds_criteria_select_count_desc;?></td>

				</tr>

			</table>

			

			<table class="adminform" border="1">

				<tr>

					<td width="15%"><?php echo _lkn_config_rss_feeds_description;?></td>

					<td width="25%"><input maxlength="100" size="50" value="<?php echo $_config ['rss_feeds_description'];?>" name="config_rss_feeds_description" /></td>

					<td width="60%"><?php echo _lkn_config_rss_feeds_description_desc;?></td>

				</tr>

			</table>

		<?php lknTabs::endTab();?>

		<?php lknTabs::startTab( _lkn_config_files );?>

			<?php echo _lkn_config_files_desc;?>

			<table class="adminform" border="1">

				<tr>

					<td width="15%"><?php echo _lkn_config_files_active;?></td>

					<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_files_active', $_config ['files_active'] );?></td>

					<td width="60%"><?php echo _lkn_config_files_active_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_files_folder;?></td>

					<td width="25%"><input maxlength="100" size="50" value="<?php echo $_config ['files_folder'];?>" name="config_files_folder" /></td>

					<td width="60%"><?php echo _lkn_config_files_folder_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_files_file_types;?></td>

					<td width="25%"><input maxlength="100" size="50" value="<?php echo $_config ['files_file_types'];?>" name="config_files_file_types" /></td>

					<td width="60%"><?php echo _lkn_config_files_file_types_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_files_image_types;?></td>

					<td width="25%"><input maxlength="100" size="50" value="<?php echo $_config ['files_image_types'];?>" name="config_files_image_types" /></td>

					<td width="60%"><?php echo _lkn_config_files_image_types_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_files_size;?></td>

					<td width="25%"><input maxlength="100" size="50" value="<?php echo $_config ['files_size'];?>" name="config_files_size" /></td>

					<td width="60%"><?php echo _lkn_config_files_size_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_files_own_count;?></td>

					<td width="25%"><input maxlength="100" size="50" value="<?php echo $_config ['files_own_count'];?>" name="config_files_own_count" /></td>

					<td width="60%"><?php echo _lkn_config_files_own_count_desc;?></td>

				</tr>

				<tr>

					<td width="15%"><?php echo _lkn_config_files_attach_count;?></td>

					<td width="25%"><input maxlength="100" size="50" value="<?php echo $_config ['files_attach_count'];?>" name="config_files_attach_count" /></td>

					<td width="60%"><?php echo _lkn_config_files_attach_count_desc;?></td>

				</tr>

			</table>

				<?php echo _lkn_config_image_resize_desc;?><br />

				<?php if ($gdv) {

							if ($gdv >= 2) {

								echo _lkn_config_image_resize_gd_yes;

							} else {

								echo _lkn_config_image_resize_gd_no;

							}

						} else {

							echo _lkn_config_image_resize_gd_no;

						}

						

					echo _lkn_config_image_resize_desc2;?>

					

					<table class="adminform" border="1">

						<tr>

							<td width="15%"><?php echo _lkn_config_files_image_watermark_active;?></td>

							<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_files_image_watermark_active', $_config ['files_image_watermark_active'] );?></td>

							<td width="60%"><?php echo _lkn_config_files_image_watermark_active_desc;?></td>

						</tr>

					</table>

		<?php lknTabs::endTab();?>

		<?php lknTabs::startTab( _lkn_config_worker );?>

			<table class="adminform" border="1">

				<tr>

					<td width="15%"><?php echo _lkn_config_worker_resume_count;?></td>

					<td width="25%"><input maxlength="100" size="50" value="<?php echo $_config ['worker_resume_count'];?>"	name="config_worker_resume_count" /></td>

					<td width="60%"><?php echo _lkn_config_worker_resume_count_desc;?></td>

				</tr>

			</table>

			

			<table class="adminform" border="1">

				<tr>

					<td width="15%"><?php echo _lkn_config_worker_prevent_to_delete_last_resume;?></td>

					<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_worker_prevent_to_delete_last_resume', $_config ['worker_prevent_to_delete_last_resume'] );?></td>

					<td width="60%"><?php echo _lkn_config_worker_prevent_to_delete_last_resume_desc;?></td>

				</tr>

			</table>

		<?php lknTabs::endTab();?>

		<?php lknTabs::startTab ( _lkn_config_employer );?>

			<table class="adminform" border="1">

					<tr>

						<td width="15%"><?php echo _lkn_config_employer_inform_on_company_submission;?></td>

						<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_employer_inform_on_company_submission', $_config ['employer_inform_on_company_submission'] );?></td>

						<td width="60%"><?php echo _lkn_config_employer_inform_on_company_submission_desc;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_employer_inform_on_company_approve;?></td>

						<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_employer_inform_on_company_approve', $_config ['employer_inform_on_company_approve'] );?></td>

						<td width="60%"><?php echo _lkn_config_employer_inform_on_company_approve_desc;?></td>

					</tr>

					<tr>

						<td width="15%"><?php echo _lkn_config_employer_approve_all_companies;?></td>

						<td width="25%"><?php echo lknhtmlMaker::yesNoSelectList ( 'config_employer_approve_all_companies', $_config ['employer_approve_all_companies'] );?></td>

						<td width="60%"><?php echo _lkn_config_employer_approve_all_companies_desc;?></td>

					</tr>

			</table>

				

				<table class="adminform" border="1">

					<tr>

						<td width="15%"><?php echo _lkn_config_employer_company_count;?></td>

						<td width="25%"><input maxlength="100" size="50" value="<?php echo $_config ['employer_company_count'];?>" name="config_employer_company_count" /></td>

						<td width="60%"><?php echo _lkn_config_employer_company_count_desc;?></td>

					</tr>

				</table>

				<table class="adminform" border="1">

					<?php 

					$data=array();

					$data['1']=_lkn_config_employer_inform_on_application_let_employer_to_choose;

					$data['2']=_lkn_config_employer_inform_on_application_allways_inform;

					$data['3']=_lkn_config_employer_inform_on_application_do_not_inform;

					

					?>

					<tr>

						<td width="15%"><?php echo _lkn_config_employer_inform_on_application;?></td>

						<td width="25%"><?php echo lknhtmlMaker::selectList($data,'config_employer_inform_on_application',$_config ['employer_inform_on_application'],'','0');?></td>

						<td width="60%"><?php echo _lkn_config_employer_inform_on_application_desc;?></td>

					</tr>

				</table>

		<?php lknTabs::endTab();?>

		<input type="hidden" name="config_lknJobsItemid" value="<?php echo $Itemid;?>">

		<input type="hidden" name="option" value="<?php echo $option;?>">

		<input type="hidden" name="task" value="<?php echo $task;?>">		

	</form>

		<?php lknTabs::endTabPanel();

	}



	function credits() {

		?>

	<form action="index2.php" method="POST" name="adminForm">

		<table class="general_table">

			<tbody>

				<tr>

					<td class="key"><strong>Component Development</strong></td>

					<td>Instant Php</td>

				</tr>

				<tr>

					<td class="key"><strong>WebSite</strong></td>

					<td><a href="http://www.instantphp.com/">www.instantphp.com</a></td>

				</tr>

				<tr>

					<td class="key"><strong>EMail</strong></td>

					<td>ulasalkan@gmail.com</td>

				</tr>

			</tbody>

		</table>

		<br />

		<br />

		<table border="0" cellspacing="0" cellpadding="0" class="adminform"

			style="border: 0pt none; width: 100%; text-align: left">

			<tbody>

				<tr>

					<th>Application</th>

					<th>Version</th>

					<th>License</th>

				</tr>

				<tr>

					<td><a href="http://www.phpclasses.org/browse/package/2189.html">PHP

					Input Filter</a></td>

					<td>1.2</td>

					<td>GPL</td>

				</tr>

				<tr>

					<td><a href="http://www.iconaholic.com">Icons</a></td>

					<td>N/A</td>

					<td><a href="http://www.iconaholic.com/help/joomla.html">http://www.iconaholic.com/help/joomla.html</a>

					</td>

				</tr>

				<tr>

					<td><a href="http://webfx.eae.net/">Tabs</a></td>

					<td>1.02</td>

					<td>GPL</td>

				</tr>

				<tr>

					<td><a href="http://www.dynarch.com/projects/calendar/"

						target="_blank">Calendar</a></td>

					<td>1.0 <br />

					</td>

					<td>GPL</td>

				</tr>

			</tbody>

		</table>

		<input type="hidden" name="option" value="com_jobs"> <input

			type="hidden" name="task" value=""></form>

		<?php

	}



	function support() {

		?>

	<form action="index2.php" method="POST" name="adminForm">

		<table class="adminform" border="0" width="100%">

			<tbody>

				<tr>

					<td align="right" style="width: 10%;"><b><?php

		echo _lkn_support_forum;

		?></b>

					</td>

					<td><a target="_blank" href="http://www.instantphp.com/support.html">www.instantphp.com/support.html</a>

					</td>

				</tr>

				<tr>

					<td style="width: 10%;" align="right"><b><?php

		echo _lkn_support_bug_tracker;

		?></b>

					</td>

					<td><a target="_blank"

						href="http://www.instantphp.com/tracker.html?do=toplevel&amp;project=2">www.instantphp.com/tracker.html</a>

					</td>

				</tr>

			</tbody>

		</table>

		<input type="hidden" name="option" value="com_jobs"> <input

			type="hidden" name="task" value=""></form>

	<?php

	}



	function resume_search_results($rows,$count,$paging_links,$detail_link,$brief_link,$detailed_results,$new_search_link,$resume_count_message) {



		global $_db, $_lknBaseFramework;





		?>

		<table width="100%" cellspacing="0" cellpadding="0" border="0">

			<tbody>

				<tr>

					<td><a href="<?php	echo lknSef::url ( "index.php?option=com_jobs&task=resume_search_form");?>"><?php echo _lkn_search_resume;?></a></td>

					<td align="right"><?php echo _lkn_search_view;?>: <b><?php echo $brief_link;	?> | <?php	echo $detail_link;?></b></td>

				</tr>

			</tbody>

		</table>

		<br />

		<?php



		if ($count > 0) {

			

			echo $resume_count_message;

			?>

			<br />

		<table class="adminlist">

			<thead>

				<tr>

					<th class="title"><strong><?php echo _lkn_created;?></th>

					<th class="title"><strong><?php echo _lkn_resume_update_date;?></th>

					<th class="title"><strong><?php echo _lkn_resume;?></th>

					<th class="title"><strong><?php	echo _lkn_resume_name;?></th>

					<th class="title"><strong><?php echo _lkn_resume_city;?></th>

					<th class="title"><strong><?php	echo _lkn_resume_state;?></th>

					<th></th>

					<th></th>

					<th></th>

				</tr>





			<tbody>

          <?php

			$k = 1;

			$imageDir = LIVE_SITE . "/administrator/components/com_jobs/images";



			foreach ( $rows as $row ) {

				$title = temizleSlash ( $row->title );

				$name = temizleSlash ( $row->name );

				$city = temizleSlash ( $row->city );

				$state = temizleSlash ( $row->state );

				$created = lknDate::formatDate ( $row->created );

				$update_date = lknDate::formatDate ( $row->update_date );

				$id = $row->id;

				$alias = $row->alias;



				$url = "index2.php?option=com_jobs&id=$id&action=admin&object=preview_resume&task=preview" . lknGetNoHtml ();



				$link_job = "index.php?option=com_jobs&task=edit_resume&cid=$id";

				$edit = "<a href=\"$link_job\">";

				$edit .= "<img src=\"$imageDir/edit.gif\" border=\"0\" alt=\"edit\" title=\"edit\"/></a>";



				$link_job = "index2.php?option=com_jobs&task=delete_resume&id=$id";

				$delete = "<a href=\"$link_job\">";

				$delete .= "<img src=\"$imageDir/delete.gif\" border=\"0\" alt=\"delete\" title=\"delete\" /></a>";



				$view = "<a href=\"$url\" target=\"_new\"

     		onclick=\"window.open(this.href,'win2','width=500,height=750,menubar=yes,resizable=yes,scrollbars=yes'); return false;\">

     		<img src=\"$imageDir/view.gif\" border=\"0\" alt=\"view\" title=\"view\" />

     		</a>";



				$link_job = "index2.php?option=com_jobs&id=$id&action=admin&object=print_resume&task=preview" . lknGetNoHtml ();

				$print = "<a href=\"$link_job\" target=\"_new\"

     		onclick=\"window.open(this.href,'win2','width=500,height=750,menubar=yes,resizable=yes,scrollbars=yes'); return false;\">";

				$print .= "<img src=\"$imageDir/print.gif\" border=\"0\" alt=\"print\" title=\"print\" /></a>";



				$title = "<a href=\"$url\" target=\"_new\"

     onclick=\"window.open(this.href,'win2','width=500,height=750,menubar=yes,resizable=yes,scrollbars=yes'); return false;\">$title</a>";

				?>





 			<tr class="row<?php	echo $k;?>">

 				<td><?php echo $created;?></td>

 				<td><?php echo $update_date;?></td>

				<td><?php echo $title;?></td>

				<td><?php echo $name;?></td>

				<td><?php echo $city;?></td>

				<td><?php echo $state;?></td>

				<td><?php echo $edit;?></td>

				<td><?php echo $print;?></td>

				<td><?php echo $view;?></td>

			</tr>

  	<?php

				if ($detailed_results == 1) {

					$job_type = lknJobsFunctions::writeJobType ( $row->job_type );

					$experience = $row->experience;

					$desired_pay = $row->desired_pay;

					//burası detaylı arama sonuçları istenirse gösterilecek

					?>



        <tr class="row<?php	echo $k;?>">

			<td style="padding-top: 5px; padding-bottom: 5px;" colspan="9">

				<table width="100%" cellspacing="0" cellpadding="4" border="0" align="center">

						<tbody>

							<tr>

								<td width="60%" valign="top"><b><?php echo _lkn_resume_desired_pay;?>:</b> <?php

									if ($desired_pay != '') {

										echo $desired_pay . ' ' . _lkn_currency;

									} else {

										echo '-';

									}

					?>

                				</td>

							<td width="40%" valign="top"><b><?php echo _lkn_job_experience;?>:</b>

								<?php

							if ($experience != 0 && $experience != '') {

								echo $experience;

							} else {

								echo '-';
							}
						?>
	                		</td>
						</tr>
						<tr>

								<td width="60%" valign="top"><b><?php echo _lkn_job_job_type;?>:</b> <?php echo $job_type;?></td>
								<td width="40%" valign="top"></td>
							</tr>
						</tbody>
					</table>
					</td>
				</tr>
        		<?php
				}
				?>



        <?php

				$k = 1 - $k;

			}

			?>

           </tbody>

		</table>

        <?php

			echo $paging_links;

		}
	}
}
?>
	<script language="javascript" type="text/javascript">
	//<macf>
	//201-02-04
	function imprimir (){
		var ventana = window.open("", "", "");
		var contenido = "<html><body onload='window.print();window.close();'>" + document.getElementById('grafico').innerHTML + "</body></html>";
		ventana.document.open();
		ventana.document.write(contenido);
		ventana.document.close();
	}
	//fin

	/**
	 * MOSTRAR LA HOJA DE VIDA EN FORMATO EN HTML
	 * COLOCAR LA OPCION DE IMPRIMIR DENTRO DEL HTML
	 **/
	function imprimirCVHTML(idCV){	 
        window.open('../components/com_jobs/html/datosdbcvHTML.php?cid='+idCV , 'ventana2' , 'width=800,height=500,scrollbars=si');
	}
	</script>