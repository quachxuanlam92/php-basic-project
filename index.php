<?php
	require("connect.php");
	if(isset($_SESSION['login_user'])){
		// if(isset($_COOKIE)){
		// 	foreach ($_COOKIE as $cookie_array => $value) {
		// 		print_r($cookie_array);
		// 		exit();
		// 	}
		// }
		
		
	}else{
		header("Location: login.php");	
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PH1707 LM</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="common/final.css"/>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"/></script>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">
					Bài Test PH1707
				</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Trang chủ</a></li>
                    
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quản lý danh mục <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="index.php?view=category&action=addcategory">Thêm mới</a></li>
            				<li><a href="index.php?view=category&action=listcategory">Danh sách</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quản lý sản phẩm <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="index.php?view=product&action=addproduct">Thêm mới</a></li>
            				<li><a href="index.php?view=product&action=listproduct">Danh sách</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
            	
				<?php 
					if(isset($_GET["view"]) && isset($_GET["action"])){
						$url = "module/".$_GET["view"]."/".$_GET["action"].".php";					
						include($url);
					}else{
						include("module/home.php");
					}
				?>
                
                <div id="error">
                	<h3 style="color:red">
                    	<?php
						 
                        	if(isset($coloi)){
								echo $coloi;
							}
						
						?>
                    
                    </h3>
                </div>
			</div>
		</div>
	</div>
</body>
</html>