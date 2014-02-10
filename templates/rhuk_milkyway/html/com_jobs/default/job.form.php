<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

		//function job_form($row='',$credit=''){
			global $_lknBaseFramework,$_config,$task;
			$_db=&lknDb::createInstance();	
			
			
			if ($row!='') {
				$id=$row->id;
				$published=$row->published;
				$action = _lkn_job_update;
				if($task=='employer_new_job'){
					$task='save_employer_job';
					$action = _lkn_job_add;
				}else {
					$task='update_employer_job';
				}
				
			} else {
				$id = '';
				$published='';
				$action = _lkn_job_add;
				$task='save_employer_job';
			}
			
			?>
			
	<?php echo $js;?>
	<h1><?php echo $action;?></h1><br />
	<form action="index.php" method="post" id="adminForm" name="adminForm" enctype="multipart/form-data">
	<?php 
		$i=0;
		$n='';
		lknTabs::startTabPanel();
		
		foreach ($row_cats as $cat){
			//print_r($cat);
			$cat_name=$cat->title;
			$cat_id=$cat->id;
			$cat_name=temizleSlash($cat_name);
			$parent_id=$cat->parent_id;
						
			//tab başlangıcı ayarlaması
				if ($parent_id=='0') {
					lknTabs::startTab ( $cat_name );
				}else {
					echo "<fieldset class=\"resume\"><legend>$cat_name</legend>";
				}

					if (isset($fields_array[$cat_id])) {
						echo "<table class=\"adminlist\">";
						echo $fields_array[$cat_id];
						echo '</table><br />';
					}
 							
				if (isset($parent_id_array[$i+1])) {
					$n=$parent_id_array[$i+1];
				}else {
					$n='0';
				}
							
				if ($n=='0') {
					lknTabs::endTab();
				}else {
					echo "</fieldset>";
				}
				$i++;
						
			}
			lknTabs::endTabPanel();	
	?>
	
	<?php if ($credit_system_active=='1' && $credit_system_type=='2' && ($published=='' || $published=='-1')) {?>
		<table class="general_table">
			<tbody>
				<tr>
					<td class="key"><?php echo lknToolTip ( _lkn_package_package_job_posting_tip, _lkn_package_package );?></td>
					<td><?php echo $package_list;?></td>
				</tr>
			</tbody>
		</table>
	<?php }?>	

		<input type="hidden" value="<?php echo $id;?>" name="cid"/>
		<input type="hidden" value="com_jobs" name="option"/>
		<input type="hidden" value="<?php echo $credit;?>" name="credit"/>
		<input type="hidden" value="<?php echo $task;?>" name="task"/>
		<input type="hidden" value="<?php echo lknJobsItemId(true);?>" name="Itemid"/>
		<div class="floatRight">
			<button type="button" class="btn" onclick="document.adminForm.task.value='apply_employer_job';javascript: validateFormOnSubmit();"><?php echo _lkn_apply;?></button>
			<button type="button" class="btn" onclick="document.adminForm.task.value='<?php echo $task;?>';javascript: validateFormOnSubmit();"><?php echo $action;?></button>
		</div>
		</form>