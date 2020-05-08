<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//Modal Request dari user
use Illuminate\Http\Request;
use App\Booking;

use App\Http\Requests\Admin\BookingRequest;

use App\TourPackage;
use Illuminate\Support\Str;

class BookingUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //return page index\admin\package travel dan mengambil items data dati db
    //mengambil dari model Tour PACKAGE
    public function index()
    {
        // $items = Booking::all();

        // return view('pages.bookinguser.index',[
        //     'items' => $items
        // ]);
        $tour_packages = TourPackage::all();
        return view('pages.bookinguser.create',[
            'tour_packages' => $tour_packages
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
        $tour_packages = TourPackage::all();
        return view('pages.bookinguser.create',[
            'tour_packages' => $tour_packages
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
        $item = Booking::findOrFail($id);

        return view('pages.bookinguser.edit',[
            'item' =>$item
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
        $item = Booking::findOrFail($id);
        $item->update($data);
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
        $item = Booking::findOrFail($id);
        //fungsi delete
        $item->delete();

        return redirect()->route('bookings.index');
    }
}
