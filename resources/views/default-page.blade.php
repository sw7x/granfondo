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
                <h2 class="title">default page</h2>
				<div>

                <p>You do not need to choose between exclusively using gates or exclusively using policies 
                when building an application. Most applications will most likely contain a mixture of gates 
                and policies, and that is perfectly fine! Gates are most applicable to actions which are not 
                related to any model or resource, such as viewing an administrator dashboard. In contrast, policies 
                should be used when you wish to authorize an action for a particular model or resource.</p>

				</div>
       		</div>
        </div>
    </div>
    <!-- Registration form end -->


    

@include('footer')
