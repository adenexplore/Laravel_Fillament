<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    // Menambahkan properti fillable
    protected $fillable = [
        'name', // ganti dengan nama kolom yang sesuai di tabel

    ];
}