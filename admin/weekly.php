<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

  

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BPMS |  Sales Reports</title>

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
					<h3 class="title1">Sales reports</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Sales reports:</h4>
						</div>
						<div class="form-body">
							<table class="table table-bordered">
							<thead> 
								<tr> 
									<th>Person Name</th> 
									<th>Mobile</th> 
									<th>Product Name</th> 
									<th>Quantity</th>
									<th>Prce</th> 
								</tr> 
							</thead> 
							<tbody>
							<?php
								$ret=mysqli_query($con,"SELECT * FROM  pro_order WHERE `date` >= NOW() - INTERVAL 7 DAY ");
								$sub_total = 0;
								$total = 0;
								while ($row=mysqli_fetch_array($ret)) {
									$total += $row['price'] * $row['qty'];
							?>

						 	<tr> 
						 		<th scope="row"><?php  echo $row['name'];?></th> 
						 		<td><?php  echo $row['mobile'];?></td>
						 		<td><?php  echo $row['pro_name'];?></td>
						 		<td><?php  echo $row['qty'];?></td>
						 		<td><?php  echo $row['price'] * $row['qty'];?></td>
						 	</tr>   
						 	<?php
						 		$sub_total += $total;

						 	 }

						 	?>
						 	<tr>
						 		<td></td>
						 		<td></td>
						 		<td></td>
						 		<td></td>
						 		<td>Total: <?php echo $sub_total ;?> TK</td>
						 	</tr>
							</tbody> 
						</table>
						</div>
						
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
<?php } ?>