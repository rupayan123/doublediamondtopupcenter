<?php

	$servername='localhost';
	$username="root";
	$password="";
	$dbname='topup_data';

	$conn=mysqli_connect($servername,$username,$password,$dbname);

	if($conn)
	{
	  //echo "Connection Successful";
	  ?>

	  <script>
		alert('Connection Successful');
	  </script>
	  <?php
	}
	else
	{
	  //echo "No Connection"
	  die("No Connection" . mysqli_connect_error());
	}
?>
