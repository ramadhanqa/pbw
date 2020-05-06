<?php

namespace App\Http\Controllers\Malang\OneDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BromoMidController extends Controller
{
    public function index(Request $request){
        return view('pages.paket.tour-malang.1D.bromo-mid');
    }
}
