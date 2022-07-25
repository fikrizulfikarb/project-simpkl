<?php

namespace App\Models\Instansi\MasterData;

use App\Models\Instansi\MasterData\Dataperusahaan;
use App\Models\ModelAuthenticate;

class Profile extends ModelAuthenticate

{
    protected $table = 'superadmin__dataperusahaan';

    public function dataperusahaan()
    {
        return $this->belongsTo(Dataperusahaan::class, 'id_dataperusahaan');
    }
}

