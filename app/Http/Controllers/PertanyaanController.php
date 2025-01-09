<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\pertanyaan\StoreRequest;
use App\Http\Requests\pertanyaan\UpdateRequest;
use App\Models\Pertanyaan;
use App\Exports\PertanyaanExport;
use Maatwebsite\Excel\Facades\Excel;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pertanyaan'] = Pertanyaan::all();

        return view('pertanyaan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan.create');
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
        Pertanyaan::create($input);

        alert()->success('Data berhasil disimpan', 'Berhasil');
        return redirect('pertanyaan');
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
        $data['pertanyaan'] = Pertanyaan::find($id);
        return view('pertanyaan.edit', $data);
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
        $model = Pertanyaan::find($id);
        $input = $request->all();
        $model->update($input);

        alert()->success('Data berhasil diubah', 'Berhasil');
        return redirect('pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Pertanyaan::find($id);
        $model->delete();

        alert()->success('Data berhasil dihapus', 'Berhasil');
        return redirect('pertanyaan');
    }

    public function excel() 
    {
        return Excel::download(new PertanyaanExport, 'pertanyaan.xlsx');
    }

    public function delete(Request $request)
    {
        $category = Pertanyaan::find($request->id);
        $category->delete();

        return 'success';
    }
}
