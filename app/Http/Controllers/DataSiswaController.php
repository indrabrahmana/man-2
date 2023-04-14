<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswa;

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
        return view('user.datasiswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('user.datasiswa.create');
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

        return redirect('user/siswa')->with('success', 'Data berhasil ditambahkan');
    }




    public function edit(DataSiswa $DataSiswa)
    {

        $data['datasiswa'] = $DataSiswa;
        return view('user.datasiswa.edit', $data);
    }




    public function delete(DataSiswa $datasiswa)
    {
        $datasiswa->delete();

        return redirect('user/siswa');
    }


}