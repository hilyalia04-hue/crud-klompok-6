<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('pelanggans.index', compact('pelanggans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_pelanggan' => 'required|unique:pelanggans,kode_pelanggan',
            'nama' => 'required',
            'kategori' => 'required',
            'email' => 'required|email|unique:pelanggans,email',
            'tanggal_daftar' => 'required|date',
            'alamat' => 'required',
            'keterangan' => 'nullable',
        ]);

        Pelanggan::create($request->all());

        return redirect()->route('pelanggans.index')
                         ->with('success', 'Pelanggan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggans.edit', compact('pelanggan'));
     }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $request->validate([
            'kode_pelanggan' => 'required|unique:pelanggans,kode_pelanggan,' . $pelanggan->id,
            'nama' => 'required',
            'kategori' => 'required',
            'email' => 'required|email|unique:pelanggans,email,' . $pelanggan->id,
            'tanggal_daftar' => 'required|date',
            'alamat' => 'required',
            'keterangan' => 'nullable',
        ]);
        $pelanggan->update($request->all());
        return redirect()->route('pelanggans.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       pelanggan::findOrFail($id)->delete();
       return redirect()->route('pelanggans.index');
    }

}
