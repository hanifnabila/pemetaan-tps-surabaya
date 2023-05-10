@extends('layouts.main')

@section('title', 'Halaman Utama')

@section('container')
    <h1>Daftar TPS</h1>
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
            @foreach ($tps as $tp)
                <tr>
                    <td>{{ $tp->nama_tps }}</td>
                    <td>{{ $tp->longitude }}</td>
                    <td>{{ $tp->latitude }}</td>
                    <td>{{ $tp->alamat }}</td>
                    <td>{{ $tp->kecamatan }}</td>
                    <td>{{ $tp->volume }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
