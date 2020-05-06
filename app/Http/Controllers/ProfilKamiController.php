<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilKamiController extends Controller
{
    public function index(Request $request){
        return view('pages.profil-kami');
    }
}
