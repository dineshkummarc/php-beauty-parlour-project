<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{
  	if (!empty($_GET['id'])) {
  		$id = $_GET['id'];
  		$sql = "UPDATE tblappointment SET Status = '2' WHERE ID = '$id' ";
  		$run_sql = mysqli_query($con, $sql);
  		echo "<script> location = 'rejected-appointment.php' </script>";
  	}

}
  ?>