<?php 
require_once('Model.php');
/**
 * 
 */
class BillDetail extends Model
{
	var $table = "chi_tiet_hoa_don";
	var $primaryKey = "MA_HD";

	function get_bill_detail($id){
		$data = array();
      // Cau lenh truy van co so du lieu
		$query = "SELECT * FROM " . $this->table ." WHERE " . $this->primaryKey."='" . $id."'";
      // Thuc thi cau lenh truy van co so du lieu
		$result = $this->dbconn->query($query);

		while($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
	}

	function get_infor($MA_HD)
	{
		$data = array();

		$query = " SELECT san_pham.TEN_SP,chi_tiet_hoa_don.MA_HD,chi_tiet_hoa_don.MA_SP,chi_tiet_hoa_don.SO_LUONG,chi_tiet_hoa_don.GIA_BAN,chi_tiet_hoa_don.THANH_TIEN
		FROM san_pham
		INNER JOIN chi_tiet_hoa_don ON san_pham.MA_SP = chi_tiet_hoa_don.MA_SP
		WHERE chi_tiet_hoa_don.MA_HD = '".$MA_HD."'";

		$result = $this->dbconn->query($query);

		while($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		
		return $data;
	}

}

?>