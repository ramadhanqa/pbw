<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BookingUserRequest extends FormRequest
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
            'nama' => 'required|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:bookings'],

            'no_ktp' => 'required|max:255'
        ];
    }
}
