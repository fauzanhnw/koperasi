<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    use HasFactory;

    protected $table = 'pinjaman';
    protected $primaryKey = 'id';
    protected $fillable = [
        'no_anggota',
        'nama',
        'bagian',
        'alamat',
        'no_telp',
        'pekerjaan',
        'besar_pinjaman',
        'besar_angsuran',
        'tanggal_pengajuan',
        'nomor_rekening',
        'email',
        'bunga',
        'total_pinjaman',
        'alasan_pinjaman',
        'status_pinjaman',
        'jenis_pinjaman'
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'no_anggota', 'no_anggota');
    }

    public function angsuran()
    {
        return $this->hasMany(Angsuran::class, 'id_pinjaman');
    }
}
