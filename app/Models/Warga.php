<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $primaryKey = 'nik'; // Karena primary key adalah 'nik'

    protected $fillable = [
        'nama',
        'alamat',
        'no_telpon',
        // Tambahkan atribut lain yang diperlukan untuk mass assignment
    ];

    // Relasi one-to-one dengan tabel DaftarWarga
    public function daftarWarga()
    {
        return $this->hasOne(DaftarWarga::class, 'warga_id');
    }
}
