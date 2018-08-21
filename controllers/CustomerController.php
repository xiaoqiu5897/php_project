<?php 

require_once ('models/customer.php');


class CustomerController
{
	var $model;

	function __construct()
	{
		$this->model = new Customer();
	}

	function list()
	{
		$data = $this->model->All();
		require_once ('views/customer/list.php');
		if (isset($_POST['save'])) {

		    unset($_POST['save']);
		    $_POST['MAT_KHAU'] = md5($_POST['MAT_KHAU']);
		    $data = $_POST;

		    $status =  $this->model->insert($data);
		}
	}

	function detail()
	{
		$MA_KH = $_GET['MA_KH'];
		$row = $this->model->Find($MA_KH);
		require_once ('views/customer/detail.php');
	}

	function update()
	{
		$MA_KH = $GET['MA_KH'];
		$row = $this->model->All();
		require_once ('views/customer/update.php');
		$row1 = $this->model->Update($MA_KH);

	}

	function delete()
	{
		$MA_KH = $_GET['MA_KH'];
		$status = $this->model->delete($MA_KH);
		var_dump($status);die;
		if ($status == 1) {
			header('Location: index.php?mod=customer&act=list');
		}
	}
}

 ?>