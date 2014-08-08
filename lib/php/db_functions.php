<?php
function db_connect(){
	$result = new mysqli('localhost', 'artpeer_manager', 'art9236peer', 'artpeer_db');
	if (!$result) {
		throw new Exception('Could not connect to database server.');
	} else {
		return $result;
	}
}
?>