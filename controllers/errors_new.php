<?php

class Errors_new extends Controller {

	function __construct(){
		parent::__construct();
	}

	function index() {
		$this->view->title = 'ERROR!!';
		$this->view->msg = 'This page doesnt existis';

		$this->view->render('new_errors/index');
	}

}