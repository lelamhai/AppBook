<?php
	/*require './BUS/BUS_Account.php';
	
	$result =getListAccountBUS();
	while($row = $result->fetch_assoc()) {
        echo "id: " . $row["Id"]. " - Name: " . $row["UserName"]. " " . $row["Password"]. "<br>";
    }*/
	if ((!isset($_SERVER['PHP_AUTH_USER'])) || (!isset($_SERVER['PHP_AUTH_PW']))) {
    header('WWW-Authenticate: Basic realm="Secured Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Authorization Required.';
    exit;
} else if ((isset($_SERVER['PHP_AUTH_USER'])) && (isset($_SERVER['PHP_AUTH_PW']))){
    if (($_SERVER['PHP_AUTH_USER'] != "calcuser") || ($_SERVER['PHP_AUTH_PW'] != "testpwd")) {
       header('WWW-Authenticate: Basic realm="Secured Area"');
       header('HTTP/1.0 401 Unauthorized');
       echo 'Authorization Required.';
       exit;
    } else if (($_SERVER['PHP_AUTH_USER'] == "calcuser") || ($_SERVER['PHP_AUTH_PW'] == "testpwd")) {
       require './connect.php';
   	$sql = "SELECT * FROM account";
   	$cn = connection();
   	$result = $cn->query($sql);
   	$temparray = array();
   	$temparray["Account"] = array();
   	while($row =mysqli_fetch_assoc($result)) {
   		$account = array();
   		$account["Id"] = $row["Id"];
   		$account["UserName"] = $row["UserName"];
   		$account["Password"] = $row["Password"];
   		array_push($temparray["Account"], $account);
   	}
   	$temparray["Success"] = 1;
   	echo json_encode($temparray);
    }
}	
?>