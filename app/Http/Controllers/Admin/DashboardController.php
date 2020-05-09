<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Packet;
use Illuminate\Http\Request;
use App\Booking;
use App\Testimonial;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // view dashboard admin.blade.phpo
        return view('pages.admin.dashboard',[
            //membuat variabel tour_pacakage , menghitung Total Tourpackage(tabel dari model)
            'packet' => Packet::count(),
            'booking' => Booking::count(),
            'testimonial' => Testimonial::count(),
        ]);
    }
}
