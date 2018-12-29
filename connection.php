<?php
	$con = mysqli_connect("localhost","root","","hysale_db");

	if (!$con) {
		# code...
		die('plese check your connection!'.mysqli_error($con));
	}

?>