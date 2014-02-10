<link rel="stylesheet" href="/components/com_jobs/templates/default/default.css" type="text/css" />
<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<script type="text/javascript">
<!--
	Window.onDomReady(function(){
		document.formvalidator.setHandler('passverify', function (value) { return ($('password').value == value); }	);
	});
// -->
</script>

<?php
	if(isset($this->message)){
		$this->display('message');
	}
?>
<br />
<form action="<?php echo JRoute::_( 'index.php?option=com_user' ); ?>" method="post" id="josForm" name="josForm" class="form-validate">
<div id="linkredirectresume">
		<a href="<?php echo JURI::base(); ?>" id="titletopfrontal" />
			<img title="Regresar" src="<?php echo JURI::base(); ?>components/com_jobs/templates/default/images/atras.png"/>
            Atrás
		</a>
	</div>
    <br />
<table border="0" cellspacing="0" id="tools_employees" cellpadding="5">
<thead>
	<tr>
		<th colspan="3">
        	<strong>
				<?php if ( $this->params->def( 'show_page_title', 1 ) ) : ?>
                <div class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
                    <?php echo $this->escape($this->params->get('page_title')); ?>
                </div>
                <?php endif; ?>
            </strong>
		</th>
	</tr>
</thead>
<tbody>
<tr>
	<td>
		<label id="namemsg" for="name">
			<?php echo JText::_( 'Nombre y Apellido' ); ?>:
		</label>
        <span style="margin-left:32px;">
  		<input type="text" name="name" id="name" size="40" value="<?php echo $this->escape($this->user->get( 'name' ));?>" class="required" maxlength="50" /> *</span>
  	</td>
</tr>
<tr>
	<td>
		<label id="usernamemsg" for="username">
			<?php echo JText::_( 'User name' ); ?>:
		</label>
        <span style="margin-left:23px;">
		<input type="text" id="username" name="username" size="40" value="<?php echo $this->escape($this->user->get( 'username' ));?>" class="required validate-username" maxlength="25" /> *</span>
	</td>
</tr>
<tr>
	<td>
		<label id="emailmsg" for="email">
			<?php echo JText::_( 'Email' ); ?>:
		</label>
        <span style="margin-left:29px;">
		<input type="text" id="email" name="email" size="40" value="<?php echo $this->escape($this->user->get( 'email' ));?>" class="required validate-email" maxlength="100" /> *</span>
	</td>
</tr>
<tr>
	<td>
		<label id="pwmsg" for="password">
			<?php echo JText::_( 'Password' ); ?>:
		</label>
        <span style="margin-left:64px;">
  		<input class="required validate-password" type="password" id="password" name="password" size="40" value="" /> *</span>
  	</td>
</tr>
<tr>
	<td>
		<label id="pw2msg" for="password2">
			<?php echo JText::_( 'Verify Password' ); ?>:
		</label>
		<input class="required validate-passverify"type="password"id="password2"name="password2"size="40" value="" /> *
	</td>
</tr>
<tr>
	<td>
        <label id="pw2msg" for="password2">
		<?php echo JText::_( 'REGISTER_REQUIRED' ); ?>
        </label>
	</td>
</tr>
<tr>
	<td>
		<button class="button validate" type="submit" id="buttonvalidate"><?php echo JText::_('Register'); ?></button>
		<input type="hidden" name="task" value="register_save" />
		<input type="hidden" name="id" value="0" />
		<input type="hidden" name="gid" value="0" />
        
		<?php echo JHTML::_( 'form.token' ); ?>
    </td>
</tr>
</tbody>
</table>
</form>
<br /><br /><br /><br />