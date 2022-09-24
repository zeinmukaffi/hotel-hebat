@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Table Pemesanan</h6>

                <a href="{{ url('downloadpdfpemesanan') }}" class=" btn btn-success">Cetak PDF</a>
                
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    No</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nama Customer</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Alamat Customer</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Email</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nomor Telepon</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tipe Kamar</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Jumlah Kamar</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal Checkin</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal Checkout</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datapemesanan as $index => $item)
                            <tr>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0 text-center">
                                        {{ $loop -> iteration }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0 text-center">
                                        {{ $item -> nama }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0 text-center">
                                        {{ $item -> alamat }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0 text-center">
                                        {{ $item -> email }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0 text-center">
                                        {{ $item -> no_telp }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0 text-center">
                                        {{ $item -> kamar -> tipe_kamar }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0 text-center">
                                        {{ $item -> jumlah_kamar }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0 text-center">
                                        {{ $item -> tanggal_checkin }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0 text-center">
                                        {{ $item -> tanggal_checkout }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0 text-center">
                                        {{ $item -> harga }}
                                    </p>
                                </td>
                              
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Create -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kamar</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('kamar') }}" method="POST">
                    {{ csrf_field() }}
                      <div class="mb-3">
                          <label class="form-label">Nama Kamar</label>
                          <input type="text" class="form-control" placeholder="Nama Kamar" name="tipe_kamar">
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
                          <input type="text" class="form-control" name="foto_kamar">
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