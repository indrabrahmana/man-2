<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['list_datasiswa'] = DataSiswa::all();
        return view('user.dataSiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('user.DataSiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $datasiswa = new DataSiswa;
        $datasiswa->nis = request('nis');
        $datasiswa->nisn = request('nisn');
        $datasiswa->nama_lengkap = request('nama_lengkap');
        $datasiswa->nama_panggilan = request('nama_panggilan');
        $datasiswa->save();

        $datasiswa->handleUploadFoto();

        return redirect('User/DataSiswa')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DataSiswa $DataSiswa)
    {

        $data['datase$DataSiswa'] = $DataSiswa;
        return view('User.datase$DataSiswa.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DataSiswa $DataSiswa)
    {

        $data['DataSiswa'] = $DataSiswa;
        return view('User.DataSiswa.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DataSiswa $DataSiswa)
    {
        // $datapegawai->id = request()->id;



        return redirect('User/DataSiswa')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataSiswa $DataSiswa)
    {
        $DataSiswa->handleDelete();
        $DataSiswa->delete();

        return redirect('User/DataSiswa');
    }

    public function cetak_pdf(DataSiswa $DataSiswa)
    {
        $data['DataSiswa'] = $DataSiswa;
        return view('User.DataSiswa.cetak_pdf', $data);
    }
}