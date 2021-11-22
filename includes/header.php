<?php
  session_start()
?>

<div class="preloader">
        <div class="preloader_image">
            <div class="sk-double-bounce">
                <div class="sk-child sk-double-bounce1"></div>
                <div class="sk-child sk-double-bounce2"></div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" width="150px" height="150px" alt="Logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reviews.php">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="offer.php">Offer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="accepted_appoint.php">Accepted List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vip_cust.php">Vip List</a>
                    </li>
                    <li class="nav-item btn-appointment">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#appointment">Saloon Appointment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!--    banner-->
<section class="carousel slide" id="banner" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image:url(img/1.jpg)">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="hero-text">

                                    <h1 class="animated fadeInUp" style="color:deeppink">Beauty In Budget</h1>
                                    <p class="animated fadeInUp" style="color:deeppink">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt ullamcorper magna, in tincidunt ex auctor et.</p>
                                    <a href="contact-us.php" class="btn btn-primary animated fadeInUp">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image:url(img/2.jpg)">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="hero-text">
                                    <h1 class="animated fadeInUp" style="color:deeppink">Beauty In Budget</h1>
                                    <p class="animated fadeInLeft" style="color:deeppink">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt ullamcorper magna, in tincidunt ex auctor et.</p>
                                    <a href="contact-us.php" class="btn btn-primary animated fadeInLeft">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image:url(img/3.jpg)">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="hero-text">
                                    <h1 class="animated fadeInUp" style="color:deeppink">Beauty In Budget</h1>
                                    <p class="animated fadeInRight" style="color:deeppink">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt ullamcorper magna, in tincidunt ex auctor et.</p>
                                    <a href="contact-us.php" class="btn btn-primary animated fadeInRight">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <ol class="carousel-indicators">
                <li data-target="#banner" data-slide-to="0" class="active"></li>
                <li data-target="#banner" data-slide-to="1"></li>
                <li data-target="#banner" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
<!--    banner end-->
