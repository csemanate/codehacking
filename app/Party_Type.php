<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party_Type extends Model
{
    protected $fillable = ['description'];

    //Creates relationship with Party model
    public function parties()
    {
        return $this->hasMany('App\Party');
    }

}
