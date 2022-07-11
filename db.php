<?php
	
	$server = "sql209.epizy.com";
	$username = "epiz_32097054";
	$password = "rOmpsUHiijgFp";
	$dbname = "epiz_32097054_db_cv";

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if($conn){
		die("Connectio Failed:".mysqli_connect_error());

	}
?>