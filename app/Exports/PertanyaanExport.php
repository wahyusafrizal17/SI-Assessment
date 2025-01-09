<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PertanyaanExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('pertanyaan.excel', [
            'pertanyaan' => \App\Models\Pertanyaan::all()
        ]);
    }
}
