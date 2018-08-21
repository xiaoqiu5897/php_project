
<?php 
include('layouts/header.php');
?>

<!-- Main content -->
<section class="content-wrapper">
	<h1>ZENTGROUP - PHP - Thêm sản phẩm</h1>
	<form action="index.php?mod=product&act=store" method="POST" enctype="multipart/form-data" >
		<div class="form-group">
			<label for="exampleInputEmail1">Mã sản phẩm <span>*</span></label>
			<input name="MA_SP" type="text" class="form-control" id="exampleInputEmail1" placeholder="Mã sản phẩm" required>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Tên sản phẩm <span>*</span></label>
			<input name="TEN_SP" type="text" class="form-control" id="exampleInputPassword1" placeholder="Tên sản phẩm" required>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Số lượng <span>*</span></label>
			<input name="SO_LUONG" type="text" class="form-control" id="exampleInputPassword1" placeholder="Số lượng" required>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Gía nhập <span>*</span></label>
			<input name="GIA_NHAP" type="text" class="form-control" id="exampleInputPassword1" placeholder="Gía nhập" required>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Gía bán <span>*</span></label>
			<input name="GIA_BAN" type="text" class="form-control" id="exampleInputPassword1" placeholder="Gía bán" required>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Ảnh <span>*</span></label>
			<input name="ANH_SP" type="file" class="form-control" id="exampleInputPassword1" placeholder="Gía bán" required>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Loại sản phẩm 1 <span>*</span></label>
			<input name="MA_LOAI_SP" class="form-control" id="exampleInputPassword1" placeholder="" required>
			<!-- <input name="MA_LOAI_SP" type="text" class="form-control" id="exampleInputPassword1" placeholder="Loại sản phẩm"> -->
		</div>
		<div class="form-group">
			<button name="save"  type="submit" class="btn btn-secondary">Lưu thông tin</button>
		</div>
		
	</form>
</section>
<!-- /.content -->

<?php 
include('layouts/footer.php');
?>