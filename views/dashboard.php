<?php 
require_once('layouts/header.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard v2</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3><?= $product_number['COUNT(*)'] ?></h3>

							<p>Sản phẩm</p>
						</div>
						<div class="icon">
							<i class="ion ion-bag"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3><?= $bill_number['COUNT(*)'] ?></h3>

							<p>Hóa đơn</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
						<div class="inner">
							<h3><?= $employee_number['COUNT(*)'] ?></h3>

							<p>Nhân viên</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-danger">
						<div class="inner">
							<h3><?= $customer_number['COUNT(*)'] ?></h3>

							<p>Khách hàng</p>
						</div>
						<div class="icon">
							<i class="ion ion-pie-graph"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
			</div>
			<!-- /.row -->
			<!-- Main row -->
			<div class="row">
				<!-- Left col -->
				<section class="col-lg-7 connectedSortable">
					<!-- Custom tabs (Charts with tabs)-->
					<div class="card">
						<div class="card-header d-flex p-0">
							<h3 class="card-title p-3">
								<i class="fa fa-pie-chart mr-1"></i>
								Sales
							</h3>
							<ul class="nav nav-pills ml-auto p-2">
								<li class="nav-item">
									<a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
								</li>
							</ul>
						</div><!-- /.card-header -->
						<div class="card-body">
							<div class="tab-content p-0">
								<!-- Morris chart - Sales -->
								<div class="chart tab-pane active" id="revenue-chart"
								style="position: relative; height: 300px;"></div>
								<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
							</div>
						</div><!-- /.card-body -->
					</div>
					<!-- /.card -->
				</section>
				<!-- /.Left col -->
				<!-- right col (We are only adding the ID to make the widgets sortable)-->
				<section class="col-lg-5 connectedSortable">

					<!-- Map card -->
					<div class="card bg-primary-gradient">
						<div class="card-header no-border">
							<h3 class="card-title">
								<i class="fa fa-map-marker mr-1"></i>
								Visitors
							</h3>
							<!-- card tools -->
							<div class="card-tools">
								<button type="button"
								class="btn btn-primary btn-sm daterange"
								data-toggle="tooltip"
								title="Date range">
								<i class="fa fa-calendar"></i>
							</button>
							<button type="button"
							class="btn btn-primary btn-sm"
							data-widget="collapse"
							data-toggle="tooltip"
							title="Collapse">
							<i class="fa fa-minus"></i>
						</button>
					</div>
					<!-- /.card-tools -->
				</div>
				<!-- /.card -->

			</section>
			<!-- right col -->
		</div>
		<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>


<?php 
require_once('layouts/footer.php');
?>