<?php 
	
	definine("HOST", "localhots");
	definine("USER", "root");
	definine("PSWD", "root");
	definine("DBNM", "nexflix");

	function connect(){
		$conn = new mysqli(HOST,USER,PSWD);
		if ($conn) {
			return $conn;
		}
		return null;
	}
?>