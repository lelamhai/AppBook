<?php 
	/*define ("Localhost","mysql.hostinger.vn");
	define ("UserName","u620217281_root");
	define ("Password","LLH@lelamhai1993");
	define ("NameDB", "u620217281_book");*/

	define ("Localhost","127.0.0.1");
	define ("UserName","root");
	define ("Password","");
	define ("NameDB", "app_book");

	function connection()
	{
		$cn = new mysqli(Localhost,UserName,Password,NameDB);
		if ($cn->connect_error) {
			die("Connection failed: " . $cn->connect_error);
		} 
		return $cn;
	}
?>