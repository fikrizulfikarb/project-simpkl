<?php

namespace App\Models\SuperAdmin\MasterData;
use App\Models\SuperAdmin\MasterData\Jurusan;
use App\Models\Instansi\MasterData\Lowongan;
use App\Models\Model;
use App\Models\SuperAdmin\MasterData\Pegawai;

use App\Models\ModelAuthenticate;

class Prodi extends Model
{
    protected $table = 'superadmin__jurusan__prodi';

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    public function lowongan()
    {
        return $this->hasMany(Lowongan::class, 'id_prodi');
    }

    public function daftarlowongan()
    {
        return $this->hasMany(Daftarlowongan::class,'id_prodi');
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'id_prodi');
    }

    public function tahunajaran()
    {
        return $this->hasMany(Tahunajaran::class, 'id_prodi');
    }

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'id');
    }

    // public function namajurusan()
    // {
    //     return $this->hasOne(Jurusan::class, 'id_prodi');
    // }
}