<?php

namespace App\Http\Requests\Jadwal;

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
            'kode'                    => 'required',
            'tanggal'                 => 'required',
            'keterangan'              => 'required',
        ];
    }

    public function messages()
    {
        return [
            'kode.required'             => 'Kode tidak boleh kosong',
            'tanggal.required'          => 'Tanggal tidak boleh kosong',
            'keterangan.required'       => 'Keterangan tidak boleh kosong',
        ];
    }
}
