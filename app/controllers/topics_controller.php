<?php

	class TopicsController extends AppController{

		var $name = 'Topics';

		public $uses = null;

		function beforeFilter(){
			$this->Auth->allow('hello');
		}

		function index(){

		}

		function hello(){

		}

	}

?>
