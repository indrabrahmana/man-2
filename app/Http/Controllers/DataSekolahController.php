<?php

namespace App\Http\Controllers;

use App\Models\DataSekolah;
use Illuminate\Http\Request;

class DataSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $data ['list_datasekolah'] = DataSekolah::all();
        return view('admin.datasekolah.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('admin.datasekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $datasekolah = new DataSekolah;
        $datasekolah->nama_sekolah = request('nama_sekolah');
        $datasekolah->nss_npsn = request('nss_npsn');      
        $datasekolah->password = request('password');
        $datasekolah->foto = request('foto');
        $datasekolah->save();

        $datasekolah->handleUploadFoto();

        return redirect('admin/datasekolah')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DataSekolah $datasekolah)
    {
     
        $data ['datase$datasekolah'] = $datasekolah;
        return view('admin.datase$datasekolah.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DataSekolah $datasekolah)
    {
       
        $data ['datasekolah'] = $datasekolah;
        return view('admin.datasekolah.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DataSekolah $datasekolah)
    {
        // $datapegawai->id = request()->id;
       
        

        return redirect('admin/datasekolah')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataSekolah $datasekolah)
    {
        $datasekolah->handleDelete();
        $datasekolah->delete();

        return redirect('admin/datasekolah');
    }

    public function cetak_pdf(DataSekolah $datasekolah)
    {
        $data ['datasekolah'] = $datasekolah;
        return view('admin.datasekolah.cetak_pdf', $data);
    }
}
