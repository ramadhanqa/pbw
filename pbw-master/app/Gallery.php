<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use dulu softdeletes
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'tour_packages_id','image'
    ];

    protected $hidden = [

    ];

    public function tour_package(){
        //model ini galery akan relasi ambil dari tour package model -> tabel id
        // relasi antara tabel tour_pacakge_id dgn tabel id (tour package)
        return $this->belongsTo(TourPackage::class, 'tour_packages_id','id');
    }
}
