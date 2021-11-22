<?php
	session_start();
	include('includes/dbconnection.php');
	if(!strlen($_SESSION['bpmsaid'])) {
		header('location:logout.php');
	} else {
		if(isset($_POST['new-payment'])) {
			//echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
			$pmnt_id	= rand(100000, 999999);
			$cus_id		= $con->real_escape_string($_POST['cus_id']);
			$services	= $con->real_escape_string(implode(',', $_POST['services']));
			$method		= $con->real_escape_string($_POST['pmnt_method']);
			$date_of_pmnt	= date("Y-m-d H:i:s");
			
			$qSql = "INSERT INTO tblpayments (pmnt_id, cus_id, services, method, paid_amount, date_of_pmnt) ";
			$qSql.= "VALUES ('{$pmnt_id}', '{$cus_id}', '{$services}', '{$method}', '0', '{$date_of_pmnt}') ";
			$query = mysqli_query($con, $qSql);
			if($query) {
				echo "<script>alert('Payment has been added.');</script>";
				echo "<script>window.location.href = 'payments.php'</script>";
			} else echo "<script>alert('". $con->error ."');</script>";
		}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>BTMS | New Payment</title>

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
					<h3 class="title1">Payments</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>New Payment:</h4>
						</div>
						<div class="form-body">
							<form method="post">
								<input type="hidden" name="new-payment" />
								<p style="font-size:16px; color:red" align="center"><?php if(isset($msg))echo $msg;?> </p>
								<div class="form-group">
									<label>Customer Name</label>
									<select name="cus_id" class="form-control">
									<?php
										$ret=mysqli_query($con, "SELECT * FROM tblcustomers ");
										while ($cusInfo=mysqli_fetch_array($ret)) {
									?>
										<option value="<?= $cusInfo['ID'] ?>">
											<?= $cusInfo['Name'] ?> - <?= $cusInfo['Email'] ?>
										</option>
									<?php
										}
										$ret->free();
									?>
									</select>
								</div>
								<div class="form-group">
									<table class="table table-bordered bill-table">
										<thead>
											<tr>
												<th width="70%">Service</th>
												<th>Amount</th>
											</tr>
										</thead>
										<tbody id="rep-row">
											<tr>
												<td>
													<select name="services[]" class="form-control service-select" autocomplete="off" required>
														<option value="" data-spr="0">Select Service</option>
													<?php
														$ret=mysqli_query($con, "SELECT * FROM tblservices");
														while ($serInfo=mysqli_fetch_array($ret)) {
													?>
														<option value="<?= $serInfo['ID'] ?>" data-spr="<?= $serInfo['Cost'] ?>">
															<?= $serInfo['ServiceName'] ?>
														</option>
													<?php
														}
														$ret->free();
													?>
													</select>
												</td>
												<td>
													<div class="input-group">
														<input type="number" class="form-control service-price" autocomplete="off" readonly required />
														<span class="input-group-addon bg-muted">Tk</span>
													</div>
												</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<td colspan="4">
													<a href="javascript:;" class="btn" id="rr-btn"><i class="fa fa-plus"></i> Add New Row</a>
													<a href="javascript:;" style="display:none" class="text-danger btn" id="lrd-btn"><i class="fa fa-trash"></i> Remove last row</a>
												</td>
											</tr>
										</tfoot>
									</table>
								</div>
								
								<div class="form-group">
									<label>Payment method</label>
									<input type="text" class="form-control" name="pmnt_method" required="true">
								</div>
								<button type="submit" name="submit" class="btn btn-default">Add</button>
							</form> 
						</div>
					</div>
				</div>
			</div>
		 <?php include_once('includes/footer.php');?>
		</div>
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
	<script>
		$(document).ready(function() {
			rr_row = $('#rep-row').html();
			$('#rr-btn').on('click', function(){
				$('#rep-row').append(rr_row);
				$('#lrd-btn').show();
			});
			$('#lrd-btn').on('click', function(){
				$('#rep-row tr').last().remove();
				if($('#rep-row tr').length == 1) $('#lrd-btn').hide();
			});
			$(document).on("change", '.service-select', function(){
				var service_price = $(this).find("option:selected").data("spr");
				$(this).closest("tr").find(".service-price").val(service_price);
			});
		});
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