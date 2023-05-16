@extends('layouts.main')

@section('title', 'Halaman Utama')

@section('container')
    <h1>Daftar Tempat Magang</h1>
    <table id="datatable" class="table dislpay">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama TPS</th>
                <th scope="col">Longitude</th>
                <th scope="col">Latitude</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">Volume</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($magang as $data)
                <tr>
                    <td>{{ $data->tempat_magang }}</td>
                    <td>{{ $data->longitude }}</td>
                    <td>{{ $data->latitude }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->deskripsi }}</td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ url('api/magang') }}",
                "columns": [
                    { "data": "tempat_magang" },
                    { "data": "longitude" },
                    { "data": "latitude" },
                    { "data": "alamat" },
                    { "data": "deskripsi" }
                ]
            });
        });
    </script>
@endsection
