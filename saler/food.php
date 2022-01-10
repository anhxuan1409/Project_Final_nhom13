<?php
include("./header.php");
?>
<div class="container">
	<p class="lead btn btn-danger mt-5 mb-3 "><a href="add_food.php" class="text-decoration-none text-white">Thêm</a></p>


	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Mã</th>
				<th>Tên món</th>
				<th>Hình ảnh</th>
				<th>Loại</th>
				<th>Mô tả</th>
				<th>Giá bán</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM foods";
			$result = mysqli_query($conn, $sql);

			//bước 3 xử lý kết quả trả về
			if (mysqli_num_rows($result) > 0) {
				$i = 1;
				while ($row = mysqli_fetch_assoc($result)) {
			?>
					<tr>
						<td><?php echo $row['food_isbn']; ?></td>
						<td><?php echo $row['food_title']; ?></td>
						<td>
							<div>
								<img style="height: 35%;width: 50%;object-fit: cover; padding-bottom: 15px ;" src="../<?php echo $row['food_image']; ?>" alt="" class="img-fluid">
							</div>
						</td>
						<td><?php echo $row['food_Category']; ?></td>
						<td><?php echo $row['food_descr']; ?></td>
						<td><?php echo $row['food_price']; ?></td>
						<td><a href="edit.php?foodisbn=<?php echo $row['food_isbn']; ?>"><i class="fas fa-edit text-danger"></i></a></td>
						<td><a href="delete.php?foodisbn=<?php echo $row['food_isbn']; ?>"><i class="fas fa-trash text-danger"></i></a></td>

					</tr>
			<?php
					$i++;
				}
			}
			?>
		</tbody>
	</table>
</div>
<?php
if (isset($conn)) {
	mysqli_close($conn);
}
require_once "footer.php";
?>