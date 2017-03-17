<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $fillable = [
        'party_type_id',
        'organization_name',
        'current_last_name',
        'current_first_name',
        'current_middle_name',
        'mothers_maiden_name',
        'marital_status',
        'current_personal_title',
        'current_suffix',
        'current_nickname',
        'gender',
        'birth_date',
        'height',
        'weight',
        'social_security_number',
        'comments'
    ];

    //Creates relationship with Party_Type model
    public function party_type()
    {
        return $this->belongsTo('App\Party_Type');
    }
}
