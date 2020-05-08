<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//Modal Request dari user
use Illuminate\Http\Request;
use App\Packet;

use App\Http\Requests\Admin\PacketRequest;

use App\TourPackage;
use Illuminate\Support\Str;

class PacketController extends Controller
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

        // return view('pages.packet.index',[
        //     'items' => $items
        // ]);
        $items = Packet::all();

        return view('pages.admin.packet.index',[
            'items' => $items
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
        $packets = TourPackage::all();
        return view('pages.admin.packet.create',[
            'packets' => $packets
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacketRequest $request)
    {
        $data = $request->all();

        Packet::create($data);
        return redirect()->route('packet.index');
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
        $item = Packet::findOrFail($id);

        return view('pages.admin.packet.edit',[
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
    public function update(PacketRequest $request, $id)
    {
        $data = $request->all();
         //fungsi update dan edit perbedaannya
        $item = Packet::findOrFail($id);
        $item->update($data);
        return redirect()->route('packet.index');
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
        $item = Packet::findOrFail($id);
        //fungsi delete
        $item->delete();

        return redirect()->route('packet.index');
    }
}
