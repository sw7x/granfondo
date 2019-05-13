    @include('header')

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('{{ URL::to('/') }}/img/bg-img/16.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">{{ session('title') != null ? session('title') : "Form Submit" }}</h2>
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
                <h2 class="title">{{ session('status') != null ? session('status') : "form is not submitted" }}</h2>
				<div>
                    <p>{{ session('msg') != null ? session('msg') : "error" }}</p>
				</div>
       		</div>
        </div>
    </div>
    <!-- Registration form end -->


    

@include('footer')
