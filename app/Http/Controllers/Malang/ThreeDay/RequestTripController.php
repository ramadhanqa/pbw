<?php

namespace App\Http\Controllers\Malang\ThreeDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;

class RequestTripController extends Controller
{
    public function index(Request $request){

        $testimonials = Testimonial::all();
        return view('pages.paket.tour-malang.3D2N.request-trip',[
            'testimonials' => $testimonials
        ]);
    }
}
