<?php

namespace App\Http\Controllers\Banyuwangi\OneDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;

class TrekIjenController extends Controller
{
    public function index(Request $request)
    {
        $testimonials = Testimonial::all();
        return view('pages.paket.tour-banyuwangi.1D.TrekIjen',['testimonials' => $testimonials]);
    }
}
