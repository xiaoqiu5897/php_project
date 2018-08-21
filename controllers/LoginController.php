<?php 
require_once('models/employee.php');
require_once('models/customer.php');
require_once('models/product.php');
require_once('models/bill.php');
/**
 * 
 */
class LoginController
{
	var $model;
	
	function __construct()
	{
		$this->model_admin = new Employee();
		$this->model_user = new Customer();
		$this->model_product = new Product();
		$this->model_bill = new Bill();
	}

	function callForm()
	{
		require_once ('views/login/login.php');
	}

	function isLogin()
	{
		$EMAIL = $_POST['EMAIL'];
		$MAT_KHAU = md5($_POST['MAT_KHAU']);

		$result1 = $this->model_admin->checkLogin($EMAIL,$MAT_KHAU);

		$result2 = $this->model_user->checkLogin($EMAIL,$MAT_KHAU);

		if ($result1 !== null) {
			$_SESSION['admin'] = $result1;
			$_SESSION['admin_isLogin'] = true;
			header('Location: index.php?mod=dashboard');
		}elseif ($result2 !== null) {
			$_SESSION['user'] = $result2;
			$_SESSION['user_isLogin'] = true;
			header('Location: index.php?mod=user&act=list');
		}
		else {
			header('Location: index.php?mod=login&act=callForm');
		}
	}

	function logout()
	{
		session_destroy($_SESSION['admin']);
		header('Location: index.php?mod=login&act=callForm');
	}

	function dashboard()
	{
		$employee_number = $this->model_admin->count();
		$customer_number = $this->model_user->count();
		$bill_number = $this->model_bill->count();
		$product_number = $this->model_product->count();
		require_once('views/dashboard.php');
	}
}

?>