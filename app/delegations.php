<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class delegations extends Model
{
    public function delegationsDelegates(){
        return $this->hasMany('App\delegationsDelegates');
    }
}
