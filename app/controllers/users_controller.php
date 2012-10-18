<?php

	class UsersController extends AppController {

		var $name = 'Users';

		function beforeFilter(){
			$this->Auth->allow('add');
		}

		function login() {

		}

    function logout() {
			$this->Auth->logout();
		}

		function add(){
			$this->User->create();	//Userモデルに新しいレコードを登録するために、Userモデルのインスタンスを初期化
			if($this->User->save($this->data['User'])){
				$this->flash('登録完了しました。', '/users/login');
			}
		}

		function delete(){

			$id = $this->Auth->user('id');
			$username = $this->Auth->user('username');

			$this->User->delete($id);

			$this->set('id', $id);
			$this->set('username', $username);

		}

		function edit(){
			$this->User->id = $this->Auth->user('id');	//ユーザーモデルのインスタンスのidを、ログインしているユーザーのidにセットする。

			$username = $this->Auth->user('username');
			$mail = $this->Auth->user('mail');

			if($this->data){
				$this->User->save($this->data['User']);
			}

			$this->set('username', $username);
			$this->set('mail', $mail);

		}

		function listing(){
			$this->User->find('all');
		}

	}

?>
