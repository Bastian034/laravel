<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class baptis extends Model
{
    use HasFactory;
    protected $table='baptis';
    protected $fillable = [
        'nama_lengkap',
        'nama_ayah',
        'nama_ibu',
        'tempat_lahir',
        'tanggal_lahir',
        'tanggal_bapits'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
