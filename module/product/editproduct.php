<ol class="breadcrumb">
    <li><a href="index.php">Trang chủ</a></li>
    <li><a href="index.php?view=product&action=listproduct">Quản lý sản phẩm</a></li>
    <li class="active">sửa sản phẩm</li>
</ol>

<h3>Sửa sản phẩm</h3>

<form method="post" action="" enctype="multipart/form-data">

    <div class="form-group">
        <label for="exampleInputEmail1">Tên sản phẩm</label>
        <span></span>
        <input type="text" class="form-control" id="pro_name" name="pro_name" value="asus k43" placeholder="Tên sản phẩm" required="required">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Loại Danh Mục</label>
        <select name="cat_id" id="cat_id" class="form-control" required="required">
        	<option value="0">--Chọn danh mục--</option>
            <option value="1">Asus</option>
            <option value="2">HP</option>
        </select>
    </div>
    <div class=" form-group">
        <label for="exampleInputEmail1">Ảnh Cũ</label><br>
        <img src="upload/products/asusk43.jpg" alt="" width="300">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Ảnh Sản phẩm</label>
        <span></span>
        <input type="file" id="pro_image" name="pro_image">
    </div>

   	<div class="form-group">
        <label for="exampleInputEmail1">Giá Bán</label>
        <span></span>
        <input type="text" class="form-control" id="price" name="price" value="50000" placeholder="Giá Bán" required="required">
    </div>
	
	<div class="form-group">
        <label for="exampleInputEmail1">saleoff ( % )</label>
        <input type="text" class="form-control" id="pro_name" name="saleoff" value="10" placeholder="Sale off" required="required"> 
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Giới Thiệu Sản Phẩm</label>
        <span></span>
        <textarea name="description" id="description" cols="30" rows="5" class="form-control">description</textarea>       
    </div>
	
	<div class="checkbox">
        <label>
            <input type="checkbox" name="status" id="status" value="1"> Hiện
        </label>
    </div>

    <button type="submit" class="btn btn-default" name="edit">Sửa</button>
</form> 