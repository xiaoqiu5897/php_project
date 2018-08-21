<?php 

include('layouts/header.php');
?>
<?php 
// session_destroy();
//B1: Lấy ra danh sách sản phẩm người dùng chọn
$products = array();
if (isset($_SESSION['cart'])) {
	$products = $_SESSION['cart'];
	// echo "<pre>";
	// print_r($products);
	// echo "</pre>";
	// die();
}

//B2: In danh sách sản phẩm

?>
<!-- Main content -->

<!-- /.content -->
<section class="content-wrapper" >
	<div class="card" >
		<div class="card-header">
			<h3 class="card-title">Zent Closet/Bán hàng</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body row">
			<div id="example1_wrapper" class="col-5 dataTables_wrapper container-fluid dt-bootstrap4" >
				<div class="row">
					<div class="col-12">
						<h2>Danh sách sản phẩm</h2>
					</div>
					<div class="col-9">
						<div class="dataTables_length" id="example1_length">
							<label>Hiển thị
								<select name="example1_length" aria-controls="example1" class="form-control form-control-sm">
									<option value="10">10</option><option value="25">25</option>
									<option value="50">50</option>
									<option value="100">100</option>
								</select>
							</label>
						</div>
					</div>
					<div class="col-3">
						<div id="example1_filter" class="dataTables_filter">
							<label>Tìm kiếm:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
						</div>
					</div>
				</div>
				<!-- <div style="height: 50px; width: 100%; background-image: url('img/star.jpg'); background-repeat: repeat-x;"></div> -->
				<div class="row">
					<div class="col-sm-12">
						<table id="example1" class="" role="grid" aria-describedby="example1_info" style="border: 1px solid #bfbfbf">
							<thead>
								<tr role="row" style=" border-top: 3px solid #b50000;border-bottom: 3px solid #b50000;" align="center">
									<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" style="width: 200.4px;  padding-top: 10px; padding-bottom: 10px">Mã sản phẩm</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 258px;">Tên sản phẩm</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 230px;">Đơn giá</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 122.8px;">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($product as $row) { ?>
									<tr align="center" style="border-top: 1px solid #bfbfbf;">
										<td style=" padding-top: 15px; padding-bottom: 15px"><?= $row['MA_SP'] ?></td>
										<td><?= $row['TEN_SP'] ?></td>
										<td align="right"><?= number_format($row['GIA_BAN']) ?></td>
										<td>
											<a href="index.php?mod=sale&act=add2cart&MA_SP=<?= $row['MA_SP'] ?>" style="background-color: #b50000!important; border: none;" class="btn btn-info"><i class="fa fa-cart-plus"></i></a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-5">
						<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
					</div>
					<div class="col-sm-12 col-md-7">
						<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
							<ul class="pagination">
								<li class="paginate_button page-item previous disabled" id="example1_previous">
									<a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
								</li>
								<li class="paginate_button page-item active">
									<a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
								</li>
								<li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a>
								</li>
								<li class="paginate_button page-item ">
									<a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a>
								</li>
								<li class="paginate_button page-item ">
									<a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a>
								</li>
								<li class="paginate_button page-item ">
									<a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a>
								</li>
								<li class="paginate_button page-item ">
									<a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a>
								</li>
								<li class="paginate_button page-item next" id="example1_next">
									<a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-7" >
				<h2>Danh sách sản phẩm khách chọn</h2>
				<h4 style="margin-top: 65px;">HÓA ĐƠN BÁN HÀNG</h4>
				<div>
					<p>Mã KH: <?= $customer['MA_KH'] ?></p>
					<p>Họ tên: <?= $customer['TEN_KH'] ?></p>
				</div>
				<div>
					<p>Số ĐT: <?= $customer['SDT'] ?></p>
					<p>Địa chỉ: <?= $customer['DIA_CHI'] ?></p>
				</div>
				<table id="example1" class="table table-bordered table-striped data-list">
					<thead>
						<tr>
							<th>Mã sản phẩm</th>
							<th>Tên sản phẩm</th>
							<th>Số lượng</th>
							<th>Đơn giá</th>
							<th>Thành tiền</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$tongtien = 0;
						if (isset($_SESSION['cart'])) {
							foreach ($products as $product) { 
								$tongtien += $product['SO_LUONG']*$product['GIA_BAN'];
								?>
								<tr>
									<td><?= $product['MA_SP'] ?></td>
									<td><?= $product['TEN_SP'] ?></td>
									<td>
										<?= $product['SO_LUONG'] ?>
										<a href="index.php?mod=sale&act=add2cart&MA_SP=<?= $product['MA_SP'] ?>" class="btn btn-primary">+</a>
										<a href="index.php?mod=sale&act=remove_product&MA_SP=<?= $product['MA_SP'] ?>" class="btn btn-danger">-</a>
									</td>
									<td style="text-align: right!important"><?= $product['GIA_BAN'] ?></td>
									<td><?= $product['SO_LUONG']*$product['GIA_BAN'] ?></td>
								</tr>
							<?php } } ?>
						</tbody>
					</table>
				</h3>Tổng tiền: <?= $tongtien ?></h3><br>
				<a href="?mod=sale&act=payment" class="btn btn-success">Thanh toán</a>
				<a href="?mod=sale&act=cancel" class="btn btn-primary">Hủy hóa đơn</a>
			</div>
		</div>
		<!-- /.card-body -->
	</div>
</section>
<?php 
include('layouts/footer.php');
?>


