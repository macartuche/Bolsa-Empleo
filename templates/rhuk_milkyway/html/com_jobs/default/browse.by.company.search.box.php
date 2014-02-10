<?php

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
?>
<div class="lknBrowseLetters">
		<div>
			<?php foreach ($letters_links as $key=>$value) {?>
				<div class="lknBrowseLetter">
					<?php if ($key==$letter) {?>
						<strong><?php echo $key;?></strong>
					<?php }else {?>
						<a href="<?php echo $value;?>"><?php echo $key;?></a>
					<?php }?>
					
				</div>
			<?php }?>

		</div>
		<br /><br />
		<form action="<?php echo $link;?>" method="get" name="job_company_search_form">
				<table class="general_table">
				<tbody><tr>
					<td width="100%">
		
						<input type="text" onchange="document.adminForm.submit();" class="text_area" value="<?php echo $search_word;?>" id="search_word" name="search_word"/>
						<button class="btn" onclick="document.adminForm.submit();"><?php echo _lkn_go;?></button>
						<?php if ($search_word!='' || $letter!='') {?>
							<a class="btn" href="<?php echo $link;?>"><?php echo _lkn_reset;?></a>
						<?php }?>
					</td>
					<td nowrap="nowrap">
					</td>
		
				</tr>
				</tbody></table>
				
		</form>
	</div>