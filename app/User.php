<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
            'photo'                   ,
            'dat_of_birth'            ,
            'nationality'             ,
            'sex'                     ,
            'children'                ,
            'civil_status'            ,
            'phone'                   ,
            'province'                ,
            'district'                ,
            'sector'                  ,
            'POBOX'                   ,
            'prayer_family'           ,
            'section'                 ,
            'address'                 ,
            'baptism_in_water'        ,
            'baptism_in_water_date'   ,
            'baptism_in_spirit'       ,
            'commission_ministry'     ,
            'principal_occupation'    ,
            'trainings_attendend'     ,
            'four_principal_words'    ,
            'affermissement'          ,
            'spiritual_laws'          ,
            'other_trainings'         ,
            'languages'               ,
            'primary_school'          ,
            'secondary_school'        ,
            'university'              ,
            'unable_to_read_and_write',
            'signature'               ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
