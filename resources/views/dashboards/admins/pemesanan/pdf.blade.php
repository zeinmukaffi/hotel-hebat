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
            <th>Nama Customer</th>
            <th>Alamat Customer</th>
            <th>Email</th>
            <th>Nomor Telepon</th>
            <th>Tipe Kamar</th>
            <th>Jumlah Kamar</th>
            <th>Tanggal Checkin</th>
            <th>Tanggal Checkout</th>
            <th>Total Harga</th>
        </tr>
        @foreach ( $data as $data )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data -> nama }}</td>
                <td>{{ $data -> alamat }}</td>
                <td>{{ $data -> email }}</td>
                <td>{{ $data -> no_telp }}</td>
                <td>{{ $data -> kamar -> tipe_kamar }}</td>
                <td>{{ $data -> jumlah_kamar_pesan }}</td>
                <td>{{ $data -> tanggal_checkin }}</td>
                <td>{{ $data -> tanggal_checkout }}</td>
                <td>{{ Carbon\Carbon::parse($data->tanggal_checkin)->diffInDays($data->tanggal_checkout) * $data->kamar->harga_kamar * $data->jumlah_kamar_pesan }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>