<?php

	$db = new mysqli('localhost:3306', 'webapp', 'webapp', 'webapp');



	if($db->connect_error) {

		die('Database cannot connect');

	}



	$db->set_charset('utf8');

?>
