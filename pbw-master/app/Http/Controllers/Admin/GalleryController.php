<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//Modal Request dari user
use App\Http\Requests\Admin\GalleryRequest;
use Illuminate\Http\Request;
use App\Gallery;
use App\TourPackage;
use Illuminate\Support\Str;

class GalleryController extends Controller
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
        $items = Gallery::with(['tour_package'])->get();

        return view('pages.admin.gallery.index',[
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
        //memanggil model TOur tabel Tourpackage
        $travel_packages = TourPackage::all();
        return view('pages.admin.gallery.create',[
            //tabel tour di baca variabel . agar koneksi
            'tour_packages'=> $travel_packages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        Gallery::create($data);
        return redirect()->route('gallery.index');
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
        $item = Gallery::findOrFail($id);
        $travel_packages = TourPackage::all();

        return view('pages.admin.gallery.edit',[
            'item' =>$item,
            'tour_packages'=> $travel_packages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        //fungsi update dan edit perbedaannya
        $item = Gallery::findOrFail($id);
        $item->update($data);
        return redirect()->route('gallery.index');
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
        $item = Gallery::findOrFail($id);
        //fungsi delete
        $item->delete();

        return redirect()->route('gallery.index');
    }
}
