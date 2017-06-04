<?php
	$mysqli = false;
	function connectDB (){
		global $mysqli;
		$mysqli = new mysqli("mysql93.1gb.ru", "gb_coursework", "eefde9e37ps", "gb_coursework");
		$mysqli->query("SET NAMES utf8");
	}

	function closeDB () {
		global $mysqli;
		$mysqli->close ();
	}
?>