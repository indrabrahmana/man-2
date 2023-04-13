@extends('admin.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('admin/kelas')}}" class="btn btn-dark"><i class="fa fa-arrow-left"></i> Kembali</a>
            <div class="card mt-2">
                <div class="card-header">
                    <div class="card-title">Tambah Kelas</div>
                </div>
                <div class="card-body">
                    <form action="{{url('kelas/kelas', $kelas->id)}}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$kelas->nama}}">
                        </div>
                      
                        <button class="btn btn-warning float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection