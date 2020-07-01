<?php

namespace App\Http\Controllers\Banyuwangi\FourDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;


class EksoBanController extends Controller
{
    public function index(Request $request)
    {
        $testimonials = Testimonial::all();
        return view('pages.paket.tour-banyuwangi.4D3M.EksotiskaBanyuwangi',['testimonials' => $testimonials]);
    }
}