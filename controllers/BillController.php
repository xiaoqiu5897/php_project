<?php 
require_once ('models/bill.php');
require_once ('models/customer.php');
require_once ('models/product.php');
require_once ('models/employee.php');
require_once ('models/billDetail.php');
/**
 * 
 */
class BillController
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

	function list()
	{
		$bill = $this->bill->get_infor();
		require_once('views/bill/list.php');
	}

	function detail()
	{
		$bill = array();
		$MA_HD = $_GET['MA_HD'];
		$bill = $this->bill_detail->get_infor($MA_HD);
		require_once('views/bill/detail.php');
	}

}
?>