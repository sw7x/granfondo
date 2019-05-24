<?php

namespace App\Http\Controllers;

use App\Biker_foreign;
use App\Biker_local;
use App\Customer;
use App\Package;
use App\Tourist;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    //
    public function __construct ()
    {
        //$this->middleware ('adminPanel');
    }


    public function aaa(){
        return view('admin/dashboard');
    }


    public function index(){

        //dd(session('adminLogin'));

        if(session('adminLogin') != 'true'){
            session(['adminLogin' => 'false']);
            return view('admin/index');
        }else{
            return redirect()->route('admin_dashboard');

        }
    }


    public function login(Request $request){
        $username = $request->input('admin_name');
        $password = $request->input('admin_pass');

        //dd($username .'---'.$password);

        if($username == 'admin' && $password == 'abc123'){


            session(['adminLogin' => 'true']);
            return redirect()->route('admin_dashboard');

        }else{

            return view('admin/index');
        }

    }


    public function logout(){
        session()->forget('adminLogin');
        return redirect()->route('admin_index');


    }


    public function getData(){
        return '{
                "data": [{
                            "id": "1",
                          "name": "Tiger Nixon",
                          "position": "System Architect",
                          "salary": "$320,800",
                          "start_date": "2011/04/25",
                          "office": "Edinburgh",
                          "extn": "5421"
                        },
                        {
                            "id": "2",
                          "name": "Garrett Winters",
                          "position": "Accountant",
                          "salary": "$170,750",
                          "start_date": "2011/07/25",
                          "office": "Tokyo",
                          "extn": "8422"
                        },
                        {
                            "id": "3",
                          "name": "Ashton Cox",
                          "position": "Junior Technical Author",
                          "salary": "$86,000",
                          "start_date": "2009/01/12",
                          "office": "San Francisco",
                          "extn": "1562"
                        }]
                }';



    }


    public function getLocalBikers(){

        $arr = array();
        $customer = new Customer();
        $customers = $customer->where('type', '=', "biker-local")->get();


        foreach ($customers as $c_records1){

            $customers_lb = $c_records1->biker_local()->get();

            foreach ($customers_lb as $c_records2){

                $arr[] = array(
                    'fname'         =>$c_records2->fname,
                    'lname'         =>$c_records2->lname,
                    'email'         =>$c_records2->email,
                    'nationality'   =>$c_records2->nationality,
                    'gender'        =>$c_records2->gender,
                    'nic'           =>$c_records2->nic,
                    'phone'         =>$c_records2->phone,
                    'reg_code'      =>$c_records1->reg_code,
                    'race_type'     =>$c_records2->race_type,
                );

            }

        }


        //dd($arr);

        return view('admin/local-reg')->with('data',$arr);

    }


    public function getForeignBikers(){

        $arr = array();
        $customer = new Customer();
        $customers = $customer->where('type', '=', "biker-foreign")->get();


        foreach ($customers as $c_records1){

            $customers_lf = $c_records1->biker_foreign()->get();

            foreach ($customers_lf as $c_records2){

                $arr[] = array(
                    'fname'         =>$c_records2->fname,
                    'lname'         =>$c_records2->lname,
                    'email'         =>$c_records2->email,
                    'nationality'   =>$c_records2->nationality,
                    'gender'        =>$c_records2->gender,
                    'passport'      =>$c_records2->passport,////
                    'phone'         =>$c_records2->phone,
                    'reg_code'      =>$c_records1->reg_code,
                    'race_type'     =>$c_records2->race_type,

                    'day_count'     =>$c_records2->day_count,
                    'join_others'   =>$c_records2->join_othres,
                    'bicycle'       =>$c_records2->bicycle,
                );

            }

        }




        //dd($arr);
        return view('admin/foreign-reg')->with('data',$arr);


    }



    public function getTouristRegistrations(){

        $arr = array();
        $customer = new Customer();
        $customers = $customer->where('type', '=', "tourist")->get();


        foreach ($customers as $c_records1){

            $customers_lf = $c_records1->tourist()->get();

            foreach ($customers_lf as $c_records2){

                $arr[] = array(
                    'fname'         =>$c_records2->fname,
                    'lname'         =>$c_records2->lname,
                    'email'         =>$c_records2->email,
                    'nationality'   =>$c_records2->nationality,
                    'gender'        =>$c_records2->gender,
                    'passport'      =>$c_records2->passport,////
                    'phone'         =>$c_records2->phone,
                    'reg_code'      =>$c_records1->reg_code,
                    'race_type'     =>$c_records2->race_type,

                    'day_count'     =>$c_records2->day_count,
                    'join_others'   =>$c_records2->join_othres,
                    'bicycle'       =>$c_records2->bicycle,
                );

            }

        }

        //dd($arr);
        return view('admin/tourist-reg')->with('data',$arr);
    }


    public function getPackageRegistrations(){

        $arr = array();

        $package = new Package();
        $packages =  $package->get();

        //dd($packages);

        foreach($packages as $packageRow){

            $packageName = $packageRow->name;
            $registerdAt = $packageRow->created_at;


            $packageCustomer = $packageRow->customer()->get();


            foreach($packageCustomer as $single_packageCustomer){

                $regCode      = $single_packageCustomer->reg_code;
                $customerType = $single_packageCustomer->type;

                if($customerType == 'biker-local'){
                    $packageCustomerFullRecord = $single_packageCustomer->biker_local()->get();

                }elseif($customerType == 'biker-foreign'){
                    $packageCustomerFullRecord = $single_packageCustomer->biker_foreign()->get();

                }elseif($customerType == 'tourist'){
                    $packageCustomerFullRecord = $single_packageCustomer->tourist()->get();

                }

                foreach($packageCustomerFullRecord as $row){

                    $passport_or_nic = ($row->nic)?$row->nic:$row->passport;

                    $arr[] = array(
                        'fname'         =>$row->fname,
                        'lname'         =>$row->lname,
                        'email'         =>$row->email,
                        'nationality'   =>$row->nationality,
                        'gender'        =>$row->gender,
                        'phone'         =>$row->phone,
                        'race_type'     =>$row->race_type,
                        'passport/nic'  =>$passport_or_nic,

                        'packageName'    =>$packageName,
                        'registerdAt'    =>$registerdAt,
                        'customerType'   =>$customerType,
                        'regCode'        =>$regCode,
                    );

                }


            }



        }


        //dd($arr);



        return view('admin/package-reg-list')->with('data',$arr);
    }


    public function loadDashboard(){

        $dataArr = array();


        $localBiker = new Biker_local();
        $localBiker::all();
        $dataArr['localBikerCount']= $localBiker->count();

        $foreignBiker = new Biker_foreign();
        $foreignBiker::all();
        $dataArr['foreignBikerCount']= $foreignBiker->count();


        $tourist = new Tourist();
        $tourist::all();
        $dataArr['touristCount']= $tourist->count();




            //dd($dataArr);

//Local Registrations
//Foreign Registrations
//Tourist Registrations
//Submit packages




        return view('admin/dashboard')->with('data',$dataArr);
    }




}
