<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TourPackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //validasi semua ini
            'title' => 'required|max:255',
            //slug berarti ga semua tabel di masukkan di request
            // 'slug' => 'required|max:255',
            // 'about' => 'required',
            // 'detailtrip' => 'required',
            // 'pricetour' => 'required',
            // 'facilities' => 'required',
            // 'rundown' => 'required'
        ];
    }
}
