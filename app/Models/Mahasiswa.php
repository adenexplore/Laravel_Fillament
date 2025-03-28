<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'name',
        'jurusan_id', // ganti dengan nama kolom yang sesuai di tabel

    ];

    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(jurusan::class);
    }
}