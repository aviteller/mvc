<?php

class View {
	function __construct(){
		//echo "this is the views<br>";
	}

	public function render($name, $noInclude = false){
		if ($noInclude == true) {
			require 'views/' . $name . '.php';
		} else {
			require 'views/includes/header.php';
			require 'views/' . $name . '.php';
			require 'views/includes/footer.php';
		}
	}
}