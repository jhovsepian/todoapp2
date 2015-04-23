<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'todo');
// we want it to die to then have this message have this message
if ($mysqli->connect_error) {
	die('Connect Error (' . $mysqli->connect_errno .')'
		. $mysqli->connect_error);
}
else {
	// "Connection made";
}
$mysqli->close();

?>