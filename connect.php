<?php
	session_start();
	// Code phần kết nối csdl ở đây
	$conn = mysqli_connect("localhost","root","","project");
	if(!$conn){
		die("Error Connect ".mysqli_connect_error());
	}
	//echo "Connect success";
	
 ?>