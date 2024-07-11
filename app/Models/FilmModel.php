<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmModel extends Model
{
    use HasFactory;
    // Nama tabel di database
    protected $table = 'films';

    // Kolom-kolom yang bisa diisi
    protected $fillable = [
        'judul',
        'deskripsi',
        'kategori',
        'director',
        'producer',
        'negara',
        'poster'
    ];

    // Menonaktifkan timestamps jika tidak digunakan
    public $timestamps = true;
}
