<?php

namespace App\Models\SuperAdmin\MasterData;

use App\Models\ModelAuthenticate;
use App\Models\Instansi\MasterData\Profile;
use App\Models\Instansi\MasterData\Lowongan;
use App\Models\Instansi\MasterData\Datamagang;
use App\Models\SuperAdmin\MasterData\Role;

class Dataperusahaan extends ModelAuthenticate
{
    protected $table = 'superadmin__dataperusahaan';

    public $fillable = ['nama_perusahaan', 'email'];

    public function role()
    {
        return $this->hasMany(Role::class,'id_dataperusahaan');
    }

    public function lowongan()
    {
        return $this->hasMany(Lowongan::class,'id');
    }

    public function lowonganmagang()
    {
        return $this->hasMany(Lowongan::class,'id_dataperusahaan');
    }

    public function profile()
    {
        return $this->hasOne(profile::class, 'id_dataperusahaan');
    }

    public function daftarlowongan()
    {
        return $this->hasMany(Daftarlowongan::class, 'id');
    }

    public function datamagang()
    {
        return $this->hasOne(datamagang::class, 'id_dataperusahaan');
    }

}
