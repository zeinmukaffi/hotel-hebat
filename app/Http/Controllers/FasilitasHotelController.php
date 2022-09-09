<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasHotel;
use App\Http\Requests\FasilitasHotelRequest;
use Illuminate\Support\Facades\File;

class FasilitasHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FasilitasHotel::all();
        return view('dashboards.admins.fasilitashotel.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.admins.fasilitashotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FasilitasHotelRequest $request)
    {
        $data = new FasilitasHotel;
        $data->nama_fasilitas_hotel = $request->nama_fasilitas_hotel;
        $data->deskripsi = $request->deskripsi;

        if($request->file('foto')){
            $file = $request->file('foto');

            $filename = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('img', $filename);
            $data->foto = $filename;  
        }
        $data->save();

        return redirect('fasilitashotel')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = FasilitasHotel::findorfail($id);
        return view('dashboards.admins.fasilitashotel.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FasilitasHotelRequest $request, $id)
    {
        $data = FasilitasHotel::findorfail($id);
        $data->nama_fasilitas_hotel = $request->nama_fasilitas_hotel;
        $data->deskripsi = $request->deskripsi;

        if($request->file('foto')){
            $file = $request->file('foto');

            $filename = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('img', $filename);

            File::delete('foto', $data->foto);

            $data->foto = $filename;  
        }
        $data->save();

        return redirect('fasilitashotel')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = FasilitasHotel::findorfail($id);
        $data->delete();
        return redirect('fasilitashotel')->with('success', 'Data berhasil diDelete');
    }
}
