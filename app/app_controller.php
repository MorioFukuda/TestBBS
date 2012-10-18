<?php

class AppController extends Controller {

	var $components = array('Auth');

	function beforeFilter(){
		$this->Auth->authError = 'ログインしてください。';
		$this->Auth->loginError = 'ログインに失敗しました。';
	}

}

?>
