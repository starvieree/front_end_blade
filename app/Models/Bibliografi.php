<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bibliografi extends Model
{
    use HasFactory;

    protected $table = 'bibliografi';

    protected $fillable = [
        'isbn',
        'judul',
        'penulis',
        'harga',
        'perolehan',
        'bibliografi_kategori_id',
    ];

    public function Kategori()
    {
        return $this->belongsTo(BibliografiKategori::class, 'bibliografi_kategori_id');
    }
}
