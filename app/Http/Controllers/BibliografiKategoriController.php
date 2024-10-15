<?php

namespace App\Http\Controllers;

use App\Models\BibliografiKategori;
use Illuminate\Http\Request;

class BibliografiKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['bibliografiKategori'] = BibliografiKategori::latest()->paginate(10);
        return view('bibliografiKategori.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bibliografiKategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required|string|max:255'
        ]);

        $bibliografiKategori = BibliografiKategori::create([
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()
            ->route('bibliografiKategori.index')
            ->with('message', 'New user created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(BibliografiKategori $bibliografiKategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BibliografiKategori $bibliografiKategori)
    {
        return view('bibliografiKategori.edit', compact('bibliografiKategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BibliografiKategori $bibliografiKategori)
    {
        $request->validate([
            'deskripsi' => 'required|string|max:255'
        ]);

        $bibliografiKategori->deskripsi = $request->deskripsi;

        $bibliografiKategori->save();

        return redirect()
            ->route('bibliografiKategori.index')
            ->with('message', 'Bibliografi kategori updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BibliografiKategori $bibliografiKategori)
    {
        $bibliografiKategori->delete();
        return redirect()
            ->route('bibliografiKategori.index')
            ->with('message', 'Bibliografi kategori deleted successfully');
    }
}
