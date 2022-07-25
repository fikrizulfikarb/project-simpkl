<?php

namespace App\Models\SuperAdmin\MasterData;
use App\Models\SuperAdmin\MasterData\Prodi;
// use App\Models\SuperAdmin\MasterData\Pegawai;

use App\Models\ModelAuthenticate;

class Jurusan extends ModelAuthenticate
{
    protected $table = 'superadmin__jurusan';

    public $fillable = ['nama_jurusan'];

    public function prodi()
    {
        return $this->hasMany(Prodi::class, 'id_jurusan');
    }

    // public function nama_koor()
    // {
    //     return $this->hasOne(Prodi::class, 'id_jurusan');
    // }
}