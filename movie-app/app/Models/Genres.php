<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi'];

    public function genre()
    {
        return $this->belongsTo(Genres::class, 'genre_id');
    }
   
}   
