<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
//we want it to die to then have this message
if ($mysqli->connect_error) {
	die('Connect Error (' . $mysqli->connect_errno .')'
		. $mysqli->connect_error);
}
else {
	echo "Connection made";
}
$mysqli->close();

?>