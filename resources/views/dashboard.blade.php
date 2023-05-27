@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-header">
      Total Magang
    </div>
    <div class="card-body">
      <h5 class="card-title">Total Magang Saat Ini</h5>
      <h6 class="card-text">46</h6>
      {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}

      <a href="/daftarTps" class="btn btn-primary">Lihat Detail</a>
    </div>
  </div>
@endsection
