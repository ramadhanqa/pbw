<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TourPackage;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // view dashboard admin.blade.phpo
        return view('pages.admin.dashboard',[
            //membuat variabel tour_pacakage , menghitung Total Tourpackage(tabel dari model)
            'tour_package' => TourPackage::count(),
        ]);
    }
}
