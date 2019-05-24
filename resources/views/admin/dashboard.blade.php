<?php

//$page ='dashboard';
//$directory ='';
//session_start();
//include('init.php');
//include('../dbcon.php');
?>






@include('admin.header')

@include('admin.side')
            
    <!-- PAGE CONTENT -->
    <div class="page-content">

        @include('admin.navigation')



        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
            <div class="container">
                <h1 style="text-transform: uppercase">dashboard</h1>

                <div class="table-responsive">
                    <table class="table table-hover table-bordered" style="font-size: 14px;color:#000;font-weight: bold;">
                        <tr>
                            <th style="font-size: 16px">Registration</th>
                            <th style="font-size: 16px">Count</th>
                        </tr>
                        <tr>
                            <td>Local Registrations (bike)</td>
                            <td>{{$data['localBikerCount']}}</td>
                        </tr>

                        <tr>
                            <td>Foreign Registrations (bike)</td>
                            <td>{{$data['foreignBikerCount']}}</td>
                        </tr>

                        <tr>
                            <td>Tourist Registrations(for packages)</td>
                            <td>{{$data['touristCount']}}</td>
                        </tr>

                        {{--<tr>--}}
                            {{--<td>Submit packages</td>--}}
                            {{--<td>rrrr</td>--}}
                        {{--</tr>--}}
                    </table>

                </div>


            </div>

        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->





@include('admin.footer')





<!-- modals -->
<?php //include 'common-modals.php';?>


