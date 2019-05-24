
@include('admin.header')

@include('admin.side')

<!-- PAGE CONTENT -->
<div class="page-content">

@include('admin.navigation')



<!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
        <div class="col-md-12">
            <h1 style="text-transform: uppercase">package registration list</h1>

            <div class="table-responsive">

                <table id="package_reg" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Passport</th>//
                        <th>Phone</th>
                        <th>reg_code</th>
                        <th>race type</th>
                        <th>fname</th>
                        <th>lname</th>
                        <th>Nationality</th>
                        <th>Package</th>
                        <th>Registered date</th>
                        <th>Customer type</th>








                    </tr>
                    </thead>

                    <tbody>

                    @foreach($data as $row)
                        <tr>
                            <td></td>
                            <td>{{$row['email']}}</td>
                            <td>{{$row['gender']}}</td>
                            <td>{{$row['passport/nic']}}</td>
                            <td>{{$row['phone']}}</td>
                            <td>{{$row['regCode']}}</td>
                            <td>{{$row['race_type']}}</td>

                            <td>{{$row['fname']}}</td>
                            <td>{{$row['lname']}}</td>
                            <td>{{$row['nationality']}}</td>


                            <th>{{$row['packageName']}}</th>
                            <th>{{$row['registerdAt']}}</th>
                            <th>{{$row['customerType']}}</th>


                        </tr>
                    @endforeach

                    </tbody>
                </table>


                <style>
                    td.details-control {
                        background: url('{{ URL::to('/') }}/back-end/img/details_open.png') no-repeat center center;
                        cursor: pointer;
                    }
                    tr.shown td.details-control {
                        background: url('{{ URL::to('/') }}/back-end/img/details_close.png') no-repeat center center;
                    }
                </style>

            </div>


        </div>

    </div>
    <!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->





@include('admin.footer')
