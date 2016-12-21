<?php 
require './BUS/BUS_Account.php';


$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
	case 'GET':
		# code...
		break;
	case 'POST':
		$username = @$_POST['UserName'];
		$result = array();
		if(CheckMailBUS($username))
		{
			$result['status'] = 200;
			$result['data'] = "true";
			$result['message'] = "success";
		}else{
			$result['status'] = 200;
			$result['data'] = "false";
			$result['message'] = "success";
		}
		exit(json_encode($result,JSON_UNESCAPED_UNICODE));
		break;
	default:
		# code...
		break;
}


	
?>