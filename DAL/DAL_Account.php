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
?>