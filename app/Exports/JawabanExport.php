<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class JawabanExport implements FromView, ShouldAutoSize
{
    protected $user_id;

    public function __construct($user_id)
    {
        $this->user_id = $user_id;
    }

    public function view(): View
    {
        return view('report.excel', [
            'pertanyaan' => \DB::table('pertanyaan as p')
                        ->leftJoin('jawaban as j', function ($join) {
                            $join->on('j.pertanyaan_id', '=', 'p.id')
                                ->where('j.user_id', '=', $this->user_id);
                        })
                        ->select('p.pertanyaan', 'j.jawaban', 'j.user_id')
                        ->get()
        ]);
    }
}
