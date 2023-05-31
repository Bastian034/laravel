<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pindah extends Model
{
    use HasFactory;
    protected $table='pindah';
    protected $fillable = [
        'nama_jemaat',
        'tempat_lahir',
        'tanggal_lahir',
        'gender',
        'golongan_darah',
        'alamat',
        'no_hp',
        'gereja',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
