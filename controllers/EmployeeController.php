<?php 

require_once('models/employee.php');

class EmployeeController
{
	var $model;
	
	function __construct()
	{
		$this->model = new Employee();
	}

	function list()
	{
		$data = $this->model->All();
		require_once('views/employee/list.php');

		if (isset($_POST['save'])) {

		    unset($_POST['save']);
		    $matkhau = md5($_POST['MAT_KHAU']);
		    $data = array(
		    	"MA_NV" => $_POST['MA_NV'],
		    	"TEN_NV" => $_POST['TEN_NV'],
		    	"EMAIL" => $_POST['EMAIL'],
		    	"SDT" => $_POST['SDT'],
		    	"MAT_KHAU" => $matkhau
		    );

		    $status =  $this->model->insert($data);
		}
	}

	function detail()
	{
		$MA_NV = $_GET['MA_NV'];
		$row = $this->model->Find($MA_NV);
		require_once('views/employee/detail.php');
	}

	function delete()
	{
		$MA_NV = $_GET['MA_NV'];
		$this->model->delete($MA_NV);
		header('Location: ?mod=employee&act=list');
	}
}

?>