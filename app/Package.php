<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    protected $table = 'package';


    public function customer()
    {

        return $this->belongsToMany('App\Customer',
                                    'customer_package',
                                    'packageId',
                                    'customerId')->withTimestamps();
    }


    public function taylor_made()
    {

        return $this->hasMany(  'App\TaylorMade',
                                'packageId',
                                'id');
    }

}
