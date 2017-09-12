<?php
    if(isset($_GET['pro_id'])){
        $pro_id = $_GET['pro_id'];
        $sql = "SELECT * FROM tbl_product WHERE pro_id = $pro_id";
        $result = mysqli_query($conn,$sql);
        if($num = mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $pro_name = $row['pro_name'];
            $cat_id = $row['cat_id'];
            $pro_image = $row['pro_image'];
            $price = $row['price'];
            $saleoff = $row['saleoff'];
            $description = $row['description'];
            $status = $row['status'];
        }
        if(isset($_POST['edit']) && isset($_POST['pro_name']) && isset($_POST['price']) && isset($_POST['saleoff']) && isset($_POST['description'])){      
            $name = $_POST['pro_name'];
            $cat = $_POST['cat_id'];
            $logo = isset($_FILES['pro_image']);
            $errors= array();
            $file_name = $_FILES['pro_image']['name'];
            $file_size = $_FILES['pro_image']['size'];
            $file_tmp = $_FILES['pro_image']['tmp_name'];
            $file_type = $_FILES['pro_image']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['pro_image']['name'])));
            
            $expensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$expensions)=== false){
               $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if($file_size > 2097152) {
               $errors[]='File size must be excately 2 MB';
            }
            
            if(empty($errors)==true) {
               move_uploaded_file($file_tmp,"upload/products/".$file_name);
            }else{
               print_r($errors);
            }

            $pri = $_POST['price'];
            $sale = $_POST['saleoff'];
            $des = $_POST['description'];
            $pro_status = isset($_POST['status']);
            if($pro_status == true){
              $pro_status = 1;
            }else{
              $pro_status = 0;
            }

            
            $sql_update = "UPDATE  tbl_product
               SET   `pro_name` =  '$name',
                    cat_id = '$cat',
                  pro_image =  '$file_name',
                  price = '$pri',
                  saleoff = '$sale',
                  description = '$des',              
                  status =  '$pro_status'
              WHERE  pro_id = $pro_id";
            $editQuery = mysqli_query($conn, $sql_update);
            header("Location: index.php?view=product&action=listproduct");
        }
    }
    
?>

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
        <input type="text" class="form-control" id="pro_name" name="pro_name" value="<?php echo $pro_name; ?>" placeholder="Tên sản phẩm" required="required">
    </div>

    <div class="form-group">
        <?php
            echo "<label for='exampleInputEmail1'>Loại Danh Mục</label>
            <select name='cat_id' id='cat_id' class='form-control' required='required'>         

                        <option value='0'>--Chọn danh mục--</option>";
                $sql_select = "SELECT cat_id,cat_name FROM tbl_category";
                $selectQuery = mysqli_query($conn,$sql_select);
                if($num = mysqli_num_rows($selectQuery) > 0){
                  while($row = mysqli_fetch_assoc($selectQuery)){
                    echo "<option value='".$row['cat_id']."'>".$row['cat_name']."</option>";
                  }
                }
                

            echo '</select>';
          ?>
    </div>
    <div class=" form-group">
        <label for="exampleInputEmail1">Ảnh Cũ</label><br>
        <img src="upload/products/<?php echo $pro_image; ?>" alt="" width="300">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Ảnh Sản phẩm</label>
        <span></span>
        <input type="file" id="pro_image" name="pro_image">
    </div>

   	<div class="form-group">
        <label for="exampleInputEmail1">Giá Bán</label>
        <span></span>
        <input type="text" class="form-control" id="price" name="price" value="<?php echo $price; ?>" placeholder="Giá Bán" required="required">
    </div>
	
	<div class="form-group">
        <label for="exampleInputEmail1">saleoff ( % )</label>
        <input type="text" class="form-control" id="pro_name" name="saleoff" value="<?php echo $saleoff;?>" placeholder="Sale off" required="required"> 
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Giới Thiệu Sản Phẩm</label>
        <span></span>
        <textarea name="description" id="description" cols="30" rows="5" class="form-control"><?php echo $description; ?></textarea>       
    </div>
	
	<div class="checkbox">
        <label>
            <input <?php if($status == 1) echo 'checked';?> type="checkbox" name="status" id="status" value="<?php echo $status;?>"> Hiện
        </label>
    </div>

    <button type="submit" class="btn btn-default" name="edit">Sửa</button>
</form> 