<link rel="stylesheet" href="components/com_jobs/templates/default/default.css" type="text/css" />
<?php defined('_JEXEC') or die; ?>

<form action="<?php echo JRoute::_( 'index.php?option=com_user&task=requestreset' ); ?>" method="post" class="josForm form-validate">
<br />
<div id="linkredirectresume">
		<a href="<?php echo JURI::base(); ?>" id="titletopfrontal" />
			<img title="Regresar" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
            Atrás
		</a>
	</div>
<br />
	<table cellspacing="0" border="0" id="tools_employees">
    	<thead>
        	<tr>
            	<th colspan="3">
                	<?php if ( $this->params->def( 'show_page_title', 1 ) ) : ?>
						<div class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
							<?php echo $this->escape($this->params->get('page_title')); ?>
						</div>
					<?php endif; ?>
                </th>
            </tr>
        </thead>
        <tbody style="text-align:left;">
		<tr>
			<td>
				<p id="descriptionpassword">
					<?php echo JText::_('RESET_PASSWORD_REQUEST_DESCRIPTION'); ?>
              	</p>
			</td>
		</tr>
		<tr>
			<td>
            <div id="contentemailremind">
			<label for="email" class="hasTip" title="<?php echo JText::_('RESET_PASSWORD_EMAIL_TIP_TITLE'); ?>::<?php echo JText::_('RESET_PASSWORD_EMAIL_TIP_TEXT'); ?>"><?php echo JText::_('Email Address'); ?>:</label>
            </div>
			</td>
			<td>
            	<div id="contentemailremind">
				<input id="email" name="email" type="text" class="required validate-email" style="margin-left:-600px;"/>
                </div>
			</td>   
   		</tr>
    	<tr>
            <td>
                <div id="contentemailremind">
                <button type="submit" class="validate">
                <?php echo JText::_('Submit'); ?>
                </button>
                <?php echo JHTML::_( 'form.token' ); ?>
                </div>
            </td>
		</tr>
        </tbody>
	</table>
</form><br /><br /><br /><br />
