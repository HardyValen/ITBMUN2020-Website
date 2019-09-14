<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class individualDelegates extends Model
{
    protected $fillable = [
        'fullName',
        'institution',
        'contactNumber',
        'lineId',
        'email',
        'nationality',
        'idNumber',
        'gender',
        'medicalConditions',
        'munExperiences',
        'firstCouncilPreference',
        'firstCouncilCountryPreference',
        'firstCouncilReason',
        'secondCouncilPreference',
        'secondCouncilCountryPreference',
        'secondCouncilReason',
        'thirdCouncilPreference',
        'thirdCouncilCountryPreference',
        'thirdCouncilReason',
        'foodRestrictions',
        'accommodation',
        'doubleDelegateName',
        'doubleDelegateNationality'
    ];

    protected $primaryKey = 'individualDelegatesId';


}
