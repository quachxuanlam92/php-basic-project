<?php
  if(isset($_GET['cat_id'])){
    $cat_id = $_GET['cat_id'];
    $sql_select = "SELECT * FROM tbl_category WHERE cat_id = $cat_id";
    $selectQuery = mysqli_query($conn,$sql_select);
    if($num = mysqli_num_rows($selectQuery) > 0){
      $row = mysqli_fetch_assoc($selectQuery);
      $name = $row['cat_name'];
      $logo = $row['logo'];
      $status = $row['status'];
    }

    if(isset($_POST['save']) && isset($_POST['cat_name'])){      
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




        $sql_update = "UPDATE  tbl_category
           SET   `cat_name` =  '$cat_name',
              logo =  '$file_name',              
              status =  '$cat_status'
          WHERE  cat_id = $cat_id";
        $editQuery = mysqli_query($conn, $sql_update);
        header("Location: index.php?view=category&action=listcategory");
    }
  }

  
  
    
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
    <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Tên danh mục" value="<?php echo $name; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">logo</label>
    <br>
    <img width="80" src="upload/category/<?php echo $logo; ?>" />
    <input type="file" id="logo" name="logo">
  </div>
  <div class="checkbox">
    <label>
      <input <?php if($status == 1) echo 'checked';?> type="checkbox" name="status" id="status" value="<?php echo $status; ?>"> Ẩn/Hiện
    </label>
  </div>
    <input type="hidden" name="module" value="sua"/>
    <input type="submit" class="btn btn-default" name="save" value="Sửa">
</form>
