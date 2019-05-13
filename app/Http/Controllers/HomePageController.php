<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //

    public function getTime(){

        date_default_timezone_set("Asia/Colombo");
        $date = date('m/d/Y h:i:s a', time());
        dd($date);



        //$Date1 = '2019-05-31';
        //$date = new DateTime($Date1);




        return null;
    }
}
