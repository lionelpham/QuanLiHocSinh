<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    public function user()
    {
        // return $this->belongsTo('App\User');
    }
    public function roles(){
        // return $this->belongsTo('App\roles');
    }

}
