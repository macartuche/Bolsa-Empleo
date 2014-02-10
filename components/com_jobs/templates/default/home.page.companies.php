<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' );
}
$count=count($row_companies);
if ($count>0) 
{
?>
<div class="companias">
	<div id="contratacion">
		<div>
		<img src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/imagesbe/play_button.png" align="left"/>
		<h3 class="medGrey"><?php echo _lkn_home_page_company;?></h3>
		<br />
        <table id="asdf" cellpadding="0" border="0" cellspacing="0">
        	<tbody>
        		<tr>
					<?php
                    $contaux = 1; 
                    foreach ($row_companies as $row)
                    {
                        global $_db;
                        $id=$row->id;
                        $title=temizleSlash($row->title);
                        $alias=$row->alias;
                        $logo = $row->logo;
                        $link="index.php?option=com_jobs&task=detail_company&id=$id:$alias".$itemid;
                        $link=lknSef::url($link);
                        $logo=$row->logo;
                        $logo=lknJobsFunctions::getCompanyLogo($logo,$title,$thumbs);
						if ($contaux > 3) 
						{
							echo "</tr><tr>";
							$contaux = 1;
						}
						echo "<td class='textresult' width='50%'>";
						?>
                    	<a id="imgcompanylink" href="<?php echo $link;?>" title="<?php echo $title;?>">
                        	<?php echo $logo;?>
                    	</a>
						<?php
						echo "</td>";
						$contaux++;
                        }
						?>
        	</tr>
        	</tbody>
        </table>
        <br />
        <a href="<?php echo JURI::base(); ?>index.php?option=com_companyregister&view=companyregister" id="linkcompanyregister"
        	title="Ver todas las empresas registradas">
            <strong>
            Ver todas las empresas registradas
            </strong>
            </a>
		</div>
	</div>
</div>	

<?php }?>