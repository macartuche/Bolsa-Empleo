<link rel="stylesheet" href="components/com_jobs/templates/default/default.css" type="text/css" />
<?php defined('_JEXEC') or die; ?>
	<form action="<?php echo JRoute::_( 'index.php?option=com_user&task=confirmreset' ); ?>" method="post" class="josForm form-validate">
    <br />
    <div id="linkredirectresume">
		<a href="<?php echo JURI::base(); ?>index.php?option=com_user&view=reset" id="titletopfrontal" />
			<img title="Regresar" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
            Atrás
		</a>
	</div>
    <br />
	<table cellpadding="5" cellspacing="0" border="0" class="contentpane" id="tools_employees">
    	<thead>
        	<tr>
            	<th colspan="5">
                	<strong>
                    	<?php echo JText::_('Confirm your Account'); ?>
                    </strong>
                </th>
            </tr>
        </thead>
        <tbody>
		<tr>
			<td colspan="2" class="textresult">
				<p><?php echo JText::_('RESET_PASSWORD_CONFIRM_DESCRIPTION'); ?></p>
			</td>
		</tr>
		<tr>
			<td class="textresult">
				<label for="token" class="hasTip" title="<?php echo JText::_('RESET_PASSWORD_TOKEN_TIP_TITLE'); ?>::<?php echo JText::_('RESET_PASSWORD_TOKEN_TIP_TEXT'); ?>"><?php echo JText::_('Token'); ?>:</label>
			</td>
			<td class="textresult">
				<input id="email" name="token" type="text" class="required" size="36" />
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
