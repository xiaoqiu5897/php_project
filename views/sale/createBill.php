<?php 

include('layouts/header.php');
?>

<!-- Main content -->

<!-- /.content -->
<section class="content-wrapper">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Zent Closet/Bán hàng</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
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
									<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" style="width: 200.4px;">Mã nhân viên</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 258px;">Tên nhân viên</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 230px;">Email</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 171.6px;">Số điện thoại</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 122.8px;">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data as $row) { ?>
									<tr>
										<td><?= $row['MA_KH'] ?></td>
										<td><?= $row['TEN_KH'] ?></td>
										<td><?= $row['EMAIL'] ?></td>
										<td><?= $row['SDT'] ?></td>
										<td>
											<a href="index.php?mod=sale&act=purchase&MA_KH=<?= $row['MA_KH'] ?>" class="btn btn-info">Tạo hóa đơn</a>
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
		</div>
		<!-- /.card-body -->
	</div>
</section>
<?php 
include('layouts/footer.php');
?>


