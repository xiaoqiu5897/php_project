<?php 
include('layouts/header.php');
?>

<!-- Main content -->
<section class="content-wrapper">
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
</section>
<!-- /.content -->

<?php 
include('layouts/footer.php');
?>