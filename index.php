<?php 
session_start();
// include_once ('helper/Middleware.php');
$mod = "home";
$act = "index";

//$middleware = new Middleware();

if (isset($_GET['mod'])) {
	$mod = $_GET['mod'];
}
if (isset($_GET['act'])) {
	$act = $_GET['act'];
}

switch ($mod) {
	case 'product':
	//$middleware->isLogin();
	require_once('controllers/ProductController.php');
	$controller = new ProductController();
	switch ($act) {
		case 'list':
		$controller->list();
		break;
		case 'detail':
		$controller->detail();
		break;
		case 'update':
		$controller->update();
		break;
		case 'edit':
		$controller->edit();
		break;
		case 'delete':
		$controller->delete();
		break;
		case 'store':
		$controller->store();
		break;
		default:
				# code...
		break;
	}
	break;
	case 'employee':
	//$middleware->isLogin();
	require_once('controllers/EmployeeController.php');
	$controller = new EmployeeController();
	switch ($act) {
		case 'list':
		$controller->list();
		break;
		case 'detail':
		$controller->detail();
		break;
		case 'update':
		$controller->update();
		break;
		case 'delete':
		$controller->delete();
		break;
		case 'add':
		$controller->add();
		break;
		default:
			# code...
		break;
	}
	break;
	case 'customer':
	//$middleware->isLogin();
	require_once('controllers/CustomerController.php');
	$controller = new CustomerController();
	switch ($act) {
		case 'list':
		$controller->list();
		break;
		case 'detail':
		$controller->detail();
		break;
		case 'delete':
		$controller->delete();
		break;
		default:
			# code...
		break;
	}
	break;
	case 'login':
	require_once('controllers/LoginController.php');
	$controller = new LoginController();
	switch ($act) {
		case 'callForm':
		$controller->callForm();
		break;
		case 'isLogin':
		$controller->isLogin();
		break;
		case 'logout':
		$controller->logout();
		break;
		
		default:
			# code...
		break;
	}
	break;
	case 'sale':
	//$middleware->isLogin();
	require_once('controllers/SaleController.php');
	$controller = new SaleController();
	switch ($act) {
		case 'createBill':
		$controller->createBill();
		break;
		case 'purchase':
		$controller->purchase();
		break;
		case 'sale':
		$controller->sale();
		break;
		case 'add2cart':
		$controller->add2cart();
		break;
		case 'remove_product':
		$controller->remove_product();
		break;
		case 'payment':
		$controller->payment();
		break;
		case 'bill_detail':
		$controller->bill_detail();
		break;
		case 'cancel':
		$controller->cancel();
		break;
		
		default:
			# code...
		break;
	}
	break;
	case 'bill':
	//$middleware->isLogin();
	require_once('controllers/BillController.php');
	$controller = new BillController();
	switch ($act) {
		case 'list':
		$controller->list();
		break;
		case 'detail':
		$controller->detail();
		break;
		default:
				# code...
		break;
	}
	break;
	case 'user':
	require_once('controllers/UserController.php');
	$controller = new UserController();
	switch ($act) {
		case 'list':
		$controller->list();
		break;
		case 'add2cart':
		$controller->add2cart();
		break;
		case 'cart':
		$controller->cart();
		break;
		case 'detail':
		$controller->detail();
		break;
		case 'payment':
		$controller->payment();
		break;
		default:
				# code...
		break;
	}
	break;
	case 'dashboard':
	//$middleware->isLogin();
	require_once('controllers/LoginController.php');
	$controller = new LoginController();
	$controller->dashboard();
	break;
	default:
		# code...
	break;
}

?>