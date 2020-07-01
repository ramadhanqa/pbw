<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use dulu softdeletes
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nick','testimoni'
    ];

    protected $hidden = [

    ];

}
