<?php

namespace App\Http\Requests\Pertanyaan;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        ];
    }

    public function messages()
    {
        return [
            'pertanyaan.required'   => 'Pertanyaan tidak boleh kosong',
            'jenis.required'        => 'Jenis tidak boleh kosong',
        ];
    }
}
