<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class delegationsDelegates extends Model
{
    public function delegations(){
        return $this->belongsTo('App\delegations');
    }
}
