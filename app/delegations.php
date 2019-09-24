<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class delegations extends Model
{
    protected $fillable = [
        'institution',
        'headDelegate',
        'contactNumber',
        'lineId'
    ];

    protected $primaryKey = 'delegationId';

    public function delegationsDelegates(){
        return $this->hasMany('App\delegationsDelegates');
    }
}
