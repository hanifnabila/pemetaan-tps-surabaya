@extends('layouts.main')

@section('container')
    <h1>Pemetaan Lokasi Magang</h1>
    <div class="col-12">

        <div id="map" style="width: 1000px; height: 530px"></div>

        <script>
            var map = L.map('map').setView([-7.250445, 112.768845], 13);

            L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
            }).addTo(map);

            // L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            //     maxZoom: 20,
            //     attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
            // }).addTo(map);

            $(document).ready(function() {
                $.getJSON('titik/json', function(data) {
                    $.each(data, function(index) {

                        var iconOptions = {
                            default: L.icon({
                                iconUrl: '{{ asset('images/logos/office.png ') }}',
                                iconSize: [30],
                                iconAnchor: [1, 1],
                                popupAnchor: [15, 1]
                            }),
                            Web: L.icon({
                                iconUrl: '{{ asset('images/logos/webprogramming.png ') }}',
                                iconSize: [30],
                                iconAnchor: [1, 1],
                                popupAnchor: [15, 1]
                            }),
                            Mobile: L.icon({
                                iconUrl: '{{ asset('images/logos/mobile.png ') }}',
                                iconSize: [30],
                                iconAnchor: [1, 1],
                                popupAnchor: [15, 1]
                            })
                        };

                        if(data[index].posisi == 'Web') {
                            var marker = L.marker([data[index].longitude, data[index].latitude], {
                            icon: iconOptions["Web"]
                        }).addTo(
                            map);
                        } else if(data[index].posisi == 'Mobile'){
                            var marker = L.marker([data[index].longitude, data[index].latitude], {
                            icon: iconOptions["Mobile"]
                        }).addTo(
                            map);
                        } else {
                            var marker = L.marker([data[index].longitude, data[index].latitude], {
                            icon: iconOptions["default"]
                        }).addTo(
                            map);
                        }

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

            var theMarker;

            map.on('click', function(e) {
                let latitude = e.latlng.lat.toString().substring(0, 15);
                let longitude = e.latlng.lng.toString().substring(0, 15);

                if (theMarker != undefined) {
                    map.removeLayer(theMarker);
                };

                var popupContent = "Your location : " + latitude + ", " + longitude + ".";
                popupContent += '<br><a href="{{ asset('tambahData') }}?latitude=' + latitude + '&longitude=' +
                    longitude + '">Add new raod condition here</a>';

                theMarker = L.marker([latitude, longitude]).addTo(map);
                theMarker.bindPopup(popupContent)
                    .openPopup();
            });

            var wayPoints = [
                L.latLng(-7.266097156991, 112.71148681640),
                L.latlng(-7.297087564171, 112.66410827636)
            ];

            var routeControl = L.Routing.control({
                waypoints: wayPoints,
                routeWhileDragging: true,
                lineOptions: {
                    styles: [{ color: 'green', opacity: 1, weight: 5}]
                },
            }). addTo(map);

            routeControl.on('routesfound', function (e) {
                console.log(e.routes[0]);

                var distance = e.routes[0].sumary.totalDistance;
                var time = e.routes[0].sumary.totalTime;

            });
        </script>
    </div>
@endsection
