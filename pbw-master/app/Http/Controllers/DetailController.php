<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class DetailController extends Controller
{
    public function index(Request $request){
    $testimonials = Testimonial::all();
        return view('pages.detail',[
            'testimonials' => $testimonials
        ]);
    }
}
