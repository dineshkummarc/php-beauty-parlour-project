<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (!empty($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "UPDATE tblappointment SET Status = '1' WHERE ID = '$id' ";
	$run_sql = mysqli_query($con, $sql);
	header("Location: accepted-appointment.php");
}
?>