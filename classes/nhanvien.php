<?php

	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
    include_once ($filepath.'/../helpers/format.php');
    
    class nhanvien
	{
		private $db;
		private $fm;
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		public function insert_nv($date,$files)
		{
			
			$note="No set";

			$ten = mysqli_real_escape_string($this->db->link, $date['ten']);
			$sdt = mysqli_real_escape_string($this->db->link, $date['sdt']);
			$chucvu = mysqli_real_escape_string($this->db->link, $date['chucvu']);
			$note = mysqli_real_escape_string($this->db->link, $date['note']);
			
			if($ten == "" || $sdt == "" || $chucvu == "" ){
				$alert = "<span class='error'>Fiedls must be not empty</span>";
				return $alert;
			}else{
				$check_email = "SELECT * FROM nhanvien WHERE ten='$ten' LIMIT 1";
				$result_check = $this->db->select($check_email);
				if ($result_check) {
					$alert = "<span class='error'>Đã có nhân viên này </span>";
					return $alert;
				}else {
					$query = "INSERT INTO nhanvien(ten,sdt,chucvu,calamviec,ghichu) VALUES('$ten','$sdt','$chucvu','0-0','$note') ";
					$result = $this->db->insert($query);
					if($result){
						$alert = "<span style='color:blue;'>Thêm nhân viên thành công</span>";
						return $alert;
					}else {
						$alert = "<span class='error'>Lỗi</span>";
						return $alert;
					}
				}
			}
		}

		public function show_nhanvien()
		{
			
			$query = "SELECT * FROM nhanvien";	
			$result = $this->db->select($query);
			
			return $result;
		}
		public function CountStaff()
		{
			$query = "SELECT COUNT(*) as nv FROM nhanvien";	
			$result = $this->db->select($query);
			return $result;
		}
		public function CountStaffRun()
		{
			$query = "SELECT COUNT(*) as nvcb FROM nhanvien where chucvu='Chạy bàn'";	
			$result = $this->db->select($query);
			return $result;
		}

		public function FillterStaff()
		{
			$query = "SELECT * FROM nhanvien ORDER BY count";	
			$result = $this->db->select($query);
			return $result;
		}

		public function CountStaffCashier()
		{
			$query = "SELECT COUNT(*) as nvtn FROM nhanvien where chucvu='Thu ngân'";	
			$result = $this->db->select($query);
			return $result;
		}
		public function show5_nhanvien()
		{
			
			$query = "SELECT * FROM nhanvien  ORDER BY ten ASC limit 5";	
			$result = $this->db->select($query);
			
			return $result;
		}
		public function update_customers($data, $id)
		{
			
			$sdt = mysqli_real_escape_string($this->db->link, $data['sdt']);
			$chucvu = mysqli_real_escape_string($this->db->link, $data['chucvu']);
            $ghichu = mysqli_real_escape_string($this->db->link, $data['ghichu']);
            $calamviec = mysqli_real_escape_string($this->db->link, $data['calamviec']);
		
			if($ghichu=="" || $sdt=="" || $chucvu=="" || $calamviec=="" ){
				$alert = "<span class='error'>Fields must be not empty</span>";
				return $alert;
			}else{
				$query = "UPDATE nhanvien SET sdt='$sdt',chucvu='$chucvu',calamviec='$calamviec',ghichu='$ghichu' WHERE id ='$id'";
				$result = $this->db->insert($query);
				if($result){
						$alert = "<span class='success'>Updated thành công</span>";
						return $alert;
				}else{
						$alert = "<span class='error'>Updated Not thành công</span>";
						return $alert;
				}
				
			}
		}
		public function del_staff($id)
		{
			$query = "DELETE FROM nhanvien where ten = '$id' ";
			$result = $this->db->delete($query);
			if($result){
				$alert = "<span style='color:red'>Đã xóa nhân viên</span>";
				return $alert;
			}else {
				$alert = "<span style='color:red'>Lỗi</span>";
				return $alert;
			}
		}

	}
?>