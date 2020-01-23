<?php

	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
    include_once ($filepath.'/../helpers/format.php');
    
    class cheft
	{
		private $db;
		private $fm;
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		public function insert_cheft($date,$files)
		{
			
			$ghichu="No set";

			$ten = mysqli_real_escape_string($this->db->link, $date['ten']);
			$sdt = mysqli_real_escape_string($this->db->link, $date['sdt']);
			$schechuledefault = mysqli_real_escape_string($this->db->link, $date['schechuledefault']);
			$ghichu = mysqli_real_escape_string($this->db->link, $date['ghichu']);
			
			if($ten == "" || $sdt == ""){
				$alert = "<span class='error'>Fiedls must be not empty</span>";
				return $alert;
			}else{
				$check_email = "SELECT * FROM daubep WHERE ten='$ten' LIMIT 1";
				$result_check = $this->db->select($check_email);
				if ($result_check) {
					$alert = "<span class='error'>Đã có nhân viên này </span>";
					return $alert;
				}else {
					$query = "INSERT INTO daubep(ten,sdt,schechuledefault,ghichu) VALUES('$ten','$sdt','$schechuledefault','$ghichu') ";
					$result = $this->db->insert($query);
					if($result){
						$alert = "<span style='color:blue;'>Thêm nhân viên thành công <a href='draganddrop.php'> >>View list</a></span>";
						return $alert;
					}else {
						$alert = "<span class='error'>Lỗi</span>";
						return $alert;
					}
				}
			}
		}

		public function show_cheft()
		{
			
			$query = "SELECT * FROM daubep";	
			$result = $this->db->select($query);
			
			return $result;
		}
		public function Find_cheft($ten)
		{	
			$query = "SELECT * FROM daubep where ten='$ten'";	
			$result = $this->db->select($query);
			
			return $result;
		}

		public function Countcheft()
		{
			$query = "SELECT COUNT(*) as cheft FROM daubep";	
			$result = $this->db->select($query);
			return $result;
		}
		public function Change_Infochef($data, $id)
		{
			
			$ten = mysqli_real_escape_string($this->db->link, $data['ten']);
			$sdt = mysqli_real_escape_string($this->db->link, $data['sdt']);
            $schechuledefault = mysqli_real_escape_string($this->db->link, $data['schechuledefault']);
            $ghichu = mysqli_real_escape_string($this->db->link, $data['ghichu']);
		
			if($ten==""){
				$alert = "<span class='error'>Fields must be not empty</span>";
				return $alert;
			}else{
				$query = "UPDATE daubep SET schechuledefault='$schechuledefault',sdt='$sdt',ghichu='$ghichu' WHERE ten ='$ten'";
				$result = $this->db->insert($query);
				if($result){
						$alert = "<script>alert('Update Success');</script>";
						return $alert;
				}else{
						$alert = "<span style='color:red;'>Updated Not thành công</span>";
						return $alert;
				}
				
			}
		}
		public function del_cheft($id)
		{
			$query = "DELETE FROM daubep where ten = '$id' ";
			$result = $this->db->delete($query);
			if($result){
				$alert = '<span style="color:red">Đã xóa</span><?php header("Refresh:0"); ?>';
				return $alert;
			}else {
				$alert = "<span style='color:red'>Lỗi</span>";
				return $alert;
			}
		}

	}
?>