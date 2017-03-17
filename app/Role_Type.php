<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_Type extends Model
{
    //
    protected $fillable = [
        'parent_role_type_id',
        'name',
    ];

    public function parent_role()
    {
        return $this->belongsTo('App\Role_Type', 'parent_role_type_id');
    }
}
