@extends('layouts.main')

@section('title', 'Halaman Utama')

@section('container')
    <h1>Daftar Tempat Magang</h1>
    <table id="datatable" class="table dislpay">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama Perusahaan</th>
                <th scope="col">Longitude</th>
                <th scope="col">Latitude</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($magang as $data)
                <tr>
                    <td>{{ $data->tempat_magang }}</td>
                    <td>{{ $data->longitude }}</td>
                    <td>{{ $data->latitude }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->kecamatan }}</td>
                    <td>{{ $data->deskripsi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection
