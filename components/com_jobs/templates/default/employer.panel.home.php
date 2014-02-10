<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); 
}
$Itemid=lknJobsItemId();		
$user=new lknUser();
if (count($rows)>0)
{
	$logo =$rows[0]->logo;
}
else
{
	$logo ='';
}
?>	
<table id="tools_employees" cellpadding="5" cellspacing="0" border="0">
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
            <td width="390" valign="top" style="padding:10px;">
                <p style="color:#718199;">
                    <font>
                    <strong>
                        <?php echo _lkn_worker_worker_name;?>:
                   	</strong>
                    </font>
                    <?php echo $user->getName();?>
                </p>
                <p style="color:#718199;">
                    <font>
                    <strong>
                        <?php echo _lkn_worker_worker_email;?>:
                   	</strong>
                    </font>
                    <?php echo $user->getEmail();?>
                </p>
                <p style="color:#718199; display:-moz-grid-group; width:100%;">
                    <font>
                    <strong>
                        <?php echo _lkn_worker_worker_last_visit_date;?>:
                  	</strong>
                    </font>
                    <?php echo lknDate::formatDate($user->getLastVisitDate());?>
                </p>
                <p style="color:#718199; display:-moz-grid-group; width:100%;">
                    <font>
                    <strong>
                     Cambiar datos de perfil:
                     <a href="index.php?option=com_user&view=user&task=edit">
        			Clic aquí
        			</a>
                  	</strong>
                </p>
            </td>
            <td width="200" valign="top" class="textresult">     
            <?php
                echo $credit_system_links;
            ?>
            </td>
        </tr>
    </tbody>
</table>
<br /><br />
<?php if ($company_count>0) {?>
<table id="tools_employees" cellspacing="0" border="0" cellpadding="5">
    <thead>
        <tr>
            <th colspan="6">
                <strong>
                    <?php echo _lkn_company; ?>
                </strong>
            </th>
        </tr>
    </thead>
    <tbody>
    <tr>
    	<td class="textresult">
        	<strong>
                    Logo de la empresa
          	</strong>
        </td>
        <td class="textresult">
        	<strong>
                  Nombre de la empresa
       		</strong>
        </td>
    </tr>
    <tr>
    <td class="textresult">
    <?php 
	if ($logo!='')
	{
	   $logo =lknJobsFunctions::getCompanyLogo($logo,$user->getUserName());
	   echo $logo;
	}
	?>
    </td>
    <?php 
    $k=1;
    foreach ($rows as $row)
    {
        $title=temizleSlash($row->title);
        $id=$row->id;
        $published=$row->published;
        $alias=$row->alias;
        $memberid=$row->memberid;
        $publish_image=lknJobsFunctions::getPublishingImage($published);
        
        $created=$row->created;
        $created=lknDate::formatDate($created);
        $link_job="index.php?option=com_jobs&task=edit_company&id=$id:$alias" . $Itemid;
        $link_job=lknSef::url($link_job);
        $edit="<a href=\"$link_job\">";
        $edit.="<img src=\"".TEMPLATE_IMAGE_PATH."edit.gif\" border=\"0\" alt=\"edit\" title=\"Editar\"/></a>";		
        $link_job="index.php?option=com_jobs&task=detail_company&id=$id:$alias" .$Itemid;
        $link_job=lknSef::url($link_job);
        $view="<a href=\"$link_job\" target=\"_new\">";
        $view.="<img src=\"".TEMPLATE_IMAGE_PATH."view.gif\" border=\"0\" alt=\"view\" title=\"Ver\" /></a>";
        $rss=lknSef::url("index.php?option=com_jobs&task=rss&company=$id" .$Itemid);
        $rss="<a href=\"$rss\" target=\"_new\">";
        $rss.="<img src=\"".TEMPLATE_IMAGE_PATH."rss.jpg\" border=\"0\" alt=\"rss feeds for this company\" title=\"RSS para estas compañia\" /></a>";
            if ($k=='1') {
                $class='jl_odd_row';
            }else {
                $class='jl_even_row';
            }
        ?>
            <td class="textresult">
                <?php echo $title; ?>
            </td>
            <td class="textresult">
                <?php echo $publish_image;?>
            </td>
            <td class="textresult">
                <?php echo $edit;?>
            </td>
            <td class="textresult">
                <?php echo $view;?>
            </td>
            <td class="textresult">
                <?php echo $rss;?>
            </td>
        </tr>     
        <?php
        $k=3-$k;
    }       
    ?>
    </tbody>
</table>
<?php
echo $company_paging_links;
}else 
{
echo _lkn_employer_no_company;
}
?>
<div style="text-align:center">
	<?php echo $submit_company_button;?>
</div>
<?php echo $employer_tools;?><br /><br /><br />