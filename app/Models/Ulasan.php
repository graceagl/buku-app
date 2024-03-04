<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;
    protected $table = 'ulasan';

    protected $fillable = [
        'userID',
        'bukuID',
        'ulasan',
        'rating'
    ];

    public function buku()
    {
        return $this->belongsTo(Book::class, 'bukuID', 'ulasanID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'id');
    }
}
