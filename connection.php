<?php
	//the server on which the database is hosted on
	$dbhost = 'localhost';
	//the default user
	$dbuser = 'root';
	$dbpass = '';
	
	//specify the database
	$db = 'testdb';
	
	//variable for establishong a connection
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	
	//select the actual database
	mysql_select_db($db);
?>