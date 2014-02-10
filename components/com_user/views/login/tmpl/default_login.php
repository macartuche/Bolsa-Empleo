<link rel="stylesheet" href="components/com_jobs/templates/default/default.css" type="text/css" />
<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php if(JPluginHelper::isEnabled('authentication', 'openid')) :
		$lang = &JFactory::getLanguage();
		$lang->load( 'plg_authentication_openid', JPATH_ADMINISTRATOR );
		$langScript = 	'var JLanguage = {};'.
						' JLanguage.WHAT_IS_OPENID = \''.JText::_( 'WHAT_IS_OPENID' ).'\';'.
						' JLanguage.LOGIN_WITH_OPENID = \''.JText::_( 'LOGIN_WITH_OPENID' ).'\';'.
						' JLanguage.NORMAL_LOGIN = \''.JText::_( 'NORMAL_LOGIN' ).'\';'.
						' var comlogin = 1;';
		$document = &JFactory::getDocument();
		$document->addScriptDeclaration( $langScript );
		JHTML::_('script', 'openid.js');
endif; ?>
<form action="<?php echo JRoute::_( 'index.php', true, $this->params->get('usesecure')); ?>" method="post" name="com-login" id="com-form-login">
<br />
    <div id="linkredirectresume">
		<a href="<?php echo JURI::base(); ?>index.php?option=com_user&view=remind" id="titletopfrontal" />
			<img title="Regresar" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
            Atrás
		</a>
	</div>
<br />
<table id="tools_employees" border="0" cellpadding="5" cellspacing="0" class="contentpane<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
<thead>
	<tr>
    	<th>
        	<strong>
            Acceso
            </strong>
        </th>
    </tr>
</thead>
<tbody>
<tr>
	<td class="textresult">
		<?php if ( $this->params->get( 'show_login_title' ) ) : ?>
			<?php echo $this->params->get( 'header_login' ); ?>
		<?php endif; ?>
		<?php if ( $this->params->get( 'description_login' ) ) : ?>
            <?php echo $this->params->get( 'description_login_text' ); ?>
        <?php endif; ?>
	</td>
</tr>
<tr>
	<td style="float:left;" class="textresult">
    	<?php echo $this->image; ?>
    </td>
</tr>
<tr>
	<td class="textresult">
    	<fieldset class="input">
            <p id="com-form-login-username">
                <label for="username"><?php echo JText::_('Username') ?></label><br />
                <input name="username" id="username" type="text" class="inputbox" alt="username" size="18" />
            </p>
            <p id="com-form-login-password">
                <label for="passwd"><?php echo JText::_('Password') ?></label><br />
                <input type="password" id="password" name="passwd" class="inputbox" size="18" alt="password" />
            </p>
            <?php if(JPluginHelper::isEnabled('system', 'remember')) : ?>
            <p id="com-form-login-remember">
                <label for="remember"><?php echo JText::_('Remember me') ?></label>
                <input type="checkbox" id="remember" name="remember" class="inputbox" value="yes" alt="Remember Me" />
            </p>
            <?php endif; ?>
            <input type="submit" name="Submit" class="btn" value="<?php echo JText::_('LOGIN') ?>" />
        </fieldset>
        <ul>
            <li>
                <a href="<?php echo JRoute::_( 'index.php?option=com_user&view=reset' ); ?>">
                <?php echo JText::_('FORGOT_YOUR_PASSWORD'); ?></a>
            </li>
            <li>
                <a href="<?php echo JRoute::_( 'index.php?option=com_user&view=remind' ); ?>">
                <?php echo JText::_('FORGOT_YOUR_USERNAME'); ?></a>
            </li>
            <?php
            $usersConfig = &JComponentHelper::getParams( 'com_users' );
            if ($usersConfig->get('allowUserRegistration')) : ?>
            <li>
                <a href="<?php echo JRoute::_( 'index.php?option=com_user&view=register' ); ?>">
                    <?php echo JText::_('REGISTER'); ?></a>
            </li>
            <?php endif; ?>
        </ul>	
    </td>
</tr>
</tbody>
</table>
<br /><br /><br /><br />
	<input type="hidden" name="option" value="com_user" />
	<input type="hidden" name="task" value="login" />
	<input type="hidden" name="return" value="<?php echo $this->return; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
