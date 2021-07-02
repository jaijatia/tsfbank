<?php

	$servername = "sql06.epizy.com";
	$username = "dbusername";
	$password = "dbpass";
	$dbname = "epiz_290314_tsfbank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
