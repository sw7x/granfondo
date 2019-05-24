<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Package;
use App\TaylorMade;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use PDOException;



class PackageController extends Controller
{
    //

    public function singlePackage($packageName){


        switch ($packageName) {
            case 'culture-and-heritage':
                $packageId = 1;
            break;
            case 'beaches':
                $packageId = 2;
            break;
            case 'nature-and-wild-life':
                $packageId = 3;
            break;

            case 'tea-trails-and-scenic-beauty':
                $packageId = 4;
            break;
            case 'ayurvedha-and-reflexology':
                $packageId = 5;
            break;
            case 'adventure-and-sports':
                $packageId = 6;
            break;
            default:
                $packageId = null;;
        }


        //dd($packageId);

        if($packageId != null){
            return view('single-package')
                ->with('packageName',$packageName)
                ->with('package_id',$packageId);
        }else{
            return redirect()->route('packages');
        }

        //dd($packageName);

    }




    public function packageRegister(Request $request){

        $resultArr = array();
        $regCode   = $request->input('regCode');
        $packageid = $request->input('packageId');



        try{

            $customer = new Customer();
            $regCodeRecords = $customer::where('reg_code', $regCode)->get();


            //check user provide reg_code exists in the system
            if($regCodeRecords->count()==0){
                throw new Exception('Registered code invalid or not available');
            }else{
                $cRecord = $customer::where('reg_code', $regCode)->first('id');
                $cusId = $cRecord->id;
                //$cusId = 55;

                $package = new Package();
                $rcc = $package::find($packageid)->customer()->where('customerId',$cusId)->get();

                //check user already submit package
                if($rcc->count() > 0){

                    throw new Exception('User already submit the package');
                }else{

                    // if user not submit package previously then submit it now
                    $customer::find($cusId)->package()->attach($packageid);
                    $resultArr['message'] = 'Package submit successfully';
                    $resultArr['status']  = 'success';
                    $resultArr['title']   = 'Success';
                }
            }

        }catch (PDOException $e) {

            $resultArr['status']  = 'error';
            //$resultArr['message'] = 'Database Error';
            $resultArr['message'] = $e->getMessage();
            $resultArr['title']   = 'Error';

        }catch (\Exception $e) {

            $resultArr['status']  = 'error';
            $resultArr['message'] = $e->getMessage();
            $resultArr['title']   = 'Error';
        }catch (Error $e) {


            $resultArr['status']  = 'error';
            $resultArr['message'] = 'Error';
            //$resultArr['message'] = $e->getMessage();
            $resultArr['title']   = 'Error';
        }
        //sleep(10);


        echo json_encode($resultArr);

    }


    public function loadTayorMadeForm(Request $request){





        $package_id     = $request->input('package_id');
        $packageName    = $request->input('packageName');

        $packageName = ($packageName)?$packageName:'';


        //dd($packageName);



        //dd($package_id);
        return view('taylor-made-package')
            ->with('package_id', $package_id)
            ->with('packageName', $packageName)
            ->with('form_action_route', 'taylormade-form-submit')
            ->with('title', 'TaylorMade Form - for package - '.$packageName);


    }


    public function redirectTayorMadeForm(Request $request){

        //dd($request->old());
        $packageId = $request->old('package-id');
        $packageName    = $request->old('packageName');


        if($packageId != null || $packageId !=''){
            return view('taylor-made-package')
                ->with('package_id', $packageId)
                ->with('packageName', $packageName)
                ->with('form_action_route', 'taylormade-form-submit')
                ->with('title', 'TaylorMade Form - for package - '.$packageName);
        }else{
            return redirect()->route('packages');
        }

    }


    public function taylorMadeFormSubmit(Request $request){

        //
        //dd('ggjht');
        $validator = Validator::make($request->all(),[
            'first_name'    => 'required|min:3|alpha',
            'last_name'     => 'required|min:3|alpha',
            'email'         => 'required|email',
            'nationality'   => 'required|min:3|alpha_spaces',
            'phone'         => 'required',
            'passport'      => 'required',

            'day_count'      => 'required|numeric|min:0|max:255',
            'person_count'   => 'required|numeric|min:0|max:255',
            'location'       => 'required',
            'hotel-type'     => 'in:3star,4star,5star,other',

        ]);



        //dd($validator->fails());

        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput(Input::all());


        }else{

            try {
                DB::beginTransaction();



                $taylorMade = new TaylorMade();





                $taylorMade->fname            = $request->input('first_name');
                $taylorMade->lname            = $request->input('last_name');
                $taylorMade->email            = $request->input('email');
                $taylorMade->nationality      = $request->input('nationality');
                $taylorMade->phone            = $request->input('phone');
                $taylorMade->passport         = $request->input('passport');

                $taylorMade->day_count        = $request->input('day_count');
                $taylorMade->person_count     = $request->input('person_count');
                $taylorMade->location         = $request->input('location');
                $taylorMade->hotel_type       = $request->input('hotel-type');

                $taylorMade->packageId        = $request->input('package-id');
                $taylorMade->save();

                //Mail::to($bikerForeign->email)->send(new RegistrationEmail($regCode,''));


                DB::commit();


                //insert into db success
                return redirect()->route('register-submit')->with( ['status'=>'Form Submit success',
                    'msg' => 'Form has Successfully submitted',
                    'title' => 'Taylor made Form - Submit Page'
                ]);

            } catch (\PDOException $e) {


                DB::rollBack();

                //insert into db fail
                return redirect()->route('register-submit')->with( ['status'=>'Form Submit failed',
                    //'msg' => $e->getMessage (),
                    'msg' => 'Database Error',
                    'title' => 'Taylor made Form - Submit Page'
                ]);


            }catch (\Exception $e) {

                // Woopsy
                DB::rollBack();

                //insert into db fail
                return redirect()->route('register-submit')->with( ['status'=>'Form Submit failed',
                    //'msg' => $e->getMessage(),
                    'msg'   => 'Error occurred while registration form submitting',
                    'title' => 'Taylor made Form - Submit Page'
                ]);


            }


        }























        //////////////


       //dd('dfgdfgdfg');
        //return redirect()->route('packages');
    }


}
