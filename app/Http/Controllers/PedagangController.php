<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedagang;
use App\Models\Wilayah;
use App\Http\Requests\PedagangRequest;

class PedagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword =$request->keyword;
        // $dd = Pedagang::count();
        // return dd($dd);

        $datas = Pedagang::with('wilayah')->paginate(4);
        // $datas = Pedagang::where('nm_pedagang', 'LIKE', '%'.$keyword.'%')
        //     ->orWhere('nik_pedagang', 'LIKE', '%'.$keyword.'%')
        //     ->orWhere('nm_usaha', 'LIKE', '%'.$keyword.'%')
        //     ->paginate(5); 
        //     $datas->withPath('pedagang');
        //     $datas->appends($request->all());
        return view('pedagang.index', compact(
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
        $model = new Pedagang;
        $wilayah = Wilayah::all();
        return view('pedagang.create', compact(
            'model', 'wilayah'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PedagangRequest $request)
    {
        $model = new Pedagang;
        $model->nm_pedagang = $request->nm_pedagang;
        $model->gender_pedagang = $request->gender_pedagang;
        $model->agama_pedagang = $request->agama_pedagang;
        $model->no_tlp_pedagang = $request->no_tlp_pedagang;
        $model->nik_pedagang = $request->nik_pedagang;
        $model->status_nikah_pedagang = $request->status_nikah_pedagang;
        $model->alamat_pedagang = $request->alamat_pedagang;
        $model->nm_usaha = $request->nm_usaha;
        $model->alat_usaha = $request->alat_usaha;
        $model->wilayah_usaha = $request->wilayah_usaha;
        $model->save();

        return redirect('pedagang')->with('success', 'Data berhasil ditambahkan');
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
        $model = Pedagang::find($id);
        return view('pedagang.edit', compact(
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
    public function update(PedagangRequest $request, $id)
    {
        $model = Pedagang::find($id);
        $model->nm_pedagang = $request->nm_pedagang;
        $model->gender_pedagang = $request->gender_pedagang;
        $model->agama_pedagang = $request->agama_pedagang;
        $model->no_tlp_pedagang = $request->no_tlp_pedagang;
        $model->nik_pedagang = $request->nik_pedagang;
        $model->status_nikah_pedagang = $request->status_nikah_pedagang;
        $model->alamat_pedagang = $request->alamat_pedagang;
        $model->nm_usaha = $request->nm_usaha;
        $model->alat_usaha = $request->alat_usaha;
        $model->wilayah_usaha = $request->wilayah_usaha;
        $model->save();

        return redirect('pedagang')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Pedagang::find($id);
        $model->delete();
        return redirect('pedagang');
    }
}
