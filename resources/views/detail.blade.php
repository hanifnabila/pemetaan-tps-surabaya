@extends('layouts.main')

@section('title', 'Detail Informasi')

@section('container')
    <h1>Detail Informasi</h1>
    <img style="width:150px;"
        src="{{ asset('storage/' . $data->path_gambar) }}"
        alt="">
    <h3>{{ $data->tempat_magang }}</h3>
    <a href="{{ $data->domain }}">{{ $data->domain }}</a>
    <hr>
    <h6>Periode Kegiatan</h6>
    <p>6 Bulan</p>
    <hr>
    <h5 style="font-weight:bold">Rincian Kegiatan</h5>
    <p class="text-justify">{{ $data->deskripsi }}</p>
    <hr>
    <h5>Tentang Perusahaan</h5>
@endsection
