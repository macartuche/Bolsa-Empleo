<style type="text/css">
#titlesearchavance
{
	font-size:12px;
}
</style>
<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
<div id="linkredirectresume">
		<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&Itemid=6" id="titletopfrontal" />
			<img title="Regresar al inicio" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
            <?php echo _lkn_backfrontal;?>
		</a>
	</div>
<br /><br />
<div id="gradsearchadvanced" class="gradsearch">
	<div id="advSrch">
    	<div id="advSschadvanced">
            <div id="advSschadvancedtitle">
                <strong id="titleadvSsch">
                    B&uacute;squeda avanzada de empleos
                </strong>
            </div>
  		</div>
    	<form action="index.php" method="get" name="resume_search">
        	<div id="topbuttonsearch">
            <input type="reset" value="<?php echo _lkn_reset;?>"  class="btn"/>
            <input type="submit" value="<?php echo _lkn_search;?>" name="cmdSearch" class="btn" 
            onclick="disableSelectOptions('resume_search', 'job_category[]');"/>
           	</div> 
            <br /> 
           	<div class="formcontentall" style="margin-left:10px;">
            <div id="title_search">
            	<strong id="titleadvSsch">
                	<?php echo _lkn_search_adv_desc;?>
                </strong>
                <hr>
            </div>
            <div id="contentsearch">
                <?php echo lknToolTip(_lkn_search_job_search_word_tip,_lkn_search_word);?>:
                <input type="text" size="30" value="" class="inputbox" name="search_word"/><br />
                <span class="contentsearchtitle">
                <?php echo _lkn_search_job_title_example;?>
                </span>
            </div>
            <div id="title_search">
            	<strong id="titleadvSsch">
					<?php echo _lkn_search_job_cat_country;?>
                </strong>
                <hr>
          	</div>
			<div style="margin-left:5px">
            	<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td>
                        	<label>
					  			<strong>
                                	Ciudad del empleo:
                               	</strong>
                          	</label>
							<input type="text" size="30" value="" name="job_city" id="inputboxcity"/>
                            <br /><br />
                        	<label>
					  			<strong>
                               		Provincia del empleo:
                              	</strong>
				  			</label>
                            <input type="text" size="30" value="" class="inputbox" name="job_state" id="inputboxestate"/>
                    	</td>
					</tr>
					<tr>
						<td>
							<?php echo lknToolTip(_lkn_search_job_category_tip,_lkn_search_job_category);?>
				 			<?php echo $category_list;?>
				  		</td>
						<td>
							<?php if ($make_national=='0')
                            {
                            ?>
                            <span id="tablecontentselected">
					  		<strong>
                            	Localizaci&oacute;n:
                          	</strong>
					  		</span>
                            <br />	
							<div id="listcategoriessearch">
								<?php echo $job_countries;?>
							</div>
                    		<div style="float:left; width:35%; text-align: justify">
                        		<label>
                                Para seleccionar multiples items, mantenga presionada la tecla CTRL mientras selecciona
                                </label>
                    		</div>
							<?php
                            }
                            ?>
				  		</td>
					</tr>
				</table>
        	</div>
			<br />
            	<div id="title_search">
                	<strong id="titleadvSsch">
						<?php echo _lkn_search_job_salary_range;?>
                    </strong>
                    <hr>
              	</div>
                <div id="contentrange">
                    <div id="titlerange" style="text-align:left; margin-left:5px;">
                    <?php echo lknToolTip(_lkn_search_job_salary_range_tip,_lkn_search_job_salary_range_);?> 
                    <?php echo _lkn_search_job_salary_range_from;?> 
                    <input type="text" value="" class="inputbox" size="7" name="job_minsalary" id="inputrange"/> 
                    <?php echo _lkn_search_job_salary_range_to;?> 
                    <input type="text" value="" class="inputbox" size="7" name="job_maxsalary" id="inputrange"/> 
                    <?php echo _lkn_search_job_salary_range_yearly;?><br />  
                </div>
                <div style="text-align:left; width:90%; margin-left:5px">
                    <?php echo _lkn_search_not_necessary;?>
                </div>
           	</div>
            <div id="title_search">
                <strong id="titleadvSsch">
                    Experiencia
                </strong>
                <hr>
            </div>
            <div style="text-align:left; margin-left:5px">
            	<?php echo lknToolTip(_lkn_search_job_experience_tip,_lkn_search_job_experience_);
					$data=array();
					for ($i=1;$i<26;$i++)
					{
						$data[$i]=$i;
					}
				?>
				<?php echo _lkn_search_job_experience_min;?>
                &nbsp;&nbsp;&nbsp;
				<?php echo lknhtmlMaker::selectList($data,'job_experience_minimum');?>
				<?php echo _lkn_search_job_experience_max;?>
				<?php echo lknhtmlMaker::selectList($data,'job_experience_maximum');?>
			</div>
           	<div style="text-align:left; width:90%; margin-left:5px">
				<?php echo _lkn_search_not_necessary;?>
			</div>
            <div id="title_search">
            	<strong id="titleadvSsch">
                	Especificar tipo de educación
              	</strong>
          		<hr>
            </div>
            <div id="contentselectededucation" style="text-align:left; margin-left:5px">
            	<div class="titleselecteducation">
            	<?php echo lknToolTip(_lkn_search_job_education_level_tip,_lkn_search_job_education_level_);?>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="selectcontenteducation">
               	<?php echo lknJobsFunctions::getDegree('job_degree[]','','multiple="multiple" size="5"',0);?>
                </div>
           	</div>
                <div id="footereducation" style="text-align:left; width:90%; margin-left:5px">
                 <?php echo _lkn_search_not_necessary;?>
                </div>
           	<div id="title_search">
           		<strong id="titleadvSsch">
		   			<?php echo _lkn_search_job_education_level;?>
            	</strong>
            	<hr>
            </div>  
           	<div id="contenemploye" style="text-align:left; margin-left:5px;">
            	<div class="titleselecteducation">
          		<?php echo lknToolTip(_lkn_search_job_emp_type_tip,'Tiempo de empleo:');?>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="selectcontenteducation">
                <?php echo lknJobsFunctions::getJobType('job_type[]','','multiple="multiple" size="5"');?>
                </div>
           	</div>
           	<div id="footeremploye" style="text-align:left; width:90%; margin-left:5px">
          		<?php echo _lkn_search_not_necessary;?>
          	</div>     
    	   <div style="text-align:right; margin-right:5px">     
            <input type="reset" value="<?php echo _lkn_reset;?>"  class="btn" />
            <input type="submit" value="<?php echo _lkn_search;?>" name="cmdSearch" class="btn" 
            onclick="disableSelectOptions('resume_search', 'job_category[]');"/>
            </div>
        </div>
        <input type="hidden" name="option" value="com_jobs"/>
        <input type="hidden" name="task" value="search_jobs"/>
        <input type="hidden" name="detailed_results" value="0"/>
        <input type="hidden" name="Itemid" value="<?php echo $Itemid;?>"/>
   	</form><br />
</div>
</div>
<br /><br /><br /><br />