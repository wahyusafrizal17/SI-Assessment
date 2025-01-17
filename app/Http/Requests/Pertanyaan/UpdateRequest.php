<?php

namespace App\Http\Requests\Pertanyaan;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'pertanyaan'            => 'required',
            'jenis'                 => 'required',
            'bagian'                => 'required',
        ];
    }

    public function messages()
    {
        return [
            'pertanyaan.required'   => 'Pertanyaan tidak boleh kosong',
            'jenis.required'        => 'Jenis tidak boleh kosong',
            'bagian.required'       => 'Bagian tidak boleh kosong',
        ];
    }
}
