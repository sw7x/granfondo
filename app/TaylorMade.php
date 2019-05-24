<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaylorMade extends Model
{
    //
    protected $table = 'taylor_made';

    public function package()
    {
        return $this->belongsTo('App\Package',	'id','packageId');
    }
}
