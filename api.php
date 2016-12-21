<?php 
require './DTO/Account.php';
require './BUS/BUS_Account.php';


$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
	$now = DateTime:: createFromFormat('U.u',microtime(true));
	$id = $now->format('YmdHisu');
	$path = "Upload/$id.jpeg";
	$avatar = "";
	$username = $_POST['UserName'];
	$pass = $_POST['Password'];
	$fullname = $_POST['FullName'];
	$phone = $_POST['Phone'];
	$address = $_POST['Address'];
	$role = $_POST['Role'];
	$picture = $_POST['Avatar'];

	if(file_put_contents($path, base64_decode($picture)))
	{
		$avatar = $path;
	}
	
	$ac = new Account($username, $pass, $fullname, $phone, $address, $role, $avatar);
	if(empty($username) && empty($pass))
	{
		$arrayName = array(
			'UserName' => "Không được để trống",
			'Password' => "Không được để trống",
			'message' => "Error"
			);
	}else 
	{
		if(CreateAccountBUS($ac))
		{
			$arrayName = array(
				'status' => 200,
				'data' => '',
				'message' => "Success",
				);
		}else
		{
			$arrayName = array(
				'message' => "Error Server"
				);
		}
	}
	exit(json_encode($arrayName,JSON_UNESCAPED_UNICODE));
} elseif ($method == 'GET') {
	echo "Get";
} elseif ($method == 'PUT') {
	echo "Put";
} elseif ($method == 'DELETE') {
	echo "Delete";
} else {
	echo "other";
}
	
	?>