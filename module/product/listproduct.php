<?php
	$sql_list_product = "SELECT * FROM tbl_product";
	$list_product_query = mysqli_query($conn,$sql_list_product);
?>

<ol class="breadcrumb">
	<li><a href="index.php">Trang chủ</a></li>
	<li><a href="index.php?view=product&action=listproduct">Quản lý sản phẩm</a></li>
	<li class="active">Danh sách sản phẩm</li>
</ol>

<h3>Danh sách danh mục</h3>
<?php
	echo "<table class='table table-bordered table-hover' id='list'>
	<thead>
		<tr>
			<th>ID</th>
			<th>Tên sản phẩm</th>
			<th>Ảnh sản phẩm</th>
			<th>Tên danh mục</th>
			<th>Giá</th>
			<th>saleoff</th>
			<th>Mô tả</th>
			<th>Trạng thái</th>
			<th>Thực hiện</th>
		</tr>
	</thead>
	<tbody>";
	if($num = mysqli_num_rows($list_product_query) > 0){
		while ($row = mysqli_fetch_assoc($list_product_query)) {
			$cat_id = $row['cat_id'];
			$pro_id = $row['pro_id'];

			echo "<tr>";
				echo "<td>".$row['pro_id']."</td>";
				echo "<td>".$row['pro_name']."</td>";
				echo "<td>"."<img src='upload/products/".$row['pro_image']."' alt='' />"."</td>";
				echo "<td>";
					$sql = "SELECT cat_name FROM tbl_category WHERE cat_id = $cat_id";
					$cat_query = mysqli_query($conn,$sql);
					if($num_cat = mysqli_num_rows($cat_query) > 0){
						while ($row_cat = mysqli_fetch_assoc($cat_query)) {
							echo $row_cat['cat_name'];
						}
					}
				echo "</td>";
				echo "<td>".$row['price']." VND</td>";
				echo "<td>".$row['saleoff']." %</td>";
				echo "<td>".$row['description']."</td>";
				echo "<td>";
					if($row['status'] == 1){
						echo "Còn hàng";
					}else{
						echo "Hết hàng";
					}
				echo "</td>";	
				echo "<td>
			 	<a href='index.php?view=product&action=editproduct&pro_id=$pro_id'><span class='glyphicon glyphicon-pencil'></span> Sửa</a>
				 <a href='index.php?view=product&action=deleteproduct&pro_id=$pro_id' onclick='deleteItem()'><span class='glyphicon glyphicon-trash'></span> Xóa</a>
		     	</td>";
			echo "</tr>";
		}
	}	


	echo "</tbody></table>";
?>
<script>
	function deleteItem(){
		del = confirm("Bạn có muốn xóa bản ghi này không ?");
		//kiêm tra xem chọn yes thì gọi đến xóa
	}
</script>