@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Total Magang
                </div>
                <div class="card-body">
                    <h5 class="card-title">Total Perusahaan saat ini</h5>
                    <h6 class="card-text">46</h6> <a href="{{ asset('magang') }}" class="btn btn-primary">Lihat
                        Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title">Total Mahasiswa</h5>
                    <h6 class="card-text">46</h6> <a href="{{ asset('magang') }}" class="btn btn-primary">Lihat
                        Detail</a>
                </div>
            </div>
        </div>
    </div>
@endsection
