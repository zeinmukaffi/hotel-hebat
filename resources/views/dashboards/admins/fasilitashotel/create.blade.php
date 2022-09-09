@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ url('fasilitashotel') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <div class="mb-3">
                          <label class="form-label">Fasilitas Hotel :)</label>
                          <input type="text" class="form-control" placeholder="Fasilitas Hotel" name="nama_fasilitas_hotel">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Deskripsi</label>
                          <div class="form-floating">
                              <textarea class="form-control" placeholder="Deskripsi"
                                  style="height: 100px" name="deskripsi"></textarea>
                          </div>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Foto</label>
                          <input type="file" placeholder="Foto" class="form-control" name="foto">
                      </div>
                      <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection