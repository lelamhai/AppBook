<?php 
	class Account
	{
		private $UserName;
		private $Password;
		private $FullName;
		private $Phone;
		private $Address;
		private $Role;
		private $Avatar;

		public function setUserName($UserName) {
			$this->UserName = $UserName;
		}

		public function getUserName() {
			return $this->UserName;
		}

		public function setPassword($Password) {
			$this->Password = $Password;
		}

		public function getPassword() {
			return $this->Password;
		}

		public function setFullName($fullname)
		{
			$this->FullName = $fullname;
		}

		public function getFullName()
		{
			return $this->FullName;
		}

		public function setPhone($phone)
		{
			$this->Phone = $phone;
		}

		public function getPhone()
		{
			return $this->Phone;
		}

		public function setAddress($address)
		{
			$this->Address = $address;
		}

		public function getAddress()
		{
			return $this->Address;
		}

		public function setRole($role)
		{
			$this->Role = $role;
		}

		public function getRole()
		{
			return $this->Role;
		}

		public function setAvatar($avatar)
		{
			$this->Avatar = $avatar;			
		}

		public function getAvatar()
		{
			return $this->Avatar;			
		}

		
		function __construct($username, $pass, $fullname, $phone, $address, $role, $avatar)
		{
			$this->UserName = $username;
			$this->Password = $pass;
			$this->FullName = $fullname;
			$this->Phone = $phone;
			$this->Address = $address;
			$this->Role = $role; 
			$this->Avatar = $avatar;
		}
	}
?>