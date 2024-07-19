<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UlasanModel extends Model
{
    use HasFactory;
    protected $table = 'mengulas';

    protected $fillable = [
        'rating',
        'ulasan',
        'nilai_cerita',
        'nilai_audio',
        'nilai_karakter',
        'cinematography',
        'ending',
        'film_id',
        'user_id',
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function film()
    {
        return $this->belongsTo(FilmModel::class, 'film_id');
    }
}

