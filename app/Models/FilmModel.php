<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmModel extends Model
{
    use HasFactory;
    protected $table = 'films';

    protected $fillable = [
        'judul',
        'deskripsi',
        'kategori',
        'director',
        'producer',
        'negara',
        'poster'
    ];

    public $timestamps = true;

    public function ulasan()
    {
        return $this->hasMany(UlasanModel::class, 'film_id');
    }

    public function averageRating()
    {
        $fields = ['nilai_cerita', 'cinematography', 'nilai_audio', 'ending', 'nilai_karakter'];
        $average = 0;

        foreach ($fields as $field) {
            $average += $this->ulasan()->avg($field);
        }

        return $average / count($fields) * 10; // Skala 1-10 dikalikan 10 untuk skala 1-100
    }
}
