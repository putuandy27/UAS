<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HandphonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $handphones = Handphone::all();

        return view('barang.index', ['handphones' => $handphones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('handphones')->insert(
            ['kode_hp' => $request->kode_hp,
            'merk' => $request->merk,
            'nama_hp' => $request->nama_hp,
            'os' => $request->os,
            'harga' => $request->harga]
        );
        return redirect('/barang')->with('status', 'Data Handphone Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Handphone  $handphone
     * @return \Illuminate\Http\Response
     */
    public function show(Handphone $handphone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Handphone  $handphone
     * @return \Illuminate\Http\Response
     */
    public function edit(Handphone $handphones)
    {
        return view('barang.edit', compact('handphones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Handphone  $handphone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Handphone $handphones)
    {
        DB::table('handphones')->where('id',$handphones->id)->update([
            'harga' => $request->harga
        ]);

        return redirect('/barang')->with('ubah', 'Data Handphone Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Handphone  $handphone
     * @return \Illuminate\Http\Response
     */

    public function hapus(Handphone $handphones)
    {
        return view('barang.hapus', compact('handphones'));
    }

    public function destroy(Handphone $handphones)
    {
        DB::table('handphones')->where('id', '=', $handphones->id)->delete();

        return redirect('/barang')->with('hapus', 'Data Handphone Berhasil Dihapus!');
    }
}
