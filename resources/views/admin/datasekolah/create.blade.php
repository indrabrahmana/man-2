@extends('admin.base')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('admin/datasekolah') }}" class="btn btn-dark "><i class="fas fa-arrow-left">
                    </i> Kembali</a>
                <div class="card mt-2">
                    <div class="card-header">
                        <strong> Tambah Data Sekolah</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/datasekolah') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">NIK</label>
                                        <input type="text" class="form-control" name="nik" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                                </div>
                            </div>
                           
                            <hr>
                            <strong>Akun</strong>
                            <hr>
                            <div class="row">
                                <div class="col-md 6">
                                    <div class="form-grup">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Password</label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success float-right mt-4"> <i class="fa fa-save"></i>
                                Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
