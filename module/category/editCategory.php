<?php

	// Phan code cua trang edit
	// if(isset($_GET['cat_id'])){
		
		
	// 	$sql_update = "UPDATE  `tbl_category`
	// 			 SET   `cat_name` =  '{$cat_name}',
	// 					`logo` =  '{$name_logo}',							
	// 					`status` =  '{$stt}'
	// 			WHERE  `cat_id` = {$cat_id}";
				
						
	// }

?>
<ol class="breadcrumb">
  <li><a href="index.php">Trang chủ</a></li>
  <li><a href="index.php?view=category&action=listcategory">Quản lý danh mục</a></li>
  <li class="active">Sua danh mục</li>
</ol>
<h3>Sua danh mục</h3>
<form method="post" action="" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên danh mục</label>
    <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Tên danh mục" value="Asus ">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">logo</label>
    <br>
    <img width="80" src="upload/category/asus.png" />
    <input type="file" id="logo" name="logo">
  </div>
  <div class="checkbox">
    <label>
      <input checked="checked" type="checkbox" name="status" id="status" value="1"> Ẩn/Hiện
    </label>
  </div>
    <input type="hidden" name="module" value="sua"/>
  <button type="submit" class="btn btn-default" name="save">Sửa</button>
</form>
