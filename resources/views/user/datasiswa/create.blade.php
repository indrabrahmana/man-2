@extends('admin.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('user/siswa') }}" class="btn btn-dark "><i class="fas fa-arrow-left">
                    </i> Kembali</a>
                <div class="card mt-2">
                    <div class="card-header">
                        <strong> Tambah Data Siswa</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('user/siswa') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">NIS</label>
                                        <input type="number" class="form-control" name="nis" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">NISN</label>
                                        <input type="number" class="form-control" name="nisn" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md 6">
                                    <div class="form-grup">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama_lengkap" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Nama Panggilan</label>
                                        <input type="text" class="form-control" name="nama_panggilan" required>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-warning float-right mt-4"> <i class="fa fa-save"></i>
                                Simpan</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
