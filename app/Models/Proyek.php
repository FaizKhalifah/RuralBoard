<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;

    protected $fillable = [
        'rencana_proyek_id',

    ];


    public function daftarWargas()
    {
        return $this->hasMany(DaftarWarga::class);
    }

    public function rencanaProyek()
    {
        return $this->belongsTo(RencanaProyek::class, 'rencana_proyek_id');
    }
}
