<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nomor_surat', 'nama_proyek', 'tanggal_pelaksanaan'];

    /**
     * Get the warga associated with the proyek.
     */
    public function warga()
    {
        return $this->belongsToMany(Warga::class, 'proyek_warga', 'proyek_id', 'warga_id');
    }
}
