@extends('admin.base')
@section('content')

<div class="container-fluid mt-2">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Mapel</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Mapel</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-body">
                    <a href="{{url('admin/mapel/create')}}" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Mapel</a> <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered table-datatable">
                            <thead class="thead-default">
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                               
                            </thead>
                            <tbody>
                                @foreach ($list_mapel  as $mapel)
                                    
                                
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{url('mapel/mapel', $mapel->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                                @include('mapel.utils.delete', ['url' => url('mapel/mapel', $mapel->id)])
                                            </div>
                                        </td>
                                        <td>{{$mapel->nama}}</td>
                                       
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