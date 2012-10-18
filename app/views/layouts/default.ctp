<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
	//普通のCSSを読み込み
	echo $html->css("import");

	//UserControllerのloginActionなら以下のCSSを追加で読み込み
	if($this->name == 'Users' && $this->action == 'login'){
		echo $html->css('login');
	}
?>
</head>

<body>

<?php
	//ログインページ以外では、ナビゲーションバーを表示
	if(!($this->name == 'Users' && $this->action == 'login')){
		echo $this->element('g_navi');
	}
?>

<?php echo $content_for_layout ?>

</body>
</html>
