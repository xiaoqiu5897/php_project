<?php 
require_once ('models/customer.php');
require_once ('models/product.php');
require_once ('models/employee.php');
require_once ('models/bill.php');
require_once ('models/billDetail.php');
/**
 * 
 */
class SaleController
{
	var $model_Customer;
	var $model_Product;
	var $model_Employee;
	var $bill;
	var $bill_detail;
	
	function __construct()
	{
		$this->model_Customer = new Customer();
		$this->model_Product = new Product();
		$this->model_Employee = new Employee();
		$this->bill = new Bill();
		$this->bill_detail = new BillDetail();
	}

	function createBill()
	{
		$data = $this->model_Customer->All();
		require_once('views/sale/createBill.php');
	}

	function purchase()
	{
		if (isset($_GET['MA_KH'])) {
			$MA_KH = $_GET['MA_KH'];
			$data = $this->model_Customer->find($MA_KH);
			$_SESSION['customer'] = $data;
			header('Location: index.php?mod=sale&act=sale');
		}else {
			header('Location: index.php?mod=sale&act=createBill');
		}
	}

	function sale()
	{
		if (isset($_SESSION['customer'])) {
			$product = $this->model_Product->All();
			$customer = $_SESSION['customer'];
			require_once('views/sale/sale.php');
		}
	}

	function add2cart()
	{
		$MA_SP = $_GET['MA_SP'];
		if (isset($_SESSION['cart'][$MA_SP])) {
			$_SESSION['cart'][$MA_SP]['SO_LUONG'] += 1;
		}
		else{
			$product = $this->model_Product->find($MA_SP);
			$product['SO_LUONG'] = 1;
			$_SESSION['cart'][$MA_SP] = $product;
		}
		header('Location: index.php?mod=sale&act=sale');
	}

	function remove_product()
	{
		$MA_SP = $_GET['MA_SP'];
		if ($_SESSION['cart'][$MA_SP]['SO_LUONG'] == 1) {
			unset($_SESSION['cart'][$MA_SP]);
		}
		else{
			$_SESSION['cart'][$MA_SP]['SO_LUONG'] -= 1;
		}
		header('Location: ?mod=sale&act=sale');
	}

	function payment()
	{
		$MA_NV = $_SESSION['admin']['MA_NV'];

		$customer = $_SESSION['customer'];
		$cart = $_SESSION['cart'];

		$hoadon = array();
		$hoadon['MA_HD'] = $customer['MA_KH'].'_'.$MA_NV.'_'.time();
		$hoadon['MA_KH'] = $customer['MA_KH'];
		$hoadon['MANV'] = $MA_NV;
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

			$this->model_Product->reduceQuantity($prod['MA_SP'],$prod['SO_LUONG']);
		}

		$Update_bill['MA_HD'] = $hoadon['MA_HD'];
		$Update_bill['TONG_TIEN'] = $tongtien;
		$this->bill->update($Update_bill,$Update_bill['MA_HD']);

		unset($_SESSION['cart']);
		unset($_SESSION['customer']);

		header('Location: ?mod=sale&act=bill_detail&MA_HD='.$hoadon['MA_HD']);
	}

	function bill_detail()
	{
		$MA_HD = $_GET['MA_HD'];
		$bill = $this->bill->find($MA_HD);
		$bill_detail = $this->bill_detail->get_bill_detail($MA_HD);

		$customer = $this->model_Customer->find($bill['MA_KH']);
		$employee = $this->model_Employee->find($bill['MANV']);

		$data = array();

		foreach ($bill_detail as $row) {
			$product = $this->model_Product->find($row['MA_SP']);
			$data[] = $product;
		}
		require_once ('views/sale/bill_detail.php');

	}

	function cancel()
	{
		unset($_SESSION['cart']);
		unset($_SESSION['customer']);
		header('Location: ?mod=sale&act=createBill');
	}


}


?>
