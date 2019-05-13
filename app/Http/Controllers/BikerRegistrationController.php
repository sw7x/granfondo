<?php

namespace App\Http\Controllers;

use App\Biker_foreign;
use App\Biker_local;
use App\Customer;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BikerRegistrationController extends Controller
{
    //

	public function localFormSubmit(Request $request){


	    //dd ($request->all());


        $validator = Validator::make($request->all(),[
            'first_name'    => 'required|min:3|alpha',
            'last_name'     => 'required|min:3|alpha',
            'nationality'   => 'required|min:3|alpha_spaces',
            'gender'        => 'in:male,female',
            'nic'           => 'required|size:10',
            'race_type'     => 'in:full-race,half-race',
            'phone'         => 'required']);


        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput();


        }else{

            try {
                DB::beginTransaction();



                $bikeLocal = new Biker_local();

                //check nic is unique
                $cRecord = $bikeLocal::where('nic', $request->input('nic'))->get();
                if($cRecord->count()>0){
                    throw new Exception('NIC already exist');
                }

                //check phone number is unique
                $cRecord = $bikeLocal::where('phone', $request->input('phone'))->get();
                if($cRecord->count()>0){
                    throw new Exception('Phone number already exist');
                }



                $bikeLocal->fname      = $request->input('first_name');
                $bikeLocal->lname      = $request->input('last_name');
                $bikeLocal->nationalty = $request->input('nationality');
                $bikeLocal->gender     = $request->input('gender');
                $bikeLocal->nic        = $request->input('nic');
                $bikeLocal->race_type  = $request->input('race_type');
                $bikeLocal->phone      = $request->input('phone');
                $bikeLocal->save();



                $customer = new Customer();
                $customer->type 	='biker-local';
                $customer->tbl_key  = $bikeLocal->id;
                $customer->reg_code = $this->generateUniqueRegCode("loc");
                $customer->save();


                DB::commit();

                //insert into db success
                return redirect()->route('register-submit')->with( ['status'=>'Form Submit success',
                    'msg' => 'Form has Successfully submitted',
                    'title' => 'Registration Local - Submit Page'
                ]);

            } catch (\PDOException $e) {


                DB::rollBack();

                //insert into db fail
                return redirect()->route('register-submit')->with( ['status'=>'Form Submit failed',
                    'msg' => 'Database Error',
                    'title' => 'Registration Local - Submit Page'
                ]);


            }catch (\Exception $e) {

                // Woopsy
                DB::rollBack();

                //insert into db fail
                return redirect()->route('register-submit')->with( ['status'=>'Form Submit failed',
                    'msg' => $e->getMessage(),
                    'title' => 'Registration Local - Submit Page'
                ]);


            }


        }


    }





    public function foreignFormSubmit(Request $request){


        $validator = Validator::make($request->all(),[
            'first_name'    => 'required|min:3|alpha',
            'last_name'     => 'required|min:3|alpha',
            'nationality'   => 'required|min:3|alpha_spaces',
            'gender'        => 'in:male,female',

            'passport'      => 'required',
            'race_type'     => 'in:full-race,half-race',
            'phone'         => 'required',

            'day_count'     => 'required|numeric|min:0|max:255',
            'join_othres'   => 'required|numeric|min:0|max:255',
            'bicycle'       => 'in:yes,no',

        ]);


        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput();


        }else{

            try {
                DB::beginTransaction();



                $bikerForeign = new Biker_foreign();

                //check nic is unique
                $cRecord = $bikerForeign::where('passport', $request->input('passport'))->get();
                if($cRecord->count()>0){
                    throw new Exception('NIC already exist');
                }

                //check phone number is unique
                $cRecord = $bikerForeign::where('phone', $request->input('phone'))->get();
                if($cRecord->count()>0){
                    throw new Exception('Phone number already exist');
                }



                $bikerForeign->fname        = $request->input('first_name');
                $bikerForeign->lname        = $request->input('last_name');
                $bikerForeign->nationalty   = $request->input('nationality');
                $bikerForeign->gender       = $request->input('gender');
                $bikerForeign->passport     = $request->input('passport');
                $bikerForeign->race_type    = $request->input('race_type');
                $bikerForeign->phone        = $request->input('phone');
                $bikerForeign->day_count    = $request->input('day_count');
                $bikerForeign->join_othres  = $request->input('join_othres');
                $bikerForeign->bicycle      = $request->input('bicycle');
                $bikerForeign->save();



                $customer = new Customer();
                $customer->type 	='biker-foreign';
                $customer->tbl_key  = $bikerForeign->id;
                $customer->reg_code = $this->generateUniqueRegCode("for");
                $customer->save();


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
                    'title' => 'Registration Foreign - Submit Page'
                ]);


            }


        }


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
