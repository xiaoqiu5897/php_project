<?php 
include_once ('Model.php');

class Product extends Model
{
	var $table = "san_pham";
	var $primaryKey = "MA_SP";

	function getQuantity($MA_SP)
	{
		$query = "SELECT SO_LUONG FROM ".$this->table." WHERE MA_SP = '".$MA_SP."'";
		$result = $this->dbconn->query($query)->fetch_assoc();

		$SO_LUONG = $result['SO_LUONG'];

		return $SO_LUONG;
	}

	function reduceQuantity($MA_SP, $SO_LUONG)
	{

		$SO_LUONG_CON = $this->getQuantity($MA_SP) - $SO_LUONG;

		$query = "UPDATE ".$this->table." SET SO_LUONG = ".$SO_LUONG_CON." WHERE " . $this->primaryKey."='" . $MA_SP."'";

		$result = $this->dbconn->query($query);

		return $result;
	}
	
}

?>