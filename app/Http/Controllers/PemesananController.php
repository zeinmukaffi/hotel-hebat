<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Kamar;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datapemesanan = Pemesanan::latest()->with('kamar');
        $pesan = Pemesanan::latest()->with('kamar');
        $kamar = Kamar::all();
        return view('dashboards.users.book', compact('kamar','pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.users.book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'nomor_kamar_id' => 'required',
            'jumlah_kamar_pesan' => 'required',
            'tanggal_checkin' => 'required',
            'tanggal_checkout'=> 'required',
            'status' => 'required',
        ]);

        Pemesanan::create([
           'nama' => $request->nama,
           'alamat' => $request->alamat,
           'email' => $request->email,
           'no_telp' => $request->no_telp,
           'nomor_kamar_id' => $request->nomor_kamar_id,
           'jumlah_kamar_pesan' => $request->jumlah_kamar_pesan,
           'tanggal_checkin' => $request->tanggal_checkin,
           'tanggal_checkout' => $request->tanggal_checkout,
           'status' => $request->status,

        ]);

        return Redirect('/usertable')->with('success', 'data berhasil ditambahkan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function downloadpdf()
    {
        $data = Pemesanan::latest()->paginate();
        $datas = [
            'title' => 'Data Pemesanan',
            'date' => date('d/m/Y'),
            'data' => $data
        ];

        $pdf = PDF::loadView('dashboards.admins.pemesanan.pdf', $datas)->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan data pemesanan.pdf');
    }
}
