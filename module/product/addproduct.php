<?php 
  	if(isset($_POST["save"]))
  	{ 

  		// $product_name = $_POST['pro_name'];
  		// $cat_id = $_POST['cat_id'];
  		// $price = $_POST['price'];
  		// $sale_off = $_POST['saleoff'];
  		// $descript = $_POST['description'];
  		

  	}

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
        <label for="exampleInputEmail1">Loại Danh Mục</label>
        <select name="cat_id" id="cat_id" class="form-control" required="required">        	

    				<option value="0">--Chọn danh mục--</option>
            <option value="1">Asus</option>
            <option value="2">HP</option>

        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Ảnh Sản phẩm</label>
        <span></span>
        <input type="file" id="pro_image" name="pro_image[]" required="required" multiple="multiple">
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