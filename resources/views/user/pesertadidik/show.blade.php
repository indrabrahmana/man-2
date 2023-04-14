@extends('admin.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('admin/datasekolah') }}" class="btn btn-dark "><i class="fas fa-arrow-left">
                    </i> Kembali</a>
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="card-title">
                            Detail Sekolah
                            <a href="{{ url('admin/datasekolah', $datasekolah->id) }}/cetak_pdf" target="_blank"
                                class="btn btn-success float-right"> Cetak</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>{{ $datasekolah->nama }}</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">NIK</div>
                                        <div class="col-md-6">{{ $datasekolah->nik }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">Email</div>
                                        <div class="col-md-6">{{ $datasekolah->email }}</div>
                                    </div>
                                </div>
                                <hr>

                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body" style="height: 250px; display: flex; justify-content: center">
                                        <img style="height: 100%" src="{{ url("public/$datasekolah->foto") }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
