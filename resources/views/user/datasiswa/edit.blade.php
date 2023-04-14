@extends('admin.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('admin/datasekolah') }}" class="btn btn-dark "><i class="fas fa-arrow-left">
                    </i> Kembali</a>
                <div class="card mt-2">
                    <div class="card-header">
                        <strong> Edit Data sekolah</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/datasekolah', $datasekolah->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row ">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">NIK</label>
                                        <input type="text" class="form-control" name=""
                                            value="{{ $datasekolah-> }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama"
                                            value="{{ $datasekolah->nama }}">
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
                                        <input type="text" class="form-control" name="email"
                                            value="{{ $datasekolah->email }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success float-right mt-3"> <i class="fa fa-save"></i>
                                Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
