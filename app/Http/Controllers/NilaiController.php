<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nilai;


class NilaiController extends Controller{
    function index(){
       
        $data['list_nilai'] = Nilai::all();
        return view('admin.nilai.index', $data);
    }

    function create(){
       
        return view('admin.nilai.create');
        
    }

    function store(){
        $nilai = new Nilai;
        $nilai->semester = request('semester');  
        $nilai->sikap = request('sikap');
        $nilai->pengetahuan = request('pengetahuan');
        $nilai->keterampilan = request('keterampilan');       
        $nilai->save();

        

        return redirect('admin/nilai')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function show(Nilai $nilai){
       
        $data['nilai'] = $nilai;
        return view('admin.nilai.show', $data);
        
    }

    function edit(Nilai $nilai){
       
        $data['nilai'] = $nilai;
        return view('nilai.edit', $data);
    }

    function update(Nilai $nilai){
        $nilai->semester = request('semester');  
        $nilai->sikap = request('sikap');
        $nilai->pengetahuan = request('pengetahuan');
        $nilai->keterampilan = request('keterampilan');     
        $nilai->save();

        

        

        return redirect('admin/nilai')->with('success', 'Data Berhasil Diedit');
    
        
    }

    function destroy(Nilai $nilai){
       
        $nilai->handleDelete();
        $nilai->delete($nilai);

        return redirect('admin/nilai')->with('danger', 'Data Berhasil Dihapus');
     
    }

    
}