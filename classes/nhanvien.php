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
		public function insert_nv($date)
		{
			$id = mysqli_real_escape_string($this->db->link, $date['id']);
			$ten = mysqli_real_escape_string($this->db->link, $date['ten']);
			$sdt = mysqli_real_escape_string($this->db->link, $date['sdt']);
			$chucvu = mysqli_real_escape_string($this->db->link, $date['chucvu']);
			$calamviec = mysqli_real_escape_string($this->db->link, $date['calamviec']);
			$note = mysqli_real_escape_string($this->db->link, $date['ghichu']);
			$count = mysqli_real_escape_string($this->db->link, $date['count']);
			

			if($id == "" || $ten == "" || $sdt == "" || $chucvu == "" || $calamviec == "" || $note == "" || $count == "" ){
				$alert = "<span class='error'>Fiedls must be not empty</span>";
				return $alert;
			}else{
				$check_email = "SELECT * FROM nhanvien WHERE ten='$ten' LIMIT 1";
				$result_check = $this->db->select($check_email);
				if ($result_check) {
					$alert = "<span class='error'>Đã có nhân viên này </span>";
					return $alert;
				}else {
					$query = "INSERT INTO nhanvien(id,ten,sdt,chucvu,calamviec,ghichu,count) VALUES('$id','$ten','$sdt','$chucvu','$calamviec','$note','$count') ";
					$result = $this->db->insert($query);
					if($result){
						$alert = "<span class='success'>Thêm nhân viên thành công</span>";
						return $alert;
					}else {
						$alert = "<span class='error'>Lỗi</span>";
						return $alert;
					}
				}
			}
		}
	/*	public function login_nv($date)
		{
			$chucvu =  $date['email'];
			$password = md5($date['password']);
			if($chucvu == '' || $password == ''){
				$alert = "<span class='error'>Email And Password must be not empty</span>";
				return $alert;
			}else{
				$check_login = "SELECT * FROM tbl_customer WHERE email='$chucvu' AND password='$password' ";
				$result_check = $this->db->select($check_login);
				if ($result_check != false) {
					$value = $result_check->fetch_assoc();
					Session::set('customer_login', true);
					Session::set('customer_id', $value['id']);
					Session::set('customer_name', $value['name']);
					header('Location:order.php');
				}else {
					$alert = "<span class='error'>Email or Password doesn't match</span>";
					return $alert;
				}
			}
		}*/
		public function show_nhanvien()
		{
			
			$query = "SELECT * FROM nhanvien";	
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

	}
?>