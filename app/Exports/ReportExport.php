<?php

namespace App\Exports;

use App\Models\User;
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
            'users' => User::with('jawaban')->where('level', 'guest')->get(),
            'pertanyaan' => \DB::table('pertanyaan as p')
                            ->join('jawaban as j', 'j.pertanyaan_id', '=', 'p.id')
                            ->where('j.user_id', 2)
                            ->select(\DB::raw("CONCAT(p.pertanyaan, ' | ', j.jawaban) AS pertanyaan_jawaban"))
                            ->get()
            // 'pertanyaan' => \DB::table('jawaban as j')
            // ->join('pertanyaan as p', 'p.id', '=', 'j.pertanyaan_id')
            // ->join('users as u', 'u.id', '=', 'j.user_id')
            // ->select('u.name', 'p.pertanyaan', 'p.jenis', 'p.bagian', 'j.jawaban')
            // ->get()
        ]);
    }
}
