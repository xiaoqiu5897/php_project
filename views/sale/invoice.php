<?php 

include('layouts/header.php');
?>
<?php 
// session_destroy();
//B1: Lấy ra danh sách sản phẩm người dùng chọn
$products = array();
$products = $_SESSION['cart'];

//B2: In danh sách sản phẩm

?>
<!-- Main content -->

<!-- /.content -->
<section class="content-wrapper">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Zent Closet/Bán hàng</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body row">
			<div id="example1_wrapper" class="col-6 dataTables_wrapper container-fluid dt-bootstrap4">
				<div class="row">
					<div class="col-12">
						<h1>Danh sách sản phẩm</h1>
					</div>
					<div class="col-9">
						<div class="dataTables_length" id="example1_length">
							<label>Show entries
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
							<label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
							<thead>
								<tr role="row">
									<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" style="width: 200.4px;">Mã sản phẩm</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 258px;">Tên sản phẩm</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 230px;">Đơn giá</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 122.8px;">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($product as $row) { ?>
									<tr>
										<td><?= $row['MA_SP'] ?></td>
										<td><?= $row['TEN_SP'] ?></td>
										<td align="right"><?= number_format($row['GIA_BAN']) ?></td>
										<td>
											<a href="index.php?mod=sale&act=add2cart&MA_SP=<?= $row['MA_SP'] ?>" class="btn btn-info"><i class="fa fa-cart-plus"></i></a>
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
			<div class="col-6">
				<h3>Danh sách sản phẩm khách chọn</h3>
				<h1>HÓA ĐƠN BÁN HÀNG</h1>
				<h3>Mã KH: <?= $customer['MA_KH'] ?></h3>
				<h3>Họ tên: <?= $customer['TEN_KH'] ?></h3>
				<h3>Số ĐT: <?= $customer['SDT'] ?></h3>
				<h3>Địa chỉ: <?= $customer['DIA_CHI'] ?></h3>
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
						<?php } ?>
					</tbody>
				</table>
			</h3>Tổng tiền: <?= $tongtien ?></h3>
			<a href="?mod=sale&act=payment" class="btn btn-success">Thanh toán</a>
		</div>
	</div>
	<!-- /.card-body -->
</div>
</section>
<?php 
include('layouts/footer.php');
?>


