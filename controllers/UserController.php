<?php 
require_once('models/product.php');
require_once('models/ProductType.php');
/**
 * 
 */
class UserController
{
	var $model_product;
	var $model_product_type;
	
	function __construct()
	{
		$this->model_product = new Product();
		$this->model_product_type = new ProductType();
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
}
?>