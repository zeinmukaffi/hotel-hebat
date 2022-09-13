@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ url('kamar') }}" method="POST">
                    {{ csrf_field() }}
                      <div class="mb-3">
                          <label class="form-label">Nama Kamar</label>
                          <select class="form-control" name="tipe_kamar" required>
                    <option selected disabled>Tipe Kamar</option>
                    <option value="Deluxe">Deluxe</option>
                    <option value="Superior">Superior</option>
                </select>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Jumlah Kamar</label>
                          <input type="number" class="form-control" placeholder="Jumlah Kamar Yang Tersedia" name="jumlah_kamar">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Fasilitas Kamar</label>
                          <div class="form-floating">
                              <textarea class="form-control" placeholder="Fasilitas Kamar"
                                  style="height: 100px" name="fasilitas_kamar"></textarea>
                          </div>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Foto Kamar</label>
                          <input type="file" class="form-control" name="foto_kamar">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Harga Kamar</label>
                          <input type="number" placeholder="Harga Kamar" class="form-control" name="harga_kamar">
                      </div>
                      <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection