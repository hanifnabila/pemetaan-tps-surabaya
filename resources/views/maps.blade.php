@extends('layouts.main')

@section('container')
    <div id="map" style="height: 500px;"></div>

    <script>
        var map = L.map('map').setView([-7.250445, 112.768845], 13);

        L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);

        $(document).ready(function() {
            $.getJSON('titik/json', function(data) {
                $.each(data, function(index) {
                    let marker = L.marker([data[index].longitude, data[index].latitude],).addTo(map);
                    $.getJSON('titik/lokasi/'+data[index].id, function(detail) {
                    marker.on('click',(e)=>{
                            var html = '<h5>Nama Lokasi : '+detail.tempat_magang+'</h5>';
                            html += '<h6>Alamat :'+detail.alamat+'</h6>';
                            html += '<p><a href="/detail/'+detail.id+'">Detail</a></p>';

                            marker.bindPopup(html);
                            });
                        });
                });
            });
        });
    </script>
@endsection
