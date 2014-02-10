<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
$count=count($row_companies);
if ($count>0) {
$columns=2;//@todo: move this to a configuration parameter
$p=0;
	?>
	<div class="jsHomeSearchBoxes lknclearfix">
		<div class="jsHomeOtherSearches">
		<h3 class="medGrey"><?php echo _lkn_home_page_hiring;?></h3>
		<table border="0" style="border-collapse: collapse;width:100%;" width="100%">
		<?php foreach ($row_companies as $row) {
			$id=$row->id;
			$title=temizleSlash($row->title);
			$alias=$row->alias;
			$link="index.php?option=com_jobs&task=detail_company&id=$id:$alias".$itemid;
			$link=lknSef::url($link);
			$logo=$row->logo;
			$logo=lknJobsFunctions::getCompanyLogo($logo,$title,$thumbs);
			
			if ($p%$columns == 0) { // Start of row
				echo "<tr>";
			}
			
			echo "<td style=\"width: 45%;padding:10px;text-align:center;\" valign=\"top\">";
			?>
				<a href="<?php echo $link;?>" title="<?php echo $title;?>"><?php echo $logo;?></a>
			<?php 
			
			if (($p+1)%$columns == 0) { // End of row
				print "</tr>";
			}
			
			$p++;
		}?>
		</table>
		</div>
	</div>
	
<?php }?>