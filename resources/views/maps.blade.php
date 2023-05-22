@extends('layouts.main')

@section('container')
<div class="col-12">

    <div id="map" style="width: 1000px; height: 530px"></div>

    <script>
        var map = L.map('map').setView([-7.250445, 112.768845], 13);

        L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);

        var greenIcon = L.icon({
            iconUrl: '{{ asset('images/logos/office.png') }}',

            iconSize: [30], // size of the icon
            iconAnchor: [1, 1], // point of the icon which will correspond to marker's location
            popupAnchor: [15, 1] // point from which the popup should open relative to the iconAnchor
        });

        $(document).ready(function() {
            $.getJSON('titik/json', function(data) {
                $.each(data, function(index) {
                    let marker = L.marker([data[index].longitude, data[index].latitude],{icon: greenIcon} ).addTo(
                        map);
                    $.getJSON('titik/lokasi/' + data[index].id, function(detail) {
                        marker.on('click', (e) => {
                            var html = '<h5>Nama Lokasi : ' + detail.tempat_magang +
                                '</h5>';
                            html += '<h6>Alamat :' + detail.alamat + '</h6>';
                            html += '<p><a href="/detail/' + detail.id +
                                '">Detail</a></p>';

                            marker.bindPopup(html);
                        });
                    });
                });
            });
        });
    </script>
</div>
@endsection
