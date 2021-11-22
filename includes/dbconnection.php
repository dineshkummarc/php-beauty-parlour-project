<?php
	define("_SNAME", "");
	define("_UNAME", "root");
	define("_PASSWORD", "adminlimon");
	define("_DNAME", "beauty_parlour");
	
	$con = new mysqli(_SNAME, _UNAME, _PASSWORD, _DNAME);
	$conn = new mysqli(_SNAME, _UNAME, _PASSWORD, _DNAME);
	if($conn->error) echo "Connection Fail! ". $conn->error;
?>