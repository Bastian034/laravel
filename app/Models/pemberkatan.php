<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pemberkatan extends Model
{
    use HasFactory;
    protected $table='pemberkatan';
    protected $fillable = [
        'nama_jemaat',
        'tempat_lahir',
        'tanggal_lahir',
        'gender',
        'alamat',
        'no_hp'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
