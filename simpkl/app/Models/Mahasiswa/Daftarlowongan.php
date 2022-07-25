<?php

namespace App\Models\Mahasiswa;

use App\Models\Model2;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use App\Models\SuperAdmin\MasterData\Prodi;
use App\Models\SuperAdmin\MasterData\Dataperusahaan;
use App\Models\Instansi\MasterData\Lowongan;
use Illuminate\Support\Carbon;

class Daftarlowongan extends Model2
{
    protected $table = 'superadmin__daftarlowongan';

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id');
    }

    public function lowongan()
    {
        return $this->hasMany(Lowongan::class, 'id_lowongan');
    }

    public function perusahaan()
    {
        return $this->hasMany(Dataperususahaan::class, 'id_dataperususahaan');
    }

    public function getTanggalPengajuanStringAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d F Y');
    }

}