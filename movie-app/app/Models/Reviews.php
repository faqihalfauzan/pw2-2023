<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $fillable = ['film_id', 'user_id', 'rating', 'reviews', 'tanggal'];

    public function Reviews()
    {
        return $this->belongsTo(Reviews::class, 'review_id');
    }
   
}
