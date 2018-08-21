
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
								<th>Mã sản phẩm</th>
								<th>Tên sản phẩm</th>
								<th>Số lượng</th>
								<th>Gía bán</th>
								<th>Thành tiền</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($bill as $row) { ?>
								<tr>
									<td><?= $row['MA_HD'] ?></td>
									<td><?= $row['MA_SP'] ?></td>
									<td><?= $row['TEN_SP'] ?></td>
									<td><?= $row['SO_LUONG'] ?></td>
									<td><?= $row['GIA_BAN'] ?></td>
									<td><?= $row['THANH_TIEN'] ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin-left: 500px;margin-top: 20px;">Thêm</button>
					<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
						<div class="modal-dialog modal-lg">
							<div class="modal-content"  style="padding: 20px 20px 20px;">
								<h1>ZENTGROUP - PHP - Thêm khách hàng</h1>
								<form action="add_process.php" method="POST">
									<div class="form-group">
										<label for="exampleInputEmail1">Mã khách hàng <span>*</span></label>
										<input name="id" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập mã khách hàng">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Họ và tên <span>*</span></label>
										<input name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập họ tên">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Số điện thoại <span>*</span></label>
										<input name="phonenum" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập số điện thoại">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Email <span>*</span></label>

										<input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Nhập email">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Địa chỉ <span>*</span></label>
										<input name="address" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập địa chỉ">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Mật khẩu <span>*</span></label>
										<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
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