@extends('admin.base')
@section('content')

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <h5><strong>// Data Sekolah</strong></h5>
                <div class="card mt-3">
                    <div class="card-body">
                        <a href="{{ url('admin/datasekolah/create') }}" class="btn btn-outline-success "><i
                                class="fa fa-plus"></i>
                            Tambah
                            Data</a>
                        <div class="table-responsive mt-3">
                            <table class="table table-datatable table-bordered" cellspacing="0">
                                <thead class="thead-default">
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Divisi</th>
                                    <th>Jabatan</th>
                                    <th>Tanggal Masuk</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_datasekolah as $datasekolah)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/datasekolah', $datasekolah->id) }}"
                                                        class="btn btn-dark"><i class="fa fa-info"
                                                            data-feather="check-square"></i> Lihat</a>

                                                    <a href="{{ url('admin/datasekolah', $datasekolah->id) }}/edit"
                                                        class="btn btn-warning"><i class="fa fa-edit"
                                                            data-feather="check-square"></i> Edit</a>
                                                    @include('admin.utils.delete', [
                                                        'url' => url('admin/datasekolah', $datasekolah->id),
                                                    ])
                                                </div>
                                            </td>
                                            <td>{{ $datasekolah->nama }}</td>
                                            
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
