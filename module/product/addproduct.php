<?php 
  	if(isset($_POST["save"]) && isset($_POST["pro_name"]) && isset($_POST["price"]))
  	{
  		$product_name = $_POST['pro_name'];
  		$cat_id = $_POST['cat_id'];
  		$price = $_POST['price'];
  		$sale_off = $_POST['saleoff'];
  		$descript = $_POST['description'];
      $status = isset($_POST['status']);
      if($status == true){
        $status = 1;
      }else{
        $status = 0;
      }
      $pro_image = isset($_FILES['pro_image']);
      $errors= array();
      $file_name = $_FILES['pro_image']['name'];
      $file_size = $_FILES['pro_image']['size'];
      $file_tmp = $_FILES['pro_image']['tmp_name'];
      $file_type = $_FILES['pro_image']['type'];
      // $file_ext =  strtolower(end(explode('.',$file_name)));
      
      // $expensions= array("jpeg","jpg","png");
      
      // if(in_array($file_ext,$expensions)=== false){
      //    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      // }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"upload/products/".$file_name);
      }else{
         print_r($errors);
      }

        $sql_add = "INSERT INTO tbl_product (pro_name, cat_id, pro_image, price, saleoff, description, status) VALUES ('$product_name','$cat_id','$file_name','$price','$sale_off','$descript','$status')";
        $addQuery = mysqli_query($conn, $sql_add);
  	}
    $sql_select = "SELECT cat_id,cat_name FROM tbl_category";
    $selectQuery = mysqli_query($conn,$sql_select);
 ?>

 <ol class="breadcrumb">
    <li><a href="index.php">Trang chủ</a></li>
    <li><a href="index.php?view=product&action=listproduct">Quản lý sản phẩm</a></li>
    <li class="active">Thêm mới sản phẩm</li>
</ol>

<h3>Thêm mới sản phẩm</h3>

<form method="post" action="" enctype="multipart/form-data">

    <div class="form-group">
        <span></span>
        <label for="exampleInputEmail1">Tên sản phẩm</label>
        
        <input type="text" class="form-control" id="pro_name" name="pro_name" placeholder="Tên sản phẩm" required="required">
    </div>

    <div class="form-group">
      <?php
        echo "<label for='exampleInputEmail1'>Loại Danh Mục</label>
        <select name='cat_id' id='cat_id' class='form-control' required='required'>        	

    				<option value='0'>--Chọn danh mục--</option>";
            if($num = mysqli_num_rows($selectQuery) > 0){
              while($row = mysqli_fetch_assoc($selectQuery)){
                echo "<option value='".$row['cat_id']."'>".$row['cat_name']."</option>";
              }
            }
            

        echo '</select>';
      ?>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Ảnh Sản phẩm</label>
        <span></span>
        <input type="file" id="pro_image" name="pro_image" required="required" multiple="multiple">
    </div>

   	<div class="form-group">
        <label for="exampleInputEmail1">Giá Bán</label>
        <span></span>
        <input type="text" class="form-control" id="price" name="price" placeholder="Giá Bán" required="required">
    </div>
	
	<div class="form-group">
        <label for="exampleInputEmail1">saleoff</label>
        <input type="text" class="form-control" id="pro_name" name="saleoff" placeholder="Sale off" required="required">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Giới Thiệu Sản Phẩm</label>
        <span></span>
        <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>       
    </div>
	
	<div class="checkbox">
        <label>
            <input type="checkbox" name="status" id="status" value="1"> Ẩn/Hiện
        </label>
    </div>

    <button type="submit" class="btn btn-default" name="save">Thêm mới</button>
</form>