<?php 
include('layouts/header.php');
?>

<!-- Main content -->
<section class="content-wrapper">
	<?php  if (isset($_COOKIE['add_msg'])) { ?>
		<script type="text/javascript">
			toastr["success"]("Thêm vào danh sách nhân viên thành công ^^ ")
		</script>
	<?php } ?>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h1 class="card-title" style="color: #ff0000;">Danh sách sản phẩm</h1>
				</div>
				<!-- /.card-header --> 
				<div class="card-body row">
					<h1 class="col-12" align="center" style="margin-bottom: 70px;">Thông tin chi tiết sản phẩm</h1>
					<!-- <div class="col-5">
						<img style="width: 100%;" src="uploads/<?= $row['ANH_SP'] ?>">
					</div> -->
					<div class="col-4">
						<h4>Mã khách hàng: </h4>
						<h4>Tên khách hàng: </h4>
						<h4>Email: </h4>
						<h4>Số điện thoại: </h4>
						<h4>Địa chỉ: </h4>
					</div>
					<div class="col-8">
						<h4><?= $row['MA_KH'] ?></h4>
						<h4><?= $row['TEN_KH'] ?></h4>
						<h4><?= $row['EMAIL'] ?></h4>
						<h4><?= $row['SDT'] ?></h4>
						<h4><?= $row['DIA_CHI'] ?></h4>
					</div>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->

<?php 
include('layouts/footer.php');
?>