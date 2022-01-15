<?php

session_start();
require_once "includes/dbconnection.php";
if (isset($_POST['submit']) && empty($_SESSION['user_email'])) {
	$name = $con->real_escape_string($_POST['name']);
	$email = $con->real_escape_string($_POST['email']);
	$comment = $con->real_escape_string($_POST['comment']);

	$sql = "INSERT INTO feedback ";
	$sql .= "(pro_id, name, email, comment, status) VALUES ('0', '$name', '$email', '$comment', 0)";
	$run_sql = mysqli_query($con, $sql);
	if ($run_sql) {
		echo "<script> alert('Thank you for your feedback..!!!!') </script>";
		echo "<script> location = 'reviews.php' </script>";
	} else echo $con->error;
}
