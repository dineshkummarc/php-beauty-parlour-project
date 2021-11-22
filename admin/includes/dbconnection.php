<?php
	define("_SNAME", "");
	define("_UNAME", "root");
	define("_PASSWORD", base64_decode("YWRtaW5saW1vbg"));
	define("_DNAME", "bbpdb");
	
	$con = new mysqli(_SNAME, _UNAME, _PASSWORD, _DNAME);
	$conn = new mysqli(_SNAME, _UNAME, _PASSWORD, _DNAME);
	if($conn->error) echo "Connection Fail! ". $conn->error;
?>
