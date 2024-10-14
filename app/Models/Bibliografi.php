<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bibliografi extends Model
{
    use HasFactory;

    protected $table = 'bibliografi';

    public function Kategori()
    {
        return $this->belongsTo(BibliografiKategori::class, 'bibliografi_kategori_id');
    }
}
