<?php

namespace App\Http\Controllers\Banyuwangi\FourDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelBanyuController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.paket.tour-banyuwangi.4D3M.KelilingBAnyuwangi2');
    }
}