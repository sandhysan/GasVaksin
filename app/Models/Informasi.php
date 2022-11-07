<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    protected $table = 'informasis';
    use HasFactory;
    protected $fillable = [
        'user_id',
        'judul',
        'potongan_konten',
        'konten'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
