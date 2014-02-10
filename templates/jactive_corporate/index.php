<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
$iso = split( '=', _ISO );
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php if ( $my->id ) initEditor(); ?>
    <meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
    <?php mosShowHead(); ?>
   
    <link rel="stylesheet" type="text/css" href="<?php echo $mosConfig_live_site; ?>/templates/jactive_corporate/css/template_css.css" />
  </head>
  <body>
  
<table width="785" border="0" cellspacing="0" cellpadding="0" height="600" align="center">
  <tr>
    <td valign="top" background="<?php echo $mosConfig_live_site;?>/templates/jactive_corporate/images/background.jpg"> 
      <table width="785" border="0" cellspacing="0" cellpadding="0" height="300">
        <tr> 
          <td width="785" height="29" background="<?php echo $mosConfig_live_site;?>/templates/jactive_corporate/images/top.jpg">
		  <?php
            # Vertical Menu V2.0 - by Arthur Konze - www.mamboportal.com - thanks Arthur for this! (Mambodyssee)
            $database->setQuery("SELECT id, name, link FROM #__menu WHERE menutype='mainmenu' and parent='0' AND access<='$gid' AND sublevel='0' ORDER BY ordering");
            $rows = $database->loadObjectList();
            echo "<table border='0' cellpadding='0' cellspacing='0' height='19' width='100%'><tr>";
            $num_rows  = count($rows);
            $tab_width = floor(100 / $num_rows);
            foreach($rows as $row) {
              echo "<td width='$tab_width%' align='center'><a class='buttonbar' href='$row->link&Itemid=$row->id'>$row->name</a></td>";
            }
            echo "</tr></table>";
          ?>
		  </td>
        </tr>
        <tr>
          <td height="165" width="785" background="<?php echo $mosConfig_live_site;?>/templates/jactive_corporate/images/header.jpg">&nbsp;</td>
        </tr>
        <tr>
          <td width="785" height="16" background="<?php echo $mosConfig_live_site;?>/templates/jactive_corporate/images/line.jpg" align="right"> 
            <?php include $GLOBALS['mosConfig_absolute_path'] . '/pathway.php'; ?>
          </td>
        </tr>
        <tr>
          <td width="785" height="90">
            <table width="785" border="0" cellspacing="0" cellpadding="0" height="90">
              <tr> 
                <td width="351" height="90" background="<?php echo $mosConfig_live_site;?>/templates/jactive_corporate/images/left.jpg">&nbsp;</td>
                <td height="90" width="434" background="<?php echo $mosConfig_live_site;?>/templates/jactive_corporate/images/right.jpg"> <?php mosLoadModules ( 'top' ); ?> </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
	  <table width="785" border="0" cellspacing="0" cellpadding="0" height="200">
        <tr> 
          <td width="351" valign="top"> 
            <table width="351" border="0" cellspacing="0" cellpadding="0" height="100">
              <tr> 
                <td width="175"> <?php mosLoadModules ( 'user1' ); ?> <br> <?php mosLoadModules ( 'left' ); ?> </td>
                <td width="175" align="right" valign="top"> 
                  <?php mosLoadModules ( 'right' ); ?>
                </td>
              </tr>
            </table>
          </td>
          <td width="434" align="center" valign="top"> 
            <?php mosMainBody(); ?>
          </td>
        </tr>
      </table>
	  <table width="785" border="0" cellspacing="0" cellpadding="0" height="29">
        <tr>
    <td>
	<?php
            # Vertical Menu V2.0 - by Arthur Konze - www.mamboportal.com - thanks Arthur for this! (Mambodyssee)
            $database->setQuery("SELECT id, name, link FROM #__menu WHERE menutype='mainmenu' and parent='0' AND access<='$gid' AND sublevel='0' ORDER BY ordering");
            $rows = $database->loadObjectList();
            echo "<table border='0' cellpadding='0' cellspacing='0' height='19' width='100%'><tr>";
            $num_rows  = count($rows);
            $tab_width = floor(100 / $num_rows);
            foreach($rows as $row) {
              echo "<td width='$tab_width%' align='center'><a class='buttonbar' href='$row->link&Itemid=$row->id'>$row->name</a></td>";
            }
            echo "</tr></table>";
          ?>
	</td>
  </tr>
</table>
    </td>
  </tr>
</table>
<div align="center">Content &copy; 2004 <a href="<?php echo $mosConfig_live_site;?>" accesskey="1">
  <?php echo $mosConfig_sitename; ?>
  </a><br/>
  Design by <a href="http://www.joomlactive.com">Joomlactive</a><br/>
</div>
  </body>