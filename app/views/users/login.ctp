<?php
	if ($session->check('Message.auth')) $session->flash('auth');
?>


<div id="login_bar">
	<?php echo $html->image("logo.png", array("id" => "logo")) ?>

	<div id="login_form">
		<?php echo $form->create('User', array('action' => 'login')) ?>
		<?php echo $form->input('username', array('label' => 'ユーザー名　' , 'div' => false)) ?>
		<?php echo $form->input('password', array('label' => 'パスワード　' , 'div' => false)) ?>
		<?php echo $form->end('ログイン') ?>
	</div>
</div>
