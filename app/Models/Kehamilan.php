<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehamilan extends Model
{
    use HasFactory;

    protected $table = 'kehamilan';
    protected $fillable = [
        'user_id',
        'desa_id',
        'hamil',
        'lahir',
        'aborsi',
        'hpht',
        'hpl',
        'bb',
        'tb',
        'lila',
        'imt',
        'bidan',
        'alamat_bidan',
        'status',
        'noreg',
    ];

    public function periksa()
    {
        return $this->belongsTo(Periksa::class, 'id', 'kehamilan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'desa_id', 'id');
    }
}
