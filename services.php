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
    <title>Budget Beuty Parlour</title>
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
	
	<section class="section-spacing">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2><span>Our Services</span></h2>
						<p>Our product is fully personalized and well balanced for all age of customers or adults. We maintain the standards by lorem ipsum and certified by dolor set amet.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a href="service-single.html"><img src="img/hair1.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Hair Cut</a></h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a href="service-single.html"><img src="img/servicemake.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Bridal Makeup</a></h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
							
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a href="service-single.html"><img src="img/facial.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Facial</a></h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
							
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a href="service-single.html"><img src="img/ServiceMani.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Manicure</a></h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a href="service-single.html"><img src="img/servicePad.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Padicure</a></h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a href="service-single.html"><img src="img/serviceMehen.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Body Message</a></h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="contact-us.html" class="btn btn-primary">Contact us</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end services -->
	
	
	 <section class="ftco-section ftco-pricing">
			<div class="container">
				<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<h1 class="big">Pricing</h1>
            <h2 class="mb-4">Our Service Prices</h2>
            <p>Budget Beauty Parlour will change the way you think about a parlor. Full service comfort, friendly staff and a relaxing atmosphere will give you an experience that will leave you glowing both inside and out!!!</p>
          </div>
        </div>
          <table class="table table-bordered">
             <thead> 
              <tr> 
                <th>#</th>
                <th>Service Name</th> 
                <th>Service Price</th>
                <th>Description</th> 
              </tr> 
            </thead> 
            <tbody>
            <?php
              $ret=mysqli_query($con,"select *from  tblservices");
              $cnt=1;
              while ($row=mysqli_fetch_array($ret)) {
            ?>

            <tr>
              <th scope="row"><?php echo $cnt;?></th>
               <td><?php  echo $row['ServiceName'];?></td> 
               <td><?php  echo $row['Cost'];?></td>
               <td><?php  echo $row['description'];?></td>
            </tr>   
            <?php $cnt=$cnt+1; }?>
            </tbody> 
          </table> 
			 </div>
		</section>
		
<!--		service table end-->
	<section class="section-spacing">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="appoinment-text wow fadeIn">
						<h2>Make Home Appointment?</h2>
						<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos, In massa urna pellentesque habitant morbi tristique senectus.</p>
						<p>Call us : 002-6666-8888 or fill out our online booking & equiry form and we’ll contact you.</p>
						<a href="#" data-toggle="modal" data-target="#appointment" class="btn btn-primary">Make Appointment</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="appoinment-img text-md-right text-center wow fadeIn">
						<img class="tilt-img" src="img/HomeImg.jpg" alt="">
					</div>
				</div>
			</div>			
		</div>
	</section>
	<!-- end appointment -->
	
	<?php include_once('includes/footer.php');?>
	<!-- end footer -->
	
	<!-- Bact to top -->
	<div class="back-top">
		<a href="#"><i class="fa fa-angle-up"></i></a>
	</div>
	
	<!-- Appointment Modal -->
    <div class="modal fade modal-vcenter" id="appointment" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2>REQUEST AN APPOINTMENT</h2>
                </div>
                <div class="modal-body">
					<form id="reservation-form" method="post" data-toggle="validator">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>First Name*</label>
									<input type="text" id="rfname" class="form-control" name="fname" required data-error="Please enter your first name">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" id="rlname" class="form-control" name="lname" >
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Email*</label>
									<input type="email" id="remail" class="form-control" name="email" required data-error="Please enter valid email address">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Phone*</label>
									<input type="tel" id="rphone" class="form-control" name="phone" required data-error="Please enter your phone number">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
						</div>
						
						<div class="form-group">
							<label>Address</label>
							<input type="text" id="raddress" class="form-control" name="address">
						</div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label>Zip Code</label>
									<input type="text" id="rzipcode" class="form-control" name="zipcode">
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-8">
								<div class="form-group">
									<label>City</label>
									<input type="text" id="rcity" class="form-control" name="city">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label>Service</label>
							<select id="rselect-service" class="select-option" name="service">
								<option value="Herbal Spa">Herbal Spa</option>
								<option value="Skin Care">Skin Care</option>
								<option value="Stone Message">Stone Message</option>
								<option value="Body Message">Body Message</option>
								<option value="Aromatherapy">Aromatherapy</option>
								<option value="Hydrotherapy">Hydrotherapy</option>
							</select>
						</div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Reservation Date*</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" id="rdate" class="form-control date-pic" name="date" placeholder="mm/dd/yyyy" required data-error="Please select reservation date">
									</div><!-- /.input group -->
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="bootstrap-timepicker">
									<div class="form-group">
										<label>Time picker*</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-clock-o"></i>
											</div>
											<input type="text" id="rtime" name="time" class="form-control timepicker" required data-error="Please select reservation time">
										</div><!-- /.input group -->
										<div class="help-block with-errors"></div>
									</div><!-- /.form group -->
								</div>
							</div>
						</div>
						
						<div class="submit-block text-right">
							<a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
							<input value="Submit" name="submit" class="btn btn-primary" type="submit">
						</div>
						
						<div id="msgSubmitRes" class="h3 text-center hidden"></div>
						
					</form>
                </div>
            </div>
        </div>
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
