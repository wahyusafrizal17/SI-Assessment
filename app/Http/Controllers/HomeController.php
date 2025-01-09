<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(\Auth::user()->level == 'super'){
            return redirect('report');
        }
        $data['questions'] = Pertanyaan::with('jawaban')->get();
        $data['cek_jawaban'] = Jawaban::where('user_id', \Auth::user()->id)->count();
        return view('welcome', $data);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // Loop melalui semua jawaban dari input
        foreach ($data as $key => $value) {
            // Periksa apakah key dimulai dengan 'jawaban_id_'
            if (strpos($key, 'jawaban_id_') === 0) {
                // Ekstrak `pertanyaan_id` dari key (misalnya, 'jawaban_id_1' menjadi 1)
                $pertanyaan_id = str_replace('jawaban_id_', '', $key);

                // Simpan ke tabel jawaban
                Jawaban::create([
                    'pertanyaan_id' => $pertanyaan_id,
                    'jawaban' => $value,
                    'user_id' => \Auth::user()->id
                ]);
            }
        }
        return redirect()->route('assessment.index')->with('success', 'Jawaban berhasil disimpan.');
    }
}
