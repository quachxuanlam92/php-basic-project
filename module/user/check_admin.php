<?php
	$error ="";
	if(isset($_POST['adminlogin']) && isset($_POST['admin-username']) && isset($_POST['admin-password'])){
		$user = mysqli_real_escape_string($conn,$_POST['admin-username']);
		$pass = mysqli_real_escape_string($conn,$_POST['admin-password']);
		$sql = "SELECT * FROM tbl_users WHERE u_email = '$user' AND u_password = '$pass'";
		$result = mysqli_query($conn,$sql);
		if($num = mysqli_num_rows($result) > 0){
			//$row = mysqli_fetch_assoc($result);
			$_SESSION['login_user'] = $user;
			header("Location: index.php");
		}
		else{
				$error = "Your Login Name or Password is invalid";
			}
	}	
	
	
?>