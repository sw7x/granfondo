<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biker_foreign extends Model
{
    protected $table = 'biker_foreign';



    /**
     * Get the customer that owns the biker_local record
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer',	'tbl_key','id');

    }
}
