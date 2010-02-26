<div class="form">
<?=form_open('login');?>
<?=form_fieldset('')?>
<ol>
	<li><?=form_label('Username',"username");?>
	<?=form_input('username','')?></li>
	<li><?=form_label('Password',"password");?>
	<?=form_password('password','')?></li>
	<li><?=form_submit('commit','login','class="button"')?></li>
</ol>
<?=form_fieldset_close()?>
<?=form_close()?>
</div>