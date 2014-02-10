<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
		global $_db;
		$company_name=temizleSlash($row->title);
		$company_description=temizleSlash($row->description);
		$company_id=$row->id;
		$name = $row->contactname; 
		$company_logo=$row->logo;
		$company_alias=$row->alias;
		?>
        <div id="linkredirectresume">
			<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&Itemid=6" id="titletopfrontal" />
				<img title="Regresar a herramientas del buscador de empleo" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
			<?php echo _lkn_backfrontal;?>
    		</a>
		</div>
		<br />
        <table cellspacing="0" cellpadding="5" border="0" id="tools_employees">
            <thead>
                <tr>
                    <th colspan="2">
                    <strong>
                        <?php echo _lkn_name_company_front;?>
                    </strong>
                    </th>
                </tr>
            </thead>
            <tbody>
        		<tr>
            		<td>
                    <div id="contentcompania">
                		<?php if ($company_logo!=''){ 
                    		$company_logo=lknJobsFunctions::getCompanyLogo($company_logo,$company_name);
                    		echo $company_logo;
                 		} ?>
                  	</div>
                  	</td>
                    <td>
                    <div id="contentcompania">
                        <label class="companytitledescrition">
                        Empresa :
                        </label>
                        <span class="respuestatitle">
                            <?php echo $company_name;?>
                        </span>
                        <br />
                        <label class="companytitledescrition">
                        Representante: 
                        </label>
                        <span class="respuestatitle">
                            <?php echo $name;?>
                        </span>
                        <br />
                        <label class="companytitledescrition">
                        Descripción: 
                        </label> 
                        <span class="respuestatitle">
                        <?php echo $company_description;?> 
                        </span>   
                    </div>
                    </td>
        		</tr>
            </tbody>
    	</table>