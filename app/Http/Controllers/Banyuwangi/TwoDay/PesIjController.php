<?php

namespace App\Http\Controllers\Banyuwangi\TwoDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesIjController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.paket.tour-banyuwangi.2D1M.PesonaIjen');
    }
}