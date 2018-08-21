<?php 
include('layouts/header.php');
?>

<!-- Main content -->
<section class="content-wrapper">
	<div  style="padding: 50px 50px 50px">
		<h1>ZENTGROUP - PHP - Thêm sản phẩm</h1>
		<form action="update_process.php" method="POST">
			<div class="form-group">
				<label for="exampleInputEmail1">Mã khách hàng <span>*</span></label>
				<input name="id" type="text" class="form-control" id="exampleInputEmail1" placeholder="<?= row['MA_KH'] ?>" readonly>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Họ và tên <span>*</span></label>
				<input name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="<?= row['TEN_KH'] ?>">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Số điện thoại <span>*</span></label>
				<input name="phonenum" type="text" class="form-control" id="exampleInputPassword1" placeholder="<?= row['SDT'] ?>">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Email <span>*</span></label>

				<input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="<?= row['EMAIL'] ?>">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Địa chỉ <span>*</span></label>
				<input name="address" type="text" class="form-control" id="exampleInputPassword1" placeholder="<?= row['DIA_CHI'] ?>">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Mật khẩu <span>*</span></label>
				<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="<?= row['PASS'] ?>">
			</div>
			<button name="save" type="submit" class="btn btn-secondary">Lưu thông tin</button>
		</form>
	</div>
</section>
<!-- /.content -->

<?php 
include('layouts/footer.php');
?>