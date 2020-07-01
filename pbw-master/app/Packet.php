<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use dulu softdeletes
use Illuminate\Database\Eloquent\SoftDeletes;

class Packet extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title'
    ];

    protected $hidden = [

    ];

}
