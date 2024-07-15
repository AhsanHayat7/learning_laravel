<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Member extends Model
{
    use HasFactory;

    protected $primaryKey = "member_id";
    //public function getGroup()
    //{
     //   return $this->hasOne('App\Models\Group', 'group_id'); // One to on relations
    //}
    public function group()
    {
        return $this->hasMany('App\Models\Group', 'group_id', 'group_id'); // to set the relation on the group_id
    }
}
