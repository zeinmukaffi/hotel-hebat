@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ url('fasilitashotel/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                      <div class="mb-3">
                          <label class="form-label">Fasilitas Hotel</label>
                          <input type="text" class="form-control" placeholder="Fasilitas Hotel" name="nama_fasilitas_hotel" value="{{ $data->nama_fasilitas_hotel }}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Deskripsi</label>
                          <div class="form-floating">
                              <textarea class="form-control" placeholder="Fasilitas Kamar"
                                  style="height: 100px" name="deskripsi">{{ $data->deskripsi }}</textarea>
                          </div>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Foto Kamar</label>
                          <input type="file" class="form-control" name="foto" value="{{ $data->foto }}">
                            @if(strlen($data->foto)>0)
                                {{ $data->foto }}
                            @endif
                      </div>
                      <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection