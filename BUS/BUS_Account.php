<?php 
	require './DAL/DAL_Account.php';

	function CreateAccountBUS(Account $ac)
	{
		return CreateAccountDAL($ac);
	}

	function CheckMailBUS($mail)
	{
		return CheckMailDAL($mail);
	}

	function SigInBUS($username, $pass, $token)
	{
		return SigInDAL($username, $pass, $token);
	}
?>