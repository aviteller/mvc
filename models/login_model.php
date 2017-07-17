<?php

class Login_Model extends Model {

	public function __construct(){
		parent::__construct();
	}

	public function run(){

		$sth = $this->db->prepare("SELECT id, role FROM users WHERE login = :login AND password = :password");
		$sth->execute(array(
			':login' => $_POST['login'],
			':password' => Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY),
		));

		

		$data = $sth->fetch();




/*	$data = $sth->fetchAll();
		echo $sth->rowCount();
		print_r($data);*/

		$count = $sth->rowCount();
		if ($count > 0) {
/*			Session::init();*/
			Session::set('role', $data['role']);
			Session::set('loggedIn', true);
			Session::set('userid', $data['id']);
			Redirect::to('../dashboard');
		} else {
			Redirect::to('../login');
		}
		
	}
}

/*$count =  $sth->rowCount();
		if ($count > 0) {
			// login
			Session::init();
			Session::set('loggedIn', true);
			header('location: ../dashboard');
		} else {
			header('location: ../login');
		}*/