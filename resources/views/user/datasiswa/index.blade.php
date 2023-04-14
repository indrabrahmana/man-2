@extends('user.base')
@section('content')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <h5><strong>Data Siswa</strong></h5>
                <div class="card mt-3">
                    <div class="card-body">
                        <a href="{{ url('user/siswa/create') }}" class="btn btn-outline-success "><i class="fa fa-plus"></i>
                            Tambah
                            Data</a>
                        <div class="table-responsive mt-3">
                            <table class="table table-datatable table-bordered" cellspacing="0">
                                <thead class="thead-default">
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>NIS</th>
                                    <th>NISN</th>
                                    <th>Nama Lengkap</th>
                                    <th>Panggilan</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_datasiswa as $siswa)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('user/siswa', $siswa->id) }}/edit"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                                    @include('user.utils.delete', [
                                                        'url' => url('user/siswa', $siswa->id),
                                                    ])
                                                </div>
                                            </td>
                                            <td>{{ $siswa->nis }}</td>
                                            <td>{{ $siswa->nisn }}</td>
                                            <td>{{ $siswa->nama_lengkap }}</td>
                                            <td>{{ $siswa->nama_panggilan }}</td>
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
