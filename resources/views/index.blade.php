<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nama TPS</th>
                <th>Longitude</th>
                <th>Latitude</th>
                <th>Alamat</th>
                <th>Kecamatan</th>
                <th>Volume</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tps as $tp)
                <tr>
                    <td>{{ $tp->nama_tps }}</td>
                    <td>{{ $tp->longitude }}</td>
                    <td>{{ $tp->latitude }}</td>
                    <td>{{ $tp->alamat }}</td>
                    <td>{{ $tp->kecamatan }}</td>
                    <td>{{ $tp->volume }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
