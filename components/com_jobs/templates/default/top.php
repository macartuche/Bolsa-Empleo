<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); 
} 
?>		 
<div class="cb_header">
	<div  id="cabecera_submenu">
		<div align="center" id="sub_menu">
			<div  align="center" class="nav_wrapper" >
				<ul id="navlist">
					<li>&iota;&nbsp;&nbsp;&nbsp;&nbsp;
                    	<a id="titletopfrontal" href="<?php echo $home;?>">
							<?php echo _lkn_toolbar_job_categories;?>
                      	</a>
					</li>&iota;
					<li>
						<?php
                            $link="index.php?option=com_jobs&task=advanced_search&Itemid=$Itemid";
                            $link=lknSef::url($link);
                        ?>
						<a id="titletopfrontal" href="<?php echo $link;?>">
							<?php echo _lkn_search_detailed;?>
                       	</a>&nbsp;&nbsp;&nbsp;&nbsp;&iota;
					</li>
					<?php 
						if ($user_registration_way=='1' and  $userType=='new')
						{ 
						}
						else
						{
					?>
					<?php 
						if ((($userType=='employer' || $userType=='new') and $user_id!='' and $company_functions=='1') || $jUserType=='Super Administrator') 
					{
					?>
                    	<li>
                        	<a id="titletopfrontal" href="<?php echo $employer_tools;?>">
								<?php echo _lkn_toolbar_employer_tools;?>
                  			</a>
                    	</li>&iota;
                 	<!--Oscar: Logout del sitio bolsa empleo -->
					<?php
                    	$my =& JFactory::getUser();
 
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
                    <?php 
					}
					?>
                    <?php 
						if ((($userType=='worker' || $userType=='new') and $user_id!='' and $job_seeker_functions=='1')) 
						{
					?>
                    	<li>
							<a id="titletopfrontal" href="<?php echo $job_seeker_tools;?>">
								<?php echo _lkn_toolbar_job_seeker_tools;?>
                       		</a>
						</li>
					<!--Oscar: Logout del sitio bolsa empleo -->
					<?php
                    	$my =& JFactory::getUser();
                        if($my->id != 0)
                        {
                            $menu =& JSite::getMenu(); 
                            $item = (empty($_GET['Itemid']))? $menu->getItem($_GET['amp;Itemid']) :$menu->getItem($_GET['Itemid']);

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
					<?php 
					}
					?>
					<?php 
					}
					?>             
				</ul>
				<!--<div class="toolbar-username">
				<?php /*?><?php echo $greetings;?><?php */?>
				</div>-->
			</div>
		</div>
	</div>
</div>