@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Table Fasilitas Hotel</h6>
                <a href="{{ url('fasilitashotel/create') }}" class=" btn btn-success">Tambah Data Kamar</a>
                <a href="{{ url('downloadpdffasilitashhotel') }}" class=" btn btn-success">Cetak PDF</a>
            </div>
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
                                    Nama Fasilitas</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Deskripsi</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Foto</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Options</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0 text-center">
                                        {{ $loop -> iteration }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0 text-center">
                                        {{ $item -> nama_fasilitas_hotel }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0 text-center">
                                        {{ $item -> deskripsi }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <img src="{{ asset('img/'.$item->foto) }}" style="width: 80px">
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <a href="{{ url('fasilitashotel/'.$item->id.'/edit') }}" class="btn btn-icon btn-warning"><i
                                            class="fas fa-pen"></i></a>
                                    <form action="{{ url('fasilitashotel',$item->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-icon btn-danger delete"
                                            data-name="{{ $item->tipe_kamar }}"><i class="fas fa-trash"></i></button>
                                    </form>

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
@endsection
