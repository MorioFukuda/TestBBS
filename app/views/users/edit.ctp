<?php echo $username ?>さんの、ユーザー情報の編集ページです。

<?php
echo $form->create('User', array('action' => './edit'));
echo $form->input('mail', array('default' => $mail));
echo $form->end('更新');
?>
