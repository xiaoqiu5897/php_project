
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
					<h1 class="card-title">Zent Closet/Danh sách nhân viên</h1>
				</div>
				<!-- /.card-header --> 
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Mã nhân viên</th>
								<th>Tên nhân viên</th>
								<th>Email</th>
								<th>Số điện thoại</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data as $row) { ?>
								<tr>
									<td><?= $row['MA_NV'] ?></td>
									<td><?= $row['TEN_NV'] ?></td>
									<td><?= $row['EMAIL'] ?></td>
									<td><?= $row['SDT'] ?></td>
									<td>
										<a href="index.php?mod=employee&act=detail&MA_NV=<?= $row['MA_NV'] ?>" class="btn btn-info">Xem</a>
										<a href="update.php?MA_NV=<?= $row['MA_NV'] ?>" class="btn btn-warning">Sửa</a>
										<!-- Button trigger modal -->
										<a class="btn btn-secondary" data-url="index.php?mod=employee&act=delete&MA_NV=<?= $row['MA_NV'] ?>" data-id="<?= $row['MA_NV'] ?>">Xóa</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg"  style="margin-left: 500px; margin-top: 20px;">Thêm</button>
					<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
						<div class="modal-dialog modal-lg">
							<div class="modal-content"  style="padding: 20px 20px 20px;">
								<h1>ZENTGROUP - PHP - Thêm nhân viên</h1>
								<form action="" method="POST">
									<div class="form-group">
										<label for="exampleInputEmail1">Mã nhân viên <span>*</span></label>
										<input name="MA_NV" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập mã nhân viên">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Họ và tên <span>*</span></label>
										<input name="TEN_NV" type="text" class="form-control" id="exampleInputPassword1" place<<holder="Nhập họ tên">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Số điện thoại <span>*</span></label>
										<input name="SDT" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập số điện thoại">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Email <span>*</span></label>

										<input name="EMAIL" type="email" class="form-control" id="exampleInputPassword1" placeholder="Nhập vào email">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Mật khẩu <span>*</span></label>
										<input name="NHAN_VIEN" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
									</div>
									<?php if (isset($_COOKIE['msg'])) { ?>
										<p>* Không được phép để trống</p>
									<?php } ?>
									<button name="save" type="submit" class="btn btn-secondary">Lưu thông tin</button>
								</form>
							</div>
						</div>
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