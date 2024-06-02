<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    protected $table = 'simpanan';

    protected $primaryKey = 'id';

    protected $fillable = [
        'no_anggota',
        'bulan',
        'tahun',
        'jumlah',
    ];

    protected $dates = [];

    public $timestamps = true;

    /**
     * Get the related "no_anggota" record from the "Anggota" table.
     */
    public function anggota()
{
    return $this->belongsTo(Anggota::class, 'no_anggota', 'no_anggota');
}
}
