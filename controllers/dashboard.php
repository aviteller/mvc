<?php

class Dashboard extends Controller {
	function __construct() {
		parent::__construct();
		Auth::handleLogin();
/*		Session::init();*/

		$this->view->js = array('dashboard/js/default.js');

	}

	function index() {

		$this->view->title = 'Dashboard';
		$this->view->render('dashboard/index');

	}

	function logout(){
		Session::destroy();
		Redirect::to('../login');
	}

	function ajaxInsert() {
		$this->model->ajaxInsert();
	}

	function ajaxGetListing() {
		$this->model->ajaxGetListing();
	}

	function ajaxDeleteListing()
	{
		$this->model->ajaxDeleteListing();
	}

}