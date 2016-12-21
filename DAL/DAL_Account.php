<?php
	require './connect.php';
	

	function CreateAccountDAL(Account $ac)
	{
		$username = $ac->getUserName();
		$pass = $ac->getPassword();
		$fullname = $ac->getFullName();
		$avatar = $ac->getAvatar();
		$phone = $ac->getPhone();
		$address = $ac->getAddress();
		$role = $ac->getRole();
		$cn = connection();
		$sql = "INSERT INTO account (UserName, Password, FullName, Phone, Address, Role, Avatar) VALUES ('$username', '$pass', '$fullname', '$phone', '$address', '$role','$avatar')";
		$cn->query($sql);

		return true;
	}

	function CheckMailDAL($mail)
	{
		$sql = "SELECT * FROM account WHERE UserName = '$mail'";
		$cn = connection();
		$result = $cn->query($sql);
		if(mysqli_num_rows($result) >= 1){
			return true;
		}
		else {
			return false;
		}
	}


	function SigInDAL($username, $pass, $token)
	{
		$sql = "SELECT * FROM account WHERE UserName = '$username' AND Password = '$pass' ";
		$cn = connection();
		$result = $cn->query($sql);
		if(mysqli_num_rows($result) >= 1){
			$sqlU = "UPDATE account SET Token ='$token' WHERE UserName = '$username' ";
			$cn->query($sqlU);
			return true;
		}
		else {
			return false;
		}
	}

	/*function CheckTokenDAL($username, $pass)
	{

	}*/
?>