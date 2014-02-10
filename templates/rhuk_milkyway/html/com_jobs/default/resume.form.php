<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }		
			
		?>
			<h1><?php echo $action;?></h1><br />
			<?php echo $js;?>
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
	?>
	<?php echo $package_list;?>
	
		<?php if (!isset($_buttons)) {?>
			<?php //_buttons parametresi gelirse gizlenicek?>
			<?php //@todo: salakça bir fikir bu. günü kurtarıyor sadece ?>
			<div class="floatRight">
				<button type="button" class="btn" onclick="document.adminForm.task.value='apply_resume';javascript: validateFormOnSubmit();"><?php echo _lkn_apply;?></button>
				<button type="button" class="btn" onclick="javascript: validateFormOnSubmit();"/><?php echo $action;?></button>
			</div>			
		<?php }else {?>
			<?php //bu kısım appy_job_ task'ı tarafından kullanıcak?>
			<input type="hidden" name="applicant_name" value=""/>
			<input type="hidden" name="job_title" value=""/>
			<input type="hidden" name="job_alias" value=""/>
			<input type="hidden" name="company_name" value=""/>
			<input type="hidden" name="db2_job_id" value=""/>
			<input type="hidden" name="inform_employer" value=""/>
			<input type="hidden" name="company_id" value=""/>
			<textarea rows="0" style="display:none;" cols="0" id="db2_cover_letter" name="db2_cover_letter"/></textarea>
			
		<?php }?>


			<input type="hidden" name="cid" value="<?php echo $id; ?>" />
			<input type="hidden" name="db_memberid" value = "<?php echo $memberid;?>" />
			<input type="hidden" name="option" value="com_jobs" />
			<input type="hidden" name="task" value="<?php echo $task;?>" />

		</form>
		<?php lknTabs::endTabPanel();?>		