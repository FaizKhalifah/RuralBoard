<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarWarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'proyek_id',
        'nik',
        // Tambahkan atribut lain yang diperlukan untuk mass assignment
    ];

    // Relasi one-to-one dengan tabel Warga
    public function warga()
    {
        return $this->hasOne(Warga::class);
    }

    // Relasi many-to-one dengan tabel Proyek
    public function proyek()
    {
        return $this->belongsTo(Proyek::class);
    }
}
