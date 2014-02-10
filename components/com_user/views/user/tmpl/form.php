<link rel="stylesheet" href="components/com_jobs/templates/default/default.css" type="text/css" />
<?php defined('_JEXEC') or die('Restricted access'); ?>

<script type="text/javascript">
<!--
	Window.onDomReady(function(){
		document.formvalidator.setHandler('passverify', function (value) { return ($('password').value == value); }	);
	});
// -->
</script>

<form action="<?php echo JRoute::_( 'index.php' ); ?>" method="post" name="userform" autocomplete="off" class="form-validate">
<br />
<div id="linkredirectresume">
		<a href="<?php echo JURI::base(); ?>" id="titletopfrontal" />
			<img title="Regresar al perfil" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
            Atrás
		</a>
	</div><br />
<table cellpadding="5" cellspacing="0" border="0" id="tools_employees">
	<thead>
    	<tr>
        	<th>
            	<strong>
                	<?php if ( $this->params->def( 'show_page_title', 1 ) ) : ?>
					<?php echo $this->escape($this->params->get('page_title')); ?>
					<?php endif; ?>
                </strong>
            </th>
        </tr>
    </thead>
    <tbody>
<tr>
	<td class="textresult">
		<label for="username">
			<?php echo JText::_( 'User Name' ); ?>:
		</label>
		<span><?php echo $this->user->get('username');?></span>
	</td>
</tr>
<tr>
	<td class="textresult">
		<label for="name">
			<?php echo JText::_( 'Your Name' ); ?>:
		</label>
        <span style="margin-left:70px;">
		<input class="inputbox required" type="text" id="name" name="name" value="<?php echo $this->escape($this->user->get('name'));?>" size="40" />
        </span>
	</td>
</tr>
<tr>
	<td class="textresult">
		<label for="email">
			<?php echo JText::_( 'email' ); ?>:
		</label>
        <span style="margin-left:30px;">
		<input class="inputbox required validate-email" type="text" id="email" name="email" value="<?php echo $this->escape($this->user->get('email'));?>" size="40" />
        </span>
	</td>
</tr>
<?php if($this->user->get('password')) : ?>
<tr>
	<td class="textresult">
		<label for="password">
			<?php echo JText::_( 'Password' ); ?>:
		</label>
        <span style="margin-left:65px;">
		<input class="inputbox validate-password" type="password" id="password" name="password" value="" size="40" />
        </span>
	</td>
</tr>
<tr>
	<td class="textresult">
		<label for="password2">
			<?php echo JText::_( 'Verify Password' ); ?>:
		</label>
        <span style="margin-left:1px;">
		<input class="inputbox validate-passverify" type="password" id="password2" name="password2" size="40" />
        </span>
	</td>
</tr>
<?php endif; ?>
<tr>
	<td class="textresult">
    	<?php if(isset($this->params)) :  echo $this->params->render( 'params' ); endif; ?>
	<button class="button validate" type="submit" onclick="submitbutton( this.form );return false;"><?php echo JText::_('Save'); ?></button>
    </td>
</tr>
</tbody>
</table><br /><br /><br /><br /><br />
	<input type="hidden" name="username" value="<?php echo $this->user->get('username');?>" />
	<input type="hidden" name="id" value="<?php echo $this->user->get('id');?>" />
	<input type="hidden" name="gid" value="<?php echo $this->user->get('gid');?>" />
	<input type="hidden" name="option" value="com_user" />
	<input type="hidden" name="task" value="save" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
