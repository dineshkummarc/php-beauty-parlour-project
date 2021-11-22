<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Budget Beauty Parlour</title>
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
	<link href="css/animate.css" rel="stylesheet">
    <!-- Venobox CSS -->
	<link href="css/venobox.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<!--Chosen-->
	<link href="css/chosen.css" rel="stylesheet">
	<!--Time picker-->
	<link href="css/bootstrap-timepicker.min.css" rel="stylesheet">
	<!--Date picker-->
	<link href="css/datepicker.css" rel="stylesheet">
	<!-- Font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,800,900" rel="stylesheet">
	<!-- Main CSS -->
	<link href="css/style.css" rel="stylesheet">
	
</head>
<body>
	<!--Preload-->
	 <?php include_once('includes/header.php');?>
	<!-- end banner -->

	<!-- end services -->
	
	
	 <section class="ftco-section ftco-pricing">
			<div class="container">
				<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	
          	
            <h2 class="mb-4"> Monthly Offers</h2>
            
          </div>
        </div>
          <table class="table table-bordered">
             <thead> 
              <tr> 
                <th>#</th>
                <th>Service Name</th> 
                <th>Offer Price</th> 
              </tr> 
            </thead> 
            <tbody>
            <?php
              $ret=mysqli_query($con,"select *from  tbloffers");
              $cnt=1;
              while ($row=mysqli_fetch_array($ret)) {
            ?>

            <tr>
              <th scope="row"><?php echo $cnt;?></th>
               <td><?php  echo $row['name'];?></td> 
               <td>
                <del style="padding-right: 20px; color: red;"><?php  echo $row['oldprice'];?></del>
                <?php  echo $row['newprice'];?>
               </td> 
            </tr>   
            <?php $cnt=$cnt+1; }?>
            </tbody> 
          </table> 
			 </div>
		</section>

    <section class="ftco-section ftco-pricing">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
            
            
            <h2 class="mb-4"> Vip Customer will get 5% discount in all services </h2>
            
          </div>
        </div>
        </div>
    </section>
		
<!--		service table end-->
	
	<!-- end appointment -->
	
	<?php include_once('includes/footer.php');?>
	<!-- end footer -->
	
	<!-- Bact to top -->
	<div class="back-top">
		<a href="#"><i class="fa fa-angle-up"></i></a>
	</div>
	
	
    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/venobox.min.js"></script>
	<script src="js/SmoothScroll.js"></script>
	<script src="js/tilt.jquery.js"></script>
	<script src="js/bootstrap-timepicker.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/chosen.jquery.js"></script>
	<script src="mail/js/form-validator.min.js"></script>
	<script src="mail/js/contact-form-script.js"></script>
    <script src="js/script.js"></script>
	
</body>
</html>
