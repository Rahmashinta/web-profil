<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KontenRequest extends FormRequest
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
            'judul_konten' => 'required|max:255|string',
            'tanggal_konten' => 'required|date',
            'isi_konten' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];
    }
}
