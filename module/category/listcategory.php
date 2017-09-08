<?php
	// $sql = "SELECT * FROM `tbl_category`";
	// $result = mysqli_query($conn, $sql);
	
?>
<ol class="breadcrumb">
  <li><a href="index.php">Trang chủ</a></li>
  <li><a href="index.php?view=category&action=listcategory">Quản lý danh mục</a></li>
  <li class="active">Danh sách danh mục</li>
</ol>
<h3>Danh sách danh mục</h3>
<table class="table table-bordered table-hover" id="list">
	<thead>
		<tr>
			<th>Cat Id</th>
			<th>Tên danh mục</th>
			<th>Logo</th>
			<th>Trạng thái</th>
			<th>Thực hiện</th>
		</tr>
	</thead>
	<tbody>
    	
			
                    
                    <tr>
                        <td>1</td>
                        <td>cat name</td>
                        <td>
                            <img src="upload/category/asus.png" alt="" />
                        </td>
                        <td>Còn Hàng</td>
                        <td>
                            <a href="index.php?view=category&action=editCategory&cat_id=1"><span class="glyphicon glyphicon-pencil"></span> Sửa</a>
                            <a href="index.php?view=category&action=deleteCategory&cat_id=1"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                        </td>
                    </tr>
                   
	 
</tbody>
</table>

<script>
	function deleteItem(){
		del = confirm("Bạn có muốn xóa bản ghi này không ?");
		//kiêm tra xem chọn yes thì gọi đến xóa
	}
</script>