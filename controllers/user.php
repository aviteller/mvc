<?php

class User extends Controller {
	public function __construct() {
		parent::__construct();
/*		Session::init();*/
		Auth::handleLogin();

	}

	public function index() {
		$this->view->title = 'Users';
		$this->view->userList = $this->model->userList();
		$this->view->render('user/index');

	}

	public function create(){
		$data = array();
		$data['login'] = $_POST['login'];
		$data['password'] = md5($_POST['password']);
		$data['role'] = $_POST['role'];

		//do error checking

		$this->model->create($data);
		Redirect::to('../user');
	}

	public function edit($id) 
	{
		$this->view->title = 'Edit User';
		$this->view->user = $this->model->userSingleList($id)[0];
		$this->view->render('user/edit');
	}
	
	public function editSave($data)
	{

		$data = array();
		$data['id'] = $_POST['id'];
		$data['login'] = $_POST['login'];
		$data['password'] = md5($_POST['password']);
		$data['role'] = $_POST['role'];
		
		// @TODO: Do your error checking!
				$this->model->editSave($data);
		Redirect::to('../../user');
	}

	public function delete($id){
		$this->model->delete($id);
		Redirect::to('../../user');
	}


}