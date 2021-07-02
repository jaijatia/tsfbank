<?php

	$servername = "sql06.epizy.com";
	$username = "epiz_29031458";
	$password = "sQHi8PXFCbigab";
	$dbname = "epiz_29031458_tsfbank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>