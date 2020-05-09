<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//Modal Request dari user
use Illuminate\Http\Request;
use App\Booking;

use App\Http\Requests\Admin\BookingRequest;
use App\Testimonial;
use App\TourPackage;
use App\Packet;
use Illuminate\Support\Str;

class BookingUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //return page index\admin\package travel dan mengambil testimonialss data dati db
    //mengambil dari model Tour PACKAGE
    public function index()
    {
        // $testimonialss = Booking::all();

        // return view('pages.bookinguser.index',[
        //     'testimonialss' => $testimonialss
        // ]);
        $testimonials = Testimonial::all();
        $packets = Packet::all();
        return view('pages.bookinguser.create',[
            'packets' => $packets,
            'testimonials' => $testimonials
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // return pages admin\package-trave\create.blade
    public function create()
    {
        $testimonials = Testimonial::all();
        $packets = Packet::all();
        return view('pages.bookinguser.create',[
            'packets' => $packets,
            'testimonials' => $testimonials
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingRequest $request)
    {
        $data = $request->all();


        Booking::create($data);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // jika datanya ada akan dimunculin jika ga ada error 404
        $testimonials = Booking::findOrFail($id);

        return view('pages.bookinguser.edit',[
            'testimonials' =>$testimonials
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookingRequest $request, $id)
    {
        $data = $request->all();
         //fungsi update dan edit perbedaannya
        $testimonials = Booking::findOrFail($id);
        $testimonials->update($data);
        return redirect()->route('bookings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //mencari idnya
        $testimonials = Booking::findOrFail($id);
        //fungsi delete
        $testimonials->delete();

        return redirect()->route('bookings.index');
    }
}
