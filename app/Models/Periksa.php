<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;

    protected $table = 'periksa';
    protected $fillable = [
        'kehamilan_id',
        'periksa_ke',
        'tgl',
        'bb',
        'tfu',
        'td_a',
        'td_b',
        'imunisasi',
        'denyut',
        'hb',
        'puskesmas_id',
    ];

    public function kehamilan()
    {
        return $this->belongsTo(Kehamilan::class, 'kehamilan_id', 'id');
    }

    public function puskesmas()
    {
        return $this->belongsTo(Puskesmas::class, 'puskesmas_id', 'id');
    }
}
