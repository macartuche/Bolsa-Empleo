<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
global $_lknBaseFramework;
if ($row!='')
{
	$id=$row->id;
	$title=temizleSlash($row->title);
	$memberid=$row->memberid;
	$cover_letter=temizleSlash($row->cover_letter);
	$published=$row->published;
	$action=_lkn_cover_letter_update;
	$task='update_worker_cover_letter';
}
else
{
	$id='';
	$title='';
	$cover_letter='';
	$published='';
	$user=new lknUser();
	$memberid=$user->getUserID();
	$action=_lkn_cover_letter_add;
	$task='save_worker_cover_letter';
}
?>
<script language="javascript" type="text/javascript">
function validateFormOnSubmit(theForm) {
var reason = "";
reason += validateEmpty(theForm.db_title,"<?php echo _lkn_error_form_cover_title;?>");
reason += validateEmpty(theForm.db_cover_letter,"<?php echo _lkn_error_form_cover_body;?>");
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
    <a href="<?php echo JURI::base(); ?>index.php?option=com_jobs&task=list_worker_cover_letters&Itemid=2" id="titletopfrontal" />
        <img title="Regresar a herramientas del buscador de empleo" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
<?php echo _lkn_backfrontal;?>
    </a>
</div>
<div id="titledemo1" style="width:100%;">
	<h1 style="text-align:center;">
		<?php echo $action;?>
  	</h1><br />
</div>
<form id="adminForm" name="adminForm" method="post" action="index.php" onsubmit="return validateFormOnSubmit(this)">
	<table cellpadding="5" cellspacing="0" border="0" id="tools_employees">
   		<thead>
            <tr>
                <th colspan="5"> 
                </th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td class="textresult">
                <?php echo lknToolTip(_lkn_cover_letter_title_tip,_lkn_title) .': ';?>
            </td>
            <td>
                <input maxlength="100" size="50" value="<?php echo $title;?>" name="db_title" class="inputbox_cover_letter"/>
            </td>
        </tr>
        <tr>
            <td class="textresult">
                <?php echo lknToolTip(_lkn_cover_letter_tip,_lkn_cover_letter);?>
            </td>
            <td>
            <textarea id="db_cover_letter" name="db_cover_letter" cols="38" rows="20" class="inputbox_cover_letter"/>
			<?php echo $cover_letter;?>
            </textarea>
            </td>
        </tr>
        <tr>
            <td class="textresult">
                <?php echo lknToolTip(_lkn_published_tip,_lkn_published);?>
            </td>
            <td>
                <?php
                    echo lknhtmlMaker::publishedSelectList('db_published',$published);
                ?>
            </td>
        </tr>
    </tbody>
</table>
<input type="hidden" name="db_memberid" value="<?php echo $memberid;?>"/>
<input type="hidden" value="<?php echo $id;?>" name="cid"/>
<input type="hidden" value="com_jobs" name="option"/>
<input type="hidden" value="<?php echo $task;?>" name="task"/>
<div class="buttonresumeuser">
<input type="submit" value="<?php echo $action;?>" class="btn"/>
</div>
</form>	
<br />
<br />
<br /><br /><br /><br /><br />