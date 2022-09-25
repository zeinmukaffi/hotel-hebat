@extends('layouts.resepsionis')
@section('content')
<div class="card">
    <div class="card-body">
        <h5>Edit Data Pesanan</h6>
        <form action="{{ url('pesanhotel',$pesan->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Anda</label>
                <input type="text" class="form-control" placeholder="Masukan Nama Anda" name="nama" value="{{ $pesan->nama }}">
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Masukan Alamat Anda" style="height: 100px"
                        name="alamat">{{ $pesan -> alamat }}</textarea>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" placeholder="Masukan Email" name="email" value="{{ $pesan->email }}" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">No. Telepon</label>
                <input type="number" placeholder="Masukan Nomor Telepon" name="no_telp" value="{{ $pesan->no_telp }}" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipe Kamar</label>
                <select required class="form-control form-select" name="nomor_kamar_id" id="nomor_kamar_id">
                    <option selected value="{{ $pesan->nomor_kamar_id }}">{{ $pesan->kamar->tipe_kamar }}</option>
                    @foreach ($kamar as $item)
                    <option value="{{ $item->id }}">{{ $item->tipe_kamar }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">jumlah Kamar</label>
                <input type="number" placeholder="Masukan Jumlah Kamar Dipesan" name="jumlah_kamar_pesan"
                    class="form-control" value="{{ $pesan->jumlah_kamar_pesan }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Checkin</label>
                <input type="date" placeholder="Masukan Tanggal Checkin" name="tanggal_checkin" value="{{ $pesan->tanggal_checkin }}" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Tangal Checkout</label>
                <input type="date" placeholder="Masukan Tanggal Checkout" name="tanggal_checkout" value="{{ $pesan->tanggal_checkout }}" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select required class="form-select form-control" name="status">
                    <option selected disabled>Check In</option>
                    <option value="CheckOut">Check Out</option>
                </select>
            </div>
            <button type="submit" class="btn btn-info">Simpan</button>
        </form>
    </div>
</div>
@endsection
