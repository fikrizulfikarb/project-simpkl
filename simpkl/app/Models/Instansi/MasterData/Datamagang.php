<?php

namespace App\Models\Instansi\MasterData;

use App\Models\Instansi\MasterData\Dataperusahaan;
use App\Models\Model;

class Datamagang extends Model
{
    public function dataperusahaan()
    {
        return $this->belongsTo(Dataperusahaan::class, 'id_dataperusahaan');
    }

    
}
