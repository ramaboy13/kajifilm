<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyModel extends Model
{
    use HasFactory;

    protected $table = 'replies';
    protected $primaryKey = 'replyID';

    protected $fillable = ['userID', 'diskusiID', 'isireply'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    public function diskusi()
    {
        return $this->belongsTo(DiskusiModel::class, 'diskusiID');
    }
}
