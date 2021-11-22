<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

	if(isset($_POST['update'])){
	   $id = $_POST['id'];
	   
	   // Getting data from the admin
	   $name = mysqli_escape_string($con, $_POST['name']);
	   $price = mysqli_escape_string($con, $_POST['price']);
	   $stock = mysqli_escape_string($con, $_POST['stock']);
	   
	   $category = $_POST['category'];
	   $description = mysqli_escape_string($con, $_POST['description']);

	   $sql = "UPDATE product SET name = '$name', price = '$price', stock = '$stock', cetegory = '$category', description = '$description' WHERE id = '$id' ";

	   $run_sql = mysqli_query($con, $sql);
	   


	   // Checking if data inserted into database
	   if ($run_sql) {
	   	echo "<script> alert('Product updated into database') </script>";
	   	echo "<script> location = 'product-list.php' </script>";
	   }else{
	   	echo "<script> alert('Something went wrong, Please try again!!') </script>";
	   }

	}
  
}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BTMS | Add Product</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
	 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Edit Product</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
						</div>
						<div class="form-body">
							<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">

								<!-- Getting data from database -->
								<?php
									$pid = $_GET['id'];  
									$sql = "SELECT * FROM product WHERE id ='$pid' ";
									$run_psql = mysqli_query($con, $sql);
									$prow = mysqli_fetch_array($run_psql);
								?>
					                    
					            <label for="product_name">Product Name</label>
    							<input name="name" type="text" class="form-control" id="product_name" value="<?php echo $prow['name'] ;?>" required><br>

    							<label for="product_price">Product Price</label>
    							<input name="price" type="number" class="form-control" id="product_price" value="<?php echo $prow['price'] ;?>" required><br>

    							<label for="stock">Stock Count</label>
    							<input name="stock" type="number" class="form-control" id="stock" value="<?php echo $prow['stock'] ;?>" required><br>
								
								<div class="form-group">
						            <label>Category*</label>
						            <select id="select" name="category"  required >
									<option>Select Category</option>
									<option value="sample">sample</option>}
									option
						            <!-- getting categories from database -->
						            <?php  
						            	$csql = "SELECT * FROM category";
						                $run_csql = mysqli_query($con, $csql);
						                while ($row = mysqli_fetch_array($run_csql)) {
						            ?>
						                            
						            <option value="<?php echo $row['name'] ;?>"><?php echo $row['name'] ;?></option>

						            <?php } ?>

						            </select>
						        </div><br>

		                        <label for="description">Product description</label>
    							<textarea value="<?php echo $prow['description'] ;?>" name="description" class="form-control" id="description" rows="3"><?php echo $prow['description'] ;?></textarea><br>

								<input type="hidden" name="id" value="<?php echo $pid ;?>">
    							<button class="btn btn-success" name="update" type="submit">UPDATE</button>
	        				</form> 
						</div>
						
					</div>
				
				
			</div>
		</div>
		 <?php include_once('includes/footer.php');?>
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>
