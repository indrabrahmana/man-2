<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;


class KelasController extends Controller{
    function index(){
       
        $data['list_kelas'] = Kelas::all();
        return view('admin.kelas.index', $data);
    }

    function create(){
       
        return view('admin.kelas.create');
        
    }

    function store(){
        $kelas = new Kelas;
        $kelas->nama = request('nama');         
        $kelas->save();

        

        return redirect('admin/kelas')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function show(Kelas $kelas){
       
        $data['kelas'] = $kelas;
        return view('admin.kelas.show', $data);
        
    }

    function edit(Kelas $kelas){
       
        $data['kelas'] = $kelas;
        return view('kelas.edit', $data);
    }

    function update(Kelas $kelas){
        $kelas->nama = request('nama');        
        $kelas->save();

        

        

        return redirect('admin/kelas')->with('success', 'Data Berhasil Diedit');
    
        
    }

    function destroy(Kelas $kelas){
       
        $kelas->handleDelete();
        $kelas->delete($kelas);

        return redirect('admin/kelas')->with('danger', 'Data Berhasil Dihapus');
     
    }

    
}