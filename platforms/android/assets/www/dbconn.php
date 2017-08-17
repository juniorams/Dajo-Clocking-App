<?php
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'jquery';
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if(!conn){
		echo 'Connection Error'.mysqli_connect_error();
	}
	
	echo 'connected successfully';

?>