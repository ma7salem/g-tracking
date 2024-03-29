<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded = [];

    public function userGroup()
    {
        return $this->hasMany('App\Models\UserGroup');
    }
}
