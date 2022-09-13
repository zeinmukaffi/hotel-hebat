@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ url('kamar',$kamar->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                      <div class="mb-3">
                          <label class="form-label">Nama Kamar</label>
                          <input type="text" class="form-control" placeholder="Nama Kamar" name="tipe_kamar" value="{{ $kamar->tipe_kamar }}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Jumlah Kamar</label>
                          <input type="number" class="form-control" placeholder="Jumlah Kamar Yang Tersedia" name="jumlah_kamar" value="{{ $kamar->jumlah_kamar }}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Fasilitas Kamar</label>
                          <div class="form-floating">
                              <textarea class="form-control" placeholder="Fasilitas Kamar"
                                  style="height: 100px" name="fasilitas_kamar">{{ $kamar->fasilitas_kamar }}</textarea>
                          </div>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Foto Kamar</label>
                          <br>
                          <img src="{{ asset('img/'. $kamar->foto_kamar) }}" style="width: 200px; margin-bottom: 20px" alt="">
                          <input type="file" class="form-control" name="foto_kamar">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Harga Kamar</label>
                          <input type="number" placeholder="Harga Kamar" class="form-control" name="harga_kamar" value="{{ $kamar->harga_kamar }}">
                      </div>
                      <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                  </form>
            </div>
        </div>
    </div>
    @endsection