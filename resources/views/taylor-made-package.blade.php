




    @include('header')

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('{{ URL::to('/') }}/img/bg-img/16.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">TaylorMade Form</h2>
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
                    <input type="hidden" name="packageName" value="{{ $packageName != 'null' ? $packageName : old('packageName') }}">

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
                                <label class="label">Mobile (WhatsApp/Viber)</label>
                                <input class="input--style-4" type="text" name="phone" value="{{ old('phone')}}" required>
                                @if ($errors->has('phone'))
                                    <div class="error">{{ $errors->first('phone') }}</div>
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
                        <div class="col-12">
                            <div class="input-group">
                                <label class="label">How many days do you wish to stay in Sri Lanka</label>
                                <input class="input--style-4" type="text" name="day_count" placeholder="" value="{{ old('day_count')}}" required>
                                @if ($errors->has('day_count'))
                                    <div class="error">{{ $errors->first('day_count') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="input-group">
                                <label class="label">Number of persons</label>
                                <input class="input--style-4" type="text" name="person_count" placeholder="" value="{{ old('person_count')}}" required>
                                @if ($errors->has('person_count'))
                                    <div class="error">{{ $errors->first('person_count') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>






                    <div class="form-group">
                        <label for="location" class="label">Your preferred locations and activities</label>
                        <textarea style="width: 100%;resize: none;" id="location" name="location" cols="40" rows="3" class="input--style-4 aform-control" autocomplete="off" required>{{ old('location')}}</textarea>
                        @if ($errors->has('location'))
                            <div class="error">{{ $errors->first('location') }}</div>
                        @endif
                    </div>






                    <div class="row row-space">
                        <div class="col-12">
                            <label class="label">Hotel type ?</label>
                            <div class="p-t-10c">
                                <label class="radio-container m-r-45">3 Star
                                    <input type="radio" name="hotel-type" value="3star" @if(old('hotel-type')=='3star') checked @endif required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container m-r-45">4 Star
                                    <input type="radio" name="hotel-type" value="4star" @if(old('hotel-type')=='4star') checked @endif>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container m-r-45">5 Star
                                    <input type="radio" name="hotel-type" value="5star" @if(old('hotel-type')=='5star') checked @endif>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Other
                                    <input type="radio" name="hotel-type" value="other" @if(old('hotel-type')=='other') checked @endif>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            @if ($errors->has('hotel-type'))
                                <div class="error">{{ $errors->first('hotel-type') }}</div>
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
