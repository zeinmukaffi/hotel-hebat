@extends('layouts.resepsionis')
@section('content')
<div class="card">
    <div class="card-body">
        <h5>Pesan Hotel</h6>
        <form action="{{ url('pesanhotel') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3">
                <label class="form-label">Nama Anda</label>
                <input type="text" class="form-control" placeholder="Masukan Nama Anda" name="nama">
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Masukan Alamat Anda" style="height: 100px"
                        name="alamat"></textarea>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" placeholder="Masukan Email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">No. Telepon</label>
                <input type="number" placeholder="Masukan Nomor Telepon" name="no_telp" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipe Kamar</label>
                <select required class="form-control form-select" name="nomor_kamar_id" id="nomor_kamar_id">
                    <option selected disabled>Pilih Tipe Kamar</option>
                    @foreach ($kamar as $item)
                    <option value="{{ $item->id }}">{{ $item->tipe_kamar }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Kamar</label>
                <select name="jumlah_kamar_pesan">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Checkin</label>
                <input type="date" placeholder="Masukan Tanggal Checkin" name="tanggal_checkin" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Tangal Checkout</label>
                <input type="date" placeholder="Masukan Tanggal Checkout" name="tanggal_checkout" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select required class="form-select form-control" name="status">
                    <option value="CheckIn">Check In</option>
                </select>
            </div>
            <button type="submit" class="btn btn-info">Simpan</button>
        </form>
    </div>
</div>
@endsection
