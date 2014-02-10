<link rel="stylesheet" href="components/com_jobs/templates/default/default.css" type="text/css" />
<?php defined('_JEXEC') or die; ?>
<form action="<?php echo JRoute::_( 'index.php?option=com_user&task=completereset' ); ?>" method="post" class="josForm form-validate">
<br />
<div id="linkredirectresume">
		<a href="<?php echo JURI::base(); ?>index.php?option=com_user&view=reset&layout=confirm" id="titletopfrontal" />
			<img title="Regresar" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
            Atrás
		</a>
	</div>
    <br />
	<table cellpadding="5" cellspacing="0" border="0" id="tools_employees">
    	<thead>
        	<tr>
            	<th>
                	<strong>
                    <?php echo JText::_('Reset your Password'); ?>
                    </strong>
                </th>
            </tr>
        </thead>
        <tbody>
		<tr>
			<td class="textresult">
				<p><?php echo JText::_('RESET_PASSWORD_COMPLETE_DESCRIPTION'); ?></p>
			</td>
		</tr>
		<tr>
			<td class="textresult">
				<label for="password1" class="hasTip" title="<?php echo JText::_('RESET_PASSWORD_PASSWORD1_TIP_TITLE'); ?>::<?php echo JText::_('RESET_PASSWORD_PASSWORD1_TIP_TEXT'); ?>"><?php echo JText::_('Password'); ?>:</label>
                <span style="margin-left:65px;">
				<input id="password" name="password1" type="password" class="required validate-password" />
                </span>
			</td>
		</tr>
		<tr>
			<td class="textresult">
				<label for="password2" class="hasTip" title="<?php echo JText::_('RESET_PASSWORD_PASSWORD2_TIP_TITLE'); ?>::<?php echo JText::_('RESET_PASSWORD_PASSWORD2_TIP_TEXT'); ?>"><?php echo JText::_('Verify Password'); ?>:</label>
				<input id="password2" name="password2" type="password" class="required validate-password" />
			</td>
		</tr>
        <tr>
        	<td class="textresult">
            	<button type="submit" class="validate"><?php echo JText::_('Submit'); ?></button>
            </td>
        </tr>
        </tbody>
	</table>
<br /><br /><br /><br />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>