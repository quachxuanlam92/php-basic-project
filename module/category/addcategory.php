<?php

	// if(isset($_POST['save'])){
		

	// 	$sql = "INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `logo`, `status`) 
	// 			VALUES (NULL, '$cat_name', '$logo', '{$status}');";
				

	// 	}

	
	
?>

<ol class="breadcrumb">
  <li><a href="index.php">Trang chủ</a></li>
  <li><a href="index.php?view=category">Quản lý danh mục</a></li>
  <li class="active">Thêm mới danh mục</li>
</ol>
<h3>Thêm mới danh mục</h3>
<form method="post" action="" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên danh mục</label>
    <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Tên danh mục">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">logo</label>
    <input type="file" id="logo" name="logo">
  </div>
  <div class="checkbox">
    <label>
      <input checked="checked" type="checkbox" name="status" id="status" value="1"> Hiện
    </label>
  </div>

  <button type="submit" class="btn btn-default" name="save">Thêm mới</button>
</form>
