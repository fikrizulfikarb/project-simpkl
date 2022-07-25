<?php

namespace App\Models\Instansi\MasterData;

use App\Models\ModelAuthenticate;
use App\Models\SuperAdmin\MasterData\Dataperusahaan;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use App\Models\SuperAdmin\MasterData\Prodi;
use App\Models\SuperAdmin\MasterData\Tahunajaran;
use Illuminate\Support\Carbon;

class Lowongan extends ModelAuthenticate
{
    protected $table = 'superadmin__lowongan';

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi');
    }

    public function tahunajaran()
    {
        return $this->belongsTo(Tahunajaran::class, 'id_tahunajaran');
    }

    public function dataperusahaan()
    {
        return $this->hasMany(Dataperusahaan::class, 'id_dataperusahaan');
    }

    public function perusahaan()
    {
        return $this->belongsTo(Dataperusahaan::class, 'id_dataperusahaan');
    }

    public function daftarlowongan()
    {
        return $this->hasMany(Daftarlowongan::class, 'id');
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'id_mahasisawa');
    }

    public function getTanggalPengajuanStringAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d F Y');
    }

}
