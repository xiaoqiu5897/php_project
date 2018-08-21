
<?php 
include('layouts/header.php');
?>

<?php  if (isset($_COOKIE['add_msg'])) { ?>
	<script type="text/javascript">
		toastr["success"]("Thêm vào danh sách khách hàng thành công ^^ ")
	</script>
<?php } ?>
<!-- Main content -->
<section class="content-wrapper">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h1 class="card-title" style="color: #ff0000;">Danh sách hóa đơn</h1>
				</div>
				<!-- /.card-header --> 
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Mã hóa đơn</th>
								<th>Tên khách hàng</th>
								<th>Tên nhân viên</th>
								<th>Ngày bán</th>
								<th>Tổng tiền</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($bill as $row) { ?>
								<tr>
									<td><?= $row['MA_HD'] ?></td>
									<td><?= $row['TEN_KH'] ?></td>
									<td><?= $row['TEN_NV'] ?></td>
									<td><?= $row['NGAY_BAN'] ?></td>
									<td><?= $row['TONG_TIEN'] ?></td>
									<td>
										<a href="?mod=bill&act=detail&MA_HD=<?= $row['MA_HD'] ?>" class="btn btn-info">Xem chi tiết</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
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