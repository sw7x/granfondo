<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourist extends Model
{
    protected $table = 'tourist';



    /**
     * Get the customer that owns the biker_local record
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer',	'tbl_key');
    }
}
