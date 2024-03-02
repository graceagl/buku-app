<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class simpan extends Model
{
    use HasFactory;
    protected $table = "simpan";
    protected $fillable = [
        'user_id',
        'book_id',
        'status',
    ];
}
