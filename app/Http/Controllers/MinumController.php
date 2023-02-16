<?php

namespace App\Http\Controllers;

use App\Models\Minum;
use App\Models\Resep;
use Illuminate\Http\Request;
use Alert;

class MinumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minum=Minum::all();
        return view ('admin.minum.index', compact ('minum'));
    }

    public function minumMember()
    {
        $minum=Minum::all();
        return view ('member.index2', compact ('minum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.minum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $validated = $request->validate([
            'cover' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'bahan' => 'required',
            'caramembuat' => 'required',
        ]);

        $minum = new minum;
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/minum/', $name);
            $minum->cover = $name;
        }
        $minum->nama = $request->nama;
        $minum->deskripsi = $request->deskripsi;
        $minum->bahan = $request->bahan;
        $minum->caramembuat = $request->caramembuat;
        $minum->save();
        Alert::success('minum Berhasil di Tambah', 'minum sudah masuk Database');
        return redirect('/administrator/minum');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\minum  $minum
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $minum = Minum::findOrFail($id);
        return view('admin.minum.show', compact('minum'));
    }

    public function ditel($id)
    {
        $minum = Minum::findOrFail($id);
        return view('member.show3', compact('minum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\minum  $minum
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $minum = Minum::findOrFail($id);
        return view('admin.minum.edit', compact('minum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\minum  $minum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          //validasi data
        $validated = $request->validate([
            'cover' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'bahan' => 'required',
            'caramembuat' => 'required',
        ]);

        $minum = Minum::findOrFail($id);
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/minum/', $name);
            $minum->cover = $name;
        }
        $minum->nama = $request->nama;
        $minum->deskripsi = $request->deskripsi;
        $minum->bahan = $request->bahan;
        $minum->caramembuat= $request->caramembuat;
        $minum->save();
        Alert::success('minum Berhasil Di Edit', 'minum sudah masuk Database');
        return redirect('/administrator/minum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\minum  $minum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $minum = Minum::findOrFail($id);
        $minum->delete();
        Alert::success('minum Berhasil Dihapus', 'minum Telah dihapus dari Database');
        return redirect()->route('minum.index');
    }
}