<div id="login">
<h1>Les Amis</h1>
<p>Content Management Login</p>
<?php if(($this->session->flashdata('message'))):?>
<div id="msg">
	<p class="red"><?=$this->session->flashdata('message');?></p>
</div>
<?php endif;?>
<?=partial('admin/_login_form')?>
</div>