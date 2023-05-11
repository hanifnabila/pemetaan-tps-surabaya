@extends('layouts.main')

@section('title', 'Home')

@section('container')
<div class="card">
    <div class="card-header">
      Total TPS
    </div>
    <div class="card-body">
      <h5 class="card-title">Total TPS Saat Ini</h5>
      <h6 class="card-text">133</h6>
      {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}

      <a href="/daftarTps" class="btn btn-primary">Lihat Detail</a>
    </div>
  </div>
@endsection
