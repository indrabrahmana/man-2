<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminWebController extends Controller
{

    public function index()
    {

        $data['list_admin'] = Admin::all();
        return view('admin.admin.index', $data);
    }


    public function create()
    {
        return view('admin.admin.create');
    }


    public function store(Request $request)
    {
        $admin = new Admin();
        $admin->nama = request('nama');
        $admin->username = request('username');
        $admin->email = request('email');
        $admin->password = bcrypt(request('password'));
        $admin->save();

        return redirect('admin/admin')->with('success', 'Data berhasil ditambahkan');

    }


    public function show($id)
    {
        //
    }

    public function edit(Admin $admin)
    {
        $data['admin'] = $admin;
        return view('admin.admin.edit', $data);
    }


    public function update(Admin $admin)
    {
        $admin->nama = request('nama');
        $admin->username = request('username');
        $admin->email = request('email');
        if (request('password'))
            $admin->password = bcrypt(request('password'));
        $admin->save();

        return redirect('admin/admin')->with('success', 'Data berhasil diubah');
    }

    public function delete(Admin $admin)
    {
        $admin->delete();

        return redirect('admin/admin');
    }
}