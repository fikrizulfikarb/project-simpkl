<?php

namespace App\Models\SuperAdmin\MasterData;
use App\Models\SuperAdmin\MasterData\Role;

use App\Models\Model;

class Module extends Model
{
    protected $table = 'superadmin__module';

    public function role()
    {
        return $this->hasMany(Role::class, 'id_module');
    }

    
}
