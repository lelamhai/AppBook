<?php
	/*require './BUS/BUS_Account.php';
	
	$result =getListAccountBUS();
	while($row = $result->fetch_assoc()) {
        echo "id: " . $row["Id"]. " - Name: " . $row["UserName"]. " " . $row["Password"]. "<br>";
    }*/
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
?>