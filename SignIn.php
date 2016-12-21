<?php 
	require './BUS/BUS_Account.php';

	$method = $_SERVER['REQUEST_METHOD'];
	switch ($method) {
		case 'GET':
			# code...
			break;
		case 'POST':
			#random token
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$token = '';
			for ($i = 0; $i < 20; $i++) {
				$token .= $characters[rand(0, $charactersLength - 1)];
			}

			$username = @$_POST['UserName'];
			$pass = @$_POST['Password'];
			$result = array();
			if(SigInBUS($username, $pass, $token))
			{
				$result['status'] = 200;
				$result['data'] =  array('Token' => $token, 'UserName' => $username, 'Password' => $pass);
				$result['message'] = "success";

			}else{

				$result['status'] = 200;
				$result['data'] =  array('Token' => "Null", 'UserName' => "UserName không đúng", 'Password' => "Password không đúng");
				$result['message'] = "unsuccess";
			}
			exit(json_encode($result,JSON_UNESCAPED_UNICODE));
			break;
		default:
			# code...
			break;
	}

?>