<?php 
require_once('Model.php');
/**
 * 
 */
class Bill extends Model
{
	var $table = "hoa_don";
	var $primaryKey = "MA_HD";

	function get_infor()
	{
		$data = array();

		$query = "SELECT khach_hang.MA_KH, khach_hang.TEN_KH, hoa_don.NGAY_BAN, hoa_don.TONG_TIEN, hoa_don.MA_HD, nhan_vien.MA_NV, nhan_vien.TEN_NV
		FROM hoa_don
		INNER JOIN khach_hang ON khach_hang.MA_KH = hoa_don.MA_KH
		INNER JOIN nhan_vien ON nhan_vien.MA_NV = hoa_don.MANV";
		$result = $this->dbconn->query($query);
		while($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	
	function best_seller($thang){
		$data = array();
		$query="SELECT  san_pham.*,SUM(chi_tiet_hoa_don.SO_LUONG) AS TONG
		FROM san_pham, chi_tiet_hoa_don,hoa_don
		WHERE san_pham.MA_SP = chi_tiet_hoa_don.MA_SP AND hoa_don.MA_HD= chi_tiet_hoa_don.MA_HD AND MONTH(hoa_don.NGAY_BAN)=".$thang."
		GROUP BY TEN_SP
		ORDER BY SUM(chi_tiet_hoa_don.SO_LUONG) DESC
		LIMIT 5";
		$result =$this->conn->query($query);

		while($row = $result->fetch_assoc()){
			$data[]= $row;
		}
		return $data;
	}
}

?>