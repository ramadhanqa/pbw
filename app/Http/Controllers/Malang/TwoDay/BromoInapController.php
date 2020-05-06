<?php

namespace App\Http\Controllers\Malang\TwoDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BromoInapController extends Controller
{
    public function index(Request $request){
        return view('pages.paket.tour-malang.2D1N.bromo-inap');
    }
}
