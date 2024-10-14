<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BibliografiKategori extends Model
{
    use HasFactory;

    protected $table = 'bibliografi_kategori';

    public function Bibliografi()
    {
        return $this->hasMany(Bibliografi::class);
    }
}
