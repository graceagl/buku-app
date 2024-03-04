<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book';
    // protected $primaryKey = 'id';
    protected $guarded = [];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'bukuID', 'id');
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'userID', 'bukuID');
    }
}
