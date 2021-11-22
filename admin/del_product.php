<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

	if (!empty($_GET['id'])) {
			$id = $_GET['id'];
			
			$sql = "DELETE FROM product WHERE id = '$id' ";
			$run_sql = mysqli_query($con, $sql);
			if ($run_sql) {
				echo "<script> alert('Product deleted') </script>" ;
				echo "<script> location = 'product-list.php' </script>";
			}else{
				echo "<script> alert('Can not delete from cart, Please try again!') </script>";
			}
		}
  
}
?>
