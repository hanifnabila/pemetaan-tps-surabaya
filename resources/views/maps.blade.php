@extends('layouts.main')

@section('container')
    <div id="map" style="height: 500px;"></div>

    <script>
        var map = L.map('map').setView([-7.250445, 112.768845], 13);

        L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);

        L.marker([-7.282919, 112.795343], ).addTo(map);

        $(document).ready(function() {
            $.getJSON('titik/json', function(data) {
                $.each(data, function(index) {
                    L.marker([data[index].longitude, data[index].latitude], ).addTo(map);
                });
            });
        });

        var icon = L.icon({
            iconUrl: 'public/images/logos/favicon.png', // Ganti dengan path ikon yang sesuai
            iconSize: [32, 32], // Atur ukuran ikon
            iconAnchor: [16, 32], // Atur titik ancor ikon (titik yang menunjuk ke lokasi pada peta)
        });
    </script>
@endsection
