<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Http\Requests\Jadwal\StoreRequest;
use App\Http\Requests\Jadwal\UpdateRequest;
use App\Models\PesertaJadwal;

class JadwalController extends Controller
{
    public function index()
    {
        $data['jadwal'] = Jadwal::all();

        return view('jadwal.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $input = $request->all();
        Jadwal::create($input);

        alert()->success('Data berhasil disimpan', 'Berhasil');
        return redirect('jadwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['jadwal'] = Jadwal::find($id);
        return view('jadwal.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $model = Jadwal::find($id);
        $input = $request->all();
        $model->update($input);

        alert()->success('Data berhasil diubah', 'Berhasil');
        return redirect('jadwal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Jadwal::find($id);
        $model->delete();

        alert()->success('Data berhasil dihapus', 'Berhasil');
        return redirect('jadwal');
    }

    public function delete(Request $request)
    {
        $category = Jadwal::find($request->id);
        $category->delete();

        return 'success';
    }

    public function listJadwal(Request $request)
    {
        $cekpeserta = PesertaJadwal::where('user_id', \Auth::id())->first();
        if(!empty($cekpeserta)){
            return redirect('/');
        }

        $data['jadwal'] = Jadwal::all();
        return view('kode', $data);
    }

    public function submitKode(Request $request)
    {
        if (!$request->ajax()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Permintaan tidak valid.'
            ], 400);
        }

        $request->validate([
            'kode' => 'required|string',
            'jadwal_id' => 'required|integer'
        ]);

        $kode = $request->kode;
        $jadwal_id = $request->jadwal_id;

        $jadwal = Jadwal::where('id', $jadwal_id)
                        ->where('kode', $kode)
                        ->first();

        if (!$jadwal) {
            return response()->json([
                'status' => 'warning',
                'message' => 'Kode yang anda masukkan salah.'
            ]);
        }

        // Cek apakah user sudah pernah mendaftar jadwal ini
        $exists = PesertaJadwal::where('jadwal_id', $jadwal_id)
                                ->where('user_id', \Auth::id())
                                ->exists();

        if ($exists) {
            return response()->json([
                'status' => 'info',
                'message' => 'Anda sudah terdaftar pada jadwal ini.'
            ]);
        }

        $peserta = new PesertaJadwal();
        $peserta->jadwal_id = $jadwal_id;
        $peserta->user_id = \Auth::id();

        if ($peserta->save()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Selamat mengisi soal!'
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Terjadi kesalahan saat menyimpan data.'
        ], 500);
    }

}
