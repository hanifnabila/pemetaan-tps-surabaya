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

        fetch('/geojson-data')
        .then(response => response.json())
        .then(data => {
            L.geoJSON(data, {
                pointToLayer: function(feature, latlng) {
                    return L.marker(latlng); // Atur tampilan markernya sesuai kebutuhan Anda
                },
                onEachFeature: function(feature, layer) {
                    if (feature.properties) {
                        layer.bindPopup(feature.properties.name); // Atur konten popup sesuai kebutuhan Anda
                    }
                }
            }).addTo(map);
        });

    </script>

@endsection
