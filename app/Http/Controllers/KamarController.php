<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = Kamar::paginate(5);
        return view('dashboards.admins.kamar.index', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.admins.kamar.create');
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
            'tipe_kamar' => 'required',
            'jumlah_kamar' => 'required',
            'fasilitas_kamar' => 'required',
            'foto_kamar' => 'required',
            'harga_kamar' => 'required',
        ]);

        Kamar::create([
            'tipe_kamar' => $request-> tipe_kamar,
            'jumlah_kamar' => $request-> jumlah_kamar,
            'fasilitas_kamar' => $request-> fasilitas_kamar,
            'foto_kamar' => $request-> foto_kamar,
            'harga_kamar' => $request-> harga_kamar
        ]);
        return redirect('kamar');
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
        $kamar = Kamar::findorfail($id);
        return view('dashboards.admins.kamar.edit', compact('kamar'));
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
        $kamar = Kamar::findorfail($id);
        $kamar -> update($request->all());
        return redirect('kamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Kamar::findorfail($id);
        $delete->delete();
        return back();
    }
}
