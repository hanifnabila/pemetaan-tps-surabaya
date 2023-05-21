@extends('layouts.main')

@section('title', 'Detail Informasi')

@section('container')
{{ $data }}
    <img style="width:150px;"
        src="https://yt3.googleusercontent.com/gT-42sxVf4mlb1GglgSPW5xb3v7XpCgTzR5JBTtJ8WYA_bH2T58CwPO6xG8cflPyXlH5q3oGgg=s900-c-k-c0x00ffffff-no-rj"
        alt="">
    <h1>Nama Magang</h1>
    <h6>Domainwebsite.com</h6>
    <h6>di Kota Kediri</h6>
    <hr>
    <h6>Periode Kegiatan</h6>
    <p>6 Bulan</p>
    <hr>
    <h5 style="font-weight:bold">Rincian Kegiatan</h5>
    <p class="text-justify">Perkembangan yang berjalan saat ini menjadi suatu kesempatan baik bagi perusahaan. Dengan begitu penambahan tiga
        business centers membuat Ralali.com memerlukan tata kelola yang rapi dan terorganisir dengan baik, supaya progres
        pertumbuhan di setiap lokasi bisa berjalan dengan optimal.</p>
    <hr>
    <h5>Tentang Perusahaan</h5>
@endsection
