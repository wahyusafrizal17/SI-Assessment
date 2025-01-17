<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ReportExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('report.export', [
            'pertanyaan' => \DB::table('jawaban as j')
            ->join('pertanyaan as p', 'p.id', '=', 'j.pertanyaan_id')
            ->join('users as u', 'u.id', '=', 'j.user_id')
            ->select('u.name', 'p.pertanyaan', 'p.jenis', 'p.bagian', 'j.jawaban')
            ->get()
        ]);
    }
}
