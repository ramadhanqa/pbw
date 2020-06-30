<?php

namespace App\Http\Controllers\Banyuwangi\FourDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EksoBanController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.paket.tour-banyuwangi.4D3M.EksotiskaBanyuwangi');
    }
}