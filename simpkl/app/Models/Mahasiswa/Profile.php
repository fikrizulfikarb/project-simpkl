<?php

namespace App\Models\Mahasiswa;

use App\Models\SuperAdmin\MasterData\Mahasiswa;
use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;

class Profile extends ModelAuthenticate

{
    protected $table = 'superadmin__mahasiswa';

    public $fillable = ['profile'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

}
