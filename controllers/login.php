<?php

class Login extends Controller {
	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->view->title = 'Login';
/*		echo Hash::create('md5', 'password', HASH_PASSWORD_KEY);*/
		$this->view->render('login/index');

	}

	function run() {

		$this->model->run();

	}
}