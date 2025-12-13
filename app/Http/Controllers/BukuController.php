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
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
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
        ]);
        
        Buku::create([
          'judulBuku' => $request->judulBuku,
          'penulisBuku' => $request->penulisBuku,
          'penerbitBuku' => $request->penerbitBuku,
          'tahunTerbit' => $request->tahunTerbit,
        ]);
        
        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
    }
}
