<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            //input tour packages ini akan di seleksi jika isi sama dengan tabel tour packages bagian id
            'tour_packages_id' => 'required|integer|exists:tour_packages,id',
            'image' => 'required|image'
        ];
    }
}
