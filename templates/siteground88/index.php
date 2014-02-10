<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
// needed to seperate the ISO number from the language file constant _ISO
$iso = split( '=', _ISO );
// xml prolog
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
if ( $my->id ) {
	initEditor();
}
?>
<?php mosShowHead(); ?>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<?php echo "<link rel=\"stylesheet\" href=\"$GLOBALS[mosConfig_live_site]/templates/$GLOBALS[cur_template]/css/template_css.css\" type=\"text/css\"/>" ; ?>
<link rel="alternate" type="application/rss+xml" title="<?php echo $mosConfig_sitename?>" href="<?php echo $mosConfig_live_site;?>/index.php?option=com_rss&feed=RSS2.0&no_html=1" />
<!--[if lte IE 7]>
<link href="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/css/template_ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
	<div id="page_bg">
		<div  id="center">
			<!--topmenu start-->
				<div class="topmenu">
						<div class="tmenu_div">
							<?php include'menu.php'; ?>
						</div>
						<?php if ( mosCountModules( 'user4' ) ) { ?>
						<div class="search_div">
						<!-- search box start -->
							<div id="search">
								<table cellpadding="0" cellspacing="0" style="margin: 0 auto;">
									<tr>
										<td><?php mosLoadModules ( 'user4'); ?></td>
									</tr>
								</table>
							</div>
						<!-- search box end -->
						</div>
						<?php } ?>
						<div class="clr"></div>	

				</div>
				<div class="clr"></div>
			<!--topmenu end-->
		
			<!--header start -->
			<div id="header">
				<div id="hwrap">
					<div id="hw-left">
						<div id="sitename">
							<p><?php echo $GLOBALS['mosConfig_sitename']?></p>
						</div>	
						<div class="clr"></div>
					</div>
					
					<div id="hw-right">
					<?php if ( mosCountModules( 'user1' )  &&  mosCountModules( 'user2' ) )  { ?>
						<div>
							<div class="hwr-left">
								<?php mosLoadModules ( 'user1' , '-3'); ?>
							</div> 
							<div class="hwr-right">
								<?php mosLoadModules ( 'user2' , '-3'); ?>
							</div>
							<div class="clr"></div>
						</div>
					<?php } ?>
					<?php if ( mosCountModules( 'user1' )  &&  mosCountModules( 'banner' ) )  { ?>
						<div id="banner" style="height:60px;overflow:hidden;">
							<?php mosLoadModules ( 'banner' , '-3'); ?>
						</div> 
					<? } else { ?>
						<div id="banner" style="height:214px;overflow:hidden;">
							<table cellpadding="0" cellspacing="0" style="margin: 0 auto;">
								<tr>
									<td style="width: 500px; text-align: center; vertical-align: middle; padding: 80px 0 0;">
										<?php mosLoadModules ( 'banner' , '-3'); ?>
									</td>
								</tr>
							</table>
						</div> 
					<?php } ?>
					</div> 
					<div class="clr"></div>
				</div>
			</div>
			<div class="clr"></div>
			<!--header end -->
		
			<!--center start-->

			<div class="center">
					<div id="wrapper">	
						<div id="content">
					<!--if left or right collum start-->
					<?php if ( mosCountModules( 'left' ) ) { ?>
							<div id="leftmenu">
								<div id="timedate">
								<? echo date("H:i:s - d.m.Y"); ?>
								</div>
								<?php mosLoadModules('left' , '-3'); ?>
								
							</div>	
					<? } ?>
					
					<?php if ( mosCountModules( 'right' ) ) { ?>
					<div id="main">
					<!--pathway start-->
					<div class="cpathway">
						<div class="cpleft">
							<?php mosPathWay(); ?>
						</div>
					</div>
					<!--pathway end-->
					<? } else { ?>
					<div id="main_full">
					<!--pathway start-->
					<div class="cpathway">
						<div class="cpleft">
							<?php mosPathWay(); ?>
						</div>
					</div>
					<!--pathway end-->
					<? } ?>
						<?php mosMainBody(); ?>
					</div>
					<?php if ( mosCountModules( 'right' ) ) { ?>
						<div id="rightmenu">
							<?php mosLoadModules ( 'right' , '-3'); ?>							
						</div>
					<? } ?>
					<div class="clr"></div>
					<!--if left or right collum end-->
						</div>			
					</div>
			</div>
			<!--center end-->
			<!--footer start-->
				<div id="footer">
					<p class="copyright"><? $sg = ''; include "templates.php"; ?></p>
				</div>
			<!--footer end-->
		</div>
	</div>
</body>
</html>