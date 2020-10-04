<?php 
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "agenda";
	$koneksi = mysqli_connect($server,$username,$password,$database)or die(mysqli_error($koneksi));
;
	
	mysqli_select_db($koneksi,$database);
 ?>