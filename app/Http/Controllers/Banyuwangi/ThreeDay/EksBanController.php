<?php

namespace App\Http\Controllers\Banyuwangi\ThreeDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EksBanController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.paket.tour-banyuwangi.3D2N.EksplorBanyuwangi');
    }
}