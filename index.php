<!DOCTYPE html>
<html>
<head>
	<title>LLH</title>
</head>
<body>
<?php 
	require './DTO/Account.php';
	require './BUS/BUS_Account.php';
	$ac = new Account("Le Lam","Hai");
	if(CreateAccountBUS($ac))
	{
		echo("Thành công");
	}else{
		echo("Thất bại");
	}
?>

</body>
</html>