@extends('layouts.main')

@section('container')
    <div id="map" style="height: 500px;"></div>

    <script>
        var map = L.map('map').setView([-7.250445, 112.768845], 13);

        L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);

        // -7.282919, 112.795343


        L.marker([-7.282919, 112.795343], ).addTo(map);
        L.marker([697457.79, 9193848.53], ).addTo(map);
        L.marker([698471.9, 9192250.33], ).addTo(map);

        var recycleIcon = L.icon({
            iconUrl: 'public/images/logos/recycle.png',
            iconSize: [38, 95], // size of the icon
            shadowSize: [50, 64], // size of the shadow
            iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62], // the same for the shadow
            popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
        });

        marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
        circle.bindPopup("I am a circle.");
        polygon.bindPopup("I am a polygon.");

        var popup = L.popup()
            .setLatLng([-7.296137, 112.803033])
            .setContent("I am a standalone popup.")
            .openOn(map);
    </script>
@endsection
