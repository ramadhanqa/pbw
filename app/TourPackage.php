<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use dulu softdeletes
use Illuminate\Database\Eloquent\SoftDeletes;

class TourPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title','slug','about','detailtrip','pricetour','facilities','rundown'
    ];

    protected $hidden = [

    ];
    //relasi tabel galleries
    public function galleries(){
        //bahwa class gallery , ada {tabel tour packages id} yg relasi dgn  {{tourpackage} tabel id
        return $this->hasMany(Gallery::class, 'tour_packages_id','id');
    }
}
