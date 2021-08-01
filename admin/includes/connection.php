<?php
	$db = mysqli_connect("localhost", "root", "","newspaper");
	if ($db) {
		//echo "Database Connection Established";
	}
	else{
		die("Database Connection error!".mysqli_error($db));
	}
?>