<?php

namespace App\Http\Controllers\Malang\OneDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;

class BromoMidController extends Controller
{
    public function index(Request $request){
        $testimonials = Testimonial::all();
        return view('pages.paket.tour-malang.1D.bromo-mid',[
            'testimonials' => $testimonials
        ]);
    }
}
