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
    <link rel="shortcut icon" href="<?php echo $mosConfig_live_site;?>/images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="<?php echo $mosConfig_live_site; ?>/templates/jactive_water/css/template_css.css" />
  </head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="800">
  <tr>
    <td valign="top" align="left"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0" height="36">
        <tr> 
          <td width="600" height="36">
		  <img src="<?php echo $mosConfig_live_site; ?>/templates/jactive_water/images/fundalwater01.jpg" width="600" height="36" alt="header" />
		  </td>
          <td align="right"> 
            <form style="margin-top: 2px; margin-bottom: 0px; margin-right: 4px;" action="index.php" method="post">
                    <input style="margin-left: 1px; margin-top: 0px; border: 0px; vertical-align: top;" type="image" name="option2" class="button" src="templates/jactive_water/images/btn-search.jpg" />
                    <font color="#7492AB">search our site </font> 
                    <input style="color: #7492AB;" class="inputbox" type="text" name="searchword" size="21" font="#7492AB" value="<?php echo Search; ?>"  onblur="if(this.value=='') this.value='<?php echo Search; ?>';" onfocus="if(this.value=='<?php echo Search; ?>') this.value='';" />
                    <input type="hidden" name="option" value="search" />
            </form>
		  </td>
        </tr>
      </table> 
	  <table width="100%" border="0" cellspacing="0" cellpadding="0" height="23">
        <tr>
          <td style="background: url(templates/jactive_water/images/fundalwater03.jpg) no-repeat; width: 100%; height: 23px; vertical-align: top;" valign="bottom" width="100%" height="23" align="left"> 
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
      <table width="100%" border="0" cellspacing="0" cellpadding="0" height="180">
        <tr> 
          <td>
		    <table width="600" border="0" cellspacing="0" cellpadding="0" height="180">
              <tr>
    <td style="background: url(templates/jactive_water/images/fundalwater04.jpg) no-repeat; width: 600px; height: 180px; vertical-align: top;" valign="top" width="600" height="180" align="center">&nbsp;</td>
  </tr>
</table>
		  </td>
          <td>
		    <table width="188" border="0" cellspacing="0" cellpadding="0" height="180">
              <tr>
                <td style="background: url(templates/jactive_water/images/fundalwater05.jpg) no-repeat; width: 188px; height: 180px; vertical-align: top;" valign="bottom" width="188" height="180" align="left"> 
                  <table width="164" border="0" cellspacing="0" cellpadding="0" height="117" align="center">
                    <tr>
                      <td align="center" valign="bottom"> 
                        <?php mosLoadModules ( 'user1' ); ?>
                      </td>
  </tr>
</table>
                </td>
  </tr>
</table>
		  </td>
          <td style="background: url(templates/jactive_water/images/fundalwater06.jpg) no-repeat; width: 236px; height: 180px; vertical-align: top;" valign="top" width="236" height="180" align="center"></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0" height="16">
        <tr> 
          <td>
		    <table width="99" border="0" cellspacing="0" cellpadding="0" height="16">
              <tr>
    <td style="background: url(templates/jactive_water/images/fundalwater07.jpg) no-repeat; width: 99px; height: 16px; vertical-align: top;" valign="top" width="99" height="16" align="left">&nbsp;</td>
  </tr>
</table>
		  </td>
          <td>
		    <table width="206" border="0" cellspacing="0" cellpadding="0" height="16">
              <tr>
    <td style="background: url(templates/jactive_water/images/fundalwater08.jpg) no-repeat; width: 206px; height: 16px; vertical-align: top;" valign="top" width="206" height="16" align="center"></td>
  </tr>
</table>
		  </td>
          <td style="background: url(templates/jactive_water/images/fundalwater09.jpg) no-repeat; width: 719px; height: 16px; vertical-align: top;" valign="bottom" width="719" height="16" align="left"> 
            <?php include $GLOBALS['mosConfig_absolute_path'] . '/pathway.php'; ?>
          </td>
        </tr>
      </table>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="99" height="45" align="left" valign="top"> 
            <table width="99" border="0" cellspacing="0" cellpadding="0" height="45">
              <tr>
    <td>&nbsp;</td>
  </tr>
</table>
          </td>
          <td width="206" height="45" align="left" valign="top"> 
            <table width="206" border="0" cellspacing="0" cellpadding="0" height="45">
              <tr>
                <td style="background: url(templates/jactive_water/images/fundalwater11.jpg); width: 206px; height: 45px; vertical-align: top;" valign="top" width="206" height="45" align="left"> 
                  <table width="190" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>
                        <?php mosLoadModules ( 'right' ); ?>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
			<table width="206" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="background: url(templates/jactive_water/images/bottom02.jpg) no-repeat; width: 206px; height: 45px; vertical-align: top;" valign="top" width="206" height="45" align="left"></td>
  </tr>
</table>
          </td>
          <td width="719" height="45">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td align="left" valign="top"> 
                  <table border="0" cellspacing="0" cellpadding="0" width="350">
                    <tr> 
                      <td align="left"> 
                        <table width="160" border="0" cellspacing="0" cellpadding="0" height="19">
                          <tr>
                            <td align="left"> 
                              <?php mosLoadModules ( 'user2' ); ?>
                            </td>
                          </tr>
                        </table>
                      </td>
                      <td align="right"> 
                        <table width="192" border="0" cellspacing="0" cellpadding="0" height="25">
                          <tr>
                            <td align="right"> 
                              <?php mosLoadModules ( 'user3' ); ?>
                            </td>
                          </tr>
                        </table>
                        
                      </td>
                    </tr>
                  </table>
                  <?php mosMainBody(); ?>
                  <table border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td> 
                        
                      </td>
                    </tr>
                  </table>
                </td>
                <td rowspan="2" align="left" valign="top"> 
                  <table width="150" border="0" cellspacing="0" cellpadding="0" height="10">
                    <tr> 
                      <td align="left" valign="top"> 
                        <?php mosLoadModules ( 'left' ); ?>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr> 
                <td align="left" valign="top"> </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<p align="center"><?php include_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/footer.php' ); ?></p>
<div align="center">template design by <a href="http://www.joomlactive.com">Joomlactive </div>
</body>

