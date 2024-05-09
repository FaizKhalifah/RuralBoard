<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['NIK', 'nama', 'alamat', 'nomor_telepon'];

    /**
     * Get the proyek associated with the warga.
     */
    public function proyek()
    {
        return $this->belongsToMany(Proyek::class, 'proyek_warga', 'warga_id', 'proyek_id');
    }
}
