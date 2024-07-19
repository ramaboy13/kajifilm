<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiskusiModel extends Model
{
    use HasFactory;

    protected $table = 'forumdiskusis';
    protected $primaryKey = 'diskusiID';

    protected $fillable = ['userID', 'adminID', 'topik', 'isi'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    public function replies()
    {
        return $this->hasMany(ReplyModel::class, 'diskusiID');
    }
}
