@extends('user.base')
@section('content')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <h5><strong>// Data Siswa</strong></h5>
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
                                    <th>NIS</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
