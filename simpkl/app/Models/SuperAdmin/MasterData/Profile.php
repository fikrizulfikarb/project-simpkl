<?php

namespace App\Models\SuperAdmin\MasterData;

use App\Models\SuperAdmin\MasterData\Pegawai;
use App\Models\ModelAuthenticate;

class Profile extends ModelAuthenticate

{
    protected $table = 'superadmin__pegawai';

    public $fillable = ['profile'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
