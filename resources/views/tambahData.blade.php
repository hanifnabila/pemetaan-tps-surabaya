@extends('layouts.main')

@section('container')
    <div class="col-8">

    </div>
    <h5 class="card-title fw-semibold mb-4">Tambah Tempat Magang</h5>
    <div class="card">
        <div class="card-body ">
            <form action="{{ route('magang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tempat-magang" class="form-label">Nama Perusahaan</label>
                            <input type="text" name="tempat-magang" class="form-control" id="tempat-magang"
                                aria-describedby="emailHelp">
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
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control" id="kecamatan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="posisi" class="form-label">Posisi</label>
                            <input type="text" name="posisi" class="form-control" id="posisi">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi">
                        </div>
                        <div class="mb-3">
                            <label for="domain" class="form-label">Domain</label>
                            <input type="text" name="domain" class="form-control" id="domain">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Upload Gambar</label>
                            <input class="form-control" type="file" id="gambar" name="gambar">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>
        </div>

        <script>
            // Menampilkan pop-up alert saat halaman dimuat jika ada pesan sukses dalam session
            document.addEventListener("DOMContentLoaded", function() {
              @if(session('success'))
                swal("Sukses!", "{{ session('success') }}", "success");
              @endif
            });
          </script>
@endsection
