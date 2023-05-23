<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'no' => 1,
            'nama genre' => 'Dokumenter',
            'deskripsi' => 'Jenis Film yang disajikan dalam bentuk fakta dan data ',
            
        ],
        [
            'no' => 2,
            'nama genre' => 'Horor',
            'deskripsi' => 'Bercerita tentang ketakutan dan suasana yang menyeramkan di dalamnya',
            
        ],
        [
            'no' => 3,
            'nama genre' => 'Drama',
            'deskripsi' => 'Menceritakan Kehidupan nyata yang berhubungan dengan settingan',
            
        ],
        [
            'no' => 4,
            'nama genre' => 'Action',
            'deskripsi' => 'genre film yang sangat menegangkan saat ditonton',
           
        ],
        [
            'no' => 5,
            'nama genre' => 'Komedi',
            'deskripsi' => 'genre yang memancing penonton untuk tertawa',
           
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}   
