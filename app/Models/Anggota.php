<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Anggota extends Model implements Authenticatable
{
    use HasFactory;

    use AuthenticatableTrait;

    protected $table = 'anggota';

    protected $primaryKey = 'nik';

    protected $fillable = array(
        'nik',
        'no_anggota',
        'nama_lengkap',
        'masa_berlaku_ktp',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat_ktp',
        'kelurahan_ktp',
        'kecamatan_ktp',
        'kota_ktp',
        'kodepos_ktp',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kota',
        'kodepos',
        'no_telepon_rumah',
        'no_telepon_hp',
        'status_tempat_tinggal',
        'menempati_alamat_tsb_sejak',
        'pendidikan_terakhir',
        'status_perkawinan',
        'nama_istri_suami',
        'jumlah_anak',
        'nama_ibu_kandung_pemohon',
        'npwp_pribadi',
        'nama_ahli_waris',
        'hubungan_ahli_waris',
        'no_telp_ext_kantor',
        'nip',
        'nomor_rekening',
        'bagian',
        'tgl_masuk_keperusahaan',
        'status_karyawan',
        'foto',
        'foto_ktp',
        'ttd',
        'id_card',
        'tanggal_daftar',
        'tanggal_gabung',
        'tanggal_berhenti',
        'tanggal_req_berhenti',
        'sebab_berhenti',
        'password',
        'role',
        'email',
        'status',
    );

    public function getAuthIdentifierName()
    {
        return 'no_anggota';
    }
    public function getAuthIdentifier()
    {
        return $this->no_anggota;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public $timestamps = true;
    public function simpanan()
    {
        return $this->hasMany(Simpanan::class, 'no_anggota');
    }
    
}
