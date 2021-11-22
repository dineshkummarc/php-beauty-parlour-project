<?php include('includes/dbconnection.php'); ?>
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
    <?php include_once('includes/header.php');?>
    <div class="container">
        <section>
            <div id="review">
                <h1 style="text-align:center;margin: 20px 0;">Your feedback:</h1>
                <form action="service_feedback.php" method="post">
                    <div class="form-group">
                        <h2><label for="name" class="text-center m-auto">Type your name: </label></h2>
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend ml-5">
                                <span class="input-group-text">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" id="name" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <h2><label for="name" class="text-center m-auto">Type your Email: </label></h2>
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend ml-5">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input class="form-control" type="email" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <h2><label for="comment">Type Your comment: </label></h2>
                        <div class="input-group">
                            <div class="input-group-prepend ml-5">
                                <span class="input-group-text">
                                <i class="fa fa-pencil" aria-hidden="true"></i>

                                </span>

                            </div>
                            <textarea class="form-control" id="comment" rows="3" name="comment" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success rev" name="submit" type="submit" value="submit">
                    </div>
                </form>
            </div>
        </section>
        <section class="ftco-section row ftco-no-pb text-center">
            <div class="container">
                <div class="row">
                    <div style="margin: 0 auto;" class="col-8">
                        <h3 class="ml-5">Customer's feedback (for services):</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th colspan="2" scope="col">Comment</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
	  $comsql = mysqli_query($con, "SELECT * FROM feedback WHERE 1 ");
	  $count = 1;
	  while ($comrow = mysqli_fetch_assoc($comsql)) {
	?>
                                <tr>
                                    <th scope="row"><?= $count ;?></th>
                                    <td><?= $comrow['name'] ;?></td>
                                    <td colspan="2"><?= $comrow['comment'] ;?></td>
                                    <td><?= $comrow['date'] ;?></td>
                                </tr>
                                <?php  
	  $count++;
	}
	?>
                            </tbody>
                        </table>
                        <h2 class="display-5 text-danger ml-5"> Thank You for Your Valuable Comments</h2>
                    </div>
                </div>
            </div>
        </section>
    </div>

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
