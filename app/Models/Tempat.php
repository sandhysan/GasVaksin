<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    protected $table = 'tempats';
    use HasFactory;
    protected $fillable = [
        'id',
        'provinsi',
        'nama_tempat',
        'alamat_tempat',
        'link_lokasi',
        'tanggal',
        'jam',
        'kuota',
        'tahap',
        'user_id'
    ];

}
