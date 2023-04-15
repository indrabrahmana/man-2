@extends('admin.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('admin/nilai')}}" class="btn btn-dark"><i class="fa fa-arrow-left"></i> Kembali</a>
            <div class="card mt-2">
                <div class="card-header">
                    <div class="card-title">Tambah Nilai</div>
                </div>
                <div class="card-body">
                    <form action="{{url('nilai/nilai', $nilai->id)}}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="" class="control-label">Semester</label>
                            <input type="text" class="form-control" name="semester" value="{{$nilai->semester}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Sikap</label>
                            <input type="text" class="form-control" name="sikap" value="{{$nilai->sikap}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Pengetahuan</label>
                            <input type="text" class="form-control" name="pengetahuan" value="{{$nilai->pengetahuan}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Keterampilan</label>
                            <input type="text" class="form-control" name="keterampila" value="{{$nilai->keterampilan}}">
                        </div>
                      
                        <button class="btn btn-warning float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection