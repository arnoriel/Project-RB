<?php

namespace App\Http\Controllers;

use App\Models\resep;
use Illuminate\Http\Request;
use Alert;


class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resep=Resep::all();
        return view ('admin.resep.index', compact ('resep'));
    }

    public function resepMember()
    {
        $resep=Resep::all();
        return view ('member.index2', compact ('resep'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.resep.create');
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
            'bumbu' => 'required',
            'bahancemplung' => 'required',
            'caramembuat' => 'required',
        ]);

        $resep = new resep;
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/resep/', $name);
            $resep->cover = $name;
        }
        $resep->nama = $request->nama;
        $resep->deskripsi = $request->deskripsi;
        $resep->bahan = $request->bahan;
        $resep->bumbu = $request->bumbu;
        $resep->bahancemplung = $request->bahancemplung;
        $resep->caramembuat = $request->caramembuat;
        $resep->save();
        Alert::success('Resep Berhasil di Tambah', 'Resep sudah masuk Database');
        return redirect('/administrator/resep');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resep = Resep::findOrFail($id);
        return view('admin.resep.show', compact('resep'));
    }

    public function detail($id)
    {
        $resep = Resep::findOrFail($id);
        return view('member.show2', compact('resep'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resep = Resep::findOrFail($id);
        return view('admin.resep.edit', compact('resep'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\resep  $resep
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
            'bumbu' => 'required',
            'bahancemplung' => 'required',
            'caramembuat' => 'required',
        ]);

        $resep = Resep::findOrFail($id);
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/resep/', $name);
            $resep->cover = $name;
        }
        $resep->nama = $request->nama;
        $resep->deskripsi = $request->deskripsi;
        $resep->bahan = $request->bahan;
        $resep->bumbu= $request->bumbu;
        $resep->bahancemplung= $request->bahancemplung;
        $resep->caramembuat= $request->caramembuat;
        $resep->save();
        Alert::success('Resep Berhasil Di Edit', 'Resep sudah masuk Database');
        return redirect('/administrator/resep');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resep = Resep::findOrFail($id);
        $resep->delete();
        Alert::success('Resep Berhasil Dihapus', 'Resep Telah dihapus dari Database');
        return redirect()->route('resep.index');
    }
}