<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/iconutpl.png">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/<?php echo $this->params->get('colorVariation'); ?>.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/<?php echo $this->params->get('backgroundVariation'); ?>_bg.css" type="text/css" />
<!--[if lte IE 6]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ieonly.css" rel="stylesheet" type="text/css" />
<![endif]-->
<?php if($this->direction == 'rtl') : ?>
<link href="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/template_rtl.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
</head>
<body id="page_bg" class="color_<?php echo $this->params->get('colorVariation'); ?> bg_<?php echo $this->params->get('backgroundVariation'); ?> width_<?php echo $this->params->get('widthStyle'); ?>">
<a name="up" id="up"></a>
<div class="center" align="center" style="margin:auto; width:950px;">
	<div id="wrapper">
    	<div id="logoBEW">
       		<a href="<?php echo $this->baseurl ?>">
       			<img src="<?php echo $this->baseurl;?>/templates/rhuk_milkyway/images/nuevas/logoBEU.jpg"
                width="301"height="99" />
       		</a>
       	</div>
      	<div id="menuSUP">
        	<div id="menuprincipal">
            	<jdoc:include type="modules" name="top"  />
          	</div>
      	</div>
      	<div id="wrapper_r">
            <div id="header">
                <div id="header_l">
                    <div id="header_r">
                    </div>
                </div>
            </div>
            <div id="pathway">
                <jdoc:include type="modules" name="breadcrumb" />
            </div>
            <div class="clr"></div>
          	<div id="whitebox">
				<?php
                $option = $_GET['option'];
                $user =& JFactory::getUser();
                if (($user->id!=0) and ($option=="com_content" or $option =="com_contact" or $option=="com_user"))
                {
                ?>
                <div id='cabecera_submenu' style='float:none; margin:-18px auto auto; position:relative;'>
                	<ul id="navlist" style="text-align:center; width:auto; margin-left:-50px; margin-top:10px; padding-top:5px;">
                		<li style="text-align:center;"> 
                			&iota;&nbsp;&nbsp;&nbsp;&nbsp;
                				<a style="color:#01376E; font-weight:bold;" href="/index.php?option=com_jobs&Itemid=2">
                				Categor&iacute;as de empleo 
                				</a>
                		</li>&iota;
                		<li>
                			<a style="color:#01376E; font-weight:bold;" href="/index.php?option=com_jobs&task=advanced_search&Itemid=&Itemid=2">
                            B&uacute;squeda Avanzada
                			</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&iota;
                		</li>
                        	<!--Oscar: Logout del sitio bolsa empleo -->
					<?php
                        if($my->id != 0)
                        {
                            $menu =& JSite::getMenu(); 
                            $item = $menu->getItem($_GET['Itemid']);
                            if ($item)
                            {
                           
                                $return = JRoute::_($item->link.'&Itemid='.$_GET['Itemid'], false);
                            }
                        $return = base64_encode($return);
                  	?>
                        <form action="index.php" method="post" name="login" id="form-login">
                            <div align="center" id="logout_img">
                                <input type="submit" name="Submit"  class="buttonlogoutfront" 
                                value="<?php echo JText::_('Salir'); ?>"/>
                            </div>
                            <input type="hidden" name="option" value="com_user" />
                            <input type="hidden" name="task" value="logout" />
                            <input type="hidden" name="return" value="<?php echo $return; ?>" />
                        </form>
                    <?php
                    }
                    ?>	
                	</ul>           
                </div>
                <?
                }
                ?>
                    <div id="whitebox_t">
                        <div id="whitebox_tl">
                            <div id="whitebox_tr"></div>
                        </div>
                    </div>
                   	<div id="whitebox_m">
                  		<div id="area">
                            <jdoc:include type="message" />
                            <div id="leftcolumn">
                            <?php if($this->countModules('left')) : ?>
                                <jdoc:include type="modules" name="left" style="rounded" />
                            <?php endif; ?>
                            </div>
                            <?php if($this->countModules('left')) : ?>
                            <div id="maincolumn">
                            <?php else: ?>
                            <div id="maincolumn_full">
                            <?php endif; ?>
                                <?php if($this->countModules('user1 or user2')) : ?>
                                    <table class="nopad user1user2">
                                        <tr valign="top">
                                            <?php if($this->countModules('user1')) : ?>
                                                <td>
                                                    <jdoc:include type="modules" name="user1" style="xhtml" />
                                                </td>
                                            <?php endif; ?>
                                            <?php if($this->countModules('user1 and user2')) : ?>
                                                <td class="greyline">&nbsp;</td>
                                            <?php endif; ?>
                                            <?php if($this->countModules('user2')) : ?>
                                                <td>
                                                    <jdoc:include type="modules" name="user2" style="xhtml" />
                                                </td>
                                            <?php endif; ?>
                                        </tr>
                                    </table>
                             	<div id="maindivider"></div>
                                <?php endif; ?>
                                <table class="nopad">
                                    <tr valign="top">
                                        <td>
                                            <jdoc:include type="component" />
                                            <jdoc:include type="modules" name="footer" style="xhtml"/>
                                        </td>
                                        <?php if($this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>
                                            <td class="greyline">&nbsp;</td>
                                            <td width="170">
                                                <jdoc:include type="modules" name="right" style="xhtml"/>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                </table>
                            </div>
                            <div class="clr"></div>
                                <div id="search">
                                    <jdoc:include type="modules" name="user4" />
                                </div>
                            </div>
                            <div class="clr"></div>
                   		</div>
                        <div id="whitebox_b">
                            <div id="whitebox_bl">
                                <div id="whitebox_br"></div>
                            </div>
                        </div>           
          	</div>	
       	</div>
 	</div>
        <!-- footer -->     
        <div id="footer">
        		<p id="syndicate">
                          <jdoc:include type="modules" name="syndicate" />
                </p>
                <p id="power_by">
                	<h4 id="titlefooter">
                    Personalizado por:
                     </h4>
                    <a id="linkwutoloja" href="http://wutoloja.com" title="Wutoloja" target="_blank">
                    WUTOLOJA
                    </a>
                </p>
        </div>
</div>		
<jdoc:include type="modules" name="debug" />
</body>
</html>