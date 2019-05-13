    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row align-items-baseline justify-content-between">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="img/core-img/logo2.png" alt=""></a>

                            <h4>+94 *********</h4>
                            <span>srilankagranfondo@gmail.com</span>
                            <span>2nd Floor,# 275,Nawala Rd, Nawala,Sri Lanka.</span>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Our Blog</h5>

                            <!-- Single Blog Area -->
                            <div class="latest-blog-area">
                                 <a href="#" class="post-title">GEOEGIA Helen, GA</a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> Jan 02, 2019</span>
                            </div>

                            <!-- Single Blog Area -->
                            <div class="latest-blog-area">
                                <a href="#" class="post-title">GEOEGIA Helen, GA</a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> April 28, 2019</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Links</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="index.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Home</a></li>
                                <li><a href="#about-section"><i class="fa fa-caret-right" aria-hidden="true"></i> about Us</a></li>
                                <li><a href="#map-section"><i class="fa fa-caret-right" aria-hidden="true"></i> Map</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Blog</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-8 col-lg-4">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Subscribe Newsletter</h5>
                            <span>Subscribe our newsletter gor get notification about new updates.</span>

                            <!-- Newsletter Form -->
                            <form action="" class="nl-form">
                                <input type="email" class="form-control" placeholder="Enter your email...">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Product By Big Smile Voyage Sri Lanka</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="{{ URL::to('/') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!-- Popper -->
    <script src="{{ URL::to('/') }}/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ URL::to('/') }}/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="{{ URL::to('/') }}/js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="{{ URL::to('/') }}/js/default-assets/active.js"></script>
    
    <script src="{{ URL::to('/') }}/vendor/select2/select2.min.js"></script>

    <script src="{{ URL::to('/') }}/vendor/datepicker/daterangepicker.js"></script>


    <script src="{{ URL::to('/') }}/vendor/countdowntime/moment.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/countdowntime/moment-timezone.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/countdowntime/countdowntime.js"></script>
    <script>


        var isHaveTimerDiv = $('.timerDiv').length;


        if(isHaveTimerDiv){


                $.ajax(
                {
                    type: "POST",
                    dataType:'json',
                    //url:"ajaxtest.php",
                    url:'/home/get-time',
                    async:true,
                    data:{
                        "_token": "{{ csrf_token() }}",
                    },
                    beforeSend: function() {

                    },
                    success:function(data)
                    {
                        //////////

                    },
                    error:function(request,errorType,errorMessage)
                    {
//                        $("button.submit").prop('disabled', false);
//                        $("button.submit").text('Request a free quote');
//                        alert ('error - '+errorType+'with message - '+errorMessage);
                    }

                });



        }





        $('.cd100').countdown100({
            /*Set Endtime here*/
            /*Endtime must be > current time*/

            //endtimeYear: 0,
            //endtimeMonth: 0,

            endtimeDate: 112,
            endtimeHours: 11,
            endtimeMinutes: 5,
            endtimeSeconds: 0,
            timeZone: ""
            // ex:  timeZone: "America/New_York"
            //go to " http://momentjs.com/timezone/ " to get timezone
        });
    </script>
<!--===============================================================================================-->
    <script src="{{ URL::to('/') }}/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="{{ URL::to('/') }}/js/main.js"></script>



</body>

</html>
