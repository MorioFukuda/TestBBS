<h1>ユーザーの新規登録ページ</h1>

<?php

if ($session->check('Message.auth')) echo $session->flash('auth');
echo $form->create('User', array('action' => './add'));
echo $form->input('username');
echo $form->input('password');
echo $form->input('mail');
echo $form->end('登録');

?>
