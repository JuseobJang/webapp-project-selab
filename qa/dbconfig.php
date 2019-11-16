<?php

	$db = new mysqli('localhost:8889', 'root', 'root', 'database');



	if($db->connect_error) {

		die('Database cannot connect');

	}



	$db->set_charset('utf8');

?>