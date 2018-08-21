<?php 

require_once('connection.php');

class Model
{
	var $table = "";
	var $primaryKey = "";
	var $dbconn = null;
	
	function __construct()
	{
		$connection = new connection();
		$this->dbconn = $connection->connect();
	}

	function All()
	{
		$data = array();
      // Cau lenh truy van co so du lieu
		$query = "SELECT * FROM " . $this->table;

    	// Thuc thi cau lenh truy van co so du lieu
		$result = $this->dbconn->query($query);

		while($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}

	function find($id){
      // Cau lenh truy van co so du lieu
		$query = "SELECT * FROM " . $this->table ." WHERE " . $this->primaryKey."='" . $id."'";
      // Thuc thi cau lenh truy van co so du lieu
		$result = $this->dbconn->query($query)->fetch_assoc();

		return $result;
	}

    // Chèn dữ liệu vào csdl
	function insert($data){

		$fields = "";
		$values = "";

		foreach ($data as $key => $value) {
			$fields .= ",$key";
			$values .= ",'".$value."'";
		}

		$fields = trim($fields,",");
		$values = trim($values,",");
		$sql = "INSERT INTO ".$this->table."(".$fields.") VALUES (".$values.")";

		$status = $this->dbconn->query($sql);

		return $status;
	}

		// Sửa dữ liệu
	function update($data,$id){
		$sql = "";

		foreach ($data as $key => $value) {
			$sql .= ",$key = '".$value."'";
		}

		$sql = trim($sql,',');

		$query = "UPDATE ".$this->table." SET ".$sql." WHERE " . $this->primaryKey."='" . $id."'";


		$status = $this->dbconn->query($query);
		return $status;
	}

	function delete($id){

		$query = "DELETE FROM ".$this->table." WHERE ".$this->primaryKey." = '" . $id."'";
		$status = $this->dbconn->query($query);
		return $status;
	}

	function checkLogin($EMAIL,$MAT_KHAU)
	{
		$data = array();
      // Cau lenh truy van co so du lieu
		$query = "SELECT * FROM ". $this->table ." WHERE EMAIL = '" . $EMAIL."' AND MAT_KHAU ='" . $MAT_KHAU."'";

    	// Thuc thi cau lenh truy van co so du lieu
		$result = $this->dbconn->query($query)->fetch_assoc();

		return $result;
	}

	function count()
	{
		$query = "SELECT COUNT(*) FROM ".$this->table;
		$status = $this->dbconn->query($query)->fetch_assoc();
		return $status;
	}
}


?>