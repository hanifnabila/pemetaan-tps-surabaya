@extends('layouts.main')

@section('container')
    <h5 class="card-title fw-semibold mb-4">Tambah TPS</h5>
    <div class="card">
        <div class="card-body ">
            <form action="{{ route('tps.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_tps" class="form-label">Nama TPS</label>
                    <input type="text" name="nama_tps" class="form-control" id="nama_tps" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="longitude" class="form-label">Longitude</label>
                    <input type="text" name="longitude" class="form-control" id="longitude">
                </div>
                <div class="mb-3">
                    <label for="latitude" class="form-label">Latitude</label>
                    <input type="text" name="latitude" class="form-control" id="latitude">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat">
                </div>
                <div class="mb-3">
                    <label for="volume"  class="form-label">Volume</label>
                    <input type="text" name="volume" class="form-control" id="volume">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection
