<?php

namespace App\Http\Controllers\Malang\TwoDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IjenBaluranController extends Controller
{
    public function index(Request $request){
        return view('pages.paket.tour-malang.2D1N.ijen-baluran');
    }
}
