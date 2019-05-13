    @include('header')

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('{{ URL::to('/') }}/img/bg-img/16.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Event Registration</h2>
                        <nav aria-label="breadcrumb">
                          

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    

   


  

  



<!-- Registration form start -->
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form - Local</h2>


                    
                    <form method="POST" action="{{route('register-local-submit')}}">
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">

                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="first_name" value="{{ old('first_name')}}" required>
                                    @if ($errors->has('first_name'))
                                        <div class="error">{{ $errors->first('first_name') }}</div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="last_name" value="{{ old('last_name')}}" required>
                                    @if ($errors->has('last_name'))
                                        <div class="error">{{ $errors->first('last_name') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{csrf_field ()}}
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Nationalty</label>
                                    <input class="input--style-4" type="text" name="nationality" value="{{ old('nationality')}}" required>
                                    @if ($errors->has('nationality'))
                                        <div class="error">{{ $errors->first('nationality') }}</div>
                                    @endif
                                </div>
                             
                            </div> 
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Catagory</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" name="gender" value="male" @if(old('gender')=='male') checked @endif required>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="female" @if(old('gender')=='female') checked @endif>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    @if ($errors->has('gender'))
                                        <div class="error">{{ $errors->first('gender') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Natinaol ID Number</label>
                            <input class="input--style-4" type="text" name="nic" placeholder="" value="{{ old('nic')}}" required>
                            @if ($errors->has('nic'))
                                <div class="error">{{ $errors->first('nic') }}</div>
                            @endif
                        </div>



                        <div class="row row-space">

                                <div class="col-6">
                                    <label class="label">Race Type</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Full Race
                                            <input type="radio" name="race_type" value="full-race" @if(old('race_type')=='full-race') checked @endif required>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Half Race
                                            <input type="radio" name="race_type" value="half-race" @if(old('race_type')=='half-race') checked @endif>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                     @if ($errors->has('race_type'))
                                         <div class="error">{{ $errors->first('race_type') }}</div>
                                     @endif
                                </div>
                       
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="text">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" value="{{ old('phone')}}" required>
                                </div>
                                @if ($errors->has('phone'))
                                    <div class="error">{{ $errors->first('phone') }}</div>
                                @endif
                            </div>
                       
                        </div>

                     

                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                            <button class="btn btn--radius-2 btn-danger" type="reset">Reset</button>
                        </div>

                    </form>
           </div>
            </div>
        </div>
        <!-- Registration form end -->


    

@include('footer')
