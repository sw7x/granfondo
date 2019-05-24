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


                    {{--{{$_POST['api_url']}}--}}
                    <h2 class="title">{{$title}} </h2>

                        <form method="POST" action="{{route($form_action_route)}}">
                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label">first name</label>
                                        <input class="input--style-4" type="text" name="first_name" required value="{{ old('first_name')}}">
                                        @if ($errors->has('first_name'))
                                            <div class="error">{{ $errors->first('first_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label">last name</label>
                                        <input class="input--style-4" type="text" name="last_name" required value="{{ old('last_name')}}">
                                        @if ($errors->has('last_name'))
                                            <div class="error">{{ $errors->first('last_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{csrf_field ()}}

                            <input type="hidden" name="package-id" value="{{ $package_id != 'null' ? $package_id : old('package-id') }}">


                            <div class="row row-space">
                                <div class="col-12">
                                    <div class="input-group">
                                        <label class="label">email</label>
                                        <input class="input--style-4" type="email" name="email" value="{{ old('email')}}" required>
                                        @if ($errors->has('email'))
                                            <div class="error">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label">Nationalty</label>
                                        <input class="input--style-4" type="text" name="nationality" required value="{{ old('nationality')}}">
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
                                <label class="label">Passport Number / Natinaol ID Number</label>
                                <input class="input--style-4" type="text" name="passport" placeholder="" value="{{ old('passport')}}" required>
                                @if ($errors->has('passport'))
                                    <div class="error">{{ $errors->first('passport') }}</div>
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
                                        <label class="label">Mobile (WhatsApp/Viber)</label>
                                        <input class="input--style-4" type="text" name="phone" value="{{ old('phone')}}" required>
                                        @if ($errors->has('phone'))
                                            <div class="error">{{ $errors->first('phone') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="input-group">
                                <label class="label">How many days do you wish to stay in Sri Lanka</label>
                                <input class="input--style-4" type="text" name="day_count" placeholder="" value="{{ old('day_count')}}" required>
                                @if ($errors->has('day_count'))
                                    <div class="error">{{ $errors->first('day_count') }}</div>
                                @endif
                            </div>

                            <div class="input-group">
                                <label class="label">Number of Any other non participant(s) who will join with you.</label>
                                <input class="input--style-4" type="text" name="join_others" placeholder="" value="{{ old('join_others')}}" required>
                                @if ($errors->has('join_others'))
                                    <div class="error">{{ $errors->first('join_others') }}</div>
                                @endif
                            </div>

                            <div class="col-6">
                                <label class="label">Will you bring your bicycle ?</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Yes
                                        <input type="radio" name="bicycle" value="yes" @if(old('bicycle')=='yes') checked @endif required>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">No
                                        <input type="radio" name="bicycle" value="no" @if(old('bicycle')=='no') checked @endif>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                @if ($errors->has('bicycle'))
                                    <div class="error">{{ $errors->first('bicycle') }}</div>
                                @endif
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
