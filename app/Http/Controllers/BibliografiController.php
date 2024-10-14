<?php

namespace App\Http\Controllers;

use App\Models\Bibliografi;
use Illuminate\Http\Request;

class BibliografiController extends Controller
{
    public function Store() {
        $bibliografi = new Bibliografi;
        $bibliografi->isbn = '3526781676';
        $bibliografi->judul = 'Yaman Kingdom';
        $bibliografi->penulis = 'Ali';
        $bibliografi->harga = 100000;
        $bibliografi->perolehan = '2010-06-12';
        $bibliografi->bibliografi_kategori_id = 3;

        if ($bibliografi->save()) {
            return 'Data Bibliografi Tersimpan';
        }
    }

    public function Display() {
        $data['records'] = Bibliografi::with('Kategori')->get();
        return view('display_bibliografi', $data);
    }

    public function Edit($id, $kolom, $value) {
        $bibliografi = Bibliografi::find($id);
        $bibliografi->$kolom = $value;
        $bibliografi->save();

        return 'Data urutan ' . $bibliografi->id . " pada kolom " . $kolom . " telah diganti dengan " . $bibliografi->$kolom;
    }

    public function Delete($id) {
        $bibliografi = Bibliografi::find($id);
        $bibliografi->delete();

        return 'Data urutan ' . $id . " telah dihapus";
    }
}
