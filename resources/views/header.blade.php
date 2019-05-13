<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Sri Lanka GrandFondo</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ URL::to('/') }}/img/core-img/favicon.png">


     <!-- Icons font CSS-->
    <link href="{{ URL::to('/') }}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="{{ URL::to('/') }}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ URL::to('/') }}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{ URL::to('/') }}/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">




    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/style.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/main.css">


    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/main.css">
   
    

</head>

<body>

    
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Search Form -->
        <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="index.php" method="get">
                    <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
            </div>
        </div>

        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_phone"></i> <span>(+94) **** ******</span></a>
                            <a href="#"><i class="icon_mail"></i> <span>Srilankagranfondo@gmail.com</span></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php">
                            <img src="img/core-img/logo.png" alt="">
                        </a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="{{route('home')}}">Home</a></li>

                                    <li><a href="{{route('home')}}#about-section" class="nav-link">About Us</a></li>
                                    <li><a href="{{route('home')}}#map-section">Map</a></li>
                                    
                                    <li><a href="{{route('packages')}}">Packages</a>
                                        <ul class="dropdown packages">
                                            <li><a href="{{route('package-by-name','adventure-and-sports')}}">culture & heritage</a></li>
                                            <li><a href="{{route('package-by-name','beaches')}}">beaches</a></li>
                                            <li><a href="{{route('package-by-name','nature-and-wild-life')}}">nature & wild life</a></li>
                                            <li><a href="{{route('package-by-name','tea-trails-and-scenic-beauty')}}">tea trails & scenic beauty</a></li>
                                            <li><a href="{{route('package-by-name','ayurvedha-and-reflexology')}}">ayurvedha & reflexology</a></li>
                                            <li><a href="{{route('package-by-name','adventure-and-sports')}}">adventure & sports</a></li>
                                        </ul>



                                            <!-- <ul class="dropdown">
                                                <li><a href="./index.php">- #</a></li>
                                                <li><a href="contact.php">Contact</a></li>
                                                <li><a href="tourp.php">Packages</a></li>
                                                <li><a href="#">- #</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#">- # 3</a></li>
                                                        <li><a href="#">- # 3</a></li>
                                                        <li><a href="#">- # #</a></li>
                                                        <li><a href="#">- # #</a></li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                    </li>
                                    <li><a href="{{route('default-page')}}">Default page</a></li>
                                    <!-- <li><a href="#">Blog</a></li>    -->                               
                                </ul>

                                <!-- Search 
                                <div class="search-btn ml-4">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>-->

                                <!-- Book Now -->
                                <div class="book-now-btn ml-3 ml-lg-5">
                                    <a  data-toggle="modal" data-target="#choose-reg-modal" href="register.php">Register <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>

                                   

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->





    <!-- Modal -->
    <div class="modal fade" id="choose-reg-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">Choose registration method</div>

                <div class="modal-footer">

                    <a type="" href="{{route('register-local')}}" class="btn btn-primary">Local</a>
                    <a type="" href="{{route('register-foreign')}}" class="btn btn-info">Foreign</a>
                </div>

            </div>
        </div>
    </div>
