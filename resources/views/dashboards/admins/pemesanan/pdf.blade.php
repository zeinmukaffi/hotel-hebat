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
                <td>{{ $item -> nama }}</td>
                <td>{{ $item -> alamat }}</td>
                <td>{{ $item -> email }}</td>
                <td>{{ $item -> no_telp }}</td>
                <td>{{ $item -> tipe_kamar }}</td>
                <td>{{ $item -> jumlah_kamar }}</td>
                <td>{{ $item -> tanggal_checkin }}</td>
                <td>{{ $item -> tanggal_checkout }}</td>
                <td>{{ $item -> harga }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>