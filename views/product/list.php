<?php 
include('layouts/header.php');
require_once ("controllers/UserController.php");
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
					<h1 class="card-title">Zent Closet/Danh sách sản phẩm</h1>
				</div>
				<!-- /.card-header --> 
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped data-list">
						<thead>
							<tr>
								<th>Mã sản phẩm</th>
								<th>Tên sản phẩm</th>
								<th>Số lượng</th>
								<th>Gía nhập</th>
								<th>Gía bán</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data as $row) { ?>
								<tr>
									<td><?= $row['MA_SP'] ?></td>
									<td><?= $row['TEN_SP'] ?></td>
									<td><?= $row['SO_LUONG'] ?></td>
									<td style="text-align: right!important"><?= number_format($row['GIA_NHAP']) ?></td>
									<td style="text-align: right!important"><?= number_format($row['GIA_BAN']) ?></td>
									<td>
										<a href="index.php?mod=product&act=detail&MA_SP=<?= $row['MA_SP'] ?>" class="btn btn-info">Xem</a>
										<a href="index.php?mod=product&act=edit&MA_SP=<?= $row['MA_SP'] ?>" class="btn btn-warning">Sửa</a>
										<!-- Button trigger modal -->
										<a class="btn btn-secondary" data-url="index.php?mod=product&act=delete&MA_SP=<?= $row['MA_SP'] ?>" data-id="<?= $row['MA_SP'] ?>">Xóa</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<button  type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg"  style="margin-left: 500px; margin-top: 20px;">Thêm</button>
					<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
						<div class="modal-dialog modal-lg">
							<div class="modal-content"  style="padding: 20px 20px 20px;">
								<h1>ZENTGROUP - PHP - Thêm sản phẩm</h1>
								<form action="" method="POST" enctype="multipart/form-data">
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
										<label for="exampleInputPassword1">Loại sản phẩm <span>*</span></label>
										<select name="MA_LOAI_SP">
											<?php foreach ($product_types as $value) { ?>
												<option value="<?= $value['MA_LOAI_SP'] ?>"><?= $value['TEN_LOAI'] ?></option>
											<?php } ?>
										</select>
									</div>
									<?php if (isset($_COOKIE['msg'])) { ?>
										<p>* Không được phép để trống</p>
									<?php } ?>
									<button name="save"  type="submit" class="btn btn-danger">Lưu thông tin</button>
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
