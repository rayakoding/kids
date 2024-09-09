<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatJadwal extends Model
{
    use HasFactory;

    protected $table = 'obat_jadwal';
    protected $fillable = [
        'obat_id',
    ];

    public function user()
    {
        return $this->belongsTo(Obat::class, 'obat_id', 'id');
    }
}
