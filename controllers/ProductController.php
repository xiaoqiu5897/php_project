<?php 

require_once('models/product.php');
require_once('models/ProductType.php');

class ProductController
{
	var $model;
	var $model_product_type;

	function __construct()
	{
		$this->model = new Product();
		$this->model_product_type = new ProductType();
	}

	function list()
	{
		$product_types = $this->model_product_type->All();
		$data = $this->model->All();
		require_once('views/product/list.php');

		if (isset($_POST['save'])) {
			$target_dir = "uploads/";  // thư mục chứa file upload

		    $target_file = $target_dir . basename($_FILES["ANH_SP"]["name"]); // link sẽ upload file lên
		    
		    if (move_uploaded_file($_FILES["ANH_SP"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
		    	$_POST['ANH_SP'] = basename( $_FILES["ANH_SP"]["name"]);
		    } else { // Upload file có lỗi 
		    	echo "Sorry, there was an error uploading your file.";
		    }

		    unset($_POST['save']);

		    $data = $_POST;

		    $status =  $this->model->insert($data);
		}
	}

	function detail()
	{
		$MA_SP = $_GET['MA_SP'];
		$data = $this->model->All();
		$row = $this->model->find($MA_SP);
		require_once('views/product/detail.php');
	}


	function store()
	{
		$data = $_POST;

		$status = $this->model->create($data);

		if ($status == 1) {
			header('Location: index.php?mod=product&act=list');
		}else{
			//Thông báo lỗi
		}
	}

	function edit()
	{
		$product_types = $this->model_product_type->All();
		$MA_SP = $_GET['MA_SP'];
		$row = $this->model->find($MA_SP);
		require_once('views/product/edit.php');
	}

	function update()
	{	
		unset($_POST['save']);
		$data= $_POST;

		$MA_SP = $_GET['MA_SP'];
		$status = $this->model->update($data,$MA_SP);

		if ($status == 1) {
			header('Location: index.php?mod=product&act=list');
		}else{
			echo "Thông báo lỗi";
		}
	}

	function delete()
	{
		$MA_SP = $_GET['MA_SP'];
		$status = $this->model->delete($MA_SP);
		if ($status == 1) {
			header('Location: index.php?mod=product&act=list');
		}
	}
}

?>


