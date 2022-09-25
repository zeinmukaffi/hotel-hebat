@extends('layouts.resepsionis')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h6>Table Pemesanan</h6>
            <a href="{{ url('pesanhotel/create') }}" class="btn btn-success">Tambah Pesanan</a>
            <div class="table-responsive">
                <table class="table align-items-center mb-0 table-responsive">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                No</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Nama Pemesan</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Alamat Pemesan</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Email</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Nomor Telepon</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Tipe Kamar</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Jumlah Kamar</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Tanggal Checkin</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Tanggal Checkout</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Status</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datapemesanan as $index => $item)
                        <tr>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0 text-center">
                                    {{ $loop -> iteration }}
                                </p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0 text-center">
                                    {{ $item -> nama }}
                                </p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0 text-center">
                                    {{ $item -> alamat }}
                                </p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0 text-center">
                                    {{ $item -> email }}
                                </p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0 text-center">
                                    {{ $item -> no_telp }}
                                </p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0 text-center">
                                    {{ $item -> kamar -> tipe_kamar }}
                                </p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0 text-center">
                                    {{ $item -> jumlah_kamar_pesan }}
                                </p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0 text-center">
                                    {{ $item -> tanggal_checkin }}
                                </p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0 text-center">
                                    {{ $item -> tanggal_checkout }}
                                </p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="btn {{ ($item -> status == 'CheckIn')? 'btn-success' : 'btn-info' }} text-white" style="cursor:auto;">{{ $item->status }}</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <a href="{{ url('pesanhotel/'.$item->id.'/edit') }}" class="btn btn-icon btn-warning"><i
                                        class="fas fa-pen"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
