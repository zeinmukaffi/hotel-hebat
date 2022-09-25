@extends('layouts.after')
@section('content')

<section id="booking">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="form">
                    <form action="{{ url('pemesananhotel') }}" method="POST">
                        @csrf
                        <h5 class="fw-bold mb-3">Data Diri</h5>
                        <div class="mb-3">
                            <label class="fw-normal">nama</label>
                            <br>
                            <input type="text" name="nama" placeholder="isi nama anda">
                        </div>
                        <div class="mb-3">
                            <label class="fw-normal">alamat</label>
                            <br>
                            <textarea name="alamat"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="fw-normal">email</label>
                            <br>
                            <input type="email" name="email" placeholder="isi email anda">
                        </div>
                        <div class="mb-3">
                            <label class="fw-normal">no telepon</label>
                            <br>
                            <input type="number" name="no_telp" placeholder="isi no telepon anda">
                        </div>
                        <hr>
                        <h5 class="fw-bold mb-3">Booking Detail</h5>
                        <div class="mb-3">
                            <label class="fw-normal">tipe kamar</label>
                            <br>
                            <select name="nomor_kamar_id">
                                <option selected disabled>pilih tipe kamar</option>
                                @foreach ($kamar as $item)
                                <option value="{{ $item->id }}">{{ $item->tipe_kamar }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="fw-normal">jumlah kamar</label>
                            <br>
                            <input type="text" name="jumlah_kamar_pesan" placeholder="berapa anda memesan kamar?">
                        </div>
                        <div class="mb-3">
                            <label class="fw-normal">tanggal check in</label>
                            <br>
                            <input type="date" name="tanggal_checkin" placeholder="isi nama anda">
                        </div>
                        <div class="mb-3">
                            <label class="fw-normal">tanggal check out</label>
                            <br>
                            <input type="date" name="tanggal_checkout" placeholder="isi nama anda">
                        </div>
                        <div class="mb-3">
                            <label class="fw-normal">status</label>
                            <br>
                            <select name="status">
                                <option value="CheckIn" selected>Check In</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info text-white">pesan</button>
                        <a href="/user/dashboard" class="btn btn-danger text-white">cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
