<?php

namespace App\Http\Controllers\Malang\TwoDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;

class BromoInapController extends Controller
{
    public function index(Request $request){

        $testimonials = Testimonial::all();
        return view('pages.paket.tour-malang.2D1N.bromo-inap',[
            'testimonials' => $testimonials
        ]);
    }
}
