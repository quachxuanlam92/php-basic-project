<?php

	if(isset($_POST['add']) && isset($_POST['cat_name'])){
    $cat_name = $_POST['cat_name'];
    $cat_status = isset($_POST['status']);
    if($cat_status == true){
      $cat_status = 1;
    }else{
      $cat_status = 0;
    }
    $logo = isset($_FILES['logo']);
    $errors= array();
    $file_name = $_FILES['logo']['name'];
    $file_size = $_FILES['logo']['size'];
    $file_tmp = $_FILES['logo']['tmp_name'];
    $file_type = $_FILES['logo']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['logo']['name'])));
    
    $expensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$expensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152) {
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true) {
       move_uploaded_file($file_tmp,"upload/category/".$file_name);
       echo "Success";
    }else{
       print_r($errors);
    }

    $sql_add = "INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `logo`, `status`) 
        VALUES (NULL, '$cat_name', '$file_name', '$status');";
    $addQuery = mysqli_query($conn,$sql_add);
    header("Location: index.php?view=category&action=listcategory");
	}

	
	
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

  <button type="submit" class="btn btn-default" name="add">Thêm mới</button>
</form>
