<?php

namespace App\Http\Controllers;

use App\Models\Bibliografi;
use App\Models\BibliografiKategori;
use Illuminate\Http\Request;

class BibliografiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['bibliografis'] = Bibliografi::with('Kategori')->latest()->paginate(10);
        return view('bibliografi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['bibliografis'] = BibliografiKategori::latest()->paginate(10);
        return view('bibliografi.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'isbn' => 'required|numeric|digits_between:10,13|unique:bibliografi,isbn', 
            'judul' => 'required|string|max:255', 
            'penulis' => 'required|string|max:255', 
            'harga' => 'required|numeric|min:0', 
            'perolehan' => 'required|string|max:255', 
            'bibliografi_kategori_id' => 'required|exists:bibliografi_kategori,id'
        ]);

        $bibliografi = Bibliografi::create([
            'isbn' => $request->isbn,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'perolehan' => $request->perolehan,
            'bibliografi_kategori_id' => $request->bibliografi_kategori_id,
        ]);

        return redirect()
            ->route('bibliografi.index')
            ->with('message', 'New bibliografi created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bibliografi $bibliografi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bibliografi $bibliografi)
    {
        $data['bibliografis'] = BibliografiKategori::latest()->paginate(10);
        return view('bibliografi.edit', compact('bibliografi'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bibliografi $bibliografi)
    {
        $request->validate([
            'isbn' => 'required|numeric|digits_between:10,13', 
            'judul' => 'required|string|max:255', 
            'penulis' => 'required|string|max:255', 
            'harga' => 'required|numeric|min:0', 
            'perolehan' => 'required|string|max:255', 
            'bibliografi_kategori_id' => 'required|exists:bibliografi_kategori,id'
        ]);

        $bibliografi->isbn = $request->isbn;
        $bibliografi->judul = $request->judul;
        $bibliografi->penulis = $request->penulis;
        $bibliografi->harga = $request->harga;
        $bibliografi->perolehan = $request->perolehan;
        $bibliografi->bibliografi_kategori_id = $request->bibliografi_kategori_id;

        $bibliografi->save();

        return redirect()
            ->route('bibliografi.index')
            ->with('message', 'Bibliografi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bibliografi $bibliografi)
    {
        $bibliografi->delete();
        return redirect()
            ->route('bibliografi.index')
            ->with('message', 'Bibliografi deleted successfully');
    }
}
