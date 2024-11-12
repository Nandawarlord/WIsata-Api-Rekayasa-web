<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    // Nama tabel yang terhubung dengan model
    protected $table = 'wisata';

    // Primary key tabel
    protected $primaryKey = 'id_wisata';

    // Menonaktifkan timestamps (created_at dan updated_at)
    public $timestamps = false;

    /**
     * Kolom yang dapat diisi secara massal.
     *
     * @var array
     */
    protected $fillable = [
        'kota', 
        'landmark', 
        'tarif',
    ];

    /**
     * Kolom yang disembunyikan saat model dikonversi ke JSON.
     *
     * @var array
     */
    protected $hidden = [];
}
