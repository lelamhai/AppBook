<?php 
	require './DAL/DAL_Account.php';

	function CreateAccountBUS(Account $ac)
	{
		return CreateAccountDAL($ac);
	}
?>