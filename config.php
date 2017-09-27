<?php
//define constants for connection info
define("MYSQLUSER","jc444921");
define("MYSQLPASS","Password1");
define("HOSTNAME","localhost");
define("MYSQLDB","jc444921_test");

//make connection to database
function db_connect()
{
	$conn = @new mysquli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if ($conn -> connect_error){
		die('Connect Error: '.$conn -> connect_error);
	}
	return $conn;
}
?>
