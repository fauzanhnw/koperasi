<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    protected $table = 'jabatan';

    protected $primaryKey = 'id';

    protected $fillable = [
        'no_anggota',
        'tanggal_dipilih',
        'tanggal_berhenti',
        'sebab_berhenti',
    ];

    protected $dates = [
        'tanggal_dipilih',
        'tanggal_berhenti',
    ];

    public $timestamps = true;

    /**
     * Get the related "no_anggota" record from the "Anggota" table.
     */
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'no_anggota', 'no_anggota');
    }
}
