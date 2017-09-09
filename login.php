<?php
	require("connect.php");
	include("module/user/check_admin.php");
	// if(isset($_COOKIE)){
	// 	foreach ($_COOKIE as $cookie_array => $value) {
	// 		print_r($cookie_array);
	// 		exit();
	// 	}
	// }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Lop ph1707 - login</title>

		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="common/final.css"/>
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"/></script>
		<style>
			.content{
				width: 500px;
			    margin: 20px auto;
			    border: 1px solid black;
			    padding: 10px;
			}
			.field{
				margin-bottom: 10px;
			}
			.field label{
				width: 30%;
				float: left;
			}
			h1{
				text-align: center;
				margin-bottom: 30px;
			}
			.login-actions{
				text-align: center;
			}
		</style>
    </head>

    <body>

        <div class="account-container">

            <div class="content clearfix">

                <form action="" method="post">

                    <h1>Đăng nhập Quản trị</h1>		

                    <div class="login-fields">                      

                        <div class="field">
                            <label for="username">Tên đăng nhập</label>
                            <input type="text" id="username" name="admin-username" value="" placeholder="Tên đăng nhập" class="login username-field" />
                        </div> <!-- /field -->

                        <div class="field">
                            <label for="password">Mật khẩu:</label>
                            <input type="password" id="password" name="admin-password" value="" placeholder="Mật khẩu" class="login password-field"/>
                        </div> <!-- /password -->

                    </div> <!-- /login-fields -->

                    <div class="login-actions">
						<label><input type="checkbox" name="rememberLogin"> Remember</label> 
                        <input type="submit" name="adminlogin" class="button btn btn-success btn-large" value="Đăng nhập"/>
                        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
                    </div> <!-- .actions -->



                </form>

            </div> <!-- /content -->

        </div> <!-- /account-container -->       

    </body>

</html>
