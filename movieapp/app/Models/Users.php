<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $users = [
        [
            'no' => 1,
            'nama' => 'Faqih Al Fauzan',
            'user name' => 'Elzan',
            'password' => '#hq121',
            'email' => 'faqihalfauzan550@gmail.com',
            'role' => Administator,
        ],
        [
            'no' => 2,
            'nama' => 'Fatih Mubasyir',
            'user name' => 'basyir',
            'password' => '11Fth21',
            'email' => 'Fatihmubasyir21@gmail.com',
            'role' => user,
        ],
        [
            'no' => 3,
            'nama' => 'Ahmad Yasin',
            'user name' => 'Sinnn',
            'password' => 'Sin9849',
            'email' => 'Yasinahmad123@gmail.com',
            'role' => user,
        ],
        [
            'no' => 4,
            'nama' => 'Azriel Putra Syah',
            'user name' => 'Zrielll',
            'password' => 'z62ril',
            'email' => 'Zrilputrazril@gmail.com',
            'role' => admin,
        ],
        [
            'no' => 5,
            'nama' => 'M Abdul Ghoffar',
            'user name' => 'Gfrr',
            'password' => 'g249872',
            'email' => 'Ghoffarabdul990@gmail.com',
            'role' => administator,
        ],
    ];

    public function getAllUsers()
    {
        return $this->users;
    }}
