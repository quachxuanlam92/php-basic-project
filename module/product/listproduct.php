<ol class="breadcrumb">
	<li><a href="index.php">Trang chủ</a></li>
	<li><a href="index.php?view=product&action=listproduct">Quản lý sản phẩm</a></li>
	<li class="active">Danh sách sản phẩm</li>
</ol>

<h3>Danh sách danh mục</h3>
<table class="table table-bordered table-hover" id="list">
	<thead>
		<tr>
			<th>#</th>
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
	<tbody>
		<tr>
			<td>1</td>
			<td>asus k43</td>
			<td><img src="upload/products/asusk43.jpg" alt='' /></td>
			<td>Asus</td>
			<td>5000 vnd</td>
			<td>saleoff</td>
			<td>description</td>
			<td>Hiện</td>
		
			<td>
			 	<a href='index.php?view=product&action=editproduct&pro_id=1'><span class='glyphicon glyphicon-pencil'></span> Sửa</a>
				 <a href='index.php?view=product&action=deleteproduct&pro_id=1' onclick='deleteItem()'><span class='glyphicon glyphicon-trash'></span> Xóa</a>
		     </td>";
		</tr>
				
		
	</tbody>
</table>
<script>
	function deleteItem(){
		del = confirm("Bạn có muốn xóa bản ghi này không ?");
		//kiêm tra xem chọn yes thì gọi đến xóa
	}
</script>