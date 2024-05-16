<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RencanaProyek extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'budget',
        'tanggal_pelaksanaan',
    ];


    public function proyek()
    {
        return $this->hasOne(Proyek::class);
    }
}
