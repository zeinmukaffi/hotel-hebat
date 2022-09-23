<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <p>{{ $title }}</p>
    <p>generate at {{ $date }}</p>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Tipe Kamar</th>
            <th>Jumlah Kamar</th>
            <th>Fasilitas Kamar</th>
            <th>Foto Kamar</th>
            <th>Harga Kamar</th>
        </tr>
        @foreach ( $data as $data )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->tipe_kamar }}</td>
                <td>{{ $data->jumlah_kamar }}</td>
                <td>{{ $data->fasilitas_kamar }}</td>
                <td>{{ $data->foto_kamar }}</td>
                <td>{{ $data->harga_kamar }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>