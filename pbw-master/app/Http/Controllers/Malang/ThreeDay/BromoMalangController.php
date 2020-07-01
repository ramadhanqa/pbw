<?php

namespace App\Http\Controllers\Malang\ThreeDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;
class BromoMalangController extends Controller
{
    public function index(Request $request){

        $testimonials = Testimonial::all();
        return view('pages.paket.tour-malang.3D2N.bromo-malang',[
            'testimonials' => $testimonials
        ]);
    }
}
