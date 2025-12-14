<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::all();
        $total_buku = Buku::count();
        return view('buku.index', compact('buku','total_buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
          'judulBuku' => 'required|min:3',
          'penulisBuku' => 'required|min:3',
          'penerbitBuku' => 'required|min:3',
          'tahunTerbit' => 'required',
          'deskripsiBuku' => 'required',
        ]);
        
        Buku::create([
          'judulBuku' => $request->judulBuku,
          'penulisBuku' => $request->penulisBuku,
          'penerbitBuku' => $request->penerbitBuku,
          'tahunTerbit' => $request->tahunTerbit,
          'deskripsiBuku' => $request->deskripsiBuku,
        ]);
        
        return redirect()->route('buku.index')->with('success', 'Data buku berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {   
        $buku = Buku::findOrFail($id);
        $request->validate([
          'judulBuku' => 'required|min:3',
          'penulisBuku' => 'required|min:3',
          'penerbitBuku' => 'required|min:3',
          'tahunTerbit' => 'required',
          'deskripsiBuku' => 'required',
        ]);

        $buku->update([
            'judulBuku' => $request->judulBuku,
            'penulisBuku' => $request->penulisBuku,
            'penerbitBuku' => $request->penerbitBuku,
            'tahunTerbit' => $request->tahunTerbit,
            'deskripsiBuku' => $request->deskripsiBuku,
        ]);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Data berhasil dihapus!');
    }
}
