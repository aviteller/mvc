<?php

class Dashboard_Model extends Model {

	function __construct() {
		parent::__construct();
	}
	
	function ajaxInsert() {
		$text = $_POST['text'];
		$this->db->insert('task', array(
			'text' => $text,
		));
		$data = array('text' => $text, 'id' => $this->db->lastInsertId());

		echo json_encode($data);

	}


	function ajaxGetListing()
	{
		$result = $this->db->select('SELECT * FROM task');
		echo json_encode($result);
	}

	function ajaxDeleteListing()
	{
		$id = (int) $_POST['id'];
		$this->db->delete('task', "id = '$id'");

	}
}