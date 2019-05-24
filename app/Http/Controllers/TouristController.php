<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Mail\RegistrationEmail;
use App\Package;
use App\Tourist;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class TouristController extends Controller
{
    //

    public function regForPackage(Request $request){

        $packageId = $request->input('package-id');
        //$packageId = (int)
        //dd($packageId);





        $validator = Validator::make($request->all(),[
            'first_name'    => 'required|min:3|alpha',
            'last_name'     => 'required|min:3|alpha',
            'email'         => 'required|email',
            'nationality'   => 'required|min:3|alpha_spaces',
            'gender'        => 'in:male,female',

            'passport'      => 'required',
            'race_type'     => 'in:full-race,half-race',
            'phone'         => 'required',

            'day_count'     => 'required|numeric|min:0|max:255',
            'join_others'   => 'required|numeric|min:0|max:255',
            'bicycle'       => 'in:yes,no',

        ]);


        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput();


        }else{

            try {
                DB::beginTransaction();



                $tourist = new Tourist();

                //check nic is unique
                $cRecord = $tourist::where('passport', $request->input('passport'))->get();
                if($cRecord->count()>0){
                    throw new Exception('Passport/NIC already exist');
                }

                //check email is unique
                $cRecord = $tourist::where('email', $request->input('email'))->get();
                if($cRecord->count()>0){
                    throw new Exception('Email already exist');
                }

                //check phone number is unique
                $cRecord = $tourist::where('phone', $request->input('phone'))->get();
                if($cRecord->count()>0){
                    throw new Exception('Phone number already exist');
                }



                $tourist->fname         = $request->input('first_name');
                $tourist->lname         = $request->input('last_name');
                $tourist->email         = $request->input('email');
                $tourist->nationality   = $request->input('nationality');
                $tourist->gender        = $request->input('gender');
                $tourist->passport      = $request->input('passport');
                $tourist->race_type     = $request->input('race_type');
                $tourist->phone         = $request->input('phone');
                $tourist->day_count     = $request->input('day_count');
                $tourist->join_others   = $request->input('join_others');
                $tourist->bicycle       = $request->input('bicycle');
                $tourist->save();



                $customer = new Customer();
                $customer->type 	='tourist';
                $customer->tbl_key  = $tourist->id;
                $regCode            = $this->generateUniqueRegCode("tou");
                $customer->reg_code = $regCode;
                $customer->save();
                //$cus_last_insert_id = $customer->id;


                //populate junction table
                if($packageId != null || $packageId != '' ){
                    $customer->package()->attach($packageId);
                }

                $package     = new Package();
                $packageName =  $package->select('name')->where('id', $packageId)->first()->name;
                $message     = 'Your have submit the : '.$packageName.' package';


                //dd($message);


                Mail::to($tourist->email)
                    ->send(new RegistrationEmail($regCode,$message));



                DB::commit();


                //insert into db success
                return redirect()->route('register-submit')->with( ['status'=>'Form Submit success',
                    'msg' => 'Form has Successfully submitted',
                    'title' => 'Registration Foreign - Submit Page'
                ]);

            } catch (\PDOException $e) {


                DB::rollBack();

                //insert into db fail
                return redirect()->route('register-submit')->with( ['status'=>'Form Submit failed',
                    'msg' => $e->getMessage (),
                    //'msg' => 'Database Error',
                    'title' => 'Registration Foreign - Submit Page'
                ]);


            }catch (\Exception $e) {

                // Woopsy
                DB::rollBack();

                //insert into db fail
                return redirect()->route('register-submit')->with( ['status'=>'Form Submit failed',
                    'msg' => $e->getMessage(),
                    //'msg' => 'Error',
                    'title' => 'Registration Foreign - Submit Page'
                ]);


            }


        }




        //

    }





    public function loadTouristRegisterForm(Request $request){

        $package_id = $request->input('package_id');

        //dd($package_id);
        return view('register-foreign')
            ->with('package_id', $package_id)
            ->with('form_action_route', 'register-tourist-submit')
            ->with('title', 'Registration Form - for package');
    }


    public function generateUniqueRegCode($type){

        //$regCode


        do {


            $random = substr(md5(mt_rand()), 0, 8);
            $regCode = $type."-".$random;

            $customer = new Customer();
            $cRecord = $customer::where('reg_code', $regCode)->get();

            //var_dump ($regCode);
            //var_dump ($cRecord);

        } while ($cRecord->count()>0);

        return $regCode;

    }



}
