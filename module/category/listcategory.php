<?php
	$sql = "SELECT * FROM `tbl_category`";
	$result_listcat = mysqli_query($conn, $sql);

?>
<ol class="breadcrumb">
  <li><a href="index.php">Trang chủ</a></li>
  <li><a href="index.php?view=category&action=listcategory">Quản lý danh mục</a></li>
  <li class="active">Danh sách danh mục</li>
</ol>
<h3>Danh sách danh mục</h3>
	<?php
		if($num = mysqli_num_rows($result_listcat) > 0){
			echo "<table class='table table-bordered table-hover' id='list'>
					<thead>
						<tr>
							<th>Cat Id</th>
							<th>Tên danh mục</th>
							<th>Logo</th>
							<th>Trạng thái</th>
							<th>Thực hiện</th>
						</tr>
					</thead>
					<tbody>";
			while ($row = mysqli_fetch_assoc($result_listcat)) {
				$cat_id = $row['cat_id'];
				echo "<tr>";
					echo "<td>".$row['cat_id']."</td>";
					echo "<td>".$row['cat_name']."</td>";
					echo "<td>"."<img src='upload/category/".$row['logo']."' alt='' />"."</td>";
					echo "<td>";
						if($row['status'] == 1){
							echo "Còn hàng";
						}else{
							echo "Hết hàng";
						}
					echo "</td>";
					echo "<td><a href='index.php?view=category&action=editCategory&cat_id=$cat_id'><span class='glyphicon glyphicon-pencil'></span> Sửa</a>
	                <a href='index.php?view=category&action=deleteCategory&cat_id=1' onclick='deleteItem()'><span class='glyphicon glyphicon-trash'></span> Xóa</a></td>";
				echo "</tr>";
			}
		}
	?>
	

	        
	                   
		 
	</tbody>
	</table>

<script>
	function deleteItem(){
		del = confirm("Bạn có muốn xóa bản ghi này không ?");
		//kiêm tra xem chọn yes thì gọi đến xóa
	}
</script>