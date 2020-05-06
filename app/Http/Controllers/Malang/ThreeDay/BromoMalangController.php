<?php

namespace App\Http\Controllers\Malang\ThreeDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BromoMalangController extends Controller
{
    public function index(Request $request){
        return view('pages.paket.tour-malang.3D2N.bromo-malang');
    }
}
