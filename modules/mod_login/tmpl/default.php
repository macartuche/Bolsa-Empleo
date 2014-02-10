<link rel="stylesheet" href="/components/com_jobs/templates/default/default.css" type="text/css" />
<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<?php if($type == 'logout') : ?>
<div id="formhelloadmin"><br />
<form action="index.php" method="post" name="login" id="form-login">
	<?php if ($params->get('greeting')) : ?>
	<div id="helloadminsesion">
        <?php if ($params->get('name')) : {
            echo JText::sprintf( 'HINAME', $user->get('name') );
        } else : {
            echo JText::sprintf( 'HINAME', $user->get('username') );
        } endif; ?>
	</div>
	<?php endif; ?>
    <div id="form-login-close">
		<input type="submit" name="Submit" class="button" value="<?php echo JText::_('Salir'); ?>" />
	</div>
    <div id="linkchangeuserdate">
    	<a href="index.php?option=com_user&view=user&task=edit">
        Cambiar datos de perfil
        </a>
    </div>
	<input type="hidden" name="option" value="com_user" />
	<input type="hidden" name="task" value="logout" />
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
</form>
</div>
<?php else : ?>
<?php if(JPluginHelper::isEnabled('authentication', 'openid')) :
		$lang->load( 'plg_authentication_openid', JPATH_ADMINISTRATOR );
		$langScript = 	'var JLanguage = {};'.
						' JLanguage.WHAT_IS_OPENID = \''.JText::_( 'WHAT_IS_OPENID' ).'\';'.
						' JLanguage.LOGIN_WITH_OPENID = \''.JText::_( 'LOGIN_WITH_OPENID' ).'\';'.
						' JLanguage.NORMAL_LOGIN = \''.JText::_( 'NORMAL_LOGIN' ).'\';'.
						' var modlogin = 1;';
		$document = &JFactory::getDocument();
		$document->addScriptDeclaration( $langScript );
		JHTML::_('script', 'openid.js');
endif; ?>
<form action="<?php echo JRoute::_( 'index.php', true, $params->get('usesecure')); ?>" method="post" name="login" id="form-login" >
	<?php echo $params->get('pretext'); ?>
    <div id="tablelogin">
    <div id="imagelibro">
    	<img src="components/com_jobs/templates/default/images/libro.jpg" width="71" height="119" align="left"/>
    </div>
    <div id="loginform">
		<fieldset class="input">
            <p id="form-login-username">
                <label for="modlgn_username"><b style="color:#FFF;"><?php echo JText::_('Usuario') ?>: </b></label>
                <input id="modlgn_username" type="text" name="username" class="inputbox" alt="username" size="19"/>
            </p>
            <p id="form-login-password">
                &nbsp;<label for="modlgn_passwd"><b style="color:#FFF;"><?php echo JText::_('Clave') ?>: </b></label>&nbsp;&nbsp;
                <input id="modlgn_passwd" type="password" name="passwd" class="inputbox" size="19" alt="password"/>
            </p>
            <p align="left"  id="contenttitlenewcompanyaccount" >
           	<a id="titlenewcompanyaccount" href="<?php echo JRoute::_( 'index.php?option=com_user&view=reset' ); ?>">
            <?php echo JText::_('¿Ha olvidado la contraseña?'); ?></a><br />
           	<a id="titlenewcompanyaccount" href="<?php echo JRoute::_( 'index.php?option=com_user&view=remind' ); ?>">
            <?php echo JText::_('¿Ha olvidado el usuario?'); ?></a>
                       	
            <?php
            $usersConfig = &JComponentHelper::getParams( 'com_users' );
            if ($usersConfig->get('allowUserRegistration')) : ?>
           	<p align="left" id="newaccountcompany">
            <a id="titlenewcompanyaccount" href="<?php echo JRoute::_( 'index.php?option=com_user&view=register' ); ?>">
                    <?php echo JText::_('Crear una cuenta nueva para empresas'); ?></a>
			 </p>
            <?php endif; ?>
            </p>
            <?php if(JPluginHelper::isEnabled('system', 'remember')) : ?>
            <p id="form-login-remember">
            <input type="submit" name="Submit" class="button" value="<?php echo JText::_('Entrar') ?>"/>
            <?php /*?> <label for="modlgn_remember"><?php echo JText::_('Recordarme') ?></label><?php */?>
            <?php /*?>  <input id="modlgn_remember" type="checkbox" name="remember" class="inputbox" value="yes" alt="Remember Me" /><?php */?>
            </p>
			<?php endif; ?>
            <p>

            </p>
            </fieldset>
    </div>
    </div>
	<?php echo $params->get('posttext'); ?>

	<input type="hidden" name="option" value="com_user" />
	<input type="hidden" name="task" value="login" />
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
<?php endif; ?>