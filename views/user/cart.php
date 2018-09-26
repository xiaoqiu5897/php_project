<?php 
require_once('homepage_layouts/header.php');
?>

<section class="section-slide">
	<div class="wrap-slick1">
		<!-- breadcrumb -->
		<div class="container">
			<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
				<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
					<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
				</a>

				<span class="stext-109 cl4">
				</span>
			</div>
		</div>


		<!-- Shoping Cart -->
		<form class="bg0 p-t-75 p-b-85">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50 row">
						<div class="m-l-25 m-r--38 m-lr-0-xl">
							<div class="wrap-table-shopping-cart">
								<table class="table-shopping-cart"  style="min-width: 600px!important">
									<tr class="table_head">
										<th class="column-1" style="width: 100px">Tên sản phẩm</th>
										<th class="column-2"></th>
										<th class="column-3">Giá</th>
										<th class="column-4">Số lượng</th>
										<th class="column-5">Thành tiền</th>
									</tr>
									<?php $tongtien = 0;
									if (isset($_SESSION['user_cart'])) {
										foreach ($product as $row){
											$tongtien += $row['GIA_BAN']*$row['SO_LUONG'];
											?>
											<tr class="table_row">
												<td class="column-1">
													<div class="how-itemcart1">
														<img src="uploads/<?= $row['ANH_SP'] ?>" alt="IMG">
													</div>
												</td>
												<td class="column-2"><?= $row['TEN_SP'] ?></td>
												<td class="column-3"><?= number_format($row['GIA_BAN']) ?> </td>
												<td class="column-4">
													<div class="wrap-num-product flex-w m-l-auto m-r-0">
														<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
															<i class="fs-16 zmdi zmdi-minus"></i>
														</div>

														<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="<?= $row['SO_LUONG'] ?>">

														<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
															<i class="fs-16 zmdi zmdi-plus"></i>
														</div>
													</div>
												</td>
												<td class="column-5"><?=number_format( $row['GIA_BAN']*$row['SO_LUONG'] )?></td>
											</tr>
										<?php }} ?>
									</table>
								</div>

								<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
									<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
										Cập nhật
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
							<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
								<h4 class="mtext-109 cl2 p-b-30">
									Tổng hóa đơn
								</h4>

								<div class="flex-w flex-t bor12 p-b-13">
									<div class="size-208">
										<span class="stext-110 cl2">
											Tổng:
										</span>
									</div>

									<div class="size-209">
										<span class="mtext-110 cl2">
											<?= number_format($tongtien) ?> VNĐ
										</span>
									</div>
								</div>

								<?php if (isset($_SESSION['user'])) { ?>
									<div class="flex-w flex-t bor12 p-t-15 p-b-30">
										<div>
											<label>Tên khách hàng: <?= $_SESSION['user']['TEN_KH'] ?></label>
											<label>Địa chỉ:  <?= $_SESSION['user']['DIA_CHI'] ?></label><br>
											<label>Số điện thoại:  <?= $_SESSION['user']['SDT'] ?></label>
										</div>
									</div>
								<?php } ?>

								<!-- <div class="flex-w flex-t p-t-27 p-b-33">
									<div class="size-208">
										<span class="mtext-101 cl2">
											Tổng
										</span>
									</div>

									<div class="size-209 p-t-1">
										<span class="mtext-110 cl2">
											<?= number_format($tongtien) ?> VNĐ
										</span>
									</div>
								</div> -->

								<a class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer payment">
									Hoàn tất đặt hàng
								</a>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>

	<script type="text/javascript">
		$(document).ready(function () {
			$('.payment').click(function () {
				$.ajax({  
					url:"?mod=user&act=payment",  
					method:"get",   
					success:function(){
						swal({
							title: "Thành công!",
							text: "Bạn đã đặt hàng thành công!",
							icon: "success",
							button: "OK",
						})
						.then((a) => {
							if (a) {
								window.location.href = "?mod=user&act=cart"
							}
						});
					}  
				}); 
			})
		})
	</script>

	<?php 
	require_once('homepage_layouts/footer.php');
	?>