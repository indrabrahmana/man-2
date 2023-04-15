@extends('admin.base')
@section('content')

<div class="container-fluid mt-2">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">nilai</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">nilai</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-body">
                    <a href="{{url('admin/nilai/create')}}" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Nilai</a> <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered table-datatable">
                            <thead class="thead-default">
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Semester</th>
                                <th>Sikap</th>
                                <th>Pengetahuan</th>
                                <th>Keterampilan</th>
                               
                            </thead>
                            <tbody>
                                @foreach ($list_nilai  as $nilai)
                                    
                                
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{url('nilai/nilai', $nilai->id)}}/edit" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                                @include('nilai.utils.delete', ['url' => url('nilai/nilai', $nilai->id)])
                                            </div>
                                        </td>
                                        <td>{{$nilai->semester}}</td>
                                        <td>{{$nilai->sikap}}</td>
                                        <td>{{$nilai->pengetahuan}}</td>
                                        <td>{{$nilai->keterampilan}}</td>
                                       
                                       
                                    </tr>                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection