<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Jabatan;
use App\Http\Requests\KaryawanRequest;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $keyword = $request->keyword;
        $datas = Karyawan::with('jabatan')->paginate(10);
        // $datas = Karyawan::with('jabatan')->where('nm_karyawan', 'LIKE', '%'.$keyword.'%')
        // ->orWhere('nik_karyawan', 'LIKE', '%'.$keyword.'%')
        // ->orWhere('jabatan_karyawan', 'LIKE', '%'.$keyword.'%')
        // ->paginate(4);
        return view('karyawan.index', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        $model = new Karyawan;
        return view('karyawan.create', compact(
            'model', 'jabatan'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KaryawanRequest $request)
    {
        $model = new Karyawan;
        $model->nm_karyawan = $request->nm_karyawan;
        $model->nik_karyawan = $request->nik_karyawan;
        $model->no_tlp_karyawan = $request->no_tlp_karyawan;
        $model->email_karyawan = $request->email_karyawan;
        $model->jabatan_id = $request->jabatan_id;
        $model->save();

        return redirect('karyawan')->with('success', 'Data berhasil ditambahkan');
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
        $model = Karyawan::find($id);
        return view('karyawan.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KaryawanRequest $request, $id)
    {
        $model = Karyawan::find($id);
        $model->nm_karyawan = $request->nm_karyawan;
        $model->nik_karyawan = $request->nik_karyawan;
        $model->no_tlp_karyawan = $request->no_tlp_karyawan;
        $model->email_karyawan = $request->email_karyawan;
        $model->jabatan_karyawan = $request->jabatan_karyawan;
        $model->save();

        return redirect('karyawan')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Karyawan::find($id);
        $model->delete();
        return redirect('karyawan')->with('success', 'Data berhasil dihapus');
    }
}
