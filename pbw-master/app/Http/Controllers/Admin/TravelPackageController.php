<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//Modal Request dari user
use App\Http\Requests\Admin\TourPackageRequest;
use Illuminate\Http\Request;
use App\TourPackage;
use Illuminate\Support\Str;

class TravelPackageController extends Controller
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
        $items = TourPackage::all();

        return view('pages.admin.travel-package.index',[
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
        return view('pages.admin.travel-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        TourPackage::create($data);
        return redirect()->route('travel-package.index');
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
        $item = TourPackage::findOrFail($id);

        return view('pages.admin.travel-package.edit',[
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
    public function update(TourPackageRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        //fungsi update dan edit perbedaannya
        $item = TourPackage::findOrFail($id);
        $item->update($data);
        return redirect()->route('travel-packages.index');
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
        $item = TourPackage::findOrFail($id);
        //fungsi delete
        $item->delete();

        return redirect()->route('travel-packages.index');
    }
}
