<?php

namespace App\Http\Controllers\Malang\ThreeDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IjenBaluranController extends Controller
{
    public function index(Request $request){
        return view('pages.paket.tour-malang.3D2N.ijen-baluran');
    }
}
