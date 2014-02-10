<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
	if ($row!='') {	
	  $id=$row->id;	
	  $title=temizleSlash($row->title);	
	  $body=temizleSlash($row->body);	
	  $memberid=$row->memberid;	
	  $published=$row->published;	
	  $action=_lkn_email_template_update;	
	  $task='update_employer_email_template';
	}else	
	{	
	  $id='';	
	  $title='';	
	  $body='';	
	  $memberid='';
	  $published='';
	  $user=new lknUser();	
	  $memberid=$user->getUserID();	
	  $action=_lkn_email_template_add;	
	  $task='save_employer_email_template';	
	}	
	?>	
	<script language="javascript" type="text/javascript">
	
	function validateFormOnSubmit(theForm) {
		
	var reason = "";	
	reason += validateEmpty(theForm.db_title,"<?php echo _lkn_error_form_employer_email_template;?>");	
	reason += validateEmpty(theForm.db_body,"<?php echo _lkn_error_form_employer_email_template_body;?>");	
	if (reason != "") {
	alert("<?php echo _lkn_error_form;?>\n" + reason);	
	return false;	
	}	
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
    <div id="linkredirectresume">
<a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&task=list_employer_email_templates&Itemid=2" id="titletopfrontal"/>
<img title="Regresar a herramientas del empleador" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
<?php echo _lkn_backfrontal;?>
</a>
</div>
	<div id="titledemo1" style="width:100%;">
	<h1 style="text-align:center;"><?php echo $action;?></h1><br />
	</div>
	<form id="adminForm" name="adminForm" method="post" action="index.php"  enctype="multipart/form-data" onsubmit="return validateFormOnSubmit(this)">
	<table id="tools_employees" cellpadding="5" cellspacing="0" border="0">
    	<thead>
        	<tr>
            	<th colspan="9">
                </th>
            </tr>
        </thead>
        <tbody>
        	<tr>
		  		<td valign="top">
                	<table class="general_table" cellpadding="5" cellspacing="0" border="0">
				  		<tbody>
                        	<tr>
                            	<td>
								<?php 
									echo lknToolTip(_lkn_email_template_title_tip,_lkn_title) .': ';		                                ?>
                               	</td>
                                <td>
                                <input maxlength="100" size="40" value="<?php echo $title;?>" 
                                name="db_title" class="inputbox"/>
                                </td>
                          	</tr>
                            <tr>
                            	<td>
									<?php echo lknToolTip(_lkn_published_tip,_lkn_published) .': ' ?>
                                </td>
                                <td>
								<?php
                                echo lknhtmlMaker::publishedSelectList('db_published',$published);
								?>
                                </td>
                           	</tr>
                            <tr>
                            	<td colspan="2">
								<?php echo lknToolTip(_lkn_email_template_tip,_lkn_email_template)?>
					  			</td>
				  			</tr>
				  			<tr>
				  			<td colspan="2">
                            <textarea id="db_body" name="db_body" rows="20" cols="50" 
                            class="inputbox"><?php echo $body;?></textarea>
				  			</td>
				  		</tr>
			  		</tbody>
              	</table>
		  	</td>
		  	<td width="320" valign="top">
				<table>
                	<thead>
                    	<tr>
                        	<td>
                            	<strong>
                                Información
                                </strong>
                        	</td>
                      	</tr>
			  		</thead>
			  		<tbody>
                    	<tr><td><?php echo _lkn_email_template_desc;?></td></tr>
			  		</tbody></table>
		  	</td>
	  	</tr>
	</tbody>
</table>	
<input type="hidden" value="<?php echo $id;?>" name="cid"/>
<input type="hidden" value="com_jobs" name="option"/>
<input type="hidden" value="<?php echo $task;?>" name="task"/>
<input type="hidden" name="db_memberid" value="<?php echo $memberid;?>"/>
<div class="floatRight">
<input type="submit" value="<?php echo $action;?>" class="btn" style="margin-left:65px;" />
</div>	
<br />
<br />
<br />
<br />
</form>