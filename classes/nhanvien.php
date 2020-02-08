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
		public function Find_staff($ten)
		{
			
			$query = "SELECT * FROM nhanvien where ten='$ten'";	
			$result = $this->db->select($query);
			
			return $result;
		}
		public function show_shiftnhanvien($ca,$team)
		{
			
			$query = "SELECT * FROM nhanvien where calamviec ='$ca' && count='$team' ORDER BY RAND() limit 2";	
			$result = $this->db->select($query);
			
			return $result;
		}

		public function show_shiftnhanvienRD1($ca,$team)
		{
			
			$query = "SELECT * FROM nhanvien where calamviec ='$ca' && count='$team' ORDER BY RAND() limit 1";	
			$result = $this->db->select($query);
			
			return $result;
		} 
		// display staff by shift and team
		public function show_shiftCashier($thu,$ca,$team)
		{
			
			$query = "SELECT * FROM nhanvien where 
			chucvu ='Thu ngân' && calamviec='$ca' && count='$team' and schedule='$thu' or scheduledefault='$thu' limit 1";	
			$result = $this->db->select($query);
			
			return $result;
		}
		// show random 1 cashier
		public function show_RD1_Cashier($ca,$team)
		{
			
			$query = "SELECT * FROM nhanvien where 
			chucvu ='Thu ngân' && calamviec='$ca' && count='$team' ORDER BY  RAND() limit 1";	
			$result = $this->db->select($query);
			
			return $result;
		}


		public function Fillter_Team($team)
		{
			
			$query = "SELECT * FROM nhanvien WHERE count ='$team'";	
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
			
			$query = "SELECT * FROM nhanvien  ORDER BY RAND() limit 5";	
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

		//Sort team
		public function SortTeam($ten)
		{
			$rd=rand(1,2);
			if($ten==""){
				$alert = "<span class='error'>Fields must be not empty</span>";
				return $alert;
			}else{
				$query = "UPDATE nhanvien SET count='$rd'WHERE ten ='$ten'";
				$result = $this->db->insert($query);
				if($result){
						$alert = "<span class='success'>Chia nhóm thành công</span>";
						return $alert;
				}else{
						$alert = "<span class='error'>Lỗi</span>";
						return $alert;
				}
				
			}
		}

		//Sort shift
		public function SortShiftNV($team,$ten)
		{
			//
			$items = array('9AM-4PM', '4PM-10PM');
			$rd=$items[array_rand($items)];
			//
			if($team==""){
				$alert = "<span class='error'>Fields must be not empty</span>";
				return $alert;
			}else{
				$query = "UPDATE nhanvien SET calamviec='$rd'  WHERE count ='$team' && chucvu='Chạy bàn' && ten ='$ten'";
				$result = $this->db->insert($query);
				if($result){
						$alert = "<span class='success'>Chia ca thành công</span>";
						return $alert;
				}else{
						$alert = "<span class='error'>Lỗi</span>";
						return $alert;
				}
				
			}
		}
		//Sort Cashier
		public function SortShiftCashier($team,$ten)
		{
			//
			$items = array('10AM-4PM', '4PM-9PM');
			$rd=$items[array_rand($items)];
			//
			if($team==""){
				$alert = "<span class='error'>Fields must be not empty</span>";
				return $alert;
			}else{
				$query = "UPDATE nhanvien SET calamviec='$rd'  WHERE count ='$team' && chucvu='Thu ngân' && ten ='$ten'";
				$result = $this->db->insert($query);
				if($result){
						$alert = "<span class='success'>Chia ca thành công</span>";
						return $alert;
				}else{
						$alert = "<span class='error'>Lỗi</span>";
						return $alert;
				}
				
			}
		}
		public function ChangeAll($date,$files)
		{
			$ten = mysqli_real_escape_string($this->db->link, $date['ten']);
			$sdt = mysqli_real_escape_string($this->db->link, $date['sdt']);
			$calam = mysqli_real_escape_string($this->db->link, $date['calam']);
			$gp = mysqli_real_escape_string($this->db->link, $date['gp']);
			$chucvu = mysqli_real_escape_string($this->db->link, $date['chucvu']);
			$note = mysqli_real_escape_string($this->db->link, $date['note']);
			
			if($sdt == "" || $chucvu == "" || $calam == "" || $gp == ""){
				$alert = "<span class='error'>Fields must be not empty</span>";
				return $alert;
			}else{
				$query = "UPDATE nhanvien SET sdt='$sdt',calamviec='$calam',count='$gp',chucvu='$chucvu',ghichu='$note' WHERE ten ='$ten'";
				$result = $this->db->insert($query);
				if($result){
						$alert = "<span style='color:lightgreen;font-weight:bold;'>Change success</span>";
						return $alert;
				}else{
						$alert = "<span class='error'>Error! Please Check again field</span>";
						return $alert;
				}
				
			}
			
		}

		// show nv  by week
		public function GetSchedule($thu,$calam, $nhom)
		{
			$query = "SELECT * FROM `nhanvien` WHERE count='$nhom' and calamviec='$calam' and schedule='$thu' or scheduledefault='$thu' LIMIT 2  ";
			$result = $this->db->delete($query);
			return $result;
		}
		// Count by week
		public function CountGetSchedule($id,$calam,$nhom)
		{
			$query = "SELECT  COUNT(*) as nv FROM `nhanvien` WHERE count='$nhom'and calamviec='$calam' and schedule='$id'";
			$result = $this->db->delete($query);
			return $result;
		}

		// Set default schedule
		public function SetSchedule_customers($data, $ten)
		{
			
			$ten = mysqli_real_escape_string($this->db->link, $data['ten']);
			$schedule = mysqli_real_escape_string($this->db->link, $data['schedule']);
            
		
			if($ten==""){
				$alert = "<span class='error'>Fields must be not empty</span>";
				return $alert;
			}else{
				$query = "UPDATE nhanvien SET schedule='$schedule', scheduledefault='$schedule' WHERE ten ='$ten'";
				$result = $this->db->insert($query);
				if($result){
						$alert = "<span class='success'>Set schedule thành công, <a href='setschedule.php'> nhấp tải lại trang</a></span>";
						return $alert;
				}else{
						$alert = "<span class='error'>Lỗi</span>";
						return $alert;
				}
				
			}
		}
	}
?>