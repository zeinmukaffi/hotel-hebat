@extends('layouts.after')
@section('content')

<section id="booking">
<div class="container">
    <h1>Booking Kamar</h1>
        <div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ url('pemesananhotel') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <div class="mb-3">
                          <label class="form-label">Nama Anda</label>
                          <input type="text" class="form-control" placeholder="Masukan Nama Anda" name="nama">
                </select>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Alamat</label>
                          <div class="form-floating">
                              <textarea class="form-control" placeholder="Masukan Alamat Anda"
                                  style="height: 100px" name="alamat"></textarea>
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
                          <select required class="form-control form-select" name="tipe_kamar_id" id="tipe_kamar_id">
                    <option selected disabled>Pilih Tipe Kamar</option>
                    @foreach ($kamar as $item)
                    <option value="{{ $item->id }}">{{ $item->tipe_kamar }}</option>
                    @endforeach
                </select>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">jumlah Kamar</label>
                          <input type="number" placeholder="Masukan Jumlah Kamar Dipesan" name="jumlah_kamar_pesan" class="form-control">
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
                          <label class="form-label">Harga</label>
                          <input type="number" placeholder="Harga Total Menginap" name="harga" class="form-control">
                      </div>
                      
                      
                      <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
            </div>
        </div>
    </div>
</div>
      
</div>
</section>

@endsection