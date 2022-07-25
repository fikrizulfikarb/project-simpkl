<?php

namespace App\Models\SuperAdmin\MasterData;

use App\Models\Instansi\MasterData\Lowongan;
use App\Models\Model;
use Carbon\Carbon;

class Tahunajaran extends Model
{
    protected $table = 'superadmin__tahunajaran';

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi');
    }

    public function lowongan()
    {
        return $this->hasMany(Lowongan::class, 'id_tahunajaran');
    }

    public function daftarlowongan()
    {
        return $this->hasMany(Daftarlowongan::class,'id_tahunajaran');
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'id_tahunajaran');
    }
    
    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'id');
    }

    public function getTanggalBukaStringAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_buka'])->translatedFormat('d F Y');
    }

    public function getTanggalTutupStringAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_tutup'])->translatedFormat('d F Y');
    }

}
