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
    <link rel="stylesheet" href="css/font-awesome.css">
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
    <section id="section-spacing">
        <div class="sal">
            <div id="salon" class="page section desktop">

                <div class="container">


                    <div class="sixteen columns py-5">

                        <center>
                            <h1 class="display-1"><span style="color: deeppink" >BUDGET BEUTY</span> PARLOUR</h1>
                        </center>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img alt="" class="img-circle salonImage one-third column" src="img/d.jpg"> </div>

                        <div class="col-md-4">
                            <img alt="" class="scale-with-grid salonImage one-third column" src="img/dd.jpg"> </div>

                        <div class="col-md-4">
   
                            <img alt="" class="scale-with-grid salonImage one-third column" src="img/ddd.jpg">
                        </div>
                    </div>

                    <div class="twelve columns offset-by-two">
                                                 <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>


                        <div class="introtext">

                            <p><strong style="float:left; color: red; margin-left: -100px; font-size: 20px"><?php  echo $row['PageTitle'];?></strong></p>

                            <br>

                            <p class="lead" style="text-align:justify;"><?php  echo $row['PageDescription'];?>
                                </p>

                        </div>
                         <?php } ?>

                    </div>

                </div>

            </div>
        </div>
    </section>
    
    <!-- end our history -->

    <section class="section-spacing inverse-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><span>Meet Our Experts</span></h2>
                        <p>Our product is fully personalized and well balanced for all age of customers or adults. We maintain the standards by lorem ipsum and certified by dolor set amet.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team wow fadeIn">
                        <div class="thumb">
                            <img src="img/team/1.jpg" alt="">
                        </div>
                        <div class="team-info text-center">
                            <h3>Tasfia Jaman</h3>
                            <h6>Hair Expert</h6>
                        </div>
                        <div class="team-overlay text-center">
                            <h3>Tasfia jaman</h3>
                            <h6>Hair Expert</h6>
                            <ul class="social-icons">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team wow fadeIn">
                        <div class="thumb">
                            <img src="img/team/2.jpg" alt="">
                        </div>
                        <div class="team-info text-center">
                            <h3>Saimoon Nahar</h3>
                            <h6>Message Expert</h6>
                        </div>
                        <div class="team-overlay text-center">
                            <h3>Saimoon Nahar</h3>
                            <h6>Message Expert</h6>
                            <ul class="social-icons">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team wow fadeIn">
                        <div class="thumb">
                            <img src="img/team/3.jpg" alt="">
                        </div>
                        <div class="team-info text-center">
                            <h3>Papia Akter</h3>
                            <h6>Facial Expert</h6>
                        </div>
                        <div class="team-overlay text-center">
                            <h3>Papia Akter</h3>
                            <h6>Facial Expert</h6>
                            <ul class="social-icons">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team wow fadeIn">
                        <div class="thumb">
                            <img src="img/team/4.jpg" alt="">
                        </div>
                        <div class="team-info text-center">
                            <h3>Sharmin Akter</h3>
                            <h6>Facial Expert</h6>
                        </div>
                        <div class="team-overlay text-center">
                            <h3>Sharmin Akter</h3>
                            <h6>Facial Expert</h6>
                            <ul class="social-icons">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team wow fadeIn">
                        <div class="thumb">
                            <img src="img/team/5.jpg" alt="">
                        </div>
                        <div class="team-info text-center">
                            <h3>Muntaha</h3>
                            <h6>Facial Expert</h6>
                        </div>
                        <div class="team-overlay text-center">
                            <h3>Muntaha</h3>
                            <h6>Facial Expert</h6>
                            <ul class="social-icons">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team wow fadeIn">
                        <div class="thumb">
                            <img src="img/team/6.jpg" alt="">
                        </div>
                        <div class="team-info text-center">
                            <h3>Rahima Rahman</h3>
                            <h6>Mehedi Expert</h6>
                        </div>
                        <div class="team-overlay text-center">
                            <h3>Rahima Rahman</h3>
                            <h6>Mehedi Expert</h6>
                            <ul class="social-icons">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team wow fadeIn">
                        <div class="thumb">
                            <img src="img/team/7.jpg" alt="">
                        </div>
                        <div class="team-info text-center">
                            <h3>Farzana Rahman</h3>
                            <h6>Manicure Expert</h6>
                        </div>
                        <div class="team-overlay text-center">
                            <h3>Rahima Rahman</h3>
                            <h6>Manicure Expert</h6>
                            <ul class="social-icons">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team wow fadeIn">
                        <div class="thumb">
                            <img src="img/team/8.jpg" alt="">
                        </div>
                        <div class="team-info text-center">
                            <h3>Sadia Akter</h3>
                            <h6>Bridal Makeup Expert</h6>
                        </div>
                        <div class="team-overlay text-center">
                            <h3>Sadia Akter</h3>
                            <h6>Bridal Makeup Expert</h6>
                            <ul class="social-icons">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="contact-us.php" class="btn btn-primary">Contat Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end team member -->



    <?php include_once('includes/footer.php');?>

    <!-- end footer -->

    <!-- Bact to top -->
    <div class="back-top">
        <a href="#"><i class="fa fa-angle-up"></i></a>
    </div>

    <!-- Start Video Modal -->
    <div class="modal fade modal-vcenter" id="video-modal" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times-circle-o"></i></button>
                </div>
                <div class="modal-body">
                    <iframe width="760" height="500" src="https://www.youtube.com/embed/EEnkifmw25U?rel=0&amp;showinfo=0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video Modal -->

    <!-- Appointment Modal -->
    <div class="modal fade modal-vcenter" id="appointment2" role="dialog">
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
                                    <input type="text" id="rlname" class="form-control" name="lname">
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
