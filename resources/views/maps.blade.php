<!DOCTYPE html>
<html lang="en">

<head>
    <base target="_top">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quick Start - Leaflet</title>

    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .leaflet-container {
            height: 400px;
            width: 600px;
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>

<body>

    <div id="map" style="height: 500px;"></div>
    <script>
        const map = L.map('map').setView([-7.250445, 112.768845], 13);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var marker = L.marker([-7.296137, 112.803033]).addTo(map);

        var circle = L.circle([-7.276014, 112.793791], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 500
        }).addTo(map);

        var polygon = L.polygon([
            [51.509, -0.08],
            [51.503, -0.06],
            [51.51, -0.047]
        ]).addTo(map);

        marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
        circle.bindPopup("I am a circle.");
        polygon.bindPopup("I am a polygon.");

        var popup = L.popup()
            .setLatLng([-7.296137, 112.803033])
            .setContent("I am a standalone popup.")
            .openOn(map);
    </script>


<form action="{{ route('tps.store') }}" method="POST">
    @csrf
    <div>
        <label for="nama_tps">Nama TPS</label>
        <input type="text" name="nama_tps" id="nama_tps" required>
    </div>
    <div>
        <label for="longitude">Longitude</label>
        <input type="text" name="longitude" id="longitude" required>
    </div>
    <div>
        <label for="latitude">Latitude</label>
        <input type="text" name="latitude" id="latitude" required>
    </div>
    <div>
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" required></textarea>
    </div>
    <div>
        <label for="volume">Volume</label>
        <input type="text" name="volume" id="volume" required>
    </div>
    <button type="submit">Simpan</button>
</form>

</body>

</html>
