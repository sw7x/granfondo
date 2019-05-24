<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customer';


    /**
     * Get the biker_local record associated with the customer table.
     */
    public function biker_local()
    {
        return $this->hasOne('App\Biker_local','id','tbl_key');
    }

    public function biker_foreign()
    {
        return $this->hasOne('App\Biker_foreign','id','tbl_key');
    }

    public function tourist()
    {
        return $this->hasOne('App\Tourist','id','tbl_key');
    }


    public function package()
    {
       // return $this->hasOne('App\Biker_foreign','id');
        return $this->belongsToMany('App\Package',
                                    'customer_package',
                                    'customerId',
                                    'packageId')->withTimestamps();







    }
}
