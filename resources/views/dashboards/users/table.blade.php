@extends('layouts.after')
@section('content')    
<section id="table">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <h3 class="fw-bold me-2">bukti pesan</h3>
                    <p class="fst-italic text-danger mt-2">*harap screenshot</p>
                </div>
                    @foreach ($datapemesanan as $item)
                        <div class="row">
                            <div class="col-4"><span>nama pemesan : <p class="fw-bold">{{ $item->nama }}</p></span>
                            </div>
                            <div class="col-4"><span>email pemesan : <p class="fw-bold">{{ $item->email }}</p></span></div>
                            <div class="col-4"><span>telepon pemesan : <p class="fw-bold">{{ $item->no_telp }}</p></span></div>
                        </div>
                        <div class="row">
                            <div class="col-4"><span>tipe kamar : <p class="fw-bold">{{ $item->kamar->tipe_kamar }}</p></span></div>
                            <div class="col-4"><span>tanggal check in : <p class="fw-bold">{{ $item->tanggal_checkin }}</p</span></div>
                            <div class="col-4"><span>tanggal check out : <p class="fw-bold">{{ $item->tanggal_checkout }}</p></span></div>
                        </div>
                        <div class="row">
                            <div class="col-4"><span>jumlah kamar yang dipesan kamar : <p class="fw-bold">{{ $item->jumlah_kamar_pesan }}</p></span></div>
                            <div class="col-4"><span>total yang harus dibayar :<p class="fw-bold">Rp. {{ $item->jumlah_kamar_pesan * $item->kamar->harga_kamar }}</p</span></div>
                            <div class="col-4 mt-4"><a href="/user/dashboard" class="btn btn-info text-white">done</a>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</section>
@endsection