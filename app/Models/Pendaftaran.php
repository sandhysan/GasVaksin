<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pendaftaran extends Model
{
    protected $table = 'pendaftarans';
    use HasFactory;
    protected $fillable = [
        'user_id',
        'tempat_id',
        'informasi_id',
        'status'
    ];

    public function tempat(){
        return $this->belongsTo(Tempat::class,'tempat_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function informasi(){
        return $this->belongsTo(Informasi::class,'informasi_id');
    }

}
