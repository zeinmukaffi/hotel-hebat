@extends('layouts.after')
@section('content')    
<section id="table">
    <div class="container">
        <div class="card">
            <div class="card-body">
                    <h3 class="fw-bold mb-3">bukti booking</h3>
                    @foreach ($datapemesanan as $item)
                        <div class="row">
                            <div class="col-4"><span>nama pemesan : <p class="fw-bold">{{ $item->nama }}</p></span>
                            </div>
                            <div class="col-4"><span>email pemesan : <p class="fw-bold">{{ $item->email }}</p></span></div>
                            <div class="col-4"><span>telepon pemesan : <p class="fw-bold">{{ $item->no_telp }}</p></span></div>
                        </div>
                        <div class="row">
                            <div class="col-4"><span>tipe kamar : <p class="fw-bold">{{ $item->kamar->tipe_kamar }}</p></span></div>
                            <div class="col-4"><span>tanggal check in : <p class="fw-bold">{{ Carbon\Carbon::parse($item->tanggal_checkin)->format("d/m/Y") }}</p</span></div>
                            <div class="col-4"><span>tanggal check out : <p class="fw-bold">{{ Carbon\Carbon::parse($item->tanggal_checkout)->format("d/m/Y") }}</p></span></div>
                        </div>
                        <div class="row">
                            <div class="col-6"><span>jumlah kamar yang dipesan : <p class="fw-bold">{{ $item->jumlah_kamar_pesan }}</p></span></div>
                            <div class="col-6"><span>total yang harus dibayar :<p class="fw-bold">Rp. 
                            {{ Carbon\Carbon::parse($item->tanggal_checkin)->diffInDays($item->tanggal_checkout) * $item->kamar->harga_kamar * $item->jumlah_kamar_pesan }}</p</span></div>
                        </div>
                    @endforeach
                    <p class="fst-italic text-danger">*harap screenshot lalu tunjukan hasil screenshot saat melakukan pembayaran di hotel.</p>
                    <div class="col-4 mt-4"><a href="/user/dashboard" class="btn btn-info text-white">done</a>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection