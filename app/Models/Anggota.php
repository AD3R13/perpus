<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anggota extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['nama_anggota', 'email', 'no_tlp', 'id_level'];
    public function level()
    {
        return $this->belongsTo(Level::class, 'id_level', 'id');
    }
}
