@extends('admin.base')
@section('content')
    <div class="container-fluid mt-2">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Admin Web</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Admin Web</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <a href="{{ url('admin/admin/create') }}" class="btn btn-outline-success"><i class="fa fa-plus"></i>
                            Tambah Admin</a>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered table-datatable">
                                <thead class="thead-default">
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_admin as $admin)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/admin', $admin->id) }}/edit"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                                    @include('admin.utils.delete', [
                                                        'url' => url('admin/admin', $admin->id),
                                                    ])
                                                </div>
                                            </td>
                                            <td>{{ $admin->nama }}</td>
                                            <td>{{ $admin->username }}</td>
                                            <td>{{ $admin->email }}</td>
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
