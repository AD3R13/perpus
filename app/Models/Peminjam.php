<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peminjam extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['nama_Peminjam', 'penerbit', 'qty', 'deskripsi', 'penulis', 'genre'];
}
