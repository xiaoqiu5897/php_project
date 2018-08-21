
<?php 
include('layouts/header.php');
?>

<!-- Main content -->
<section class="content-wrapper">
	<div  style="padding: 50px 50px 50px">
		<h1>Zent Closet - Sửa sản phẩm</h1>
		<form action="index.php?mod=product&act=update&MA_SP=<?= $row['MA_SP'] ?>" method="POST">
			<div class="form-group">
				<label for="exampleInputEmail1">Mã sản phẩm <span>*</span></label>
				<input name="MA_SP" type="text" value="<?= $row['MA_SP'] ?>"  class="form-control" id="exampleInputEmail1" placeholder="Nhập mã nhân viên" readonly>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Tên sản phẩm <span>*</span></label>
				<input name="TEN_SP" type="text" value="<?= $row['TEN_SP'] ?>"  class="form-control" id="exampleInputPassword1" placeholder="Nhập họ tên">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Số lượng <span>*</span></label>
				<input name="SO_LUONG" type="text" value="<?= $row['SO_LUONG'] ?>" class="form-control" id="exampleInputPassword1" placeholder="Nhập số điện thoại">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Gía nhập <span>*</span></label>

				<input name="GIA_NHAP" type="text" value="<?= $row['GIA_NHAP'] ?>" class="form-control" id="exampleInputPassword1" placeholder="Nhập vào email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Gía bán <span>*</span></label>
				<input name="GIA_BAN" type="text" value="<?= $row['GIA_BAN']?>" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Loại sản phẩm <span>*</span></label>
				<select class="form-control" name="MA_LOAI_SP">
					<?php foreach ($product_types as $types) { ?>
						<option value="<?= $types['MA_LOAI_SP'] ?>"

							<?php if ($row['MA_LOAI_SP'] == $types['MA_LOAI_SP']) { echo "selected";} ?>><?= $types['TEN_LOAI'] ?>

						</option>
					<?php } ?>

				</select>
			</div>
			<button name="save" type="submit" class="btn btn-secondary">Lưu thông tin</button>
		</form>
	</div>
</section>
<!-- /.content -->

<?php 
include('layouts/footer.php');
?>