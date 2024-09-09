<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;

    protected $table = 'desa';
    protected $fillable = [
        'nama',
        'puskesmas_id',
    ];

    public function puskesmas()
    {
        return $this->belongsTo(Puskesmas::class, 'puskesmas_id', 'id');
    }
}
