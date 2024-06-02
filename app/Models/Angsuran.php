<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    protected $table = 'angsuran';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_pinjaman',
        'angsuran_ke',
        'jumlah_bayar',
        'sisa_angsuran',
        'status_angsuran',
        'tanggal_bayar',
    ];

    // Define the relationship with the "pinjaman_biasa" table
    public function pinjaman()
    {
        return $this->belongsTo(Pinjaman::class, 'id_pinjaman');
    }
}
