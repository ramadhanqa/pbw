<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//Modal Request dari user
use Illuminate\Http\Request;
use App\Testimonial;

use App\Http\Requests\Admin\TestimonialRequest;

use Illuminate\Support\Str;

class TestimonialController extends Controller
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

        // return view('pages.testimonial.index',[
        //     'items' => $items
        // ]);
        $items = Testimonial::all();

        return view('pages.admin.testimonial.index',[
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
        $testimonials = Testimonial::all();
        return view('pages.admin.testimonial.create',[
            'testimonials' => $testimonials
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
        $data = $request->all();

        Testimonial::create($data);
        return redirect()->route('testimonial.index');
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
        $item = Testimonial::findOrFail($id);

        return view('pages.admin.testimonial.edit',[
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
    public function update(TestimonialRequest $request, $id)
    {
        $data = $request->all();
         //fungsi update dan edit perbedaannya
        $item = Testimonial::findOrFail($id);
        $item->update($data);
        return redirect()->route('testimonial.index');
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
        $item = Testimonial::findOrFail($id);
        //fungsi delete
        $item->delete();

        return redirect()->route('testimonial.index');
    }
}
