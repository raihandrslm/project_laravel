<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Jenis;
use Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = Jenis::all();
        return view('artikel.create', compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikel                 = new Artikel;
        $artikel->judul          = $request->judul;
        $artikel->id_jenis       = $request->id_jenis;
        $artikel->deskripsi      = $request->deskripsi;
        $artikel->tanggal_terbit = $request->tanggal_terbit;
        $artikel->penulis        = $request->penulis;

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/artikel', $name);
            $artikel->foto = $name;
        }

        $artikel->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel  = Artikel::findOrFail($id);
        $jenis = Jenis::all();
        return view('artikel.edit', compact('artikel', 'jenis'));
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
        $validated = $request->validate([
            'judul' => 'required',
            'id_jenis' => 'required',
            'deskripsi' => 'required',
            'tanggal_terbit' => 'required',
            'foto' => 'nullable|mimes:jpg,png|max:1024',
            'penulis' => 'required',
        ]);

        $artikel                 = Artikel::findOrFail($id);
        $artikel->judul          = $request->judul;
        $artikel->id_jenis       = $request->id_jenis;
        $artikel->deskripsi      = $request->deskripsi;
        $artikel->tanggal_terbit = $request->tanggal_terbit;
        $artikel->penulis        = $request->penulis;

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/artikel', $name);
            $artikel->foto = $name;
        }

        $artikel->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();
        return redirect()->route('artikel.index')->with('success', 'Data Berhasil Dihapus');
    }
}
