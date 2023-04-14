<?php

namespace App\Http\Controllers;

use App\Models\PesertaDidik;
use Illuminate\Http\Request;

class PesertaDidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['list_pesertadidik'] = PesertaDidik::all();
        return view('user.pesertadidik.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('user.pesertadidik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $PesertaDidik = new PesertaDidik;
        $PesertaDidik->nama_sekolah = request('nama_sekolah');
        $PesertaDidik->nss_npsn = request('nss_npsn');
        $PesertaDidik->password = request('password');
        $PesertaDidik->foto = request('foto');
        $PesertaDidik->save();

        $PesertaDidik->handleUploadFoto();

        return redirect('User/PesertaDidik')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PesertaDidik $PesertaDidik)
    {

        $data['datase$PesertaDidik'] = $PesertaDidik;
        return view('User.datase$PesertaDidik.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PesertaDidik $PesertaDidik)
    {

        $data['PesertaDidik'] = $PesertaDidik;
        return view('User.PesertaDidik.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PesertaDidik $PesertaDidik)
    {
        // $datapegawai->id = request()->id;



        return redirect('User/PesertaDidik')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PesertaDidik $PesertaDidik)
    {
        $PesertaDidik->handleDelete();
        $PesertaDidik->delete();

        return redirect('User/PesertaDidik');
    }

    public function cetak_pdf(PesertaDidik $PesertaDidik)
    {
        $data['PesertaDidik'] = $PesertaDidik;
        return view('User.PesertaDidik.cetak_pdf', $data);
    }
}