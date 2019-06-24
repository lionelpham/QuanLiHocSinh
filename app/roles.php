<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    //
    public function roles__account(){
        return $this->hasOne('App\teacher','maRole');
    }
}
