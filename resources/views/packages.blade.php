
    @include('header')

   

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Tour Packges</h2>
                        <nav aria-label="breadcrumb">
                          <!--  <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Room</li>
                            </ol> -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/19.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2>CULTURE & HERITAGE</h2>
                            
                        <p>Sri Lanka has history that runs from a period before 2500 years .Due to its archeological sites , historical monuments and ruins ,Sri Lanka is recognized by UNESCO as a destination with a rich culture and heritage. </p>
                            <h4> <span> </span></h4>
                           
                            <a href="{{route('package-by-name','culture-and-heritage')}}" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/20.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                       <div class="room-content">
                          <h2>Beaches</h2>
                            
                        <p>Highly indented by the surrounding Indian ocean , Sri Lanka is the land of beaches . They are pristine and provide the tranquility you would want to experience on a long golden sunny strip of beach .</p>
                            <h4> <span> </span></h4>
                            <a href="{{route('package-by-name','beaches')}}" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/24.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                             <h2>Nature & Wild Life</h2>
                            
                        <p>ur compact island offers an array of fauna and flora in which authentic wild life is abundant . highlighted as one of the top five global diversity hotspots , sri Lanka encompasses 25 national parks which are different to one another .</p>
                            <h4> <span> </span></h4>
                            <a href="{{route('package-by-name','nature-and-wild-life')}}" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="700ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/21.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                       <div class="room-content">
                            <h2>Tea Trails & Scenic Beauty</h2>
                            
                        <p>World famous Ceylon tea is produced in Sri Lanka . Therefore it is full of lush tea estates in the low grown and the high grown areas .</p>
                            <h4> <span> </span></h4>
                            <a href="{{route('package-by-name','tea-trails-and-scenic-beauty')}}" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="900ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/23.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                       <div class="room-content">
                            <h2>Ayurvedha & Reflexology</h2>
                            
                        <p>Sri Lanka possesses its own indigenous treatment for ailments known as Ayurvedha . It is a system that synergizes the mind and the body for curing and guarantees recuperation.</p>
                            <h4> <span> </span></h4>
                            <a href="{{route('package-by-name','ayurvedha-and-reflexology')}}" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                            <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="900ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/25.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                       <div class="room-content">
                             <h2>Adventure & Sports</h2>
                            
                        <p>Sri Lanka is a natural choice for adventure and sports . You may be an adventurous globe trotter or sports fanatic who wants to come with your team for couple of cricket matches or rugby games .</p>
                            <h4> <span> </span></h4>
                            <a href="{{route('package-by-name','adventure-and-sports')}}" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Pagination
                    <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                    -->

                </div> 

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area 
                    <div class="hotel-reservation--area mb-100">
                        <form action="#" method="post">
                            <div class="form-group mb-30">
                                <label for="checkInDate">Dates</label>
                                <div class="input-daterange" id="datepicker">
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <input type="text" class="input-small form-control" id="checkInDate" name="checkInDate" placeholder="Check In">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="input-small form-control" name="checkOutDate" placeholder="Check Out">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="guests">Guests</label>
                                <div class="row">
                                    <div class="col-6">
                                        <select name="adults" id="guests" class="form-control">
                                            <option value="adults">Adults</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <select name="children" id="children" class="form-control">
                                            <option value="children">Children</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-50">
                                <div class="slider-range">
                                    <div class="range-price">Max Price: $0 - $3000</div>
                                    <div data-min="0" data-max="3000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="3000" data-label-result="Max Price: ">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn roberto-btn w-100">Find Package</button>
                            </div>
                        </form> 
                    </div>-->
                </div>


                
            </div>
        </div>
    </div> 
    <!-- Rooms Area End -->

    <!-- Call To Action Area Start -->
  <!-- <section class="roberto-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/1.jpg);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>
                            <h6>Contact (+12) 345-678-9999 to book directly or for advice</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                        <a href="#" class="btn roberto-btn mb-50">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Call To Action Area End -->


    <!-- Rooms Area End -->
    <!-- Partner Area Start -->
   <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                    
                        <a href="#" class="partner-logo"><img src="img/core-img/p1.png" alt=""></a>
                     
                        <a href="#" class="partner-logo"><img src="img/core-img/p2.png" alt=""></a>
                     
                        <a href="#" class="partner-logo"><img src="img/core-img/p3.png" alt=""></a>
                     
                        <a href="#" class="partner-logo"><img src="img/core-img/p4.png" alt=""></a>
                      
                        <a href="#" class="partner-logo"><img src="img/core-img/p5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Partner Area End -->


    @include('footer')
  

   

