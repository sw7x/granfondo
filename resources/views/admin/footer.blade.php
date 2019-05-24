



<!-- START SCRIPTS-->
    <script type="text/javascript" src="{{ URL::to('/back-end') }}/js/plugins/jquery/jquery.min.js"></script>
    <script src="{{ URL::to('/back-end') }}/js/plugins/jquery/jquery-ui.min.js" type="text/javascript"></script>



    <script type="text/javascript" src="{{ URL::to('/back-end') }}/js/plugins/bootstrap/bootstrap.min.js"></script>





    <script type="text/javascript" src="{{ URL::to('/back-end') }}/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>


    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>




    <script type="text/javascript" src="{{ URL::to('/back-end') }}/js/script.js"></script>
    <script type="text/javascript" src="{{ URL::to('/back-end') }}/js/plugins.js"></script>
    <script type="text/javascript" src="{{ URL::to('/back-end') }}/js/actions.js"></script>





    <script>

        /* Formatting function for row details - modify as you need */
        function format ( d ) {
            // `d` is the original data object for the row
            return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                '<tr>'+
                '<td>First name:</td>'+
                '<td>'+d.fname+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>Last name:</td>'+
                '<td>'+d.lname+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>Nationality:</td>'+
                '<td>'+d.nationality+'</td>'+
                '</tr>'+
                '</table>';
        }

        /* Formatting function for row details - modify as you need */
        function format2 ( d ) {
            // `d` is the original data object for the row
            return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                '<tr>'+
                '<td>First name:</td>'+
                '<td>'+d.fname+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>Last name:</td>'+
                '<td>'+d.lname+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>Nationality:</td>'+
                '<td>'+d.nationality+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>Day count:</td>'+
                '<td>'+d.daycount+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>Others:</td>'+
                '<td>'+d.others+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>Have bicycle:</td>'+
                '<td>'+d.bicycle+'</td>'+
                '</tr>'+

                '</table>';
        }


        /* Formatting function for row details - modify as you need */
        function format3 ( d ) {
            // `d` is the original data object for the row
            return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                '<tr>'+
                '<td>First name:</td>'+
                '<td>'+d.fname+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>Last name:</td>'+
                '<td>'+d.lname+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>Registered at:</td>'+
                '<td>'+d.registeredAt+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>Gender</td>'+
                '<td>'+d.gender+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>Passport/Nic:</td>'+
                '<td>'+d.passport_nic+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>Race type:</td>'+
                '<td>'+d.race_type+'</td>'+
                '</tr>'+
                '</table>';
        }













        $(document).ready(function() {

            var $localRegTbl   = $('table#local_reg');
            var $foreignRegTbl = $('table#foreign_reg');
            var $touristRegTbl = $('table#tourist_reg');
            var $packageRegTbl = $('table#package_reg');

            if($localRegTbl.length){

                var table1 = $localRegTbl.DataTable( {
                    "columns": [
                        {
                            "className":      'details-control',
                            "orderable":      false,
                            "data":           null,
                            "defaultContent": ''
                        },

                        { "data": "email" },
                        { "data": "gender" },
                        { "data": "nic" },
                        { "data": "phone" },
                        { "data": "reg_code" },
                        { "data": "race type" },
                        { "data": "fname","visible": false },
                        { "data": "lname","visible": false },
                        { "data": "nationality","visible": false },
                    ],
                    "order": [[1, 'asc']]
                });
            }

            if($foreignRegTbl.length){

                var table2 = $foreignRegTbl.DataTable( {
                    "columns": [
                        {
                            "className":      'details-control',
                            "orderable":      false,
                            "data":           null,
                            "defaultContent": ''
                        },

                        { "data": "email" },
                        { "data": "gender" },
                        { "data": "passport" },
                        { "data": "phone" },
                        { "data": "reg_code" },
                        { "data": "race type" },
                        { "data": "fname","visible": false },
                        { "data": "lname","visible": false },
                        { "data": "nationality","visible": false },
                        { "data": "daycount","visible": false },
                        { "data": "others","visible": false },
                        { "data": "bicycle","visible": false }




                    ],
                    "order": [[1, 'asc']]
                });
            }

            if($touristRegTbl.length){

                var table3 = $touristRegTbl.DataTable( {
                    "columns": [
                        {
                            "className":      'details-control',
                            "orderable":      false,
                            "data":           null,
                            "defaultContent": ''
                        },

                        { "data": "email" },
                        { "data": "gender" },
                        { "data": "passport" },
                        { "data": "phone" },
                        { "data": "reg_code" },
                        { "data": "race type" },
                        { "data": "fname","visible": false },
                        { "data": "lname","visible": false },
                        { "data": "nationality","visible": false },
                        { "data": "daycount","visible": false },
                        { "data": "others","visible": false },
                        { "data": "bicycle","visible": false }




                    ],
                    "order": [[1, 'asc']]
                });
            }

            if($packageRegTbl.length){

                var table4 = $packageRegTbl.DataTable( {
                    "columns": [
                        {
                            "className":      'details-control',
                            "orderable":      false,
                            "data":           null,
                            "defaultContent": ''
                        },

                        { "data": "email" },
                        { "data": "gender","visible": false },
                        { "data": "passport_nic","visible": false },
                        { "data": "phone" },
                        { "data": "reg_code" },
                        { "data": "race_type","visible": false },
                        { "data": "fname","visible": false },
                        { "data": "lname","visible": false },
                        { "data": "nationality","visible": false },


                        { "data": "package" },
                        { "data": "registeredAt","visible": false },
                        { "data": "customerType"}




                    ],
                    "order": [[1, 'asc']]
                });
            }













            // Add event listener for opening and closing details
            $localRegTbl.children('tbody').on('click', 'td.details-control', function () {
                var tr = $(this).closest('tr');
                var row = table1.row( tr );

                if ( row.child.isShown() ) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else {
                    // Open this row
                    row.child( format(row.data()) ).show();
                    tr.addClass('shown');
                }
            });

            // Add event listener for opening and closing details
            $foreignRegTbl.children('tbody').on('click', 'td.details-control', function () {
                var tr = $(this).closest('tr');
                var row = table2.row( tr );

                if ( row.child.isShown() ) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else {
                    // Open this row
                    row.child( format2(row.data()) ).show();
                    tr.addClass('shown');
                }
            });

            // Add event listener for opening and closing details
            $touristRegTbl.children('tbody').on('click', 'td.details-control', function () {
                var tr = $(this).closest('tr');
                var row = table3.row( tr );

                if ( row.child.isShown() ) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else {
                    // Open this row
                    row.child( format2(row.data()) ).show();
                    tr.addClass('shown');
                }
            });

            // Add event listener for opening and closing details
            $packageRegTbl.children('tbody').on('click', 'td.details-control', function () {
                var tr = $(this).closest('tr');
                var row = table4.row( tr );

                if ( row.child.isShown() ) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else {
                    // Open this row
                    row.child( format3(row.data()) ).show();
                    tr.addClass('shown');
                }
            });



        });
    </script>










</body>
</html>
