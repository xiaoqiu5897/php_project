<?php 
require_once('models/product.php');
require_once('models/ProductType.php');
require_once ('models/bill.php');
require_once ('models/billDetail.php');
/**
 * 
 */
class UserController
{
	var $model_product;
	var $model_product_type;
	var $bill;
	var $bill_detail;
	
	function __construct()
	{
		$this->model_product = new Product();
		$this->model_product_type = new ProductType();
		$this->bill = new Bill();
		$this->bill_detail = new BillDetail();
	}

	function list()
	{
		$products = $this->model_product->All();
		$product_types = $this->model_product_type->All();
		require_once('views/user/list.php');
	}

	function add2cart()
	{
		$MA_SP = $_POST['MA_SP'];
		if (isset($_SESSION['user_cart'][$MA_SP])) {
			$_SESSION['user_cart'][$MA_SP]['SO_LUONG'] += 1;
		}
		else{
			$product = $this->model_product->find($MA_SP);
			$product['SO_LUONG'] = 1;
			$_SESSION['user_cart'][$MA_SP] = $product;
		}
		header('Location: ?mod=user&act=list');
	}

	function cart()
	{
		if (isset($_SESSION['user_cart'])) {
			$product = $_SESSION['user_cart'];
		}
		require_once('views/user/cart.php');
		require_once('homepage_layouts/header.php');
	}

	function detail()
	{
		if (isset($_POST["MA_SP"])) {
			$product_detail = $this->model_product->find($_POST["MA_SP"]);
			$output["ANH_SP"] = $product_detail["ANH_SP"];
			$output["MA_SP"] = $product_detail["MA_SP"];
			$output["TEN_SP"] = $product_detail["TEN_SP"];
			$output["GIA_BAN"] = $product_detail["GIA_BAN"];
			echo json_encode($output);
		}
	}

	public function payment()
	{
		$user = $_SESSION['user'];
		$cart = $_SESSION['user_cart'];

		$hoadon = array();
		$hoadon['MA_HD'] = $user['MA_KH'].'_'.'online'.'_'.time();
		$hoadon['MA_KH'] = $user['MA_KH'];
		$hoadon['MANV'] = 'online';
		$hoadon['TRANG_THAI'] = 1;
		$hoadon['NGAY_BAN'] = date('Y-m-d H:i:s');


		$this->bill->insert($hoadon);

		$tongtien = 0;
		foreach ($cart as $product) {
			$prod['MA_HD'] = $hoadon['MA_HD'];
			$prod['MA_SP'] = $product['MA_SP'];
			$prod['SO_LUONG'] = $product['SO_LUONG'];
			$prod['GIA_BAN'] = $product['GIA_BAN'];
			$prod['THANH_TIEN'] = $product['GIA_BAN']*$product['SO_LUONG'];
			$tongtien += $prod['THANH_TIEN'];

			$this->bill_detail->insert($prod);

			// $this->model_Product->reduceQuantity($prod['MA_SP'],$prod['SO_LUONG']);
		}

		$Update_bill['MA_HD'] = $hoadon['MA_HD'];
		$Update_bill['TONG_TIEN'] = $tongtien;
		$this->bill->update($Update_bill,$Update_bill['MA_HD']);

		unset($_SESSION['user_cart']);

		header('Location: ?mod=user&act=cart');
	}
}
?>