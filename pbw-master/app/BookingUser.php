<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use dulu softdeletes
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingUser extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama','email','no_telp','usia','no_ktp','tgl_trip','pilihan_trip','nama_peserta_lain','jml_org','req_jemput','req_antar','pesan'
    ];

    protected $hidden = [

    ];

}
