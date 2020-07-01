<?php

namespace App\Http\Controllers\Banyuwangi\TwoDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;

class PesBanController extends Controller
{
    public function index(Request $request)
    {
        $testimonials = Testimonial::all();
        return view('pages.paket.tour-banyuwangi.2D1M.PesonaBanyuwangi',['testimonials' => $testimonials]);
    }
}
