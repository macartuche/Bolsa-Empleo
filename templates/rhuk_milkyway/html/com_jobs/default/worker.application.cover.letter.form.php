<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

				$id=$row->id;
				$cover_letter=temizleSlash($row->cover_letter);
				$action=_lkn_cover_letter_update;
				$task='update_worker_application_cover_letter';

			?>
				<script language="javascript" type="text/javascript">
			function validateFormOnSubmit(theForm) {
					var reason = "";
				  reason += validateEmpty(theForm.db_cover_letter,'<?php echo _lkn_error_form_cover_body;?>');
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

			<h1><?php echo $action;?></h1><br />
			<form id="adminForm" name="adminForm" method="post" action="index.php" onsubmit="return validateFormOnSubmit(this)">
						<table class="general_table">
							<tbody>
							<tr>
								<td class="key">
									<?php echo lknToolTip(_lkn_cover_letter_tip,_lkn_cover_letter);?>
								</td>
								<td>
									<textarea id="db_cover_letter" name="db_cover_letter" cols="50" rows="20" class="inputbox"/><?php echo $cover_letter;?></textarea>
								</td>
							</tr>
						</tbody></table>
		<input type="hidden" value="<?php echo $id;?>" name="cid"/>
		<input type="hidden" value="com_jobs" name="option"/>
		<input type="hidden" value="<?php echo $task;?>" name="task"/>
		<br />
			<div class="floatRight">
				<input type="submit" value="<?php echo $action;?>" class="btn"/>
			</div>
		</form>